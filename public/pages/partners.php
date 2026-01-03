<?php
include("../includes/header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Partners</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            padding: 50px 0;
            background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1500&q=80') no-repeat center center fixed;
            background-size: cover;
        }
        .partners-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
            color: #fff;
            font-size: 3rem;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }

        .partners-section {
            margin-bottom: 80px;
        }

        .section-header {
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }
        .section-header h2 {
            color: #fff;
            font-size: 2.2rem;
            font-weight: 600;
            display: inline-block;
            padding: 15px 40px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 50px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            margin-top:70px;
        }
        .partner-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            border-radius: 25px;
            padding: 30px;
            text-align: center;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            height: 100%;
            position: relative;
            overflow: hidden;
        }

        .partner-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .partner-card:hover::before {
            left: 100%;
        }

        .partner-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 45px rgba(0, 0, 0, 0.2);
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .partner-image-wrapper {
            width: 180px;
            height: 180px;
            margin: 0 auto 25px;
            position: relative;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            padding: 5px;
            transition: all 0.3s ease;
        }

        .partner-card:hover .partner-image-wrapper {
            transform: scale(1.08) rotate(5deg);
        }

        .partner-image {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid rgba(255, 255, 255, 0.4);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .partner-name {
            color: #fff;
            font-size: 1.3rem;
            font-weight: 600;
            margin-top: 10px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
            letter-spacing: 0.5px;
        }
        .glass-divider {
            height: 2px;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.5), transparent);
            margin: 60px auto;
            max-width: 300px;
        }

        @media (max-width: 768px) {
            .section-title {
                font-size: 2rem;
            }

            .section-header h2 {
                font-size: 1.5rem;
                padding: 12px 30px;
            }

            .partner-image-wrapper {
                width: 150px;
                height: 150px;
            }

            .partner-name {
                font-size: 1.1rem;
            }
        }

        .floating-shapes {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
            overflow: hidden;
        }

        .shape {
            position: absolute;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
            animation: float 20s infinite ease-in-out;
        }

        .shape:nth-child(1) { width: 80px; height: 80px; top: 10%; left: 10%; animation-delay: 0s; }
        .shape:nth-child(2) { width: 60px; height: 60px; top: 70%; left: 80%; animation-delay: 2s; }
        .shape:nth-child(3) { width: 100px; height: 100px; top: 40%; left: 70%; animation-delay: 4s; }
        .shape:nth-child(4) { width: 50px; height: 50px; top: 80%; left: 20%; animation-delay: 6s; }

        @keyframes float {
            0%, 100% { transform: translateY(0) translateX(0); }
            25% { transform: translateY(-30px) translateX(20px); }
            50% { transform: translateY(-60px) translateX(-20px); }
            75% { transform: translateY(-30px) translateX(30px); }
        }
    </style>

