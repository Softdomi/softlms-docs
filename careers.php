<?php
// تحديد اللغة الحالية
$current_lang = isset($_GET['lang']) ? $_GET['lang'] : 'ar';

// تحميل ملف الترجمة المناسب
include_once "translations/{$current_lang}.php";

// تحديد الصفحة الحالية لتفعيل العنصر في شريط التنقل
$page = 'careers';
?>

<!DOCTYPE html>
<html lang="<?php echo $current_lang; ?>" dir="<?php echo $current_lang == 'ar' ? 'rtl' : 'ltr'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $translations['careers_page_title']; ?></title>
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
    <section class="py-20 bg-secondary text-white relative overflow-hidden">
        <!-- Gradient Background Elements -->
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-primary opacity-20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-primary opacity-10 rounded-full blur-3xl"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
                    <?php echo $translations['careers_title']; ?>
                </h1>
                <p class="text-xl text-gray-200 leading-relaxed">
                    <?php echo $translations['careers_subtitle']; ?>
                </p>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <!-- No Current Openings Message -->
                <div class="text-center mb-16">
                    <div class="bg-gray-50 rounded-xl p-10 shadow-sm border border-gray-100">
                        <div class="inline-block bg-primary bg-opacity-10 p-4 rounded-full mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['no_openings_title']; ?></h2>
                        <p class="text-gray-600 mb-8"><?php echo $translations['no_openings_message']; ?></p>
                        
                        <!-- Future Job Alerts Subscription -->
                        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 max-w-md mx-auto">
                            <h3 class="text-lg font-semibold text-secondary mb-3"><?php echo $translations['stay_updated']; ?></h3>
                            <p class="text-gray-600 text-sm mb-4"><?php echo $translations['job_alerts_desc']; ?></p>
                            
                            <form action="#" method="POST" class="space-y-4">
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1"><?php echo $translations['email_address']; ?></label>
                                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary focus:border-primary" required>
                                </div>
                               
                                <div class="flex items-center">
                                    <input id="job-alerts" name="job-alerts" type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                                    <label for="job-alerts" class=" <?php echo $current_lang == 'ar' ? 'mr-2' : 'ml-2'; ?> block text-sm text-gray-600">
                                        <?php echo $translations['consent_job_alerts']; ?>
                                    </label>
                                </div>
                                
                                <button type="submit" class="w-full bg-primary text-white px-4 py-2 rounded-md hover:bg-opacity-90 transition-colors">
                                    <?php echo $translations['subscribe']; ?>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                
                <!-- Company Culture -->
                <div class="mb-16">
                    <h2 class="text-3xl font-bold text-secondary text-center mb-10"><?php echo $translations['company_culture_title']; ?></h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="bg-gray-50 p-6 rounded-lg shadow-sm flex flex-col items-center">
                            <div class="bg-primary bg-opacity-10 p-3 rounded-full mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-secondary mb-2"><?php echo $translations['culture_teamwork']; ?></h3>
                            <p class="text-gray-600 text-center"><?php echo $translations['culture_teamwork_desc']; ?></p>
                        </div>
                        
                        <div class="bg-gray-50 p-6 rounded-lg shadow-sm flex flex-col items-center">
                            <div class="bg-primary bg-opacity-10 p-3 rounded-full mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-secondary mb-2"><?php echo $translations['culture_innovation']; ?></h3>
                            <p class="text-gray-600 text-center"><?php echo $translations['culture_innovation_desc']; ?></p>
                        </div>
                        
                        <div class="bg-gray-50 p-6 rounded-lg shadow-sm flex flex-col items-center">
                            <div class="bg-primary bg-opacity-10 p-3 rounded-full mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-secondary mb-2"><?php echo $translations['culture_growth']; ?></h3>
                            <p class="text-gray-600 text-center"><?php echo $translations['culture_growth_desc']; ?></p>
                        </div>
                        
                        <div class="bg-gray-50 p-6 rounded-lg shadow-sm flex flex-col items-center">
                            <div class="bg-primary bg-opacity-10 p-3 rounded-full mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-secondary mb-2"><?php echo $translations['culture_balance']; ?></h3>
                            <p class="text-gray-600 text-center"><?php echo $translations['culture_balance_desc']; ?></p>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Alternative -->
                <div class="text-center">
                    <div class="bg-gray-50 rounded-xl p-10 shadow-sm border border-gray-100">
                        <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['interested_working']; ?></h2>
                        <p class="text-gray-600 mb-6"><?php echo $translations['interested_message']; ?></p>
                        <a href="contact.php" class="inline-block bg-primary text-white px-6 py-3 rounded-lg font-medium hover:bg-opacity-90 transition-colors">
                            <?php echo $translations['contact_us']; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- FAQ Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-secondary mb-4"><?php echo $translations['careers_faq_title']; ?></h2>
                    <p class="text-gray-600"><?php echo $translations['careers_faq_subtitle']; ?></p>
                </div>
                
                <div class="space-y-4">
                    <!-- FAQ Item 1 -->
                    <div class="border border-gray-200 rounded-lg bg-white overflow-hidden">
                        <button class="flex justify-between items-center w-full px-6 py-4  <?php echo $current_lang == 'ar' ? 'text-right' : 'text-left'; ?> focus:outline-none" onclick="toggleFAQ(this)">
                            <span class="font-medium text-secondary"><?php echo $translations['careers_faq_1_question']; ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="px-6 pb-4 hidden">
                            <p class="text-gray-600"><?php echo $translations['careers_faq_1_answer']; ?></p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 2 -->
                    <div class="border border-gray-200 rounded-lg bg-white overflow-hidden">
                        <button class="flex justify-between items-center w-full px-6 py-4  <?php echo $current_lang == 'ar' ? 'text-right' : 'text-left'; ?> focus:outline-none" onclick="toggleFAQ(this)">
                            <span class="font-medium text-secondary"><?php echo $translations['careers_faq_2_question']; ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="px-6 pb-4 hidden">
                            <p class="text-gray-600"><?php echo $translations['careers_faq_2_answer']; ?></p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 3 -->
                    <div class="border border-gray-200 rounded-lg bg-white overflow-hidden">
                        <button class="flex justify-between items-center w-full px-6 py-4  <?php echo $current_lang == 'ar' ? 'text-right' : 'text-left'; ?> focus:outline-none" onclick="toggleFAQ(this)">
                            <span class="font-medium text-secondary"><?php echo $translations['careers_faq_3_question']; ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="px-6 pb-4 hidden">
                            <p class="text-gray-600"><?php echo $translations['careers_faq_3_answer']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <!-- JavaScript Files -->
    <script src="assets/js/main.js"></script>
    <script>
        // Toggle FAQ items
        function toggleFAQ(element) {
            const content = element.nextElementSibling;
            const icon = element.querySelector('svg');
            
            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.classList.add('rotate-180');
            } else {
                content.classList.add('hidden');
                icon.classList.remove('rotate-180');
            }
        }
    </script>
</body>
</html>