<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Reducing Carbon Dioxide Emissions</title>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f4f4f4;
            color: #111;
            background-image: url('https://i.pinimg.com/736x/70/42/e9/7042e99da611c8dab433bc41eef14df6.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;   
        }

        .newspaper {
            background: #fff;
            max-width: 1200px;
            margin: 40px auto;
            padding: 30px;

        }

        h1 {
            text-align: center;
            font-size: 38px;
            margin-bottom: 50px;
            font-weight: 600;

        }

        .columns {
    display: grid;
    grid-template-columns: 1fr 1fr;
    column-gap: 40px;
    row-gap: 20px;
}



        section {
            break-inside: avoid;
            margin-bottom: 10px;
            opacity: 100%;
            transform: translateY(60px);
            transition: all 0.8s ease;
        }

        section.active {
            opacity: 1;
            transform: translateY(0);
        }

        section img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 12px;
            height: 300px;
        }

        h2 {
            font-size: 22px;
            margin-bottom: 8px;
        }

        p {
            font-size: 16px;
            line-height: 1.8;
            text-align: justify;
        }

        @media (max-width: 768px) {
    .columns {
        grid-template-columns: 1fr;
    }

    h1 {
        font-size: 28px;
    }
}

    </style>


</head>




<body>
 <div class="container" style="max-width: 90%; margin: 0 auto;">
    <div class="newspaper" style="background-color: #f8f9fa; padding: 20px; border-radius: 10px;">

        <h1 style="text-align: center; color: #333;">Reducing Carbon Dioxide Emissions</h1>

        <div class="columns"  justify-content: space-between;">



            <section>
                <img src="https://i.pinimg.com/736x/56/6b/8e/566b8ebdf708a2be29b46e76b5548434.jpg" alt="Reducing Carbon Dioxide Emissions">

                <p>
                    Climate change is no longer a distant problem — it’s something we experience every day. Rising temperatures,
                     unpredictable weather, and increasing pollution are all connected to one major factor: carbon dioxide (CO₂)
                      emissions. Reducing these emissions is one of the most important steps we can take toward protecting our 
                      planet and our future.
                      CO₂ is released into the atmosphere through everyday activities such as burning fossil fuels, excessive
                       energy consumption, transportation, and industrial processes. While these activities support modern life, 
                       their environmental impact is significant. The good news is that small, collective actions can create powerful change. 
                </p>
            </section>

            <section>
                <img src="https://i.pinimg.com/736x/c0/31/cc/c031cc783295417d2ee348958987918a.jpg" alt="Why Reducing CO₂ Emissions Matters">
                <h2>Why Reducing CO₂ Emissions Matters</h2>
                <p>
                High levels of carbon dioxide trap heat in the atmosphere, leading to global warming and climate change.
                 This affects ecosystems, food security, water availability, and human health. Communities with fewer resources 
                 often suffer the most, making this not just an environmental issue, but a social one as well.
                </p>
            </section>       




            <section>
                <img src="https://i.pinimg.com/736x/24/4a/16/244a16bd09aa37b3715723955f29804d.jpg" alt="How We Can Make a Difference">
                <h2>How We Can Make a Difference</h2>
                <p>
                Reducing carbon emissions does not require drastic lifestyle changes. 
                It begins with awareness, responsibility, and smarter choices.
                By reducing CO₂ emissions, we can slow down climate change, improve air quality, protect natural 
                ecosystems, and create healthier and more sustainable communities.
                </p>
            </section>

            <section>
                <img src="https://i.pinimg.com/1200x/4f/2c/ee/4f2cee3de5b873546d1224a0a617066c.jpg" alt="Turning Goals into Measurable Impact">
                <h2>Turning Goals into Measurable Impact</h2>
                <p>
                Through our platform, organizations and communities can plan sustainability initiatives focused on lowering carbon emissions,
                 track resource usage, and measure real impact over time. 
                By visualizing progress and encouraging collaboration, we help turn environmental goals into practical actions.<br>

                Reducing CO₂ emissions is not just about numbers and charts — it’s about protecting the environment we depend on and 
                creating a better future for the next generation.
                </p>
            </section>




        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


<script>
    function revealOnScroll() {
        document.querySelectorAll('section').forEach(sec => {
            const top = sec.getBoundingClientRect().top;
            const height = window.innerHeight;
            if (top < height - 100) {
                sec.classList.add('active');
            }
        });
    }

    window.addEventListener('scroll', revealOnScroll);


    window.addEventListener('load', revealOnScroll);
