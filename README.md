# 🌱 Crud-DevOps - HackMS 26 Hackathon Project

[![Azure Deployment](https://img.shields.io/badge/Azure-Deployed-success)](https://cruddevopsteam-hnbedkgub5dka5hf.centralindia-01.azurewebsites.net/)
[![PHP Version](https://img.shields.io/badge/PHP-8.3-blue)](https://www.php.net/)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

> A full-stack CRUD application demonstrating modern DevOps practices, featuring industry-ready collaborative workflows, CI/CD pipelines, containerization, and cloud deployment to ensure scalability, security, and automated software delivery.

## 🚀 Live Demo

**Production Environment:** [https://cruddevopsteam-hnbedkgub5dka5hf.centralindia-01.azurewebsites.net/](https://cruddevopsteam-hnbedkgub5dka5hf.centralindia-01.azurewebsites.net/)

## 📋 Table of Contents

- [Overview](#overview)
- [Team Members](#team-members)
- [Features](#features)
- [Technology Stack](#technology-stack)
- [Project Structure](#project-structure)
- [DevOps Practices](#devops-practices)
- [Getting Started](#getting-started)
- [Deployment](#deployment)
- [CI/CD Pipeline](#cicd-pipeline)
- [Database Schema](#database-schema)
- [Contributing](#contributing)
- [License](#license)

## 🎯 Overview

**Crud-DevOps** is a comprehensive full-stack web application built for the **HackMS 26 Hackathon**. The project showcases a modern sustainability management platform with complete CRUD (Create, Read, Update, Delete) operations, integrated with industry-standard DevOps practices.

### Key Highlights

- ✅ **Full-Stack CRUD Operations** - Complete user and content management system
- ✅ **Modern UI/UX** - Glassmorphism design with responsive layouts
- ✅ **User Authentication** - Secure login/signup system with session management
- ✅ **Admin Dashboard** - Comprehensive admin panel for content and user management
- ✅ **Sustainability Tracking** - Initiatives, tree planting, and carbon reduction monitoring
- ✅ **CI/CD Integration** - Automated build and deployment pipeline
- ✅ **Cloud Deployment** - Hosted on Microsoft Azure Web Apps
- ✅ **Industry Best Practices** - Version control, automated testing, and deployment workflows

## 👥 Team Members

This project was developed by a team of 5 members for the **HackMS 26 Hackathon**:

| Role | Responsibilities |
|------|----------------|
| **Team Member 1** | Backend Development, Database Design |
| **Team Member 2** | Frontend Development, UI/UX Design |
| **Team Member 3** | DevOps Engineering, CI/CD Pipeline |
| **Team Member 4** | Full-Stack Development, Feature Implementation |
| **Team Member 5** | Quality Assurance, Testing, Documentation |

*Note: Team members collaborated using industry-standard workflows including Git branching strategies, code reviews, and agile methodologies.*

## ✨ Features

### 🔐 Authentication & Authorization
- User registration and login system
- Secure session management
- Role-based access control (Admin/User)
- Password validation and security

### 👤 User Management
- User profile management
- User dashboard with personalized content
- User activity tracking
- Profile customization

### 🛠️ Admin Panel
- **User Management** - View, edit, and manage all users
- **Content Management** - Create, update, and delete content
- **Messages Management** - Handle user inquiries and messages
- **Analytics Dashboard** - Monitor system activity and statistics

### 🌍 Sustainability Features
- **Sustainability Initiatives** - Track and manage SDG-aligned projects
- **Tree Planting Management** - Organize and monitor tree plantation drives
- **Carbon Reduction Tracking** - Measure and visualize carbon footprint reduction
- **Partnership Management** - Manage collaborations and partnerships
- **Achievement Tracking** - Monitor progress and milestones

### 🎨 User Interface
- Modern glassmorphism design
- Fully responsive layout (mobile, tablet, desktop)
- Smooth animations and transitions
- Interactive dropdown menus
- Modal dialogs for detailed views
- Real-time form validation

### 📱 Pages & Modules
- **Home Page** - Landing page with project overview
- **About** - Project information and team details
- **Contact** - Contact form and communication
- **Login/Signup** - Authentication pages
- **User Dashboard** - Personalized user interface
- **Admin Dashboard** - Administrative control panel
- **Sustainability Initiatives** - SDG project tracking
- **Plant Trees** - Tree plantation management
- **Carbon Reduction** - Environmental impact tracking
- **Partners** - Collaboration management
- **Achievements** - Milestone tracking

## 🛠️ Technology Stack

### Frontend
- **HTML5** - Semantic markup
- **CSS3** - Modern styling with glassmorphism effects
- **JavaScript (ES6+)** - Interactive functionality
- **Bootstrap 5** - Responsive framework
- **Bootstrap Icons** - Icon library

### Backend
- **PHP 8.3** - Server-side scripting
- **MySQL** - Relational database management
- **MySQLi** - Database connectivity

### DevOps & Infrastructure
- **Git** - Version control
- **GitHub Actions** - CI/CD automation
- **Microsoft Azure** - Cloud hosting platform
- **Azure Web Apps** - Application hosting service
- **Ubuntu** - CI/CD runner environment

### Development Tools
- **VS Code / Cursor** - Code editor
- **Git** - Version control system
- **Composer** - PHP dependency management (if applicable)

## 📁 Project Structure

```
Crud-DevOps/
├── .github/
│   └── workflows/
│       └── main_cruddevopsteam.yml    # CI/CD pipeline configuration
├── config.php                          # Database configuration
├── public/
│   ├── admin/                          # Admin panel
│   │   ├── includes/
│   │   │   ├── header.php
│   │   │   ├── footer.php
│   │   │   └── sidebar.php
│   │   ├── index.php                   # Admin dashboard
│   │   ├── users.php                   # User management
│   │   ├── content.php                 # Content management
│   │   └── messages.php                # Messages management
│   ├── assets/
│   │   └── documents/                  # Document storage
│   ├── css/                            # Stylesheets
│   │   ├── admin.css
│   │   ├── header.css
│   │   ├── footer.css
│   │   ├── login.css
│   │   ├── style.css
│   │   ├── responsive.css
│   │   └── sustainability_initiatives.css
│   ├── database/
│   │   ├── db_schema_only.sql          # Database schema
│   │   └── db_with_inserts.sql         # Database with sample data
│   ├── images/
│   │   ├── uploads/                    # User uploaded images
│   │   └── pageimages/                 # Page images
│   ├── includes/
│   │   ├── header.php                  # Site header
│   │   ├── footer.php                  # Site footer
│   │   └── functions.php               # Utility functions
│   ├── js/                             # JavaScript files
│   │   ├── admin.js
│   │   ├── login.js
│   │   ├── main.js
│   │   ├── form-validation.js
│   │   └── sustainability_initiatives.js
│   ├── pages/                          # Feature pages
│   │   ├── sustainability_initiatives.php
│   │   ├── planttrees.php
│   │   ├── carbonreduction.php
│   │   ├── partners.php
│   │   ├── achievement.php
│   │   └── Management_Page.php
│   ├── index.php                       # Home page
│   ├── login.php                       # Login page
│   ├── login_process.php               # Login handler
│   ├── signup.php                      # Registration page
│   ├── signup_process.php              # Registration handler
│   ├── logout.php                      # Logout handler
│   ├── user.php                        # User dashboard
│   ├── about.php                       # About page
│   ├── contact.php                     # Contact page
│   └── solution.php                    # Solutions page
└── README.md                           # Project documentation
```

## 🔄 DevOps Practices

### Version Control
- **Git Workflow** - Feature branches, pull requests, and code reviews
- **Branching Strategy** - Main branch for production, feature branches for development
- **Commit Standards** - Conventional commit messages

### Continuous Integration/Continuous Deployment (CI/CD)
- **Automated Builds** - PHP 8.3 setup and dependency installation
- **Automated Testing** - Code validation and quality checks
- **Automated Deployment** - Direct deployment to Azure Web Apps
- **Environment Management** - Separate staging and production environments

### Cloud Deployment
- **Platform** - Microsoft Azure Web Apps
- **Region** - Central India
- **Auto-scaling** - Configured for traffic management
- **SSL/HTTPS** - Secure connections enabled

### Security Practices
- **Environment Variables** - Sensitive data stored in Azure secrets
- **SQL Injection Prevention** - Prepared statements (recommended for production)
- **Session Management** - Secure session handling
- **Input Validation** - Client and server-side validation

### Monitoring & Logging
- **Application Insights** - Azure monitoring integration
- **Error Tracking** - Comprehensive error handling
- **Performance Monitoring** - Application performance tracking

## 🚀 Getting Started

### Prerequisites

- **PHP 8.3** or higher
- **MySQL** 5.7+ or MariaDB 10.3+
- **Web Server** (Apache/Nginx) or PHP built-in server
- **Git** for version control
- **Composer** (optional, for dependency management)

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/your-username/Crud-DevOps.git
   cd Crud-DevOps
   ```

2. **Configure the database**
   - Create a MySQL database named `crud_devops_database`
   - Import the database schema:
     ```bash
     mysql -u root -p crud_devops_database < public/database/db_schema_only.sql
     ```
   - Or import with sample data:
     ```bash
     mysql -u root -p crud_devops_database < public/database/db_with_inserts.sql
     ```

3. **Update configuration**
   - Edit `config.php` with your database credentials:
     ```php
     $host = "localhost";
     $user = "your_username";
     $password = "your_password";
     $database = "crud_devops_database";
     ```

4. **Start the development server**
   ```bash
   cd public
   php -S localhost:8000
   ```

5. **Access the application**
   - Open your browser and navigate to `http://localhost:8000`
   - Register a new account or use existing credentials

### Default Credentials

*Note: Change default credentials in production environment*

- **Admin Access**: Configure through database or contact team
- **User Access**: Register through signup page

## 📦 Deployment

### Azure Web Apps Deployment

The application is configured for automatic deployment to Azure Web Apps via GitHub Actions.

#### Manual Deployment Steps

1. **Create Azure Web App**
   - Log in to Azure Portal
   - Create a new Web App resource
   - Select PHP 8.3 runtime stack
   - Choose Central India region

2. **Configure Database**
   - Set up Azure Database for MySQL
   - Update connection string in Azure App Settings
   - Configure environment variables

3. **Deploy via GitHub Actions**
   - Push code to `main` branch
   - GitHub Actions will automatically:
     - Build the application
     - Run tests
     - Deploy to Azure

4. **Configure Secrets**
   - Add Azure credentials to GitHub Secrets:
     - `AZUREAPPSERVICE_CLIENTID`
     - `AZUREAPPSERVICE_TENANTID`
     - `AZUREAPPSERVICE_SUBSCRIPTIONID`

### Environment Variables

Configure the following in Azure App Settings:
- Database connection strings
- Application secrets
- API keys (if applicable)

## 🔄 CI/CD Pipeline

### GitHub Actions Workflow

The project uses GitHub Actions for automated CI/CD. The workflow file is located at `.github/workflows/main_cruddevopsteam.yml`.

#### Pipeline Stages

1. **Build Stage**
   - Checkout code
   - Setup PHP 8.3 environment
   - Validate and install Composer dependencies
   - Upload build artifacts

2. **Deploy Stage**
   - Download build artifacts
   - Authenticate with Azure
   - Deploy to Azure Web App
   - Verify deployment

#### Trigger Events

- **Push to main branch** - Automatic deployment
- **Manual trigger** - Workflow dispatch option

### Pipeline Features

- ✅ Automated PHP setup
- ✅ Dependency management
- ✅ Artifact handling
- ✅ Azure authentication
- ✅ Zero-downtime deployment

## 🗄️ Database Schema

### Core Tables

- **users** - User accounts and authentication
- **content** - Dynamic content management
- **messages** - User inquiries and messages
- **initiatives** - Sustainability initiatives tracking
- **trees** - Tree planting records
- **carbon_reduction** - Carbon footprint data

*For detailed schema, refer to `public/database/db_schema_only.sql`*

## 🤝 Contributing

This project was developed for the HackMS 26 Hackathon. For contributions:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

### Code Standards

- Follow PSR-12 coding standards for PHP
- Use meaningful variable and function names
- Add comments for complex logic
- Maintain consistent indentation
- Write self-documenting code

## 📝 License

This project is licensed under the MIT License - see the LICENSE file for details.

## 🙏 Acknowledgments

- **HackMS 26** - For organizing the hackathon
- **Microsoft Azure** - For providing cloud infrastructure
- **Open Source Community** - For amazing tools and libraries
- **Team Members** - For their dedication and hard work

## 📧 Contact & Support

- **Live Application**: [https://cruddevopsteam-hnbedkgub5dka5hf.centralindia-01.azurewebsites.net/](https://cruddevopsteam-hnbedkgub5dka5hf.centralindia-01.azurewebsites.net/)
- **Issues**: Report issues via GitHub Issues
- **Team**: Contact team members through the application's contact page

## 📊 Project Statistics

- **Lines of Code**: ~10,000+
- **Technologies Used**: 10+
- **Features Implemented**: 15+
- **Deployment Time**: < 5 minutes
- **Team Size**: 5 members
- **Development Time**: HackMS 26 Hackathon duration

---

<div align="center">

**Built with ❤️ by the Crud-DevOps Team for HackMS 26**

[![Azure](https://img.shields.io/badge/Azure-0089D6?style=for-the-badge&logo=microsoft-azure&logoColor=white)](https://azure.microsoft.com/)
[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![GitHub Actions](https://img.shields.io/badge/GitHub_Actions-2088FF?style=for-the-badge&logo=github-actions&logoColor=white)](https://github.com/features/actions)

</div>
