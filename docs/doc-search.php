<?php
// تحديد اللغة الحالية
$current_lang = isset($_GET['lang']) ? $_GET['lang'] : 'ar';

// تحميل ملف الترجمة المناسب
include_once "translations/{$current_lang}.php";

// الحصول على مصطلح البحث إذا كان موجوداً
$search_term = isset($_GET['q']) ? trim($_GET['q']) : '';
$search_results = [];

// إجراء البحث إذا تم إدخال مصطلح البحث
if (!empty($search_term)) {
    $search_results = searchDocs($search_term);
}

header('Content-Type: application/json');
echo json_encode($search_results);
?>