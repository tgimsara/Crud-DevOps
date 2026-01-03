
<?php
session_start();
$isLoggedIn = isset($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Sustainable Development Goals</title>

<style>
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Poppins',sans-serif;
}
body{
  height:200vh;
  background:linear-gradient(120deg,#0f0f14,#2a2a38);
}
.glass-navbar{
  position:fixed;
  top:24px;
  left:50%;
  transform:translateX(-50%);
  width:90%;
  height:68px;
  border-radius:22px;
  background:rgba(255,255,255,0.05);
  backdrop-filter:blur(20px) saturate(180%);
  box-shadow:
    0 20px 40px rgba(0,0,0,.35),
    inset 0 1px 0 rgba(255,255,255,.35);
  z-index:100;
}
.nav-bar-wrapper {
  display: flex;
  align-items: center;
  height: 100%;
  position: relative;
}
.nav-desktop{
  height:100%;
  display:flex;
  align-items:center;
  gap:42px;
  padding-left:36px;
  position:relative;
  list-style: none;
}
.nav-bubble-indicator {
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  height: 48px;
  min-width: 90px;
  width: 100px;
  background: linear-gradient(135deg, rgba(230,245,255,0.23) 17%,rgba(180,245,246,0.16) 47%,rgba(110,176,255,0.19) 94%);
  box-shadow: 0 2px 14px rgba(0,0,0,0.09), 0 0 0 3px rgba(90,190,255,0.13), inset 0 2px 6px rgba(255,255,255,0.18);
  border-radius: 22px;
  backdrop-filter: blur(18px) saturate(140%);
  display: none;
  z-index: 5;
  pointer-events: none;
  opacity: .96;
  border: 1.7px solid rgba(196,251,255,0.13);
  transition:
    left 0.12s cubic-bezier(0.28,0.62,0.62,1.10),
    width 0.11s cubic-bezier(.4,.7,.2,1),
    background 0.15s,
    box-shadow 0.12s,
    opacity 0.13s;
}
.nav-item,
.nav-login-btn{
  position:relative;
  color:rgba(255,255,255,.92);
  font-size:17px;
  padding:10px 22px;
  cursor:pointer;
  z-index: 10;
  transition: color 0.18s;
  overflow:visible;
  list-style-type: none; /* Remove dot */
  background: none;
  border: none;
  outline: none;
  text-align: center;
  display: flex;
  align-items: center;
  justify-content: center;
  /* for login button to align vertically */
}
.nav-item:hover,
.nav-item.active,
.nav-login-btn:hover,
.nav-login-btn.active {
  color:#fff;
}
.nav-dropdown{
  position:absolute;
  top:calc(100% + 18px);
  left:50%;
  transform:translateX(-50%) translateY(-10px);
  min-width:220px;
  background:rgba(255,255,255,.08);
  backdrop-filter:blur(20px);
  border-radius:16px;
  padding:10px 0;
  opacity:0;
  visibility:hidden;
  transition:.3s cubic-bezier(.2,.8,.2,1);
}
.nav-item:hover .nav-dropdown,
.nav-item:focus-within .nav-dropdown{
  opacity:1;
  visibility:visible;
  transform:translateX(-50%) translateY(0);
}
.nav-dropdown a{
  display:block;
  padding:12px 24px;
  text-decoration:none;
  color:rgba(255,255,255,.9);
}
.nav-dropdown a:hover{
  background:rgba(255,255,255,.15);
}
.nav-actions{
  position:relative;
  display:flex;
  gap:14px;
  margin-left: auto;
  margin-right: 36px;
  align-items: center;
}
.logout-btn{
  text-decoration:none;
  padding:10px 18px;
  border-radius:20px;
  background:rgba(255,255,255,.1);
  color:#fff;
  outline: none;
  border: none;
  font-size: 17px;
  cursor: pointer;
  display:inline-block;
  transition: color 0.18s;
}
.profile-img{
  width:44px;
  height:44px;
  border-radius:50%;
  overflow:hidden;
}
.profile-img img{
  width:100%;
  height:100%;
  object-fit:cover;
}
.nav-burger{
  display:none;
  position:absolute;
  left:24px;
  top:50%;
  transform:translateY(-50%);
  width:42px;
  height:42px;
  border-radius:14px;
  background:rgba(255,255,255,.15);
  cursor:pointer;
}
.nav-burger span{
  position:absolute;
  left:10px;
  right:10px;
  height:2px;
  background:#fff;
  transition:.3s;
}
.nav-burger span:first-child{top:14px;}
.nav-burger span:last-child{bottom:14px;}
.nav-burger.active span:first-child{
  transform:rotate(45deg);
  top:20px;
}
.nav-burger.active span:last-child{
  transform:rotate(-45deg);
  bottom:20px;
}
.mobile-panel{
  position:fixed;
  top:0;
  left:-280px;
  width:260px;
  height:100vh;
  background:rgba(255,255,255,.12);
  backdrop-filter:blur(26px);
  transition:.45s cubic-bezier(.2,.8,.2,1);
  z-index:99;
}
.mobile-panel.open{
  left:0;
}
.mobile-panel ul{
  list-style:none;
  padding:100px 22px;
}
.mobile-item{
  margin-bottom:10px;
}
.mobile-label{
  color:#fff;
  font-size:18px;
  padding:14px;
  border-radius:14px;
  cursor:pointer;
}
.mobile-submenu{
  max-height:0;
  overflow:hidden;
  transition:max-height .4s cubic-bezier(.2,.8,.2,1);
  padding-left:14px;
}
.mobile-item.active .mobile-submenu{
  max-height:300px;
}
.mobile-submenu a{
  display:block;
  padding:10px 14px;
  color:rgba(255,255,255,.85);
  text-decoration:none;
}
@media(max-width:768px){
  .nav-desktop{display:none;}
  .nav-burger{display:block;}
}
</style>
</head>

<body>
<header class="glass-navbar" id="mainGlassNavbar">

  <div class="nav-burger" id="navBurgerBtn">
    <span></span><span></span>
  </div>

  <div class="nav-bar-wrapper">
    <ul class="nav-desktop" id="desktopNavMenu" style="list-style:none;margin:0;padding:0;">
      <span class="nav-bubble-indicator" id="navBubbleIndicator" style="display:none;"></span>

      <li class="nav-item" id="navProject">
        Project
        <div class="nav-dropdown" id="dropdownProject">
          <a href="pages/achievement.php">Achievements</a>
        </div>
      </li>

      <li class="nav-item" id="navResources">
        Resources
        <div class="nav-dropdown" id="dropdownResources">
          <a href="https://en.wikipedia.org/wiki/Sustainable_Development_Goals">Read</a>
        </div>
      </li>

      <li class="nav-item" id="navServices">
        Services
        <div class="nav-dropdown" id="dropdownServices">
          <a href="pages/consultant.php">Consulting</a>
          <a href="">Development</a>
          <a href="pages/support.php">Support</a>
          <a href="">Training</a>
        </div>
      </li>

      <li class="nav-item" id="navImpact">
       Goals
        <div class="nav-dropdown" id="dropdownImpact">
          <a href="pages/carbonreduction.php">Reduction of CO2</a>
          <a href="pages/planttrees.php">Planing Trees</a>
        </div>
      </li>
    </ul>

    <div class="nav-actions" id="navActions">
      <?php if ($isLoggedIn): ?>
        <a href="logout.php" class="logout-btn nav-login-btn" tabindex="0">Logout</a>
        <div class="profile-img">
          <a href="user.php">
            <img src="images/profile-placeholder.png" alt="Profile">
          </a>
        </div>
      <?php else: ?>
        <a href="login.php" class="logout-btn nav-login-btn" tabindex="0">Login</a>
      <?php endif; ?>
    </div>
  </div>
</header>

<nav class="mobile-panel" id="mobileMenuPanel">
  <ul>
    <li class="mobile-item">
      <div class="mobile-label">Project</div>
      <div class="mobile-submenu">
        <a href="pages/achievement.php">Achievements</a>
      </div>
    </li>
    <li class="mobile-item">
      <div class="mobile-label">Resources</div>
      <div class="mobile-submenu">
        <a href="https://en.wikipedia.org/wiki/Sustainable_Development_Goals">Read</a>
      </div>
    </li>
    <li class="mobile-item">
      <div class="mobile-label">Services</div>
      <div class="mobile-submenu">
        <a href="pages/consultant.php">Consulting</a>
        <a href="pages/support.php">Support</a>
      </div>
    </li>
    <li class="mobile-item">
      <div class="mobile-label">Goals</div>
      <div class="mobile-submenu">
        <a href="pages/carbonreduction.php">Reduction of CO2</a>
        <a href="pages/planttrees.php">Planing Trees</a>
      </div>
    </li>
  </ul>
</nav>

<script>
// ---- Desktop nav bubble indicator logic -----
(function(){
  const menu = document.getElementById('desktopNavMenu');
  const bubble = document.getElementById('navBubbleIndicator');

  // Also include nav-login-btn in 'hoverable' targets
  const actions = document.getElementById('navActions');
  let hovered = null;

  // Get all relevant nav "hover" targets
  function getNavTargets() {
    const navItems = Array.from(menu.querySelectorAll('.nav-item'));
    // Find only visible nav-login-btn (Login or Logout)
    const loginBtn = actions ? Array.from(actions.querySelectorAll('.nav-login-btn')).filter(el => el.offsetParent !== null)[0] : null;
    if (loginBtn) {
      return navItems.concat([loginBtn]);
    }
    return navItems;
  }

  function moveBubbleTo(el) {
    let container, containerRect;
    // The bubble is inside nav-desktop, so left must be relative to nav-desktop OR its parent
    if (el.classList.contains('nav-login-btn')) {
      // Right-align to nav-actions for the login/logout
      container = actions;
      containerRect = container.getBoundingClientRect();
    } else {
      container = menu;
      containerRect = container.getBoundingClientRect();
    }
    const elRect = el.getBoundingClientRect();

    // Compute left relative to nav-desktop's bounding box
    // If login/logout: relative to nav-desktop parent, offset by width
    let left;
    if (el.classList.contains('nav-login-btn')) {
      // Find nav-desktop bounding box
      const menuRect = menu.getBoundingClientRect();
      // Add nav-desktop width + gap to left of nav-login-btn
      left = elRect.left - menuRect.left + menu.scrollLeft;
      // For bubble positioning, add the nav-desktop's width + gap (if any), but it's already spread as flex.
      // Adjust so bubble doesn't stack over profile pic, subtract a bit if close to right edge
    } else {
      // nav-item: normal case
      left = elRect.left - menu.getBoundingClientRect().left + menu.scrollLeft;
    }

    bubble.style.display = "block";
    bubble.style.width = (elRect.width + 18) + "px";
    bubble.style.left = left - 9 + "px";
    bubble.style.opacity = .97;
    bubble.style.background = "linear-gradient(135deg, rgba(230,245,255,0.23) 17%,rgba(180,245,246,0.16) 47%,rgba(110,176,255,0.19) 94%)";
    bubble.style.boxShadow =
      "0 4px 22px 0 rgba(0,30,100,0.12), " +
      "0 0px 9px 0 rgba(160,245,255,.15)," +
      "inset 0 0px 18px 0 rgba(255,255,255,0.12)";
    bubble.style.border = "1.7px solid rgba(196,251,255,0.19)";
  }

  function hideBubble() {
    bubble.style.opacity = 0;
    hovered = null;
    setTimeout(() => {
      if (bubble.style.opacity == 0) {
        bubble.style.display = 'none';
      }
    }, 150);
  }

  // For nav-items
  function attachEvents(targets) {
    targets.forEach(item => {
      item.addEventListener('mouseenter', function(){
        hovered = this;
        moveBubbleTo(this);
        // Also add 'active' state for accessibility styling if needed
      });
      item.addEventListener('mousemove', function(){
        if (hovered === this) moveBubbleTo(this);
      });
      item.addEventListener('mouseleave', function(){
        hideBubble();
      });
      item.addEventListener('focus', function(){
        hovered = this;
        moveBubbleTo(this);
      });
      item.addEventListener('blur', function(){
        hideBubble();
      });
    });
  }

  // Setup on pageload, and again when login/logout button might swap
  function setupNavBubbleEvents() {
    const targets = getNavTargets();
    // Prevent double-binding by removing old handlers if needed, but simple for short lists
    attachEvents(targets);
  }
  setupNavBubbleEvents();

  // If your login/logout state can swap AJAX-ically, you would rerun setupNavBubbleEvents() after DOM change

  menu.addEventListener('mouseleave', function(){
    hideBubble();
  });
  // Also mouseleave for nav-actions (for login/logout)
  if (actions) {
    actions.addEventListener('mouseleave', function() {
      hideBubble();
    });
  }
})();

const burgerBtn = document.getElementById("navBurgerBtn");
const mobilePanel = document.getElementById("mobileMenuPanel");

burgerBtn.addEventListener("click",()=>{
  burgerBtn.classList.toggle("active");
  mobilePanel.classList.toggle("open");
});

document.querySelectorAll(".mobile-label").forEach(label=>{
  label.addEventListener("click",()=>{
    const parent = label.parentElement;
    document.querySelectorAll(".mobile-item").forEach(item=>{
      if(item !== parent) item.classList.remove("active");
    });
    parent.classList.toggle("active");
  });
});
</script>

</body>
</html>