<?php
// تحديد اللغة الحالية
$current_lang = isset($_GET['lang']) ? $_GET['lang'] : 'ar';

// تحميل ملف الترجمة المناسب
include_once "translations/{$current_lang}.php";

// تحديد الصفحة الحالية لتفعيل العنصر في شريط التنقل
$page = 'terms';
?>

<!DOCTYPE html>
<html lang="<?php echo $current_lang; ?>" dir="<?php echo $current_lang == 'ar' ? 'rtl' : 'ltr'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $translations['terms_page_title']; ?></title>
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
                    <?php echo $translations['terms_of_service_title']; ?>
                </h1>
                <p class="text-lg text-gray-200 leading-relaxed">
                    <?php echo $translations['terms_of_service_subtitle']; ?>
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
                        <?php echo $translations['terms_intro']; ?>
                    </p>
                    <p class="text-gray-700 mb-4">
                        <?php echo $translations['terms_acceptance']; ?>
                    </p>
                    <div class="bg-yellow-50 p-4 rounded-lg border border-yellow-200 mb-6">
                        <p class="text-yellow-800 font-medium">
                            <?php echo $translations['read_carefully']; ?>
                        </p>
                    </div>
                </div>

                <!-- Definitions -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['definitions_title']; ?></h2>
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <p class="text-gray-700 mb-4"><?php echo $translations['definitions_intro']; ?></p>
                        <ul class="space-y-4 text-gray-700">
                            <li><span class="font-bold">"<?php echo $translations['agreement']; ?>"</span> - <?php echo $translations['agreement_def']; ?></li>
                            <li><span class="font-bold">"<?php echo $translations['company']; ?>"</span> - <?php echo $translations['company_def']; ?></li>
                            <li><span class="font-bold">"<?php echo $translations['service']; ?>"</span> - <?php echo $translations['service_def']; ?></li>
                            <li><span class="font-bold">"<?php echo $translations['user']; ?>"</span> - <?php echo $translations['user_def']; ?></li>
                            <li><span class="font-bold">"<?php echo $translations['content']; ?>"</span> - <?php echo $translations['content_def']; ?></li>
                            <li><span class="font-bold">"<?php echo $translations['subscription']; ?>"</span> - <?php echo $translations['subscription_def']; ?></li>
                            <li><span class="font-bold">"<?php echo $translations['account']; ?>"</span> - <?php echo $translations['account_def']; ?></li>
                        </ul>
                    </div>
                </div>

                <!-- Account Terms -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['account_terms_title']; ?></h2>
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <h3 class="text-lg font-semibold text-secondary mb-3"><?php echo $translations['account_registration_title']; ?></h3>
                        <p class="text-gray-700 mb-4"><?php echo $translations['account_registration_desc']; ?></p>
                        
                        <h3 class="text-lg font-semibold text-secondary mb-3 mt-6"><?php echo $translations['account_responsibility_title']; ?></h3>
                        <p class="text-gray-700 mb-4"><?php echo $translations['account_responsibility_desc']; ?></p>
                        
                        <h3 class="text-lg font-semibold text-secondary mb-3 mt-6"><?php echo $translations['account_security_title']; ?></h3>
                        <p class="text-gray-700 mb-4"><?php echo $translations['account_security_desc']; ?></p>
                        
                        <h3 class="text-lg font-semibold text-secondary mb-3 mt-6"><?php echo $translations['account_termination_title']; ?></h3>
                        <p class="text-gray-700"><?php echo $translations['account_termination_desc']; ?></p>
                    </div>
                </div>

                <!-- Service License -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['service_license_title']; ?></h2>
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <p class="text-gray-700 mb-4"><?php echo $translations['service_license_desc']; ?></p>
                        
                        <h3 class="text-lg font-semibold text-secondary mb-3 mt-6"><?php echo $translations['service_restrictions_title']; ?></h3>
                        <p class="text-gray-700 mb-4"><?php echo $translations['service_restrictions_desc']; ?></p>
                        
                        <ul class="list-disc list-inside text-gray-700 space-y-2">
                            <li><?php echo $translations['restriction_1']; ?></li>
                            <li><?php echo $translations['restriction_2']; ?></li>
                            <li><?php echo $translations['restriction_3']; ?></li>
                            <li><?php echo $translations['restriction_4']; ?></li>
                            <li><?php echo $translations['restriction_5']; ?></li>
                            <li><?php echo $translations['restriction_6']; ?></li>
                        </ul>
                    </div>
                </div>

                <!-- Subscription and Billing -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['subscription_billing_title']; ?></h2>
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <h3 class="text-lg font-semibold text-secondary mb-3"><?php echo $translations['subscription_plans_title']; ?></h3>
                        <p class="text-gray-700 mb-4"><?php echo $translations['subscription_plans_desc']; ?></p>
                        
                        <h3 class="text-lg font-semibold text-secondary mb-3 mt-6"><?php echo $translations['billing_cycles_title']; ?></h3>
                        <p class="text-gray-700 mb-4"><?php echo $translations['billing_cycles_desc']; ?></p>
                        
                        <h3 class="text-lg font-semibold text-secondary mb-3 mt-6"><?php echo $translations['payment_methods_title']; ?></h3>
                        <p class="text-gray-700 mb-4"><?php echo $translations['payment_methods_desc']; ?></p>
                        
                        <h3 class="text-lg font-semibold text-secondary mb-3 mt-6"><?php echo $translations['price_changes_title']; ?></h3>
                        <p class="text-gray-700 mb-4"><?php echo $translations['price_changes_desc']; ?></p>
                        
                        <h3 class="text-lg font-semibold text-secondary mb-3 mt-6"><?php echo $translations['refunds_title']; ?></h3>
                        <p class="text-gray-700"><?php echo $translations['refunds_desc']; ?></p>
                    </div>
                </div>

                <!-- Service Availability and Modifications -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['service_availability_title']; ?></h2>
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <h3 class="text-lg font-semibold text-secondary mb-3"><?php echo $translations['service_uptime_title']; ?></h3>
                        <p class="text-gray-700 mb-4"><?php echo $translations['service_uptime_desc']; ?></p>
                        
                        <h3 class="text-lg font-semibold text-secondary mb-3 mt-6"><?php echo $translations['service_maintenance_title']; ?></h3>
                        <p class="text-gray-700 mb-4"><?php echo $translations['service_maintenance_desc']; ?></p>
                        
                        <h3 class="text-lg font-semibold text-secondary mb-3 mt-6"><?php echo $translations['service_modifications_title']; ?></h3>
                        <p class="text-gray-700"><?php echo $translations['service_modifications_desc']; ?></p>
                    </div>
                </div>

                <!-- User Content -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['user_content_title']; ?></h2>
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <h3 class="text-lg font-semibold text-secondary mb-3"><?php echo $translations['content_ownership_title']; ?></h3>
                        <p class="text-gray-700 mb-4"><?php echo $translations['content_ownership_desc']; ?></p>
                        
                        <h3 class="text-lg font-semibold text-secondary mb-3 mt-6"><?php echo $translations['content_license_title']; ?></h3>
                        <p class="text-gray-700 mb-4"><?php echo $translations['content_license_desc']; ?></p>
                        
                        <h3 class="text-lg font-semibold text-secondary mb-3 mt-6"><?php echo $translations['content_restrictions_title']; ?></h3>
                        <p class="text-gray-700 mb-4"><?php echo $translations['content_restrictions_desc']; ?></p>
                        
                        <h3 class="text-lg font-semibold text-secondary mb-3 mt-6"><?php echo $translations['content_removal_title']; ?></h3>
                        <p class="text-gray-700"><?php echo $translations['content_removal_desc']; ?></p>
                    </div>
                </div>

                <!-- Data Backups -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['data_backups_title']; ?></h2>
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <p class="text-gray-700 mb-4"><?php echo $translations['data_backups_desc']; ?></p>
                        <p class="text-gray-700"><?php echo $translations['data_backups_responsibility']; ?></p>
                    </div>
                </div>

                <!-- Intellectual Property -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['intellectual_property_title']; ?></h2>
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <p class="text-gray-700 mb-4"><?php echo $translations['intellectual_property_desc']; ?></p>
                        <p class="text-gray-700 mb-4"><?php echo $translations['intellectual_property_rights']; ?></p>
                        <p class="text-gray-700"><?php echo $translations['intellectual_property_violations']; ?></p>
                    </div>
                </div>

                <!-- Indemnification -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['indemnification_title']; ?></h2>
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <p class="text-gray-700"><?php echo $translations['indemnification_desc']; ?></p>
                    </div>
                </div>

                <!-- Limitation of Liability -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['limitation_liability_title']; ?></h2>
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <p class="text-gray-700 mb-4"><?php echo $translations['limitation_liability_desc']; ?></p>
                        <p class="text-gray-700 mb-4"><?php echo $translations['limitation_liability_extent']; ?></p>
                        <p class="text-gray-700"><?php echo $translations['limitation_liability_exceptions']; ?></p>
                    </div>
                </div>

                <!-- Disclaimers -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['disclaimers_title']; ?></h2>
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <p class="text-gray-700 mb-4"><?php echo $translations['disclaimers_service']; ?></p>
                        <p class="text-gray-700"><?php echo $translations['disclaimers_third_party']; ?></p>
                    </div>
                </div>

                <!-- Term and Termination -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['term_termination_title']; ?></h2>
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <h3 class="text-lg font-semibold text-secondary mb-3"><?php echo $translations['term_title']; ?></h3>
                        <p class="text-gray-700 mb-4"><?php echo $translations['term_desc']; ?></p>
                        
                        <h3 class="text-lg font-semibold text-secondary mb-3 mt-6"><?php echo $translations['termination_by_user_title']; ?></h3>
                        <p class="text-gray-700 mb-4"><?php echo $translations['termination_by_user_desc']; ?></p>
                        
                        <h3 class="text-lg font-semibold text-secondary mb-3 mt-6"><?php echo $translations['termination_by_company_title']; ?></h3>
                        <p class="text-gray-700 mb-4"><?php echo $translations['termination_by_company_desc']; ?></p>
                        
                        <h3 class="text-lg font-semibold text-secondary mb-3 mt-6"><?php echo $translations['effects_of_termination_title']; ?></h3>
                        <p class="text-gray-700"><?php echo $translations['effects_of_termination_desc']; ?></p>
                    </div>
                </div>

                <!-- Dispute Resolution -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['dispute_resolution_title']; ?></h2>
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <p class="text-gray-700 mb-4"><?php echo $translations['dispute_resolution_desc']; ?></p>
                        <p class="text-gray-700 mb-4"><?php echo $translations['dispute_resolution_process']; ?></p>
                        <p class="text-gray-700"><?php echo $translations['dispute_resolution_venue']; ?></p>
                    </div>
                </div>

                <!-- Governing Law -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['governing_law_title']; ?></h2>
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <p class="text-gray-700"><?php echo $translations['governing_law_desc']; ?></p>
                    </div>
                </div>

                <!-- Changes to Terms -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['changes_to_terms_title']; ?></h2>
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <p class="text-gray-700 mb-4"><?php echo $translations['changes_to_terms_desc']; ?></p>
                        <p class="text-gray-700"><?php echo $translations['changes_to_terms_notification']; ?></p>
                    </div>
                </div>

                <!-- Miscellaneous Provisions -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['miscellaneous_title']; ?></h2>
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <h3 class="text-lg font-semibold text-secondary mb-3"><?php echo $translations['force_majeure_title']; ?></h3>
                        <p class="text-gray-700 mb-4"><?php echo $translations['force_majeure_desc']; ?></p>
                        
                        <h3 class="text-lg font-semibold text-secondary mb-3 mt-6"><?php echo $translations['severability_title']; ?></h3>
                        <p class="text-gray-700 mb-4"><?php echo $translations['severability_desc']; ?></p>
                        
                        <h3 class="text-lg font-semibold text-secondary mb-3 mt-6"><?php echo $translations['waiver_title']; ?></h3>
                        <p class="text-gray-700 mb-4"><?php echo $translations['waiver_desc']; ?></p>
                        
                        <h3 class="text-lg font-semibold text-secondary mb-3 mt-6"><?php echo $translations['assignment_title']; ?></h3>
                        <p class="text-gray-700 mb-4"><?php echo $translations['assignment_desc']; ?></p>
                        
                        <h3 class="text-lg font-semibold text-secondary mb-3 mt-6"><?php echo $translations['entire_agreement_title']; ?></h3>
                        <p class="text-gray-700"><?php echo $translations['entire_agreement_desc']; ?></p>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="mb-12">
                    <h2 class="text-2xl font-bold text-secondary mb-4"><?php echo $translations['contact_info_title']; ?></h2>
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <p class="text-gray-700 mb-4"><?php echo $translations['contact_terms_desc']; ?></p>
                        <div class="bg-white p-4 rounded-md border border-gray-200">
                            <p class="font-medium text-secondary"><?php echo $translations['company_name']; ?></p>
                            <p class="text-gray-700"><?php echo $translations['company_address']; ?></p>
                            <p class="text-gray-700"><?php echo $translations['email']; ?>: legal@softlms.com</p>
                            <p class="text-gray-700"><?php echo $translations['phone']; ?>: <?php echo $translations['company_phone']; ?></p>
                        </div>
                    </div>
                </div>

                <!-- Closing Statement -->
                <div class="mb-12">
                    <div class="bg-primary bg-opacity-5 p-6 rounded-lg border-l-4 border-primary">
                        <p class="text-gray-700 italic">
                            <?php echo $translations['terms_closing']; ?>
                        </p>
                    </div>
                </div>