<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobong - Liquid Glass Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/user.css">
</head>

<style>
    /* style.css - Liquid Glass Design */

:root {
    --primary-color: #667eea;
    --secondary-color: #764ba2;
    --accent-color: #f093fb;
    --success-color: #4facfe;
    --text-dark: #1a202c;
    --text-light: #718096;
    --glass-bg: rgba(255, 255, 255, 0.1);
    --glass-border: rgba(255, 255, 255, 0.2);
    --sidebar-width: 280px;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: var(--text-dark);
    overflow-x: hidden;
    min-height: 100vh;
    position: relative;
}

/* Animated Background Blobs */
.background-blobs {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    z-index: 0;
    pointer-events: none;
}

.blob {
    position: absolute;
    border-radius: 50%;
    filter: blur(60px);
    opacity: 0.5;
    animation: float 20s infinite ease-in-out;
}

.blob-1 {
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, rgba(102, 126, 234, 0.4), transparent);
    top: -200px;
    left: -200px;
    animation-delay: 0s;
}

.blob-2 {
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(240, 147, 251, 0.4), transparent);
    bottom: -150px;
    right: -150px;
    animation-delay: 5s;
}

.blob-3 {
    width: 350px;
    height: 350px;
    background: radial-gradient(circle, rgba(79, 172, 254, 0.4), transparent);
    top: 50%;
    left: 50%;
    animation-delay: 10s;
}

@keyframes float {
    0%, 100% {
        transform: translate(0, 0) scale(1);
    }
    33% {
        transform: translate(100px, -100px) scale(1.1);
    }
    66% {
        transform: translate(-100px, 100px) scale(0.9);
    }
}

/* Glass Effect */
.glass-effect {
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
}

/* Sidebar Styles */
.sidebar {
    position: fixed;
    left: 0;
    top: 0;
    width: var(--sidebar-width);
    height: 100vh;
    padding: 30px 20px;
    z-index: 1000;
    animation: slideInLeft 0.6s ease;
}

@keyframes slideInLeft {
    from {
        transform: translateX(-100%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

.logo {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 24px;
    font-weight: 700;
    color: white;
    margin-bottom: 40px;
    padding-left: 10px;
}

.logo-icon {
    width: 45px;
    height: 45px;
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    animation: rotate3d 3s infinite ease-in-out;
}

@keyframes rotate3d {
    0%, 100% {
        transform: rotateY(0deg);
    }
    50% {
        transform: rotateY(180deg);
    }
}

.logo-icon i {
    font-size: 24px;
    color: white;
}

.nav-menu {
    display: flex;
    flex-direction: column;
    gap: 5px;
}

.nav-item {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 14px 16px;
    color: rgba(255, 255, 255, 0.8);
    text-decoration: none;
    border-radius: 12px;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    font-size: 15px;
    position: relative;
    overflow: hidden;
}

.nav-item::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 0;
    height: 100%;
    background: linear-gradient(90deg, rgba(255, 255, 255, 0.2), transparent);
    transition: width 0.4s ease;
}

.nav-item:hover::before {
    width: 100%;
}

.nav-item:hover {
    background: rgba(255, 255, 255, 0.15);
    color: white;
    transform: translateX(5px);
}

.nav-item.active {
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.25), rgba(255, 255, 255, 0.1));
    color: white;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.nav-item i {
    font-size: 20px;
    width: 24px;
}

.nav-item .badge {
    margin-left: auto;
    background: rgba(255, 255, 255, 0.3);
    color: white;
    padding: 4px 10px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0%, 100% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.05);
    }
}

/* Main Content */
.main-content {
    margin-left: var(--sidebar-width);
    min-height: 100vh;
    position: relative;
    z-index: 1;
}

/* Header */
.top-header {
    padding: 20px 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: sticky;
    top: 20px;
    margin: 20px 30px;
    border-radius: 20px;
    z-index: 100;
    animation: slideInDown 0.6s ease;
}

