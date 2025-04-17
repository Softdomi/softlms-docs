<?php
// تحديد اللغة الحالية
$current_lang = isset($_GET['lang']) ? $_GET['lang'] : 'ar';

// تحميل ملف الترجمة المناسب
include_once "translations/{$current_lang}.php";

// تحديد الصفحة الحالية لتفعيل العنصر في شريط التنقل
$page = 'docs';
$active_section = 'getting-started';
?>

<!DOCTYPE html>
<html lang="<?php echo $current_lang; ?>" dir="<?php echo $current_lang == 'ar' ? 'rtl' : 'ltr'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $translations['getting_started_title']; ?> - SoftLMS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- addons -->
    <link rel="stylesheet" href="styles.css">
    <script src="scripts.js"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#f4921d',
                        secondary: '#0f2a45',
                    }
                }
            }
        }
    </script>
    <?php if ($current_lang == 'ar'): ?>
    <?php endif; ?>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="<?php echo $current_lang == 'ar' ? 'font-cairo' : ''; ?> bg-gray-50">
    
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>
    
<!-- Header -->
   <?php include 'header.php'; ?>
   

    <!-- Main Documentation Area -->
    <section class="py-8">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-col lg:flex-row">


                    <!-- Sidebar -->
                    <?php include 'sidebar.php'; ?>


                    <!-- Main Content Area -->
                    <div class="lg:w-3/4 <?php echo $current_lang == 'ar' ? 'lg:pr-8' : 'lg:pl-8'; ?>">
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <!-- Page Title -->
                            <div class="border-b pb-4 mb-6">
                                <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['getting_started']; ?></h1>
                                <p class="text-gray-600 mt-2"><?php echo $translations['getting_started_subtitle']; ?></p>
                            </div>
                            
                            <!-- Introduction Section -->
                            <section class="mb-8">
                                <h2 class="text-xl font-bold text-secondary mb-4"><?php echo $translations['introduction']; ?></h2>
                                <p class="text-gray-700 mb-4">
                                    <?php echo $translations['welcome_text']; ?>
                                </p>
                                
                                <!-- Quick Features -->
                                <div class="bg-primary bg-opacity-5 p-4 rounded-lg border-l-4 border-primary my-4">
                                    <h3 class="font-semibold text-secondary mb-2"><?php echo $translations['key_features']; ?></h3>
                                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                        <li class="flex items-center">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <?php echo $translations['feature_1']; ?>
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <?php echo $translations['feature_2']; ?>
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <?php echo $translations['feature_3']; ?>
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <?php echo $translations['feature_4']; ?>
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <?php echo $translations['feature_5']; ?>
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <?php echo $translations['feature_6']; ?>
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <?php echo $translations['feature_7']; ?>
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <?php echo $translations['feature_8']; ?>
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <?php echo $translations['feature_9']; ?>
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <?php echo $translations['feature_10']; ?>
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <?php echo $translations['feature_11']; ?>
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <?php echo $translations['feature_12']; ?>
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <?php echo $translations['feature_13']; ?>
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <?php echo $translations['feature_14']; ?>
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <?php echo $translations['feature_15']; ?>
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="h-5 w-5 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                            <?php echo $translations['feature_16']; ?>
                                        </li>
                                    </ul>
                                    <p class="my-8 text-xl text-secondary font-bold"><?php echo $translations['features_sentence'] ?></p>
                                </div>
                            </section>
                            
                            <!-- Quick Start Guide -->
                            <section>
                                <h2 class="text-xl font-bold text-secondary mb-4"><?php echo $translations['quick_start']; ?></h2>
                                
                                <!-- Steps -->
                                <div class="space-y-4">
                                    <div class="flex">
                                        <div class="flex-shrink-0 h-8 w-8 bg-primary rounded-full flex items-center justify-center text-white font-bold">1</div>
                                        <div class="ms-4">
                                            <h3 class="font-semibold text-secondary"><?php echo $translations['step_1_title']; ?></h3>
                                            <p class="text-gray-600"><?php echo $translations['step_1_desc']; ?></p>
                                        </div>
                                    </div>
                                    
                                    <div class="flex">
                                        <div class="flex-shrink-0 h-8 w-8 bg-primary rounded-full flex items-center justify-center text-white font-bold">2</div>
                                        <div class="ms-4">
                                            <h3 class="font-semibold text-secondary"><?php echo $translations['step_2_title']; ?></h3>
                                            <p class="text-gray-600"><?php echo $translations['step_2_desc']; ?></p>
                                        </div>
                                    </div>
                                    
                                    <div class="flex">
                                        <div class="flex-shrink-0 h-8 w-8 bg-primary rounded-full flex items-center justify-center text-white font-bold">3</div>
                                        <div class="ms-4">
                                            <h3 class="font-semibold text-secondary"><?php echo $translations['step_3_title']; ?></h3>
                                            <p class="text-gray-600"><?php echo $translations['step_3_desc']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Next Steps Button -->
                                <!-- <div class="mt-8 text-center">
                                    <a href="#" class="inline-flex items-center px-4 py-2 bg-primary text-white rounded-lg hover:bg-opacity-90 transition-colors">
                                        <?php echo $translations['next_steps']; ?>
                                        <svg class="h-5 w-5 <?php echo $current_lang == 'ar' ? 'mr-2 rotate-180' : 'ml-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                        </svg>
                                    </a>
                                </div> -->
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>
</html>