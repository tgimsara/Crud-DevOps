<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Planting Trees</title>

    <style>
        :root {
            --glass-bg: rgba(255, 255, 255, 0.12);
            --glass-border: rgba(255, 255, 255, 0.25);
            --glass-highlight: rgba(255, 255, 255, 0.4);

            --text-primary: rgba(255, 255, 255, 0.95);
            --text-secondary: rgba(255, 255, 255, 0.7);


            --accent-green: #34c759;
            --accent-emerald: #10b981;
            --accent-lime: #84cc16;
            --accent-teal: #14b8a6;
            --blur-amount: 25px;
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
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            min-height: 100vh;
            overflow-x: hidden;
            background: linear-gradient(135deg, 
                #0f2027 0%, 
                #203a43 25%, 


                #1a4a3a 50%, 
                #2c5f2d 75%, 
                #0f2027 100%);
            background-size: 400% 400%;
            animation: forestGradient 20s ease infinite;
        }

        @keyframes forestGradient {
            0%, 100% { background-position: 0% 50%; }


            25% { background-position: 100% 25%; }
            50% { background-position: 100% 100%; }
            75% { background-position: 0% 75%; }
        }

        
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
            filter: blur(100px);


            opacity: 0.5;
            animation: floatOrb 25s ease-in-out infinite;
        }

        .orb-1 {
            width: 600px;
            height: 600px;
            background: linear-gradient(135deg, #34c759, #10b981);
            top: -15%;
            left: -10%;
            animation-delay: 0s;
        }

        .orb-2 {
            width: 450px;
            height: 450px;
            background: linear-gradient(135deg, #84cc16, #22c55e);
            top: 40%;
            right: -15%;
            animation-delay: -6s;
        }

        .orb-3 {
            width: 400px;
            height: 400px;
            background: linear-gradient(135deg, #14b8a6, #059669);
            bottom: -10%;
            left: 25%;
            animation-delay: -12s;
        }

        .orb-4 {
            width: 350px;
            height: 350px;
            background: linear-gradient(135deg, #22d3d3, #34c759);
            top: 20%;
            left: 40%;
            animation-delay: -18s;
        }

        .orb-5 {
            width: 300px;
            height: 300px;
            background: linear-gradient(135deg, #65a30d, #16a34a);
            bottom: 30%;
            right: 20%;
            animation-delay: -8s;
        }

        @keyframes floatOrb {
            0%, 100% { transform: translate(0, 0) scale(1) rotate(0deg); }
            25% { transform: translate(60px, -60px) scale(1.15) rotate(90deg); }
            50% { transform: translate(-40px, 40px) scale(0.9) rotate(180deg); }


            75% { transform: translate(50px, 50px) scale(1.1) rotate(270deg); }
        }

       
        .floating-leaves {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;


            height: 100%;
            pointer-events: none;
            z-index: 1;
            overflow: hidden;
        }

        .leaf {
            position: absolute;
            font-size: 24px;
            opacity: 0;
            animation: fallLeaf 15s linear infinite;
        }

        @keyframes fallLeaf {
            0% {
                transform: translateY(-100px) rotate(0deg) translateX(0);
                opacity: 0;
            }
            10% { opacity: 0.6; }


            90% { opacity: 0.6; }
            100% {
                transform: translateY(100vh) rotate(720deg) translateX(100px);
                opacity: 0;
            }
        }

        
        .mouse-glow {
            position: fixed;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(52, 199, 89, 0.2) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;


            z-index: 1;
            transform: translate(-50%, -50%);
            transition: opacity 0.3s ease;
        }

        
        .main-container {
            position: relative;
            z-index: 2;
            max-width: 1400px;
            margin: 0 auto;
            padding: 50px 20px;
        }

        
        .liquid-glass-header {
            background: var(--glass-bg);
            backdrop-filter: blur(var(--blur-amount)) saturate(200%);
            -webkit-backdrop-filter: blur(var(--blur-amount)) saturate(200%);
            border: 1px solid var(--glass-border);
            border-radius: 40px;

            padding: 60px 50px;
            margin-bottom: 50px;
            text-align: center;
            position: relative;



            overflow: hidden;
            transform: translateY(60px);
            opacity: 0;
            animation: slideUpFade 1.2s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        
        .liquid-glass-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;


            background: linear-gradient(90deg, transparent, var(--glass-highlight), transparent);
        }

        .liquid-glass-header::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;


            height: 200%;
            background: radial-gradient(ellipse at 30% 20%, rgba(255,255,255,0.15) 0%, transparent 50%);
            pointer-events: none;
        }

       
        .header-icon {
            font-size: 80px;


            margin-bottom: 25px;
            display: inline-block;
            animation: treeGrow 3s ease-in-out infinite;
            filter: drop-shadow(0 10px 30px rgba(52, 199, 89, 0.4));
        }

        @keyframes treeGrow {
            0%, 100% { transform: scale(1) rotate(-2deg); }
            50% { transform: scale(1.1) rotate(2deg); }
        }

        h1 {
            font-size: clamp(32px, 6vw, 56px);
            font-weight: 700;
            background: linear-gradient(135deg, #34c759, #84cc16, #10b981, #34c759);
            background-size: 300% 300%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;

            background-clip: text;
            margin-bottom: 20px;
            letter-spacing: -1px;
            animation: gradientFlow 4s ease infinite;
        }

        @keyframes gradientFlow {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .subtitle {
            font-size: 18px;
            color: var(--text-secondary);
            max-width: 650px;
            margin: 0 auto;
            line-height: 1.7;
        }

        
        .scroll-progress {
            position: fixed;
            top: 0;

            left: 0;
            width: 0%;
            height: 4px;

            background: linear-gradient(90deg, var(--accent-green), var(--accent-lime), var(--accent-emerald));
            z-index: 1000;
            transition: width 0.1s ease;
        }

        
        .columns {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 35px;
        }

        
        .liquid-glass-card {
            background: var(--glass-bg);
            backdrop-filter: blur(var(--blur-amount)) saturate(200%);
            -webkit-backdrop-filter: blur(var(--blur-amount)) saturate(200%);
            border: 1px solid var(--glass-border);

            border-radius: 28px;
            overflow: hidden;
            position: relative;

            transform: translateY(100px) scale(0.9);
            opacity: 0;
            transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
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
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.5), transparent);
            z-index: 3;
        }

        
        .liquid-glass-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;

            background: radial-gradient(ellipse at 25% 25%, rgba(255,255,255,0.12) 0%, transparent 50%);
            pointer-events: none;
            z-index: 2;
            transition: all 0.5s ease;
        }

        .liquid-glass-card:hover {
            transform: translateY(-12px) scale(1.02);
            border-color: rgba(52, 199, 89, 0.5);
            box-shadow: 
                0 35px 70px rgba(0,0,0,0.35),
                0 0 50px rgba(52, 199, 89, 0.15),

                inset 0 1px 0 rgba(255,255,255,0.25);
        }

        .liquid-glass-card:hover::after {
            background: radial-gradient(ellipse at 50% 40%, rgba(255,255,255,0.18) 0%, transparent 60%);
        }

        
        .card-image-wrapper {
            position: relative;
            height: 260px;

            overflow: hidden;
        }

        .card-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;

            transition: transform 1s cubic-bezier(0.16, 1, 0.3, 1), filter 0.6s ease;
        }

        .liquid-glass-card:hover .card-image-wrapper img {
            transform: scale(1.15);
            filter: brightness(1.1) saturate(1.1);
        }

        
        .image-frost-overlay {
            position: absolute;
            bottom: 0;


            left: 0;
            right: 0;
            height: 120px;
            background: linear-gradient(to top, rgba(15, 32, 39, 0.9), transparent);
            pointer-events: none;
        }

        
        .card-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(52, 199, 89, 0.25);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);

            border: 1px solid rgba(52, 199, 89, 0.4);
            border-radius: 50px;
            padding: 10px 18px;
            font-size: 13px;

            font-weight: 600;
            color: white;
            display: flex;
            align-items: center;


            gap: 8px;
            transform: translateY(-30px) scale(0.8);
            opacity: 0;
            transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1) 0.1s;
            z-index: 4;
        }
