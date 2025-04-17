<?php
// تحديد اللغة الحالية
$current_lang = isset($_GET['lang']) ? $_GET['lang'] : 'ar';

// تحميل ملف الترجمة المناسب
include_once "translations/{$current_lang}.php";

// تحديد الصفحة الحالية لتفعيل العنصر في شريط التنقل
$page = 'home';
?>

<!DOCTYPE html>
<html lang="<?php echo $current_lang; ?>" dir="<?php echo $current_lang == 'ar' ? 'rtl' : 'ltr'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $translations['page_title']; ?></title>
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
    
    <?php include 'components/navbar.php'; ?>

<!-- Hero Section -->
<section id="hero" class="py-20 bg-secondary text-white relative overflow-hidden">
    <!-- Gradient Background Elements -->
    <div class="absolute -top-24 -right-24 w-96 h-96 bg-primary opacity-20 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-primary opacity-10 rounded-full blur-3xl"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-12 md:mb-0 px-2 md:px-8">
                <h1 class="text-xl md:text-5xl font-bold mb-6 leading-tight">
                    <?php echo $translations['hero_title']; ?>
                </h1>
                <p class="text-xl mb-8 text-gray-200 leading-relaxed">
                    <?php echo $translations['hero_subtitle']; ?>
                </p>
                
                <!-- Feature Highlights -->
                <div class="space-y-4 mb-10">
                    <div class="flex items-start">
                        <div class="bg-primary bg-opacity-20 p-2 rounded-full   <?php echo $current_lang == 'ar' ? 'ml-3' : 'mr-3'; ?> mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p><?php echo $translations['hero_feature1']; ?></p>
                    </div>
                  
                    <div class="flex items-start">
                        <div class="bg-primary bg-opacity-20 p-2 rounded-full   <?php echo $current_lang == 'ar' ? 'ml-3' : 'mr-3'; ?> mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p><?php echo $translations['hero_feature2']; ?></p>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-primary bg-opacity-20 p-2 rounded-full   <?php echo $current_lang == 'ar' ? 'ml-3' : 'mr-3'; ?> mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p><?php echo $translations['hero_feature3']; ?></p>
                    </div>
                </div>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 <?php echo $current_lang == 'ar' ? 'sm:space-x-reverse' : ''; ?>">
                    <a href="demo.php" class="bg-primary text-white px-8 py-3 rounded-lg font-medium text-center hover:bg-opacity-90 transition-colors">
                        <?php echo $translations['request_demo']; ?>
                    </a>
                    <a href="features.php" class="bg-white text-secondary px-8 py-3 rounded-lg font-medium text-center hover:bg-gray-100 transition-colors">
                        <?php echo $translations['learn_more']; ?>
                    </a>
                </div>
            </div>
            
            <!-- Dashboard/Platform Preview Image -->
            <div class="md:w-1/2 md:ps-10">
                <div class="relative">
                    <!-- Main Platform Image -->
                    <img src="assets/images/platform-preview.png" alt="SoftLMS Dashboard" class="rounded-lg shadow-2xl w-full">
                    
                    <!-- Floating Cards -->
                    <div class="absolute -top-10  bg-white text-secondary p-4 rounded-lg shadow-lg <?php echo $current_lang == 'ar' ? '-right-5' : '-left-5 '; ?> hidden md:block">
                        <div class="flex items-center">
                            <div class="bg-primary bg-opacity-20 p-2 rounded-full   <?php echo $current_lang == 'ar' ? 'ml-3' : 'mr-3'; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold"><?php echo $translations['hero_card1_title']; ?></p>
                                <p class="text-xs"><?php echo $translations['hero_card1_text']; ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="absolute -bottom-8  bg-white text-secondary p-4 rounded-lg shadow-lg hidden md:block <?php echo $current_lang == 'ar' ? '-left-0' : '-right-0'; ?>">
                        <div class="flex items-center">
                            <div class="bg-primary bg-opacity-20 p-2 rounded-full   <?php echo $current_lang == 'ar' ? 'ml-3' : 'mr-3'; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold"><?php echo $translations['hero_card2_title']; ?></p>
                                <p class="text-xs"><?php echo $translations['hero_card2_text']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




 <!-- Clients Section -->
