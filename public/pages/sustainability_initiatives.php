<!DOCTYPE html>

<html lang="en">
<head>
    <title>Sustainability Initiatives</title>
    <link rel="stylesheet" href="../css/sustainability_initiatives.css">
</head>
<body>
    <div class="background-overlay"></div>

    <div class="container">
        <header class="hero-section glass-effect">
            <h1>Sustainability Initiatives</h1>

            <p class="description">Plan, manage, and measure sustainability projects aligned with global SDGs.</p>
        </header>

  
        <section class="initiatives-grid" id="initiatives-container">
            

            <div class="initiative-card glass-effect" data-sdg="13" data-status="active">
                <div class="card-header">
                    <span class="status-badge status-active">Active</span>
                </div>
                
                <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=600&q=80" alt="Tree Plantation" class="card-image">
                
                <div class="card-content">
                    <h3>Tree Plantation Drive</h3>
                    <p class="card-subtitle">Climate Action</p>
                    <p class="card-description">Community-driven initiative to plant 1000 trees across campus and surrounding areas to combat climate change.</p>
                    
                    <div class="card-info">
                        <div class="info-item">
                            <span>Uva Wellassa University</span>
                        </div>
                        <div class="info-item">
                            <span>Jan to Mar 2026</span>
                        </div>
                    </div>

                    <div class="impact-section">
                        <h4>Impact So Far</h4>
                        <div class="impact-stats">
                            <div class="stat">
                                <span class="stat-value">320 kg</span>
                                <span class="stat-label">CO₂ Saved</span>
                            </div>
                            <div class="stat">
                                <span class="stat-value">245</span>
                                <span class="stat-label">Trees Planted</span>
                            </div>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 65%"></div>
                        </div>
                    </div>

                    <div class="card-actions">
                        <button class="btn-view glass-button" onclick="openDetails(1)">View Details</button>
                        <button class="btn-join glass-button-primary">Join Initiative</button>
                    </div>
                </div>
            </div>

            <div class="initiative-card glass-effect" data-sdg="12" data-status="active">
                <div class="card-header">
                    <span class="status-badge status-active">Active</span>
                </div>
                
                <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?w=600&q=80" alt="Waste Management" class="card-image">
                
                <div class="card-content">
                    <h3>Campus Waste Reduction</h3>
                    <p class="card-subtitle">Responsible Consumption</p>
                    <p class="card-description">Comprehensive waste management program focusing on recycling, composting, and reducing single-use plastics.</p>
                    
                    <div class="card-info">
                        <div class="info-item">
                            <span>Multiple Campuses</span>
                        </div>
                        <div class="info-item">
                            <span>Ongoing</span>
                        </div>
                    </div>

                    <div class="impact-section">
                        <h4>Impact So Far</h4>
                        <div class="impact-stats">
                            <div class="stat">
                                <span class="stat-value">850 kg</span>
                                <span class="stat-label">Waste Recycled</span>
                            </div>
                            <div class="stat">
                                <span class="stat-value">95%</span>
                                <span class="stat-label">Plastic Reduced</span>
                            </div>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 85%"></div>
                        </div>
                    </div>

                    <div class="card-actions">
                        <button class="btn-view glass-button" onclick="openDetails(2)">View Details</button>
                        <button class="btn-join glass-button-primary">Join Initiative</button>
                    </div>
                </div>
            </div>

            <div class="initiative-card glass-effect" data-sdg="17" data-status="upcoming">
                <div class="card-header">
                    <span class="status-badge status-upcoming">Upcoming</span>
                </div>
                
                <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?w=600&q=80" alt="Partnership" class="card-image">
                
                <div class="card-content">
                    <h3>Green Partnership Network</h3>
                    <p class="card-subtitle">Partnerships for Goals</p>
                    <p class="card-description">Building collaborative networks between universities, NGOs, and businesses for sustainable development.</p>
                    
                    <div class="card-info">
                        <div class="info-item">
                            <span>Regional Initiative</span>
                        </div>
                        <div class="info-item">
                            <span>Feb – Jun 2026</span>
                        </div>
                    </div>

                    <div class="impact-section">
                        <h4>Expected Impact</h4>
                        <div class="impact-stats">
                            <div class="stat">
                                <span class="stat-value">25+</span>
                                <span class="stat-label">Partners</span>
                            </div>
                            <div class="stat">
                                <span class="stat-value">10</span>
                                <span class="stat-label">Projects</span>
                            </div>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 20%"></div>
                        </div>
                    </div>

                    <div class="card-actions">
                        <button class="btn-view glass-button" onclick="openDetails(3)">View Details</button>
                        <button class="btn-join glass-button-primary">Partner With Us</button>
                    </div>
                </div>
            </div>

        </section>

    </div>

    <div id="details-modal" class="modal">
        <div class="modal-content glass-effect">
            <span class="close-modal" onclick="closeDetails()">&times;</span>
            
            <div class="modal-header">
                <h2 id="modal-title">Tree Plantation Drive</h2>
                <p id="modal-sdg">SDG 13 – Climate Action</p>
            </div>

            <div class="modal-body">
                
                <!-- Overview Section -->
                <section class="detail-section glass-card">
                    <h3>Overview</h3>
                    <div class="detail-grid">
                        <div class="detail-item">
                            <strong>Goal:</strong>
                            <p>Plant 1000 trees to offset carbon emissions and improve local biodiversity</p>
                        </div>
                        <div class="detail-item">
                            <strong>Organization:</strong>
                            <p>Uva Wellassa University Environmental Club</p>
                        </div>
                        <div class="detail-item">
                            <strong>Timeline:</strong>
                            <p>January 2026 - March 2026</p>
                        </div>
                    </div>
                </section>

                
                <section class="detail-section glass-card">
                    <h3>Tasks</h3>
                    <div class="task-list">
                        <div class="task-item task-completed">
                            <span class="task-status">✓</span>
                            <span>Site survey and soil testing</span>
                        </div>
                        <div class="task-item task-completed">
                            <span class="task-status">✓</span>
                            <span>Procurement of saplings</span>
                        </div>
                        <div class="task-item task-active">
                            <span class="task-status">⟳</span>
                            <span>Community plantation events</span>
                        </div>
                        <div class="task-item">
                            <span class="task-status">○</span>
                            <span>Monitoring and maintenance</span>
                        </div>
                    </div>
                </section>

                
                <section class="detail-section glass-card">
                    <h3>Resources</h3>
                    <div class="resource-grid">
                        <div class="resource-item">
                            <span class="resource-label">Budget Used</span>
                            <span class="resource-value">$4,200 / $6,500</span>
                        </div>
                        <div class="resource-item">
                            <span class="resource-label">Saplings</span>
                            <span class="resource-value">245 / 1000</span>
                        </div>
                        <div class="resource-item">
                            <span class="resource-label">Volunteers</span>
                            <span class="resource-value">128 active</span>
                        </div>
                    </div>
                </section>

                
                <section class="detail-section glass-card">
                    <h3>Impact Dashboard</h3>
                    <div class="impact-grid">
                        <div class="impact-card glass-mini">
                            <span class="impact-number">320 kg</span>
                            <span class="impact-text">CO₂ Reduced</span>
                        </div>
                        <div class="impact-card glass-mini">
                            <span class="impact-number">245</span>
                            <span class="impact-text">Trees Planted</span>
                        </div>
                        <div class="impact-card glass-mini">
                            <span class="impact-number">128</span>
                            <span class="impact-text">Volunteers</span>
                        </div>
                        <div class="impact-card glass-mini">
                            <span class="impact-number">8</span>
                            <span class="impact-text">Locations</span>
                        </div>
                    </div>
                </section>

                
                <section class="detail-section glass-card">
                    <h3>Partners</h3>
                    <div class="partners-grid">
                        <div class="partner-item">Ministry of Environment</div>
                        <div class="partner-item">Green Lanka Foundation</div>
                        <div class="partner-item">Uva Wellassa University</div>
                        <div class="partner-item">EcoSolutions LK</div>
                    </div>
                </section>

                
                <section class="detail-section glass-card">
                    <h3>Comments & Updates</h3>
                    <div class="comments-section">
                        <div class="comment glass-mini">
                            <div class="comment-header">
                                <strong>Sarah Johnson</strong>
                                <span class="comment-date">2 days ago</span>
                            </div>
                            <p>Great progress! The community response has been overwhelming. Looking forward to the next plantation event.</p>
                        </div>
                        <div class="comment glass-mini">
                            <div class="comment-header">
                                <strong>Raj Patel</strong>
                                <span class="comment-date">5 days ago</span>
                            </div>
                            <p>Excellent initiative! Would love to bring my students from the Environmental Science department to participate.</p>
                        </div>
                    </div>
                    <div class="comment-input-wrapper glass-mini">
                        <textarea class="comment-input glass-input" placeholder="Add your comment..."></textarea>
                        <button class="btn-comment glass-button-primary">Post Comment</button>
                    </div>
                </section>

            </div>
        </div>
    </div>

    <script src="sustainability_initiatives.js"></script>
</body>
</html>