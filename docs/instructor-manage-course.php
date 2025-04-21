<?php
// تحديد اللغة الحالية
$current_lang = isset($_GET['lang']) ? $_GET['lang'] : 'ar';

// تحميل ملف الترجمة المناسب
include_once "translations/{$current_lang}.php";

// تحديد الصفحة الحالية لتفعيل العنصر في شريط التنقل
$page = 'docs';
$active_section = 'instructors_guide';
?>

<!DOCTYPE html>
<html lang="<?php echo $current_lang; ?>" dir="<?php echo $current_lang == 'ar' ? 'rtl' : 'ltr'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $translations['manage_course']; ?> - SoftLMS</title>
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
    <!-- <?php include 'navbar.php'; ?>
    

   <?php include 'header.php'; ?> -->
   

    <!-- Main Documentation Area -->
    <section class="py-8">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
            <div class="flex flex-col lg:flex-row gap-2 lg:gap-8">

<!-- Sidebar -->
<?php include 'sidebar.php'; ?>
 <!-- Main Content Area -->
 <div class="lg:w-3/4 <?php echo $current_lang == 'ar ' ? 'lg:pr-8 ' : 'lg:pl-8 '; ?>">


 
    <div>

  
<div class="border-b pb-4 mb-6">
  <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['inst_add_course']; ?></h1>
     <p class="text-gray-600 mt-2"><?php echo $translations['inst_add_course_subtitle']; ?></p>
 </div>
<!-- course basic info  ---------------------------------- -->
 <div class="  mb-16   <?php echo $current_lang == 'ar ' ? ' rtl' : ' ltr'; ?>">


    <div class="course-basic mb-16 ">
       
    <?php
$imageSrc = $current_lang === 'ar' ? 'inst-add-course1-ar.png' : 'inst-add-course1-en.png';
?>

<div class="img object-fit-cover">
    <img src="../assets/images/docs-imgs/<?= $imageSrc ?>" alt="payout report" class="w-full">
</div>
       <div class="content p-6 border border-xl rounded-md border-s-4 border-s-primary shadow mt-6 mb-12">
       <h2 class = " flex gap-2 font-bold font-medium text-md mb-4 "> <span>
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
</svg>

       </span><span> <?php echo $translations['attention']; ?> </span>  </h2>
       <div class=" flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_basic_desc1']; ?></h3>
                            
            </div>
          </div>  
          <div class="flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_basic_desc2']; ?></h3>
                            
            </div>
          </div> 
          <div class="flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_basic_desc3']; ?></h3>
                            
            </div>
          </div> 
          <div class="flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_basic_desc4']; ?></h3>
                            
            </div>
          </div>               
       </div>

    
    </div>
    </div>
    </div>

<!-- course info  ------------------------------------------------------------>
<div>

  
<div class="border-b pb-4 mb-6">
  <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['course_info']; ?></h1>
     <p class="text-gray-600 mt-2"><?php echo $translations['course_info_subtitle']; ?></p>
 </div>
<!-- inst-dashboard section ---------------------------------- -->
 <div class="  mb-16   <?php echo $current_lang == 'ar ' ? ' rtl' : ' ltr'; ?>">


    <div class="sales-report mb-16 ">
       
    <?php
$imageSrc = $current_lang === 'ar' ? 'inst-add-course2-ar.png' : 'inst-add-course2-en.png';
?>

<div class="img object-fit-cover">
    <img src="../assets/images/docs-imgs/<?= $imageSrc ?>" alt="payout report" class="w-full">
</div>
       <div class="content p-6 border border-xl rounded-md border-s-4 border-s-primary shadow mt-6 mb-12">
       <h2 class = " flex gap-2 font-bold font-medium text-md mb-4 "> <span>
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
</svg>

       </span><span> <?php echo $translations['attention']; ?> </span>  </h2>
       <div class=" flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_info_desc1']; ?></h3>
                            
            </div>
          </div>  
          <div class="flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_info_desc2']; ?></h3>
                            
            </div>
          </div> 
          <div class="flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_info_desc3']; ?></h3>
                            
            </div>
          </div> 
          <div class="flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_info_desc4']; ?></h3>
                            
            </div>
          </div>               
       </div>

    
    </div>
    </div>
    </div>

    <!-- course pricing  ------------------------------------------------------------>
