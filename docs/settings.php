<?php
// تحديد اللغة الحالية
$current_lang = isset($_GET['lang']) ? $_GET['lang'] : 'ar';

// تحميل ملف الترجمة المناسب
include_once "translations/{$current_lang}.php";

// تحديد الصفحة الحالية لتفعيل العنصر في شريط التنقل
$page = 'docs';
$active_section = 'admins_guide';
?>

<!DOCTYPE html>
<html lang="<?php echo $current_lang; ?>" dir="<?php echo $current_lang == 'ar' ? 'rtl' : 'ltr'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $translations['settings']; ?> - SoftLMS</title>
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

    <!-- settings --------------- -->
      
    <div>

<div class="border-b pb-4 mb-6">
  <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['settings']; ?></h1>
     <p class="text-gray-600 mt-2"><?php echo $translations['settings_subtitle']; ?></p>
 </div>
<!--system settings---------------------------------- -->
 <div class="  mb-16   <?php echo $current_lang == 'ar ' ? ' rtl' : ' ltr'; ?>">

 <div class="border-b pb-4 mb-6">
  <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['sys_settings']; ?></h1>
     <p class="text-gray-600 mt-2"><?php echo $translations['sys_settings_subtitle']; ?></p>
 </div>

    <div class="settings mb-16 ">
       

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
                <h3 class="font-semibold text-secondary"><?php echo $translations['sys_settings_desc1']; ?></h3>
                            
            </div>
          </div>  
              
          <div class=" flex mb-2">
         <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_lang == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
             </svg></div>
             <div class="ms-2">
                <h3 class="font-semibold text-secondary"><?php echo $translations['sys_settings_desc2']; ?></h3>
                            
            </div>
          </div> 
       </div>

    
    </div>
    </div>

    <!--website settings---------------------------------- -->
 <div class="  mb-16   <?php echo $current_lang == 'ar ' ? ' rtl' : ' ltr'; ?>">

<div class="border-b pb-4 mb-6">
 <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['website_settings']; ?></h1>
    <p class="text-gray-600 mt-2"><?php echo $translations['website_settings_subtitle']; ?></p>
</div>

   <div class="settings mb-16 ">
      

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
               <h3 class="font-semibold text-secondary"><?php echo $translations['website_settings_desc1']; ?></h3>
                           
           </div>
         </div>  
             
      </div>

   
   </div>
   </div>

   <!-- drip content settings  -->
   <div class="  mb-16   <?php echo $current_lang == 'ar ' ? ' rtl' : ' ltr'; ?>">

<div class="border-b pb-4 mb-6">
 <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['drip_content_settings']; ?></h1>
    <p class="text-gray-600 mt-2"><?php echo $translations['drip_content_settings_subtitle']; ?></p>
</div>

   <div class="settings mb-16 ">
      

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
               <h3 class="font-semibold text-secondary"><?php echo $translations['drip_content_settings_desc1']; ?></h3>
                           
           </div>
         </div>  
             
      </div>

   
   </div>
   </div>

     <!-- certificate settings  -->
     <div class="  mb-16   <?php echo $current_lang == 'ar ' ? ' rtl' : ' ltr'; ?>">

<div class="border-b pb-4 mb-6">
 <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['cert_settings']; ?></h1>
    <p class="text-gray-600 mt-2"><?php echo $translations['cert_settings_subtitle']; ?></p>
</div>

   <div class="settings mb-16 ">
      

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
               <h3 class="font-semibold text-secondary"><?php echo $translations['cert_settings_desc1']; ?></h3>
                           
           </div>
         </div>  
             
      </div>

   
   </div>
   </div>

   
     <!-- wasabi settings  -->
     <div class="  mb-16   <?php echo $current_lang == 'ar ' ? ' rtl' : ' ltr'; ?>">

<div class="border-b pb-4 mb-6">
 <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['wasabi_settings']; ?></h1>
    <p class="text-gray-600 mt-2"><?php echo $translations['wasabi_settings_subtitle']; ?></p>
</div>

   <div class="settings mb-16 ">
      

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
               <h3 class="font-semibold text-secondary"><?php echo $translations['wasabi_settings_desc1']; ?></h3>
                           
           </div>
         </div>  
             
      </div>

   
   </div>
   </div>

        <!-- ai settings  -->
        <div class="  mb-16   <?php echo $current_lang == 'ar ' ? ' rtl' : ' ltr'; ?>">

