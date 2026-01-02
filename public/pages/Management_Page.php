<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>♻ Resource Management - SDG Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">



        <style>


* {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #7e22ce 100%);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 30%, rgba(16, 185, 129, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(59, 130, 246, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 50% 50%, rgba(139, 92, 246, 0.05) 0%, transparent 50%);
            z-index: 0;
            animation: bgShift 20s ease-in-out infinite;
        }

        @keyframes bgShift {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
        .main-container {
            position: relative;
            z-index: 1;
            padding: 30px 20px;
            max-width: 1600px;
            margin: 0 auto;
        }.glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            padding: 25px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .glass-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.5s;
        }

        .glass-card:hover::before {
            left: 100%;
        }

        .glass-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .filter-bar {
            margin-bottom: 30px;
            animation: fadeIn 1s ease;
        }

        .filter-select {
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 12px;
            color: #fff;
            padding: 12px 20px;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .filter-select:focus {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.5);
            outline: none;
            color: #fff;
        }

        .filter-select option {
            background: #2a5298;
            color: #fff;
        }
        .btn-add {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            border: none;
            border-radius: 12px;
            color: #fff;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
        }

        .btn-add:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);
            background: linear-gradient(135deg, #059669 0%, #047857 100%);
        }
        .summary-cards {
            margin-bottom: 40px;
            animation: fadeIn 1.2s ease;
        }

        .summary-card {
            position: relative;
            height: 100%;
            animation: scaleIn 0.5s ease;
        }

        .summary-card .icon-wrapper {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2rem;
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .summary-card:hover .icon-wrapper {
            transform: scale(1.1) rotate(5deg);
        }

        .summary-card .value {
            font-size: 2rem;
            font-weight: 700;
            color: #fff;
            text-shadow: 1px 1px 10px rgba(0,0,0,0.2);
            margin-bottom: 5px;
        }

        .summary-card .label {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.1rem;
            font-weight: 500;
        }

        .summary-card .sub-info {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
            margin-top: 10px;
        }


        </style>

    </head>
    <body>
    <div class="floating-elements">
        <i class="fas fa-recycle float-item" style="font-size: 100px; color: #10b981;"></i>
        <i class="fas fa-leaf float-item" style="font-size: 80px; color: #059669;"></i>
        <i class="fas fa-globe float-item" style="font-size: 90px; color: #3b82f6;"></i>
        <i class="fas fa-solar-panel float-item" style="font-size: 85px; color: #8b5cf6;"></i>
    </div>


    <div class="main-container">
        
        <div class="page-header">
            <h1><i class="fas fa-recycle"></i> Resource Management</h1>
            <p class="subtitle">Track • Optimize • Reduce Waste</p>
        </div>

        
        <div class="glass-card filter-bar">
            <div class="row g-3 align-items-center">
                <div class="col-md-3">
                    <select class="form-select filter-select">
                        <option selected>All Initiatives</option>
                        <option>Waste Audit</option>
                        <option>Tree Drive</option>
                        <option>Beach Cleanup</option>
                        <option>Solar Campaign</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select filter-select">
                        <option selected>All Resource Types</option>
                        <option>💰 Financial</option>
                        <option>📦 Materials</option>
                        <option>⚡ Energy</option>
                        <option>⏱ Human Effort</option>
                        <option>🚿 Water</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select filter-select">
                        <option selected>This Month</option>
                        <option>Last Month</option>
                        <option>Last Quarter</option>
                        <option>This Year</option>
                    </select>
                </div>
                <div class="col-md-3 text-end">
                    <button class="btn btn-add" data-bs-toggle="modal" data-bs-target="#addResourceModal">
                        <i class="fas fa-plus me-2"></i>Add Resource
                    </button>
                </div>
            </div>
        </div>

        <
        <div class="alert-banner d-flex align-items-center">
            <i class="fas fa-exclamation-triangle"></i>
            <div class="alert-text">
                <strong>2 Active Alerts:</strong> Fuel usage exceeded allocated limit | Paper consumption at 95% capacity
            </div>
        </div>

        
        <div class="summary-cards">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="glass-card summary-card text-center">
                        <div class="icon-wrapper" style="background: linear-gradient(135deg, #10b981, #059669);">
                            <i class="fas fa-dollar-sign" style="color: #fff;"></i>
                        </div>
                        <div class="value">Rs. 120,000</div>
                        <div class="label">Budget Used</div>
                        <div class="sub-info">of Rs. 150,000 allocated</div>
                        <div class="progress-bar-custom">
                            <div class="progress-fill" style="width: 80%;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="glass-card summary-card text-center">
                        <div class="icon-wrapper" style="background: linear-gradient(135deg, #3b82f6, #2563eb);">
                            <i class="fas fa-box" style="color: #fff;"></i>
                        </div>
                        <div class="value">450 kg</div>
                        <div class="label">Materials Consumed</div>
                        <div class="sub-info">Paper, Plastic, Equipment</div>
                        <div class="progress-bar-custom">
                            <div class="progress-fill warning" style="width: 90%;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="glass-card summary-card text-center">
                        <div class="icon-wrapper" style="background: linear-gradient(135deg, #fbbf24, #f59e0b);">
                            <i class="fas fa-bolt" style="color: #fff;"></i>
                        </div>
                        <div class="value">320 kWh</div>
                        <div class="label">Energy Used</div>
                        <div class="sub-info">Electricity & Fuel</div>
                        <div class="progress-bar-custom">
                            <div class="progress-fill" style="width: 64%;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="glass-card summary-card text-center">
                        <div class="icon-wrapper" style="background: linear-gradient(135deg, #ef4444, #dc2626);">
                            <i class="fas fa-exclamation-circle" style="color: #fff;"></i>
                        </div>
                        <div class="value">2</div>
                        <div class="label">Overuse Alerts</div>
                        <div class="sub-info">Requires attention</div>
                        <div class="progress-bar-custom">
                            <div class="progress-fill danger" style="width: 100%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
            <div class="resource-table-container">
              <div class="glass-card">
                <h4 class="text-white mb-4">Resource Allocation & Usage</h4>
                   <div class="table-responsive">
                      <table class="table table-glass">
                         <thead>
                            <tr>
                                <th>Resource</th>
                                <th>Type</th>
                                <th>Initiative</th>
                                <th>Used</th>
                                <th>Limit</th>
                                <th>Usage %</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="resourceTableBody">
                            <tr>
                                <td><i class="fas fa-file-alt me-2"></i>Paper</td>
                                <td><span class="badge" style="background: rgba(59, 130, 246, 0.2); color: #60a5fa;">📦 Material</span></td>
                                <td>Waste Audit</td>
                                <td>120 kg</td>
                                <td>150 kg</td>
                                <td>80%</td>
                                <td><span class="status-badge status-safe"><i class="fas fa-check-circle"></i>Safe</span></td>
                                <td>
                                    <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
                                    <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
                                </td>
                                </tr>
                                 <tr>
                                <td><i class="fas fa-gas-pump me-2"></i>Fuel</td>
                                <td><span class="badge" style="background: rgba(251, 191, 36, 0.2); color: #fcd34d;">⚡ Energy</span></td>
                                <td>Tree Drive</td>
                                <td>60 L</td>
                                <td>50 L</td>
                                <td>120%</td>
                                <td><span class="status-badge status-danger"><i class="fas fa-exclamation-circle"></i>Overuse</span></td>
                                <td>
                                    <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
                                    <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
                                 </td>
                                 </tr>
                                   <tr>
                                <td><i class="fas fa-money-bill-wave me-2"></i>Funds</td>
                                <td><span class="badge" style="background: rgba(16, 185, 129, 0.2); color: #6ee7b7;">💰 Financial</span></td>
                                <td>Beach Cleanup</td>
                                <td>Rs. 90,000</td>
                                <td>Rs. 100,000</td>
                                <td>90%</td>
                                <td><span class="status-badge status-warning"><i class="fas fa-exclamation-triangle"></i>Warning</span></td>
                                <td>
                                    <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
                                    <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
                                </td>
                                 </tr>
                                 <tr>
                                <td><i class="fas fa-user-clock me-2"></i>Volunteer Hours</td>
                                <td><span class="badge" style="background: rgba(139, 92, 246, 0.2); color: #c4b5fd;">⏱ Human Effort</span></td>
                                <td>Solar Campaign</td>
                                <td>240 hrs</td>
                                <td>300 hrs</td>
                                <td>80%</td>
                                <td><span class="status-badge status-safe"><i class="fas fa-check-circle"></i>Safe</span></td>
                                <td>
                                    <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
                                    <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
                                </td>
                               </tr>
                                <tr>
                                <td><i class="fas fa-tint me-2"></i>Water</td>
                                <td><span class="badge" style="background: rgba(6, 182, 212, 0.2); color: #67e8f9;">🚿 Water</span></td>
                                <td>Community Garden</td>
                                <td>800 L</td>
                                <td>1000 L</td>
                                <td>80%</td>
                                <td><span class="status-badge status-safe"><i class="fas fa-check-circle"></i>Safe</span></td>
                                <td>
                                    <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
                                    <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
                                </td>
                              </tr>
                               <tr>
                                <td><i class="fas fa-bolt me-2"></i>Electricity</td>
                                <td><span class="badge" style="background: rgba(251, 191, 36, 0.2); color: #fcd34d;">⚡ Energy</span></td>
                                <td>Office Operations</td>
                                <td>260 kWh</td>
                                <td>300 kWh</td>
                                <td>87%</td>
                                <td><span class="status-badge status-warning"><i class="fas fa-exclamation-triangle"></i>Warning</span></td>
                                  <td>
                                    <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
                                    <button class="btn-action btn-delete"><i class="fas fa-trash"></i></button>
                                  </td>
                              </tr>
                           </tbody>
                      </table>
                   </div>
               </div>
           </div>

        
        <div class="charts-section">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="glass-card">
                        <h5 class="text-white mb-3">Resource Distribution</h5>
                        <div class="chart-container">
                            <canvas id="pieChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="glass-card">
                        <h5 class="text-white mb-3"><i class="fas fa-chart-line me-2"></i>Usage Over Time</h5>
                        <div class="chart-container">
                            <canvas id="lineChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="tips-container">
            <div class="glass-card">
                <h4 class="text-white mb-4">Smart Sustainability Suggestions</h4>
                <div class="tip-card d-flex align-items-center">
                    <i class="fas fa-file-pdf"></i>
                    <div class="tip-text">
                        <strong>Reduce Paper Usage:</strong> Consider digital documentation to reduce paper usage. Current paper consumption is at 80% capacity.
                    </div>
                   </div>
                   <div class="tip-card d-flex align-items-center">
                    <i class="fas fa-car"></i>
                    <div class="tip-text">
                        <strong>Optimize Transportation:</strong> Fuel usage exceeded limit by 20%. Consider carpooling or using electric vehicles for next event.
                    </div>
                  </div>
                   <div class="tip-card d-flex align-items-center">
                    <i class="fas fa-recycle"></i>
                    <div class="tip-text">
                        <strong>Material Reuse:</strong> Implement a material reuse program to reduce costs by up to 30% and minimize waste.
                    </div>
                    </div>
                     <div class="tip-card d-flex align-items-center">
                    <i class="fas fa-solar-panel"></i>
                    <div class="tip-text">
                        <strong>Renewable Energy:</strong> Electricity usage at 87%. Consider solar panels to reduce dependency on grid power.
                    </div>
                </div>
            </div>
        </div>

        
        <div class="glass-card mt-4">
            <h4 class="text-white mb-3">SDG Alignment</h4>
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="tip-card text-center">
                        <i class="fas fa-recycle" style="font-size: 2rem; margin-bottom: 10px;"></i>
                        <div class="tip-text">
                            <strong>SDG 12:</strong> Responsible Consumption<br>
                            <small>Resource limits & tracking</small>
                        </div>
                    </div> 

                </div>
                <div class="col-md-4">
                    <div class="tip-card text-center">
                        <i class="fas fa-leaf" style="font-size: 2rem; margin-bottom: 10px;"></i>
                        <div class="tip-text">
                            <strong>SDG 13:</strong> Climate Action<br>
                            <small>Energy tracking & reduction</small>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="tip-card text-center">
                        <i class="fas fa-handshake" style="font-size: 2rem; margin-bottom: 10px;"></i>
                        <div class="tip-text">
                            <strong>SDG 17:</strong> Partnerships<br>
                            <small>Shared resources & collaboration</small>
                          </div>
                      </div>
                   </div>
               </div>
           </div>
        </div>

    
    <div class="modal fade" id="addResourceModal" tabindex="-1" aria-labelledby="addResourceModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addResourceModalLabel"><i class="fas fa-plus-circle me-2"></i>Add New Resource</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addResourceForm">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="resourceName" class="form-label">Resource Name</label>
                                <input type="text" class="form-control" id="resourceName" placeholder="e.g., Paper, Fuel, Funds" required>
                            </div>
                            <div class="col-md-6">
                                <label for="resourceType" class="form-label">Resource Type</label>
                                <select class="form-select" id="resourceType" required>
                                    <option value="">Select Type</option>
                                    <option value="Financial">💰 Financial</option>
                                    <option value="Material">📦 Materials</option>
                                    <option value="Energy">⚡ Energy</option>
                                    <option value="Human">⏱ Human Effort</option>
                                    <option value="Water">🚿 Water</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="initiative" class="form-label">Initiative</label>
                                <select class="form-select" id="initiative" required>
                                    <option value="">Select Initiative</option>
                                    <option value="Waste Audit">Waste Audit</option>
                                    <option value="Tree Drive">Tree Drive</option>
                                    <option value="Beach Cleanup">Beach Cleanup</option>
                                    <option value="Solar Campaign">Solar Campaign</option>
                                    <option value="Community Garden">Community Garden</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="allocatedLimit" class="form-label">Allocated Limit</label>
                                <input type="text" class="form-control" id="allocatedLimit" placeholder="e.g., 150 kg, Rs. 100,000" required>
                            </div>
                            <div class="col-md-6">
                                <label for="usedAmount" class="form-label">Used Amount</label>
                                <input type="text" class="form-control" id="usedAmount" placeholder="e.g., 120 kg, Rs. 80,000" required>
                            </div>
                            <div class="col-md-6">
                                <label for="resourceDate" class="form-label">Date</label>
                                <input type="date" class="form-control" id="resourceDate" required>
                            </div>
                            <div class="col-12">
                                <label for="resourceNotes" class="form-label">Notes (Optional)</label>
                                <textarea class="form-control" id="resourceNotes" rows="3" placeholder="Additional information about this resource..."></textarea>
                              </div>
                            </div>
                        </form>
                     </div>
                     <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-add" onclick="addResource()">
                        <i class="fas fa-save me-2"></i>Save Resource
                    </button>
                </div>
            </div>
        </div>
    </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <script>

document.addEventListener('DOMContentLoaded', function() {
           
                  const pieCtx = document.getElementById('pieChart').getContext('2d');
                  const pieChart = new Chart(pieCtx, {
                   type: 'doughnut',
                   data: {
                   labels: ['Financial', 'Materials', 'Energy', 'Human Effort', 'Water'],
                   datasets: [{
                       data: [120000, 450, 320, 240, 800],
                       backgroundColor: [
                           'rgba(16, 185, 129, 0.8)',
                           'rgba(59, 130, 246, 0.8)',
                           'rgba(251, 191, 36, 0.8)',
                           'rgba(139, 92, 246, 0.8)',
                           'rgba(6, 182, 212, 0.8)'
                       ],
                       borderColor: [
                           'rgba(16, 185, 129, 1)',
                           'rgba(59, 130, 246, 1)',
                           'rgba(251, 191, 36, 1)',
                           'rgba(139, 92, 246, 1)',
                           'rgba(6, 182, 212, 1)'
                       ],
                       borderWidth: 2
                   }]
               },
                      options: {
                      responsive: true,
                      maintainAspectRatio: false,
                      plugins: {
                       legend: {
                           position: 'bottom',
                           labels: {
                               color: '#fff',
                               padding: 15,
                               font: {
                                   size: 12
                               }
                           }
                       },
                       tooltip: {
                           backgroundColor: 'rgba(0, 0, 0, 0.8)',
                           titleColor: '#fff',
                           bodyColor: '#fff',
                           borderColor: 'rgba(255, 255, 255, 0.2)',
                           borderWidth: 1
                       }
                   }
               }
           });


                 function addResource() {
                 const form = document.getElementById('addResourceForm');
                 if (form.checkValidity()) {
                
                const resourceName = document.getElementById('resourceName').value;
                const resourceType = document.getElementById('resourceType').value;
                const initiative = document.getElementById('initiative').value;
                const allocatedLimit = document.getElementById('allocatedLimit').value;
                const usedAmount = document.getElementById('usedAmount').value;
                
                
                const usagePercent = Math.floor(Math.random() * 100);
                
               
                     let statusClass, statusIcon, statusText;
                    if (usagePercent < 80) {
                    statusClass = 'status-safe';
                    statusIcon = 'fas fa-check-circle';
                    statusText = 'Safe';
                    } else if (usagePercent < 100) {
                    statusClass = 'status-warning';
                    statusIcon = 'fas fa-exclamation-triangle';
                    statusText = 'Warning';
                     } else {
                    statusClass = 'status-danger';
                    statusIcon = 'fas fa-exclamation-circle';
                    statusText = 'Overuse';
                     }

               
                     const typeIcons = {
                    'Financial': '💰',
                    'Material': '📦',
                    'Energy': '⚡',
                    'Human': '⏱',
                    'Water': '🚿'
                      };

                
                          const tableBody = document.getElementById('resourceTableBody');
                         const newRow = `
                        <tr style="animation: fadeIn 0.5s ease;">
                        <td><i class="fas fa-cube me-2"></i>${resourceName}</td>
                        <td><span class="badge" style="background: rgba(59, 130, 246, 0.2); color: #60a5fa;">${typeIcons[resourceType]} ${resourceType}</span></td>
                        <td>${initiative}</td>
                        <td>${usedAmount}</td>
                        <td>${allocatedLimit}</td>
                        <td>${usagePercent}%</td>
                        <td><span class="status-badge ${statusClass}"><i class="${statusIcon}"></i>${statusText}</span></td>
                        <td>
                            <button class="btn-action btn-edit"><i class="fas fa-edit"></i></button>
                            <button class="btn-action btn-delete" onclick="deleteRow(this)"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                `;
                tableBody.insertAdjacentHTML('beforeend', newRow);

                
                form.reset();
                const modal = bootstrap.Modal.getInstance(document.getElementById('addResourceModal'));
                modal.hide();

                
                showToast('Resource added successfully!', 'success');
            } else {
                form.reportValidity();
            }
        } function deleteRow(button) {
            if (confirm('Are you sure you want to delete this resource?')) {
                const row = button.closest('tr');
                row.style.animation = 'fadeOut 0.5s ease';
                setTimeout(() => row.remove(), 500);
                showToast('Resource deleted successfully!', 'danger');
            }
        } function showToast(message, type) {
            const toast = document.createElement('div');
            toast.className = `alert alert-${type}`;
            toast.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                z-index: 9999;
                background: rgba(255, 255, 255, 0.2);
                backdrop-filter: blur(15px);
                border: 1px solid rgba(255, 255, 255, 0.3);
                color: #fff;
                padding: 15px 25px;
                border-radius: 12px;
                animation: slideInRight 0.5s ease;
            `;
            toast.textContent = message;
            document.body.appendChild(toast);
            setTimeout(() => {
                toast.style.animation = 'slideOutRight 0.5s ease';
                setTimeout(() => toast.remove(), 500);
            }, 3000);
        }function animateProgressBars() {
            const progressBars = document.querySelectorAll('.progress-fill');
            progressBars.forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0';
                setTimeout(() => {
                    bar.style.width = width;
                }, 100);
            });
        } function observeElements() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.glass-card').forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                card.style.transition = 'all 0.6s ease';
                observer.observe(card);
            });
        }
        const style = document.createElement('style');
        style.textContent = `
            @keyframes slideInRight {
                from { transform: translateX(100%); opacity: 0; }
                to { transform: translateX(0); opacity: 1; }
            }
            @keyframes slideOutRight {
                from { transform: translateX(0); opacity: 1; }
                to { transform: translateX(100%); opacity: 0; }
            }
            @keyframes fadeOut {
                from { opacity: 1; }
                to { opacity: 0; }
            }
        `;
        document.head.appendChild(style);



        
    </script>   

    </body>
</html>