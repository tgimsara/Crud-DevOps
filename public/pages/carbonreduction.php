<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Achieve Gender Equality</title>

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
                column-count: 1;
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

</html>