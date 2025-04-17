<?php
// تحديد اللغة الحالية
$current_lang = isset($_GET['lang']) ? $_GET['lang'] : 'ar';

// تحميل ملف الترجمة المناسب
include_once "translations/{$current_lang}.php";

// تحديد الصفحة الحالية لتفعيل العنصر في شريط التنقل
$page = 'docs';
$active_section = 'getting-started';
?>

<!DOCTYPE html>
<html lang="<?php echo $current_lang; ?>" dir="<?php echo $current_lang == 'ar' ? 'rtl' : 'ltr'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $translations['course_pruchase']; ?> - SoftLMS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- addons -->
    <link rel="stylesheet" href="styles.css">
    <script src="scripts.js"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#f4921d',
                        secondary: '#0f2a45',
                    }
                }
            }
        }
    </script>
    <?php if ($current_lang == 'ar'): ?>
    <?php endif; ?>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="<?php echo $current_lang == 'ar' ? 'font-cairo rtl' : 'ltr'; ?> bg-gray-50">
    
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>
    
<!-- Header -->
   <?php include 'header.php'; ?>
   

    <!-- Main Documentation Area -->
    <section class="py-8">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
            <div class="flex flex-col lg:flex-row gap-8">

<!-- Sidebar -->
<?php include 'sidebar.php'; ?>
 <!-- Main Content Area -->
 <div class="lg:w-3/4 <?php echo $current_lang == 'ar ' ? 'lg:pr-8 ' : 'lg:pl-8 '; ?>">
   <!-- section Title -->
    <div>

  
   <div class="border-b pb-4 mb-6">
     <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['course_pruchase']; ?></h1>
        <p class="text-gray-600 mt-2"><?php echo $translations['course_pruchase_subtitle']; ?></p>
    </div>
<!-- pruchase courses steps section ---------------------------------- -->
    <div class="pruchase-steps flex flex-col lg:flex-row mb-16 gap-8 items-center <?php echo $current_lang == 'ar ' ? ' rtl' : ' ltr'; ?>">
    <?php
$imageSrc = $current_lang === 'ar' ? 'courses-page-ar.png' : 'courses-page-en.png';
?>

<div class="img w-[90%] object-fit-cover">
    <img src="../assets/images/docs-imgs/<?= $imageSrc ?>" alt="pruchase course" class="w-full">
</div>
       <div class="content">
       <h2 class="text-xl font-bold text-secondary mb-4"><?php echo $translations['courses_redirect']; ?></h2>
                                
                                <!-- Steps -->
                                <div class="space-y-4">
                                    <div class="flex">
                                        <div class="flex-shrink-0 h-8 w-8 bg-primary rounded-full flex items-center justify-center text-white font-bold">1</div>
                                        <div class="ms-4">
                                            <h3 class="font-semibold text-secondary"><?php echo $translations['pruchase_course_step1']; ?></h3>
        
                                        </div>
                                    </div>
                                    
                                    <div class="flex">
                                        <div class="flex-shrink-0 h-8 w-8 bg-primary rounded-full flex items-center justify-center text-white font-bold">2</div>
                                        <div class="ms-4">
                                            <h3 class="font-semibold text-secondary"><?php echo $translations['pruchase_course_step2']; ?></h3>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="flex">
                                        <div class="flex-shrink-0 h-8 w-8 bg-primary rounded-full flex items-center justify-center text-white font-bold">3</div>
                                        <div class="ms-4">
                                            <h3 class="font-semibold text-secondary"><?php echo $translations['pruchase_course_step3']; ?></h3>
                                          
                                        </div>
                                    </div>

                                    <div class="flex">
                                        <div class="flex-shrink-0 h-8 w-8 bg-primary rounded-full flex items-center justify-center text-white font-bold">4</div>
                                        <div class="ms-4">
                                            <h3 class="font-semibold text-secondary"><?php echo $translations['pruchase_course_step4']; ?></h3>
                            
                                        </div>
                                    </div>

                                    <div class="flex">
                                        <div class="flex-shrink-0 h-8 w-8 bg-primary rounded-full flex items-center justify-center text-white font-bold">4</div>
                                        <div class="ms-4">
                                            <h3 class="font-semibold text-secondary"><?php echo $translations['pruchase_course_step5']; ?></h3>
                            
                                        </div>
                                    </div>

                                    <div class="flex">
                                        <div class="flex-shrink-0 h-8 w-8 bg-primary rounded-full flex items-center justify-center text-white font-bold">4</div>
                                        <div class="ms-4">
                                            <h3 class="font-semibold text-secondary"><?php echo $translations['pruchase_course_step6']; ?></h3>
                            
                                        </div>
                                    </div>
                                </div>
       </div>
    </div>
    </div>

    <!-- course details  --------------------------------- -->
    <div>
    <div class="border-b pb-4 mb-6">
     <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['course_details']; ?></h1>
        <p class="text-gray-600 mt-2"><?php echo $translations['course_details_subtitle']; ?></p>
    </div>
    <div class="course-details mb-16 ">
    <?php

