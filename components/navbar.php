<!-- Header/Navigation Bar -->
<header class="bg-white shadow-md ">
    <div class="container mx-auto px-8">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="<?php echo $base_url ?? ''; ?>/index.php" class="block w-48">
                <img src="<?php echo $base_url ?? ''; ?>assets/images/logo.svg" alt="<?php echo $translations['logo_alt']; ?>" class="h-12">              
              </a>
            </div>
            
            <!-- Main Navigation - Desktop -->
            <nav class="hidden md:block">
                <ul class="flex space-x-6 <?php echo $current_lang == 'ar' ? 'space-x-reverse' : ''; ?>">
                    <li><a href="<?php echo $base_url ?? ''; ?>/index.php?lang=<?php echo $current_lang; ?>" class="font-medium text-secondary hover:text-primary <?php echo $page == 'home' ? 'border-b-2 border-primary' : ''; ?> py-2"><?php echo $translations['nav_home']; ?></a></li>
                    <li><a href="<?php echo $base_url ?? ''; ?>/features.php?lang=<?php echo $current_lang; ?>" class="font-medium text-secondary hover:text-primary <?php echo $page == 'features' ? 'border-b-2 border-primary' : ''; ?> py-2"><?php echo $translations['nav_features']; ?></a></li>
                    <li><a href="<?php echo $base_url ?? ''; ?>/pricing.php?lang=<?php echo $current_lang; ?>" class="font-medium text-secondary hover:text-primary <?php echo $page == 'pricing' ? 'border-b-2 border-primary' : ''; ?> py-2"><?php echo $translations['nav_pricing']; ?></a></li>
                    <li><a href="<?php echo $base_url ?? ''; ?>docs/index.php?lang=<?php echo $current_lang; ?>" class="font-medium text-secondary hover:text-primary <?php echo $page == 'docs' ? 'border-b-2 border-primary' : ''; ?> py-2"><?php echo $translations['nav_docs']; ?></a></li>
                    <li><a href="<?php echo $base_url ?? ''; ?>/contact.php?lang=<?php echo $current_lang; ?>" class="font-medium text-secondary hover:text-primary <?php echo $page == 'contact' ? 'border-b-2 border-primary' : ''; ?> py-2"><?php echo $translations['nav_contact']; ?></a></li>
                </ul>
            </nav>
            
            <!-- User Actions -->
            <div class="flex items-center  ">
                <a href="<?php echo $base_url ?? ''; ?>/demo.php?lang=<?php echo $current_lang; ?>" class="hidden sm:inline-block bg-primary text-white px-4 py-2 rounded-lg hover:bg-opacity-90 transition-colors font-medium"><?php echo $translations['request_demo']; ?></a>
                
                <!-- Language Switcher - Simple Dropdown -->
                <?php
                // حفظ المسار الحالي لتحويل اللغة مع البقاء في نفس الصفحة
                $current_url = $_SERVER['PHP_SELF'];
                $query_string = '';
                
                if(!empty($_SERVER['QUERY_STRING'])) {
                    parse_str($_SERVER['QUERY_STRING'], $query_params);
                    unset($query_params['lang']); // حذف معلمة اللغة لإعادة ضبطها
                    
                    if(!empty($query_params)) {
                        $query_string = '&' . http_build_query($query_params);
                    }
                }
                ?>
                <div class="relative">
                    <button id="langButton" class="flex items-center space-x-1 <?php echo $current_lang == 'ar' ? 'space-x-reverse' : ''; ?> text-secondary hover:text-primary focus:outline-none p-2">
                        <span class="flag-icon flag-icon-<?php echo $current_lang == 'ar' ? 'eg' : 'us'; ?> mr-1"></span>
                        <span class="text-sm"><?php echo $current_lang == 'ar' ? 'العربية' : 'English'; ?></span>
                        <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    
                    <div id="langDropdown" class="hidden absolute bg-white rounded shadow-md mt-1 py-1" style="min-width: 120px; z-index: 100;">
                        <a href="<?php echo $current_url; ?>?lang=ar<?php echo $query_string; ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 <?php echo $current_lang == 'ar' ? 'bg-gray-100' : ''; ?>">
                            <span class="flag-icon flag-icon-eg mr-2"></span>
                            العربية
                        </a>
                        <a href="<?php echo $current_url; ?>?lang=en<?php echo $query_string; ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 <?php echo $current_lang == 'en' ? 'bg-gray-100' : ''; ?>">
                            <span class="flag-icon flag-icon-us mr-2"></span>
                            English
                        </a>
                    </div>
                </div>
                
                <!-- Mobile Menu Toggle -->
                <button id="mobile-toggle" class="md:hidden mx-2 text-secondary focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile Menu (Simple Dropdown) -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200">
        <div class="container mx-auto px-4 py-3">
            <ul class="space-y-2">
                <li><a href="<?php echo $base_url ?? ''; ?>/index.php?lang=<?php echo $current_lang; ?>" class="flex items-center py-2 text-secondary font-medium hover:text-primary">
                    <svg class="h-5 w-5 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                    <?php echo $translations['nav_home']; ?>
                </a></li>
                <li><a href="<?php echo $base_url ?? ''; ?>/features.php?lang=<?php echo $current_lang; ?>" class="flex items-center py-2 text-secondary font-medium hover:text-primary">
                    <svg class="h-5 w-5 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                    <?php echo $translations['nav_features']; ?>
                </a></li>
                <li><a href="<?php echo $base_url ?? ''; ?>/pricing.php?lang=<?php echo $current_lang; ?>" class="flex items-center py-2 text-secondary font-medium hover:text-primary">
                    <svg class="h-5 w-5 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                    <?php echo $translations['nav_pricing']; ?>
                </a></li>
                <li><a href="<?php echo $base_url ?? ''; ?>/docs/docs.php?lang=<?php echo $current_lang; ?>" class="flex items-center py-2 text-secondary font-medium hover:text-primary">
                    <svg class="h-5 w-5 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"></path></svg>
                    <?php echo $translations['nav_docs']; ?>
                </a></li>
                <li><a href="<?php echo $base_url ?? ''; ?>/contact.php?lang=<?php echo $current_lang; ?>" class="flex items-center py-2 text-secondary font-medium hover:text-primary">
                    <svg class="h-5 w-5 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?> text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                    <?php echo $translations['nav_contact']; ?>
                </a></li>
                <li class="pt-2 mt-2 border-t border-gray-100">
                    <a href="<?php echo $base_url ?? ''; ?>/demo.php?lang=<?php echo $current_lang; ?>" class="inline-flex items-center justify-center bg-primary text-white px-4 py-2 rounded-lg hover:bg-opacity-90 transition-colors">
                        <svg class="h-5 w-5 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                        <?php echo $translations['request_demo']; ?>
                    </a>
                </li>
                
                <!-- Language Options in Mobile Menu -->
                <li class="pt-3 mt-2 border-t border-gray-100">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-sm text-gray-500"><?php echo $translations['language'] ?? 'Language'; ?></span>
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <a href="<?php echo $current_url; ?>?lang=ar<?php echo $query_string; ?>" class="flex items-center justify-center py-2 rounded-md <?php echo $current_lang == 'ar' ? 'bg-primary bg-opacity-10 text-primary' : 'bg-gray-100 text-gray-800 hover:bg-gray-200'; ?> transition-colors">
                            <span class="flag-icon flag-icon-eg mr-2"></span>
                            <span>العربية</span>
                        </a>
                        <a href="<?php echo $current_url; ?>?lang=en<?php echo $query_string; ?>" class="flex items-center justify-center py-2 rounded-md <?php echo $current_lang == 'en' ? 'bg-primary bg-opacity-10 text-primary' : 'bg-gray-100 text-gray-800 hover:bg-gray-200'; ?> transition-colors">
                            <span class="flag-icon flag-icon-us mr-2"></span>
                            <span>English</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>

<!-- Flag Icons CSS Library (CDN) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">

<style>
[dir="rtl"] body {
    overflow-x: hidden !important;
}
</style>
<script>
    // Simple dropdown toggle script
    document.addEventListener('DOMContentLoaded', function() {
        const langButton = document.getElementById('langButton');
        const langDropdown = document.getElementById('langDropdown');
        const mobileToggle = document.getElementById('mobile-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        
        // Language Dropdown Toggle
        if (langButton && langDropdown) {
            langButton.addEventListener('click', function() {
                langDropdown.classList.toggle('hidden');
            });
            
            // Close language dropdown when clicking elsewhere
            document.addEventListener('click', function(event) {
                if (!langButton.contains(event.target) && !langDropdown.contains(event.target)) {
                    langDropdown.classList.add('hidden');
                }
            });
        }
        
        // Mobile Menu Toggle
        if (mobileToggle && mobileMenu) {
            mobileToggle.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        }
    });
</script>