<section id="clients" class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-center text-2xl font-medium text-gray-600 mb-8"><?php echo $translations['trusted_by']; ?></h2>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 justify-center items-center">
            <!-- مؤسسات عربية وأجنبية واقعية -->
            <div class="flex flex-col items-center justify-center transition-all hover:text-primary">
                <div class="text-xl font-bold text-center text-gray-700 hover:text-primary transition-colors">
                    العباقرة
                </div>
                <p class="text-sm text-gray-500 mt-1"><?php echo $current_lang == 'ar' ? 'مصر' : 'Egypt'; ?></p>
            </div>
            
            <div class="flex flex-col items-center justify-center transition-all hover:text-primary">
                <div class="text-xl font-bold text-center text-gray-700 hover:text-primary transition-colors">
                    EduLearn
                </div>
                <p class="text-sm text-gray-500 mt-1"><?php echo $current_lang == 'ar' ? 'الولايات المتحدة' : 'USA'; ?></p>
            </div>
            
            <div class="flex flex-col items-center justify-center transition-all hover:text-primary">
                <div class="text-xl font-bold text-center text-gray-700 hover:text-primary transition-colors">
                    المعرفة
                </div>
                <p class="text-sm text-gray-500 mt-1"><?php echo $current_lang == 'ar' ? 'الإمارات' : 'UAE'; ?></p>
            </div>
            
            <div class="flex flex-col items-center justify-center transition-all hover:text-primary">
                <div class="text-xl font-bold text-center text-gray-700 hover:text-primary transition-colors">
                    Skillshare
                </div>
                <p class="text-sm text-gray-500 mt-1"><?php echo $current_lang == 'ar' ? 'بريطانيا' : 'UK'; ?></p>
            </div>
            
            <div class="flex flex-col items-center justify-center transition-all hover:text-primary">
                <div class="text-xl font-bold text-center text-gray-700 hover:text-primary transition-colors">
                    الأوائل
                </div>
                <p class="text-sm text-gray-500 mt-1"><?php echo $current_lang == 'ar' ? 'السعودية' : 'Saudi Arabia'; ?></p>
            </div>
            
            <div class="flex flex-col items-center justify-center transition-all hover:text-primary">
                <div class="text-xl font-bold text-center text-gray-700 hover:text-primary transition-colors">
                    TechPath
                </div>
                <p class="text-sm text-gray-500 mt-1"><?php echo $current_lang == 'ar' ? 'كندا' : 'Canada'; ?></p>
            </div>
            
            <div class="flex flex-col items-center justify-center transition-all hover:text-primary">
                <div class="text-xl font-bold text-center text-gray-700 hover:text-primary transition-colors">
                    التفوق
                </div>
                <p class="text-sm text-gray-500 mt-1"><?php echo $current_lang == 'ar' ? 'الأردن' : 'Jordan'; ?></p>
            </div>
            
            <div class="flex flex-col items-center justify-center transition-all hover:text-primary">
                <div class="text-xl font-bold text-center text-gray-700 hover:text-primary transition-colors">
                    LearnX
                </div>
                <p class="text-sm text-gray-500 mt-1"><?php echo $current_lang == 'ar' ? 'ألمانيا' : 'Germany'; ?></p>
            </div>
            
            <div class="flex flex-col items-center justify-center transition-all hover:text-primary">
                <div class="text-xl font-bold text-center text-gray-700 hover:text-primary transition-colors">
                    النهضة
                </div>
                <p class="text-sm text-gray-500 mt-1"><?php echo $current_lang == 'ar' ? 'الكويت' : 'Kuwait'; ?></p>
            </div>
            
            <div class="flex flex-col items-center justify-center transition-all hover:text-primary">
                <div class="text-xl font-bold text-center text-gray-700 hover:text-primary transition-colors">
                    EduPro
                </div>
                <p class="text-sm text-gray-500 mt-1"><?php echo $current_lang == 'ar' ? 'أستراليا' : 'Australia'; ?></p>
            </div>
        </div>
    </div>
