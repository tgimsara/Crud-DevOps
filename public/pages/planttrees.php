<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/goal.css" rel = "stylesheet">

    <title></title>


<body>
 <div class="container" style="max-width: 90%; margin: 0 auto;">
    <div class="newspaper" style="background-color: #f8f9fa; padding: 20px; border-radius: 10px;">

        <h1>Planting Trees</h1>

        <div class="columns">

            <section>
                <img src="https://i.pinimg.com/1200x/06/8e/6f/068e6fcc3dc0fd09fac0800197d7ccd6.jpg" alt="Description">
                <h2>Description</h2>
                
                <p>Planting trees is a long-term commitment to the health of our planet and the well-being of future generations. 
                    Trees act as natural protectors of the environment by absorbing carbon dioxide, improving air quality, and supporting
                     ecosystems. In a world facing rapid urbanization and climate challenges, planting trees is a powerful way to restore
                      balance between human activity and nature.</p>
            </section>

            <section>
                <img src="https://i.pinimg.com/1200x/07/ac/73/07ac7318a369dd1997f725b7ec3d6033.jpg" alt="Climate Protection">
                <h2>Climate Protection</h2>
                <p>Trees play a crucial role in reducing the effects of climate change. By absorbing carbon dioxide and releasing oxygen,
                     they help regulate global temperatures and reduce greenhouse gases in the atmosphere. Large-scale tree planting
                      initiatives can significantly contribute to cooling the environment and supporting climate resilience.</p>
            </section>

            <section>
                <img src="https://i.pinimg.com/736x/1e/16/89/1e16897d6a20f03703b2682e94100082.jpg" alt="Supporting Biodiversity">
                <h2>Supporting Biodiversity</h2>
                <p>Trees create habitats for countless species of 
                    birds, insects, and animals. They form the foundation of healthy ecosystems, allowing biodiversity to thrive. When trees 
                    are planted thoughtfully, they help restore damaged ecosystems and protect wildlife that depends on natural forests 
                    for survival.</p>
            </section>

            <section>
                <img src="https://i.pinimg.com/736x/e6/10/a2/e610a219dd6cb949eb1b9e4aec0409d8.jpg" alt="Strengthening Communities">
                <h2>Strengthening Communities</h2>
                <p>Tree planting goes beyond environmental impact; it also improves quality of life. Green spaces promote
                     physical and mental well-being, reduce stress, and create more
                     livable communities. Shaded areas lower heat in urban spaces, making neighborhoods healthier and more
                      comfortable for everyone.
                </p>
            </section>

            <section>
                <img src="https://i.pinimg.com/736x/0b/d9/14/0bd9149ba7eebd418a505cec36e36893.jpg" alt="Sustainable Future">
                <h2>Sustainable Future</h2>
                <p>
                
                Planting trees today ensures a greener tomorrow. When initiatives are planned, tracked, and maintained over time, 
                their impact becomes lasting and meaningful. 
                By encouraging responsible tree planting efforts, we help build a future where development and nature grow together 
                in harmony.
                </p>
            </section>

            
            <section>
                <img src="https://i.pinimg.com/736x/4d/0f/bc/4d0fbc67a505a15661a7a7e9ee9faf70.jpg" alt="A Step Toward a Greener Tomorrow">
                <h2>A Step Toward a Greener Tomorrow</h2>
                <p>
                Planting trees is not just about adding greenery to our surroundings; it is about taking responsibility for the future of our
                 planet. Every tree planted contributes to cleaner air, healthier ecosystems, and stronger communities. When we commit 
                to nurturing trees and protecting green spaces, we create a lasting impact that supports life today and for generations to come.
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
