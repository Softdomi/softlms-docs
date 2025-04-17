<?php
// تحديد اللغة الحالية
$current_lang = isset($_GET['lang']) ? $_GET['lang'] : 'ar';

// تحميل ملف الترجمة المناسب
include_once "translations/{$current_lang}.php";

// تحديد الصفحة الحالية لتفعيل العنصر في شريط التنقل
$page = 'privacy';
?>

<!DOCTYPE html>
<html lang="<?php echo $current_lang; ?>" dir="<?php echo $current_lang == 'ar' ? 'rtl' : 'ltr'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $translations['privacy_page_title']; ?></title>
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

    <!-- Header Section -->
    <section class="py-12 bg-secondary text-white relative overflow-hidden">
        <!-- Gradient Background Elements -->
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-primary opacity-20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-primary opacity-10 rounded-full blur-3xl"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-3xl md:text-4xl font-bold mb-4 leading-tight">
                    <?php echo $translations['privacy_policy_title']; ?>
                </h1>
                <p class="text-lg text-gray-200 leading-relaxed">
                    <?php echo $translations['privacy_policy_subtitle']; ?>
                </p>
                <p class="text-sm text-gray-300 mt-4">
                    <?php echo $translations['last_updated']; ?>: 01/03/2024
                </p>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <!-- Introduction -->
                <div class="prose max-w-none mb-12">
                    <p class="text-gray-700 mb-4">
                        <?php echo $translations['privacy_intro']; ?>
                    </p>
                    <p class="text-gray-700 mb-4">
                        <?php echo $translations['privacy_consent']; ?>
                    </p>
                </div>

                <!-- Information We Collect -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['info_we_collect_title']; ?></h2>
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <h3 class="text-lg font-semibold text-secondary mb-3"><?php echo $translations['personal_info_title']; ?></h3>
                        <p class="text-gray-700 mb-4"><?php echo $translations['personal_info_desc']; ?></p>
                        <ul class="list-disc list-inside text-gray-700 space-y-2 mb-6">
                            <li><?php echo $translations['personal_info_1']; ?></li>
                            <li><?php echo $translations['personal_info_2']; ?></li>
                            <li><?php echo $translations['personal_info_3']; ?></li>
                            <li><?php echo $translations['personal_info_4']; ?></li>
                            <li><?php echo $translations['personal_info_5']; ?></li>
                        </ul>

                        <h3 class="text-lg font-semibold text-secondary mb-3"><?php echo $translations['usage_info_title']; ?></h3>
                        <p class="text-gray-700 mb-4"><?php echo $translations['usage_info_desc']; ?></p>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li><?php echo $translations['usage_info_1']; ?></li>
                            <li><?php echo $translations['usage_info_2']; ?></li>
                            <li><?php echo $translations['usage_info_3']; ?></li>
                            <li><?php echo $translations['usage_info_4']; ?></li>
                        </ul>
                    </div>
                </div>

                <!-- How We Use Information -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['how_we_use_title']; ?></h2>
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <p class="text-gray-700 mb-4"><?php echo $translations['how_we_use_desc']; ?></p>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li><?php echo $translations['how_we_use_1']; ?></li>
                            <li><?php echo $translations['how_we_use_2']; ?></li>
                            <li><?php echo $translations['how_we_use_3']; ?></li>
                            <li><?php echo $translations['how_we_use_4']; ?></li>
                            <li><?php echo $translations['how_we_use_5']; ?></li>
                            <li><?php echo $translations['how_we_use_6']; ?></li>
                        </ul>
                    </div>
                </div>

                <!-- Data Storage and Security -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['data_storage_title']; ?></h2>
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <p class="text-gray-700 mb-4"><?php echo $translations['data_storage_desc']; ?></p>
                        <h3 class="text-lg font-semibold text-secondary mb-3"><?php echo $translations['security_measures_title']; ?></h3>
                        <p class="text-gray-700 mb-4"><?php echo $translations['security_measures_desc']; ?></p>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li><?php echo $translations['security_measure_1']; ?></li>
                            <li><?php echo $translations['security_measure_2']; ?></li>
                            <li><?php echo $translations['security_measure_3']; ?></li>
                            <li><?php echo $translations['security_measure_4']; ?></li>
                        </ul>
                    </div>
                </div>

                <!-- Data Sharing -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['data_sharing_title']; ?></h2>
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <p class="text-gray-700 mb-4"><?php echo $translations['data_sharing_desc']; ?></p>
                        <h3 class="text-lg font-semibold text-secondary mb-3"><?php echo $translations['third_parties_title']; ?></h3>
                        <p class="text-gray-700 mb-4"><?php echo $translations['third_parties_desc']; ?></p>
                        <ul class="list-disc list-inside text-gray-700 space-y-2 mb-6">
                            <li><?php echo $translations['third_party_1']; ?></li>
                            <li><?php echo $translations['third_party_2']; ?></li>
                            <li><?php echo $translations['third_party_3']; ?></li>
                        </ul>
                        <p class="text-gray-700 mb-4"><?php echo $translations['legal_requirements_desc']; ?></p>
                    </div>
                </div>

                <!-- User Rights -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['user_rights_title']; ?></h2>
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <p class="text-gray-700 mb-4"><?php echo $translations['user_rights_desc']; ?></p>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li><?php echo $translations['right_1']; ?></li>
                            <li><?php echo $translations['right_2']; ?></li>
                            <li><?php echo $translations['right_3']; ?></li>
                            <li><?php echo $translations['right_4']; ?></li>
                            <li><?php echo $translations['right_5']; ?></li>
                        </ul>
                        <p class="text-gray-700 mt-4"><?php echo $translations['exercise_rights_desc']; ?></p>
                    </div>
                </div>

                <!-- Data Retention -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['data_retention_title']; ?></h2>
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <p class="text-gray-700 mb-4"><?php echo $translations['data_retention_desc']; ?></p>
                        <p class="text-gray-700"><?php echo $translations['data_retention_period']; ?></p>
                    </div>
                </div>

                <!-- Cookies and Tracking -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['cookies_title']; ?></h2>
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <p class="text-gray-700 mb-4"><?php echo $translations['cookies_desc']; ?></p>
                        <h3 class="text-lg font-semibold text-secondary mb-3"><?php echo $translations['cookie_types_title']; ?></h3>
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li><?php echo $translations['cookie_type_1']; ?></li>
                            <li><?php echo $translations['cookie_type_2']; ?></li>
                            <li><?php echo $translations['cookie_type_3']; ?></li>
                        </ul>
                        <p class="text-gray-700 mt-4"><?php echo $translations['cookie_control']; ?></p>
                    </div>
                </div>

                <!-- Children's Privacy -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['children_privacy_title']; ?></h2>
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <p class="text-gray-700"><?php echo $translations['children_privacy_desc']; ?></p>
                    </div>
                </div>

                <!-- Changes to Privacy Policy -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['policy_changes_title']; ?></h2>
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <p class="text-gray-700 mb-4"><?php echo $translations['policy_changes_desc']; ?></p>
                        <p class="text-gray-700"><?php echo $translations['policy_changes_notification']; ?></p>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['contact_info_title']; ?></h2>
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <p class="text-gray-700 mb-4"><?php echo $translations['contact_info_desc']; ?></p>
                        <div class="bg-white p-4 rounded-md border border-gray-200">
                            <p class="font-medium text-secondary"><?php echo $translations['company_name']; ?></p>
                            <p class="text-gray-700"><?php echo $translations['company_address']; ?></p>
                            <p class="text-gray-700"><?php echo $translations['email']; ?>: privacy@softlms.com</p>
                            <p class="text-gray-700"><?php echo $translations['phone']; ?>: <?php echo $translations['company_phone']; ?></p>
                        </div>
                    </div>
                </div>

                <!-- Applicable Law -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['applicable_law_title']; ?></h2>
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <p class="text-gray-700"><?php echo $translations['applicable_law_desc']; ?></p>
                    </div>
                </div>

                <!-- Closing Statement -->
                <div class="mb-12">
                    <div class="bg-primary bg-opacity-5 p-6 rounded-lg border-l-4 border-primary">
                        <p class="text-gray-700 italic">
                            <?php echo $translations['privacy_closing']; ?>
                        </p>
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