</section>



    
<!-- Features Section -->
<section id="features" class="py-20 bg-gray-50 overflow-hidden">
    <div class="container mx-auto px-4 md:px-16 relative">
        <!-- Decorative elements -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-primary opacity-5 rounded-full transform translate-x-1/2 -translate-y-1/3"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-primary opacity-5 rounded-full transform -translate-x-1/3 translate-y-1/4"></div>
        
        <!-- Section Header -->
        <div class="text-center mb-16 relative z-10">
            <h2 class="text-4xl font-bold text-secondary mb-6"><?php echo $translations['features_title']; ?></h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto"><?php echo $translations['features_subtitle']; ?></p>
        </div>
        
        <!-- User Roles Section -->
        <div class="mb-24 relative z-10">
            <h3 class="text-2xl font-bold text-secondary text-center mb-12"><?php echo $translations['user_roles_title']; ?></h3>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Student Role -->
                <div class="bg-white rounded-xl shadow-lg p-8 transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl border-t-4 border-blue-500">
                    <div class="bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center mb-6 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-secondary text-center mb-4"><?php echo $translations['student_role_title']; ?></h4>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['student_feature1']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['student_feature2']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['student_feature3']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['student_feature4']; ?></span>
                        </li>
                    </ul>
                </div>
                
                <!-- Instructor Role -->
                <div class="bg-white rounded-xl shadow-lg p-8 transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl border-t-4 border-primary">
                    <div class="bg-primary bg-opacity-10 rounded-full w-16 h-16 flex items-center justify-center mb-6 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-secondary text-center mb-4"><?php echo $translations['instructor_role_title']; ?></h4>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['instructor_feature1']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['instructor_feature2']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['instructor_feature3']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['instructor_feature4']; ?></span>
                        </li>
                    </ul>
                </div>
                
                <!-- Admin Role -->
                <div class="bg-white rounded-xl shadow-lg p-8 transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl border-t-4 border-purple-500">
                    <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mb-6 mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-secondary text-center mb-4"><?php echo $translations['admin_role_title']; ?></h4>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-500 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['admin_feature1']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-500 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['admin_feature2']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-500 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['admin_feature3']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-500 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['admin_feature4']; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Key Features Showcase -->
        <div class="mb-24 relative z-10">
            <h3 class="text-2xl font-bold text-secondary text-center mb-12"><?php echo $translations['key_features_title']; ?></h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Left Column - Course Management -->
                <div>
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <div class="p-1 bg-gradient-to-r from-primary to-blue-500"></div>
                        <div class="p-8">
                            <div class="flex items-center mb-6">
                                <div class="bg-primary bg-opacity-10 p-3 rounded-full <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                                <h4 class="text-xl font-bold text-secondary"><?php echo $translations['course_management_title']; ?></h4>
                            </div>
                            
                            <p class="text-gray-600 mb-6"><?php echo $translations['course_management_desc']; ?></p>
                            
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <div class="bg-green-100 p-1 rounded-full <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-1 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-600 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="font-semibold text-secondary"><?php echo $translations['course_feature1_title']; ?></h5>
                                        <p class="text-sm text-gray-600"><?php echo $translations['course_feature1_desc']; ?></p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="bg-green-100 p-1 rounded-full <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="font-semibold text-secondary"><?php echo $translations['course_feature2_title']; ?></h5>
                                        <p class="text-sm text-gray-600"><?php echo $translations['course_feature2_desc']; ?></p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="bg-green-100 p-1 rounded-full <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="font-semibold text-secondary"><?php echo $translations['course_feature3_title']; ?></h5>
                                        <p class="text-sm text-gray-600"><?php echo $translations['course_feature3_desc']; ?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Second Feature Card -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mt-8">
                        <div class="p-1 bg-gradient-to-r from-blue-500 to-purple-500"></div>
                        <div class="p-8">
                            <div class="flex items-center mb-6">
                                <div class="bg-blue-100 p-3 rounded-full <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </div>
                                <h4 class="text-xl font-bold text-secondary"><?php echo $translations['security_title']; ?></h4>
                            </div>
                            
                            <p class="text-gray-600 mb-6"><?php echo $translations['security_desc']; ?></p>
                            
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <div class="bg-green-100 p-1 rounded-full <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="font-semibold text-secondary"><?php echo $translations['security_feature1_title']; ?></h5>
                                        <p class="text-sm text-gray-600"><?php echo $translations['security_feature1_desc']; ?></p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="bg-green-100 p-1 rounded-full <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="font-semibold text-secondary"><?php echo $translations['security_feature2_title']; ?></h5>
                                        <p class="text-sm text-gray-600"><?php echo $translations['security_feature2_desc']; ?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Right Column - Innovative Features -->
                <div>
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <div class="p-1 bg-gradient-to-r from-purple-500 to-primary"></div>
                        <div class="p-8">
                            <div class="flex items-center mb-6">
                                <div class="bg-purple-100 p-3 rounded-full <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                                <h4 class="text-xl font-bold text-secondary"><?php echo $translations['innovative_features_title']; ?></h4>
                            </div>
                            
                            <p class="text-gray-600 mb-6"><?php echo $translations['innovative_features_desc']; ?></p>
                            
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <div class="bg-green-100 p-1 rounded-full <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="font-semibold text-secondary"><?php echo $translations['innovative_feature1_title']; ?></h5>
                                        <p class="text-sm text-gray-600"><?php echo $translations['innovative_feature1_desc']; ?></p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="bg-green-100 p-1 rounded-full <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="font-semibold text-secondary"><?php echo $translations['innovative_feature2_title']; ?></h5>
                                        <p class="text-sm text-gray-600"><?php echo $translations['innovative_feature2_desc']; ?></p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="bg-green-100 p-1 rounded-full <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="font-semibold text-secondary"><?php echo $translations['innovative_feature3_title']; ?></h5>
                                        <p class="text-sm text-gray-600"><?php echo $translations['innovative_feature3_desc']; ?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Fourth Feature Card - AI Integration Highlight -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mt-8 border-l-4 border-primary">
                        <div class="p-8">
                            <div class="flex items-center mb-6">
                                <div class="bg-primary bg-opacity-10 p-3 rounded-full <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                    </svg>
                                </div>
                                <h4 class="text-xl font-bold text-secondary"><?php echo $translations['ai_integration_title']; ?></h4>
                            </div>
                            
                            <div class="bg-primary bg-opacity-5 p-4 rounded-lg mb-6 border-l-2 border-primary">
                                <p class="text-gray-700 italic"><?php echo $translations['ai_integration_quote']; ?></p>
                            </div>
                            
                            <p class="text-gray-600 mb-4"><?php echo $translations['ai_integration_desc']; ?></p>
                            
                            <a href="features.php#ai-features" class="inline-flex items-center text-primary font-medium hover:underline">
                                <?php echo $translations['learn_more']; ?>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 <?php echo $current_lang == 'ar' ? 'transform rotate-180 mr-1 ml-0' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <!-- Additional Features Grid -->
