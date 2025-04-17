<!-- Docs Header -->
<section class="bg-secondary text-white py-12">
    <div class="container mx-auto px-4">
        <div class="max-w-5xl mx-auto">
            <h1 class="text-3xl md:text-4xl font-bold mb-4"><?php echo $translations['documentation_title']; ?></h1>
            <p class="text-xl text-gray-200"><?php echo $translations['documentation_subtitle']; ?></p>
            
            <!-- Search Bar -->
            <div class="mt-8 max-w-2xl relative">
                <div class="relative">
                    <!-- أيقونة البحث -->
                    <div class="absolute inset-y-0 <?php echo $current_lang == 'ar' ? 'right' : 'left'; ?>-0 flex items-center <?php echo $current_lang == 'ar' ? 'pr-3' : 'pl-3'; ?> pointer-events-none">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    
                    <!-- حقل البحث -->
                    <input type="text" id="docsSearch" class="block w-full p-4 <?php echo $current_lang == 'ar' ? 'pr-12' : 'pl-12'; ?> text-sm text-gray-700 bg-white rounded-lg border border-gray-300 focus:ring-primary focus:border-primary" placeholder="<?php echo $translations['search_docs']; ?>">
                </div>
                
                <!-- حاوية نتائج البحث -->
                <div id="searchResults" class="absolute z-10 bg-white rounded-lg shadow-lg p-0 mt-1 w-full max-w-2xl hidden">
                    <!-- سيتم عرض النتائج هنا بواسطة JavaScript -->
                </div>
            </div>
        </div>
    </div>
</section>