<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=SF+Pro+Display:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Reducing Carbon Dioxide Emissions</title>

    <style>
        :root {
            --glass-bg: rgba(255, 255, 255, 0.15);
            --glass-border: rgba(255, 255, 255, 0.3);
            --glass-shadow: rgba(0, 0, 0, 0.1);
            --text-primary: rgba(255, 255, 255, 0.95);
            --text-secondary: rgba(255, 255, 255, 0.7);
            --accent-green: #34c759;
            --accent-blue: #007aff;
            --blur-amount: 20px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            min-height: 100vh;
            overflow-x: hidden;
            background: linear-gradient(135deg, #1a2a3a 0%, #0d1b2a 25%, #1b263b 50%, #0d1b2a 75%, #1a2a3a 100%);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
        }

        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            25% { background-position: 100% 50%; }
            50% { background-position: 100% 100%; }
            75% { background-position: 0% 100%; }
        }

        /* Animated Background Orbs */
        .background-layer {
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
            filter: blur(80px);
            opacity: 0.4;
            animation: floatOrb 20s ease-in-out infinite;
        }

        .orb-1 {
            width: 500px;
            height: 500px;
            background: linear-gradient(135deg, #34c759, #30d158);
            top: -10%;
            left: -10%;
            animation-delay: 0s;
        }

        .orb-2 {
            width: 400px;
            height: 400px;
            background: linear-gradient(135deg, #007aff, #5ac8fa);
            top: 50%;
            right: -10%;
            animation-delay: -5s;
        }

        .orb-3 {
            width: 350px;
            height: 350px;
            background: linear-gradient(135deg, #5856d6, #af52de);
            bottom: -10%;
            left: 30%;
            animation-delay: -10s;
        }

        .orb-4 {
            width: 300px;
            height: 300px;
            background: linear-gradient(135deg, #ff9500, #ff6b00);
            top: 30%;
            left: 50%;
            animation-delay: -15s;
        }

        @keyframes floatOrb {
            0%, 100% { transform: translate(0, 0) scale(1); }
            25% { transform: translate(50px, -50px) scale(1.1); }
            50% { transform: translate(-30px, 30px) scale(0.95); }
            75% { transform: translate(40px, 40px) scale(1.05); }
        }

        
        .main-container {
            position: relative;
            z-index: 1;
            max-width: 1300px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        
        .liquid-glass-header {
            background: var(--glass-bg);
            backdrop-filter: blur(var(--blur-amount)) saturate(180%);
            -webkit-backdrop-filter: blur(var(--blur-amount)) saturate(180%);
            border: 1px solid var(--glass-border);
            border-radius: 30px;
            padding: 50px 40px;
            margin-bottom: 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
            transform: translateY(50px);
            opacity: 0;
            animation: slideUp 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        .liquid-glass-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.5), transparent);
        }

        .liquid-glass-header::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.1) 0%, transparent 50%);
            pointer-events: none;
        }

        .header-icon {
            font-size: 60px;
            margin-bottom: 20px;
            display: inline-block;
            animation: pulse 3s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        h1 {
            font-size: clamp(28px, 5vw, 48px);
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 15px;
            letter-spacing: -0.5px;
            text-shadow: 0 2px 20px rgba(0,0,0,0.3);
        }

        .subtitle {
            font-size: 18px;
            color: var(--text-secondary);
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        
        .columns {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

       
        .liquid-glass-card {
            background: var(--glass-bg);
            backdrop-filter: blur(var(--blur-amount)) saturate(180%);
            -webkit-backdrop-filter: blur(var(--blur-amount)) saturate(180%);
            border: 1px solid var(--glass-border);
            border-radius: 24px;
            overflow: hidden;
            position: relative;
            transform: translateY(80px) scale(0.95);
            opacity: 0;
            transition: all 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .liquid-glass-card.active {
            transform: translateY(0) scale(1);
            opacity: 1;
        }

        .liquid-glass-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            z-index: 2;
        }

        
        .liquid-glass-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(ellipse at 20% 20%, rgba(255,255,255,0.15) 0%, transparent 50%);
            pointer-events: none;
            z-index: 1;
            transition: opacity 0.5s ease;
        }

        .liquid-glass-card:hover {
            transform: translateY(-10px) scale(1.02);
            border-color: rgba(255,255,255,0.5);
            box-shadow: 
                0 30px 60px rgba(0,0,0,0.3),
                0 0 40px rgba(52, 199, 89, 0.1),
                inset 0 1px 0 rgba(255,255,255,0.2);
        }

        .liquid-glass-card:hover::after {
            background: radial-gradient(ellipse at 50% 30%, rgba(255,255,255,0.2) 0%, transparent 60%);
        }

       
        .card-image-wrapper {
            position: relative;
            height: 280px;
            overflow: hidden;
        }

        .card-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1), filter 0.5s ease;
        }

        .liquid-glass-card:hover .card-image-wrapper img {
            transform: scale(1.1);
            filter: brightness(1.1);
        }

        
        .image-frost-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100px;
            background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);
            pointer-events: none;
        }

        
        .card-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.3);
            border-radius: 50px;
            padding: 8px 16px;
            font-size: 12px;
            font-weight: 600;
            color: white;
            display: flex;
            align-items: center;
            gap: 6px;
            transform: translateY(-20px);
            opacity: 0;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) 0.2s;
        }

        .liquid-glass-card:hover .card-badge {
            transform: translateY(0);
            opacity: 1;
        }

        
        .card-content {
            padding: 30px;
            position: relative;
            z-index: 2;
        }

        .card-content h2 {
            font-size: 22px;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .card-content h2 .icon {
            width: 32px;
            height: 32px;
            background: linear-gradient(135deg, var(--accent-green), #30d158);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }

        .card-content p {
            font-size: 15px;
            line-height: 1.8;
            color: var(--text-secondary);
            text-align: justify;
        }



        .card-content h2::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--accent-green), var(--accent-blue));
            border-radius: 1px;
            transition: width 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .liquid-glass-card:hover .card-content h2::after {
            width: 60px;
        }

        
        .liquid-glass-card:nth-child(1) { transition-delay: 0.1s; }
        .liquid-glass-card:nth-child(2) { transition-delay: 0.2s; }
        .liquid-glass-card:nth-child(3) { transition-delay: 0.3s; }
        .liquid-glass-card:nth-child(4) { transition-delay: 0.4s; }

        
        .stats-bar {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-top: 40px;
        }

        .stat-item {
            background: var(--glass-bg);
            backdrop-filter: blur(var(--blur-amount)) saturate(180%);
            -webkit-backdrop-filter: blur(var(--blur-amount)) saturate(180%);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 25px;
            text-align: center;
            position: relative;
            overflow: hidden;
            transform: translateY(50px);
            opacity: 0;
            transition: all 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .stat-item.active {
            transform: translateY(0);
            opacity: 1;
        }

        .stat-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        }

        .stat-item:hover {
            transform: translateY(-5px);
            border-color: rgba(255,255,255,0.4);
        }

        .stat-number {
            font-size: 36px;
            font-weight: 700;
            background: linear-gradient(135deg, var(--accent-green), var(--accent-blue));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .stat-label {
            font-size: 14px;
            color: var(--text-secondary);
            margin-top: 8px;
        }

        
        .cta-section {
            text-align: center;
            margin-top: 50px;
            transform: translateY(50px);
            opacity: 0;
            animation: slideUp 1s cubic-bezier(0.16, 1, 0.3, 1) 0.5s forwards;
        }

        .liquid-glass-button {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            padding: 18px 40px;
            background: rgba(52, 199, 89, 0.3);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            border: 1px solid rgba(52, 199, 89, 0.5);
            border-radius: 50px;
            color: white;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .liquid-glass-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.6s ease;
        }

        .liquid-glass-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 40px rgba(52, 199, 89, 0.3);
            border-color: rgba(52, 199, 89, 0.8);
            background: rgba(52, 199, 89, 0.4);
        }

        .liquid-glass-button:hover::before {
            left: 100%;
        }

        
        @keyframes slideUp {
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        
        @media (max-width: 992px) {
            .columns {
                grid-template-columns: 1fr;
            }
            
            .stats-bar {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .main-container {
                padding: 20px 15px;
            }

            .liquid-glass-header {
                padding: 30px 20px;
                border-radius: 20px;
            }

            .stats-bar {
                grid-template-columns: 1fr;
            }

            .card-image-wrapper {
                height: 220px;
            }
        }

        
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(255,255,255,0.05);
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(255,255,255,0.2);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: rgba(255,255,255,0.3);
        }

        
        .mouse-glow {
            position: fixed;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(52, 199, 89, 0.15) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
            z-index: 0;
            transform: translate(-50%, -50%);
            transition: opacity 0.3s ease;
        }
    </style>
</head>



<body>
   
    <div class="background-layer">
        <div class="orb orb-1"></div>
        <div class="orb orb-2"></div>
        <div class="orb orb-3"></div>
        <div class="orb orb-4"></div>
    </div>

    
    <div class="mouse-glow" id="mouseGlow"></div>

    
    <div class="main-container">
        
        
        <header class="liquid-glass-header">
            <div class="header-icon">🌍</div>
            <h1>Reducing Carbon Dioxide Emissions</h1>
            <p class="subtitle">Together we can create a sustainable future. Every action counts in protecting our planet for generations to come.</p>
        </header>

        
        <div class="columns">
            
            
            <section class="liquid-glass-card">
                <div class="card-image-wrapper">
                    <img src="https://i.pinimg.com/736x/56/6b/8e/566b8ebdf708a2be29b46e76b5548434.jpg" alt="Climate Crisis">
                    <div class="image-frost-overlay"></div>
                    <div class="card-badge">
                        <span>🔥</span> Climate Action
                    </div>
                </div>
                <div class="card-content">
                    <h2>
                        <span class="icon">🌡️</span>
                        The Climate Crisis
                    </h2>
                    <p>
                        Climate change is no longer a distant problem — it's something we experience every day. Rising temperatures, unpredictable weather, and increasing pollution are all connected to one major factor: carbon dioxide (CO₂) emissions. Reducing these emissions is one of the most important steps we can take toward protecting our planet and our future.
                    </p>
                </div>
            </section>

            
            <section class="liquid-glass-card">
                <div class="card-image-wrapper">
                    <img src="https://i.pinimg.com/736x/c0/31/cc/c031cc783295417d2ee348958987918a.jpg" alt="Why It Matters">
                    <div class="image-frost-overlay"></div>
                    <div class="card-badge">
                        <span>💡</span> Awareness
                    </div>
                </div>
                <div class="card-content">
                    <h2>
                        <span class="icon">🎯</span>
                        Why Reducing CO₂ Matters
                    </h2>
                    <p>
                        High levels of carbon dioxide trap heat in the atmosphere, leading to global warming and climate change. This affects ecosystems, food security, water availability, and human health. Communities with fewer resources often suffer the most, making this not just an environmental issue, but a social one as well.
                    </p>
                </div>
            </section>

            <!-- Card 3 -->
            <section class="liquid-glass-card">
                <div class="card-image-wrapper">
                    <img src="https://i.pinimg.com/736x/24/4a/16/244a16bd09aa37b3715723955f29804d.jpg" alt="Make a Difference">
                    <div class="image-frost-overlay"></div>
                    <div class="card-badge">
                        <span>✨</span> Solutions
                    </div>
                </div>
                <div class="card-content">
                    <h2>
                        <span class="icon">🌱</span>
                        How We Can Make a Difference
                    </h2>
                    <p>
                        Reducing carbon emissions does not require drastic lifestyle changes. It begins with awareness, responsibility, and smarter choices. By reducing CO₂ emissions, we can slow down climate change, improve air quality, protect natural ecosystems, and create healthier and more sustainable communities.
                    </p>
                </div>
            </section>

           
            <section class="liquid-glass-card">
                <div class="card-image-wrapper">
                    <img src="https://i.pinimg.com/1200x/4f/2c/ee/4f2cee3de5b873546d1224a0a617066c.jpg" alt="Measurable Impact">
                    <div class="image-frost-overlay"></div>
                    <div class="card-badge">
                        <span>📊</span> Impact
                    </div>
                </div>
                <div class="card-content">
                    <h2>
                        <span class="icon">📈</span>
                        Turning Goals into Impact
                    </h2>
                    <p>
                        Through our platform, organizations and communities can plan sustainability initiatives focused on lowering carbon emissions, track resource usage, and measure real impact over time. By visualizing progress and encouraging collaboration, we help turn environmental goals into practical actions.
                    </p>
                </div>
            </section>
        </div>

          
        <div class="stats-bar">
            <div class="stat-item">
                <div class="stat-number" data-target="36">0</div>
                <div class="stat-label">Billion Tons CO₂/Year</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-target="421">0</div>
                <div class="stat-label">PPM Atmospheric CO₂</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-target="1.1">0</div>
                <div class="stat-label">°C Global Warming</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-target="50">0</div>
                <div class="stat-label">% Reduction Goal</div>
            </div>
        </div>


  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        
        function revealOnScroll() {
            const elements = document.querySelectorAll('.liquid-glass-card, .stat-item');
            
            elements.forEach(el => {
                const rect = el.getBoundingClientRect();
                const windowHeight = window.innerHeight;
                
                if (rect.top < windowHeight - 100) {
                    el.classList.add('active');
                }
            });
        }

        window.addEventListener('scroll', revealOnScroll);
        window.addEventListener('load', revealOnScroll);

        
        const mouseGlow = document.getElementById('mouseGlow');
        
        document.addEventListener('mousemove', (e) => {
            mouseGlow.style.left = e.clientX + 'px';
            mouseGlow.style.top = e.clientY + 'px';
        });

        
        function animateCounters() {
            const counters = document.querySelectorAll('.stat-number');
            
            counters.forEach(counter => {
                const target = parseFloat(counter.getAttribute('data-target'));
                const isDecimal = target % 1 !== 0;
                const duration = 2000;
                const increment = target / (duration / 16);
                let current = 0;
                
                const updateCounter = () => {
                    current += increment;
                    if (current < target) {
                        counter.textContent = isDecimal ? current.toFixed(1) : Math.floor(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = isDecimal ? target.toFixed(1) : target;
                    }
                };
                
                
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            updateCounter();
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.5 });
                
                observer.observe(counter.parentElement);
            });
        }

        animateCounters();

        
        const cards = document.querySelectorAll('.liquid-glass-card');
        
        cards.forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                const rotateX = (y - centerY) / 20;
                const rotateY = (centerX - x) / 20;
                
                card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-10px) scale(1.02)`;
            });
            
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateY(0) scale(1)';
            });
        });

        
        document.addEventListener('mousemove', (e) => {
            const orbs = document.querySelectorAll('.orb');
            const mouseX = e.clientX / window.innerWidth;
            const mouseY = e.clientY / window.innerHeight;
            
            orbs.forEach((orb, index) => {
                const speed = (index + 1) * 20;
                const x = (mouseX - 0.5) * speed;
                const y = (mouseY - 0.5) * speed;
                orb.style.transform = `translate(${x}px, ${y}px)`;
            });
        });
    </script>
</body>
</html>

