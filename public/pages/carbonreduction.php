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