</head>
<body>
<div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <div class="partners-container">
        

        
        <div class="partners-section">
            <div class="section-header">
                <h2> Local Partners</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="partner-card">
                        <div class="partner-image-wrapper">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Liam Smith" class="partner-image" width="64" height="64" />
                        </div>
                        <h3 class="partner-name">Liam Smith</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="partner-card">
                        <div class="partner-image-wrapper">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Emma Johnson" class="partner-image" width="64" height="64" />
                        </div>
                        <h3 class="partner-name">Emma Johnson</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="partner-card">
                        <div class="partner-image-wrapper">
                            <img src="https://randomuser.me/api/portraits/men/85.jpg" alt="Noah Williams" class="partner-image" width="64" height="64" />
                        </div>
                        <h3 class="partner-name">Noah Williams</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="partner-card">
                        <div class="partner-image-wrapper">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Olivia Brown" class="partner-image" width="64" height="64" />
                        </div>
                        <h3 class="partner-name">Olivia Brown</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="partner-card">
                        <div class="partner-image-wrapper">
                            <img src="https://randomuser.me/api/portraits/men/23.jpg" alt="William Jones" class="partner-image" width="64" height="64" />
                        </div>
                        <h3 class="partner-name">William Jones</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="partner-card">
                        <div class="partner-image-wrapper">
                            <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="Sophia Garcia" class="partner-image" width="64" height="64" />
                        </div>
                        <h3 class="partner-name">Sophia Garcia</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="partner-card">
                        <div class="partner-image-wrapper">
                            <img src="https://randomuser.me/api/portraits/men/42.jpg" alt="James Martinez" class="partner-image" width="64" height="64" />
                        </div>
                        <h3 class="partner-name">James Martinez</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="partner-card">
                        <div class="partner-image-wrapper">
                            <img src="https://randomuser.me/api/portraits/women/93.jpg" alt="Isabella Lee" class="partner-image" width="64" height="64" />
                        </div>
                        <h3 class="partner-name">Isabella Lee</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="glass-divider"></div>

        <div class="partners-section">
            <div class="section-header">
                <h2> International Partners</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="partner-card">
                        <div class="partner-image-wrapper">
                            <img src="https://randomuser.me/api/portraits/women/25.jpg" alt="Mia Chen" class="partner-image" width="64" height="64" />
                        </div>
                        <h3 class="partner-name">Mia Chen</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="partner-card">
                        <div class="partner-image-wrapper">
                            <img src="https://randomuser.me/api/portraits/men/56.jpg" alt="Benjamin Kim" class="partner-image" width="64" height="64" />
                        </div>
                        <h3 class="partner-name">Benjamin Kim</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="partner-card">
                        <div class="partner-image-wrapper">
                            <img src="https://randomuser.me/api/portraits/women/61.jpg" alt="Charlotte Patel" class="partner-image" width="64" height="64" />
                        </div>
                        <h3 class="partner-name">Charlotte Patel</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="partner-card">
                        <div class="partner-image-wrapper">
                            <img src="https://randomuser.me/api/portraits/men/35.jpg" alt="Henry Müller" class="partner-image" width="64" height="64" />
                        </div>
                        <h3 class="partner-name">Henry Müller</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="partner-card">
                        <div class="partner-image-wrapper">
                            <img src="https://randomuser.me/api/portraits/women/84.jpg" alt="Amelia Rossi" class="partner-image" width="64" height="64" />
                        </div>
                        <h3 class="partner-name">Amelia Rossi</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="partner-card">
                        <div class="partner-image-wrapper">
                            <img src="https://randomuser.me/api/portraits/men/17.jpg" alt="Lucas Dubois" class="partner-image" width="64" height="64" />
                        </div>
                        <h3 class="partner-name">Lucas Dubois</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="partner-card">
                        <div class="partner-image-wrapper">
                            <img src="https://randomuser.me/api/portraits/women/77.jpg" alt="Emily Smith" class="partner-image" width="64" height="64" />
                        </div>
                        <h3 class="partner-name">Emily Smith</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="partner-card">
                        <div class="partner-image-wrapper">
                            <img src="https://randomuser.me/api/portraits/men/28.jpg" alt="Alexander Ivanov" class="partner-image" width="64" height="64" />
                        </div>
                        <h3 class="partner-name">Alexander Ivanov</h3>
                    </div>
                </div>
            </div>
        </div>
                
            </div>
        </div>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        
        document.addEventListener('DOMContentLoaded', function() {
           
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
             
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '0';
                        entry.target.style.transform = 'translateY(30px)';
                        
                        setTimeout(() => {
                            entry.target.style.transition = 'all 0.6s ease-out';
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0)';
                        }, 100);
                        
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.partner-card').forEach(card => {
                observer.observe(card);
            });

             document.addEventListener('mousemove', function(e) {
                const shapes = document.querySelectorAll('.shape');
                const mouseX = e.clientX / window.innerWidth;
                const mouseY = e.clientY / window.innerHeight;

                shapes.forEach((shape, index) => {
                    const speed = (index + 1) * 20;
                    const x = (mouseX - 0.5) * speed;
                    const y = (mouseY - 0.5) * speed;
                    shape.style.transform = `translate(${x}px, ${y}px)`;
                });
            });
        });

</script>
</body>
</html>