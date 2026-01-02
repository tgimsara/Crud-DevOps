 <?php
    require_once '../config.php'; ?>

 <!doctype html>
 <html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    


   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    
    <link rel="stylesheet" href="css/login.css">

    <title>Login</title>
  </head>
  <body>
    
    <div class="main-container">
      <div class="container">
            <div class="row justify-content-center align-items-center min-vh-100">
                <div class="col-12 col-md-10 col-lg-8 col-xl-6">
                    <div class="glass-card">
                        <div class="card-body p-4 p-md-5">
                            <div class="text-center mb-4">
                                <h2 class="welcome-text">Register Now </h2>
                                <p class="subtitle"> Create New account </p>
                            </div>

                            <form id="loginForm" class="auth-form" style="display: block;">
                                <div class="mb-3">
                                    <label for="Full name" class="form-label">Full Name</label>
                                    <div  class="input-group">
                                        <span class="input-icon">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                        <input  type="name"  class="form-control glass-input" id="name" name="email" placeholder="Enter your full name" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="loginEmail" class="form-label">Email Address</label>
                                    <div  class="input-group">
                                        <span class="input-icon">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                        <input  type="email"  class="form-control glass-input" id="loginEmail" name="email" placeholder="Enter your email" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="loginPassword" class="form-label">Password</label>
                                    <div class="input-group">
                                        <span class="input-icon">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                        <input type="password" class="form-control glass-input" id="loginPassword" name="password" placeholder="Enter your password" required>
                                        <span class="password-toggle" onclick="togglePassword('loginPassword')">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                                

                                <div class="mb-3">
                                    <label for="ConfirmPassword" class="form-label">Confirm Password</label>
                                    <div class="input-group">
                                        <span class="input-icon">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                        <input type="password" class="form-control glass-input" id="newPassword" name="password" placeholder="confirm your password" required>
                                        <span class="password-toggle" onclick="togglePassword('loginPassword')">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                    </div>
                                </div>
                                

                                
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">
                                            Remember me
                                        </label>
                                    </div>
                                    
                                </div>

                                 <button type="submit" class="btn btn-primary glass-btn w-100 mb-3">
                                     <i class="fas fa-sign-in-alt me-2"></i> Sign Up
                                </button>
                                
                                <div class="divider">
                                     <span> OR </span>
                                </div>
                                
                                <button type="button" class="btn btn-google glass-btn w-100 mb-3" onclick="googleLogin()">
                                     <i class="fab fa-google me-2"></i> Continue with Google
                                </button>
                                <div class="text-center mt-4">
                                    <p class="switch-text"> Already have an account? 
                                        <a href="login.php" onclick="switchForm('login')" class="switch-link">Sign In</a>
                                    </p>
                                </div>
                                
                                
                            </form>

                            <form id="signupForm" class="auth-form" style="display: none;">
                                <div class="mb-3">
                                    <label for="signupName" class="form-label">Full Name</label>
                                    <div class="input-group">
                                        <span class="input-icon">
                                            <i class="fas fa-user"></i>
                                        </span>
                                         <input type="text" class="form-control glass-input" id="signupName" name="name" placeholder="Enter your full name" required>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="signupEmail" class="form-label">Email Address</label>
                                    <div class="input-group">
                                        <span class="input-icon">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                         <input type="email" class="form-control glass-input" id="signupEmail" name="email" placeholder="Enter your email" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="signupPassword" class="form-label">Password</label>
                                    <div class="input-group">
                                        <span class="input-icon">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                        <input type="password" class="form-control glass-input" id="signupPassword" name="password" placeholder="Create a password" required>
                                        <span class="password-toggle" onclick="togglePassword('signupPassword')">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="signupPassword" class="form-label">Password</label>
                                    <div class="input-group">
                                        <span class="input-icon">
                                            <i class="fas fa-lock"></i>
                                        </span>
                                        <input type="password" class="form-control glass-input" id="signupPassword" name="password" placeholder="Create a password" required>
                                        <span class="password-toggle" onclick="togglePassword('signupPassword')">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary glass-btn w-100 mb-3">
                                    <i class="fas fa-user-plus me-2"></i> Create Account
                                </button>
                                
                                <div class="divider">
                                    <span> OR </span>
                                </div>
                                
                                <button type="button" class="btn btn-google glass-btn w-100 mb-3" onclick="googleLogin()">
                                    <i class="fab fa-google me-2"></i> Sign up with Google
                                </button>
                                
                                <div class="text-center mt-4">
                                    <p class="switch-text"> Already have an account? 
                                        <a href="#" onclick="switchForm('login')" class="switch-link">Sign In</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                        
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <script src="js/login.js"></script>
     <script>
        // Switch between login and signup forms
function switchForm(formType) {
    const loginForm = document.getElementById('loginForm');
    const signupForm = document.getElementById('signupForm');
    
    if (formType === 'signup') {
        loginForm.style.display = 'none';
        signupForm.style.display = 'block';
    } else {
        loginForm.style.display = 'block';
        signupForm.style.display = 'none';
    }
}

// Login Form Submit
document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    
    fetch('login_process.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert(data.message);
            window.location.href = 'dashboard.php'; // redirect to dashboard
        } else {
            alert(data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred. Please try again.');
    });
});

// Signup Form Submit
document.getElementById('signupForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const name = document.getElementById('signupName').value;
    const email = document.getElementById('signupEmail').value;
    const password = document.getElementById('signupPassword').value;
    
    // Basic validation
    if (name.trim() === '' || email.trim() === '' || password.trim() === '') {
        alert('Please fill all fields');
        return;
    }
    
    const formData = new FormData(this);
    
    fetch('signup_process.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
        if (data.success) {
            // Clear form
            document.getElementById('signupForm').reset();
            // Switch to login form
            switchForm('login');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred. Please try again.');
    });
});

// Toggle password visibility
function togglePassword(fieldId) {
    const field = document.getElementById(fieldId);
    const icon = field.parentElement.querySelector('.password-toggle i');
    
    if (field.type === 'password') {
        field.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        field.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
}

// Google login placeholder
function googleLogin() {
    alert('Google login feature coming soon!');
}
     </script>
   
  </body>
</html>
