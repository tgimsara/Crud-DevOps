<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>

.primary-title {
            display: inline-block;
            font-size: calc(1.2rem + 1.5vw);
            font-weight: 900;
            color: #fff;
            text-decoration: none;
            letter-spacing: 10px;
            user-select: none;
            cursor: pointer;
            text-transform: uppercase;
            position: relative;
            padding: 20px 40px;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            text-shadow: 
                0 1px 0 hsl(180, 15%, 80%),
                0 2px 0 hsl(180, 15%, 75%),
                1px 3px 0 hsl(180, 15%, 70%),
                1px 4px 0 hsl(180, 15%, 65%),
                2px 5px 0 hsl(180, 15%, 60%),
                0 10px 20px rgba(0,0,0,0.5);
            animation: letterSpaceSize 2s ease 1, glowPulse 3s ease-in-out infinite;
            transition: all 0.4s ease;
        }

        .primary-title:hover {
            letter-spacing: 15px;
            transform: scale(1.05);
            box-shadow: 0 15px 50px rgba(16, 185, 129, 0.4);
        }

        @keyframes letterSpaceSize {
            0% {
                letter-spacing: 100px;
                font-size: calc(5rem + 3vw);
                opacity: 0;
            }
            100% {
                letter-spacing: 10px;
                font-size: calc(1.2rem + 1.5vw);
                opacity: 1;
            }
        }

        @keyframes glowPulse {
            0%, 100% {
                text-shadow: 
                    0 1px 0 hsl(180, 15%, 80%),
                    0 2px 0 hsl(180, 15%, 75%),
                    1px 3px 0 hsl(180, 15%, 70%),
                    0 10px 20px rgba(16, 185, 129, 0.3);
            }
            50% {
                text-shadow: 
                    0 1px 0 hsl(180, 15%, 80%),
                    0 2px 0 hsl(180, 15%, 75%),
                    1px 3px 0 hsl(180, 15%, 70%),
                    0 10px 40px rgba(16, 185, 129, 0.6),
                    0 0 60px rgba(16, 185, 129, 0.4);
            }
        }

        .sdg-carousel-section {
            position: relative;
            padding: 40px 0;
            overflow: hidden;
        }

        .carousel-title {
            text-align: center;
            font-size: 2rem;
            color: #fff;
            margin-bottom: 40px;
            font-weight: 700;
            text-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
            animation: fadeIn 3s ease 1;
        }

        .carousel-wrapper {
            position: relative;
            overflow: hidden;
            padding: 20px 0;
        }

        .carousel-track {
            display: flex;
            gap: 30px;
            animation: scroll-infinite 40s linear infinite;
            width: max-content;
        }

        .carousel-track:hover {
            animation-play-state: paused;
        }

        @keyframes scroll-infinite {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }

        /* SDG Cards with Advanced Glass Effect */
        .sdg-card {
            min-width: 350px;
            height: 280px;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(25px);
            border-radius: 30px;
            border: 1px solid rgba(255, 255, 255, 0.15);
            padding: 35px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 
                0 10px 40px rgba(0, 0, 0, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
        }

        .sdg-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(16, 185, 129, 0.1) 0%, transparent 70%);
            transition: all 0.6s ease;
            opacity: 0;
        }

        .sdg-card:hover::before {
            opacity: 1;
            transform: scale(1.2);
        }

        .sdg-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.15), transparent);
            transition: left 0.6s;
        }

        .sdg-card:hover::after {
            left: 100%;
        }

        .sdg-card:hover {
            transform: translateY(-20px) scale(1.08);
            box-shadow: 
                0 25px 60px rgba(16, 185, 129, 0.4),
                0 0 50px rgba(16, 185, 129, 0.2),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(16, 185, 129, 0.5);
        }
        .sdg-icon {
            width: 90px;
            height: 90px;
            margin-bottom: 20px;
            font-size: 3rem;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(16, 185, 129, 0.15);
            border: 2px solid rgba(16, 185, 129, 0.3);
            transition: all 0.5s ease;
            position: relative;
            z-index: 1;
        }

        .sdg-card:hover .sdg-icon {
            transform: scale(1.15) rotate(360deg);
            background: rgba(16, 185, 129, 0.25);
            border-color: rgba(16, 185, 129, 0.6);
            box-shadow: 0 10px 30px rgba(16, 185, 129, 0.4);
        }

        .sdg-number {
            font-size: 1rem;
            color: #10b981;
            font-weight: 700;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 2px;
            position: relative;
            z-index: 1;
        }

        .sdg-title {
            font-size: 1.3rem;
            color: #fff;
            font-weight: 700;
            margin-bottom: 12px;
            position: relative;
            z-index: 1;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .sdg-description {
            font-size: 0.95rem;
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.6;
            position: relative;
            z-index: 1;
        }

        /* Waves Animation at Bottom */
        .waves-container {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 150px;
            overflow: hidden;
            z-index: 5;
        }

        .wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 200%;
            height: 100%;
            background-repeat: repeat-x;
            animation: wave-move 25s linear infinite;
        }

        .wave-1 {
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1200 120'%3E%3Cpath d='M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z' fill='rgba(16, 185, 129, 0.15)'/%3E%3C/svg%3E") repeat-x;
            opacity: 0.4;
            animation-duration: 30s;
        }

        .wave-2 {
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1200 120'%3E%3Cpath d='M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z' fill='rgba(59, 130, 246, 0.15)'/%3E%3C/svg%3E") repeat-x;
            opacity: 0.5;
            animation-duration: 20s;
            animation-delay: -5s;
        }

        .wave-3 {
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1200 120'%3E%3Cpath d='M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z' fill='rgba(139, 92, 246, 0.2)'/%3E%3C/svg%3E") repeat-x;
            opacity: 0.6;
            animation-duration: 15s;
            animation-delay: -2s;
        }

        @keyframes wave-move {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .primary-title {
                font-size: 1.5rem;
                letter-spacing: 5px;
                padding: 15px 25px;
            }

            .title-quote {
                font-size: 1rem;
            }

            .sdg-card {
                min-width: 280px;
                height: 250px;
                padding: 25px;
            }

            .carousel-title {
                font-size: 1.5rem;
            }
        }