@keyframes slideInDown {
    from {
        transform: translateY(-100%);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.search-bar {
    position: relative;
    flex: 1;
    max-width: 500px;
}

.glass-input {
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    border-radius: 15px;
    padding: 5px;
    position: relative;
    overflow: hidden;
}

.search-glow {
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
    transition: left 0.5s;
}

.glass-input:focus-within .search-glow {
    animation: shine 2s infinite;
}

@keyframes shine {
    0% {
        left: -100%;
    }
    100% {
        left: 100%;
    }
}

.search-bar i {
    position: absolute;
    left: 20px;
    top: 50%;
    transform: translateY(-50%);
    color: white;
    font-size: 18px;
    z-index: 1;
}

.search-bar input {
    width: 100%;
    padding: 12px 20px 12px 50px;
    border: none;
    border-radius: 12px;
    font-size: 14px;
    outline: none;
    background: transparent;
    color: white;
    position: relative;
    z-index: 1;
}

.search-bar input::placeholder {
    color: rgba(255, 255, 255, 0.7);
}

.header-actions {
    display: flex;
    align-items: center;
    gap: 15px;
}

.glass-button {
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

.glass-button::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.3);
    transform: translate(-50%, -50%);
    transition: width 0.6s, height 0.6s;
}

.glass-button:hover::before {
    width: 300px;
    height: 300px;
}

.glass-button:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
}

.btn-icon {
    width: 45px;
    height: 45px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    border: none;
    position: relative;
}

.notification-dot {
    position: absolute;
    top: 8px;
    right: 8px;
    width: 10px;
    height: 10px;
    background: #ff4757;
    border-radius: 50%;
    border: 2px solid white;
    animation: ping 2s infinite;
}

@keyframes ping {
    0%, 100% {
        transform: scale(1);
        opacity: 1;
    }
    50% {
        transform: scale(1.3);
        opacity: 0.5;
    }
}

.btn-icon i {
    font-size: 20px;
    color: white;
    position: relative;
    z-index: 1;
}

.user-profile-header {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 5px 15px 5px 5px;
    border-radius: 12px;
}

.user-profile-header img {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    object-fit: cover;
    border: 2px solid rgba(255, 255, 255, 0.5);
}

.user-profile-header span {
    font-weight: 600;
    color: white;
    position: relative;
    z-index: 1;
}

/* Cards */
.card {
    background: rgba(255, 255, 255, 0.95);
    border-radius: 25px;
    border: none;
    margin-bottom: 30px;
    position: relative;
}

.floating-card {
    animation: floatCard 6s infinite ease-in-out;
}

@keyframes floatCard {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
}

.profile-card {
    padding: 40px;
    animation: fadeInUp 0.8s ease;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.profile-header {
    display: flex;
    gap: 25px;
    margin-bottom: 30px;
    align-items: flex-start;
}

.profile-avatar-wrapper {
    position: relative;
}

.profile-avatar {
    width: 120px;
    height: 120px;
    border-radius: 25px;
    object-fit: cover;
    border: 4px solid rgba(255, 255, 255, 0.5);
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
    position: relative;
    z-index: 1;
    transition: transform 0.4s ease;
}

.profile-avatar-wrapper:hover .profile-avatar {
    transform: scale(1.05);
}

.avatar-glow {
    position: absolute;
    top: -5px;
    left: -5px;
    right: -5px;
    bottom: -5px;
    background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
    border-radius: 25px;
    opacity: 0;
    filter: blur(20px);
    transition: opacity 0.4s ease;
    z-index: 0;
}

.profile-avatar-wrapper:hover .avatar-glow {
    opacity: 0.8;
    animation: pulse 2s infinite;
}

.profile-info {
    flex: 1;
}

.gradient-text {
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.profile-info h2 {
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 8px;
}

.profile-info .location {
    color: var(--text-light);
    font-size: 15px;
    margin-bottom: 15px;
}

.profile-info .location i {
    margin-right: 5px;
}

.profile-info .bio {
    color: var(--text-light);
    line-height: 1.6;
    font-size: 15px;
}

.text-gradient {
    background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 600;
}

.profile-actions {
    display: flex;
    gap: 12px;
}

.btn {
    padding: 12px 24px;
    border-radius: 12px;
    font-weight: 600;
    font-size: 14px;
    border: none;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}

.btn-primary {
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    color: white;
    border: none;
}

.button-glow {
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255, 255, 255, 0.3), transparent);
    opacity: 0;
    transition: opacity 0.4s ease;
}

