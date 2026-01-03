<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Sustainability Consultant | EcoNexus</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: url("https://images.unsplash.com/photo-1501854140801-50d01698950b?w=1920");
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
            min-height: 100vh;
            overflow-x: hidden;
        }

        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            animation: float 20s infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0) translateX(0);
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            90% {
                opacity: 1;
            }

            100% {
                transform: translateY(-100vh) translateX(50px);
                opacity: 0;
            }
        }

        .container {
            position: relative;
            z-index: 2;
            max-width: 1400px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 50px;
            animation: fadeInDown 1s ease;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .header h1 {
            font-size: 3.5em;
            font-weight: 800;
            background: linear-gradient(135deg, #fff, #e0e7ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 15px;
            text-shadow: 0 0 40px rgba(255, 255, 255, 0.3);
        }

        .header p {
            font-size: 1.3em;
            color: rgba(255, 255, 255, 0.95);
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 30px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.3);
            padding: 40px;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
        }

        .glass::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg,
                    transparent 30%,
                    rgba(255, 255, 255, 0.1) 50%,
                    transparent 70%);
            animation: shimmer 6s infinite;
        }

        @keyframes shimmer {
            0% {
                transform: translateX(-100%) translateY(-100%) rotate(45deg);
            }

            100% {
                transform: translateX(100%) translateY(100%) rotate(45deg);
            }
        }

        .glass-content {
            position: relative;
            z-index: 1;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-bottom: 30px;
        }

        .form-group {
            position: relative;
        }

        .form-group label {
            display: block;
            color: rgba(255, 255, 255, 0.95);
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 0.95em;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 15px 20px;
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 15px;
            color: white;
            font-size: 1em;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.25);
            border-color: rgba(255, 255, 255, 0.5);
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .form-group select {
            cursor: pointer;
        }

        .form-group select option {
            background: #667eea;
            color: white;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        .btn-analyze {
            width: 100%;
            padding: 18px;
            background: #222;
            border: none;
            border-radius: 15px;
            color: white;
            font-size: 1.2em;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
            position: relative;
            overflow: hidden;
        }

        .btn-analyze::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .btn-analyze:hover::before {
            width: 400px;
            height: 400px;
        }

        .btn-analyze:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(102, 126, 234, 0.6);
        }

        .btn-analyze:active {
            transform: translateY(-1px);
        }

        .btn-analyze span {
            position: relative;
            z-index: 1;
        }

        /* Results section */
        .results {
            display: none;
            animation: fadeInUp 0.6s ease;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .results.active {
            display: block;
        }

        .result-header {
            text-align: center;
            margin-bottom: 35px;
        }

        .result-header h2 {
            font-size: 2.5em;
            color: white;
            margin-bottom: 10px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .result-header .score {
            font-size: 3em;
            font-weight: 800;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-bottom: 30px;
        }

        .card {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            padding: 30px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
            border-color: rgba(255, 255, 255, 0.4);
        }

        .card-icon {
            font-size: 3em;
            margin-bottom: 15px;
            display: block;
        }

        .card h3 {
            color: white;
            font-size: 1.5em;
            margin-bottom: 15px;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .card p {
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.6;
            font-size: 1.05em;
        }

        .card ul {
            list-style: none;
            margin-top: 15px;
        }

        .card li {
            color: rgba(255, 255, 255, 0.85);
            padding: 8px 0;
            padding-left: 25px;
            position: relative;
            line-height: 1.5;
        }

        .card li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #4facfe;
            font-weight: bold;
            font-size: 1.2em;
        }

        .action-plan {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            padding: 35px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .action-plan h3 {
            color: white;
            font-size: 2em;
            margin-bottom: 25px;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .timeline {
            position: relative;
            padding-left: 30px;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 3px;
            background: linear-gradient(180deg, #4facfe, #00f2fe);
            border-radius: 2px;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 30px;
            padding-left: 25px;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -37px;
            top: 5px;
            width: 15px;
            height: 15px;
            background: #4facfe;
            border-radius: 50%;
            border: 3px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 0 15px rgba(79, 172, 254, 0.6);
        }

        .timeline-item h4 {
            color: white;
            font-size: 1.3em;
            margin-bottom: 8px;
        }

        .timeline-item p {
            color: rgba(255, 255, 255, 0.85);
            line-height: 1.6;
        }

        .loading {
            display: none;
            text-align: center;
            padding: 40px;
        }

        .loading.active {
            display: block;
        }

        .spinner {
            width: 60px;
            height: 60px;
            margin: 0 auto 20px;
            border: 4px solid rgba(255, 255, 255, 0.3);
            border-top: 4px solid white;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .loading p {
            color: white;
            font-size: 1.2em;
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 2.5em;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .cards-grid {
                grid-template-columns: 1fr;
            }
        }

        .btn-back {
    width: auto;
    padding: 10px 20px;
    background: rgba(255, 255, 255, 0.2);
    border: 2px solid rgba(255, 255, 255, 0.4);
    border-radius: 15px;
    color: white;
    font-size: 1em;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    margin-top: 30px;
    float: left;
}

.btn-back:hover {
    background: rgba(255, 255, 255, 0.3);
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
}
    </style>
</head>

<body>
    <div class="particles" id="particles"></div>
    <button type="button" class="btn-back" onclick="goBack()">
            Back
        </button>
    <div class="container">
        <div class="header">
            <h1>AI Sustainability Consultant</h1>
            <p>Smart recommendations for responsible consumption, climate action & partnerships</p>
        </div>
        

        <div class="glass">
            <div class="glass-content">
                <form id="consultantForm">
                    <div class="form-grid">
                        <div class="form-group">
                            <label>Organization Name</label>
                            <input type="text" id="orgName" placeholder="Enter your organization" required>
                        </div>

                        <div class="form-group">
                            <label>Organization Type</label>
                            <select id="orgType" required>
                                <option value="">Select type</option>
                                <option value="university">University/Educational</option>
                                <option value="corporate">Corporate</option>
                                <option value="ngo">NGO/Non-Profit</option>
                                <option value="government">Government</option>
                                <option value="startup">Startup</option>
                                <option value="community">Community Group</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Primary Sustainability Goal</label>
                            <select id="primaryGoal" required>
                                <option value="">Select goal</option>
                                <option value="waste">Waste Reduction</option>
                                <option value="energy">Energy Efficiency</option>
                                <option value="carbon">Carbon Neutrality</option>
                                <option value="water">Water Conservation</option>
                                <option value="circular">Circular Economy</option>
                                <option value="awareness">Sustainability Awareness</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Team Size</label>
                            <select id="teamSize" required>
                                <option value="">Select size</option>
                                <option value="small">1-10 people</option>
                                <option value="medium">11-50 people</option>
                                <option value="large">51-200 people</option>
                                <option value="enterprise">200+ people</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Budget Range (Rupuees)</label>
                            <select id="budget" required>
                                <option value="">Select budget</option>
                                <option value="minimal">Under Rs.5,000</option>
                                <option value="low">Rs.5,000 - Rs.25,000</option>
                                <option value="medium">Rs.25,000 - Rs.100,000</option>
                                <option value="high">Rs.100,000+</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Timeline</label>
                            <select id="timeline" required>
                                <option value="">Select timeline</option>
                                <option value="immediate">1-3 months</option>
                                <option value="short">3-6 months</option>
                                <option value="medium">6-12 months</option>
                                <option value="long">1-2 years</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Current Challenges (Optional)</label>
                        <textarea id="challenges"
                            placeholder="Describe your main sustainability challenges..."></textarea>
                    </div>

                    <button type="submit" class="btn-analyze">
                        <span>Generate</span>
                    </button>
                </form>
            </div>
        </div>


        <div class="loading" id="loading">
            <div class="spinner"></div>
            <p>Analyzing your input with AI...</p>
        </div>


        <div class="results" id="results">
            <div class="glass">
                <div class="glass-content">
                    <div class="result-header">
                        <h2>Your Sustainability Score</h2>
                        <div class="score" id="score">--</div>
                    </div>

                    <div class="cards-grid">
                        <div class="card">
                            <span class="card-icon">🎯</span>
                            <h3>Key Priorities</h3>
                            <ul id="priorities"></ul>
                        </div>

                        <div class="card">
                            <span class="card-icon">💡</span>
                            <h3>Quick Wins</h3>
                            <ul id="quickWins"></ul>
                        </div>

                        <div class="card">
                            <span class="card-icon">🤝</span>
                            <h3>Partnership Opportunities</h3>
                            <ul id="partnerships"></ul>
                        </div>

                        <div class="card">
                            <span class="card-icon">📊</span>
                            <h3>Impact Metrics</h3>
                            <ul id="metrics"></ul>
                        </div>

                        <div class="card">
                            <span class="card-icon">💰</span>
                            <h3>Resource Allocation</h3>
                            <ul id="resources"></ul>
                        </div>

                        <div class="card">
                            <span class="card-icon">⚠️</span>
                            <h3>Risk Mitigation</h3>
                            <ul id="risks"></ul>
                        </div>
                    </div>

                    <div class="action-plan">
                        <h3>📅 Implementation Roadmap</h3>
                        <div class="timeline" id="roadmap"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function createParticles() {
            const particles = document.getElementById('particles');
            for (let i = 0; i < 30; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.width = Math.random() * 10 + 5 + 'px';
                particle.style.height = particle.style.width;
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 20 + 's';
                particle.style.animationDuration = (Math.random() * 10 + 15) + 's';
                particles.appendChild(particle);
            }
        }

        createParticles();


        const consultantData = {
            university: {
                priorities: ['Campus-wide sustainability curriculum', 'Research initiatives', 'Student engagement programs'],
                quickWins: ['Paperless administration', 'Bike-sharing program', 'Green campus certification'],
                partnerships: ['Local environmental NGOs', 'Government sustainability programs', 'Corporate sustainability sponsors'],
                baseScore: 72
            },
            corporate: {
                priorities: ['Supply chain optimization', 'ESG reporting', 'Employee sustainability programs'],
                quickWins: ['Remote work policies', 'LED lighting upgrades', 'Digital documentation'],
                partnerships: ['B Corp certification', 'Industry consortiums', 'Sustainability consultants'],
                baseScore: 68
            },
            ngo: {
                priorities: ['Community outreach', 'Policy advocacy', 'Grant applications'],
                quickWins: ['Social media campaigns', 'Volunteer programs', 'Local partnerships'],
                partnerships: ['UN SDG initiatives', 'Corporate social responsibility programs', 'Government grants'],
                baseScore: 78
            },
            government: {
                priorities: ['Policy development', 'Public infrastructure', 'Citizen engagement'],
                quickWins: ['Green procurement policies', 'Public awareness campaigns', 'Sustainability reporting'],
                partnerships: ['International climate agreements', 'Smart city initiatives', 'Research institutions'],
                baseScore: 70
            },
            startup: {
                priorities: ['Sustainable business model', 'Green technology adoption', 'Impact measurement'],
                quickWins: ['Cloud infrastructure', 'Sustainable packaging', 'Carbon offset programs'],
                partnerships: ['Accelerator programs', 'Impact investors', 'Industry associations'],
                baseScore: 75
            },
            community: {
                priorities: ['Local awareness', 'Grassroots initiatives', 'Community resilience'],
                quickWins: ['Cleanup drives', 'Tree planting', 'Recycling programs'],
                partnerships: ['Local businesses', 'Schools', 'Municipal programs'],
                baseScore: 80
            }
        };

        const goalData = {
            waste: {
                metrics: ['Waste diversion rate', 'Recycling percentage', 'Landfill reduction'],
                resources: ['Composting systems: 30%', 'Recycling infrastructure: 40%', 'Education programs: 30%']
            },
            energy: {
                metrics: ['Energy consumption (kWh)', 'Renewable energy %', 'Cost savings'],
                resources: ['Solar panels: 50%', 'Energy audits: 20%', 'Smart systems: 30%']
            },
            carbon: {
                metrics: ['Carbon footprint (tCO2e)', 'Offset credits', 'Net-zero progress'],
                resources: ['Carbon accounting: 25%', 'Offsets: 35%', 'Reduction initiatives: 40%']
            },
            water: {
                metrics: ['Water usage (gallons)', 'Efficiency improvement', 'Greywater recycling'],
                resources: ['Low-flow fixtures: 30%', 'Rainwater systems: 40%', 'Monitoring: 30%']
            },
            circular: {
                metrics: ['Material circularity', 'Product lifecycle', 'Reuse rate'],
                resources: ['Product redesign: 40%', 'Take-back programs: 30%', 'Partnerships: 30%']
            },
            awareness: {
                metrics: ['Engagement rate', 'Knowledge improvement', 'Behavior change'],
                resources: ['Campaigns: 40%', 'Training: 35%', 'Events: 25%']
            }
        };

        const timelineData = {
            immediate: [
                { phase: 'Month 1', action: 'Assessment and baseline measurement' },
                { phase: 'Month 2', action: 'Quick wins implementation' },
                { phase: 'Month 3', action: 'Initial results and adjustments' }
            ],
            short: [
                { phase: 'Months 1-2', action: 'Comprehensive audit and planning' },
                { phase: 'Months 3-4', action: 'Pilot programs and testing' },
                { phase: 'Months 5-6', action: 'Scale-up and optimization' }
            ],
            medium: [
                { phase: 'Quarter 1', action: 'Strategic planning and stakeholder engagement' },
                { phase: 'Quarter 2-3', action: 'Infrastructure development and implementation' },
                { phase: 'Quarter 4', action: 'Evaluation and reporting' }
            ],
            long: [
                { phase: 'Year 1 Q1-Q2', action: 'Foundation building and pilot projects' },
                { phase: 'Year 1 Q3-Q4', action: 'Scaling and partnership development' },
                { phase: 'Year 2 Q1-Q2', action: 'Full implementation and impact measurement' },
                { phase: 'Year 2 Q3-Q4', action: 'Optimization and long-term planning' }
            ]
        };

        const riskData = {
            minimal: ['Budget constraints', 'Limited technical expertise', 'Change resistance'],
            low: ['Resource allocation', 'Timeline delays', 'Stakeholder alignment'],
            medium: ['Technology integration', 'Regulatory compliance', 'ROI expectations'],
            high: ['Complex supply chains', 'Market volatility', 'Multi-stakeholder coordination']
        };


        document.getElementById('consultantForm').addEventListener('submit', function (e) {
            e.preventDefault();


            const orgName = document.getElementById('orgName').value;
            const orgType = document.getElementById('orgType').value;
            const primaryGoal = document.getElementById('primaryGoal').value;
            const teamSize = document.getElementById('teamSize').value;
            const budget = document.getElementById('budget').value;
            const timeline = document.getElementById('timeline').value;


            document.getElementById('loading').classList.add('active');
            document.getElementById('results').classList.remove('active');


            setTimeout(() => {
                generateRecommendations(orgName, orgType, primaryGoal, teamSize, budget, timeline);

                // Hide loading, show results
                document.getElementById('loading').classList.remove('active');
                document.getElementById('results').classList.add('active');

                // Smooth scroll to results
                document.getElementById('results').scrollIntoView({ behavior: 'smooth' });
            }, 2000);
        });

        function generateRecommendations(orgName, orgType, primaryGoal, teamSize, budget, timeline) {
            // Calculate score based on inputs
            let score = consultantData[orgType].baseScore;

            // Adjust score based on other factors
            if (teamSize === 'large' || teamSize === 'enterprise') score += 5;
            if (budget === 'medium' || budget === 'high') score += 8;
            if (timeline === 'medium' || timeline === 'long') score += 5;

            document.getElementById('score').textContent = score + '/100';


            const priorities = document.getElementById('priorities');
            priorities.innerHTML = '';
            consultantData[orgType].priorities.forEach(item => {
                const li = document.createElement('li');
                li.textContent = item;
                priorities.appendChild(li);
            });

            const quickWins = document.getElementById('quickWins');
            quickWins.innerHTML = '';
            consultantData[orgType].quickWins.forEach(item => {
                const li = document.createElement('li');
                li.textContent = item;
                quickWins.appendChild(li);
            });

            const partnerships = document.getElementById('partnerships');
            partnerships.innerHTML = '';
            consultantData[orgType].partnerships.forEach(item => {
                const li = document.createElement('li');
                li.textContent = item;
                partnerships.appendChild(li);
            });


            const metrics = document.getElementById('metrics');
            metrics.innerHTML = '';
            goalData[primaryGoal].metrics.forEach(item => {
                const li = document.createElement('li');
                li.textContent = item;
                metrics.appendChild(li);
            });


            const resources = document.getElementById('resources');
            resources.innerHTML = '';
            goalData[primaryGoal].resources.forEach(item => {
                const li = document.createElement('li');
                li.textContent = item;
                resources.appendChild(li);
            });


            const risks = document.getElementById('risks');
            risks.innerHTML = '';
            riskData[budget].forEach(item => {
                const li = document.createElement('li');
                li.textContent = item;
                risks.appendChild(li);
            });

            // Populate roadmap
            const roadmap = document.getElementById('roadmap');
            roadmap.innerHTML = '';
            timelineData[timeline].forEach(item => {
                const div = document.createElement('div');
                div.className = 'timeline-item';
                div.innerHTML = `<h4>${item.phase}</h4><p>${item.action}</p>`;
                roadmap.appendChild(div);
            });
        }
    </script>
</body>

</html>