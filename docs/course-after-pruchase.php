<?php
// تحديد اللغة الحالية
$current_lang = isset($_GET['lang']) ? $_GET['lang'] : 'ar';

// تحميل ملف الترجمة المناسب
include_once "translations/{$current_lang}.php";

// تحديد الصفحة الحالية لتفعيل العنصر في شريط التنقل
$page = 'docs';
$active_section = 'students_guide';
?>

<!DOCTYPE html>
<html lang="<?php echo $current_lang; ?>" dir="<?php echo $current_lang == 'ar' ? 'rtl' : 'ltr'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $translations['course_after_pruchase']; ?> - SoftLMS</title>
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


    <!-- my courses  --------------------------------- -->
    <div>
    <div class="border-b pb-4 mb-6">
     <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['course_after_pruchase']; ?></h1>
        <p class="text-gray-600 mt-2"><?php echo $translations['course_after_pruchase_subtitle']; ?></p>
    </div>
    <div class="my-courses mb-16 ">
    <?php

$imageSrc = $current_lang === 'ar' ? 'my-courses-ar.png' : 'my-courses-en.png';
?>

<div class="img object-fit-cover">
    <img src="../assets/images/docs-imgs/<?= $imageSrc ?>" alt="my courses" class="w-full">
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
                                            <h3 class="font-semibold text-secondary"><?php echo $translations['course_after_pruchase_desc1']; ?></h3>
        
                                        </div>
                                    </div>
                                    
                                    <div class="flex">
                                    <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
                                            </svg></div>
                                        <div class="ms-2">
                                            <h3 class="font-semibold text-secondary"><?php echo $translations['course_after_pruchase_desc2']; ?></h3>
                                            
                                        </div>
                                    </div>
                                    
                                  
                                </div>
                            
       </div>
    </div>
    </div>

<!-- course content ----------------------------------------------------------------- -->
    <div>
    <div class="border-b pb-4 mb-6">
     <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['course_content']; ?></h1>
        <p class="text-gray-600 mt-2"><?php echo $translations['st_course_content_subtitle']; ?></p>
    </div>
    <div class="course-content mb-16 ">
    <?php

$imageSrc = $current_lang === 'ar' ? 'course-content-ar.png' : 'course-content2-en.png';
?>

<div class="img object-fit-cover">
    <img src="../assets/images/docs-imgs/<?= $imageSrc ?>" alt="course content" class="w-full">
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
                               <h3 class="font-semibold text-secondary"><?php echo $translations['st_course_content_desc1']; ?></h3>
        
                         </div>
             </div>

             <div class="flex">
                 <div class="flex-shrink-0  flex items-center justify-center text-white font-bold">
                     <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                         <div class="ms-2">
                               <h3 class="font-semibold text-secondary"><?php echo $translations['st_course_content_desc2']; ?></h3>
        
                         </div>
             </div>

             <div class="flex">
                 <div class="flex-shrink-0  flex items-center justify-center text-white font-bold">
                     <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                         <div class="ms-2">
                               <h3 class="font-semibold text-secondary"><?php echo $translations['st_course_content_desc3']; ?></h3>
        
                         </div>
             </div>
             <div class="flex">
                 <div class="flex-shrink-0  flex items-center justify-center text-white font-bold">
                     <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                         <div class="ms-2">
                               <h3 class="font-semibold text-secondary"><?php echo $translations['st_course_content_desc4']; ?></h3>
        
                         </div>
             </div>
    </div>
                            
       </div>
    </div>
    </div>

    <!-- quizes ----------------------------------------------------------------- -->
    <div>
    <div class="border-b pb-4 mb-6">
     <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['quizes']; ?></h1>
        <p class="text-gray-600 mt-2"><?php echo $translations['quizes_subtitle']; ?></p>
    </div>
    <div class="confirm-email mb-16 ">
    <?php