<div class="relative z-10">
    <h3 class="text-2xl font-bold text-secondary text-center mb-12"><?php echo $translations['additional_features_title']; ?></h3>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Feature 1 -->
        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
            <div class="flex items-center mb-4">
                <div class="bg-primary bg-opacity-10 p-2 rounded-full <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                    </svg>
                </div>
                <h4 class="font-semibold text-secondary"><?php echo $translations['multilingual_title']; ?></h4>
            </div>
            <p class="text-gray-600"><?php echo $translations['multilingual_desc']; ?></p>
        </div>
        
        <!-- Feature 2 -->
        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
            <div class="flex items-center mb-4">
                <div class="bg-primary bg-opacity-10 p-2 rounded-full <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </div>
                <h4 class="font-semibold text-secondary"><?php echo $translations['notifications_title']; ?></h4>
            </div>
            <p class="text-gray-600"><?php echo $translations['notifications_desc']; ?></p>
        </div>
        
        <!-- Feature 3 -->
        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
            <div class="flex items-center mb-4">
                <div class="bg-primary bg-opacity-10 p-2 rounded-full <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                    </svg>
                </div>
                <h4 class="font-semibold text-secondary"><?php echo $translations['messaging_title']; ?></h4>
            </div>
            <p class="text-gray-600"><?php echo $translations['messaging_desc']; ?></p>
        </div>
        
        <!-- Feature 4 -->
        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
            <div class="flex items-center mb-4">
                <div class="bg-primary bg-opacity-10 p-2 rounded-full <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <h4 class="font-semibold text-secondary"><?php echo $translations['certificates_title']; ?></h4>
            </div>
            <p class="text-gray-600"><?php echo $translations['certificates_desc']; ?></p>
        </div>
        
        <!-- Feature 5 -->
        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
            <div class="flex items-center mb-4">
                <div class="bg-primary bg-opacity-10 p-2 rounded-full <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                    </svg>
                </div>
                <h4 class="font-semibold text-secondary"><?php echo $translations['payment_title']; ?></h4>
            </div>
            <p class="text-gray-600"><?php echo $translations['payment_desc']; ?></p>
        </div>
        
        <!-- Feature 6 -->
        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
            <div class="flex items-center mb-4">
                <div class="bg-primary bg-opacity-10 p-2 rounded-full <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                    </svg>
                </div>
                <h4 class="font-semibold text-secondary"><?php echo $translations['customization_title']; ?></h4>
            </div>
            <p class="text-gray-600"><?php echo $translations['customization_desc']; ?></p>
        </div>
        
        <!-- Feature 7 -->
        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
            <div class="flex items-center mb-4">
                <div class="bg-primary bg-opacity-10 p-2 rounded-full <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                    </svg>
                </div>
                <h4 class="font-semibold text-secondary"><?php echo $translations['support_title']; ?></h4>
            </div>
            <p class="text-gray-600"><?php echo $translations['support_desc']; ?></p>
        </div>
        
        <!-- Feature 8 -->
        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
            <div class="flex items-center mb-4">
                <div class="bg-primary bg-opacity-10 p-2 rounded-full <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                </div>
                <h4 class="font-semibold text-secondary"><?php echo $translations['analytics_title']; ?></h4>
            </div>
            <p class="text-gray-600"><?php echo $translations['analytics_desc']; ?></p>
        </div>
    </div>

    </section>
    
    <!-- CTA Button -->
    <div class="text-center mt-12">
        <a href="features.php" class="inline-flex items-center bg-primary text-white px-6 py-3 rounded-lg font-medium hover:bg-opacity-90 transition-colors">
            <?php echo $translations['explore_all_features']; ?>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 <?php echo $current_lang == 'ar' ? 'transform rotate-180 mr-2 ml-0' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
        </a>
    </div>
</div>


<!-- Why Choose Us Section -->
<section id="why-choose" class="py-20 bg-white relative overflow-hidden mt-8">
    <!-- Decorative elements -->
    <div class="absolute top-0 left-0 w-64 h-64 bg-primary opacity-5 rounded-full transform -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-primary opacity-5 rounded-full transform translate-x-1/4 translate-y-1/4"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-secondary mb-6"><?php echo $translations['why_choose_title']; ?></h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto"><?php echo $translations['why_choose_subtitle']; ?></p>
        </div>
        
        <!-- Main Content -->
        <div class="flex flex-col md:flex-row items-center mb-20">