$imageSrc = $current_lang === 'ar' ? 'course-details-ar.png' : 'course-details-en.png';
?>

<div class="img object-fit-cover">
    <img src="../assets/images/docs-imgs/<?= $imageSrc ?>" alt="course details" class="w-full">
</div>
       <div class="content p-6 border border-xl rounded-md border-s-4 border-s-primary shadow mt-6">
       <h2 class = " flex gap-2 font-bold font-medium text-md mb-4 "> <span>
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
</svg>

       </span><span> <?php echo $translations['attention']; ?> </span>  </h2>
      
       <!-- Steps -->
       <div class="space-y-4">
                                    <div class="flex">
                                        <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
                                            </svg></div>
                                        <div class="ms-2">
                                            <h3 class="font-semibold text-secondary"><?php echo $translations['course_details_desc1']; ?></h3>
        
                                        </div>
                                    </div>
                                    
                                    <div class="flex">
                                    <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
                                            </svg></div>
                                        <div class="ms-2">
                                            <h3 class="font-semibold text-secondary"><?php echo $translations['course_details_desc2']; ?></h3>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="flex">
                                    <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
                                            </svg></div>
                                        <div class="ms-2">
                                            <h3 class="font-semibold text-secondary"><?php echo $translations['course_details_desc3']; ?></h3>
                                          
                                        </div>
                                    </div>

                                    <div class="flex">
                                    <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
                                            </svg></div>
                                        <div class="ms-2">
                                            <h3 class="font-semibold text-secondary"><?php echo $translations['course_details_desc4']; ?></h3>
                            
                                        </div>
                                    </div>

                                    <div class="flex">
                                    <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
                                            </svg></div>
                                        <div class="ms-2">
                                            <h3 class="font-semibold text-secondary"><?php echo $translations['course_details_desc5']; ?></h3>
                            
                                        </div>
                                    </div>

                                    <div class="flex">
                                    <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
                                            </svg></div>
                                        <div class="ms-2">
                                            <h3 class="font-semibold text-secondary"><?php echo $translations['course_details_desc6']; ?></h3>
                            
                                        </div>
                                    </div>
                                </div>
                            
       </div>
    </div>
    </div>

<!-- shopping-cart ----------------------------------------------------------------- -->
    <div>
    <div class="border-b pb-4 mb-6">
     <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['cart']; ?></h1>
        <p class="text-gray-600 mt-2"><?php echo $translations['cart_subtitle']; ?></p>
    </div>
    <div class="confirm-email mb-16 ">
    <?php

$imageSrc = $current_lang === 'ar' ? 'cart-ar.png' : 'cart-en.png';
?>

<div class="img object-fit-cover">
    <img src="../assets/images/docs-imgs/<?= $imageSrc ?>" alt="shopping cart" class="w-full">
</div>
       <div class="content p-6 border border-xl rounded-md border-s-4 border-s-primary shadow mt-6">
       <h2 class = " flex gap-2 font-bold font-medium text-md mb-4 "> <span>
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
</svg>

       </span><span> <?php echo $translations['attention']; ?> </span>  </h2>
       <!-- Steps -->
       <div class="space-y-4">
             <div class="flex">
                 <div class="flex-shrink-0  flex items-center justify-center text-white font-bold">
                     <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                         <div class="ms-2">
                               <h3 class="font-semibold text-secondary"><?php echo $translations['cart_desc1']; ?></h3>
        
                         </div>
             </div>

             <div class="flex">
                 <div class="flex-shrink-0  flex items-center justify-center text-white font-bold">
                     <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                         <div class="ms-2">
                               <h3 class="font-semibold text-secondary"><?php echo $translations['cart_desc2']; ?></h3>
        
                         </div>
             </div>

             <div class="flex">
                 <div class="flex-shrink-0  flex items-center justify-center text-white font-bold">
                     <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                         <div class="ms-2">
                               <h3 class="font-semibold text-secondary"><?php echo $translations['cart_desc3']; ?></h3>
        
                         </div>
             </div>
    </div>
                            
       </div>
    </div>
    </div>

    <!-- payment methods ----------------------------------------------------------------- -->
    <div>
    <div class="border-b pb-4 mb-6">
     <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['payment']; ?></h1>
        <p class="text-gray-600 mt-2"><?php echo $translations['payment_subtitle']; ?></p>
    </div>
    <div class="confirm-email mb-16 ">
    <?php

