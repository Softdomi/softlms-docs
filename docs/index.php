<?php
// تحديد اللغة الحالية
$current_lang = isset($_GET['lang']) ? $_GET['lang'] : 'ar';

// تحميل ملف الترجمة المناسب
include_once "translations/{$current_lang}.php";

// تحديد الصفحة الحالية لتفعيل العنصر في شريط التنقل
$page = 'docs';

// تحديد القسم الحالي (التبويب النشط)
$active_section = isset($_GET['section']) ? $_GET['section'] : 'user-account';
?>

<!DOCTYPE html>
<html lang="<?php echo $current_lang; ?>" dir="<?php echo $current_lang == 'ar' ? 'rtl' : 'ltr'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $translations['docs_page_title']; ?></title>
        <!-- addons -->
        <link rel="stylesheet" href="styles.css">
    <script src="scripts.js"></script>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#f4921d', // Orange from logo
                        secondary: '#0f2a45', // Dark blue from logo
                    }
                }
            }
        }
    </script>
    <!-- Custom styles for RTL -->
    <?php if ($current_lang == 'ar'): ?>
    <?php endif; ?>
    <!-- Font for Arabic -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Highlight.js for code blocks -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/atom-one-dark.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
</head>
<body class="<?php echo $current_lang == 'ar' ? 'font-cairo' : ''; ?> bg-gray-50">
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>
    
<!-- Header -->
   <?php include 'header.php'; ?>

    <!-- Main Documentation Area -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-col lg:flex-row">
                    <!-- Sidebar -->
                     <?php include 'sidebar.php'; ?>
                    
                    <!-- Main Content Area - Just a placeholder -->
                    <div class="lg:w-3/4 lg:pl-8 <?php echo $current_lang == 'ar' ? 'lg:pr-8 lg:pl-0' : ''; ?>">
                        <div class="bg-white rounded-lg shadow-md p-6 lg:p-8">
                            <div class="text-center p-10">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 mx-auto text-gray-300 mb-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                                <h3 class="text-2xl font-bold text-gray-500 mb-4"><?php echo $translations['select_documentation_section']; ?></h3>
                                <p class="text-gray-500"><?php echo $translations['select_section_message']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>
</html>