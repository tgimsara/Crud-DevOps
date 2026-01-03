<?php
session_start();
$isLoggedIn = isset($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Glass Navbar with Dropdowns</title>

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


.nav-desktop{
  height:100%;
  display:flex;
  align-items:center;
  gap:42px;
  padding-left:36px;
}

.nav-item{
  position:relative;
  color:rgba(255,255,255,.92);
  font-size:17px;
  padding:10px 22px;
  cursor:pointer;
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

.nav-item:hover .nav-dropdown{
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
  position:absolute;
  right:36px;
  top:50%;
  transform:translateY(-50%);
  display:flex;
  gap:14px;
}

.logout-btn{
  text-decoration:none;
  padding:10px 18px;
  border-radius:20px;
  background:rgba(255,255,255,.1);
  color:#fff;
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
  
  <ul class="nav-desktop" id="desktopNavMenu">

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
        <a href="">Consulting</a>
        <a href="">Development</a>
        <a href="">Support</a>
        <a href="">Training</a>
      </div>
    </li>

    <li class="nav-item" id="navImpact">
      Impact
      <div class="nav-dropdown" id="dropdownImpact">
        <a href="">Cases</a>
        <a href="">Stats</a>
        <a href="">Awards</a>
      </div>
    </li>

  </ul>


  <div class="nav-actions">
    <?php if ($isLoggedIn): ?>
      <a href="logout.php" class="logout-btn">Logout</a>
      <div class="profile-img">
        <a href="user.php">
          <img src="images/profile-placeholder.png" alt="Profile">
        </a>
      </div>
    <?php else: ?>
      <a href="login.php" class="logout-btn">Login</a>
    <?php endif; ?>
  </div>
</header>


<nav class="mobile-panel" id="mobileMenuPanel">
  <ul>

    <li class="mobile-item">
      <div class="mobile-label">Project</div>
      <div class="mobile-submenu">
        <a href="">Overview</a>
        <a href="">Timeline</a>
        <a href="">Team</a>
      </div>
    </li>

    <li class="mobile-item">
      <div class="mobile-label">Resources</div>
      <div class="mobile-submenu">
        <a href="">Docs</a>
        <a href="">Downloads</a>
      </div>
    </li>

    <li class="mobile-item">
      <div class="mobile-label">Services</div>
      <div class="mobile-submenu">
        <a href="">Consulting</a>
        <a href="">Support</a>
      </div>
    </li>

    <li class="mobile-item">
      <div class="mobile-label">Impact</div>
      <div class="mobile-submenu">
        <a href="">Cases</a>
        <a href="">Awards</a>
      </div>
    </li>

  </ul>
</nav>

<script>

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