</style>

</head>
<body>
<div class="sdg-carousel-section">
                <h2 class="carousel-title">Our SDG Impact Areas</h2>
                
                <div class="carousel-wrapper">
                    <div class="carousel-track" id="carouselTrack">
                        <!-- SDG Card 1 -->
                        <div class="sdg-card">
                            <div class="sdg-icon">
                                <i class="fas fa-recycle" style="color: #10b981;"></i>
                            </div>
                            <div class="sdg-number">SDG 12</div>
                            <h3 class="sdg-title">Responsible Consumption</h3>
                            <p class="sdg-description">
                                Promoting sustainable production and consumption patterns to reduce waste and environmental impact.
                            </p>
                        </div>

                        <!-- SDG Card 2 -->
                        <div class="sdg-card">
                            <div class="sdg-icon">
                                <i class="fas fa-leaf" style="color: #10b981;"></i>
                            </div>
                            <div class="sdg-number">SDG 13</div>
                            <h3 class="sdg-title">Climate Action</h3>
                            <p class="sdg-description">
                                Taking urgent action to combat climate change and its impacts through innovation and education.
                            </p>
                        </div>

                        <!-- SDG Card 3 -->
                        <div class="sdg-card">
                            <div class="sdg-icon">
                                <i class="fas fa-water" style="color: #3b82f6;"></i>
                            </div>
                            <div class="sdg-number">SDG 6</div>
                            <h3 class="sdg-title">Clean Water</h3>
                            <p class="sdg-description">
                                Ensuring availability and sustainable management of water and sanitation for all communities.
                            </p>
                        </div>

                        <!-- SDG Card 4 -->
                        <div class="sdg-card">
                            <div class="sdg-icon">
                                <i class="fas fa-solar-panel" style="color: #fbbf24;"></i>
                            </div>
                            <div class="sdg-number">SDG 7</div>
                            <h3 class="sdg-title">Clean Energy</h3>
                            <p class="sdg-description">
                                Ensuring access to affordable, reliable, sustainable and modern energy for all people.
                            </p>
                        </div>

                        <!-- SDG Card 5 -->
                        <div class="sdg-card">
                            <div class="sdg-icon">
                                <i class="fas fa-graduation-cap" style="color: #8b5cf6;"></i>
                            </div>
                            <div class="sdg-number">SDG 4</div>
                            <h3 class="sdg-title">Quality Education</h3>
                            <p class="sdg-description">
                                Ensuring inclusive and equitable quality education and promoting lifelong learning opportunities.
                            </p>
                        </div>

                        <!-- SDG Card 6 -->
                        <div class="sdg-card">
                            <div class="sdg-icon">
                                <i class="fas fa-handshake" style="color: #10b981;"></i>
                            </div>
                            <div class="sdg-number">SDG 17</div>
                            <h3 class="sdg-title">Partnerships</h3>
                            <p class="sdg-description">
                                Strengthening global partnerships for sustainable development and collective action.
                            </p>
                        </div>

                        <!-- Duplicate cards for infinite scroll effect -->
                        <div class="sdg-card">
                            <div class="sdg-icon">
                                <i class="fas fa-recycle" style="color: #10b981;"></i>
                            </div>
                            <div class="sdg-number">SDG 12</div>
                            <h3 class="sdg-title">Responsible Consumption</h3>
                            <p class="sdg-description">
                                Promoting sustainable production and consumption patterns to reduce waste and environmental impact.
                            </p>
                        </div>

                        <div class="sdg-card">
                            <div class="sdg-icon">
                                <i class="fas fa-leaf" style="color: #10b981;"></i>
                            </div>
                            <div class="sdg-number">SDG 13</div>
                            <h3 class="sdg-title">Climate Action</h3>
                            <p class="sdg-description">
                                Taking urgent action to combat climate change and its impacts through innovation and education.
                            </p>
                        </div>

                        <div class="sdg-card">
                            <div class="sdg-icon">
                                <i class="fas fa-water" style="color: #3b82f6;"></i>
                            </div>
                            <div class="sdg-number">SDG 6</div>
                            <h3 class="sdg-title">Clean Water</h3>
                            <p class="sdg-description">
                                Ensuring availability and sustainable management of water and sanitation for all communities.
                            </p>
                        </div>

                        <div class="sdg-card">
                            <div class="sdg-icon">
                                <i class="fas fa-solar-panel" style="color: #fbbf24;"></i>
                            </div>
                            <div class="sdg-number">SDG 7</div>
                            <h3 class="sdg-title">Clean Energy</h3>
                            <p class="sdg-description">
                                Ensuring access to affordable, reliable, sustainable and modern energy for all people.
                            </p>
                        </div>

                        <div class="sdg-card">
                            <div class="sdg-icon">
                                <i class="fas fa-graduation-cap" style="color: #8b5cf6;"></i>
                            </div>
                            <div class="sdg-number">SDG 4</div>
                            <h3 class="sdg-title">Quality Education</h3>
                            <p class="sdg-description">
                                Ensuring inclusive and equitable quality education and promoting lifelong learning opportunities.
                            </p>
                        </div>

                        <div class="sdg-card">
                            <div class="sdg-icon">
                                <i class="fas fa-handshake" style="color: #10b981;"></i>
                            </div>
                            <div class="sdg-number">SDG 17</div>
                            <h3 class="sdg-title">Partnerships</h3>
                            <p class="sdg-description">
                                Strengthening global partnerships for sustainable development and collective action.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Waves at Bottom -->
        <div class="waves-container">
            <div class="wave wave-1"></div>
            <div class="wave wave-2"></div>
            <div class="wave wave-3"></div>
        </div>
    </div>
</body>
</html>