$imageSrc = $current_lang === 'ar' ? 'payment-ar.png' : 'payment-en.png';
?>

<div class="img object-fit-cover">
    <img src="../assets/images/docs-imgs/<?= $imageSrc ?>" alt="shopping cart" class="w-full">
</div>
       <div class="content p-6 border border-xl rounded-md border-s-4 border-s-primary shadow mt-6">
       <h2 class = " flex gap-2 font-bold font-medium text-md mb-4 "> <span>
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
</svg>

       </span><span> <?php echo $translations['attention']; ?> </span>  </h2>
       <!-- Steps -->
       <div class="space-y-4">
             <div class="flex">
                 <div class="flex-shrink-0  flex items-center justify-center text-white font-bold">
                     <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                         <div class="ms-2">
                               <h3 class="font-semibold text-secondary"><?php echo $translations['payment_desc1']; ?></h3>
        
                         </div>
             </div>

             <div class="flex">
                 <div class="flex-shrink-0  flex items-center justify-center text-white font-bold">
                     <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                         <div class="ms-2">
                               <h3 class="font-semibold text-secondary"><?php echo $translations['payment_desc2']; ?></h3>
        
                         </div>
             </div>

         
    </div>
                            
       </div>
    </div>
    </div>



     <!-- course bundle --------------------------------------------- -->
     <div>
    <div class="border-b pb-4 mb-6">
     <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['bundle']; ?></h1>
        <p class="text-gray-600 mt-2"><?php echo $translations['bundle_subtitle']; ?></p>
    </div>
    <div class="bundle mb-16 ">
    <?php

$imageSrc = $current_lang === 'ar' ? 'bundle-ar.png' : 'bundle-en.png';
?>

<div class="img object-fit-cover">
    <img src="../assets/images/docs-imgs/<?= $imageSrc ?>" alt="course bundle" class="w-full">
</div>
       <div class="content p-6 border border-xl rounded-md border-s-4 border-s-primary shadow mt-6">
       <h2 class = " flex gap-2 font-bold font-medium text-md mb-4 "> <span>
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
</svg>

       </span><span> <?php echo $translations['attention']; ?> </span>  </h2>
    
       <div class="flex">
                 <div class="flex-shrink-0  flex items-center justify-center text-white font-bold">
                     <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                         <div class="ms-2">
                               <h3 class="font-semibold text-secondary">      <?php echo $translations['bundle_desc']; ?></h3>
        
                         </div>
             </div>              
       </div>
    </div>
    </div>

      <!-- course compare --------------------------------------------- -->
      <div>
    <div class="border-b pb-4 mb-6">
     <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['compare']; ?></h1>
        <p class="text-gray-600 mt-2"><?php echo $translations['compare_subtitle']; ?></p>
    </div>
    <div class="bundle mb-16 ">
    <?php

$imageSrc = $current_lang === 'ar' ? 'compare-ar.png' : 'compare-en.png';
?>

<div class="img object-fit-cover">
    <img src="../assets/images/docs-imgs/<?= $imageSrc ?>" alt="course compare" class="w-full">
</div>
       <div class="content p-6 border border-xl rounded-md border-s-4 border-s-primary shadow mt-6">
       <h2 class = " flex gap-2 font-bold font-medium text-md mb-4 "> <span>
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
</svg>

       </span><span> <?php echo $translations['attention']; ?> </span>  </h2>
        <!-- Steps -->
        <div class="space-y-4">
             <div class="flex">
                 <div class="flex-shrink-0  flex items-center justify-center text-white font-bold">
                     <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                         <div class="ms-2">
                               <h3 class="font-semibold text-secondary"><?php echo $translations['compare_desc1']; ?></h3>
        
                         </div>
             </div>

             <div class="flex">
                 <div class="flex-shrink-0  flex items-center justify-center text-white font-bold">
                     <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                         <div class="ms-2">
                               <h3 class="font-semibold text-secondary"><?php echo $translations['compare_desc2']; ?></h3>
        
                         </div>
             </div>

             <div class="flex">
                 <div class="flex-shrink-0  flex items-center justify-center text-white font-bold">
                     <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                         <div class="ms-2">
                               <h3 class="font-semibold text-secondary"><?php echo $translations['compare_desc3']; ?></h3>
        
                         </div>
             </div>

         
    </div>
                            
       </div>
    </div>
    </div>



            </div>
    </div>
        </div>
    </section>


</body>
</html>