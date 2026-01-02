<head>
 <link rel="stylesheet" href="css/header.css">
</head>



<header class="navbar">
  <a href="..logout.php" style="position: absolute; right: 92px; top: 50%; transform: translateY(-50%); z-index: 4; background:rgba(228, 214, 214, 0.03); color: #fff; border: none; padding: 10px 18px; border-radius: 22px; font-size: 15px; cursor: pointer; transition: background 0.2s; text-decoration: none; display: inline-block;">
    Logout
  </a>
  <div class="profile-photo" style="position: absolute; right: 36px; top: 50%; transform: translateY(-50%); z-index: 4; border-radius: 50%; overflow: hidden; width: 44px; height: 44px; background: #fff;">
    <img src="images/profile-placeholder.png" alt="Profile Photo" style="width:44px; height:44px; border-radius:50%; object-fit:cover; display:block;" />
  </div>
  


  <div class="burger">
    <span></span>
    <span></span>
  </div>

  <div class="glass-highlight"></div>

 <!-- Replace your existing nav-links ul with this: -->
<ul class="nav-links">
  <li class="nav-item-dropdown">
    <span class="nav-label">Project</span>
    <div class="dropdown-menu" id="dropdown-project">
      <a href="#project1">Project Overview</a>
      <a href="#project2">Project Timeline</a>
      <a href="#project3">Project Team</a>
      <a href="#project4">Project Goals</a>
    </div>
  </li>
  <li class="nav-item-dropdown">
    <span class="nav-label">Resources</span>
    <div class="dropdown-menu" id="dropdown-resources">
      <a href="#resource1">Documentation</a>
      <a href="#resource2">Downloads</a>
      <a href="#resource3">Tutorials</a>
      <a href="#resource4">API Reference</a>
    </div>
  </li>
  <li class="nav-item-dropdown">
    <span class="nav-label">Services</span>
    <div class="dropdown-menu" id="dropdown-services">
      <a href="#service1">Consulting</a>
      <a href="#service2">Development</a>
      <a href="#service3">Support</a>
      <a href="#service4">Training</a>
    </div>
  </li>
  <li class="nav-item-dropdown">
    <span class="nav-label">Impact</span>
    <div class="dropdown-menu" id="dropdown-impact">
      <a href="#impact1">Case Studies</a>
      <a href="#impact2">Testimonials</a>
      <a href="#impact3">Statistics</a>
      <a href="#impact4">Awards</a>
    </div>
  </li>
</ul>

<!-- Replace mobile-menu ul with this: -->
<div class="mobile-menu">
  <ul>
    <li class="mobile-nav-item">
      <span class="mobile-nav-label">Project</span>
      <div class="mobile-dropdown" id="mobile-dropdown-project">
        <a href="#project1">Project Overview</a>
        <a href="#project2">Project Timeline</a>
        <a href="#project3">Project Team</a>
        <a href="#project4">Project Goals</a>
      </div>
    </li>
    <li class="mobile-nav-item">
      <span class="mobile-nav-label">Resources</span>
      <div class="mobile-dropdown" id="mobile-dropdown-resources">
        <a href="#resource1">Documentation</a>
        <a href="#resource2">Downloads</a>
        <a href="#resource3">Tutorials</a>
        <a href="#resource4">API Reference</a>
      </div>
    </li>
    <li class="mobile-nav-item">
      <span class="mobile-nav-label">Services</span>
      <div class="mobile-dropdown" id="mobile-dropdown-services">
        <a href="#service1">Consulting</a>
        <a href="#service2">Development</a>
        <a href="#service3">Support</a>
        <a href="#service4">Training</a>
      </div>
    </li>
    <li class="mobile-nav-item">
      <span class="mobile-nav-label">Impact</span>
      <div class="mobile-dropdown" id="mobile-dropdown-impact">
        <a href="#impact1">Case Studies</a>
        <a href="#impact2">Testimonials</a>
        <a href="#impact3">Statistics</a>
        <a href="#impact4">Awards</a>
      </div>
    </li>
  </ul>
</div>
</header>

<script src="js/main.js"></script>
<script>
    // Add this to the end of your existing JavaScript

// Mobile dropdown toggle
const mobileNavItems = document.querySelectorAll(".mobile-nav-item");

mobileNavItems.forEach(item => {
  const label = item.querySelector(".mobile-nav-label");
  
  label.addEventListener("click", (e) => {
    e.stopPropagation();
    
    // Close other dropdowns
    mobileNavItems.forEach(otherItem => {
      if (otherItem !== item) {
        otherItem.classList.remove("active");
      }
    });
    
    // Toggle current dropdown
    item.classList.toggle("active");
  });
});

// Close mobile menu when clicking dropdown links
const mobileDropdownLinks = document.querySelectorAll(".mobile-dropdown a");

mobileDropdownLinks.forEach(link => {
  link.addEventListener("click", () => {
    burger.classList.remove("active");
    mobileMenu.classList.remove("open");
    mobileNavItems.forEach(item => item.classList.remove("active"));
  });
});
    </script>