<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>♻ Resource Management - SDG Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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


    </body>
</html>