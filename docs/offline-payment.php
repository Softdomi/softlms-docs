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
    <title><?php echo $translations['offline_payment']; ?> - SoftLMS</title>
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

    <!-- messages --------------- -->
      
    <div>

<div class="border-b pb-4 mb-6">
  <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['offline_payment']; ?></h1>
     <p class="text-gray-600 mt-2"><?php echo $translations['offline_payment_subtitle']; ?></p>
 </div>

 <!-- pending request  -->
 <div>

 <div class="border-b pb-4 mb-6">
  <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['pending_request']; ?></h1>
     <p class="text-gray-600 mt-2"><?php echo $translations['pending_request_subtitle']; ?></p>
 </div>
<!-- <!-offline payment ---------------------------------- --> 
 <div class="  mb-16   <?php echo $current_lang == 'ar ' ? ' rtl' : ' ltr'; ?>">


    <div class="offline-payment mb-16 ">
       
    <?php
$imageSrc = $current_lang === 'ar' ? 'pending-payment-ar.png' : 'pending-payment-en.png';
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
                <h3 class="font-semibold text-secondary"><?php echo $translations['pending_request_desc1']; ?></h3>
                            
            </div>
          </div>  
              
       </div>

    
    </div>
    </div>
    </div>

    <!-- accepted request  -->
    <div>

<div class="border-b pb-4 mb-6">
 <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['accepted_request']; ?></h1>
    <p class="text-gray-600 mt-2"><?php echo $translations['accepted_request_subtitle']; ?></p>
</div>
<!-- <!-offline payment ---------------------------------- --> 
<div class="  mb-16   <?php echo $current_lang == 'ar ' ? ' rtl' : ' ltr'; ?>">


   <div class="offline-payment mb-16 ">
      
   <?php
$imageSrc = $current_lang === 'ar' ? 'accepted-payment-ar.png' : 'accepted-payment-en.png';
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
               <h3 class="font-semibold text-secondary"><?php echo $translations['accepted_request_desc1']; ?></h3>
                           
           </div>
         </div>  
             
      </div>

   
   </div>
   </div>
   </div>

    <!-- suspended request  -->
    <div>

<div class="border-b pb-4 mb-6">
 <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['susbended_request']; ?></h1>
    <p class="text-gray-600 mt-2"><?php echo $translations['susbended_request_subtitle']; ?></p>
</div>
<!-- <!-offline payment ---------------------------------- --> 
<div class="  mb-16   <?php echo $current_lang == 'ar ' ? ' rtl' : ' ltr'; ?>">


   <div class="offline-payment mb-16 ">
      
   <?php
$imageSrc = $current_lang === 'ar' ? 'suspended-payment-ar.png' : 'suspended-payment-en.png';
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
               <h3 class="font-semibold text-secondary"><?php echo $translations['susbended_request_desc1']; ?></h3>
                           
           </div>
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