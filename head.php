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
        
        <!-- jQuery first, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="css/styles.css"/>
        <link rel="stylesheet" href="css/Slideshow.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/kingcomposer.min.css">
        <link rel="stylesheet" href="css/extendify-utilities.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/custom.css">
        
        <style>
        .slider-item{
            opacity:0.85;
            transition: opacity 0.3s ease;
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            height: 600px; /* Set a fixed height */
            width: 100%;
            position: relative;
        }
        .slider-item:hover{
            opacity:1.0;
        }
        .container3 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
            padding: 20px;
            background-color: rgba(0,0,0,0.5); /* Add semi-transparent background */
            border-radius: 10px;
        }
        
        /* Owl Carousel Styling */
        .owl-carousel .owl-item {
            float: left;
        }
        
        .owl-carousel .owl-stage-outer {
            overflow: hidden;
            position: relative;
            width: 100%;
        }
        
        .owl-carousel .owl-dots {
            text-align: center;
            margin-top: 20px;
            position: absolute;
            bottom: 20px;
            width: 100%;
        }
        
        .owl-carousel .owl-dots .owl-dot {
            display: inline-block;
            margin: 0 5px;
        }
        
        .owl-carousel .owl-dots .owl-dot span {
            display: block;
            width: 10px;
            height: 10px;
            background: #ccc;
            border-radius: 50%;
        }
        
        .owl-carousel .owl-dots .owl-dot.active span {
            background: #fff;
        }
        
        .owl-carousel .owl-nav button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255,255,255,0.3);
            color: white;
            font-size: 24px;
            padding: 10px 15px !important;
            border-radius: 50%;
        }
        
        .owl-carousel .owl-nav button.owl-prev {
            left: 10px;
        }
        
        .owl-carousel .owl-nav button.owl-next {
            right: 10px;
        }
        
        .hero-section {
    position: relative;
    font-weight: 700;
    min-height: 150vh;
    display: flex;
    align-items: center;
    justify-content: center; /* Center horizontally */
    text-align: center;
    background: linear-gradient(135deg, rgba(0,0,0,0.6), rgba(0,0,0,0.4)),
                url('assets/img/clg.jpeg') center/cover no-repeat fixed;
    font-family: 'Montserrat', sans-serif; /* Clean, professional font */
}

.hero-content {
    color: #fff;
    max-width: 900px;
    padding: 20px;
    z-index: 2;
}

.hero-title {
    font-size: 4rem; /* Bigger for impact */
    font-weight: 700;
    letter-spacing: 1px;
    line-height: 1.2;
    margin-bottom: 20px;
    background: linear-gradient(135deg, #ffffff, #dddddd);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.hero-subtitle {
    font-size: 2rem;
    font-weight: 500;
    line-height: 1.4;
    margin-bottom: 20px;
    color: rgba(255, 255, 255, 0.9);
}

.hero-description {
    font-family: 'Lato', sans-serif; /* Better readability for paragraph text */
    font-size: 1.5rem;
    line-height: 1.8;
    max-width: 700px;
    margin: 0 auto 20px;
    color: rgba(255, 255, 255, 0.85);
}

.hero-badge {
    display: inline-block;
    background: rgba(255,255,255,0.1);
    border: 1px solid rgba(255,255,255,0.2);
    padding: 6px 16px;
    border-radius: 50px;
    font-size: 14px;
    letter-spacing: 0.5px;
    margin-bottom: 20px;
    backdrop-filter: blur(8px);
}

@media (max-width: 768px) {
    .hero-title {
        font-size: 2.5rem;
    }

    .hero-subtitle {
        font-size: 1.2rem;
    }

    .hero-description {
        font-size: 1rem;
        line-height: 1.6;
    }
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
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar1 navbar-expand-lg fixed-top" id="mainNav">
            <div class="container navbar-container">
                <!-- Left Logo -->
                <div class="logo-container-left">
                    <a class="navbar-brand1" href="#page-top">
                        <img src="assets/img/iiitk-logo.jpg" id="rcorners2" alt="IIIT Kottayam Logo"/>
                    </a>
                </div>
                
                <!-- Mobile Toggle Button -->
                <button class="navbar-toggle-btn d-lg-none" type="button" id="navbarToggleBtn">
                    <i class="fas fa-bars me-1"></i> Menu
                </button>
                
                <!-- Center Navigation -->
                <div class="nav-center-container">
                    <div class="navbar-collapse1" id="navbarResponsive">
                        <ul class="navbar-nav1">
                            <li class="nav-item1"><a class="nav-link1 rounded" href="home.php#people">Home</a></li>
                            <li class="nav-item1"><a class="nav-link1 rounded" href="areas.php#areas">Areas</a></li>
                            <li class="nav-item1"><a class="nav-link1 rounded" href="projects.php">Funded Projects</a></li>
                            <li class="nav-item1"><a class="nav-link1 rounded" href="events.php">Events</a></li>
                            <li class="nav-item1"><a class="nav-link1 rounded" href="publications.php">Publications</a></li>
                            <li class="nav-item1"><a class="nav-link1 rounded" href="talks.php">Talks</a></li>
                            <li class="nav-item1"><a class="nav-link1 rounded" href="gallery.php">Gallery</a></li>
                            <li class="nav-item1"><a class="nav-link1 rounded" href="downloads.php">Downloads</a></li>
                            <li class="nav-item1"><a class="nav-link1 rounded" href="contacts.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Right Logo -->
                <div class="logo-container-right">
                    <a class="navbar-brand1" href="#page-top">
                        <img src="assets/img/swing.png" id="rcorners2" alt="SWING Logo"/>
                    </a>
                </div>
            </div>
        </nav>
        
        <!-- Mobile Menu Toggle Script -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const navbarToggleBtn = document.getElementById('navbarToggleBtn');
                const navbarResponsive = document.getElementById('navbarResponsive');
                
                navbarToggleBtn.addEventListener('click', function() {
                    navbarResponsive.classList.toggle('show');
                });
                
                // Add active class to current nav item
                const currentLocation = window.location.pathname;
                const navLinks = document.querySelectorAll('.nav-link1');
                navLinks.forEach(link => {
                    const linkPath = link.getAttribute('href').split('#')[0];
                    if (currentLocation.includes(linkPath) && linkPath !== '') {
                        link.classList.add('active');
                    } else if (currentLocation.endsWith('/') && link.getAttribute('href').includes('home.php')) {
                        link.classList.add('active');
                    }
                });
            });
        </script>

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
</header>

        
        <!-- Owl Carousel JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        
        <!-- Initialize Owl Carousel -->
        <script>
            $(document).ready(function(){
                console.log("Initializing carousel");
                try {
                    $(".home-slider").owlCarousel({
                        items: 1,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 5000,
                        autoplayHoverPause: true,
                        nav: true,
                        navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
                        dots: true,
                        animateOut: 'fadeOut',
                        animateIn: 'fadeIn',
                        smartSpeed: 1000
                    });
                    console.log("Carousel initialized successfully");
                } catch(e) {
                    console.error("Error initializing carousel:", e);
                }
            });
        </script>