.btn-primary:hover .button-glow {
    opacity: 1;
    animation: rotateGlow 2s linear infinite;
}

@keyframes rotateGlow {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}

.btn-outline {
    background: rgba(255, 255, 255, 0.1);
    border: 2px solid var(--primary-color);
    color: var(--primary-color);
}

/* Profile Stats */
.profile-stats {
    display: flex;
    gap: 30px;
    padding: 30px 0;
    border-top: 1px solid rgba(0, 0, 0, 0.05);
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    margin-bottom: 30px;
}

.glass-stat {
    flex: 1;
    background: linear-gradient(135deg, rgba(102, 126, 234, 0.1), rgba(240, 147, 251, 0.1));
    padding: 20px;
    border-radius: 15px;
    position: relative;
    overflow: hidden;
    transition: all 0.4s ease;
}

.glass-stat:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(102, 126, 234, 0.2);
}

.stat-shine {
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.3), transparent);
    transform: rotate(45deg);
    animation: shine-move 3s infinite;
}

@keyframes shine-move {
    0% {
        left: -100%;
    }
    100% {
        left: 100%;
    }
}

.stat-item {
    display: flex;
    align-items: center;
    gap: 15px;
    position: relative;
}

.stat-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.4s ease;
}

.glass-stat:hover .stat-icon {
    transform: rotate(360deg);
}

.stat-icon i {
    font-size: 24px;
    color: white;
}

.stat-item strong {
    display: block;
    font-size: 16px;
    color: var(--text-dark);
    margin-bottom: 2px;
}

.stat-item span {
    font-size: 14px;
    color: var(--text-light);
}

/* Tabs */
.profile-tabs {
    border-bottom: 2px solid rgba(0, 0, 0, 0.05);
    margin-bottom: 30px;
}

.profile-tabs .nav-link {
    border: none;
    color: var(--text-light);
    font-weight: 600;
    padding: 15px 25px;
    position: relative;
    transition: all 0.3s ease;
}

.tab-indicator {
    position: absolute;
    bottom: -2px;
    left: 50%;
    transform: translateX(-50%);
    width: 0;
    height: 3px;
    background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
    border-radius: 3px;
    transition: width 0.3s ease;
}

.profile-tabs .nav-link:hover .tab-indicator {
    width: 50%;
}

.profile-tabs .nav-link.active {
    color: var(--primary-color);
    background: transparent;
}

.profile-tabs .nav-link.active .tab-indicator {
    width: 100%;
}

/* Job Item */
.job-item {
    display: flex;
    gap: 20px;
    padding: 30px;
    background: rgba(255, 255, 255, 0.5);
    border-radius: 20px;
    margin-bottom: 20px;
    transition: all 0.4s ease;
}

.hover-lift:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
}

.job-icon {
    width: 70px;
    height: 70px;
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    position: relative;
    overflow: hidden;
}

.gradient-bg {
    background: linear-gradient(135deg, #FF6B9D, #FF1744);
}

.icon-shine {
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.5), transparent);
    transform: rotate(45deg);
    animation: icon-shine 3s infinite;
}

@keyframes icon-shine {
    0% {
        left: -100%;
    }
    100% {
        left: 100%;
    }
}

.job-icon i {
    font-size: 32px;
    color: white;
    position: relative;
    z-index: 1;
}

