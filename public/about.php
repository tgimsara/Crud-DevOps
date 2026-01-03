 <?php
 include 'includes/header.php';
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <style>
    * { 
      box-sizing: border-box; 


      margin: 0;
      padding: 0;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
      background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 25%, #16213e 50%, #0f3460 75%, #1a1a2e 100%);
      background-attachment: fixed;
      color: #ffffff;
      min-height: 100vh;
      overflow-x: hidden;
      position: relative;
    }

    body::before {
      content: '';
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: 
        radial-gradient(ellipse at 20% 20%, rgba(120, 119, 198, 0.15) 0%, transparent 50%),
        radial-gradient(ellipse at 80% 80%, rgba(255, 119, 198, 0.1) 0%, transparent 50%),
        radial-gradient(ellipse at 40% 60%, rgba(72, 202, 228, 0.1) 0%, transparent 50%),


        radial-gradient(ellipse at 60% 30%, rgba(147, 51, 234, 0.08) 0%, transparent 50%);
      pointer-events: none;
      z-index: 0;
      animation: bgFloat 20s ease-in-out infinite;
    }

    @keyframes bgFloat {
      0%, 100% { transform: scale(1) rotate(0deg); }
      50% { transform: scale(1.1) rotate(3deg); }
    }

    .floating-orbs {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;


      z-index: 0;
      overflow: hidden;
    }

    .orb {
      position: absolute;
      border-radius: 50%;
      filter: blur(60px);

      opacity: 0.5;
      animation: orbFloat 25s ease-in-out infinite;
    }

    .orb-1 {
      width: 400px;
      height: 400px;
      background: radial-gradient(circle, rgba(147, 51, 234, 0.4) 0%, transparent 70%);


      top: -10%;
      left: -5%;
      animation-delay: 0s;
    }

    .orb-2 {
      width: 500px;
      height: 500px;
      background: radial-gradient(circle, rgba(59, 130, 246, 0.3) 0%, transparent 70%);

      top: 30%;
      right: -10%;
      animation-delay: -5s;
    }

    .orb-3 {
      width: 350px;
      height: 350px;
      background: radial-gradient(circle, rgba(16, 185, 129, 0.3) 0%, transparent 70%);

      bottom: 10%;
      left: 20%;
      animation-delay: -10s;
    }

    .orb-4 {
      width: 300px;
      height: 300px;
      background: radial-gradient(circle, rgba(236, 72, 153, 0.25) 0%, transparent 70%);
      top: 60%;

      left: 60%;
      animation-delay: -15s;
    }

    @keyframes orbFloat {
      0%, 100% { transform: translate(0, 0) scale(1); }
      25% { transform: translate(50px, -80px) scale(1.1); }

      50% { transform: translate(-30px, 50px) scale(0.9); }
      75% { transform: translate(80px, 30px) scale(1.05); }
    }

    section { 
      padding: 100px 20px; 
      position: relative;
      z-index: 1;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
    }

    .glass-card {
      background: linear-gradient(
        135deg,
        rgba(255, 255, 255, 0.1) 0%,

        rgba(255, 255, 255, 0.05) 50%,
        rgba(255, 255, 255, 0.08) 100%
      );
      backdrop-filter: blur(40px);
      -webkit-backdrop-filter: blur(40px);
      border-radius: 32px;

      border: 1px solid rgba(255, 255, 255, 0.18);
      padding: 50px;
      position: relative;

      overflow: hidden;
      box-shadow: 
        0 25px 80px rgba(0, 0, 0, 0.4),
        0 8px 32px rgba(0, 0, 0, 0.3),
        inset 0 1px 0 rgba(255, 255, 255, 0.2),

        inset 0 -1px 0 rgba(0, 0, 0, 0.1);
      transform: translateY(0);


      transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .glass-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;

      right: 0;
      height: 50%;
      background: linear-gradient(
        180deg,
        rgba(255, 255, 255, 0.15) 0%,

        transparent 100%
      );
      border-radius: 32px 32px 0 0;
      pointer-events: none;
    }

    .glass-card::after {
      content: '';
      position: absolute;
      top: -100%;
      left: -100%;

      width: 300%;
      height: 300%;
      background: conic-gradient(
        from 0deg,
        transparent,
        rgba(255, 255, 255, 0.03),

        transparent,
        rgba(255, 255, 255, 0.05),
        transparent
      );
      animation: rotateGlow 15s linear infinite;
      opacity: 0;

      transition: opacity 0.5s ease;
    }

    .glass-card:hover::after {
      opacity: 1;
    }

    @keyframes rotateGlow {
      0% { transform: rotate(0deg); }

      100% { transform: rotate(360deg); }
    }

    .glass-card:hover {
      transform: translateY(-10px);
      box-shadow: 
        0 40px 100px rgba(0, 0, 0, 0.5),
        0 15px 50px rgba(147, 51, 234, 0.2),

        inset 0 1px 0 rgba(255, 255, 255, 0.25);
      border-color: rgba(255, 255, 255, 0.3);
    }

    .shimmer {
      position: absolute;
      top: 0;
      left: -150%;
      width: 100%;

      height: 100%;

      background: linear-gradient(
        90deg,
        transparent,

        rgba(255, 255, 255, 0.1),
        transparent
      );
      transform: skewX(-20deg);
      transition: left 0.8s ease;
      pointer-events: none;
    }

    .glass-card:hover .shimmer {
      left: 150%;
    }

    img {
      max-width: 100%;
      border-radius: 20px;
      border: 1px solid rgba(255, 255, 255, 0.15);


      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);
      transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
    }

    img:hover {
      transform: scale(1.03);
      box-shadow: 0 30px 80px rgba(0, 0, 0, 0.5);
    }

    h1 { 
      font-size: clamp(2.5rem, 5vw, 4rem); 
      font-weight: 800; 
      background: linear-gradient(135deg, #fff 0%, #e0e7ff 50%, #c4b5fd 100%);


      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;


      margin-bottom: 20px;
      animation: titleGlow 3s ease-in-out infinite;
    }

    @keyframes titleGlow {
      0%, 100% { filter: brightness(1); }
      50% { filter: brightness(1.2); }
    }

    h2 { 
      font-size: clamp(1.8rem, 3vw, 2.5rem);
      font-weight: 700;
      color: #fff;
      margin-bottom: 20px;
      text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
    }

    h3 { 
      font-size: 1.4rem;
      font-weight: 600;
      color: #fff;
      margin-bottom: 10px;
    }

    h4 { 
      font-size: 1.8rem;
      font-weight: 700;
      color: #fff;

      margin-bottom: 15px;
    }

    p {
      font-size: 1.125rem;
      line-height: 1.8;

      margin-bottom: 20px;
      color: rgba(255, 255, 255, 0.85);
    }

    a.cta {
      display: inline-block;
      padding: 16px 40px;
      background: linear-gradient(135deg, rgba(147, 51, 234, 0.8) 0%, rgba(79, 70, 229, 0.8) 100%);
      color: #fff;


      text-decoration: none;
      border-radius: 50px;
      text-transform: uppercase;
      font-weight: 600;
      font-size: 0.9rem;


      letter-spacing: 2px;
      position: relative;
      overflow: hidden;
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 
        0 10px 40px rgba(147, 51, 234, 0.4),
        inset 0 1px 0 rgba(255, 255, 255, 0.2);
      transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
      backdrop-filter: blur(10px);
    }

    a.cta::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;


      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
      transition: left 0.5s ease;
    }

    a.cta:hover::before {
      left: 100%;
    }

    a.cta:hover {
      transform: translateY(-5px) scale(1.05);
      box-shadow: 


        0 20px 60px rgba(147, 51, 234, 0.5),
        0 0 40px rgba(147, 51, 234, 0.3);
    }



    .banner {
      min-height: 70vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      position: relative;


      overflow: hidden;
    }

    .banner .container {
      position: relative;
      z-index: 2;
    }

    .banner .glass-card {
      padding: 60px 80px;
      max-width: 900px;


      margin: 0 auto;
      animation: bannerFloat 6s ease-in-out infinite;
    }

    @keyframes bannerFloat {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-15px); }
    }

    .banner-badge {
      display: inline-block;
      padding: 10px 25px;
      background: rgba(16, 185, 129, 0.2);
      border: 1px solid rgba(16, 185, 129, 0.4);
      border-radius: 50px;
      color: #10b981;


      font-size: 0.85rem;
      font-weight: 600;
      letter-spacing: 2px;
      text-transform: uppercase;
      margin-bottom: 25px;

      animation: badgePulse 3s ease-in-out infinite;
    }


    @keyframes badgePulse {
      0%, 100% { box-shadow: 0 0 20px rgba(16, 185, 129, 0.3); }
      50% { box-shadow: 0 0 40px rgba(16, 185, 129, 0.5); }
    }

    .first .glass-card {
      animation: slideInUp 1s ease forwards;
    }

    @keyframes slideInUp {
      from {
        opacity: 0;
        transform: translateY(60px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .flex-section .container {
      display: flex;
      flex-direction: column;


      gap: 40px;
    }

    @media (min-width: 768px) {
      .flex-section .container {
        flex-direction: row;

        align-items: center;
      }

      .flex-section .left-content,
      .flex-section .right-content,


      .flex-section .left-img,
      .flex-section .right-img {
        flex: 1;
      }

      .flex-section.reverse .container {
        flex-direction: row-reverse;
      }
    }

    .left-img, .right-img {
      position: relative;
    }

    .left-img::before, .right-img::before {
      content: '';
      position: absolute;
      top: -20px;
      left: -20px;
      right: 20px;
      bottom: 20px;
      background: linear-gradient(135deg, rgba(147, 51, 234, 0.3), rgba(59, 130, 246, 0.3));
      border-radius: 24px;
      z-index: -1;
      filter: blur(30px);
      opacity: 0;
      transition: opacity 0.5s ease;
    }

    .left-img:hover::before, .right-img:hover::before {
      opacity: 1;
    }

    .team-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
    }

    .member {
      background: linear-gradient(
        135deg,
        rgba(255, 255, 255, 0.1) 0%,
        rgba(255, 255, 255, 0.05) 100%
      );
      backdrop-filter: blur(30px);
      -webkit-backdrop-filter: blur(30px);
      padding: 40px 30px;
      border-radius: 28px;
      border: 1px solid rgba(255, 255, 255, 0.15);
      box-shadow: 
        0 15px 50px rgba(0, 0, 0, 0.3),
        inset 0 1px 0 rgba(255, 255, 255, 0.15);
      text-align: center;
      position: relative;
      overflow: hidden;
      transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .member::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, #10b981, #3b82f6, #8b5cf6, #ec4899);
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .member::after {
      content: '';
      position: absolute;
      width: 100px;
      height: 100px;
      background: radial-gradient(circle, rgba(147, 51, 234, 0.3) 0%, transparent 70%);
      top: -50px;
      right: -50px;
      border-radius: 50%;
      transition: all 0.5s ease;
    }

    .member:hover {
      transform: translateY(-15px) scale(1.02);
      box-shadow: 
        0 30px 80px rgba(0, 0, 0, 0.4),
        0 0 60px rgba(147, 51, 234, 0.2);
      border-color: rgba(255, 255, 255, 0.3);
    }

    .member:hover::before {
      opacity: 1;
    }

    .member:hover::after {
      transform: scale(2);
      opacity: 0.5;
    }

    .member-icon {
      width: 80px;
      height: 80px;
      margin: 0 auto 25px;
      background: linear-gradient(135deg, rgba(147, 51, 234, 0.3), rgba(59, 130, 246, 0.3));
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
      border: 2px solid rgba(255, 255, 255, 0.2);
      transition: all 0.5s ease;
    }

    .member:hover .member-icon {
      transform: scale(1.15) rotate(360deg);
      box-shadow: 0 10px 40px rgba(147, 51, 234, 0.4);
    }

    .video-wrapper {
      position: relative;
      padding-bottom: 56.25%;
      height: 0;
      border-radius: 24px;
      overflow: hidden;
      box-shadow: 0 30px 80px rgba(0, 0, 0, 0.5);
      border: 1px solid rgba(255, 255, 255, 0.15);
    }

    .video-wrapper::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(
        180deg,
        rgba(255, 255, 255, 0.1) 0%,
        transparent 30%
      );
      pointer-events: none;
      z-index: 1;
      border-radius: 24px;
    }

    .video-wrapper video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .six .glass-card {
      text-align: center;
    }

    .six img {
      max-width: 600px;
      margin: 30px auto;
      display: block;
    }

    footer {
      background: linear-gradient(
        135deg,
        rgba(10, 10, 26, 0.95) 0%,
        rgba(26, 26, 46, 0.95) 100%
      );
      backdrop-filter: blur(20px);
      padding: 50px 20px;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      position: relative;
      z-index: 1;
    }

    footer p {
      color: rgba(255, 255, 255, 0.7);
      font-size: 0.95rem;
      text-align: center;
      margin: 0;
    }

    footer .footer-brand {
      font-size: 1.2rem;
      font-weight: 600;
      background: linear-gradient(135deg, #10b981, #3b82f6);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      margin-bottom: 10px;
      display: block;
    }

    .scroll-indicator {
      position: fixed;
      bottom: 30px;
      right: 30px;
      width: 50px;
      height: 50px;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(20px);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1px solid rgba(255, 255, 255, 0.2);
      cursor: pointer;
      z-index: 100;
      transition: all 0.3s ease;
      opacity: 0;
      visibility: hidden;
    }

    .scroll-indicator.visible {
      opacity: 1;
      visibility: visible;
    }

    .scroll-indicator:hover {
      transform: scale(1.1);
      background: rgba(147, 51, 234, 0.3);
    }

    .scroll-indicator svg {
      width: 24px;
      height: 24px;
      fill: #fff;
    }

    .fade-in {
      opacity: 0;
      transform: translateY(40px);
      transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .fade-in.visible {
      opacity: 1;
      transform: translateY(0);
    }





    .fade-in-left {
      opacity: 0;
      transform: translateX(-60px);
      transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .fade-in-left.visible {
      opacity: 1;
      transform: translateX(0);
    }

    .fade-in-right {
      opacity: 0;
      transform: translateX(60px);
      transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .fade-in-right.visible {
      opacity: 1;
      transform: translateX(0);
    }

    .stagger-1 { transition-delay: 0.1s; }
    .stagger-2 { transition-delay: 0.2s; }
    .stagger-3 { transition-delay: 0.3s; }
    .stagger-4 { transition-delay: 0.4s; }
    .stagger-5 { transition-delay: 0.5s; }

    ::-webkit-scrollbar {
      width: 10px;
    }

    ::-webkit-scrollbar-track {
      background: rgba(0, 0, 0, 0.3);
    }

    ::-webkit-scrollbar-thumb {
      background: linear-gradient(180deg, #9333ea, #3b82f6);
      border-radius: 10px;
    }

    @media (max-width: 768px) {
      section {
        padding: 60px 15px;
      }

      .glass-card {
        padding: 30px 25px;
        border-radius: 24px;
      }

      .banner .glass-card {
        padding: 40px 30px;
      }

      .team-grid {
        grid-template-columns: 1fr;
      }

      .member {
        padding: 30px 20px;
      }
    }
  </style>
</head>

<body>

<div class="floating-orbs">
  <div class="orb orb-1"></div>
  <div class="orb orb-2"></div>
  <div class="orb orb-3"></div>
  <div class="orb orb-4"></div>
</div>

<section class="banner">
  <div class="container">
    <div class="glass-card">
      <div class="shimmer"></div>
      <div class="banner-badge">CRUD DevOps Team</div>
      <h1>About Us</h1>
      <p>We are a university-driven team building a collaborative platform to support sustainability initiatives, partnerships, and measurable environmental impact.</p>
    </div>
  </div>
</section>

<section class="first">
  <div class="container">
    <div class="glass-card fade-in">
      <div class="shimmer"></div>
      <p>Many sustainability initiatives struggle due to poor coordination and limited impact visibility. This platform was created during a university hackathon to simplify sustainability management and collaboration.</p>
      <p>Developed by five undergraduates from Uva Wellassa University of Sri Lanka, the project focuses on turning sustainability ideas into structured, measurable action.</p>
      <a class="cta" href="#">Explore our platform</a>
    </div>
  </div>
</section>

<section class="second flex-section">
  <div class="container">
    <div class="left-img fade-in-left">
      <img src="https://i.pinimg.com/736x/1c/11/39/1c113972097ffc23d16b5dbc2b2701c4.jpg" alt="platform">
    </div>
    <div class="right-content fade-in-right">
      <div class="glass-card">
        <div class="shimmer"></div>
        <h2>Designed for Sustainability Management</h2>
        <p>The platform enables users to plan initiatives, assign tasks, manage resources, and collaborate with partners while tracking social and environmental impact.</p>
        <a class="cta" href="#">Learn more</a>
      </div>
    </div>
  </div>
</section>

<section class="third flex-section reverse">
  <div class="container">
    <div class="left-content fade-in-left">
      <div class="glass-card">
        <div class="shimmer"></div>
        <h2>Driving Climate Action Through Collaboration</h2>
        <p>By supporting partnerships and responsible consumption, the platform helps teams achieve outcomes aligned with climate action and sustainable development.</p>
        <p>Transparency and collaboration empower long-term environmental and social change.</p>
        <a class="cta" href="#">Contact us</a>
      </div>
    </div>
    <div class="right-img fade-in-right">
      <img src="https://i.pinimg.com/736x/b4/f6/f4/b4f6f43b8ea565f8809e513a841e9a96.jpg" alt="impact">
    </div>
  </div>
</section>

<section class="four">
  <div class="container">
    <div class="team-grid">
      <div class="member fade-in stagger-1">
        <div class="member-icon">👨‍💻</div>
        <h3>Team Member 1</h3>
        <p>CRUD DevOps – Platform Development</p>
      </div>
      <div class="member fade-in stagger-2">
        <div class="member-icon">🤝</div>
        <h3>Team Member 2</h3>
        <p>CRUD DevOps – Collaboration & Planning</p>
      </div>
      <div class="member fade-in stagger-3">
        <div class="member-icon">📊</div>
        <h3>Team Member 3</h3>
        <p>CRUD DevOps – Impact Tracking</p>
      </div>
      <div class="member fade-in stagger-4">
        <div class="member-icon">🎨</div>
        <h3>Team Member 4</h3>
        <p>CRUD DevOps – UI & Experience</p>
      </div>
      <div class="member fade-in stagger-5">
        <div class="member-icon">⚙️</div>
        <h3>Team Member 5</h3>
        <p>CRUD DevOps – System Design</p>
      </div>
    </div>
  </div>
</section>



<section class="six">
  <div class="container">
    <div class="glass-card fade-in">
      <div class="shimmer"></div>
      <h4>Explore the Platform and Create Impact</h4>
      <p>Join us in building collaborative, transparent, and impactful sustainability initiatives.</p>
      <img src="https://i.pinimg.com/1200x/f7/b1/54/f7b1544efe7b1141b40e4b4efe44f3a0.jpg" alt="get started">
      <p><i>Every action contributes to a healthier and more sustainable future.</i></p>
      <a class="cta" href="#">Explore the platform</a>
    </div>
  </div>
</section>



<div class="scroll-indicator" id="scrollTop">
  <svg viewBox="0 0 24 24"><path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"/></svg>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const fadeElements = document.querySelectorAll('.fade-in, .fade-in-left, .fade-in-right');
  
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, observerOptions);

  fadeElements.forEach(function(el) {
    observer.observe(el);
  });

  const scrollIndicator = document.getElementById('scrollTop');
  
  window.addEventListener('scroll', function() {
    if (window.scrollY > 500) {
      scrollIndicator.classList.add('visible');
    } else {
      scrollIndicator.classList.remove('visible');
    }
  });

  scrollIndicator.addEventListener('click', function() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  document.querySelectorAll('.glass-card').forEach(function(card) {
    card.addEventListener('mousemove', function(e) {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      const centerX = rect.width / 2;
      const centerY = rect.height / 2;
      const rotateX = (y - centerY) / 20;
      const rotateY = (centerX - x) / 20;
      
      card.style.transform = 'perspective(1000px) rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg) translateY(-10px)';
    });

    card.addEventListener('mouseleave', function() {
      card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateY(0)';
    });
  });
});
</script>

</body>
</html>



<?php
 include 'includes/footer.php';
 ?>