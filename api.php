<?php
// تحديد اللغة الحالية
$current_lang = isset($_GET['lang']) ? $_GET['lang'] : 'ar';

// تحميل ملف الترجمة المناسب
include_once "translations/{$current_lang}.php";

// تحديد الصفحة الحالية لتفعيل العنصر في شريط التنقل
$page = 'api';
?>

<!DOCTYPE html>
<html lang="<?php echo $current_lang; ?>" dir="<?php echo $current_lang == 'ar' ? 'rtl' : 'ltr'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $translations['api_page_title']; ?></title>
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
    <section class="py-20 bg-secondary text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-8"><?php echo $translations['api_integration_title']; ?></h1>
                <p class="text-xl mb-10"><?php echo $translations['api_integration_subtitle']; ?></p>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <!-- Integration Message -->
                <div class="bg-blue-50 p-8 rounded-xl border border-blue-100 mb-12">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="mb-6 md:mb-0 md:mr-8">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['seamless_integration_title']; ?></h2>
                            <p class="text-lg text-gray-700 mb-4"><?php echo $translations['seamless_integration_desc']; ?></p>
                            <p class="text-gray-600"><?php echo $translations['contact_support_for_integration']; ?></p>
                        </div>
                    </div>
                </div>
                
                <!-- Support System Access -->
                <div class="bg-primary bg-opacity-5 p-8 rounded-xl border-l-4 border-primary mb-12">
                    <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['existing_customer_title']; ?></h2>
                    <p class="text-gray-700 mb-6"><?php echo $translations['existing_customer_desc']; ?></p>
                    
                    <a href="https://support.softlms.online/auth/login.php?tab=customer" target="_blank" class="inline-flex items-center bg-primary text-white px-6 py-3 rounded-lg font-medium hover:bg-opacity-90 transition-colors">
                        <?php echo $translations['access_support_system']; ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 <?php echo $current_lang == 'ar' ? 'transform rotate-180 mr-2 ml-0' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                </div>
                
                <!-- Integration Possibilities -->
                <div class="mb-16">
                    <h2 class="text-2xl font-bold text-secondary mb-8 text-center"><?php echo $translations['integration_possibilities_title']; ?></h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Integration Type 1 -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <div class="bg-blue-100 p-3 rounded-full inline-block mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-secondary mb-2"><?php echo $translations['sso_integration_title']; ?></h3>
                            <p class="text-gray-600"><?php echo $translations['sso_integration_desc']; ?></p>
                        </div>
                        
                        <!-- Integration Type 2 -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <div class="bg-green-100 p-3 rounded-full inline-block mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-secondary mb-2"><?php echo $translations['data_sync_title']; ?></h3>
                            <p class="text-gray-600"><?php echo $translations['data_sync_desc']; ?></p>
                        </div>
                        
                        <!-- Integration Type 3 -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <div class="bg-purple-100 p-3 rounded-full inline-block mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-secondary mb-2"><?php echo $translations['webhook_title']; ?></h3>
                            <p class="text-gray-600"><?php echo $translations['webhook_desc']; ?></p>
                        </div>
                        
                        <!-- Integration Type 4 -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <div class="bg-red-100 p-3 rounded-full inline-block mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-secondary mb-2"><?php echo $translations['erp_integration_title']; ?></h3>
                            <p class="text-gray-600"><?php echo $translations['erp_integration_desc']; ?></p>
                        </div>
                        
                        <!-- Integration Type 5 -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <div class="bg-yellow-100 p-3 rounded-full inline-block mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-secondary mb-2"><?php echo $translations['payment_gateway_title']; ?></h3>
                            <p class="text-gray-600"><?php echo $translations['payment_gateway_desc']; ?></p>
                        </div>
                        
                        <!-- Integration Type 6 -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <div class="bg-primary bg-opacity-20 p-3 rounded-full inline-block mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-secondary mb-2"><?php echo $translations['custom_integration_title']; ?></h3>
                            <p class="text-gray-600"><?php echo $translations['custom_integration_desc']; ?></p>
                        </div>
                    </div>
                </div>
                
                <!-- CTA -->
                <div class="text-center">
                    <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['start_integration_title']; ?></h2>
                    <p class="text-gray-600 mb-8"><?php echo $translations['start_integration_desc']; ?></p>
                    <a href="contact.php" class="inline-flex items-center bg-primary text-white px-8 py-3 rounded-lg font-medium hover:bg-opacity-90 transition-colors">
                        <?php echo $translations['contact_us']; ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 <?php echo $current_lang == 'ar' ? 'transform rotate-180 mr-2 ml-0' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <!-- JavaScript Files -->
    <script src="assets/js/main.js"></script>
</body>
</html>