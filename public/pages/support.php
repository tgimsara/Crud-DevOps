<?php
session_start();

include_once '../../config.php';

// Initialize variables
$success_message = '';
$error_message = '';
$tickets = [];

// Check if user is logged in (you can modify this based on your auth system)
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 1; // Default to 1 for demo
$user_name = isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'Demo User';
$user_email = isset($_SESSION['user_email']) ? $_SESSION['user_email'] : 'demo@example.com';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_ticket'])) {
    $subject = $conn->real_escape_string(trim($_POST['subject']));
    $category = $conn->real_escape_string($_POST['category']);
    $priority = $conn->real_escape_string($_POST['priority']);
    $description = $conn->real_escape_string(trim($_POST['description']));
    
    // Validation
    if (empty($subject) || empty($description)) {
        $error_message = 'Subject and description are required.';
    } else {
        // Insert ticket
        $sql = "INSERT INTO support_tickets (user_id, subject, category, priority, description, status, created_at) 
                VALUES (?, ?, ?, ?, ?, 'open', NOW())";
        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("issss", $user_id, $subject, $category, $priority, $description);
        
        if ($stmt->execute()) {
            $ticket_id = $stmt->insert_id;
            $success_message = "Support ticket #$ticket_id created successfully! We'll respond within 24-48 hours.";
        } else {
            $error_message = 'Error creating ticket. Please try again.';
        }
        $stmt->close();
    }
}

// Handle ticket status update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['close_ticket'])) {
    $ticket_id = (int)$_POST['ticket_id'];
    $sql = "UPDATE support_tickets SET status = 'closed', updated_at = NOW() WHERE id = ? AND user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $ticket_id, $user_id);
    $stmt->execute();
    $stmt->close();
}

// Fetch user's tickets
$sql = "SELECT * FROM support_tickets WHERE user_id = ? ORDER BY created_at DESC LIMIT 10";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    $tickets[] = $row;
}
$stmt->close();