<div>

  
<div class="border-b pb-4 mb-6">
  <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['course_pricing']; ?></h1>
     <p class="text-gray-600 mt-2"><?php echo $translations['course_pricing_subtitle']; ?></p>
 </div>
<!-- inst-dashboard section ---------------------------------- -->
 <div class="  mb-16   <?php echo $current_lang == 'ar ' ? ' rtl' : ' ltr'; ?>">


    <div class="sales-report mb-16 ">
       
    <?php
$imageSrc = $current_lang === 'ar' ? 'pricing-ar.png' : 'pricing-en.png';
?>

<div class="img object-fit-cover">
    <img src="../assets/images/docs-imgs/<?= $imageSrc ?>" alt="payout report" class="w-full">
</div>
       <div class="content p-6 border border-xl rounded-md border-s-4 border-s-primary shadow mt-6 mb-12">
       <h2 class = " flex gap-2 font-bold font-medium text-md mb-4 "> <span>
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
</svg>

       </span><span> <?php echo $translations['attention']; ?> </span>  </h2>
       <div class=" flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_pricing_desc1']; ?></h3>
                            
            </div>
          </div>  
          <div class="flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_pricing_desc2']; ?></h3>
                            
            </div>
          </div> 
          <div class="flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_pricing_desc3']; ?></h3>
                            
            </div>
          </div> 
          <div class="flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_pricing_desc4']; ?></h3>
                            
            </div>
          </div>               
       </div>

    
    </div>
    </div>
    </div>

    <!-- course media  ------------------------------------------------------------>
<div>

<div class="border-b pb-4 mb-6">
  <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['course_media']; ?></h1>
     <p class="text-gray-600 mt-2"><?php echo $translations['course_media_subtitle']; ?></p>
 </div>
<!-- inst-dashboard section ---------------------------------- -->
 <div class="  mb-16   <?php echo $current_lang == 'ar ' ? ' rtl' : ' ltr'; ?>">


    <div class="sales-report mb-16 ">
       
    <?php
$imageSrc = $current_lang === 'ar' ? 'media-ar.png' : 'media-en.png';
?>

<div class="img object-fit-cover">
    <img src="../assets/images/docs-imgs/<?= $imageSrc ?>" alt="payout report" class="w-full">
</div>
       <div class="content p-6 border border-xl rounded-md border-s-4 border-s-primary shadow mt-6 mb-12">
       <h2 class = " flex gap-2 font-bold font-medium text-md mb-4 "> <span>
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
</svg>

       </span><span> <?php echo $translations['attention']; ?> </span>  </h2>
       <div class=" flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_media_desc1']; ?></h3>
                            
            </div>
          </div>  
          <div class="flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_media_desc2']; ?></h3>
                            
            </div>
          </div> 
               
       </div>

    
    </div>
    </div>
    </div>


    <!-- course seo --------------------------------------------------------- -->
    <div>

<div class="border-b pb-4 mb-6">
  <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['course_seo']; ?></h1>
     <p class="text-gray-600 mt-2"><?php echo $translations['course_seo_subtitle']; ?></p>
 </div>
<!-- inst-dashboard section ---------------------------------- -->
 <div class="  mb-16   <?php echo $current_lang == 'ar ' ? ' rtl' : ' ltr'; ?>">


    <div class="sales-report mb-16 ">
       
    <?php
$imageSrc = $current_lang === 'ar' ? 'seo-ar.png' : 'seo-en.png';
?>

<div class="img object-fit-cover">
    <img src="../assets/images/docs-imgs/<?= $imageSrc ?>" alt="payout report" class="w-full">
</div>
       <div class="content p-6 border border-xl rounded-md border-s-4 border-s-primary shadow mt-6 mb-12">
       <h2 class = " flex gap-2 font-bold font-medium text-md mb-4 "> <span>
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
</svg>

       </span><span> <?php echo $translations['attention']; ?> </span>  </h2>
       <div class=" flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_seo_desc1']; ?></h3>
                            
            </div>
          </div>  
          <div class="flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_seo_desc2']; ?></h3>
                            
            </div>
          </div> 
               
       </div>

    
    </div>
    </div>
    </div>

    <!-- finish ------------------------------------------------ -->
    <div>

