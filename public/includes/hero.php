<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Design Assets - Hero Section</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }

        .hero-section {
            min-height: 100vh;
            background: linear-gradient(135deg, #0a1628 0%, #1a2642 50%, #0f1b35 100%);
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            padding: 80px 0;
        }

        
        .glass-orb {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            animation: float 20s infinite ease-in-out;
        }

        .orb-1 {
            width: 120px;
            height: 120px;
            top: 15%;
            left: 8%;
            background: rgba(99, 153, 255, 0.08);
            animation-delay: 0s;
        }

        .orb-2 {
            width: 80px;
            height: 80px;
            top: 25%;
            right: 45%;
            background: rgba(103, 137, 255, 0.06);
            animation-delay: 2s;
        }

        .orb-3 {
            width: 350px;
            height: 350px;
            top: 15%;
            right: 25%;
            background: rgba(68, 107, 238, 0.12);
            animation-delay: 4s;
        }

        .orb-4 {
            width: 150px;
            height: 150px;
            top: 12%;
            right: 18%;
            background: rgba(255, 208, 87, 0.15);
            animation-delay: 6s;
        }

        .orb-5 {
            width: 200px;
            height: 200px;
            top: 35%;
            right: 15%;
            background: rgba(76, 175, 80, 0.12);
            animation-delay: 8s;
        }

        .orb-6 {
            width: 60px;
            height: 60px;
            bottom: 30%;
            right: 40%;
            background: rgba(255, 255, 255, 0.06);
            animation-delay: 3s;
        }

        @keyframes float {
            0%, 100% {
                transform: translate(0, 0) scale(1);
            }
            25% {
                transform: translate(30px, -30px) scale(1.05);
            }
            50% {
                transform: translate(-20px, 20px) scale(0.95);
            }
            75% {
                transform: translate(20px, 30px) scale(1.02);
            }
        }

        .hero-content {
            position: relative;
            z-index: 10;
        }

        .hero-title {
            font-family: 'Playfair Display', serif;
            font-size: 4.5rem;
            font-weight: 700;
            color: #ffffff;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            letter-spacing: -0.02em;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 2.5rem;
            line-height: 1.6;
            font-weight: 400;
        }

        
        .glass-btn {
            padding: 16px 40px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            position: relative;
            overflow: hidden;
        }

        .glass-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .glass-btn:hover::before {
            left: 100%;
        }

        .btn-primary-glass {
            background: rgba(255, 255, 255, 0.95);
            color: #0a1628;
            box-shadow: 0 8px 32px rgba(255, 255, 255, 0.2);
        }

        .btn-primary-glass:hover {
            background: rgba(255, 255, 255, 1);
            transform: translateY(-2px);
            box-shadow: 0 12px 40px rgba(255, 255, 255, 0.3);
        }

        .btn-secondary-glass {
            background: rgba(255, 255, 255, 0.08);
            color: #ffffff;
            border: 1px solid rgba(255, 255, 255, 0.2);
            margin-left: 1rem;
        }

        .btn-secondary-glass:hover {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }

        
        .hero-image-container {
            position: relative;
            z-index: 10;
            
        }

        .hero-image-wrapper {
            position: relative;
            border-radius: 30px;
            overflow: visible;
        }

        .hero-image {
            width: 60%;
            height: auto;
            border-radius: 30px;
            position: relative;
            z-index: 2;
        }

        
        .testimonial-card {
            position: absolute;
            bottom: -30px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(15, 27, 53, 0.7);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 20px 30px;
            display: flex;
            align-items: center;
            gap: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            z-index: 3;
            min-width: 350px;
        }

        .testimonial-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .testimonial-content h6 {
            color: #ffffff;
            margin: 0;
            font-size: 1rem;
            font-weight: 600;
        }

        .testimonial-content p {
            color: rgba(255, 255, 255, 0.7);
            margin: 5px 0 0 0;
            font-size: 0.9rem;
        }

        
        @media (max-width: 992px) {
            .hero-title {
                font-size: 3rem;
            }
            .hero-subtitle {
                font-size: 1.1rem;
            }
            .btn-secondary-glass {
                margin-left: 0;
                margin-top: 1rem;
            }
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            .glass-btn {
                width: 100%;
                margin-bottom: 1rem;
            }
            .btn-secondary-glass {
                margin-left: 0;
            }
            .testimonial-card {
                min-width: 280px;
                padding: 15px 20px;
            }
        }

        
        @keyframes shimmer {
            0% {
                background-position: -1000px 0;
            }
            100% {
                background-position: 1000px 0;
            }
        }

        .hero-image-wrapper::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            background-size: 1000px 100%;
            animation: shimmer 3s infinite;
            border-radius: 30px;
            z-index: 3;
            pointer-events: none;
        }
    </style>
</head>
<body>
    <section class="hero-section">
        
        <div class="glass-orb orb-1"></div>
        <div class="glass-orb orb-2"></div>
        <div class="glass-orb orb-3"></div>
        <div class="glass-orb orb-4"></div>
        <div class="glass-orb orb-5"></div>
        <div class="glass-orb orb-6"></div>

        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-lg-6 hero-content">
                    <h1 class="hero-title">Turn Sustainability Goals Into Action!</h1>
                    <p class="hero-subtitle">Manage projects, resources, and impact in one simple platform</p>
                    <div class="d-flex flex-wrap">
                        <button class="glass-btn btn-secondary-glass">Learn More</button>
                    </div>
                </div>

                
                <div class="col-lg-6 hero-image-container mt-5 mt-lg-0">
                    <div class="hero-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=600&h=700&fit=crop" alt="Professional Designer" class="hero-image">
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>