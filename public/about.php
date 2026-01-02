 <?php
 include 'includes/header.php';
 ?><!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>About Us</title>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            overflow-x: hidden;
        }

        section {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            color: #fff;
        }


        .bg-slide {
            position: absolute;
            inset: 0;
            background-size: cover;
            background-position: center;
            transform: translateY(0);
            transition: transform 0.1s linear;
            z-index: -1;
        }

        .overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.55);
            z-index: -1;
        }


        .reveal {
            opacity: 0;
            transform: translateY(60px);
            transition: all 0.8s ease;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        img {
            max-width: 100%;
            border-radius: 12px;
        }


        @media (max-width: 768px) {
            section {
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>


    <section>
        <div class="bg-slide" style="background-image:url('https://picsum.photos/1600/900?1')"></div>
        <div class="overlay"></div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 reveal">
                    <h2 class="mb-3">About Us</h2>
                    <p>
                        Division for Sustainable Development Goals with unbelivable ideas and ctreativity.
                    </p>
                </div>
                <div class="col-12 col-md-6 reveal">
                    <img src="https://picsum.photos/500/350?2" alt="...">
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="bg-slide" style="background-image:url('https://picsum.photos/1600/900?3')"></div>
        <div class="overlay"></div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 reveal order-md-2">
                    <h2 class="mb-3">Our Mission</h2>
                    <p>
                        The Division for Sustainable Development Goals (DSDG) in the United Nations Department of
                        Economic and Social Affairs (UNDESA) acts as the Secretariat for the SDGs, providing substantive
                        support and capacity-building for the goals and their related thematic issues, including water,
                        energy, climate, oceans, urbanization, transport, science and technology, the Global Sustainable
                        Development Report (GSDR), partnerships and Small Island Developing States. DSDG plays a key
                        role in the evaluation of UN systemwide implementation of the 2030 Agenda and on advocacy and
                        outreach activities relating to the SDGs.
                    </p>
                </div>
                <div class="col-12 col-md-6 reveal order-md-1">
                    <img src="https://picsum.photos/500/350?4" alt="">
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="bg-slide" style="background-image:url('https://picsum.photos/1600/900?5')"></div>
        <div class="overlay"></div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6  reveal">
                    <h2 class="mb-3">POLICY ANALISYS</h2>
                    <p>
                        The Division's work provides analytical inputs for intergovernmental deliberations on
                        sustainable development, including through its science-policy interface. The Division leads the
                        drafting of Secretary-Generals reports on sustainable development topics. It contributes
                        studies and analytical inputs to the review of major conferences related to sustainable
                        development. For this purpose, it undertakes reviews of assessments of sustainable development
                        challenges. The Division has led the pilot versions of the Global Sustainable Development
                        Report, which aims to strengthen the science-policy interface at the HLPF. It investigates
                        integrated policy responses in a number of priority areas such as sustainable development goals,
                        technology facilitation, green economy, sustainable transport, sustainable cities, oceans,
                        climate change in the context of sustainable development and the nexus among energy, food and
                        water. The Division also co-hosts - on behalf of DESA - the secretariat for the Technology
                        Facilitation Mechanism, including its annual multi-stakeholder forum on Science, Technology and
                        Innovation for SDGs (STI Forum), together with UNEP.s
                    </p>
                </div>
                <div class="col-12 col-md-6 reveal">
                    <img src="https://picsum.photos/500/350?6" alt="">
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>

        function revealOnScroll() {
            document.querySelectorAll('.reveal').forEach(el => {
                const top = el.getBoundingClientRect().top;
                const height = window.innerHeight;
                if (top < height - 100) {
                    el.classList.add('active');
                }
            });
        }


        function slideBackground() {
            document.querySelectorAll('.bg-slide').forEach(bg => {
                const speed = 0.3;
                const offset = window.pageYOffset;
                bg.style.transform = `translateY(${offset * speed}px)`;
            });
        }

        window.addEventListener('scroll', () => {
            revealOnScroll();
            slideBackground();
        });

        revealOnScroll();
    </script>
    <?php include 'includes/footer.php'; ?>

</body>

</html>


<?php
 include 'includes/footer.php';
 ?>