<div class="border-b pb-4 mb-6">
  <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['course_finish']; ?></h1>
     <p class="text-gray-600 mt-2"><?php echo $translations['course_finish_subtitle']; ?></p>
 </div>
<!-- inst-dashboard section ---------------------------------- -->
 <div class="  mb-16   <?php echo $current_lang == 'ar ' ? ' rtl' : ' ltr'; ?>">


    <div class="sales-report mb-16 ">
       
    <?php
$imageSrc = $current_lang === 'ar' ? 'finish-ar.png' : 'finish-en.png';
?>

<div class="img object-fit-cover">
    <img src="../assets/images/docs-imgs/<?= $imageSrc ?>" alt="finish" class="w-full">
</div>
       <div class="content p-6 border border-xl rounded-md border-s-4 border-s-primary shadow mt-6 mb-12">
       <h2 class = " flex gap-2 font-bold font-medium text-md mb-4 "> <span>
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
</svg>

       </span><span> <?php echo $translations['attention']; ?> </span>  </h2>
       <div class=" flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_finish_desc1']; ?></h3>
                            
            </div>
          </div>  
          <div class=" flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_finish_desc2']; ?></h3>
                            
            </div>
          </div>  

       </div>
    </div>
    </div>
    </div>
     <!-- content ------------------------------------------------ -->
     <div>
     <div class="border-b pb-4 mb-6">
  <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['course_features']; ?></h1>
     <p class="text-gray-600 mt-2"><?php echo $translations['course_features_subtitle']; ?></p>
 </div>

<div class="border-b pb-4 mb-6">
  <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['course_content']; ?></h1>
     <p class="text-gray-600 mt-2"><?php echo $translations['course_content_subtitle']; ?></p>
 </div>
<!-- inst-dashboard section ---------------------------------- -->
 <div class="  mb-16   <?php echo $current_lang == 'ar ' ? ' rtl' : ' ltr'; ?>">


    <div class="content mb-16 ">
       
    <?php
$imageSrc = $current_lang === 'ar' ? 'cour-content-ar.png' : 'course-content-en.png';
?>

<div class="img object-fit-cover">
    <img src="../assets/images/docs-imgs/<?= $imageSrc ?>" alt="content" class="w-full">
</div>
       <div class="content p-6 border border-xl rounded-md border-s-4 border-s-primary shadow mt-6 mb-12">
       <h2 class = " flex gap-2 font-bold font-medium text-md mb-4 "> <span>
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
</svg>

       </span><span> <?php echo $translations['attention']; ?> </span>  </h2>
       <div class=" flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_content_desc1']; ?></h3>
                            
            </div>
          </div>  
          <div class=" flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_content_desc2']; ?></h3>
                            
            </div>
          </div>  
          <div class=" flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_content_desc3']; ?></h3>
                            
            </div>
          </div> 
          <div class=" flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_content_desc4']; ?></h3>
                            
            </div>
          </div>  
          <div class=" flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_content_desc5']; ?></h3>
                            
            </div>
          </div> 
          <div class=" flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_content_desc6']; ?></h3>
                            
            </div>
          </div>  
          <div class=" flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_content_desc7']; ?></h3>
                            
            </div>
          </div> 

               
       </div>

    
    </div>
    </div>
    </div>

    <!-- progress ------------------------------------------------ -->
    <div>

<div class="border-b pb-4 mb-6">
  <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['course_progress']; ?></h1>
     <p class="text-gray-600 mt-2"><?php echo $translations['course_progress_subtitle']; ?></p>
 </div>
<!-- inst-dashboard section ---------------------------------- -->
 <div class="  mb-16   <?php echo $current_lang == 'ar ' ? ' rtl' : ' ltr'; ?>">


    <div class="progress mb-16 ">
       
    <?php
