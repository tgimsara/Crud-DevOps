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