// Create table if not exists (for demo purposes - remove in production)
$create_table = "CREATE TABLE IF NOT EXISTS support_tickets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    subject VARCHAR(255) NOT NULL,
    category VARCHAR(50) NOT NULL,
    priority VARCHAR(20) NOT NULL,
    description TEXT NOT NULL,
    status VARCHAR(20) DEFAULT 'open',
    created_at DATETIME NOT NULL,
    updated_at DATETIME,
    INDEX(user_id),
    INDEX(status)
)";
$conn->query($create_table);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Center - Sustainability Platform</title>
    <link rel="stylesheet" href="../css/support.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="glass-container">
        <header class="header">
            <div class="header-content">
                <div class="logo-section">
                    <svg class="logo-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M12 6v6l4 2"/>
                    </svg>
                    <h1>Support Center</h1>
                </div>
                <nav class="nav-links">
                    <a href="dashboard.php">Dashboard</a>
                    <a href="initiatives.php">Initiatives</a>
                    <a href="support.php" class="active">Support</a>
                </nav>
            </div>
        </header>

        <main class="main-content">
            <?php if ($success_message): ?>
            <div class="alert alert-success">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                    <polyline points="22 4 12 14.01 9 11.01"/>
                </svg>
                <span><?php echo htmlspecialchars($success_message); ?></span>
            </div>
            <?php endif; ?>

            <?php if ($error_message): ?>
            <div class="alert alert-error">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                    <circle cx="12" cy="12" r="10"/>
                    <line x1="15" y1="9" x2="9" y2="15"/>
                    <line x1="9" y1="9" x2="15" y2="15"/>
                </svg>
                <span><?php echo htmlspecialchars($error_message); ?></span>
            </div>
            <?php endif; ?>

            <div class="content-grid">
                <!-- Submit Ticket Form -->
                <section class="glass-card ticket-form-section">
                    <div class="card-header">
                        <h2>Submit Support Ticket</h2>
                        <p>Need help? Submit a ticket and our team will assist you.</p>
                    </div>
                    
                    <form method="POST" class="ticket-form" id="ticketForm">
                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <input type="text" id="subject" name="subject" required 
                                   placeholder="Brief description of your issue">
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="category">Category *</label>
                                <select id="category" name="category" required>
                                    <option value="">Select category</option>
                                    <option value="technical">Technical Issue</option>
                                    <option value="account">Account Management</option>
                                    <option value="initiative">Initiative Help</option>
                                    <option value="resources">Resource Tracking</option>
                                    <option value="reporting">Impact Reporting</option>
                                    <option value="billing">Billing & Subscription</option>
                                    <option value="feature">Feature Request</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="priority">Priority *</label>
                                <select id="priority" name="priority" required>
                                    <option value="">Select priority</option>
                                    <option value="low">Low</option>
                                    <option value="medium" selected>Medium</option>
                                    <option value="high">High</option>
                                    <option value="urgent">Urgent</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description">Description *</label>
                            <textarea id="description" name="description" rows="6" required 
                                      placeholder="Please provide detailed information about your issue or question..."></textarea>
                            <small>Be as specific as possible to help us resolve your issue quickly.</small>
                        </div>

                        <button type="submit" name="submit_ticket" class="btn btn-primary">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M22 2L11 13"/>
                                <path d="M22 2l-7 20-4-9-9-4 20-7z"/>
                            </svg>
                            Submit Ticket
                        </button>
                    </form>
                </section>

                <!-- Quick Help Section -->
                <aside class="sidebar">
                    <section class="glass-card help-resources">
                        <h3>Quick Help</h3>
                        <div class="help-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <circle cx="12" cy="12" r="10"/>
                                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
                                <line x1="12" y1="17" x2="12.01" y2="17"/>
                            </svg>
                            <div>
                                <h4>FAQ</h4>
                                <p>Find answers to common questions</p>
                            </div>
                        </div>
                        <div class="help-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
                                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
                            </svg>
                            <div>
                                <h4>Documentation</h4>
                                <p>Comprehensive guides and tutorials</p>
                            </div>
                        </div>
                        <div class="help-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                            </svg>
                            <div>
                                <h4>Live Chat</h4>
                                <p>Chat with our support team</p>
                            </div>
                        </div>
                    </section>

                    <section class="glass-card contact-info">
                        <h3>Contact Information</h3>
                        <div class="contact-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                            <span>support@sustainableplatform.org</span>
                        </div>
                        <div class="contact-item">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                            <span>+1 (555) 123-4567</span>
                        </div>
                        <p class="response-time">Average response time: 4-6 hours</p>
                    </section>
                </aside>
            </div>

            <!-- My Tickets Section -->
            <section class="glass-card tickets-list">
                <div class="card-header">
                    <h2>My Support Tickets</h2>
                    <div class="ticket-stats">
                        <span class="stat">
                            <?php echo count(array_filter($tickets, fn($t) => $t['status'] === 'open')); ?> Open
                        </span>
                        <span class="stat">
                            <?php echo count(array_filter($tickets, fn($t) => $t['status'] === 'closed')); ?> Closed
                        </span>
                    </div>
                </div>

                <?php if (empty($tickets)): ?>
                <div class="empty-state">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                        <line x1="12" y1="18" x2="12" y2="12"/>
                        <line x1="9" y1="15" x2="15" y2="15"/>
                    </svg>
                    <p>No support tickets yet</p>
                </div>
                <?php else: ?>
                <div class="tickets-table">
                    <?php foreach ($tickets as $ticket): ?>
                    <div class="ticket-item">
                        <div class="ticket-header">
                            <div class="ticket-info">
                                <h4>#<?php echo $ticket['id']; ?> - <?php echo htmlspecialchars($ticket['subject']); ?></h4>
                                <div class="ticket-meta">
                                    <span class="badge badge-<?php echo $ticket['category']; ?>">
                                        <?php echo ucfirst($ticket['category']); ?>
                                    </span>
                                    <span class="badge badge-priority-<?php echo $ticket['priority']; ?>">
                                        <?php echo ucfirst($ticket['priority']); ?>
                                    </span>
                                    <span class="badge badge-status-<?php echo $ticket['status']; ?>">
                                        <?php echo ucfirst($ticket['status']); ?>
                                    </span>
                                    <span class="date">
                                        <?php echo date('M d, Y', strtotime($ticket['created_at'])); ?>
                                    </span>
                                </div>
                            </div>
                            <?php if ($ticket['status'] === 'open'): ?>
                            <form method="POST" style="display: inline;">
                                <input type="hidden" name="ticket_id" value="<?php echo $ticket['id']; ?>">
                                <button type="submit" name="close_ticket" class="btn btn-small">Close</button>
                            </form>
                            <?php endif; ?>
                        </div>
                        <p class="ticket-description"><?php echo nl2br(htmlspecialchars($ticket['description'])); ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </section>
        </main>

        <footer class="footer">
            <div class="footer-content">
                <p>&copy; 2026 Sustainability Platform. Supporting SDGs 12, 13 & 17.</p>
                <div class="footer-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Contact</a>
                </div>
            </div>
        </footer>
    </div>

    <script>
        // Form validation and enhancements
        document.getElementById('ticketForm').addEventListener('submit', function(e) {
            const subject = document.getElementById('subject').value.trim();
            const description = document.getElementById('description').value.trim();
            
            if (subject.length < 5) {
                e.preventDefault();
                alert('Subject must be at least 5 characters long.');
                return false;
            }
            
            if (description.length < 20) {
                e.preventDefault();
                alert('Please provide a more detailed description (at least 20 characters).');
                return false;
            }
        });

        // Auto-hide alerts after 5 seconds
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(alert => {
            setTimeout(() => {
                alert.style.opacity = '0';
                setTimeout(() => alert.remove(), 300);
            }, 5000);
        });

        // Character counter for description
        const descriptionField = document.getElementById('description');
        const counterDiv = document.createElement('div');
        counterDiv.className = 'char-counter';
        descriptionField.parentNode.appendChild(counterDiv);

        descriptionField.addEventListener('input', function() {
            const count = this.value.length;
            counterDiv.textContent = `${count} characters`;
            counterDiv.style.color = count < 20 ? '#e74c3c' : '#27ae60';
        });

        // Smooth scroll for navigation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });

        // Priority indicator update
        const prioritySelect = document.getElementById('priority');
        prioritySelect.addEventListener('change', function() {
            this.className = `priority-${this.value}`;
        });
    </script>
</body>
</html>

<?php $conn->close(); ?>