$imageSrc = $current_lang === 'ar' ? 'progress-ar.png' : 'progress-en.png';
?>

<div class="img object-fit-cover">
    <img src="../assets/images/docs-imgs/<?= $imageSrc ?>" alt="progress" class="w-full">
</div>
       <div class="content p-6 border border-xl rounded-md border-s-4 border-s-primary shadow mt-6 mb-12">
       <h2 class = " flex gap-2 font-bold font-medium text-md mb-4 "> <span>
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
</svg>

       </span><span> <?php echo $translations['attention']; ?> </span>  </h2>
       <div class=" flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_progress_desc1']; ?></h3>
                            
            </div>
          </div>  
          <div class=" flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_progress_desc2']; ?></h3>
                            
            </div>
          </div>  
          <div class=" flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_progress_desc3']; ?></h3>
                            
            </div>
          </div>  
               
       </div>

    
    </div>
    </div>
    </div>


    <!-- assignment ------------------------------------------------ -->
    <div>

<div class="border-b pb-4 mb-6">
  <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['course_assignment']; ?></h1>
     <p class="text-gray-600 mt-2"><?php echo $translations['course_assignment_subtitle']; ?></p>
 </div>
<!-- inst-dashboard section ---------------------------------- -->
 <div class="  mb-16   <?php echo $current_lang == 'ar ' ? ' rtl' : ' ltr'; ?>">


    <div class="assignment mb-16 ">
       
    <?php
$imageSrc = $current_lang === 'ar' ? 'assignment-ar.png' : 'assignment-en.png';
?>

<div class="img object-fit-cover">
    <img src="../assets/images/docs-imgs/<?= $imageSrc ?>" alt="assignment" class="w-full">
</div>
       <div class="content p-6 border border-xl rounded-md border-s-4 border-s-primary shadow mt-6 mb-12">
       <h2 class = " flex gap-2 font-bold font-medium text-md mb-4 "> <span>
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
</svg>

       </span><span> <?php echo $translations['attention']; ?> </span>  </h2>
       <div class=" flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_assignment_desc1']; ?></h3>
                            
            </div>
          </div>  
          <div class=" flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_assignment_desc2']; ?></h3>
                            
            </div>
          </div>  
          <div class=" flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_assignment_desc3']; ?></h3>
                            
            </div>
          </div>  
               
       </div>

    
    </div>
    </div>
    </div>

        <!-- meetings ------------------------------------------------ -->
        <div>

<div class="border-b pb-4 mb-6">
  <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['course_meetings']; ?></h1>
     <p class="text-gray-600 mt-2"><?php echo $translations['course_meetings_subtitle']; ?></p>
 </div>
<!-- inst-dashboard section ---------------------------------- -->
 <div class="  mb-16   <?php echo $current_lang == 'ar ' ? ' rtl' : ' ltr'; ?>">


    <div class="meetings mb-16 ">
       
    <?php
$imageSrc = $current_lang === 'ar' ? 'zoom-ar.png' : 'zoom-en.png';
?>

<div class="img object-fit-cover">
    <img src="../assets/images/docs-imgs/<?= $imageSrc ?>" alt="meetings" class="w-full">
</div>
       <div class="content p-6 border border-xl rounded-md border-s-4 border-s-primary shadow mt-6 mb-12">
       <h2 class = " flex gap-2 font-bold font-medium text-md mb-4 "> <span>
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
</svg>

       </span><span> <?php echo $translations['attention']; ?> </span>  </h2>
       <div class=" flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['course_meetings_desc1']; ?></h3>
                            
            </div>
          </div>  
          
               
       </div>

    
    </div>
    </div>
    </div>

    <!-- note  -->
        <div>
 
    <div class="note mb-16 ">


       <div class="content p-6 flex flex-col justify-center items-center text-center gap-2 border border-xl rounded-md border-t-4 border-t-primary shadow mt-6">
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10 text-center">
  <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
</svg>

       <h2 class = " text-center font-bold font-medium text-md  "> <span>
  

        <?php echo $translations['note']; ?>   </h2>
       <p class = "">
       <?php echo $translations['note_3']; ?>
       </p>
                            
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