.job-details h4 {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 5px;
    color: var(--text-dark);
}

.job-details .company {
    color: var(--text-light);
    font-size: 14px;
    margin-bottom: 10px;
}

.job-meta {
    color: var(--text-light);
    font-size: 13px;
    margin-bottom: 15px;
}

.job-description {
    color: var(--text-light);
    line-height: 1.6;
    font-size: 14px;
    margin-bottom: 20px;
}

.media-files strong {
    display: block;
    margin-bottom: 15px;
    color: var(--text-dark);
}

.media-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
}

.media-item {
    position: relative;
    border-radius: 15px;
    overflow: hidden;
    cursor: pointer;
}

.media-item img {
    width: 100%;
    height: 180px;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.media-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.media-item:hover .media-overlay {
    opacity: 1;
}

.media-item:hover img {
    transform: scale(1.1);
}

.media-overlay i {
    font-size: 32px;
    color: white;
}

/* Upgrade Card */
.upgrade-card {
    padding: 35px;
    text-align: center;
    position: sticky;
    top: 120px;
    animation: fadeInUp 0.8s ease 0.2s both;
}

.trophy-wrapper {
    margin-bottom: 25px;
}

.trophy-icon {
    width: 100px;
    height: 100px;
    margin: 0 auto;
    background: linear-gradient(135deg, #FFD700, #FFA500);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    animation: bounce 2s infinite;
}

@keyframes bounce {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
}

.trophy-rays {
    position: absolute;
    width: 120%;
    height: 120%;
    background: conic-gradient(
        from 0deg,
        transparent,
        rgba(255, 215, 0, 0.3),
        transparent 60deg,
        transparent 120deg,
        rgba(255, 215, 0, 0.3),
        transparent 180deg,
        transparent 240deg,
        rgba(255, 215, 0, 0.3),
        transparent 300deg
    );
    animation: rotate 4s linear infinite;
}

@keyframes rotate {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}

.trophy-icon i {
    font-size: 50px;
    color: white;
    position: relative;
    z-index: 1;
}

.upgrade-card h3 {
    font-size: 26px;
    font-weight: 700;
    margin-bottom: 15px;
}

.upgrade-description {
    color: var(--text-light);
    line-height: 1.6;
    font-size: 14px;
    margin-bottom: 25px;
}

.features-list {
    list-style: none;
    text-align: left;
    margin-bottom: 30px;
}

.feature-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px 0;
    color: var(--text-dark);
    font-size: 14px;
    opacity: 0;
    animation: slideInRight 0.5s ease forwards;
}

.feature-item:nth-child(1) { animation-delay: 0.1s; }
.feature-item:nth-child(2) { animation-delay: 0.2s; }
.feature-item:nth-child(3) { animation-delay: 0.3s; }
.feature-item:nth-child(4) { animation-delay: 0.4s; }
.feature-item:nth-child(5) { animation-delay: 0.5s; }

@keyframes slideInRight {
    from {
        opacity: 0;
        transform: translateX(-20px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.feature-item i {
    color: var(--success-color);
    font-size: 18px;
}

.upgrade-btn {
    position: relative;
    overflow: hidden;
}

.upgrade-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 40px rgba(102, 126, 234, 0.4);
}

/* Particle Canvas */
#particleCanvas {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 0;
}

/* Responsive */
@media (max-width: 992px) {
    .sidebar {
        transform: translateX(-100%);
    }
    
    .main-content {
        margin-left: 0;
    }
    
    .profile-header {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    
    .profile-stats {
        flex-direction: column;
        gap: 15px;
    }
    
    .top-header {
        margin: 10px;
        padding: 15px 20px;
    }
}

@media (max-width: 768px) {
    .search-bar {
        max-width: 200px;
    }
    
    .profile-card {
        padding: 25px;
    }
    
    .media-grid {
        grid-template-columns: 1fr;
    }
    
    .job-item {
        flex-direction: column;
    }
}
</style>
<body>
   
    <div class="background-blobs">
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>
        <div class="blob blob-3"></div>
    </div>

   
    

    <div class="main-content">
       
        

        <div class="container-fluid">
            <div class="row">
                
                <div class="col-lg-8">
                    <div class="card profile-card glass-effect floating-card">
                        <div class="profile-header">
                            <div class="profile-avatar-wrapper">
                                <img src="https://i.pravatar.cc/150?img=33" alt="Cristiana Justin" class="profile-avatar">
                                <div class="avatar-glow"></div>
                            </div>
                            <div class="profile-info">
                                <h2 class="gradient-text">Cristiana Justin</h2>
                                <p class="location">
                                    <i class="bi bi-geo-alt"></i> New York, USA
                                </p>
                                <p class="bio">
                                    I am a consultant for a small hotel business. I currently working them through a rebrand, and they are in of a new company logo. 
                                    <a href="" class="text-gradient">MORE</a>
                                </p>
                            </div>
                            <div class="profile-actions">
                                <button class="btn btn-primary glass-button">
                                    <span>Edit Profile</span>
                                    <div class="button-glow"></div>
                                </button>
                                
                            </div>
                        </div>

                        

                         <ul class="nav nav-tabs profile-tabs" id="profileTabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#experience">
                                    <span>Projects</span>
                                    <div class="tab-indicator"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#biography">
                                    <span>Tasks</span>
                                    <div class="tab-indicator"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#skills">
                                    <span>Contribution</span>
                                    <div class="tab-indicator"></div>
                                </a>
                            </li>
                            
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="experience">
                                <div class="section-header">
                                    <h3>Job Experience <span class="text-muted">3 Job history</span></h3>
                                    <button class="btn btn-outline glass-button btn-sm">
                                        <i class="bi bi-plus"></i> Add More
                                    </button>
                                </div>

                                <div class="job-item glass-effect hover-lift">
                                    <div class="job-icon gradient-bg">
                                        <i class="bi bi-dribbble"></i>
                                        <div class="icon-shine"></div>
                                    </div>
                                    <div class="job-details">
                                        <h4>Graphic Designer</h4>
                                        <p class="company">Dribbble Inc</p>
                                        <p class="job-meta">
                                            <i class="bi bi-calendar"></i> Feb 2016 - Dec 2017
                                            <i class="bi bi-geo-alt ms-3"></i> New York, USA
                                        </p>
                                        <p class="job-description">
                                            There are many variations of passages of Lorem Ipsum available, but the majority 
                                            have suffered alteration in some form, by injected humour, or randomised words 
                                            which don't look even slightly believable. If you are going to use a passage of Lorem 
                                            Ipsum, you need to be sure.
                                        </p>
                                        <div class="media-files">
                                            <strong>Media Files (2)</strong>
                                            <div class="media-grid">
                                                <div class="media-item glass-effect">
                                                    <img src="https://picsum.photos/300/200?random=1" alt="Portfolio 1">
                                                    <div class="media-overlay">
                                                        <i class="bi bi-eye"></i>
                                                    </div>
                                                </div>
                                                <div class="media-item glass-effect">
                                                    <img src="https://picsum.photos/300/200?random=2" alt="Portfolio 2">
                                                    <div class="media-overlay">
                                                        <i class="bi bi-eye"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="biography">
                                <div class="glass-content">
                                    <p>Biography content will be displayed here with beautiful liquid glass effects.</p>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="skills">
                                <div class="glass-content">
                                    <p>Skills content will be displayed here with beautiful liquid glass effects.</p>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="portfolio">
                                <div class="glass-content">
                                    <p>Portfolio content will be displayed here with beautiful liquid glass effects.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                
            </div>
        </div>
    </div>

    
    <canvas id="particleCanvas"></canvas>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/user.js"></script>
</body>
</html>