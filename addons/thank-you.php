<?php
// تحديد اللغة الحالية
$current_lang = isset($_GET['lang']) ? $_GET['lang'] : 'ar';

// تحميل ملف الترجمة المناسب
include_once "../translations/{$current_lang}.php";

// تحديد الصفحة الحالية لتفعيل العنصر في شريط التنقل
$page = 'contact';
?>

<!DOCTYPE html>
<html lang="<?php echo $current_lang; ?>" dir="<?php echo $current_lang == 'ar' ? 'rtl' : 'ltr'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $translations['thank_you_page_title']; ?></title>
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
    <style>
        /* Any additional RTL-specific styles that can't be handled by Tailwind */
        body {
            font-family: 'Cairo', sans-serif;
        }
    </style>
    <?php endif; ?>
    <!-- Font for Arabic -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="<?php echo $current_lang == 'ar' ? 'font-cairo' : ''; ?> bg-gray-50">
    

    <!-- Thank You Content -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <!-- Success Icon -->
                <div class="mx-auto w-24 h-24 bg-green-100 rounded-full flex items-center justify-center mb-8">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                
                <h1 class="text-3xl md:text-4xl font-bold text-secondary mb-4"><?php echo $translations['thank_you']; ?></h1>
                <p class="text-xl text-gray-600 mb-8"><?php echo $translations['thank_you_message']; ?></p>
                
                <div class="bg-gray-50 rounded-lg p-6 border border-gray-100 mb-8">
                    <p class="text-gray-700 mb-4"><?php echo $translations['what_happens_next']; ?></p>
                    <ul class="text-left space-y-3 max-w-md mx-auto">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-3 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span><?php echo $translations['next_step_1']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-3 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span><?php echo $translations['next_step_2']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary mr-3 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span><?php echo $translations['next_step_3']; ?></span>
                        </li>
                    </ul>
                </div>
                
                <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4 <?php echo $current_lang == 'ar' ? 'sm:space-x-reverse' : ''; ?>">
                    <a href="../index.php?lang=<?php echo $current_lang; ?>" class="bg-primary text-white px-8 py-3 rounded-lg font-medium text-center hover:bg-opacity-90 transition-colors">
                        <?php echo $translations['back_to_home']; ?>
                    </a>
                    <a href="../features.php?lang=<?php echo $current_lang; ?>" class="bg-white border border-gray-300 text-secondary px-8 py-3 rounded-lg font-medium text-center hover:bg-gray-50 transition-colors">
                        <?php echo $translations['explore_features']; ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

</body>
</html>