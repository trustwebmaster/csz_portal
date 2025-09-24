<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.hogash.com/membership_html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Nov 2020 08:29:10 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content=" width=device-width, initial-scale=1">
		<title>CSZ Membership</title>
    <!-- Modern Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		 <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- CSS assets -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="addons/Magnific-Popup/magnific-popup.css" rel="stylesheet">
		<!-- LOAD slick slider assets -->
		<link rel="stylesheet" type="text/css" href="addons/slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="addons/slick/slick-theme.css"/>
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #1A237E;  /* CSZ Navy Blue */
            --secondary-color: #E57373; /* CSZ Coral Red */
            --accent-color: #FFD700;    /* Gold accent for highlights */
            --text-color: #333;
            --light-bg: #f8f9fa;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
            overflow-x: hidden;
        }

        .site-header {
            background: rgba(255, 255, 255, 0.98);
            padding: 15px 0;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .site-header.header--scrolled {
            padding: 10px 0;
            background: #fff;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            padding: 0;
        }

        .navbar-brand img {
            height: 45px;
            width: auto;
            transition: all 0.3s ease;
        }

        .header--scrolled .navbar-brand img {
            height: 40px;
        }

        .navbar-nav {
            gap: 1.5rem;
        }

        .nav-item {
            position: relative;
        }

        .nav-link {
            color: #1A237E !important;
            font-weight: 500;
            font-size: 1rem;
            padding: 0.5rem 0 !important;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: #E57373;
            transition: all 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link:hover {
            color: #E57373 !important;
        }

        .header-btn {
            background: #1A237E;
            color: white !important;
            padding: 0.6rem 1.5rem !important;
            border-radius: 50px;
            transition: all 0.3s ease;
            border: 2px solid #1A237E;
        }

        .header-btn:hover {
            background: #E57373;
            border-color: #E57373;
            transform: translateY(-2px);
        }

        .header-btn::after {
            display: none;
        }

        .navbar-toggler {
            border: none;
            padding: 0;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        .navbar-toggler-icon {
            width: 24px;
            height: 24px;
            position: relative;
            transition: all 0.3s ease;
        }

        @media (max-width: 991px) {
            .navbar-collapse {
                background: white;
                padding: 1rem;
                border-radius: 10px;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
                margin-top: 1rem;
            }

            .navbar-nav {
                gap: 0.5rem;
            }

            .nav-link {
                padding: 0.5rem !important;
            }

            .header-btn {
                display: inline-block;
                margin-top: 0.5rem;
            }
        }

        .logo-img {
            height: 50px;
            width: auto;
        }

        .mm__mainMenu {
            gap: 2rem;
        }

        .btn--round {
            border-radius: 30px;
            padding: 12px 30px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn--fullblack {
            background: var(--primary-color);
            color: white;
            transition: all 0.3s ease;
        }

        .btn--fullblack:hover {
            background: var(--secondary-color);
            color: white;
            transform: translateY(-2px);
        }

        .mm-subheader {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            padding: 120px 0 80px;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .home-heading {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 1rem;
            background: linear-gradient(45deg, #fff, #e3f2fd);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .pricing-element {
            background: white;
            border-radius: 15px;
            padding: 40px;
            height: 100%;
            transition: all 0.3s ease;
            border: 1px solid rgba(0,0,0,0.08);
        }

        .pricing-element:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }

        .title--huge {
            color: var(--accent-color);
            font-size: 3.5rem;
            font-weight: 700;
        }

        .mm-iconbox {
            text-align: center;
            padding: 30px;
            background: var(--light-bg);
            border-radius: 15px;
            transition: all 0.3s ease;
        }

        .mm-iconbox:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .icon-img {
            width: 80px;
            height: 80px;
            margin-bottom: 20px;
        }

        .clients {
            padding: 60px 0;
        }

        .img-wrapper {
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }

        .img-wrapper:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .footer {
            background: #1A237E;
            padding: 80px 0 40px;
            color: #fff;
            position: relative;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(180deg, rgba(26, 35, 126, 0.95) 0%, #1A237E 100%);
            pointer-events: none;
        }

        .footer .container {
            position: relative;
            z-index: 1;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 30px;
        }

        .footer-about {
            grid-column: span 6;
        }

        .footer-links {
            grid-column: span 3;
        }

        .footer-contact {
            grid-column: span 3;
        }

        .footer-title {
            color: #E57373;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .footer-desc {
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.8;
            margin-bottom: 2rem;
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li {
            margin-bottom: 1rem;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .footer-links a:hover {
            color: #E57373;
            transform: translateX(5px);
        }

        .footer-contact-info {
            color: rgba(255, 255, 255, 0.9);
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 1rem;
        }

        .contact-item i {
            color: #E57373;
            font-size: 1.2rem;
            margin-top: 4px;
        }

        .footer-bottom {
            margin-top: 60px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
        }

        .footer-bottom p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
            margin: 5px 0;
        }

        .developer-credit {
            margin-top: 10px;
            font-size: 0.85rem;
        }

        .developer-link {
            color: #E57373;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .developer-link:hover {
            color: #fff;
            text-decoration: underline;
        }

        @media (max-width: 992px) {
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
            }
            .footer-about {
                grid-column: span 2;
            }
            .footer-links, .footer-contact {
                grid-column: span 1;
            }
        }

        @media (max-width: 768px) {
            .footer-content {
                grid-template-columns: 1fr;
            }
            .footer-about, .footer-links, .footer-contact {
                grid-column: span 1;
            }
            .footer {
                padding: 60px 0 30px;
            }
        }

        .totop {
            background: var(--accent-color);
            color: white;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: fixed;
            bottom: 30px;
            right: 30px;
            text-decoration: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
        }

        .totop:hover {
            background: var(--secondary-color);
            transform: translateY(-5px);
        }

        @media (max-width: 768px) {
            .home-heading {
                font-size: 2.5rem;
            }

            .pricing-element {
                margin-bottom: 30px;
            }
        }

        /* Membership section improvements */
        .membership-section {
            padding: 80px 0;
            background: var(--light-bg);
        }

        .membership-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .membership-header h2 {
            color: var(--primary-color);
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .membership-header p {
            color: #666;
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
        }

        .pricing-header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(0,0,0,0.08);
            margin-bottom: 20px;
        }

        .pricing-header h3 {
            color: var(--primary-color);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 1rem;
            margin-bottom: 15px;
        }

        .price-amount {
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary-color);
            line-height: 1;
            margin-bottom: 5px;
        }

        .price-period {
            color: #666;
            font-size: 0.9rem;
        }

        /* Institutional Members Section */
        .institutional-members {
            padding: 60px 0;
            background: white;
        }

        .institutional-members .section-title {
            text-align: center;
            margin-bottom: 40px;
            color: var(--primary-color);
            font-size: 1.8rem;
            font-weight: 600;
        }

        .members-logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 40px;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .member-logo-item {
            flex: 0 1 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px 25px;
            background: white;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .member-logo-item:hover {
            transform: translateY(-5px);
        }

        .member-logo-item img {
            height: 60px;
            width: auto;
            object-fit: contain;
        }

        @media (max-width: 992px) {
            .members-logo-container {
                gap: 30px;
            }
            .member-logo-item {
                padding: 10px 20px;
            }
            .member-logo-item img {
                height: 50px;
            }
        }

        @media (max-width: 768px) {
            .members-logo-container {
                gap: 20px;
            }
            .member-logo-item {
                padding: 8px 15px;
            }
            .member-logo-item img {
                height: 40px;
            }
        }
    </style>
    <!-- Add AOS CSS and JS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Initialize AOS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                once: true,
                offset: 100
            });
        });
    </script>
	</head>

	<body>
		<div id="page_wrapper">
			<header id="header" class="site-header header--sticky">
				<div class="container">
					<nav class="navbar navbar-expand-lg">
						<a class="navbar-brand" href="#">
							<img src="img-assets/csz.png" alt="CSZ Logo">
						</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
							<ul class="navbar-nav align-items-center">
								<li class="nav-item">
									<a class="nav-link" href="{{ route('login') }}">Login</a>
								</li>
								<li class="nav-item">
									<a href="{{ route('membership-selection') }}" class="nav-link header-btn">Sign up</a>
								</li>
							</ul>
						</div>
					</nav>
					</div>
			</header>

			<div class="mm-subheader" id="home">
				<div class="container">
					<div class="row min-vh-75 align-items-center">
						<div class="col-lg-8 col-md-10 mx-auto text-center">
							<h1 class="home-heading" data-aos="fade-up">CSZ Membership</h1>
							<p class="home-subheading lead text-white mb-4" data-aos="fade-up" data-aos-delay="100">
								Get access to our exclusive Membership Programme and join Zimbabwe's premier ICT community
							</p>
							<a href="#pricing" class="btn btn--round btn--fullwhite" data-aos="fade-up" data-aos-delay="200">
								View Memberships
							</a>
							</div>
					</div>
				</div>
				<div class="shape-divider">
					<svg viewBox="0 0 1920 250" xmlns="http://www.w3.org/2000/svg">
						<path fill="#ffffff" d="M1920 250H0V0s126.707 78.536 349.975 80.05c177.852 1.203 362.805-63.874 553.803-63.874 290.517 0 383.458 57.712 603.992 61.408 220.527 3.696 412.23-61.408 412.23-61.408V250z"/>
					</svg>
							</div>
						</div>

			<section id="features" class="py-5 bg-light">
				<div class="container">
					<div class="row g-4">
						<div class="col-md-6">
							<div class="mm-iconbox" data-aos="fade-up">
								<div class="mm-iconbox__icon-wrapper">
									<i class="fas fa-eye fa-3x text-primary mb-4"></i>
								</div>
								<h3 class="h4 mb-3">Our Vision</h3>
								<p class="mb-0">To be the trusted industry body, anchored on professional knowledge driving the ICT ecosystem in Zimbabwe</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mm-iconbox" data-aos="fade-up" data-aos-delay="100">
								<div class="mm-iconbox__icon-wrapper">
									<i class="fas fa-bullseye fa-3x text-primary mb-4"></i>
								</div>
								<h3 class="h4 mb-3">Our Mission</h3>
								<p class="mb-0">To champion the development of the ICT industry in Zimbabwe by establishing beneficial relationships and providing independent professional counsel</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="pricing" class="membership-section">
				<div class="container">
					<div class="membership-header">
						<h2>Choose Your Membership</h2>
						<p>Select the membership type that best suits your professional needs and career stage</p>
									</div>

					<div class="row g-4">
						<!-- Professional Membership -->
						<div class="col-lg-4">
							<div class="pricing-element">
								<div class="pricing-header">
									<h3>Professional</h3>
									<div class="price-amount">$550</div>
									<div class="price-period">per year</div>
									</div>
								<div class="pricing-features">
									<ul class="list-unstyled mb-4">
										<li class="d-flex align-items-center mb-3">
											<i class="fas fa-check-circle text-success me-2"></i>
											Established professional reputation
										</li>
										<li class="d-flex align-items-center mb-3">
											<i class="fas fa-check-circle text-success me-2"></i>
											Access to exclusive events
										</li>
										<li class="d-flex align-items-center mb-3">
											<i class="fas fa-check-circle text-success me-2"></i>
											Professional development resources
										</li>
									</ul>
								</div>
								<a href="{{ route('membership-selection') }}" class="btn btn--round btn--fullblack w-100">Join Now</a>
							</div>
						</div>

						<!-- Associate Membership -->
						<div class="col-lg-4">
							<div class="pricing-element">
								<div class="pricing-header">
									<h3>Associate</h3>
									<div class="price-amount">$220</div>
									<div class="price-period">per year</div>
									</div>
								<div class="pricing-features">
									<ul class="list-unstyled mb-4">
										<li class="d-flex align-items-center mb-3">
											<i class="fas fa-check-circle text-success me-2"></i>
											Member sponsorship required
										</li>
										<li class="d-flex align-items-center mb-3">
											<i class="fas fa-check-circle text-success me-2"></i>
											Networking opportunities
										</li>
										<li class="d-flex align-items-center mb-3">
											<i class="fas fa-check-circle text-success me-2"></i>
											Industry resources access
										</li>
									</ul>
								</div>
								<a href="{{ route('membership-selection') }}" class="btn btn--round btn--fullblack w-100">Join Now</a>
                            </div>
						</div>

						<!-- Graduate Membership -->
						<div class="col-lg-4">
							<div class="pricing-element">
								<div class="pricing-header">
									<h3>Graduate</h3>
									<div class="price-amount">$75</div>
									<div class="price-period">per year</div>
				</div>
								<div class="pricing-features">
									<ul class="list-unstyled mb-4">
										<li class="d-flex align-items-center mb-3">
											<i class="fas fa-check-circle text-success me-2"></i>
											Recent graduate benefits
										</li>
										<li class="d-flex align-items-center mb-3">
											<i class="fas fa-check-circle text-success me-2"></i>
											Career development support
										</li>
										<li class="d-flex align-items-center mb-3">
											<i class="fas fa-check-circle text-success me-2"></i>
											Mentorship opportunities
										</li>
									</ul>
				</div>
								<a href="{{ route('membership-selection') }}" class="btn btn--round btn--fullblack w-100">Join Now</a>
							</div>
						</div>

						<!-- Student Membership -->
						<div class="col-lg-4">
							<div class="pricing-element">
								<div class="pricing-header">
									<h3>Student</h3>
									<div class="price-amount">$50</div>
									<div class="price-period">per year</div>
								</div>
								<div class="pricing-features">
									<ul class="list-unstyled mb-4">
										<li class="d-flex align-items-start mb-3">
											<i class="fas fa-user-graduate text-primary me-2 mt-1"></i>
											<span>Must be a bone fide student registered at a recognized tertiary institution</span>
										</li>
										<li class="d-flex align-items-start mb-3">
											<i class="fas fa-book text-primary me-2 mt-1"></i>
											<span>Following an approved course of study (degree, diploma, or professional qualification)</span>
										</li>
										<li class="d-flex align-items-start mb-3">
											<i class="fas fa-check-circle text-primary me-2 mt-1"></i>
											<span>Requires approval from both Chapter Committee and Membership Committee</span>
										</li>
									</ul>
								</div>
								<a href="{{ route('membership-selection') }}" class="btn btn--round btn--fullblack w-100">Join Now</a>
							</div>
						</div>

						<!-- Affiliate Membership -->
						<div class="col-lg-4">
							<div class="pricing-element">
								<div class="pricing-header">
									<h3>Affiliate</h3>
									<div class="price-amount">$150</div>
									<div class="price-period">per year</div>
								</div>
								<div class="pricing-features">
									<ul class="list-unstyled mb-4">
										<li class="d-flex align-items-start mb-3">
											<i class="fas fa-handshake text-primary me-2 mt-1"></i>
											<span>Genuine interest in computer development and Society's aims</span>
										</li>
										<li class="d-flex align-items-start mb-3">
											<i class="fas fa-certificate text-primary me-2 mt-1"></i>
											<span>No formal academic qualifications required</span>
										</li>
										<li class="d-flex align-items-start mb-3">
											<i class="fas fa-users text-primary me-2 mt-1"></i>
											<span>Committee approval based on interest and commitment</span>
										</li>
									</ul>
								</div>
								<a href="{{ route('membership-selection') }}" class="btn btn--round btn--fullblack w-100">Join Now</a>
							</div>
						</div>

						<!-- Institutional Membership -->
						<div class="col-lg-4">
							<div class="pricing-element">
								<div class="pricing-header">
									<h3>Institutional</h3>
									<div class="price-amount">$2100</div>
									<div class="price-period">per year</div>
								</div>
								<div class="pricing-features">
									<ul class="list-unstyled mb-4">
										<li class="d-flex align-items-start mb-3">
											<i class="fas fa-building text-primary me-2 mt-1"></i>
											<span>Open to corporate and non-corporate organizations</span>
										</li>
										<li class="d-flex align-items-start mb-3">
											<i class="fas fa-file-contract text-primary me-2 mt-1"></i>
											<span>Must demonstrate interest in Society's objectives</span>
										</li>
										<li class="d-flex align-items-start mb-3">
											<i class="fas fa-balance-scale text-primary me-2 mt-1"></i>
											<span>Agreement to abide by Society's Code of Ethics</span>
										</li>
									</ul>
								</div>
								<a href="{{ route('membership-selection') }}" class="btn btn--round btn--fullblack w-100">Join Now</a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="institutional-members">
				<div class="container">
					<h3 class="section-title">Our Institutional Members</h3>
					<div class="members-logo-container">
						<div class="member-logo-item">
							<img src="images/1.jpg" alt="Afrosoft">
								</div>
						<div class="member-logo-item">
							<img src="images/2.jpg" alt="Coat of Arms">
										</div>
						<div class="member-logo-item">
							<img src="images/3.jpg" alt="Public Service Commission">
									</div>
						<div class="member-logo-item">
							<img src="images/4.jpg" alt="PSC Seal">
										</div>
						<div class="member-logo-item">
							<img src="images/5.jpg" alt="TelOne">
						</div>
					</div>
				</div>
			</section>


			<footer class="footer">
				<div class="container">
					<div class="footer-content">
						<div class="footer-about">
							<h3 class="footer-title">CSZ Membership</h3>
							<p class="footer-desc">
								The Computer Society of Zimbabwe was founded in 1974 with one objective, that of benefiting the Computer Industry and all people who work in it. The Society's aims were to educate the general public on the use and development of Information and Communication Technologies (ICTs).
							</p>
						</div>

						<div class="footer-links">
							<h3 class="footer-title">Quick Links</h3>
							<ul>
								<li>
									<a href="https://www.csz.org.zw/">
										<i class="fas fa-globe"></i> Our Blog
									</a>
									</li>
									<li>
									<a href="https://www.instagram.com/p/CGZo3PyMMh3/">
										<i class="fab fa-instagram"></i> Instagram
									</a>
									</li>
									<li>
									<a href="https://www.facebook.com/ComputerSocietyofZimbabwe/">
										<i class="fab fa-facebook"></i> Facebook
									</a>
									</li>
									<li>
									<a href="https://twitter.com/compsocietyzim">
										<i class="fab fa-twitter"></i> Twitter
									</a>
									</li>
								</ul>
						</div>

						<div class="footer-contact">
							<h3 class="footer-title">Contact Us</h3>
							<div class="footer-contact-info">
								<div class="contact-item">
									<i class="fas fa-phone"></i>
									<span>+263 242 250489/90</span>
								</div>
								<div class="contact-item">
									<i class="fas fa-envelope"></i>
									<span>info@csz.co.zw</span>
								</div>
								<div class="contact-item">
									<i class="fas fa-map-marker-alt"></i>
									<span>Harare, Zimbabwe</span>
								</div>
							</div>
						</div>
					</div>

					<div class="footer-bottom">
						<p>&copy; {{ date('Y') }} Computer Society of Zimbabwe | All Rights Reserved</p>
						<p class="developer-credit">
							Developed by <a href="https://github.com/lamtrust" target="_blank" class="developer-link">Trust Musikiri</a>
						</p>
					</div>
				</div>
			</footer>

		</div>
		<a href="#" class="totop">TOP</a>


	<script src="js/plugins/jquery-3.2.1.min.js"></script>
	<script src="js/plugins/bootstrap.min.js"></script>
	<script src="addons/isotope/isotope.pkgd.min.js"></script>
		<script src="addons/slick/slick.min.js"></script>
	<script src="addons/imagesloaded.pkgd.min.js"></script>
	<script src="addons/rellax-master/rellax.min.js"></script>
	<script src="addons/Magnific-Popup/jquery.magnific-popup.js"></script>
	<script src="addons/jquery.countTo.js"></script>
	<script src="addons/jquery.smooth-scroll.min.js"></script>
	<script src="js/script.js"></script>

	<!-- Add JavaScript for header scroll effect -->
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			const header = document.querySelector('.site-header');

			window.addEventListener('scroll', () => {
				if (window.scrollY > 50) {
					header.classList.add('header--scrolled');
				} else {
					header.classList.remove('header--scrolled');
				}
			});
		});
	</script>

	</body>


</html>
