  
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

<!-- Pricing Section -->
<section id="pricing" class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-16">
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500   <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>250 <?php echo $translations['seats_included']; ?></span>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500   <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['extra_seat']; ?>: <span class="font-medium">10 <?php echo $translations['currency']; ?></span></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500   <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['all_core_features']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500   <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['standard_support']; ?></span>
                        </li>
                        <li class="flex items-start text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5   <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500   <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>500 <?php echo $translations['seats_included']; ?></span>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500   <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['extra_seat']; ?>: <span class="font-medium">7.5 <?php echo $translations['currency']; ?></span></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500   <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['all_core_features']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500   <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['priority_support']; ?></span>
                        </li>
                        <li class="flex items-start text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5   <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500   <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>1000 <?php echo $translations['seats_included']; ?></span>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500   <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['extra_seat']; ?>: <span class="font-medium">5 <?php echo $translations['currency']; ?></span></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500   <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['all_core_features']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500   <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['priority_support']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500   <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500   <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span>2500 <?php echo $translations['seats_included']; ?></span>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500   <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['extra_seat']; ?>: <span class="font-medium">2 <?php echo $translations['currency']; ?></span></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500   <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['vvip_support']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500   <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['exclusive_customization']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500   <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <span><?php echo $translations['dedicated_servers']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500   <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                <div class="md:w-2/3     <?php echo $current_lang == 'ar' ? 'md:pl-8' : 'md:pr-8'; ?> mb-6 md:mb-0">
                    <h3 class="text-xl font-bold text-secondary mb-4"><?php echo $translations['additional_services_title']; ?></h3>
                    <p class="text-gray-600 mb-4"><?php echo $translations['additional_services_desc']; ?></p>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary   <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                            <span><?php echo $translations['ai_integration']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary   <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                            <span><?php echo $translations['advanced_security']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary   <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span><?php echo $translations['extended_support']; ?></span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary   <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                    <button class="flex justify-between items-center w-full px-6 py-4  <?php echo $current_lang == 'ar' ? 'text-right' : 'text-left'; ?> focus:outline-none" onclick="toggleFAQ(this)">
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
                    <button class="flex justify-between items-center w-full px-6 py-4  <?php echo $current_lang == 'ar' ? 'text-right' : 'text-left'; ?> focus:outline-none" onclick="toggleFAQ(this)">
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
                    <button class="flex justify-between items-center w-full px-6 py-4  <?php echo $current_lang == 'ar' ? 'text-right' : 'text-left'; ?> focus:outline-none" onclick="toggleFAQ(this)">
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