<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CSZ Membership Selection</title>
    <!-- Modern Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- CSS assets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            background-attachment: fixed;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image:
                radial-gradient(circle at 25% 25%, rgba(26, 35, 126, 0.02) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(229, 115, 115, 0.02) 0%, transparent 50%),
                radial-gradient(circle at 50% 50%, rgba(255, 215, 0, 0.01) 0%, transparent 50%);
            pointer-events: none;
            z-index: -1;
        }

        .site-header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 15px 0;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            transition: all 0.3s ease;
            box-shadow: 0 2px 20px rgba(26, 35, 126, 0.1);
            border-bottom: 1px solid rgba(26, 35, 126, 0.1);
        }

        .site-header.header--scrolled {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(15px);
            box-shadow: 0 4px 30px rgba(26, 35, 126, 0.15);
        }

        .navbar-brand img {
            height: 50px;
            width: auto;
        }

        .nav-link {
            font-weight: 500;
            color: var(--text-color) !important;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
        }

        .header-btn {
            background: var(--primary-color);
            color: white !important;
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .header-btn:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
        }

        .main-content {
            margin-top: 80px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="site-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="img-assets/csz.png" alt="CSZ Logo">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link header-btn">Register</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <div class="main-content">
    <div class="hero-section text-center py-5 mb-5" style="background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%); color: white;">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4 hero-title">Choose Your Membership Type</h1>
            <p class="lead hero-subtitle">Select the membership category that best fits your professional status and career goals</p>
            <div class="hero-divider mt-4"></div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <!-- Professional Membership -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-lg border-0 membership-card">
                    <div class="card-header text-white text-center py-3" style="background: linear-gradient(135deg, var(--primary-color) 0%, #2A3F9F 100%);">
                        <h3 class="mb-0">Professional</h3>
                            <div class="price-amount h2 mb-0 mt-2">$550</div>
                        <small class="opacity-75">per year</small>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="pricing-features flex-grow-1">
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-check-circle me-2 mt-1" style="color: var(--primary-color);"></i>
                                    <span>Full voting rights in CSZ affairs</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-certificate me-2 mt-1" style="color: var(--primary-color);"></i>
                                    <span>Professional certification and recognition</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-users me-2 mt-1" style="color: var(--primary-color);"></i>
                                    <span>Access to professional committees</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-graduation-cap me-2 mt-1" style="color: var(--primary-color);"></i>
                                    <span>Continuing Professional Development (CPD)</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-handshake me-2 mt-1" style="color: var(--primary-color);"></i>
                                    <span>Networking opportunities</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-auto">
                            <a href="{{ route('professional-registration') }}" class="btn btn-lg w-100" style="background: var(--primary-color); border-color: var(--primary-color); color: white;">
                                <i class="fas fa-arrow-right me-2"></i>Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Graduate Membership -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-lg border-0 membership-card">
                    <div class="card-header text-white text-center py-3" style="background: linear-gradient(135deg, var(--secondary-color) 0%, #F48FB1 100%);">
                        <h3 class="mb-0">Graduate</h3>
                        <div class="price-amount h2 mb-0 mt-2">$250</div>
                        <small class="opacity-75">per year</small>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="pricing-features flex-grow-1">
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-graduation-cap me-2 mt-1" style="color: var(--secondary-color);"></i>
                                    <span>Recent graduate from recognized institution</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-clock me-2 mt-1" style="color: var(--secondary-color);"></i>
                                    <span>Pathway to professional membership</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-book me-2 mt-1" style="color: var(--secondary-color);"></i>
                                    <span>Access to professional development resources</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-network-wired me-2 mt-1" style="color: var(--secondary-color);"></i>
                                    <span>Professional networking opportunities</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-briefcase me-2 mt-1" style="color: var(--secondary-color);"></i>
                                    <span>Career guidance and mentorship</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-auto">
                            <a href="{{ route('graduate-registration') }}" class="btn btn-lg w-100" style="background: var(--secondary-color); border-color: var(--secondary-color); color: white;">
                                <i class="fas fa-arrow-right me-2"></i>Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Student Membership -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-lg border-0 membership-card popular">
                    <div class="popular-badge">
                        <span>Most Popular</span>
                    </div>
                    <div class="card-header text-white text-center py-3" style="background: linear-gradient(135deg, var(--accent-color) 0%, #FFE082 100%); color: var(--text-color) !important;">
                        <h3 class="mb-0">Student</h3>
                        <div class="price-amount h2 mb-0 mt-2">$50</div>
                        <small class="opacity-75">per year</small>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="pricing-features flex-grow-1">
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-user-graduate me-2 mt-1" style="color: #B8860B;"></i>
                                    <span>Must be a bona fide student at recognized institution</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-book me-2 mt-1" style="color: #B8860B;"></i>
                                    <span>Following approved course of study</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-check-circle me-2 mt-1" style="color: #B8860B;"></i>
                                    <span>Chapter and Membership Committee approval required</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-calendar-alt me-2 mt-1" style="color: #B8860B;"></i>
                                    <span>Access to student events and workshops</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-users me-2 mt-1" style="color: #B8860B;"></i>
                                    <span>Student chapter participation</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-auto">
                            <a href="{{ route('student-registration') }}" class="btn btn-lg w-100" style="background: var(--accent-color); border-color: var(--accent-color); color: var(--text-color); font-weight: 600;">
                                <i class="fas fa-arrow-right me-2"></i>Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Membership Types Row -->
        <div class="row justify-content-center mt-4">
            <!-- Associate Membership -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-lg border-0 membership-card">
                    <div class="card-header text-white text-center py-3" style="background: linear-gradient(135deg, #9C27B0 0%, #BA68C8 100%);">
                        <h3 class="mb-0">Associate</h3>
                        <div class="price-amount h2 mb-0 mt-2">$220</div>
                        <small class="opacity-75">per year</small>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="pricing-features flex-grow-1">
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-certificate me-2 mt-1" style="color: #9C27B0;"></i>
                                    <span>Intermediate level membership</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-handshake me-2 mt-1" style="color: #9C27B0;"></i>
                                    <span>Professional networking access</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-book-open me-2 mt-1" style="color: #9C27B0;"></i>
                                    <span>Educational resources and materials</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-calendar me-2 mt-1" style="color: #9C27B0;"></i>
                                    <span>Event participation privileges</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-auto">
                            <a href="{{ route('associate-registration') }}" class="btn btn-lg w-100" style="background: #9C27B0; border-color: #9C27B0; color: white;">
                                <i class="fas fa-arrow-right me-2"></i>Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Affiliate Membership -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-lg border-0 membership-card">
                    <div class="card-header text-white text-center py-3" style="background: linear-gradient(135deg, #FF7043 0%, #FFAB91 100%);">
                        <h3 class="mb-0">Affiliate</h3>
                        <div class="price-amount h2 mb-0 mt-2">$300</div>
                        <small class="opacity-75">per year</small>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="pricing-features flex-grow-1">
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-link me-2 mt-1" style="color: #FF7043;"></i>
                                    <span>Supporting membership category</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-envelope me-2 mt-1" style="color: #FF7043;"></i>
                                    <span>Access to newsletters and updates</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-calendar-check me-2 mt-1" style="color: #FF7043;"></i>
                                    <span>Selected event invitations</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-heart me-2 mt-1" style="color: #FF7043;"></i>
                                    <span>Support CSZ mission and values</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-auto">
                            <a href="{{ route('affiliate-registration') }}" class="btn btn-lg w-100" style="background: #FF7043; border-color: #FF7043; color: white;">
                                <i class="fas fa-arrow-right me-2"></i>Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Institutional Membership -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-lg border-0 membership-card">
                    <div class="card-header text-white text-center py-3" style="background: linear-gradient(135deg, #37474F 0%, #546E7A 100%);">
                        <h3 class="mb-0">Institutional</h3>
                        <div class="price-amount h2 mb-0 mt-2">$2100</div>
                        <small class="opacity-75">per year</small>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="pricing-features flex-grow-1">
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-building me-2 mt-1" style="color: #37474F;"></i>
                                    <span>For organizations and institutions</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-users-cog me-2 mt-1" style="color: #37474F;"></i>
                                    <span>Multiple member access</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-star me-2 mt-1" style="color: #37474F;"></i>
                                    <span>Premium benefits and services</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-handshake me-2 mt-1" style="color: #37474F;"></i>
                                    <span>Partnership opportunities</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-auto">
                                <a href="{{ route('institutional-registration') }}" class="btn btn-lg w-100" style="background: #37474F; border-color: #37474F; color: white;">
                                <i class="fas fa-arrow-right me-2"></i>Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Information Section -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="card border-0 bg-light">
                    <div class="card-body text-center py-5">
                        <h3 class="mb-4">Need Help Choosing?</h3>
                        <p class="lead mb-4">Not sure which membership type is right for you? Contact our membership team for personalized guidance.</p>
                        <div class="row justify-content-center">
                            <div class="col-md-4 mb-3">
                                <div class="contact-item">
                                    <i class="fas fa-envelope fa-2x mb-2" style="color: var(--primary-color);"></i>
                                    <p class="mb-0"><strong>Email:</strong><br>membership@csz.org.zw</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="contact-item">
                                    <i class="fas fa-phone fa-2x mb-2" style="color: var(--secondary-color);"></i>
                                    <p class="mb-0"><strong>Phone:</strong><br>+263 4 123 456</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="contact-item">
                                    <i class="fas fa-clock fa-2x mb-2" style="color: var(--accent-color);"></i>
                                    <p class="mb-0"><strong>Office Hours:</strong><br>Mon-Fri 8:00 AM - 5:00 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.membership-card {
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
    border-radius: 20px !important;
    overflow: hidden;
    background: white;
    border: none !important;
}

.membership-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--primary-color), var(--secondary-color), var(--accent-color));
    z-index: 1;
}

