<?php
// تحديد اللغة الحالية
$current_lang = isset($_GET['lang']) ? $_GET['lang'] : 'ar';

// تحميل ملف الترجمة المناسب
include_once "translations/{$current_lang}.php";

// تحديد الصفحة الحالية لتفعيل العنصر في شريط التنقل
$page = 'about';
?>

<!DOCTYPE html>
<html lang="<?php echo $current_lang; ?>" dir="<?php echo $current_lang == 'ar' ? 'rtl' : 'ltr'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $translations['about_page_title']; ?></title>
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
        <?php echo $current_lang == 'ar' ? '-right-32' : '-left-32'; ?>
        <div class="absolute -top-24     <?php echo $current_lang == 'ar' ? '-left-24' : '-right-24'; ?> w-96 h-96 bg-primary opacity-20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32  <?php echo $current_lang == 'ar' ? '-right-32' : '-left-32'; ?> w-96 h-96 bg-primary opacity-10 rounded-full blur-3xl"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
                    <?php echo $translations['about_title']; ?>
                </h1>
                <p class="text-xl text-gray-200 leading-relaxed">
                    <?php echo $translations['about_subtitle']; ?>
                </p>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-16">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0  <?php echo $current_lang == 'ar' ? 'md:pl-8' : 'md:pr-8'; ?>">
                    <h2 class="text-3xl font-bold text-secondary mb-6"><?php echo $translations['our_story_title']; ?></h2>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        <?php echo $translations['our_story_p1']; ?>
                    </p>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        <?php echo $translations['our_story_p2']; ?>
                    </p>
                    <div class="flex items-center space-x-4 <?php echo $current_lang == 'ar' ? 'space-x-reverse' : ''; ?>">
                        <div class="bg-primary bg-opacity-10 p-3 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <p class="font-semibold text-secondary"><?php echo $translations['our_story_quote']; ?></p>
                    </div>
                </div>
                <div class="md:w-1/2 ">
                    <div class="relative">
                        <div class="absolute inset-0 bg-primary opacity-10 rounded-xl transform rotate-3"></div>
                        <img src="assets/images/about-team.jpg" alt="<?php echo $translations['our_team_alt']; ?>" class="relative z-10 rounded-xl shadow-lg">
                        <!-- Timeline markers -->
                        <div class="absolute top-4 left-4 bg-white rounded-full p-2 shadow-md z-20">
                            <div class="bg-primary text-white text-xs font-bold px-3 py-1 rounded-full">2018</div>
                        </div>
                        <div class="absolute bottom-4 right-4 bg-white rounded-full p-2 shadow-md z-20">
                            <div class="bg-secondary text-white text-xs font-bold px-3 py-1 rounded-full"><?php echo date('Y'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Mission & Vision Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 md:px-16">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-secondary mb-4"><?php echo $translations['mission_vision_title']; ?></h2>
                <p class="text-gray-600 max-w-3xl mx-auto"><?php echo $translations['mission_vision_subtitle']; ?></p>
            </div>
       
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <!-- Mission Box -->
                <div class="bg-white rounded-xl shadow-lg p-8 border-t-4 border-primary">
                    <div class="flex items-center mb-6">
                        <div class="bg-primary bg-opacity-10 p-3 rounded-full      <?php echo $current_lang == 'ar' ? 'ml-4' : 'mr-4'; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-secondary"><?php echo $translations['our_mission_title']; ?></h3>
                    </div>
                    <p class="text-gray-700 leading-relaxed mb-4">
                        <?php echo $translations['our_mission_desc']; ?>
                    </p>
                </div>
                
                <!-- Vision Box -->
                <div class="bg-white rounded-xl shadow-lg p-8 border-t-4 border-secondary">
                    <div class="flex items-center mb-6">
                        <div class="bg-secondary bg-opacity-10 p-3 rounded-full      <?php echo $current_lang == 'ar' ? 'ml-4' : 'mr-4'; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-secondary"><?php echo $translations['our_vision_title']; ?></h3>
                    </div>
                    <p class="text-gray-700 leading-relaxed mb-4">
                        <?php echo $translations['our_vision_desc']; ?>
                    </p>
                </div>
            </div>
            
            <!-- Values -->
            <div class="mt-16">
                <div class="text-center mb-10">
                    <h3 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['our_values_title']; ?></h3>
                    <p class="text-gray-600 max-w-3xl mx-auto"><?php echo $translations['our_values_subtitle']; ?></p>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Value 1 -->
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow text-center">
                        <div class="inline-block bg-blue-100 p-3 rounded-full mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-secondary mb-2"><?php echo $translations['value_1_title']; ?></h4>
                        <p class="text-gray-600"><?php echo $translations['value_1_desc']; ?></p>
                    </div>
                    
                    <!-- Value 2 -->
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow text-center">
                        <div class="inline-block bg-green-100 p-3 rounded-full mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-secondary mb-2"><?php echo $translations['value_2_title']; ?></h4>
                        <p class="text-gray-600"><?php echo $translations['value_2_desc']; ?></p>
                    </div>
                    
                    <!-- Value 3 -->
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow text-center">
                        <div class="inline-block bg-purple-100 p-3 rounded-full mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-secondary mb-2"><?php echo $translations['value_3_title']; ?></h4>
                        <p class="text-gray-600"><?php echo $translations['value_3_desc']; ?></p>
                    </div>
                    
                    <!-- Value 4 -->
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow text-center">
                        <div class="inline-block bg-red-100 p-3 rounded-full mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                        </div>
                        <h4 class="text-xl font-bold text-secondary mb-2"><?php echo $translations['value_4_title']; ?></h4>
                        <p class="text-gray-600"><?php echo $translations['value_4_desc']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why SoftLMS Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-16">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-secondary mb-4"><?php echo $translations['why_softlms_title']; ?></h2>
                <p class="text-gray-600 max-w-3xl mx-auto"><?php echo $translations['why_softlms_subtitle']; ?></p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Advantage 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 transform transition-all duration-300 hover:-translate-y-2">
                    <div class="h-3 bg-primary"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-primary bg-opacity-10 p-3 rounded-full      <?php echo $current_lang == 'ar' ? 'ml-4' : 'mr-4'; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-secondary"><?php echo $translations['advantage_1_title']; ?></h3>
                        </div>
                        <p class="text-gray-600"><?php echo $translations['advantage_1_desc']; ?></p>
                    </div>
                </div>
                
                <!-- Advantage 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 transform transition-all duration-300 hover:-translate-y-2">
                    <div class="h-3 bg-blue-500"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-blue-100 p-3 rounded-full      <?php echo $current_lang == 'ar' ? 'ml-4' : 'mr-4'; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-secondary"><?php echo $translations['advantage_2_title']; ?></h3>
                        </div>
                        <p class="text-gray-600"><?php echo $translations['advantage_2_desc']; ?></p>
                    </div>
                </div>
                
                <!-- Advantage 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100 transform transition-all duration-300 hover:-translate-y-2">
                    <div class="h-3 bg-purple-500"></div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-purple-100 p-3 rounded-full      <?php echo $current_lang == 'ar' ? 'ml-4' : 'mr-4'; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-secondary"><?php echo $translations['advantage_3_title']; ?></h3>
                        </div>
                        <p class="text-gray-600"><?php echo $translations['advantage_3_desc']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Milestones Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 md:px-16">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-secondary mb-4"><?php echo $translations['milestones_title']; ?></h2>
                <p class="text-gray-600 max-w-3xl mx-auto"><?php echo $translations['milestones_subtitle']; ?></p>
            </div>
            
            <!-- Timeline -->
            <div class="max-w-4xl mx-auto relative">
                <!-- Vertical Line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-primary bg-opacity-20"></div>
                
                <!-- Milestone 1 -->
                <div class="relative mb-24 md:mb-16">
                    <div class="absolute left-1/2 transform -translate-x-1/2 -mt-12 md:-mt-3">
                        <div class="bg-primary text-white w-16 h-16 rounded-full flex items-center justify-center shadow-lg">
                            <span class="font-bold">2018</span>
                        </div>
                    </div>
                    <div class=" w-full md:w-2/5 bg-white p-6 rounded-xl shadow-md <?php echo $current_lang == 'ar' ? ' mr-auto ml-auto md:ml-auto md:mr-8 ' : 'ml-auto mr-auto md:mr-auto md:ml-8'; ?>">
                        <h3 class="text-lg font-bold text-secondary mb-2"><?php echo $translations['milestone_1_title']; ?></h3>
                        <p class="text-gray-600"><?php echo $translations['milestone_1_desc']; ?></p>
                    </div>
                </div>
                
                <!-- Milestone 2 -->
                <div class="relative mb-24 md:mb-16">
                    <div class="absolute left-1/2 transform -translate-x-1/2 -mt-12 md:-mt-3">
                        <div class="bg-blue-500 text-white w-16 h-16 rounded-full flex items-center justify-center shadow-lg">
                            <span class="font-bold">2020</span>
                        </div>
                    </div>
                    <div class=" w-full md:w-2/5 bg-white p-6 rounded-xl shadow-md <?php echo $current_lang == 'ar' ? ' ml-auto ml-auto md:mr-auto md:ml-8 ' : 'mr-auto ml-auto md:ml-auto md:mr-8'; ?>">
                        <h3 class="text-lg font-bold text-secondary mb-2"><?php echo $translations['milestone_2_title']; ?></h3>
                        <p class="text-gray-600"><?php echo $translations['milestone_2_desc']; ?></p>
                    </div>
                </div>
                
                <!-- Milestone 3 -->
                <div class="relative mb-24 md:mb-16">
                    <div class="absolute left-1/2 transform -translate-x-1/2 -mt-12 md:-mt-3">
                        <div class="bg-green-500 text-white w-16 h-16 rounded-full flex items-center justify-center shadow-lg">
                            <span class="font-bold">2022</span>
                        </div>
                    </div>
                    <div class=" w-full md:w-2/5 bg-white p-6 rounded-xl shadow-md <?php echo $current_lang == 'ar' ? ' mr-auto ml-auto md:ml-auto md:mr-8 ' : 'ml-auto mr-auto md:mr-auto md:ml-8'; ?>">
                        <h3 class="text-lg font-bold text-secondary mb-2"><?php echo $translations['milestone_3_title']; ?></h3>
                        <p class="text-gray-600"><?php echo $translations['milestone_3_desc']; ?></p>
                    </div>
                </div>
                
                <!-- Milestone 4 -->
                <div class="relative">
                    <div class="absolute left-1/2 transform -translate-x-1/2 -mt-12 md:-mt-3">
                        <div class="bg-purple-500 text-white w-16 h-16 rounded-full flex items-center justify-center shadow-lg">
                            <span class="font-bold">2024</span>
                        </div>
                    </div>
                    <div class=" w-full md:w-2/5 bg-white p-6 rounded-xl shadow-md <?php echo $current_lang == 'ar' ? '  ml-auto ml-auto md:mr-auto md:ml-8 ' : 'mr-auto ml-auto md:ml-auto md:mr-8'; ?>">
                        <h3 class="text-lg font-bold text-secondary mb-2"><?php echo $translations['milestone_4_title']; ?></h3>
                        <p class="text-gray-600"><?php echo $translations['milestone_4_desc']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-12 bg-primary bg-opacity-10">
        <div class="container mx-auto px-4 md:px-16">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-xl md:text-3xl font-bold text-secondary mb-4"><?php echo $translations['about_cta_title']; ?></h2>
                <p class="text-gray-700 mb-8 text-lg"><?php echo $translations['about_cta_desc']; ?></p>
                <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4 <?php echo $current_lang == 'ar' ? 'sm:space-x-reverse' : ''; ?>">
                    <a href="contact.php" class="bg-primary text-white px-8 py-3 rounded-lg font-medium text-center hover:bg-opacity-90 transition-colors">
                        <?php echo $translations['contact_us']; ?>
                    </a>
                    <a href="demo.php" class="bg-white text-secondary border border-secondary px-8 py-3 rounded-lg font-medium text-center hover:bg-gray-50 transition-colors">
                        <?php echo $translations['request_demo']; ?>
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