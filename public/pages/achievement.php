<?php
include("../includes/header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🎯 Our Milestones - Journey of Impact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background:
                        url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1600&q=80') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 50%, rgba(16, 185, 129, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 50%, rgba(139, 92, 246, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 50% 80%, rgba(59, 130, 246, 0.05) 0%, transparent 50%);
            z-index: 0;
            animation: bgPulse 15s ease-in-out infinite;
        }

        @keyframes bgPulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.6; }
        }

        .main-container {
            position: relative;
            z-index: 1;
            padding: 40px 20px;
            max-width: 1600px;
            margin: 0 auto;
        }

        
        .page-header {
            text-align: center;
            margin-bottom: 60px;
            animation: fadeInDown 1s ease;
        }

        .page-header h1 {
            color: #fff;
            font-size: 3.5rem;
            font-weight: 800;
            text-shadow: 3px 3px 20px rgba(0,0,0,0.4);
            margin-bottom: 15px;
            letter-spacing: 2px;
            margin-top:70px;
        }

        .page-header .subtitle {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.4rem;
            font-weight: 300;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .page-header .journey-line {
            width: 150px;
            height: 4px;
            background: linear-gradient(90deg, transparent, #10b981, transparent);
            margin: 20px auto;
            border-radius: 10px;
        }

        
        .glass-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(25px);
            border-radius: 25px;
            border: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            padding: 30px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .glass-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.6s;
        }

        .glass-card:hover::before {
            left: 100%;
        }

        .glass-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 45px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

       
        .stats-section {
            margin-bottom: 60px;
            animation: fadeIn 1.2s ease;
        }

        .stat-card {
            text-align: center;
            height: 100%;
            position: relative;
            animation: scaleIn 0.6s ease;
        }

        .stat-card .icon-box {
            width: 100px;
            height: 100px;
            margin: 0 auto 25px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            transition: all 0.4s ease;
        }

        .stat-card:hover .icon-box {
            transform: scale(1.1) rotate(360deg);
        }

        .stat-card .icon-box i {
            font-size: 3rem;
            color: #fff;
            filter: drop-shadow(0 5px 15px rgba(0,0,0,0.3));
        }

        .stat-card .counter {
            font-size: 3.5rem;
            font-weight: 800;
            color: #fff;
            text-shadow: 2px 2px 15px rgba(0,0,0,0.3);
            margin-bottom: 10px;
            font-family: 'Arial Black', sans-serif;
        }

        .stat-card .label {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.2rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .stat-card .growth {
            margin-top: 15px;
            color: #6ee7b7;
            font-weight: 600;
            font-size: 1rem;
        }

        .stat-card .growth i {
            margin-right: 5px;
        }

        
        .timeline-section {
            margin-bottom: 60px;
            animation: fadeIn 1.4s ease;
        }

        .section-title {
            text-align: center;
            color: #fff;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 50px;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.3);
        }

        .section-title i {
            margin-right: 15px;
            color: #10b981;
        }

        .timeline {
            position: relative;
            padding: 20px 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 4px;
            height: 100%;
            background: linear-gradient(180deg, #10b981, #3b82f6, #8b5cf6);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(16, 185, 129, 0.5);
        }

        .timeline-item {
            display: flex;
            margin-bottom: 50px;
            position: relative;
            animation: slideIn 0.8s ease;
        }

        .timeline-item:nth-child(even) {
            flex-direction: row-reverse;
        }

        .timeline-content {
            width: 45%;
            position: relative;
        }

        .timeline-item:nth-child(even) .timeline-content {
            text-align: right;
        }

        .timeline-date {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 140px;
            text-align: center;
            background: linear-gradient(135deg, #10b981, #059669);
            color: #fff;
            padding: 12px 20px;
            border-radius: 30px;
            font-weight: 700;
            font-size: 1rem;
            box-shadow: 0 5px 20px rgba(16, 185, 129, 0.4);
            z-index: 10;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .timeline-marker {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 30px;
            height: 30px;
            background: #fff;
            border: 5px solid #10b981;
            border-radius: 50%;
            box-shadow: 0 0 20px rgba(16, 185, 129, 0.6);
            z-index: 5;
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: translateX(-50%) scale(1); }
            50% { transform: translateX(-50%) scale(1.2); }
        }

        .milestone-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            transition: all 0.4s ease;
        }

        .milestone-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3);
            border-color: rgba(255, 255, 255, 0.3);
        }

        .milestone-card .icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
            display: inline-block;
        }

        .milestone-card h4 {
            color: #fff;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .milestone-card p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .milestone-card .badge-group {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }

        .milestone-badge {
            background: rgba(16, 185, 129, 0.2);
            color: #6ee7b7;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            border: 1px solid rgba(16, 185, 129, 0.3);
        }

        
        .project-gallery {
            margin-bottom: 60px;
            animation: fadeIn 1.6s ease;
        }

        .project-card {
            height: 100%;
            transition: all 0.4s ease;
            cursor: pointer;
        }

        .project-card .image-wrapper {
            position: relative;
            height: 250px;
            border-radius: 20px 20px 0 0;
            overflow: hidden;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .project-card .image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.4s ease;
        }

        .project-card:hover .image-wrapper img {
            transform: scale(1.1);
        }

        .project-card .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(180deg, transparent, rgba(0,0,0,0.7));
            display: flex;
            align-items: flex-end;
            padding: 20px;
            opacity: 0;
            transition: all 0.4s ease;
        }

        .project-card:hover .overlay {
            opacity: 1;
        }

        .project-card .overlay-text {
            color: #fff;
            font-size: 1.1rem;
            font-weight: 600;
        }

        .project-info {
            padding: 25px;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(15px);
            border-radius: 0 0 20px 20px;
        }

        .project-info h5 {
            color: #fff;
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .project-info p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.95rem;
            margin-bottom: 15px;
        }

        .project-stats {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .project-stat-item {
            text-align: center;
        }

        .project-stat-item .value {
            color: #10b981;
            font-size: 1.5rem;
            font-weight: 700;
        }

        .project-stat-item .label {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.8rem;
            text-transform: uppercase;
        }

        
        .achievements-section {
            margin-bottom: 60px;
            animation: fadeIn 1.8s ease;
        }

        .achievement-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
        }

        .achievement-badge {
            text-align: center;
            padding: 30px;
            animation: bounceIn 0.8s ease;
        }

        .achievement-badge .badge-icon {
            width: 120px;
            height: 120px;
            margin: 0 auto 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            transition: all 0.4s ease;
        }

        .achievement-badge:hover .badge-icon {
            transform: scale(1.15) rotate(10deg);
        }

        .achievement-badge .badge-icon i {
            font-size: 3.5rem;
            color: #fff;
        }

        .achievement-badge .badge-icon::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: inherit;
            filter: blur(20px);
            opacity: 0.6;
        }

        .achievement-badge h5 {
            color: #fff;
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .achievement-badge p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
        }

        
        .growth-section {
            margin-bottom: 60px;
            animation: fadeIn 2s ease;
        }

        .chart-container {
            height: 400px;
            position: relative;
        }

        
        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInDown {
            from { 
                opacity: 0;
                transform: translateY(-40px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes scaleIn {
            from { 
                opacity: 0;
                transform: scale(0.8);
            }
            to { 
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes slideIn {
            from { 
                opacity: 0;
                transform: translateX(-50px);
            }
            to { 
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes bounceIn {
            0% {
                opacity: 0;
                transform: scale(0.3);
            }
            50% {
                opacity: 1;
                transform: scale(1.05);
            }
            70% {
                transform: scale(0.9);
            }
            100% {
                transform: scale(1);
            }
        }

        
        @media (max-width: 992px) {
            .timeline::before {
                left: 30px;
            }

            .timeline-item {
                flex-direction: column !important;
            }

            .timeline-content {
                width: 100%;
                padding-left: 80px;
            }

            .timeline-item:nth-child(even) .timeline-content {
                text-align: left;
            }

            .timeline-date {
                left: 30px;
                transform: none;
            }

            .timeline-marker {
                left: 30px;
                transform: none;
            }
        }

        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 2.5rem;
            }

            .stat-card .counter {
                font-size: 2.5rem;
            }

            .section-title {
                font-size: 2rem;
            }
        }

        /* Particle Background */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(16, 185, 129, 0.5);
            border-radius: 50%;
            animation: particleFloat 15s infinite ease-in-out;
        }

        @keyframes particleFloat {
            0%, 100% { 
                transform: translateY(0) translateX(0);
                opacity: 0;
            }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { 
                transform: translateY(-100vh) translateX(50px);
                opacity: 0;
            }
        }
    </style>
</head>
<body>
   
    <div class="particles" id="particles"></div>

    <div class="main-container">
       
        <div class="page-header">
            <h1><i class="fas fa-trophy"></i> Our Milestones</h1>
            <div class="journey-line"></div>
            <p class="subtitle">Journey of Impact Since Day One</p>
        </div>

       
        <div class="stats-section">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="glass-card stat-card floating">
                        <div class="icon-box" style="background: linear-gradient(135deg, #10b981, #059669);">
                            <i class="fas fa-project-diagram"></i>
                        </div>
                        <div class="counter" data-target="47">0</div>
                        <div class="label">Completed Projects</div>
                        <div class="growth">
                            <i class="fas fa-arrow-up"></i> +12 This Quarter
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="glass-card stat-card floating" style="animation-delay: 0.2s;">
                        <div class="icon-box" style="background: linear-gradient(135deg, #3b82f6, #2563eb);">
                            <i class="fas fa-award"></i>
                        </div>
                        <div class="counter" data-target="23">0</div>
                        <div class="label">Achievements</div>
                        <div class="growth">
                            <i class="fas fa-arrow-up"></i> +5 This Year
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="glass-card stat-card floating" style="animation-delay: 0.4s;">
                        <div class="icon-box" style="background: linear-gradient(135deg, #8b5cf6, #7c3aed);">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="counter" data-target="15420">0</div>
                        <div class="label">Total Followers</div>
                        <div class="growth">
                            <i class="fas fa-arrow-up"></i> +3,240 This Month
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="glass-card stat-card floating" style="animation-delay: 0.6s;">
                        <div class="icon-box" style="background: linear-gradient(135deg, #f59e0b, #d97706);">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="counter" data-target="385">0</div>
                        <div class="label">Growth Rate %</div>
                        <div class="growth">
                            <i class="fas fa-arrow-up"></i> Exponential Growth
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="timeline-section">
            <h2 class="section-title"><i class="fas fa-road"></i>Our Journey Timeline</h2>
            <div class="glass-card">
                <div class="timeline">
                    
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <div class="milestone-card">
                                <div class="icon">🚀</div>
                                <h4>Launch & Foundation</h4>
                                <p>Started our journey with a vision to make a sustainable impact. Launched our first initiative with 50 volunteers and planted 1,000 trees in the first month.</p>
                                <div class="badge-group">
                                    <span class="milestone-badge">1,000 Trees</span>
                                    <span class="milestone-badge">50 Volunteers</span>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-date">Jan 2023</div>
                        <div class="timeline-marker"></div>
                    </div>

                    
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <div class="milestone-card">
                                <div class="icon">🌊</div>
                                <h4>First Major Cleanup</h4>
                                <p>Organized our largest beach cleanup campaign, removing 2.5 tons of waste and gaining recognition from local authorities. Community support grew by 200%.</p>
                                <div class="badge-group">
                                    <span class="milestone-badge">2.5 Tons Waste</span>
                                    <span class="milestone-badge">300 Participants</span>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-date">Apr 2023</div>
                        <div class="timeline-marker"></div>
                    </div>

                    
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <div class="milestone-card">
                                <div class="icon">🏆</div>
                                <h4>National Recognition</h4>
                                <p>Awarded "Best Environmental Initiative" by the National Green Council. Featured in major news outlets and reached 5,000 followers across platforms.</p>
                                <div class="badge-group">
                                    <span class="milestone-badge">Award Winner</span>
                                    <span class="milestone-badge">5K Followers</span>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-date">Aug 2023</div>
                        <div class="timeline-marker"></div>
                    </div>

                    
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <div class="milestone-card">
                                <div class="icon">🤝</div>
                                <h4>Partnership Expansion</h4>
                                <p>Partnered with 15 organizations including international NGOs. Launched collaborative projects across 5 cities, impacting over 10,000 lives directly.</p>
                                <div class="badge-group">
                                    <span class="milestone-badge">15 Partners</span>
                                    <span class="milestone-badge">5 Cities</span>
                                    <span class="milestone-badge">10K+ Impact</span>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-date">Dec 2023</div>
                        <div class="timeline-marker"></div>
                    </div>

                    
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <div class="milestone-card">
                                <div class="icon">⚡</div>
                                <h4>Solar Energy Campaign</h4>
                                <p>Successfully installed solar panels in 50 schools, reducing carbon footprint by 30 tons annually. Educated 5,000 students on renewable energy.</p>
                                <div class="badge-group">
                                    <span class="milestone-badge">50 Schools</span>
                                    <span class="milestone-badge">30 Tons CO2 Saved</span>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-date">Mar 2024</div>
                        <div class="timeline-marker"></div>
                    </div>

                    
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <div class="milestone-card">
                                <div class="icon">🌍</div>
                                <h4>Global Impact</h4>
                                <p>Reached 15,000+ followers worldwide. Completed 47 projects across environmental conservation, education, and community development. Recognized as a leading SDG contributor.</p>
                                <div class="badge-group">
                                    <span class="milestone-badge">47 Projects</span>
                                    <span class="milestone-badge">15K+ Community</span>
                                    <span class="milestone-badge">SDG Leader</span>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-date">Dec 2024</div>
                        <div class="timeline-marker"></div>
                    </div>
                </div>
            </div>
        </div>

       
        <div class="project-gallery">
            <h2 class="section-title"><i class="fas fa-images"></i>Featured Completed Projects</h2>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="glass-card project-card">
                        <div class="image-wrapper">
                            <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=600" alt="Tree Plantation">
                            <div class="overlay">
                                <div class="overlay-text">View Project Details</div>
                            </div>
                        </div>
                        <div class="project-info">
                            <h5>Urban Forest Initiative</h5>
                            <p>Planted 10,000 trees across 5 urban areas, creating green lungs for the community.</p>
                            <div class="project-stats">
                                <div class="project-stat-item">
                                    <div class="value">10K</div>
                                    <div class="label">Trees</div>
                                </div>
                                <div class="project-stat-item">
                                    <div class="value">500</div>
                                    <div class="label">Volunteers</div>
                                </div>
                                <div class="project-stat-item">
                                    <div class="value">5</div>
                                    <div class="label">Locations</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="glass-card project-card">
                        <div class="image-wrapper">
                            <img src="https://images.unsplash.com/photo-1618477461853-cf6ed80faba5?w=600" alt="Beach Cleanup">
                            <div class="overlay">
                                <div class="overlay-text">View Project Details</div>
                            </div>
                        </div>
                        <div class="project-info">
                            <h5>Coastal Conservation Drive</h5>
                            <p>Massive beach cleanup removing 5 tons of plastic waste and marine debris.</p>
                            <div class="project-stats">
                                <div class="project-stat-item">
                                    <div class="value">5T</div>
                                    <div class="label">Waste</div>
                                </div>
                                <div class="project-stat-item">
                                    <div class="value">800</div>
                                    <div class="label">Volunteers</div>
                                </div>
                                <div class="project-stat-item">
                                    <div class="value">12</div>
                                    <div class="label">Beaches</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="glass-card project-card">
                        <div class="image-wrapper">
                            <img src="https://images.unsplash.com/photo-1509391366360-2e959784a276?w=600" alt="Solar Energy">
                            <div class="overlay">
                                <div class="overlay-text">View Project Details</div>
                            </div>
                        </div>
                        <div class="project-info">
                            <h5>Solar Schools Program</h5>
                            <p>Installed solar panels in 50 schools, powering education sustainably.</p>
                            <div class="project-stats">
                                <div class="project-stat-item">
                                    <div class="value">50</div>
                                    <div class="label">Schools</div>
                                </div>
                                <div class="project-stat-item">
                                    <div class="value">5K</div>
                                    <div class="label">Students</div>
                                </div>
                                <div class="project-stat-item">
                                    <div class="value">30T</div>
                                    <div class="label">CO2 Saved</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="glass-card project-card">
                        <div class="image-wrapper">
                            <img src="https://images.unsplash.com/photo-1532629345422-7515f3d16bb6?w=600" alt="Water Conservation">
                            <div class="overlay">
                                <div class="overlay-text">View Project Details</div>
                            </div>
                        </div>
                        <div class="project-info">
                            <h5>Clean Water Initiative</h5>
                            <p>Provided clean water access to 20 villages through sustainable filtration systems.</p>
                            <div class="project-stats">
                                <div class="project-stat-item">
                                    <div class="value">20</div>
                                    <div class="label">Villages</div>
                                </div>
                                <div class="project-stat-item">
                                    <div class="value">8K</div>
                                    <div class="label">People</div>
                                </div>
                                <div class="project-stat-item">
                                    <div class="value">15</div>
                                    <div class="label">Systems</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="glass-card project-card">
                        <div class="image-wrapper">
                            <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=600" alt="Education">
                            <div class="overlay">
                                <div class="overlay-text">View Project Details</div>
                            </div>
                        </div>
                        <div class="project-info">
                            <h5>Eco-Education Program</h5>
                            <p>Trained 2,000 students and teachers in environmental science and sustainability.</p>
                            <div class="project-stats">
                                <div class="project-stat-item">
                                    <div class="value">2K</div>
                                    <div class="label">Trained</div>
                                </div>
                                <div class="project-stat-item">
                                    <div class="value">35</div>
                                    <div class="label">Schools</div>
                                </div>
                                <div class="project-stat-item">
                                    <div class="value">100</div>
                                    <div class="label">Workshops</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="glass-card project-card">
                        <div class="image-wrapper">
                            <img src="https://images.unsplash.com/photo-1593113598332-cd288d649433?w=600" alt="Recycling">
                            <div class="overlay">
                                <div class="overlay-text">View Project Details</div>
                            </div>
                        </div>
                        <div class="project-info">
                            <h5>Zero Waste Communities</h5>
                            <p>Implemented comprehensive recycling programs in 10 communities.</p>
                            <div class="project-stats">
                                <div class="project-stat-item">
                                    <div class="value">10</div>
                                    <div class="label">Communities</div>
                                </div>
                                <div class="project-stat-item">
                                    <div class="value">15T</div>
                                    <div class="label">Recycled</div>
                                </div>
                                <div class="project-stat-item">
                                    <div class="value">85%</div>
                                    <div class="label">Reduction</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="achievements-section">
            <h2 class="section-title"><i class="fas fa-medal"></i>Achievements & Recognition</h2>
            <div class="glass-card">
                <div class="achievement-grid">
                    <div class="achievement-badge glass-card">
                        <div class="badge-icon" style="background: linear-gradient(135deg, #fbbf24, #f59e0b);">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <h5>Best Initiative 2024</h5>
                        <p>National Green Council Award</p>
                    </div>

                    <div class="achievement-badge glass-card">
                        <div class="badge-icon" style="background: linear-gradient(135deg, #10b981, #059669);">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h5>Eco Warrior</h5>
                        <p>10,000+ Trees Planted</p>
                    </div>

                    <div class="achievement-badge glass-card">
                        <div class="badge-icon" style="background: linear-gradient(135deg, #3b82f6, #2563eb);">
                            <i class="fas fa-water"></i>
                        </div>
                        <h5>Ocean Guardian</h5>
                        <p>5 Tons Waste Removed</p>
                    </div>

                    <div class="achievement-badge glass-card">
                        <div class="badge-icon" style="background: linear-gradient(135deg, #8b5cf6, #7c3aed);">
                            <i class="fas fa-users"></i>
                        </div>
                        <h5>Community Builder</h5>
                        <p>15,000+ Followers</p>
                    </div>

                    <div class="achievement-badge glass-card">
                        <div class="badge-icon" style="background: linear-gradient(135deg, #ef4444, #dc2626);">
                            <i class="fas fa-fire"></i>
                        </div>
                        <h5>Impact Leader</h5>
                        <p>47 Projects Completed</p>
                    </div>

                    <div class="achievement-badge glass-card">
                        <div class="badge-icon" style="background: linear-gradient(135deg, #06b6d4, #0891b2);">
                            <i class="fas fa-globe-asia"></i>
                        </div>
                        <h5>Global Reach</h5>
                        <p>International Recognition</p>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="growth-section">
            <h2 class="section-title"><i class="fas fa-chart-area"></i>Community Growth Over Time</h2>
            <div class="glass-card">
                <div class="chart-container">
                    <canvas id="growthChart"></canvas>
                </div>
            </div>
        </div>

        
        <div class="glass-card">
            <h2 class="section-title"><i class="fas fa-heart"></i>Our Cumulative Impact</h2>
            <div class="row g-4 text-center">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-card">
                        <div class="counter" data-target="50000" style="color: #10b981;">0</div>
                        <div class="label">People Impacted</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-card">
                        <div class="counter" data-target="10000" style="color: #3b82f6;">0</div>
                        <div class="label">Trees Planted</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-card">
                        <div class="counter" data-target="7500" style="color: #8b5cf6;">0</div>
                        <div class="label">Volunteers Engaged</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-card">
                        <div class="counter" data-target="100" style="color: #f59e0b;">0</div>
                        <div class="label">Tons Waste Recycled</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <script>
        
        function animateCounter() {
            const counters = document.querySelectorAll('.counter');
            
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                const duration = 2000;
                const increment = target / (duration / 16);
                let current = 0;

                const updateCounter = () => {
                    current += increment;
                    if (current < target) {
                        counter.textContent = Math.floor(current).toLocaleString();
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target.toLocaleString();
                    }
                };

                updateCounter();
            });
        }

        
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 50;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 15 + 's';
                particle.style.animationDuration = (Math.random() * 10 + 10) + 's';
                particlesContainer.appendChild(particle);
            }
        }

        
        function initGrowthChart() {
            const ctx = document.getElementById('growthChart').getContext('2d');
            
            const gradient1 = ctx.createLinearGradient(0, 0, 0, 400);
            gradient1.addColorStop(0, 'rgba(16, 185, 129, 0.4)');
            gradient1.addColorStop(1, 'rgba(16, 185, 129, 0)');

            const gradient2 = ctx.createLinearGradient(0, 0, 0, 400);
            gradient2.addColorStop(0, 'rgba(59, 130, 246, 0.4)');
            gradient2.addColorStop(1, 'rgba(59, 130, 246, 0)');

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan 23', 'Apr 23', 'Jul 23', 'Oct 23', 'Jan 24', 'Apr 24', 'Jul 24', 'Oct 24', 'Dec 24'],
                    datasets: [{
                        label: 'Followers',
                        data: [50, 320, 890, 1500, 3200, 5800, 9500, 12400, 15420],
                        borderColor: '#10b981',
                        backgroundColor: gradient1,
                        tension: 0.4,
                        fill: true,
                        pointRadius: 6,
                        pointHoverRadius: 8,
                        pointBackgroundColor: '#10b981',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2
                    }, {
                        label: 'Projects',
                        data: [1, 5, 12, 18, 25, 32, 38, 43, 47],
                        borderColor: '#3b82f6',
                        backgroundColor: gradient2,
                        tension: 0.4,
                        fill: true,
                        pointRadius: 6,
                        pointHoverRadius: 8,
                        pointBackgroundColor: '#3b82f6',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    interaction: {
                        mode: 'index',
                        intersect: false,
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(255, 255, 255, 0.1)',
                                drawBorder: false
                            },
                            ticks: {
                                color: '#fff',
                                font: {
                                    size: 12
                                },
                                callback: function(value) {
                                    return value.toLocaleString();
                                }
                            }
                        },
                        x: {
                            grid: {
                                color: 'rgba(255, 255, 255, 0.1)',
                                drawBorder: false
                            },
                            ticks: {
                                color: '#fff',
                                font: {
                                    size: 12
                                }
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: true,
                            position: 'top',
                            labels: {
                                color: '#fff',
                                padding: 20,
                                font: {
                                    size: 14,
                                    weight: 'bold'
                                },
                                usePointStyle: true,
                                pointStyle: 'circle'
                            }
                        },
                        tooltip: {
                            backgroundColor: 'rgba(0, 0, 0, 0.8)',
                            titleColor: '#fff',
                            bodyColor: '#fff',
                            borderColor: 'rgba(255, 255, 255, 0.2)',
                            borderWidth: 1,
                            padding: 12,
                            displayColors: true,
                            callbacks: {
                                label: function(context) {
                                    let label = context.dataset.label || '';
                                    if (label) {
                                        label += ': ';
                                    }
                                    label += context.parsed.y.toLocaleString();
                                    return label;
                                }
                            }
                        }
                    }
                }
            });
        }

        
        function observeElements() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            
            document.querySelectorAll('.timeline-item').forEach((item, index) => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(30px)';
                item.style.transition = `all 0.6s ease ${index * 0.1}s`;
                observer.observe(item);
            });

            
            document.querySelectorAll('.project-card').forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                card.style.transition = `all 0.6s ease ${index * 0.1}s`;
                observer.observe(card);
            });

           
            document.querySelectorAll('.achievement-badge').forEach((badge, index) => {
                badge.style.opacity = '0';
                badge.style.transform = 'scale(0.8)';
                badge.style.transition = `all 0.6s ease ${index * 0.1}s`;
                observer.observe(badge);
            });
        }

        
        document.addEventListener('DOMContentLoaded', function() {
            createParticles();
            
            
            setTimeout(() => {
                animateCounter();
            }, 500);

            initGrowthChart();
            observeElements();

           
            document.addEventListener('mousemove', function(e) {
                const floatingElements = document.querySelectorAll('.floating');
                const mouseX = e.clientX / window.innerWidth;
                const mouseY = e.clientY / window.innerHeight;

                floatingElements.forEach((element, index) => {
                    const speed = (index + 1) * 10;
                    const x = (mouseX - 0.5) * speed;
                    const y = (mouseY - 0.5) * speed;
                    element.style.transform = `translate(${x}px, ${y}px)`;
                });
            });

            
            document.querySelectorAll('.glass-card').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transition = 'all 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
                });
            });
        });

        
        window.addEventListener('scroll', () => {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            
           
            document.body.style.setProperty('--scroll-progress', scrolled + '%');
        });
    </script>
    <?php
include("../includes/footer.php"); ?>
</body>

</html>
