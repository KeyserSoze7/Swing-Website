<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Smart Wireless Inter-Networking Research Group at IIIT Kottayam" />
        <meta name="author" content="SWING Research Group" />
        <title>SWING @ IIIT Kottayam</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        
        <!-- Bootstrap and jQuery -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        
        <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Lato', sans-serif;
            line-height: 1.6;
        }
        
        /* Navigation Styles */
        .navbar-custom {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
            padding: 15px 0;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }
        
        .navbar-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .logo-section {
            display: flex;
            align-items: center;
        }
        
        .logo-section img {
            height: 50px;
            width: auto;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }
        
        .logo-section img:hover {
            transform: scale(1.05);
        }
        
        .nav-menu {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
            gap: 5px;
        }
        
        .nav-item {
            position: relative;
        }
        
        .nav-link {
            display: block;
            padding: 12px 18px;
            color: #333;
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            border-radius: 25px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .nav-link:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            transition: left 0.3s ease;
            z-index: -1;
        }
        
        .nav-link:hover:before,
        .nav-link.active:before {
            left: 0;
        }
        
        .nav-link:hover,
        .nav-link.active {
            color: white;
            transform: translateY(-2px);
        }
        
        .mobile-toggle {
            display: none;
            background: none;
            border: 2px solid #333;
            padding: 10px 15px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
        }
        
        /* Hero Section */
        .hero-section {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, rgba(0,0,0,0.7), rgba(0,0,0,0.4)), url('assets/img/clg.jpeg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            text-align: center;
            color: white;
        }
        
        .hero-badge {
            display: inline-block;
            background: rgba(255,255,255,0.1);
            border: 1px solid rgba(255,255,255,0.2);
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 14px;
            margin-bottom: 20px;
            backdrop-filter: blur(10px);
            animation: fadeInUp 1s ease;
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.2;
            background: linear-gradient(135deg, #fff, #e0e0e0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: fadeInUp 1s ease 0.2s both;
        }
        
        .hero-subtitle {
            font-size: 1.3rem;
            margin-bottom: 30px;
            opacity: 0.9;
            animation: fadeInUp 1s ease 0.4s both;
        }
        
        .hero-description {
            max-width: 800px;
            margin: 0 auto;
            font-size: 1.1rem;
            line-height: 1.8;
            opacity: 0.85;
            animation: fadeInUp 1s ease 0.6s both;
        }
        
        .hero-description p {
            margin-bottom: 20px;
        }
        
        /* Animations */
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
        
        /* Responsive Design */
        @media (max-width: 1200px) {
            .nav-menu {
                gap: 2px;
            }
            
            .nav-link {
                padding: 10px 14px;
                font-size: 13px;
            }
        }
        
        @media (max-width: 992px) {
            .mobile-toggle {
                display: block;
            }
            
            .nav-menu {
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: rgba(255,255,255,0.98);
                backdrop-filter: blur(20px);
                flex-direction: column;
                box-shadow: 0 10px 30px rgba(0,0,0,0.1);
                border-radius: 0 0 15px 15px;
                padding: 20px;
                gap: 10px;
                transform: translateY(-20px);
                opacity: 0;
                visibility: hidden;
                transition: all 0.3s ease;
            }
            
            .nav-menu.show {
                transform: translateY(0);
                opacity: 1;
                visibility: visible;
            }
            
            .nav-link {
                padding: 15px 20px;
                font-size: 16px;
                text-align: center;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
            
            .logo-section:last-child {
                display: none;
            }
        }
        
        @media (max-width: 768px) {
            .navbar-container {
                padding: 0 15px;
            }
            
            .logo-section img {
                height: 40px;
            }
            
            .hero-title {
                font-size: 2rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
            
            .hero-description {
                font-size: 1rem;
                padding: 0 10px;
            }
        }
        
        @media (max-width: 480px) {
            .hero-title {
                font-size: 1.8rem;
            }
            
            .hero-content {
                padding: 0 15px;
            }
        }
        </style>
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar-custom">
            <div class="navbar-container">
                <!-- Left Logo -->
                <div class="logo-section">
                    <a href="#home">
                        <img src="assets/img/iiitk-logo.jpg" alt="IIIT Kottayam Logo"/>
                    </a>
                </div>
                
                <!-- Mobile Toggle -->
                <button class="mobile-toggle" id="mobileToggle">
                    <i class="fas fa-bars"></i>
                </button>
                
                <!-- Navigation Menu -->
                <ul class="nav-menu" id="navMenu">
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="areas.php">Areas</a></li>
                    <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="events.php">Events</a></li>
                    <li class="nav-item"><a class="nav-link" href="publications.php">Publications</a></li>
                    <li class="nav-item"><a class="nav-link" href="talks.php">Talks</a></li>
                    <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="downloads.php">Downloads</a></li>
                    <li class="nav-item"><a class="nav-link" href="contacts.php">Contact</a></li>
                </ul>
                
                <!-- Right Logo -->
                <div class="logo-section">
                    <a href="#home">
                        <img src="assets/img/swing.png" alt="SWING Logo"/>
                    </a>
                </div>
            </div>
        </nav>
        
        <!-- Hero Section -->
        <section class="hero-section" id="home">
            <div class="hero-content">
                <div class="hero-badge">
                    <i class="fas fa-wifi"></i> Welcome to
                </div>
                
                <h1 class="hero-title">
                    Smart Wireless Inter-Networking<br>Research Group
                </h1>
                
                <p class="hero-subtitle">
                    Advancing Research Excellence at IIIT Kottayam
                </p>
                
                <div class="hero-description">
                    <p>
                        The Smart Wireless Inter-Networking Group (SWING) is dedicated to advancing research in networking through cutting-edge AI, Machine Learning, and Deep Learning technologies. Our primary focus encompasses solving complex challenges in Computer Networks, Network Security, Protocol Design and Implementation, Internet of Things, and Cloud Computing.
                    </p>
                    <p>
                        Additionally, we concentrate on the design and development of innovative translators and compilers to address real-world industry problems and drive technological advancement.
                    </p>
                </div>
            </div>
        </section>

        <!-- Scripts -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Mobile menu toggle
                const mobileToggle = document.getElementById('mobileToggle');
                const navMenu = document.getElementById('navMenu');
                
                mobileToggle.addEventListener('click', function() {
                    navMenu.classList.toggle('show');
                    
                    // Toggle icon
                    const icon = this.querySelector('i');
                    if (navMenu.classList.contains('show')) {
                        icon.classList.remove('fa-bars');
                        icon.classList.add('fa-times');
                    } else {
                        icon.classList.remove('fa-times');
                        icon.classList.add('fa-bars');
                    }
                });
                
                // Close mobile menu when clicking on a link
                const navLinks = document.querySelectorAll('.nav-link');
                navLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        navMenu.classList.remove('show');
                        const icon = mobileToggle.querySelector('i');
                        icon.classList.remove('fa-times');
                        icon.classList.add('fa-bars');
                    });
                });
                
                // Active nav link
                const currentPage = window.location.pathname;
                navLinks.forEach(link => {
                    const href = link.getAttribute('href');
                    if (href && (currentPage.includes(href) || (currentPage === '/' && href === 'home.php'))) {
                        link.classList.add('active');
                    }
                });
                
                // Navbar scroll effect
                window.addEventListener('scroll', function() {
                    const navbar = document.querySelector('.navbar-custom');
                    if (window.scrollY > 50) {
                        navbar.style.background = 'rgba(255, 255, 255, 0.98)';
                        navbar.style.boxShadow = '0 2px 30px rgba(0,0,0,0.15)';
                    } else {
                        navbar.style.background = 'rgba(255, 255, 255, 0.95)';
                        navbar.style.boxShadow = '0 2px 20px rgba(0,0,0,0.1)';
                    }
                });
            });
        </script>
    </body>
</html>