.membership-card:hover {
    transform: translateY(-15px) scale(1.02);
    box-shadow: 0 25px 50px rgba(26, 35, 126, 0.15) !important;
}

.membership-card .card-header {
    border-radius: 20px 20px 0 0 !important;
    border: none !important;
    position: relative;
    overflow: hidden;
}

.membership-card .card-header::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.5s;
}

.membership-card:hover .card-header::before {
    left: 100%;
}

.popular {
    position: relative;
    border: 3px solid var(--accent-color) !important;
    box-shadow: 0 0 30px rgba(255, 215, 0, 0.3) !important;
}

.popular-badge {
    position: absolute;
    top: -15px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 10;
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% { transform: translateX(-50%) scale(1); }
    50% { transform: translateX(-50%) scale(1.05); }
    100% { transform: translateX(-50%) scale(1); }
}

.popular-badge span {
    background: linear-gradient(45deg, var(--secondary-color), var(--accent-color));
    color: white;
    padding: 8px 20px;
    border-radius: 25px;
    font-size: 14px;
    font-weight: bold;
    box-shadow: 0 4px 20px rgba(0,0,0,0.3);
    position: relative;
    overflow: hidden;
}

.popular-badge span::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    transition: left 0.8s;
}

.popular-badge:hover span::before {
    left: 100%;
}