</script>








</body>

</html>.   Give a code for this page with modern animation
Anthropic Claude 4.5 Opus

Show Reasoning
Enhanced Page with Modern Animations
Here's your page redesigned with modern, eye-catching animations:

html


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Reducing Carbon Dioxide Emissions</title>
    <style>
        :root {
            --primary-green: #2ecc71;
            --dark-green: #27ae60;
            --accent-blue: #3498db;
            --dark-bg: #1a1a2e;
            --glass-bg: rgba(255, 255, 255, 0.1);
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
            color: #fff;
            min-height: 100vh;
            overflow-x: hidden;
        }
        /* Animated Background Particles */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
            z-index: 0;
        }
        .particle {
            position: absolute;
            width: 10px;
            height: 10px;
            background: rgba(46, 204, 113, 0.3);
            border-radius: 50%;
            animation: float 15s infinite;
        }
        @keyframes float {
            0%, 100% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100vh) rotate(720deg);
                opacity: 0;
            }
        }
        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            text-align: center;
            padding: 20px;
        }
        .hero-content {
            z-index: 1;
        }
        .hero h1 {
            font-size: clamp(2.5rem, 6vw, 4.5rem);
            font-weight: 700;
            margin-bottom: 20px;
            background: linear-gradient(90deg, #2ecc71, #3498db, #2ecc71);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradientText 3s ease infinite;
        }
        @keyframes gradientText {
            0%, 100% { background-position: 0% center; }
            50% { background-position: 200% center; }
        }
        .hero-subtitle {
            font-size: 1.3rem;
            color: rgba(255, 255, 255, 0.8);
            max-width: 600px;
            margin: 0 auto 40px;
            opacity: 0;
            animation: fadeInUp 1s ease 0.5s forwards;
        }
        .scroll-indicator {
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
            animation: bounce 2s infinite;
        }
        .scroll-indicator i {
            font-size: 2rem;
            color: var(--primary-green);
        }
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateX(-50%) translateY(0); }
            40% { transform: translateX(-50%) translateY(-20px); }
            60% { transform: translateX(-50%) translateY(-10px); }
        }
        /* Main Content */
        .main-content {
            position: relative;
            z-index: 1;
            padding: 60px 20px;
        }
        .newspaper {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            max-width: 1400px;
            margin: 0 auto;
            padding: 60px 40px;
            border-radius: 30px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        }
        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 60px;
            position: relative;
        }
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-green), var(--accent-blue));
            border-radius: 2px;
            animation: expandWidth 1s ease forwards;
        }
        @keyframes expandWidth {
            from { width: 0; }
            to { width: 100px; }
        }
        .columns {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
        }
        /* Card Styles */
        section.card-item {
            background: rgba(255, 255, 255, 0.08);
            border-radius: 24px;
            padding: 0;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transform: translateY(100px);
            opacity: 0;
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }
        section.card-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: 0.5s;
            z-index: 1;
        }
        section.card-item:hover::before {
            left: 100%;
        }
        section.card-item.active {
            opacity: 1;
            transform: translateY(0);
        }
        section.card-item:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 30px 60px rgba(46, 204, 113, 0.2);
            border-color: var(--primary-green);
        }
        .card-image-container {
            position: relative;
            overflow: hidden;
            height: 280px;
        }
        section.card-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1), filter 0.5s ease;
        }
        section.card-item:hover img {
            transform: scale(1.15);
            filter: brightness(1.1);
        }
        .card-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 60%;
            background: linear-gradient(to top, rgba(26, 26, 46, 0.95), transparent);
            pointer-events: none;
        }
        .card-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            background: rgba(46, 204, 113, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transform: scale(0) rotate(-180deg);
            transition: transform 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }
        section.card-item:hover .card-icon {
            transform: scale(1) rotate(0deg);
        }
        .card-icon i {
            color: white;
            font-size: 1.3rem;
        }
        .card-content {
            padding: 30px;
        }
        section.card-item h2 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--primary-green);
            position: relative;
            display: inline-block;
        }
        section.card-item h2::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-green);
            transition: width 0.5s ease;
        }
        section.card-item:hover h2::after {
            width: 100%;
        }
        section.card-item p {
            font-size: 1rem;
            line-height: 1.8;
            color: rgba(255, 255, 255, 0.8);
            text-align: justify;
        }
        /* Stats Section */
        .stats-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin: 80px 0;
            padding: 40px;
            background: rgba(46, 204, 113, 0.1);
            border-radius: 20px;
            border: 1px solid rgba(46, 204, 113, 0.2);
        }
        .stat-item {
            text-align: center;
            padding: 20px;
        }
        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary-green);
            display: block;
        }
        .stat-label {
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.7);
            margin-top: 10px;
        }
        /* CTA Button */
        .cta-section {
            text-align: center;
            margin-top: 60px;
        }
        .cta-button {
            display: inline-block;
            padding: 18px 50px;
            background: linear-gradient(135deg, var(--primary-green), var(--accent-blue));
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }
        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: 0.5s;
        }
        .cta-button:hover::before {
            left: 100%;
        }
        .cta-button:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(46, 204, 113, 0.4);
        }
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }


        /* Stagger Animation Delays */
        section.card-item:nth-child(1) { transition-delay: 0.1s; }
        section.card-item:nth-child(2) { transition-delay: 0.2s; }
        section.card-item:nth-child(3) { transition-delay: 0.3s; }
        section.card-item:nth-child(4) { transition-delay: 0.4s; }
        /* Responsive */
        @media (max-width: 768px) {
            .columns {
                grid-template-columns: 1fr;
            }
            .newspaper {
                padding: 30px 20px;
                border-radius: 20px;
            }
            .section-title {
                font-size: 1.8rem;
            }
            .stats-section {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        /* Smooth Scroll */
        html {
            scroll-behavior: smooth;
        }
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        ::-webkit-scrollbar-track {
            background: #1a1a2e;
        }
        ::-webkit-scrollbar-thumb {
            background: var(--primary-green);
            border-radius: 5px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: var(--dark-green);
        }
        /* Leaf Floating Animation */
        .floating-leaf {
            position: fixed;
            font-size: 2rem;
            opacity: 0.3;
            animation: floatLeaf 20s infinite linear;
            z-index: 0;
        }
        @keyframes floatLeaf {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% { opacity: 0.3; }
            90% { opacity: 0.3; }
            100% {
                transform: translateY(-100vh) rotate(360deg);
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <!-- Animated Particles -->
    <div class="particles" id="particles"></div>
    <!-- Floating Leaves -->
    <div id="leaves"></div>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>🌍 Reducing Carbon Dioxide Emissions</h1>
            <p class="hero-subtitle">
                Together, we can create a sustainable future. Every action counts in the fight against climate change.
            </p>
            <a href="#content" class="cta-button">
                <i class="fas fa-leaf"></i> Explore Solutions
            </a>
        </div>
        <div class="scroll-indicator">
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>
    <!-- Main Content -->
    <div class="main-content" id="content">
        <div class="newspaper">
            <h2 class="section-title">Understanding Our Impact</h2>
            <div class="columns">
                <section class="card-item">
                    <div class="card-image-container">
                        <img src="https://i.pinimg.com/736x/56/6b/8e/566b8ebdf708a2be29b46e76b5548434.jpg" alt="Reducing Carbon Dioxide Emissions">
                        <div class="card-overlay"></div>
                        <div class="card-icon">
                            <i class="fas fa-globe-americas"></i>
                        </div>
                    </div>
                    <div class="card-content">
                        <h2>The Climate Crisis</h2>
                        <p>
                            Climate change is no longer a distant problem — it's something we experience every day. Rising temperatures,
                            unpredictable weather, and increasing pollution are all connected to one major factor: carbon dioxide (CO₂)
                            emissions. Reducing these emissions is one of the most important steps we can take toward protecting our 
                            planet and our future.
                        </p>
                    </div>
                </section>
Copy
Regenerate
Like
Dislike

Anthropic Claude 4.5 Opus
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Reducing Carbon Dioxide Emissions</title>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f4f4f4;
            color: #111;
            background-image: url('https://i.pinimg.com/736x/70/42/e9/7042e99da611c8dab433bc41eef14df6.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;   
        }

        .newspaper {
            background: #fff;
            max-width: 1200px;
            margin: 40px auto;
            padding: 30px;

        }

        h1 {
            text-align: center;
            font-size: 38px;
            margin-bottom: 50px;
            font-weight: 600;

        }

        .columns {
    display: grid;
    grid-template-columns: 1fr 1fr;
    column-gap: 40px;
    row-gap: 20px;
}



        section {
            break-inside: avoid;
            margin-bottom: 10px;
            opacity: 100%;
            transform: translateY(60px);
            transition: all 0.8s ease;
        }

        section.active {
            opacity: 1;
            transform: translateY(0);
        }

        section img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 12px;
            height: 300px;
        }

        h2 {
            font-size: 22px;
            margin-bottom: 8px;
        }

        p {
            font-size: 16px;
            line-height: 1.8;
            text-align: justify;
        }

        @media (max-width: 768px) {
    .columns {
        grid-template-columns: 1fr;
    }

    h1 {
        font-size: 28px;
    }
}

    </style>


</head>




<body>
 <div class="container" style="max-width: 90%; margin: 0 auto;">
    <div class="newspaper" style="background-color: #f8f9fa; padding: 20px; border-radius: 10px;">

        <h1 style="text-align: center; color: #333;">Reducing Carbon Dioxide Emissions</h1>

        <div class="columns"  justify-content: space-between;">



            <section>
                <img src="https://i.pinimg.com/736x/56/6b/8e/566b8ebdf708a2be29b46e76b5548434.jpg" alt="Reducing Carbon Dioxide Emissions">

                <p>
                    Climate change is no longer a distant problem — it’s something we experience every day. Rising temperatures,
                     unpredictable weather, and increasing pollution are all connected to one major factor: carbon dioxide (CO₂)
                      emissions. Reducing these emissions is one of the most important steps we can take toward protecting our 
                      planet and our future.
                      CO₂ is released into the atmosphere through everyday activities such as burning fossil fuels, excessive
                       energy consumption, transportation, and industrial processes. While these activities support modern life, 
                       their environmental impact is significant. The good news is that small, collective actions can create powerful change. 
                </p>
            </section>

            <section>
                <img src="https://i.pinimg.com/736x/c0/31/cc/c031cc783295417d2ee348958987918a.jpg" alt="Why Reducing CO₂ Emissions Matters">
                <h2>Why Reducing CO₂ Emissions Matters</h2>
                <p>
                High levels of carbon dioxide trap heat in the atmosphere, leading to global warming and climate change.
                 This affects ecosystems, food security, water availability, and human health. Communities with fewer resources 
                 often suffer the most, making this not just an environmental issue, but a social one as well.
                </p>
            </section>       




            <section>
                <img src="https://i.pinimg.com/736x/24/4a/16/244a16bd09aa37b3715723955f29804d.jpg" alt="How We Can Make a Difference">
                <h2>How We Can Make a Difference</h2>
                <p>
                Reducing carbon emissions does not require drastic lifestyle changes. 
                It begins with awareness, responsibility, and smarter choices.
                By reducing CO₂ emissions, we can slow down climate change, improve air quality, protect natural 
                ecosystems, and create healthier and more sustainable communities.
                </p>
            </section>

            <section>
                <img src="https://i.pinimg.com/1200x/4f/2c/ee/4f2cee3de5b873546d1224a0a617066c.jpg" alt="Turning Goals into Measurable Impact">
                <h2>Turning Goals into Measurable Impact</h2>
                <p>
                Through our platform, organizations and communities can plan sustainability initiatives focused on lowering carbon emissions,
                 track resource usage, and measure real impact over time. 
                By visualizing progress and encouraging collaboration, we help turn environmental goals into practical actions.<br>

                Reducing CO₂ emissions is not just about numbers and charts — it’s about protecting the environment we depend on and 
                creating a better future for the next generation.
                </p>
            </section>




        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


<script>
    function revealOnScroll() {
        document.querySelectorAll('section').forEach(sec => {
            const top = sec.getBoundingClientRect().top;
            const height = window.innerHeight;
            if (top < height - 100) {
                sec.classList.add('active');
            }
        });
    }

    window.addEventListener('scroll', revealOnScroll);


    window.addEventListener('load', revealOnScroll);
</script>








</body>

</html>.   Give a code for this page with modern animation. Use the liquid glass concept use in ios
Anthropic Claude 4.5 Opus

Reasoning
iOS Liquid Glass Design - Carbon Emissions Page
Here's your page redesigned with the Apple iOS Liquid Glass aesthetic featuring frosted glass effects, fluid animations, and translucent surfaces:

html


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
        
