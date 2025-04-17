  
<?php
// تحديد اللغة الحالية
$current_lang = isset($_GET['lang']) ? $_GET['lang'] : 'ar';

// تحميل ملف الترجمة المناسب
include_once "translations/{$current_lang}.php";

// تحديد الصفحة الحالية لتفعيل العنصر في شريط التنقل
$page = 'Features';
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
        <div class="mb-24 relative z-10  ">
            <h3 class="text-2xl font-bold text-secondary text-center mb-12"><?php echo $translations['key_features_title']; ?></h3>
          
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
                <!-- Left Column - Course Management -->
                <div>
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden  min-h-[400px]">
                        <div class="p-1 bg-gradient-to-r from-primary to-blue-500"></div>
                        <div class="p-8">
                            <div class="flex items-center mb-6">
                                <div class="bg-primary bg-opacity-10 p-3 rounded-full     <?php echo $current_lang == 'ar' ? 'ml-4' : 'mr-4'; ?> ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                                <h4 class="text-xl font-bold text-secondary"><?php echo $translations['course_management_title']; ?></h4>
                            </div>
                            
                            <p class="text-gray-600 mb-6"><?php echo $translations['course_management_desc']; ?></p>
                            
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <div class="bg-green-100 p-1 rounded-full   <?php echo $current_lang == 'ar' ? 'ml-3' : 'mr-3'; ?>  mt-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="font-semibold text-secondary"><?php echo $translations['course_feature1_title']; ?></h5>
                                        <p class="text-sm text-gray-600"><?php echo $translations['course_feature1_desc']; ?></p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="bg-green-100 p-1 rounded-full   <?php echo $current_lang == 'ar' ? 'ml-3' : 'mr-3'; ?>  mt-1">
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
                                    <div class="bg-green-100 p-1 rounded-full   <?php echo $current_lang == 'ar' ? 'ml-3' : 'mr-3'; ?>  mt-1">
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
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mt-8 min-h-[400px]">
                        <div class="p-1 bg-gradient-to-r from-blue-500 to-purple-500"></div>
                        <div class="p-8">
                            <div class="flex items-center mb-6">
                                <div class="bg-blue-100 p-3 rounded-full     <?php echo $current_lang == 'ar' ? 'ml-4' : 'mr-4'; ?> ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </div>
                                <h4 class="text-xl font-bold text-secondary"><?php echo $translations['security_title']; ?></h4>
                            </div>
                            
                            <p class="text-gray-600 mb-6"><?php echo $translations['security_desc']; ?></p>
                            
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <div class="bg-green-100 p-1 rounded-full   <?php echo $current_lang == 'ar' ? 'ml-3' : 'mr-3'; ?>  mt-1">
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
                                    <div class="bg-green-100 p-1 rounded-full   <?php echo $current_lang == 'ar' ? 'ml-3' : 'mr-3'; ?>  mt-1">
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
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden min-h-[400px]">
                        <div class="p-1 bg-gradient-to-r from-purple-500 to-primary"></div>
                        <div class="p-8">
                            <div class="flex items-center mb-6">
                                <div class="bg-purple-100 p-3 rounded-full     <?php echo $current_lang == 'ar' ? 'ml-4' : 'mr-4'; ?> ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                                <h4 class="text-xl font-bold text-secondary"><?php echo $translations['innovative_features_title']; ?></h4>
                            </div>
                            
                            <p class="text-gray-600 mb-6"><?php echo $translations['innovative_features_desc']; ?></p>
                            
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <div class="bg-green-100 p-1 rounded-full   <?php echo $current_lang == 'ar' ? 'ml-3' : 'mr-3'; ?>  mt-1">
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
                                    <div class="bg-green-100 p-1 rounded-full   <?php echo $current_lang == 'ar' ? 'ml-3' : 'mr-3'; ?>  mt-1">
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
                                    <div class="bg-green-100 p-1 rounded-full   <?php echo $current_lang == 'ar' ? 'ml-3' : 'mr-3'; ?>  mt-1">
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
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mt-8 border-l-4 border-primary min-h-[400px]">
                        <div class="p-8">
                            <div class="flex items-center mb-6">
                                <div class="bg-primary bg-opacity-10 p-3 rounded-full     <?php echo $current_lang == 'ar' ? 'ml-4' : 'mr-4'; ?> ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                    </svg>
                                </div>
                                <h4 class="text-xl font-bold text-secondary"><?php echo $translations['ai_integration_title']; ?></h4>
                            </div>
                            
                            <div class="bg-primary bg-opacity-5 p-4 rounded-lg mb-6 border-l-2 border-primary">
                                <p class="text-gray-700 italic"><?php echo $translations['ai_integration_quote']; ?></p>
                            </div>
                            
                            <p class="text-gray-600 mb-2"><?php echo $translations['ai_integration_desc']; ?></p>
                            
                          
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
                <div class="bg-primary bg-opacity-10 p-2 rounded-full   <?php echo $current_lang == 'ar' ? 'ml-3' : 'mr-3'; ?> ">
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
                <div class="bg-primary bg-opacity-10 p-2 rounded-full   <?php echo $current_lang == 'ar' ? 'ml-3' : 'mr-3'; ?> ">
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
                <div class="bg-primary bg-opacity-10 p-2 rounded-full   <?php echo $current_lang == 'ar' ? 'ml-3' : 'mr-3'; ?> ">
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
                <div class="bg-primary bg-opacity-10 p-2 rounded-full   <?php echo $current_lang == 'ar' ? 'ml-3' : 'mr-3'; ?> ">
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
                <div class="bg-primary bg-opacity-10 p-2 rounded-full   <?php echo $current_lang == 'ar' ? 'ml-3' : 'mr-3'; ?> ">
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
                <div class="bg-primary bg-opacity-10 p-2 rounded-full   <?php echo $current_lang == 'ar' ? 'ml-3' : 'mr-3'; ?> ">
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
                <div class="bg-primary bg-opacity-10 p-2 rounded-full   <?php echo $current_lang == 'ar' ? 'ml-3' : 'mr-3'; ?> ">
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
                <div class="bg-primary bg-opacity-10 p-2 rounded-full   <?php echo $current_lang == 'ar' ? 'ml-3' : 'mr-3'; ?> ">
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

    <?php include 'components/footer.php'; ?>

    </body>
</html>