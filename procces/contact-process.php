<?php
// تحديد اللغة الحالية
$current_lang = isset($_GET['lang']) ? $_GET['lang'] : 'ar';

// تحميل ملف الترجمة المناسب
include_once "translations/{$current_lang}.php";

// التحقق من وجود بيانات POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // جمع البيانات من النموذج
    $contactData = [
        'id' => uniqid(), // إنشاء ID فريد لكل رسالة
        'name' => isset($_POST['name']) ? $_POST['name'] : '',
        'email' => isset($_POST['email']) ? $_POST['email'] : '',
        'phone' => isset($_POST['phone']) ? $_POST['phone'] : '',
        'subject' => isset($_POST['subject']) ? $_POST['subject'] : '',
        'message' => isset($_POST['message']) ? $_POST['message'] : '',
        'terms' => isset($_POST['terms']) ? true : false,
        'date_submitted' => date('Y-m-d H:i:s'),
        'status' => 'new' // إضافة حالة جديدة للرسالة لتتبعها
    ];

    // إنشاء مجلد للبيانات إذا لم يكن موجودًا
    $dataDir = 'data/contacts';
    if (!file_exists($dataDir)) {
        mkdir($dataDir, 0777, true);
    }

    // اسم ملف JSON الرئيسي
    $mainJsonFile = $dataDir . '/all_contacts.json';
    
    // قراءة الملف الحالي إذا كان موجودًا
    $allContacts = [];
    if (file_exists($mainJsonFile)) {
        $jsonContent = file_get_contents($mainJsonFile);
        if (!empty($jsonContent)) {
            $allContacts = json_decode($jsonContent, true);
            
            // التحقق من أن الملف تم فك تشفيره بشكل صحيح
            if ($allContacts === null && json_last_error() !== JSON_ERROR_NONE) {
                // إذا كان هناك خطأ في تنسيق JSON، نبدأ بمصفوفة فارغة
                $allContacts = [];
            }
        }
    }
    
    // إضافة الرسالة الجديدة إلى المصفوفة
    $allContacts[] = $contactData;
    
    // تحويل البيانات إلى JSON وحفظها في الملف
    $jsonData = json_encode($allContacts, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    
    if (file_put_contents($mainJsonFile, $jsonData)) {
        // إنشاء ملف بصيغة log للسجل (اختياري)
        $logEntry = date('Y-m-d H:i:s') . " - New contact from: {$contactData['name']} (ID: {$contactData['id']})\n";
        file_put_contents($dataDir . '/contacts_log.txt', $logEntry, FILE_APPEND);
        
        // إرسال رسالة بريد إلكتروني إشعار (اختياري)
        // mail('admin@softlms.online', 'New Contact Form Submission', "New contact from: {$contactData['name']}\nEmail: {$contactData['email']}\nSubject: {$contactData['subject']}");
        
        // تعيين رسالة نجاح
        $successMessage = $translations['contact_success'];
        
        // إعادة توجيه المستخدم إلى صفحة شكرًا بعد النجاح
        header("Location: ../addons/thank-you.php?success=1&lang={$current_lang}");
        exit;
    } else {
        // تعيين رسالة خطأ
        $errorMessage = $translations['contact_error'];
        
        // إعادة توجيه المستخدم إلى صفحة الاتصال مع رسالة خطأ
        header("Location: contact.php?error=1&lang={$current_lang}");
        exit;
    }
} else {
    // إذا لم يتم استدعاء الصفحة بواسطة POST، إعادة توجيه إلى صفحة الاتصال
    header("Location: contact.php?lang={$current_lang}");
    exit;
}
?>