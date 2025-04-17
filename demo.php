<?php
// تحديد اللغة الحالية
$current_lang = isset($_GET['lang']) ? $_GET['lang'] : 'ar';

// تحميل ملف الترجمة المناسب
include_once "translations/{$current_lang}.php";

// تحديد الصفحة الحالية لتفعيل العنصر في شريط التنقل
$page = 'demo';
?>

<!DOCTYPE html>
<html lang="<?php echo $current_lang; ?>" dir="<?php echo $current_lang == 'ar' ? 'rtl' : 'ltr'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $translations['demo_page_title']; ?></title>
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

    <!-- Demo Request Section -->
    <section class="py-20 bg-secondary text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-8"><?php echo $translations['request_demo_title']; ?></h1>
                <p class="text-xl mb-10"><?php echo $translations['demo_description']; ?></p>
                
                <div class="bg-white text-secondary rounded-lg shadow-lg p-10 md:p-16 max-w-2xl mx-auto">
                    <div class="mb-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold mb-4"><?php echo $translations['contact_sales_team']; ?></h2>
                    <p class="text-gray-600 mb-6"><?php echo $translations['full_access_trial']; ?></p>
                    
                    <div class="text-2xl md:text-3xl font-bold text-primary mb-6 flex items-center justify-center" style = "direction:ltr !important;">
                  
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span class = ''> +20 100 123 4567</span>
                    </div>
                    
                    <p class="text-gray-500 text-sm"><?php echo $translations['business_hours']; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Highlights (Optional) -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-secondary text-center mb-12"><?php echo $translations['demo_features_title']; ?></h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Feature 1 -->
                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="bg-primary bg-opacity-10 p-4 rounded-full inline-block mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-secondary mb-2"><?php echo $translations['demo_feature1_title']; ?></h3>
                        <p class="text-gray-600"><?php echo $translations['demo_feature1_desc']; ?></p>
                    </div>
                    
                    <!-- Feature 2 -->
                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="bg-primary bg-opacity-10 p-4 rounded-full inline-block mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-secondary mb-2"><?php echo $translations['demo_feature2_title']; ?></h3>
                        <p class="text-gray-600"><?php echo $translations['demo_feature2_desc']; ?></p>
                    </div>
                    
                    <!-- Feature 3 -->
                    <div class="bg-gray-50 p-6 rounded-lg text-center">
                        <div class="bg-primary bg-opacity-10 p-4 rounded-full inline-block mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-secondary mb-2"><?php echo $translations['demo_feature3_title']; ?></h3>
                        <p class="text-gray-600"><?php echo $translations['demo_feature3_desc']; ?></p>
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