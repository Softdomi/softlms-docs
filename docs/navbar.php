<?php $isRTL = $current_lang == 'ar'; ?>

<!-- Docs Navigation Bar -->
<nav class="bg-white shadow-sm py-4 md:py-0">
    <div class="container mx-auto px-4 md:px-16">
        <div class="flex items-center justify-between ">
            <!-- Left Section: Back to Home -->
      
            <div class="flex items-center md:hidden text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 <?php echo $isRTL ? 'ml-1' : 'mr-1'; ?>" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                </svg>
                <span class="font-medium"><?php echo $translations['documentation_title']; ?></span>
            </div>
            <!-- Toggler Button (Mobile only) -->
            <button id="navbarToggle" class="md:hidden text-gray-600 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <!-- Responsive Menu -->
        <div id="navbarMenu" class="hidden md:flex md:items-center md:justify-between py-4 border-t md:border-none md:flex-row flex-col gap-4">
            
            <!-- Left Section: Current Section Title -->
            <div class=" hidden md:flex items-center text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 <?php echo $isRTL ? 'ml-1' : 'mr-1'; ?>" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                </svg>
                <span class="font-medium"><?php echo $translations['documentation_title']; ?></span>
            </div>

            <!-- Right Section -->
            <div class="flex flex-col md:flex-row md:items-center gap-4 <?php echo $isRTL ? 'md:space-x-reverse' : ''; ?>">
                <!-- Language Switcher -->
                 
                <div class="relative">
                    <button type="button" id="langSwitcherBtn" class="flex items-center text-sm px-3 py-2 rounded-md hover:bg-gray-100 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-secondary" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.56-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.56.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z" clip-rule="evenodd" />
                        </svg>
                        <span class="<?php echo $isRTL ? 'mr-1' : 'ml-1'; ?>">
                            <?php echo $current_lang == 'ar' ? 'العربية' : 'English'; ?>
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div id="langDropdown" class="absolute <?php echo $isRTL ? 'left-0' : 'right-0'; ?> mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 hidden">
                        <a href="?lang=en" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">English</a>
                        <a href="?lang=ar" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">العربية</a>
                    </div>
                </div>

                <!-- Docs Home -->
                <a href="index.php" class="text-sm px-3 py-2 rounded-md hover:bg-gray-100 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-secondary <?php echo $isRTL ? 'ml-1' : 'mr-1'; ?>" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                    <span><?php echo $translations['docs_home'] ?? ($isRTL ? 'صفحة التوثيق الرئيسية' : 'Docs Home'); ?></span>
                </a>

                <div class="flex items-center <?php echo $isRTL ? 'flex-row-reverse space-x-reverse' : 'space-x-2'; ?>">
                <a href="../index.php" class="flex items-center text-secondary hover:text-primary transition-colors px-3 md:px-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 <?php echo $isRTL ? 'ml-1 rotate-180' : 'mr-1'; ?>" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                    </svg>
                    <span><?php echo $translations['back_to_home'] ?? ($isRTL ? 'العودة للرئيسية' : 'Back to Home'); ?></span>
                </a>
            </div>
            </div>
        </div>
    </div>
</nav>

<!-- Toggle Script -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggle = document.getElementById('navbarToggle');
        const menu = document.getElementById('navbarMenu');
        const langBtn = document.getElementById('langSwitcherBtn');
        const langDropdown = document.getElementById('langDropdown');

        toggle.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        langBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            langDropdown.classList.toggle('hidden');
        });

        document.addEventListener('click', function (e) {
            if (!langBtn.contains(e.target) && !langDropdown.contains(e.target)) {
                langDropdown.classList.add('hidden');
            }
        });
    });
</script>
