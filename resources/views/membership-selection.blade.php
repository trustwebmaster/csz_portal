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
    <div class="hero-section text-center py-5 mb-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3">Choose Your Membership Type</h1>
            <p class="lead">Select the membership category that best fits your professional status and career goals</p>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <!-- Professional Membership -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-lg border-0 membership-card">
                    <div class="card-header bg-primary text-white text-center py-3">
                        <h3 class="mb-0">Professional</h3>
                            <div class="price-amount h2 mb-0 mt-2">$550</div>
                        <small class="opacity-75">per year</small>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="pricing-features flex-grow-1">
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-check-circle text-success me-2 mt-1"></i>
                                    <span>Full voting rights in CSZ affairs</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-certificate text-success me-2 mt-1"></i>
                                    <span>Professional certification and recognition</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-users text-success me-2 mt-1"></i>
                                    <span>Access to professional committees</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-graduation-cap text-success me-2 mt-1"></i>
                                    <span>Continuing Professional Development (CPD)</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-handshake text-success me-2 mt-1"></i>
                                    <span>Networking opportunities</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-auto">
                            <a href="{{ route('professional-registration') }}" class="btn btn-primary btn-lg w-100">
                                <i class="fas fa-arrow-right me-2"></i>Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Graduate Membership -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-lg border-0 membership-card">
                    <div class="card-header bg-info text-white text-center py-3">
                        <h3 class="mb-0">Graduate</h3>
                        <div class="price-amount h2 mb-0 mt-2">$250</div>
                        <small class="opacity-75">per year</small>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="pricing-features flex-grow-1">
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-graduation-cap text-info me-2 mt-1"></i>
                                    <span>Recent graduate from recognized institution</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-clock text-info me-2 mt-1"></i>
                                    <span>Pathway to professional membership</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-book text-info me-2 mt-1"></i>
                                    <span>Access to professional development resources</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-network-wired text-info me-2 mt-1"></i>
                                    <span>Professional networking opportunities</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-briefcase text-info me-2 mt-1"></i>
                                    <span>Career guidance and mentorship</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-auto">
                            <a href="{{ route('graduate-registration') }}" class="btn btn-info btn-lg w-100">
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
                    <div class="card-header bg-success text-white text-center py-3">
                        <h3 class="mb-0">Student</h3>
                        <div class="price-amount h2 mb-0 mt-2">$50</div>
                        <small class="opacity-75">per year</small>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="pricing-features flex-grow-1">
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-user-graduate text-success me-2 mt-1"></i>
                                    <span>Must be a bona fide student at recognized institution</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-book text-success me-2 mt-1"></i>
                                    <span>Following approved course of study</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-check-circle text-success me-2 mt-1"></i>
                                    <span>Chapter and Membership Committee approval required</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-calendar-alt text-success me-2 mt-1"></i>
                                    <span>Access to student events and workshops</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-users text-success me-2 mt-1"></i>
                                    <span>Student chapter participation</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-auto">
                            <a href="{{ route('student-registration') }}" class="btn btn-success btn-lg w-100">
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
                    <div class="card-header bg-warning text-dark text-center py-3">
                        <h3 class="mb-0">Associate</h3>
                        <div class="price-amount h2 mb-0 mt-2">$220</div>
                        <small class="opacity-75">per year</small>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="pricing-features flex-grow-1">
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-certificate text-warning me-2 mt-1"></i>
                                    <span>Intermediate level membership</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-handshake text-warning me-2 mt-1"></i>
                                    <span>Professional networking access</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-book-open text-warning me-2 mt-1"></i>
                                    <span>Educational resources and materials</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-calendar text-warning me-2 mt-1"></i>
                                    <span>Event participation privileges</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-auto">
                            <a href="{{ route('associate-registration') }}" class="btn btn-warning btn-lg w-100 text-dark">
                                <i class="fas fa-arrow-right me-2"></i>Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Affiliate Membership -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-lg border-0 membership-card">
                    <div class="card-header bg-secondary text-white text-center py-3">
                        <h3 class="mb-0">Affiliate</h3>
                        <div class="price-amount h2 mb-0 mt-2">$300</div>
                        <small class="opacity-75">per year</small>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="pricing-features flex-grow-1">
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-link text-secondary me-2 mt-1"></i>
                                    <span>Supporting membership category</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-envelope text-secondary me-2 mt-1"></i>
                                    <span>Access to newsletters and updates</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-calendar-check text-secondary me-2 mt-1"></i>
                                    <span>Selected event invitations</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-heart text-secondary me-2 mt-1"></i>
                                    <span>Support CSZ mission and values</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-auto">
                            <a href="{{ route('affiliate-registration') }}" class="btn btn-secondary btn-lg w-100">
                                <i class="fas fa-arrow-right me-2"></i>Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Institutional Membership -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow-lg border-0 membership-card">
                    <div class="card-header bg-dark text-white text-center py-3">
                        <h3 class="mb-0">Institutional</h3>
                        <div class="price-amount h2 mb-0 mt-2">$2100</div>
                        <small class="opacity-75">per year</small>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="pricing-features flex-grow-1">
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-building text-dark me-2 mt-1"></i>
                                    <span>For organizations and institutions</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-users-cog text-dark me-2 mt-1"></i>
                                    <span>Multiple member access</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-star text-dark me-2 mt-1"></i>
                                    <span>Premium benefits and services</span>
                                </li>
                                <li class="d-flex align-items-start mb-3">
                                    <i class="fas fa-handshake text-dark me-2 mt-1"></i>
                                    <span>Partnership opportunities</span>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-auto">
                                <a href="{{ route('institutional-registration') }}" class="btn btn-dark btn-lg w-100">
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
                                    <i class="fas fa-envelope fa-2x text-primary mb-2"></i>
                                    <p class="mb-0"><strong>Email:</strong><br>membership@csz.org.zw</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="contact-item">
                                    <i class="fas fa-phone fa-2x text-primary mb-2"></i>
                                    <p class="mb-0"><strong>Phone:</strong><br>+263 4 123 456</p>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="contact-item">
                                    <i class="fas fa-clock fa-2x text-primary mb-2"></i>
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
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
}

.membership-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15) !important;
}

.popular {
    position: relative;
    border: 3px solid #28a745 !important;
}

.popular-badge {
    position: absolute;
    top: -15px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 10;
}

.popular-badge span {
    background: linear-gradient(45deg, #ff6b6b, #ee5a24);
    color: white;
    padding: 8px 20px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: bold;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
}

.price-amount {
    font-weight: bold;
    font-size: 2.5rem;
}

.contact-item {
    padding: 20px;
}

.hero-section {
    background-attachment: fixed;
    background-size: cover;
    background-position: center;
}

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
    </script>
    </div> <!-- End main-content -->
</body>
</html>