<!-- Left Image/Comparison Chart -->
<div class="md:w-1/2 mb-12 md:mb-0 <?php echo $current_lang == 'ar' ? 'md:pl-8' : 'md:pr-8'; ?>">
    <div class="relative">
        <div class="absolute inset-0 bg-primary bg-opacity-10 transform rotate-3 rounded-xl"></div>
        
        <!-- Custom Chart/Comparison (instead of image) -->
        <div class="relative z-10 bg-white rounded-xl shadow-lg p-6 w-full">
            <h3 class="text-lg font-bold text-secondary mb-4 text-center"><?php echo $translations['platform_comparison']; ?></h3>
            
            <!-- Comparison Table -->
            <div class="overflow-hidden">
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-left text-sm text-gray-600"></th>
                            <th class="px-4 py-2 text-center text-sm text-gray-600"><?php echo $translations['other_platforms']; ?></th>
                            <th class="px-4 py-2 text-center bg-primary bg-opacity-10 rounded-t-lg font-bold text-primary">SoftLMS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-t px-4 py-3 text-sm text-gray-700"><?php echo $translations['pricing_model']; ?></td>
                            <td class="border-t px-4 py-3 text-center">
                                <span class="text-orange-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                    </svg>
                                    <?php echo $translations['per_user']; ?>
                                </span>
                            </td>
                            <td class="border-t px-4 py-3 text-center bg-primary bg-opacity-5">
                                <span class="text-green-600 font-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <?php echo $translations['seat_based']; ?>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-t px-4 py-3 text-sm text-gray-700"><?php echo $translations['content_purchasing']; ?></td>
                            <td class="border-t px-4 py-3 text-center">
                                <span class="text-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                    <?php echo $translations['full_courses_only']; ?>
                                </span>
                            </td>
                            <td class="border-t px-4 py-3 text-center bg-primary bg-opacity-5">
                                <span class="text-green-600 font-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <?php echo $translations['flexible_options']; ?>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-t px-4 py-3 text-sm text-gray-700"><?php echo $translations['performance']; ?></td>
                            <td class="border-t px-4 py-3 text-center">
                                <span class="text-orange-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                    </svg>
                                    <?php echo $translations['standard_speed']; ?>
                                </span>
                            </td>
                            <td class="border-t px-4 py-3 text-center bg-primary bg-opacity-5">
                                <span class="text-green-600 font-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <?php echo $translations['optimized_speed']; ?>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-t px-4 py-3 text-sm text-gray-700"><?php echo $translations['custom_development']; ?></td>
                            <td class="border-t px-4 py-3 text-center">
                                <span class="text-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                    <?php echo $translations['template_based']; ?>
                                </span>
                            </td>
                            <td class="border-t px-4 py-3 text-center bg-primary bg-opacity-5">
                                <span class="text-green-600 font-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <?php echo $translations['custom_coding']; ?>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-t px-4 py-3 text-sm text-gray-700"><?php echo $translations['bundled_courses']; ?></td>
                            <td class="border-t px-4 py-3 text-center">
                                <span class="text-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                    <?php echo $translations['not_available']; ?>
                                </span>
                            </td>
                            <td class="border-t px-4 py-3 text-center bg-primary bg-opacity-5">
                                <span class="text-green-600 font-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <?php echo $translations['fully_supported']; ?>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-t px-4 py-3 text-sm text-gray-700"><?php echo $translations['discount_coupons']; ?></td>
                            <td class="border-t px-4 py-3 text-center">
                                <span class="text-orange-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                    </svg>
                                    <?php echo $translations['limited_options']; ?>
                                </span>
                            </td>
                            <td class="border-t px-4 py-3 text-center bg-primary bg-opacity-5">
                                <span class="text-green-600 font-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <?php echo $translations['advanced_system']; ?>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-t px-4 py-3 text-sm text-gray-700"><?php echo $translations['offline_payment']; ?></td>
                            <td class="border-t px-4 py-3 text-center">
                                <span class="text-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                    <?php echo $translations['not_available']; ?>
                                </span>
                            </td>
                            <td class="border-t px-4 py-3 text-center bg-primary bg-opacity-5">
                                <span class="text-green-600 font-medium">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <?php echo $translations['verification_system']; ?>
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- Advantage Tag -->
            <div class="mt-4 bg-green-50 text-green-800 text-sm font-medium px-4 py-2 rounded-lg inline-block mx-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline <?php echo $current_lang == 'ar' ? 'ml-1' : 'mr-1'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
                <?php echo $translations['advantage_tag']; ?>
            </div>
        </div>
        
        <!-- Key Facts Overlay -->
        <div class="absolute top-4 <?php echo $current_lang == 'ar' ? 'right-4' : 'left-4'; ?> bg-white rounded-lg shadow-lg p-4 z-20">
            <div class="flex items-center">
                <div class="bg-green-100 p-2 rounded-full <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div>
                    <p class="font-semibold text-secondary"><?php echo $translations['custom_fact_title']; ?></p>
                    <p class="text-sm"><?php echo $translations['custom_fact_text']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
            
            <!-- Right Content -->
            <div class="md:w-1/2 md:pl-8">
                <div class="space-y-8">
                    <!-- Advantage 1 -->
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                        </div>
                        <div class="<?php echo $current_lang == 'ar' ? 'mr-4' : 'ml-4'; ?>">
                            <h3 class="text-xl font-bold text-secondary mb-2"><?php echo $translations['advantage_1_title']; ?></h3>
                            <p class="text-gray-600"><?php echo $translations['advantage_1_desc']; ?></p>
                        </div>
                    </div>
                    
                    <!-- Advantage 2 -->
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="<?php echo $current_lang == 'ar' ? 'mr-4' : 'ml-4'; ?>">
                            <h3 class="text-xl font-bold text-secondary mb-2"><?php echo $translations['advantage_2_title']; ?></h3>
                            <p class="text-gray-600"><?php echo $translations['advantage_2_desc']; ?></p>
                        </div>
                    </div>
                    
                    <!-- Advantage 3 -->
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                        </div>
                        <div class="<?php echo $current_lang == 'ar' ? 'mr-4' : 'ml-4'; ?>">
                            <h3 class="text-xl font-bold text-secondary mb-2"><?php echo $translations['advantage_3_title']; ?></h3>
                            <p class="text-gray-600"><?php echo $translations['advantage_3_desc']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Statistics Section -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center px-4 md:px-16">
            <!-- Stat 1 -->
            <div class="bg-white p-8 rounded-xl shadow-lg border-t-4 border-primary transform transition-transform hover:-translate-y-1">
                <div class="text-4xl font-bold text-primary mb-2"><?php echo $translations['stat_1_number']; ?></div>
                <div class="text-lg font-medium text-secondary mb-2"><?php echo $translations['stat_1_title']; ?></div>
                <p class="text-gray-600 text-sm"><?php echo $translations['stat_1_desc']; ?></p>
            </div>
            
            <!-- Stat 2 -->
            <div class="bg-white p-8 rounded-xl shadow-lg border-t-4 border-blue-500 transform transition-transform hover:-translate-y-1">
                <div class="text-4xl font-bold text-blue-500 mb-2"><?php echo $translations['stat_2_number']; ?></div>
                <div class="text-lg font-medium text-secondary mb-2"><?php echo $translations['stat_2_title']; ?></div>
                <p class="text-gray-600 text-sm"><?php echo $translations['stat_2_desc']; ?></p>
            </div>
            
            <!-- Stat 3 -->
            <div class="bg-white p-8 rounded-xl shadow-lg border-t-4 border-green-500 transform transition-transform hover:-translate-y-1">
                <div class="text-4xl font-bold text-green-500 mb-2"><?php echo $translations['stat_3_number']; ?></div>
                <div class="text-lg font-medium text-secondary mb-2"><?php echo $translations['stat_3_title']; ?></div>
                <p class="text-gray-600 text-sm"><?php echo $translations['stat_3_desc']; ?></p>
            </div>
            
            <!-- Stat 4 -->
            <div class="bg-white p-8 rounded-xl shadow-lg border-t-4 border-purple-500 transform transition-transform hover:-translate-y-1">
                <div class="text-4xl font-bold text-purple-500 mb-2"><?php echo $translations['stat_4_number']; ?></div>
                <div class="text-lg font-medium text-secondary mb-2"><?php echo $translations['stat_4_title']; ?></div>
                <p class="text-gray-600 text-sm"><?php echo $translations['stat_4_desc']; ?></p>
            </div>
        </div>
        
        <!-- Testimonial Quote -->
        <div class="mt-20 bg-gray-50 p-8 rounded-xl shadow-sm border-l-4 border-primary">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/4 mb-6 md:mb-0 text-center">
                    <div class="inline-block rounded-full bg-gray-200 p-1 mb-3">
                        <img src="assets/images/testimonial-avatar.png" alt="<?php echo $translations['testimonial_name']; ?>" class="h-20 w-20 rounded-full">
                    </div>
                    <h4 class="font-semibold text-secondary"><?php echo $translations['testimonial_name']; ?></h4>
                    <p class="text-gray-500 text-sm"><?php echo $translations['testimonial_title']; ?></p>
                </div>
                <div class="md:w-3/4 md:pl-8">
                    <svg class="h-10 w-10 text-primary opacity-20 mb-4" fill="currentColor" viewBox="0 0 32 32">
                        <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                    </svg>
                    <p class="text-lg text-gray-600 italic mb-6"><?php echo $translations['testimonial_quote']; ?></p>
                    <div class="flex">
                        <div class="text-primary <?php echo $current_lang == 'ar' ? 'ml-1' : 'mr-1'; ?>">★</div>
                        <div class="text-primary <?php echo $current_lang == 'ar' ? 'ml-1' : 'mr-1'; ?>">★</div>
                        <div class="text-primary <?php echo $current_lang == 'ar' ? 'ml-1' : 'mr-1'; ?>">★</div>
                        <div class="text-primary <?php echo $current_lang == 'ar' ? 'ml-1' : 'mr-1'; ?>">★</div>
                        <div class="text-primary">★</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Pricing Section -->