<div class="border-b pb-4 mb-6">
 <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['ai_settings']; ?></h1>
    <p class="text-gray-600 mt-2"><?php echo $translations['ai_settings_subtitle']; ?></p>
</div>

   <div class="settings mb-16 ">
      

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
               <h3 class="font-semibold text-secondary"><?php echo $translations['ai_settings_desc1']; ?></h3>
                           
           </div>
         </div>  
             
      </div>

   
   </div>
   </div>

           <!-- bunny settings  -->
           <div class="  mb-16   <?php echo $current_lang == 'ar ' ? ' rtl' : ' ltr'; ?>">

<div class="border-b pb-4 mb-6">
 <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['bunny_settings']; ?></h1>
    <p class="text-gray-600 mt-2"><?php echo $translations['bunny_settings_subtitle']; ?></p>
</div>

   <div class="settings mb-16 ">
      

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
               <h3 class="font-semibold text-secondary"><?php echo $translations['bunny_settings_desc1']; ?></h3>
                           
           </div>
         </div>  
             
      </div>

   
   </div>
   </div>

              <!-- zoom settings  -->
              <div class="  mb-16   <?php echo $current_lang == 'ar ' ? ' rtl' : ' ltr'; ?>">

<div class="border-b pb-4 mb-6">
 <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['zoom_settings']; ?></h1>
    <p class="text-gray-600 mt-2"><?php echo $translations['zoom_settings_subtitle']; ?></p>
</div>

   <div class="settings mb-16 ">
      

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
               <h3 class="font-semibold text-secondary"><?php echo $translations['zoom_settings_desc1']; ?></h3>
                           
           </div>
         </div>  
             
      </div>

   
   </div>
   </div>

                 <!-- payment settings  -->
                 <div class="  mb-16   <?php echo $current_lang == 'ar ' ? ' rtl' : ' ltr'; ?>">

<div class="border-b pb-4 mb-6">
 <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['payment_settings']; ?></h1>
    <p class="text-gray-600 mt-2"><?php echo $translations['payment_settings_subtitle']; ?></p>
</div>

   <div class="settings mb-16 ">
      

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
               <h3 class="font-semibold text-secondary"><?php echo $translations['payment_settings_desc1']; ?></h3>
                           
           </div>
         </div>  
             
      </div>

   
   </div>
   </div>

   
                 <!-- lang settings  -->
                 <div class="  mb-16   <?php echo $current_lang == 'ar ' ? ' rtl' : ' ltr'; ?>">

<div class="border-b pb-4 mb-6">
 <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['lang_settings']; ?></h1>
    <p class="text-gray-600 mt-2"><?php echo $translations['lang_settings_subtitle']; ?></p>
</div>

   <div class="settings mb-16 ">
      

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
               <h3 class="font-semibold text-secondary"><?php echo $translations['lang_settings_desc1']; ?></h3>
                           
           </div>
         </div>  
             
      </div>

   
   </div>
   </div>

                    <!-- notification settings  -->
                    <div class="  mb-16   <?php echo $current_notification == 'ar ' ? ' rtl' : ' ltr'; ?>">

<div class="border-b pb-4 mb-6">
 <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['notification_settings']; ?></h1>
    <p class="text-gray-600 mt-2"><?php echo $translations['notification_settings_subtitle']; ?></p>
</div>

   <div class="settings mb-16 ">
      

      <div class="content p-6 border border-xl rounded-md border-s-4 border-s-primary shadow mt-6 mb-12">
      <h2 class = " flex gap-2 font-bold font-medium text-md mb-4 "> <span>
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
 <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
</svg>

      </span><span> <?php echo $translations['attention']; ?> </span>  </h2>
      <div class=" flex mb-2">
        <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_notification == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
            </svg></div>
            <div class="ms-2">
               <h3 class="font-semibold text-secondary"><?php echo $translations['notification_settings_desc1']; ?></h3>
                           
           </div>
         </div>  
             
      </div>

   
   </div>
   </div>

                       <!-- social_login settings  -->
                       <div class="  mb-16   <?php echo $current_social_login == 'ar ' ? ' rtl' : ' ltr'; ?>">

