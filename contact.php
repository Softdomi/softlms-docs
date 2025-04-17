<?php
// تحديد اللغة الحالية
$current_lang = isset($_GET['lang']) ? $_GET['lang'] : 'ar';

// تحميل ملف الترجمة المناسب
include_once "translations/{$current_lang}.php";

// تحديد الصفحة الحالية لتفعيل العنصر في شريط التنقل
$page = 'contact';
?>

<!DOCTYPE html>
<html lang="<?php echo $current_lang; ?>" dir="<?php echo $current_lang == 'ar' ? 'rtl' : 'ltr'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $translations['contact_page_title']; ?></title>
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

    <!-- Page Header -->
    <section class="py-12 bg-secondary text-white relative overflow-hidden">
        <!-- Gradient Background Elements -->
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-primary opacity-20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-primary opacity-10 rounded-full blur-3xl"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center">
                <h1 class="text-3xl md:text-4xl font-bold mb-4"><?php echo $translations['contact_us']; ?></h1>
                <p class="text-lg text-gray-200 max-w-2xl mx-auto"><?php echo $translations['contact_subtitle']; ?></p>
            </div>
        </div>
    </section>

    <!-- Contact Info & Form Section -->
    <section class="py-16">
        <div class="container mx-auto px-4 md:px-16">
            <?php if(isset($_GET['error']) && $_GET['error'] == 1): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
                <strong class="font-bold"><?php echo $translations['error']; ?>!</strong>
                <span class="block sm:inline"><?php echo $translations['contact_error']; ?></span>
            </div>
            <?php endif; ?>
            
            <div class="flex flex-col lg:flex-row gap-10">
                
                <!-- Left Column - Contact Information -->
                <div class="lg:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg p-8 h-full">
                        <h2 class="text-2xl font-bold text-secondary mb-6"><?php echo $translations['contact_info']; ?></h2>
                      
                        <!-- Phone -->
                        <div class="flex items-start mb-8">
                            <div class="bg-primary bg-opacity-10 p-3 rounded-full  <?php echo $current_lang == 'ar' ? 'ml-4' : 'mr-4'; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-medium text-secondary mb-1"><?php echo $translations['phone']; ?></h3>
                                <p class="text-gray-600 mb-1">+20100000000</p>
                                <p class="text-sm text-gray-500"><?php echo $translations['working_hours']; ?></p>
                            </div>
                        </div>
                        
                        <!-- Email -->
                        <div class="flex items-start mb-8">
                            <div class="bg-blue-100 p-3 rounded-full  <?php echo $current_lang == 'ar' ? 'ml-4' : 'mr-4'; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-medium text-secondary mb-1"><?php echo $translations['email']; ?></h3>
                                <p class="text-gray-600 mb-1">info@softlms.online</p>
                                <p class="text-sm text-gray-500"><?php echo $translations['email_response_time']; ?></p>
                            </div>
                        </div>
                        
                        <!-- Office Location -->
                        <div class="flex items-start mb-8">
                            <div class="bg-green-100 p-3 rounded-full  <?php echo $current_lang == 'ar' ? 'ml-4' : 'mr-4'; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-medium text-secondary mb-1"><?php echo $translations['office_location']; ?></h3>
                                <p class="text-gray-600 mb-1"><?php echo $translations['office_address']; ?></p>
                            </div>
                        </div>
                        
                        <!-- Social Media Links -->
                        <div>
                            <h3 class="font-medium text-secondary mb-3"><?php echo $translations['follow_us']; ?></h3>
                            <div class="flex space-x-4 <?php echo $current_lang == 'ar' ? 'space-x-reverse' : ''; ?>">
                                <a href="#" class="bg-blue-500 text-white p-2 rounded-full hover:bg-blue-600 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                                    </svg>
                                </a>
                                <a href="#" class="bg-sky-500 text-white p-2 rounded-full hover:bg-sky-600 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                    </svg>
                                </a>
                                <a href="#" class="bg-red-500 text-white p-2 rounded-full hover:bg-red-600 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M7 11v2.4h3.97c-.16 1.029-1.2 3.02-3.97 3.02-2.39 0-4.34-1.979-4.34-4.42 0-2.44 1.95-4.42 4.34-4.42 1.36 0 2.27.58 2.79 1.08l1.9-1.83c-1.22-1.14-2.8-1.83-4.69-1.83-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.721-2.84 6.721-6.84 0-.46-.051-.81-.111-1.16h-6.61zm0 0 17 2h-3v3h-2v-3h-3v-2h3v-3h2v3h3v2z" fillRule="evenodd" clipRule="evenodd"/>
                                    </svg>
                                </a>
                                <a href="#" class="bg-pink-500 text-white p-2 rounded-full hover:bg-pink-600 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                    </svg>
                                </a>
                                <a href="#" class="bg-blue-700 text-white p-2 rounded-full hover:bg-blue-800 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Column - Contact Form -->
                <div class="lg:w-2/3">
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-secondary mb-6"><?php echo $translations['send_message']; ?></h2>
                        
                        <form action="procces/contact-process.php" method="post" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Name Field -->
                                <div>
                                    <label for="name" class="block text-gray-700 font-medium mb-2"><?php echo $translations['full_name']; ?> <span class="text-red-500">*</span></label>
                                    <input type="text" id="name" name="name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" required>
                                </div>
                                
                                <!-- Email Field -->
                                <div>
                                    <label for="email" class="block text-gray-700 font-medium mb-2"><?php echo $translations['email_address']; ?> <span class="text-red-500">*</span></label>
                                    <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" required>
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <!-- Phone Field -->
                                <div>
                                    <label for="phone" class="block text-gray-700 font-medium mb-2"><?php echo $translations['phone_number']; ?></label>
                                    <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
                                </div>
                                
                                <!-- Subject Field -->
                                <div>
                                    <label for="subject" class="block text-gray-700 font-medium mb-2"><?php echo $translations['subject']; ?> <span class="text-red-500">*</span></label>
                                    <select id="subject" name="subject" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" required>
                                        <option value=""><?php echo $translations['select_subject']; ?></option>
                                        <option value="general"><?php echo $translations['general_inquiry']; ?></option>
                                        <option value="sales"><?php echo $translations['sales_inquiry']; ?></option>
                                        <option value="support"><?php echo $translations['tech_support']; ?></option>
                                        <option value="partnership"><?php echo $translations['partnership']; ?></option>
                                        <option value="other"><?php echo $translations['other']; ?></option>
                                    </select>
                                </div>
                            </div>
                            
                            <!-- Message Field -->
                            <div>
                                <label for="message" class="block text-gray-700 font-medium mb-2"><?php echo $translations['message']; ?> <span class="text-red-500">*</span></label>
                                <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent" required></textarea>
                            </div>
                            
                            <!-- Terms Checkbox -->
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="terms" name="terms" type="checkbox" class="focus:ring-primary h-4 w-4 text-primary border-gray-300 rounded" required>
                                </div>
                                <div class="  <?php echo $current_lang == 'ar' ? 'mr-3' : 'ml-3'; ?> text-sm">
                                    <label for="terms" class="text-gray-600"><?php echo $translations['agree_terms']; ?> <a href="privacy.php?lang=<?php echo $current_lang; ?>" class="text-primary hover:underline"><?php echo $translations['privacy_policy']; ?></a></label>
                                </div>
                            </div>
                            
                            <!-- Submit Button -->
                            <div>
                                <button type="submit" class="w-full bg-primary text-white px-6 py-3 rounded-lg font-medium hover:bg-opacity-90 transition-colors"><?php echo $translations['send_message']; ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-secondary mb-4"><?php echo $translations['frequently_asked']; ?></h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto"><?php echo $translations['faq_subtitle']; ?></p>
            </div>
            
            <div class="max-w-4xl mx-auto">
                <div class="space-y-4">
                    <!-- FAQ Item 1 -->
                    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                        <button class="flex justify-between items-center w-full px-6 py-4  <?php echo $current_lang == 'ar' ? 'text-right' : 'text-left'; ?> focus:outline-none" onclick="toggleFAQ(this)">
                            <span class="font-medium text-secondary"><?php echo $translations['contact_faq_1_question']; ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="px-6 pb-4 hidden">
                            <p class="text-gray-600"><?php echo $translations['contact_faq_1_answer']; ?></p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 2 -->
                    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                        <button class="flex justify-between items-center w-full px-6 py-4  <?php echo $current_lang == 'ar' ? 'text-right' : 'text-left'; ?> focus:outline-none" onclick="toggleFAQ(this)">
                            <span class="font-medium text-secondary"><?php echo $translations['contact_faq_2_question']; ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="px-6 pb-4 hidden">
                            <p class="text-gray-600"><?php echo $translations['contact_faq_2_answer']; ?></p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 3 -->
                    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                        <button class="flex justify-between items-center w-full px-6 py-4  <?php echo $current_lang == 'ar' ? 'text-right' : 'text-left'; ?> focus:outline-none" onclick="toggleFAQ(this)">
                            <span class="font-medium text-secondary"><?php echo $translations['contact_faq_3_question']; ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="px-6 pb-4 hidden">
                            <p class="text-gray-600"><?php echo $translations['contact_faq_3_answer']; ?></p>
                        </div>
                    </div>
                    
                    <!-- FAQ Item 4 -->
                    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                        <button class="flex justify-between items-center w-full px-6 py-4  <?php echo $current_lang == 'ar' ? 'text-right' : 'text-left'; ?> focus:outline-none" onclick="toggleFAQ(this)">
                            <span class="font-medium text-secondary"><?php echo $translations['contact_faq_4_question']; ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="px-6 pb-4 hidden">
                            <p class="text-gray-600"><?php echo $translations['contact_faq_4_answer']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Map Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-secondary mb-4"><?php echo $translations['our_location']; ?></h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto"><?php echo $translations['location_subtitle']; ?></p>
            </div>
            
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="h-96 bg-gray-200">
                    <!-- Google Map Embed (replace src with your actual Google Maps embed link) -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110502.61241607813!2d31.16514592443219!3d30.05958804903512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fa60b21beeb%3A0x79dfb296e8423bba!2sCairo%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1711099293019!5m2!1sen!2seg" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-16 bg-secondary text-white relative overflow-hidden">
        <!-- Decorative elements -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-primary opacity-20 rounded-full transform translate-x-1/2 -translate-y-1/3"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-primary opacity-20 rounded-full transform -translate-x-1/3 translate-y-1/4"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-6"><?php echo $translations['ready_to_start']; ?></h2>
                <p class="text-xl text-gray-200 mb-8"><?php echo $translations['cta_subtitle']; ?></p>
                
                <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4 <?php echo $current_lang == 'ar' ? 'sm:space-x-reverse' : ''; ?>">
                    <a href="demo.php" class="bg-primary text-white px-8 py-3 rounded-lg font-medium text-center hover:bg-opacity-90 transition-colors">
                        <?php echo $translations['request_demo']; ?>
                    </a>
                    <a href="pricing.php" class="bg-white text-secondary px-8 py-3 rounded-lg font-medium text-center hover:bg-gray-100 transition-colors">
                        <?php echo $translations['view_pricing']; ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <!-- JavaScript for FAQ toggles -->
    <script>
        function toggleFAQ(button) {
            // Get the content div that follows the button
            const content = button.nextElementSibling;
            
            // Toggle the hidden class
            content.classList.toggle('hidden');
            
            // Rotate the arrow icon
            const icon = button.querySelector('svg');
            icon.classList.toggle('rotate-180');
        }
    </script>
</body>
</html>