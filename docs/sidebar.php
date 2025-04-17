
<!-- Sidebar -->
<div class="lg:w-1/4 mb-8 lg:mb-0">
    
<!-- Toggler Button (Mobile Only) -->
 <div class = 'flex justify-end lg:hidden'>
 <button onclick="toggleSidebar()" 
        class=" block  lg:hidden bg-primary text-white p-2 rounded-md shadow-md">
    <!-- Menu Icon -->
    <svg xmlns="http://www.w3.org/2000/svg" 
         class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
              d="M4 6h16M4 12h16M4 18h16" />
    </svg>
</button>
 </div>

    <div id="sidebar" class="bg-white rounded-lg hidden lg:block shadow-md sticky top-20 lg:min-h-[calc(100vh-8rem)] overflow-y-auto custom-scrollbar">
        <!-- Main Categories -->
        <nav class="p-4">
                <!-- Close button on mobile -->
                <button onclick="toggleSidebar()" 
                class="mb-4 block lg:hidden ms-auto text-gray-500 hover:text-gray-800">
            <!-- Close Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" 
                 class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" 
                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 011.414 
                         1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 
                         1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 
                         10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
                </button>


            <h3 class="font-bold text-lg text-secondary mb-4 border-b pb-2"><?php echo $translations['documentation_sections']; ?></h3>
            
            <ul class="space-y-2">
                <!-- Getting Started -->
                <li>
                    <a href="getting-started.php<?php echo $current_lang != 'ar' ? '?lang=' . $current_lang : ''; ?>" class="flex items-center p-2 rounded-lg <?php echo $active_section == 'getting-started' ? 'bg-primary bg-opacity-10 text-primary font-medium' : 'hover:bg-gray-100'; ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <?php echo $translations['getting_started']; ?>
                    </a>
                </li>

                <!-- create an account  -->

                <li>
                    <a href="user-account.php<?php echo $current_lang != 'ar' ? '?lang=' . $current_lang : ''; ?>" class="flex items-center p-2 rounded-lg <?php echo $active_section == 'user-account' ? 'bg-primary bg-opacity-10 text-primary font-medium' : 'hover:bg-gray-100'; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                    </svg>
                     <?php echo $translations['create_account']; ?>
                    </a>
                </li>
            
<!-- Students Guides -->
<li class="relative w-full z-20 ">
  <button onclick="toggleDropdown(event)" class="flex items-center w-full p-2 rounded-lg transition-all 
    <?php echo $active_section == 'user-guides' ? 'bg-primary bg-opacity-10 text-primary font-medium' : 'hover:bg-gray-100'; ?>">
    
    <!-- Icon -->
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13" />
    </svg>

    <?php echo $translations['students_guide']; ?>

    <!-- Toggler Icon -->
    <svg class="toggler-icon h-5 w-5 ms-auto transform transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
    </svg>
  </button>

  <!-- Dropdown -->
  <ul class="dropdown-menu absolute left-0 hidden mt-2 w-full space-y-2 bg-white  rounded-md z-20">

    <li>
      <a href="course-pruchase.php<?php echo $current_lang != 'ar' ? '?lang=' . $current_lang : ''; ?>" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md text-sm">
        <svg class="h-5 w-5 ms-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13" />
        </svg>
        <?php echo $translations['course_pruchase']; ?>
      </a>
    </li>
    <li>
      <a href="course-after-pruchase.php<?php echo $current_lang != 'ar' ? '?lang=' . $current_lang : ''; ?>" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md text-sm">
        <svg class="h-5 w-5 ms-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13" />
        </svg>
        <?php echo $translations['course_after_pruchase']; ?>
      </a>
    </li>
  </ul>
</li>

                      <!-- Instructors Guides -->
<li class="relative w-full z-10 ">
  <button onclick="toggleDropdown(event)" class="flex items-center w-full p-2 rounded-lg transition-all 
    <?php echo $active_section == 'user-guides' ? 'bg-primary bg-opacity-10 text-primary font-medium' : 'hover:bg-gray-100'; ?>">
    
    <!-- Icon -->
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13" />
    </svg>

    <?php echo $translations['instructors_guide']; ?>

    <!-- Toggler Icon -->
    <svg class="toggler-icon h-5 w-5 ms-auto transform transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
    </svg>
  </button>

  <!-- Dropdown -->
  <ul class="dropdown-menu absolute left-0 hidden mt-2 w-full space-y-2 bg-white  rounded-md z-20">
  <li>
            <a href="instructor-dashboard.php<?php echo $current_lang != 'ar' ? '?lang=' . $current_lang : ''; ?>" 
               class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md w-full text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ms-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13" />
                </svg>
                <?php echo $translations['inst_dashboard']; ?>
            </a>
        </li>
        <li>
            <a href="instructor-manage-course.php<?php echo $current_lang != 'ar' ? '?lang=' . $current_lang : ''; ?>" 
               class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md w-full text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ms-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13" />
                </svg>
                <?php echo $translations['manage_course']; ?>
            </a>
        </li>
  </ul>