.price-amount {
    font-weight: bold;
    font-size: 2.8rem;
    background: linear-gradient(45deg, rgba(255,255,255,0.9), rgba(255,255,255,1));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    text-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.contact-item {
    padding: 25px;
    border-radius: 15px;
    background: rgba(26, 35, 126, 0.03);
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.contact-item:hover {
    background: rgba(26, 35, 126, 0.08);
    border-color: var(--primary-color);
    transform: translateY(-5px);
}

.hero-section {
    background-attachment: fixed;
    background-size: cover;
    background-position: center;
    position: relative;
    overflow: hidden;
}

.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="rgba(255,255,255,0.1)"><polygon points="0,0 1000,100 1000,0"/></svg>');
    background-size: cover;
    pointer-events: none;
}

.hero-title {
    animation: fadeInUp 1s ease-out;
    text-shadow: 0 2px 4px rgba(0,0,0,0.3);
}

.hero-subtitle {
    animation: fadeInUp 1s ease-out 0.2s both;
    font-size: 1.3rem;
    opacity: 0.95;
    max-width: 600px;
    margin: 0 auto;
}

.hero-divider {
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, var(--accent-color), rgba(255,255,255,0.8));
    border-radius: 2px;
    margin: 0 auto;
    animation: fadeInUp 1s ease-out 0.4s both;
}

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

.membership-card .btn {
    border-radius: 25px !important;
    font-weight: 600;
    padding: 12px 30px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.membership-card .btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.5s;
}

.membership-card .btn:hover::before {
    left: 100%;
}

.membership-card .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.pricing-features li {
    transition: all 0.3s ease;
    padding: 8px 0;
    border-radius: 8px;
    margin-bottom: 12px !important;
}

.pricing-features li:hover {
    background: rgba(26, 35, 126, 0.05);
    padding-left: 10px;
    transform: translateX(5px);
}

.pricing-features i {
    font-size: 1.1rem;
    margin-right: 12px !important;
    transition: all 0.3s ease;
}

.pricing-features li:hover i {
    transform: scale(1.2);
}

.fade-in-card {
    animation: fadeInUp 0.8s ease-out forwards;
    opacity: 0;
    transform: translateY(30px);
}

.container > .row > .col-lg-4 {
    animation: fadeInUp 0.8s ease-out forwards;
    opacity: 0;
    transform: translateY(30px);
}

.container > .row > .col-lg-4:nth-child(1) { animation-delay: 0.1s; }
.container > .row > .col-lg-4:nth-child(2) { animation-delay: 0.2s; }
.container > .row > .col-lg-4:nth-child(3) { animation-delay: 0.3s; }
.container > .row > .col-lg-4:nth-child(4) { animation-delay: 0.4s; }
.container > .row > .col-lg-4:nth-child(5) { animation-delay: 0.5s; }
.container > .row > .col-lg-4:nth-child(6) { animation-delay: 0.6s; }

@media (max-width: 768px) {
    .hero-section {
        background-attachment: scroll;
    }

    .popular-badge {
        top: -10px;
    }

    .popular-badge span {
        padding: 6px 15px;
        font-size: 12px;
    }

    .membership-card:hover {
        transform: translateY(-10px) scale(1.01);
    }

    .price-amount {
        font-size: 2.2rem;
    }
}
</style>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Add smooth scrolling and header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.site-header');
            if (window.scrollY > 50) {
                header.classList.add('header--scrolled');
            } else {
                header.classList.remove('header--scrolled');
            }
        });

        // Add staggered animation to membership cards
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.membership-card');
            cards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.1}s`;
                card.classList.add('fade-in-card');
            });
        });
    </script>
    </div> <!-- End main-content -->
</body>
</html>