<div class="border-b pb-4 mb-6">
 <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['social_login_settings']; ?></h1>
    <p class="text-gray-600 mt-2"><?php echo $translations['social_login_settings_subtitle']; ?></p>
</div>

   <div class="settings mb-16 ">
      

      <div class="content p-6 border border-xl rounded-md border-s-4 border-s-primary shadow mt-6 mb-12">
      <h2 class = " flex gap-2 font-bold font-medium text-md mb-4 "> <span>
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
 <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
</svg>

      </span><span> <?php echo $translations['attention']; ?> </span>  </h2>
      <div class=" flex mb-2">
        <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_social_login == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
            </svg></div>
            <div class="ms-2">
               <h3 class="font-semibold text-secondary"><?php echo $translations['social_login_settings_desc1']; ?></h3>
                           
           </div>
         </div>  
             
      </div>

   
   </div>
   </div>

                          <!-- custom_page settings  -->
                          <div class="  mb-16   <?php echo $current_custom_page == 'ar ' ? ' rtl' : ' ltr'; ?>">

<div class="border-b pb-4 mb-6">
 <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['custom_page_settings']; ?></h1>
    <p class="text-gray-600 mt-2"><?php echo $translations['custom_page_settings_subtitle']; ?></p>
</div>

   <div class="settings mb-16 ">
      

      <div class="content p-6 border border-xl rounded-md border-s-4 border-s-primary shadow mt-6 mb-12">
      <h2 class = " flex gap-2 font-bold font-medium text-md mb-4 "> <span>
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
 <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
</svg>

      </span><span> <?php echo $translations['attention']; ?> </span>  </h2>
      <div class=" flex mb-2">
        <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_custom_page == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
            </svg></div>
            <div class="ms-2">
               <h3 class="font-semibold text-secondary"><?php echo $translations['custom_page_settings_desc1']; ?></h3>
                           
           </div>
         </div>  
             
      </div>

   
   </div>
   </div>

   
                          <!-- data_center settings  -->
                          <div class="  mb-16   <?php echo $current_data_center == 'ar ' ? ' rtl' : ' ltr'; ?>">

<div class="border-b pb-4 mb-6">
 <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['data_center_settings']; ?></h1>
    <p class="text-gray-600 mt-2"><?php echo $translations['data_center_settings_subtitle']; ?></p>
</div>

   <div class="settings mb-16 ">
      

      <div class="content p-6 border border-xl rounded-md border-s-4 border-s-primary shadow mt-6 mb-12">
      <h2 class = " flex gap-2 font-bold font-medium text-md mb-4 "> <span>
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
 <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
</svg>

      </span><span> <?php echo $translations['attention']; ?> </span>  </h2>
      <div class=" flex mb-2">
        <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_data_center == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
            </svg></div>
            <div class="ms-2">
               <h3 class="font-semibold text-secondary"><?php echo $translations['data_center_settings_desc1']; ?></h3>
                           
           </div>
         </div>  
             
      </div>

   
   </div>
   </div>

   
   
                          <!-- licence settings  -->
                          <div class="  mb-16   <?php echo $current_licence == 'ar ' ? ' rtl' : ' ltr'; ?>">

<div class="border-b pb-4 mb-6">
 <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['licence_settings']; ?></h1>
    <p class="text-gray-600 mt-2"><?php echo $translations['licence_settings_subtitle']; ?></p>
</div>

   <div class="settings mb-16 ">
      

      <div class="content p-6 border border-xl rounded-md border-s-4 border-s-primary shadow mt-6 mb-12">
      <h2 class = " flex gap-2 font-bold font-medium text-md mb-4 "> <span>
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
 <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
</svg>

      </span><span> <?php echo $translations['attention']; ?> </span>  </h2>
      <div class=" flex mb-2">
        <div class="flex-shrink-0  flex items-center justify-center text-white font-bold"> <svg class="h-5 w-6 text-primary flex-shrink-0 <?php echo $current_licence == 'ar' ? '' : ''; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="5" d="M5 13l4 4L19 7" />
            </svg></div>
            <div class="ms-2">
               <h3 class="font-semibold text-secondary"><?php echo $translations['licence_settings_desc1']; ?></h3>
                           
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