<?php
session_start();
require_once '../config.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Fetch user data from database
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM users WHERE id = '$user_id'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
} else {
    header('Location: login.php');
    exit();
}

// Format the member since date
$member_since = date('M Y', strtotime($user['created_at']));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($user['name']); ?> - Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-color: #667eea;
            --secondary-color: #764ba2;
            --accent-color: #f093fb;
            --success-color: #4facfe;
            --text-dark: #1a202c;
            --text-light: #718096;
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
            min-height: 100vh;
            background-image: url("https://wallpapers-clan.com/wp-content/uploads/2025/09/dreamy-purple-clouds-aesthetic-desktop-wallpaper-cover.jpg");
            background-size: cover;
            background-attachment: fixed;
        }

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
        }

        .blob-2 {
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(240, 147, 251, 0.4), transparent);
            bottom: -150px;
            right: -150px;
            animation-delay: 5s;
        }

<<<<<<< HEAD
        to {
            transform: rotate(360deg);
        }
    }

    .btn-outline {
        background: rgba(255, 255, 255, 0.1);
        border: 2px solid var(--primary-color);
        color: var(--primary-color);
    }

    
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

        0%,
        100% {
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
        background: conic-gradient(from 0deg,
                transparent,
                rgba(255, 215, 0, 0.3),
                transparent 60deg,
                transparent 120deg,
                rgba(255, 215, 0, 0.3),
                transparent 180deg,
                transparent 240deg,
                rgba(255, 215, 0, 0.3),
                transparent 300deg);
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

    .feature-item:nth-child(1) {
        animation-delay: 0.1s;
    }

    .feature-item:nth-child(2) {
        animation-delay: 0.2s;
    }

    .feature-item:nth-child(3) {
        animation-delay: 0.3s;
    }

    .feature-item:nth-child(4) {
        animation-delay: 0.4s;
    }

    .feature-item:nth-child(5) {
        animation-delay: 0.5s;
    }

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
=======
        @keyframes float {
            0%, 100% { transform: translate(0, 0) scale(1); }
            33% { transform: translate(100px, -100px) scale(1.1); }
            66% { transform: translate(-100px, 100px) scale(0.9); }
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
>>>>>>> a5dec122ad71439007eb74abcb9892992c577bf2
        }

        .main-content {
            position: relative;
            z-index: 1;
            padding: 40px 20px;
        }

        .profile-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 25px;
            padding: 40px;
            margin-bottom: 30px;
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
            gap: 30px;
            margin-bottom: 30px;
            align-items: flex-start;
        }

        .profile-avatar-wrapper {
            position: relative;
        }

        .profile-avatar {
            width: 150px;
            height: 150px;
            border-radius: 25px;
            object-fit: cover;
            border: 4px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
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
        }

        .profile-info {
            flex: 1;
        }

        .gradient-text {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .profile-meta {
            color: var(--text-light);
            font-size: 15px;
            margin-bottom: 15px;
        }

        .profile-meta i {
            margin-right: 8px;
            color: var(--primary-color);
        }

        .profile-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
            padding-top: 30px;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
        }

        .stat-card {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1), rgba(240, 147, 251, 0.1));
            padding: 25px;
            border-radius: 15px;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.2);
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }

        .stat-icon i {
            font-size: 24px;
            color: white;
        }

        .stat-value {
            font-size: 28px;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 14px;
            color: var(--text-light);
        }

        .action-buttons {
            display: flex;
            gap: 12px;
            margin-top: 20px;
        }

        .btn {
            padding: 12px 28px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 14px;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
        }

        .btn-outline {
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
        }

        .btn-outline:hover {
            background: rgba(102, 126, 234, 0.1);
        }

        .btn-danger {
            background: linear-gradient(135deg, #ff6b6b, #ee5a6f);
            color: white;
        }

        .info-section {
            margin-top: 30px;
        }

        .info-row {
            display: flex;
            padding: 15px 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            font-weight: 600;
            color: var(--text-dark);
            min-width: 150px;
        }

        .info-value {
            color: var(--text-light);
        }

        .top-bar {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
            padding: 20px 40px;
            border-radius: 20px;
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: 700;
            color: white;
        }

        @media (max-width: 768px) {
            .profile-header {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .profile-stats {
                grid-template-columns: 1fr;
            }

            .action-buttons {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="background-blobs">
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>
    </div>

    <div class="main-content">
        <div class="container">
            <div class="top-bar glass-effect">
                <div class="logo">
                    <i class="bi bi-person-circle"></i> Jobong
                </div>
                <div class="action-buttons">
                    <a href="index.php" class="btn btn-outline">
                        <i class="bi bi-house"></i> Home
                    </a>
                    <a href="logout.php" class="btn btn-danger">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                </div>
            </div>

            <div class="profile-card glass-effect">
                <div class="profile-header">
                    <div class="profile-avatar-wrapper">
                        <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($user['name']); ?>&size=150&background=667eea&color=fff&bold=true" 
                             alt="<?php echo htmlspecialchars($user['name']); ?>" 
                             class="profile-avatar">
                        <div class="avatar-glow"></div>
                    </div>
                    <div class="profile-info">
                        <h1 class="gradient-text"><?php echo htmlspecialchars($user['name']); ?></h1>
                        <div class="profile-meta">
                            <i class="bi bi-envelope-fill"></i> <?php echo htmlspecialchars($user['email']); ?>
                        </div>
                        <div class="profile-meta">
                            <i class="bi bi-calendar-check"></i> Member since <?php echo $member_since; ?>
                        </div>
                        <div class="profile-meta">
                            <i class="bi bi-shield-check"></i> Account Status: <span style="color: #4facfe; font-weight: 600;">Active</span>
                        </div>
                        <div class="action-buttons">
                            <button class="btn btn-primary" onclick="editProfile()">
                                <i class="bi bi-pencil"></i> Edit Profile
                            </button>
                            <button class="btn btn-outline" onclick="changePassword()">
                                <i class="bi bi-key"></i> Change Password
                            </button>
                        </div>
                    </div>
                </div>

                <div class="profile-stats">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="bi bi-briefcase-fill"></i>
                        </div>
                        <div class="stat-value">0</div>
                        <div class="stat-label">Projects Completed</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="bi bi-list-check"></i>
                        </div>
                        <div class="stat-value">0</div>
                        <div class="stat-label">Tasks Completed</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <div class="stat-value">0</div>
                        <div class="stat-label">Achievements</div>
                    </div>
                </div>

                <div class="info-section">
                    <h3 style="margin-bottom: 20px; color: var(--text-dark);">
                        <i class="bi bi-info-circle"></i> Account Information
                    </h3>
                    <div class="info-row">
                        <div class="info-label">User ID:</div>
                        <div class="info-value">#<?php echo str_pad($user['id'], 6, '0', STR_PAD_LEFT); ?></div>
                    </div>
                    <div class="info-row">
                        <div class="info-label">Account Created:</div>
                        <div class="info-value"><?php echo date('F d, Y h:i A', strtotime($user['created_at'])); ?></div>
                    </div>
                    <div class="info-row">
                        <div class="info-label">Last Updated:</div>
                        <div class="info-value"><?php echo date('F d, Y h:i A', strtotime($user['updated_at'])); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function editProfile() {
            alert('Edit profile functionality coming soon!');
        }

        function changePassword() {
            alert('Change password functionality coming soon!');
        }
    </script>
</body>
</html>