<section id="pricing" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-secondary mb-4"><?php echo $translations['pricing_page_title']; ?></h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto"><?php echo $translations['pricing_page_subtitle']; ?></p>
        </div>
        
        
        <!-- Pricing Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            <!-- Basic Plan -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 transition-transform hover:-translate-y-2 duration-300">
                <div class="p-6 border-b">
                    <h3 class="text-xl font-bold text-secondary mb-2"><?php echo $translations['basic_plan']; ?></h3>
                    <div class="flex items-baseline">
                        <span class="text-4xl font-bold text-secondary">20,000</span>
                        <span class="text-lg text-gray-500 ml-1"><?php echo $translations['currency_year']; ?></span>
                    </div>
                    <p class="text-gray-500 mt-2"><?php echo $translations['up_to']; ?> 250 <?php echo $translations['seats']; ?></p>
                </div>
                <div class="p-6">
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500  <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>250 <?php echo $translations['seats_included']; ?></span>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500  <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['extra_seat']; ?>: <span class="font-medium">10 <?php echo $translations['currency']; ?></span></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500  <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['all_core_features']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500  <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['standard_support']; ?></span>
                        </li>
                        <li class="flex items-start text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5  <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            <span><?php echo $translations['custom_features']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="p-6 border-t">
                    <div class="mb-4 text-center text-gray-600"><?php echo $translations['installment_available']; ?></div>
                    <a href="contact.php" class="block text-center bg-white border border-primary text-primary py-3 rounded-lg font-medium hover:bg-primary hover:text-white transition-colors w-full">
                        <?php echo $translations['get_started']; ?>
                    </a>
                </div>
            </div>
            
            <!-- Standard Plan -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 transition-transform hover:-translate-y-2 duration-300">
                <div class="p-6 border-b">
                    <h3 class="text-xl font-bold text-secondary mb-2"><?php echo $translations['standard_plan']; ?></h3>
                    <div class="flex items-baseline">
                        <span class="text-4xl font-bold text-secondary">35,000</span>
                        <span class="text-lg text-gray-500 ml-1"><?php echo $translations['currency_year']; ?></span>
                    </div>
                    <p class="text-gray-500 mt-2"><?php echo $translations['up_to']; ?> 500 <?php echo $translations['seats']; ?></p>
                </div>
                <div class="p-6">
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500  <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>500 <?php echo $translations['seats_included']; ?></span>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500  <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['extra_seat']; ?>: <span class="font-medium">7.5 <?php echo $translations['currency']; ?></span></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500  <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['all_core_features']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500  <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['priority_support']; ?></span>
                        </li>
                        <li class="flex items-start text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5  <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            <span><?php echo $translations['custom_features']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="p-6 border-t">
                    <div class="mb-4 text-center text-gray-600"><?php echo $translations['installment_available']; ?></div>
                    <a href="contact.php" class="block text-center bg-white border border-primary text-primary py-3 rounded-lg font-medium hover:bg-primary hover:text-white transition-colors w-full">
                        <?php echo $translations['get_started']; ?>
                    </a>
                </div>
            </div>
            
            <!-- Premium Plan -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border-2 border-primary relative transition-transform hover:-translate-y-2 duration-300">
                <div class="absolute top-0 right-0 bg-primary text-white text-xs font-bold px-3 py-1 rounded-bl-lg"><?php echo $translations['most_popular']; ?></div>
                <div class="p-6 border-b">
                    <h3 class="text-xl font-bold text-secondary mb-2"><?php echo $translations['premium_plan']; ?></h3>
                    <div class="flex items-baseline">
                        <span class="text-4xl font-bold text-secondary">45,000</span>
                        <span class="text-lg text-gray-500 ml-1"><?php echo $translations['currency_year']; ?></span>
                    </div>
                    <p class="text-gray-500 mt-2"><?php echo $translations['up_to']; ?> 1000 <?php echo $translations['seats']; ?></p>
                </div>
                <div class="p-6">
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>1000 <?php echo $translations['seats_included']; ?></span>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['extra_seat']; ?>: <span class="font-medium">5 <?php echo $translations['currency']; ?></span></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['all_core_features']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['priority_support']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['advanced_analytics']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="p-6 border-t">
                    <div class="mb-4 text-center text-gray-600"><?php echo $translations['installment_available']; ?></div>
                    <a href="contact.php" class="block text-center bg-primary text-white py-3 rounded-lg font-medium hover:bg-opacity-90 transition-colors w-full">
                        <?php echo $translations['get_started']; ?>
                    </a>
                </div>
            </div>
            
            <!-- Enterprise Plan -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 transition-transform hover:-translate-y-2 duration-300">
                <div class="p-6 border-b">
                    <h3 class="text-xl font-bold text-secondary mb-2"><?php echo $translations['enterprise_plan']; ?></h3>
                    <div class="flex items-baseline">
                        <span class="text-4xl font-bold text-secondary">90,000</span>
                        <span class="text-lg text-gray-500 ml-1"><?php echo $translations['currency_year']; ?></span>
                    </div>
                    <p class="text-gray-500 mt-2"><?php echo $translations['up_to']; ?> 2500 <?php echo $translations['seats']; ?></p>
                </div>
                <div class="p-6">
               
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500  <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>2500 <?php echo $translations['seats_included']; ?></span>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500  <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['extra_seat']; ?>: <span class="font-medium">2 <?php echo $translations['currency']; ?></span></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500  <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['vvip_support']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500  <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['exclusive_customization']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500  <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['dedicated_servers']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500  <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['custom_features_biannual']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="p-6 border-t">
                    <div class="mb-4 text-center text-gray-600"><?php echo $translations['installment_available']; ?></div>
                    <a href="contact.php" class="block text-center bg-white border border-primary text-primary py-3 rounded-lg font-medium hover:bg-primary hover:text-white transition-colors w-full">
                        <?php echo $translations['contact_us']; ?>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Additional Services Box -->
        <div class="bg-gray-50 rounded-xl p-8 shadow-sm border border-gray-100">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-2/3 md:pr-8 mb-6 md:mb-0">
                    <h3 class="text-xl font-bold text-secondary mb-4"><?php echo $translations['additional_services_title']; ?></h3>
                    <p class="text-gray-600 mb-4"><?php echo $translations['additional_services_desc']; ?></p>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                            <span><?php echo $translations['ai_integration']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                            <span><?php echo $translations['advanced_security']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span><?php echo $translations['extended_support']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                            <span><?php echo $translations['enterprise_integrations']; ?></span>
                        </li>
                    </ul>
                </div>
                <div class="md:w-1/3 md:border-l md:pl-8 flex items-center justify-center">
                    <div class="text-center">
                        <div class="mb-4 text-gray-600"><?php echo $translations['interested_services']; ?></div>
                        <a href="contact.php" class="inline-block bg-primary text-white px-6 py-3 rounded-lg font-medium hover:bg-opacity-90 transition-colors">
                            <?php echo $translations['request_quote']; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- FAQ Section -->
        <div class="mt-16">
            <h3 class="text-2xl font-bold text-secondary text-center mb-8"><?php echo $translations['pricing_faq_title']; ?></h3>
      
            <div class="space-y-4 max-w-3xl mx-auto">
                <!-- FAQ Item 1 -->
                <div class="border border-gray-200 rounded-lg">
                    <button class="flex justify-between items-center w-full px-6 py-4       <?php echo $current_lang == 'ar' ? 'text-right' : 'text-left'; ?> focus:outline-none" onclick="toggleFAQ(this)">
                        <span class="font-medium text-secondary"><?php echo $translations['faq_1_question']; ?></span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="px-6 pb-4 hidden">
                        <p class="text-gray-600"><?php echo $translations['faq_1_answer']; ?></p>
                    </div>
                </div>
                
                <!-- FAQ Item 2 -->
                <div class="border border-gray-200 rounded-lg">
                    <button class="flex justify-between items-center w-full px-6 py-4       <?php echo $current_lang == 'ar' ? 'text-right' : 'text-left'; ?> focus:outline-none" onclick="toggleFAQ(this)">
                        <span class="font-medium text-secondary"><?php echo $translations['faq_2_question']; ?></span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="px-6 pb-4 hidden">
                        <p class="text-gray-600"><?php echo $translations['faq_2_answer']; ?></p>
                    </div>
                </div>
                
                <!-- FAQ Item 3 -->
                <div class="border border-gray-200 rounded-lg">
                    <button class="flex justify-between items-center w-full px-6 py-4       <?php echo $current_lang == 'ar' ? 'text-right' : 'text-left'; ?> focus:outline-none" onclick="toggleFAQ(this)">
                        <span class="font-medium text-secondary"><?php echo $translations['faq_3_question']; ?></span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="px-6 pb-4 hidden">
                        <p class="text-gray-600"><?php echo $translations['faq_3_answer']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



    <?php include 'components/footer.php'; ?>

    <!-- JavaScript Files -->
    <script src="assets/js/main.js"></script>
</body>
</html>