</li>

                      <!-- Admins Guides -->

                      <li class="relative w-full z-8 ">
  <button onclick="toggleDropdown(event)" class="flex items-center w-full p-2 rounded-lg transition-all 
    <?php echo $active_section == 'user-guides' ? 'bg-primary bg-opacity-10 text-primary font-medium' : 'hover:bg-gray-100'; ?>">
    
    <!-- Icon -->
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 <?php echo $current_lang == 'ar' ? 'ml-2' : 'mr-2'; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13" />
    </svg>

    <?php echo $translations['admins_guide']; ?>

    <!-- Toggler Icon -->
    <svg class="toggler-icon h-5 w-5 ms-auto transform transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
    </svg>
  </button>

  <!-- Dropdown -->
  <ul class="dropdown-menu absolute left-0 hidden mt-2 w-full space-y-2 bg-white  rounded-md z-20">
  <li>
            <a href="admin-dashboard.php<?php echo $current_lang != 'ar' ? '?lang=' . $current_lang : ''; ?>" 
               class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md w-full text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ms-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13" />
                </svg>
                <?php echo $translations['admin_dashboard']; ?>
            </a>
        </li>
  <li>
            <a href="admin-manage-course.php<?php echo $current_lang != 'ar' ? '?lang=' . $current_lang : ''; ?>" 
               class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md w-full text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ms-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13" />
                </svg>
                <?php echo $translations['manage_course']; ?>
            </a>
        </li>
        <li>
            <a href="report.php<?php echo $current_lang != 'ar' ? '?lang=' . $current_lang : ''; ?>" 
               class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md w-full text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ms-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13" />
                </svg>
                <?php echo $translations['report']; ?>
            </a>
        </li>
        <li>
            <a href="enrollments.php<?php echo $current_lang != 'ar' ? '?lang=' . $current_lang : ''; ?>" 
               class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md w-full text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ms-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13" />
                </svg>
                <?php echo $translations['enrollments']; ?>
            </a>
        </li>
        <li>
            <a href="users.php<?php echo $current_lang != 'ar' ? '?lang=' . $current_lang : ''; ?>" 
               class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md w-full text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ms-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13" />
                </svg>
                <?php echo $translations['users']; ?>
            </a>
        </li>
        <li>
            <a href="offline-payment.php<?php echo $current_lang != 'ar' ? '?lang=' . $current_lang : ''; ?>" 
               class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md w-full text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ms-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13" />
                </svg>
                <?php echo $translations['offline_payment']; ?>
            </a>
        </li>
        <li>
            <a href="newsletter.php<?php echo $current_lang != 'ar' ? '?lang=' . $current_lang : ''; ?>" 
               class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md w-full text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ms-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13" />
                </svg>
                <?php echo $translations['newsletters']; ?>
            </a>
        </li>
        <li>
            <a href="messages.php<?php echo $current_lang != 'ar' ? '?lang=' . $current_lang : ''; ?>" 
               class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md w-full text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ms-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13" />
                </svg>
                <?php echo $translations['admin_msg']; ?>
            </a>
        </li>
        <li>
            <a href="contact.php<?php echo $current_lang != 'ar' ? '?lang=' . $current_lang : ''; ?>" 
               class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md w-full text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ms-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13" />
                </svg>
                <?php echo $translations['contact']; ?>
            </a>
        </li>
        <li>
            <a href="complaints.php<?php echo $current_lang != 'ar' ? '?lang=' . $current_lang : ''; ?>" 
               class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md w-full text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ms-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13" />
                </svg>
                <?php echo $translations['complaint']; ?>
            </a>
        </li>
        <li>
            <a href="blogs.php<?php echo $current_lang != 'ar' ? '?lang=' . $current_lang : ''; ?>" 
               class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md w-full text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ms-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13" />
                </svg>
                <?php echo $translations['blogs']; ?>
            </a>
        </li>
        <li>
            <a href="settings.php<?php echo $current_lang != 'ar' ? '?lang=' . $current_lang : ''; ?>" 
               class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md w-full text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ms-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13" />
                </svg>
                <?php echo $translations['settings']; ?>
            </a>
        </li>
        <li>
            <a href="admin-manage-profile.php<?php echo $current_lang != 'ar' ? '?lang=' . $current_lang : ''; ?>" 
               class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md w-full text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ms-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13" />
                </svg>
                <?php echo $translations['manage_profile']; ?>
            </a>
        </li>
  </ul>
</li>
                    
                
         
            </ul>
            
          
        </nav>
    </div>
</div>

<script>
  function toggleDropdown(event) {
    const button = event.currentTarget;
    const parentLi = button.closest("li");
    const dropdown = parentLi.querySelector(".dropdown-menu");
    const icon = parentLi.querySelector(".toggler-icon");

    // Close all dropdowns
    document.querySelectorAll(".dropdown-menu").forEach((menu) => {
      if (menu !== dropdown) {
        menu.classList.add("hidden");
      }
    });

    // Reset all icons
    document.querySelectorAll(".toggler-icon").forEach((iconEl) => {
      iconEl.classList.remove("rotate-180");
    });

    // Toggle current dropdown
    dropdown.classList.toggle("hidden");

    // Rotate icon if menu is shown
    if (!dropdown.classList.contains("hidden")) {
      icon.classList.add("rotate-180");
    }
  }
</script>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('hidden');
    }
</script>

