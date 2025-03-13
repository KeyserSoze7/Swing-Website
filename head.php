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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="css/styles.css"/>
		<link rel="stylesheet" href="css/Slideshow.css">
	    <link rel="stylesheet" href="css/owl.carousel.min.css">
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
	}
	.slider-item:hover{
		opacity:1.0;
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
        
        <!-- Masthead-->
      <header class="masthead2 text-white text-center" id="home">
      <section class="home-slider owl-carousel" style="margin-bottom: -35px;">
		  <div class="slider-item" style="background-image:url(assets/img/clg.jpeg);">
			 
				<div class="container3" style="align:center;color:#f8f8ff;">
				
				<h4>Welcome to<h4><h2>Smart Wireless Inter-Networking Research Group </h2>
				<!--<p ALIGN="justify">Welcome to Smart Wireless Inter-Networking Group @ IIIT Kottayam</p> -->
				<h3><p ALIGN="justify">The Smart Wireless Inter-Networking Group (SWING) is to work for the uplift of research in the area of networking by providing smartness using AI, Machine and deep learnig. SWING mainly focus is to solve the issues in Computer Networks, Network Security, Protocol Design and Implementation, Internet of Things, and Cloud Computing areas. </p><p ALIGN="justify">In addition, concentrated on design and develpment of different translators and compilers to solve the industry problems.</p>
			 </div>
		  </div>
		</section>
        </header>