$imageSrc = $current_lang === 'ar' ? 'quiz-ar.png' : 'quiz-en.png';
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
                               <h3 class="font-semibold text-secondary"><?php echo $translations['quizes_desc1']; ?></h3>
        
                         </div>
             </div>

             <div class="flex">
                 <div class="flex-shrink-0  flex items-center justify-center text-white font-bold">
                     <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                         <div class="ms-2">
                               <h3 class="font-semibold text-secondary"><?php echo $translations['quizes_desc2']; ?></h3>
        
                         </div>
             </div>
             <div class="flex">
                 <div class="flex-shrink-0  flex items-center justify-center text-white font-bold">
                     <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                         <div class="ms-2">
                               <h3 class="font-semibold text-secondary"><?php echo $translations['quizes_desc3']; ?></h3>
        
                         </div>
             </div>
             <div class="flex">
                 <div class="flex-shrink-0  flex items-center justify-center text-white font-bold">
                     <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                         <div class="ms-2">
                               <h3 class="font-semibold text-secondary"><?php echo $translations['quizes_desc4']; ?></h3>
        
                         </div>
             </div>
             <div class="flex">
                 <div class="flex-shrink-0  flex items-center justify-center text-white font-bold">
                     <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                         <div class="ms-2">
                               <h3 class="font-semibold text-secondary"><?php echo $translations['quizes_desc5']; ?></h3>
        
                         </div>
             </div>
             <div class="flex">
                 <div class="flex-shrink-0  flex items-center justify-center text-white font-bold">
                     <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                         <div class="ms-2">
                               <h3 class="font-semibold text-secondary"><?php echo $translations['quizes_desc6']; ?></h3>
        
                         </div>
             </div>

         
    </div>
                            
       </div>
    </div>
    </div>



     <!-- tabs --------------------------------------------- -->
     <div>
    <div class="border-b pb-4 mb-6">
     <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['tabs']; ?></h1>
        <p class="text-gray-600 mt-2"><?php echo $translations['tabs_subtitle']; ?></p>
    </div>
    <div class="tabs mb-16 ">
        <!-- tab1 --------------- -->
    <?php

$imageSrc = $current_lang === 'ar' ? 'tab1-ar.png' : 'tab1-en.png';
?>

<div class="img object-fit-cover">
    <img src="../assets/images/docs-imgs/<?= $imageSrc ?>" alt="course tabs" class="w-full">
</div>
       <div class="content p-6 border border-xl rounded-md border-s-4 border-s-primary shadow mt-6 mb-12">
       <h2 class = " flex gap-2 font-bold font-medium text-md mb-4 "> <span>
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
</svg>

       </span><span> <?php echo $translations['attention']; ?> </span>  </h2>
       <p class = "">
       <?php echo $translations['tabs_desc1']; ?>
       </p>
                            
       </div>

       <!-- tab2 ------------------- -->
       <?php

$imageSrc = $current_lang === 'ar' ? 'tab2-ar.png' : 'tab2-en.png';
?>

<div class="img object-fit-cover">
    <img src="../assets/images/docs-imgs/<?= $imageSrc ?>" alt="course tabs" class="w-full">
</div>
       <div class="content p-6 border border-xl rounded-md border-s-4 border-s-primary shadow mt- mb-12">
       <h2 class = " flex gap-2 font-bold font-medium text-md mb-4 "> <span>
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
</svg>

       </span><span> <?php echo $translations['attention']; ?> </span>  </h2>
       <p class = "">
       <?php echo $translations['tabs_desc2']; ?>
       </p>
                            
       </div>

       <!-- tab3 ------------ -->
       <?php

$imageSrc = $current_lang === 'ar' ? 'tab3-ar.png' : 'tab3-en.png';
?>

<div class="img object-fit-cover">
    <img src="../assets/images/docs-imgs/<?= $imageSrc ?>" alt="course tabs" class="w-full">
</div>
       <div class="content p-6 border border-xl rounded-md border-s-4 border-s-primary shadow mt-6 mb-12">
       <h2 class = " flex gap-2 font-bold font-medium text-md mb-4 "> <span>
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
</svg>

       </span><span> <?php echo $translations['attention']; ?> </span>  </h2>
       <p class = "">
       <?php echo $translations['tabs_desc3']; ?>
       </p>
                            
       </div>

       <!-- tab4  -->
       <?php

$imageSrc = $current_lang === 'ar' ? 'tab4-ar.png' : 'tab4-en.png';
?>

<div class="img object-fit-cover">
    <img src="../assets/images/docs-imgs/<?= $imageSrc ?>" alt="course tabs" class="w-full">
</div>
       <div class="content p-6 border border-xl rounded-md border-s-4 border-s-primary shadow mt-6 mb-12">
       <h2 class = " flex gap-2 font-bold font-medium text-md mb-4 "> <span>
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
</svg>

       </span><span> <?php echo $translations['attention']; ?> </span>  </h2>
       <p class = "">
       <?php echo $translations['tabs_desc4']; ?>
       </p>
                            
       </div>

       <!-- tb5 ----------------------- -->
       <?php

$imageSrc = $current_lang === 'ar' ? 'tab5-ar.png' : 'tab5-en.png';
?>

<div class="img object-fit-cover">
    <img src="../assets/images/docs-imgs/<?= $imageSrc ?>" alt="course tabs" class="w-full">
</div>
       <div class="content p-6 border border-xl rounded-md border-s-4 border-s-primary shadow mt- mb-12">
       <h2 class = " flex gap-2 font-bold font-medium text-md mb-4 "> <span>
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
</svg>

       </span><span> <?php echo $translations['attention']; ?> </span>  </h2>
       <p class = "">
       <?php echo $translations['tabs_desc5']; ?>
       </p>
                            
       </div>
    </div>
    </div>



   
            </div>
    </div>
        </div>
    </section>


</body>
</html>