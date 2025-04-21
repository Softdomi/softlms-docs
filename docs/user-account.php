<?php
// تحديد اللغة الحالية
$current_lang = isset($_GET['lang']) ? $_GET['lang'] : 'ar';

// تحميل ملف الترجمة المناسب
include_once "translations/{$current_lang}.php";

// تحديد الصفحة الحالية لتفعيل العنصر في شريط التنقل
$page = 'docs';
$active_section = 'user-account';
?>

<!DOCTYPE html>
<html lang="<?php echo $current_lang; ?>" dir="<?php echo $current_lang == 'ar' ? 'rtl' : 'ltr'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $translations['student_signup_title']; ?> - SoftLMS</title>
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
    

   <?php include 'header.php'; ?>
   
   

    <!-- Main Documentation Area -->
    <section class="py-8">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
            <div class="flex flex-col lg:flex-row gap-1 lg:gap-8">

<!-- Sidebar -->
<?php include 'sidebar.php'; ?>
 <!-- Main Content Area -->
 <div class="lg:w-3/4 <?php echo $current_lang == 'ar ' ? 'lg:pr-8 ' : 'lg:pl-8 '; ?>">
   <!-- section Title -->
    <div>

  
   <div class="border-b pb-4 mb-6">
     <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['student_signup_title']; ?></h1>
        <p class="text-gray-600 mt-2"><?php echo $translations['student_signup_subtitle']; ?></p>
    </div>

    <div class="signup flex flex-col lg:flex-row mb-16 gap-8 items-center <?php echo $current_lang == 'ar ' ? ' rtl' : ' ltr'; ?>">
    <?php
$imageSrc = $current_lang === 'ar' ? 'sign-up-ar.png' : 'sign-up-en.png';
?>

<div class="img w-[90%] object-fit-cover">
    <img src="../assets/images/docs-imgs/<?= $imageSrc ?>" alt="sign up" class="w-full">
</div>
       <div class="content">
       <h2 class="text-xl font-bold text-secondary mb-4"><?php echo $translations['lets_start']; ?></h2>
                                
                                <!-- Steps -->
                                <div class="space-y-4">
                                    <div class="flex">
                                        <div class="flex-shrink-0 h-8 w-8 bg-primary rounded-full flex items-center justify-center text-white font-bold">1</div>
                                        <div class="ms-4">
                                            <h3 class="font-semibold text-secondary"><?php echo $translations['user_signup_step_1_title']; ?></h3>
                                            <p class="text-gray-600"><?php echo $translations['user_signup_step_1_desc']; ?></p>
                                        </div>
                                    </div>
                                    
                                    <div class="flex">
                                        <div class="flex-shrink-0 h-8 w-8 bg-primary rounded-full flex items-center justify-center text-white font-bold">2</div>
                                        <div class="ms-4">
                                            <h3 class="font-semibold text-secondary"><?php echo $translations['user_signup_step_2_title']; ?></h3>
                                            <p class="text-gray-600"><?php echo $translations['user_signup_step_2_desc']; ?></p>
                                        </div>
                                    </div>
                                    
                                    <div class="flex">
                                        <div class="flex-shrink-0 h-8 w-8 bg-primary rounded-full flex items-center justify-center text-white font-bold">3</div>
                                        <div class="ms-4">
                                            <h3 class="font-semibold text-secondary"><?php echo $translations['user_signup_step_3_title']; ?></h3>
                                            <p class="text-gray-600"><?php echo $translations['user_signup_step_3_desc']; ?></p>
                                        </div>
                                    </div>

                                    <div class="flex">
                                        <div class="flex-shrink-0 h-8 w-8 bg-primary rounded-full flex items-center justify-center text-white font-bold">4</div>
                                        <div class="ms-4">
                                            <h3 class="font-semibold text-secondary"><?php echo $translations['user_signup_step_4_title']; ?></h3>
                                            <p class="text-gray-600"><?php echo $translations['user_signup_step_4_desc']; ?></p>
                                        </div>
                                    </div>
                                </div>
       </div>
    </div>
    </div>

    <!-- email verification --------------------------------- -->
    <div>
    <div class="border-b pb-4 mb-6">
     <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['verify_email']; ?></h1>
        <p class="text-gray-600 mt-2"><?php echo $translations['student_signup_subtitle']; ?></p>
    </div>
    <div class="verify-email mb-16 ">
    <?php

$imageSrc = $current_lang === 'ar' ? 'verify-email-ar.png' : 'verify-email-en.png';
?>

<div class="img object-fit-cover">
    <img src="../assets/images/docs-imgs/<?= $imageSrc ?>" alt="verify your email" class="w-full">
</div>
       <div class="content p-6 border border-xl rounded-md border-s-4 border-s-primary shadow mt-6">
       <h2 class = " flex gap-2 font-bold font-medium text-md mb-4 "> <span>
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
</svg>

       </span><span> <?php echo $translations['attention']; ?> </span>  </h2>
      
       <p class = "">
       <?php echo $translations['verify_email_desc']; ?>
       </p>
                            
       </div>
    </div>
    </div>

<!-- email confirmation ----------------------------------------------------------------- -->
    <div>
    <div class="border-b pb-4 mb-6">
     <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['confirm_email']; ?></h1>
        <p class="text-gray-600 mt-2"><?php echo $translations['confirm_email_subtitle']; ?></p>
    </div>
    <div class="confirm-email mb-16 ">
    <?php

$imageSrc = $current_lang === 'ar' ? 'confirm-account-ar.png' : 'confirm-account-en.png';
?>

<div class="img object-fit-cover">
    <img src="../assets/images/docs-imgs/<?= $imageSrc ?>" alt="confirm your email" class="w-full">
</div>
       <div class="content p-6 border border-xl rounded-md border-s-4 border-s-primary shadow mt-6">
       <h2 class = " flex gap-2 font-bold font-medium text-md mb-4 "> <span>
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
</svg>

       </span><span> <?php echo $translations['attention']; ?> </span>  </h2>
       <p class = "">
       <?php echo $translations['confirm_email_desc']; ?>
       </p>
                            
       </div>
    </div>
    </div>




     <!-- forget password --------------------------------------------- -->
     <div>
    <div class="border-b pb-4 mb-6">
     <h1 class="text-2xl font-bold text-secondary"><?php echo $translations['forget_password']; ?></h1>
        <p class="text-gray-600 mt-2"><?php echo $translations['forget_password_subtitle']; ?></p>
    </div>
    <div class="forget-pass mb-16 ">
    <?php

$imageSrc = $current_lang === 'ar' ? 'forget-pass-ar.png' : 'forget-pass-en.png';
?>

<div class="img object-fit-cover">
    <img src="../assets/images/docs-imgs/<?= $imageSrc ?>" alt="forget password" class="w-full">
</div>
       <div class="content p-6 border border-xl rounded-md border-s-4 border-s-primary shadow mt-6">
       <h2 class = " flex gap-2 font-bold font-medium text-md mb-4 "> <span>
       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
</svg>

       </span><span> <?php echo $translations['attention']; ?> </span>  </h2>
       <p class = "">
       <?php echo $translations['forget_password_desc']; ?>
       </p>
                            
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
       <?php echo $translations['note_desc']; ?>
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