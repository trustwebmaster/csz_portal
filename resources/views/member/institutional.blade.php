<!DOCTYPE html>
<html lang="en">

<!-- CSZ Institutional Membership Registration -->
<head>
        <meta charset="utf-8" />
        <title>CSZ Membership | Institutional Membership</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Computer Society of Zimbabwe - Institutional Membership Registration" name="description" />
        <meta content="CSZ" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('img-assets/favicon.ico') }}">
        <link href="{{ ('Adminto/assets/libs/bootstrap-datepicker/bootstrap-datepicker.css') }}" rel="stylesheet">
        <link href="{{ ('Adminto/assets/libs/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
        <link href="{{ ('Adminto/assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet" />
        <!-- Bootstrap Css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Icons Css -->
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css" rel="stylesheet">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <!-- Custom Css -->
        <style>
            :root {
                --primary-color: #1A237E;
                --secondary-color: #E57373;
                --accent-color: #FFD700;
                --text-color: #333;
                --light-bg: #f8f9fa;
                --success-color: #4CAF50;
                --warning-color: #FFC107;
                --error-color: #F44336;
            }

            body {
                font-family: 'Poppins', sans-serif;
                background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
                min-height: 100vh;
                position: relative;
                overflow-x: hidden;
            }

            body::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 300px;
                background: linear-gradient(135deg, var(--primary-color) 0%, #3949AB 100%);
                z-index: -1;
            }

            .registration-container {
                max-width: 1000px;
                margin: 2rem auto;
                position: relative;
                z-index: 1;
            }

            .card {
                border: none;
                border-radius: 20px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.1);
                overflow: hidden;
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(10px);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 15px 40px rgba(0,0,0,0.15);
            }

            .card-header {
                background: linear-gradient(135deg, var(--primary-color) 0%, #3949AB 100%);
                color: white;
                border-radius: 20px 20px 0 0 !important;
                padding: 2rem;
                position: relative;
                overflow: hidden;
            }

            .card-header::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><rect x="20" y="20" width="60" height="60" fill="rgba(255,255,255,0.1)" rx="5"/></svg>') no-repeat center center;
                background-size: 80% 80%;
                opacity: 0.1;
            }

            .logo-container {
                position: relative;
                display: inline-block;
                margin-bottom: 1.5rem;
            }

            .logo-container img {
                height: 70px;
                filter: drop-shadow(0 4px 6px rgba(0,0,0,0.1));
                transition: transform 0.3s ease;
            }

            .logo-container:hover img {
                transform: scale(1.05);
            }

            .form-wizard-header {
                background: white;
                border-radius: 15px;
                padding: 1.5rem;
                margin-bottom: 2rem;
                box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            }

            .nav-pills {
                background: var(--light-bg);
                padding: 0.5rem;
                border-radius: 12px;
            }

            .nav-pills .nav-link {
                color: var(--text-color);
                font-weight: 500;
                padding: 1rem 1.5rem;
                border-radius: 10px;
                transition: all 0.3s ease;
                position: relative;
                overflow: hidden;
            }

            .nav-pills .nav-link::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: var(--primary-color);
                opacity: 0;
                transition: opacity 0.3s ease;
                z-index: -1;
            }

            .nav-pills .nav-link:hover::before {
                opacity: 0.1;
            }

            .nav-pills .nav-link.active {
                background: var(--primary-color);
                color: white;
                transform: translateY(-2px);
                box-shadow: 0 5px 15px rgba(26, 35, 126, 0.2);
            }

            .nav-pills .nav-link i {
                margin-right: 0.5rem;
                font-size: 1.2rem;
            }

            .form-control {
                border-radius: 12px;
                padding: 0.75rem 1rem;
                border: 2px solid #e0e0e0;
                transition: all 0.3s ease;
                font-size: 0.95rem;
            }

            .form-control:focus {
                border-color: var(--primary-color);
                box-shadow: 0 0 0 0.2rem rgba(26, 35, 126, 0.15);
            }

            .form-label {
                font-weight: 500;
                color: var(--text-color);
                margin-bottom: 0.5rem;
                font-size: 0.9rem;
            }

            .btn {
                padding: 0.75rem 1.5rem;
                border-radius: 12px;
                font-weight: 500;
                transition: all 0.3s ease;
                position: relative;
                overflow: hidden;
            }

            .btn::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(255,255,255,0.1);
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }

            .btn:hover::before {
                transform: translateX(0);
            }

            .btn-primary {
                background: var(--primary-color);
                border: none;
            }

            .btn-primary:hover {
                background: #3949AB;
                transform: translateY(-2px);
                box-shadow: 0 5px 15px rgba(26, 35, 126, 0.2);
            }

            .btn-secondary {
                background: #757575;
                border: none;
            }

            .btn-secondary:hover {
                background: #616161;
                transform: translateY(-2px);
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            }

            .btn-success {
                background: var(--success-color);
                border: none;
            }

            .btn-success:hover {
                background: #43A047;
                transform: translateY(-2px);
                box-shadow: 0 5px 15px rgba(76, 175, 80, 0.2);
            }

            .progress {
                height: 8px;
                border-radius: 4px;
                margin: 1rem 0;
                background: #e0e0e0;
                overflow: hidden;
            }

            .progress-bar {
                background: linear-gradient(90deg, var(--primary-color) 0%, #3949AB 100%);
                transition: width 0.5s ease;
            }

            .invalid-feedback {
                font-size: 0.8rem;
                color: var(--error-color);
                margin-top: 0.25rem;
            }

            .custom-file-input {
                position: relative;
                display: inline-block;
                width: 100%;
            }

            .custom-file-input input[type="file"] {
                position: absolute;
                left: 0;
                top: 0;
                opacity: 0;
                width: 100%;
                height: 100%;
                cursor: pointer;
            }

            .custom-file-label {
                display: block;
                padding: 0.75rem 1rem;
                background: var(--light-bg);
                border: 2px solid #e0e0e0;
                border-radius: 12px;
                cursor: pointer;
                transition: all 0.3s ease;
            }

            .custom-file-label:hover {
                border-color: var(--primary-color);
                background: rgba(26, 35, 126, 0.05);
            }

            .payment-section {
                text-align: center;
                padding: 2.5rem;
                background: var(--light-bg);
                border-radius: 15px;
                margin-top: 2rem;
                box-shadow: 0 5px 15px rgba(0,0,0,0.05);
                position: relative;
                overflow: hidden;
            }

            .payment-section::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 5px;
                background: linear-gradient(90deg, var(--primary-color) 0%, #3949AB 100%);
            }

            .payment-logo {
                max-width: 200px;
                margin-bottom: 2rem;
                filter: drop-shadow(0 4px 6px rgba(0,0,0,0.1));
                transition: transform 0.3s ease;
            }

            .payment-logo:hover {
                transform: scale(1.05);
            }

            .form-check {
                margin-top: 1rem;
                padding-left: 1.8rem;
            }

            .form-check-input {
                width: 1.2rem;
                height: 1.2rem;
                margin-top: 0.2rem;
                margin-left: -1.8rem;
                border: 2px solid #e0e0e0;
                transition: all 0.3s ease;
            }

            .form-check-input:checked {
                background-color: var(--primary-color);
                border-color: var(--primary-color);
            }

            .form-check-label {
                font-size: 0.9rem;
                color: var(--text-color);
            }

            .membership-info {
                background: linear-gradient(135deg, rgba(26, 35, 126, 0.05) 0%, rgba(57, 73, 171, 0.05) 100%);
                border-radius: 12px;
                padding: 1.5rem;
                margin-bottom: 2rem;
                border: 2px solid rgba(26, 35, 126, 0.1);
            }

            .membership-info h5 {
                color: var(--primary-color);
                font-weight: 600;
                margin-bottom: 1rem;
                display: flex;
                align-items: center;
                gap: 0.5rem;
            }

            .membership-info h5 i {
                font-size: 1.4rem;
            }

            .membership-info .info-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
                gap: 1.5rem;
                margin-top: 1rem;
            }

            .info-card {
                background: white;
                border-radius: 8px;
                padding: 1rem;
                border: 1px solid #e0e0e0;
                transition: all 0.3s ease;
            }

            .info-card:hover {
                transform: translateY(-2px);
                box-shadow: 0 4px 8px rgba(0,0,0,0.05);
                border-color: var(--primary-color);
            }

            .info-card h6 {
                color: var(--primary-color);
                font-weight: 600;
                margin-bottom: 0.5rem;
                display: flex;
                align-items: center;
                gap: 0.5rem;
            }

            .info-card h6 i {
                font-size: 1.2rem;
            }

            .info-card p {
                color: var(--text-color);
                font-size: 0.9rem;
                margin-bottom: 0;
                line-height: 1.5;
            }

            .info-card ul {
                list-style: none;
                padding-left: 0;
                margin-bottom: 0;
            }

            .info-card ul li {
                position: relative;
                padding-left: 1.5rem;
                margin-bottom: 0.5rem;
                font-size: 0.9rem;
                color: var(--text-color);
            }

            .info-card ul li:before {
                content: '✓';
                position: absolute;
                left: 0;
                color: var(--success-color);
                font-weight: bold;
            }

            .declaration-section {
                background: var(--light-bg);
                border-radius: 12px;
                padding: 1.5rem;
                margin-bottom: 2rem;
            }

            .declaration-box {
                background: white;
                border-radius: 8px;
                border: 2px solid #e0e0e0;
                padding: 1.5rem;
            }

            .declaration-section h5 {
                color: var(--primary-color);
                font-weight: 600;
            }

            .declaration-box .form-check {
                margin: 0.5rem 0;
            }

            .declaration-box .form-check-input:checked {
                background-color: var(--primary-color);
                border-color: var(--primary-color);
            }

            .declaration-box .form-check-label {
                font-size: 0.95rem;
                color: var(--text-color);
                line-height: 1.5;
            }

            .company-details-section {
                background: linear-gradient(135deg, rgba(229, 115, 115, 0.05) 0%, rgba(26, 35, 126, 0.05) 100%);
                border-radius: 12px;
                padding: 1.5rem;
                margin-bottom: 2rem;
                border: 2px solid rgba(229, 115, 115, 0.1);
            }

            .company-details-section h5 {
                color: var(--secondary-color);
                font-weight: 600;
                margin-bottom: 1rem;
                display: flex;
                align-items: center;
                gap: 0.5rem;
            }

            .company-details-section h5 i {
                font-size: 1.4rem;
            }

            /* Animation classes */
            .fade-in {
                animation: fadeIn 0.5s ease forwards;
            }

            .slide-in {
                animation: slideIn 0.5s ease forwards;
            }

            .scale-in {
                animation: scaleIn 0.5s ease forwards;
            }

            @keyframes fadeIn {
                from { opacity: 0; }
                to { opacity: 1; }
            }

            @keyframes slideIn {
                from { transform: translateY(20px); opacity: 0; }
                to { transform: translateY(0); opacity: 1; }
            }

            @keyframes scaleIn {
                from { transform: scale(0.95); opacity: 0; }
                to { transform: scale(1); opacity: 1; }
            }

            @media (max-width: 768px) {
                .registration-container {
                    margin: 1rem;
                }

                .nav-pills .nav-link {
                    padding: 0.75rem;
                }

                .card-header {
                    padding: 1.5rem;
                }

                .payment-section {
                    padding: 1.5rem;
                }

                .membership-info .info-grid {
                    grid-template-columns: 1fr;
                }
            }
        </style>
    </head>

<body class="authentication-bg">
    <div class="registration-container">
        <div class="card">
            <div class="card-header text-center">
                <div class="logo-container">
                    <img src="{{ asset('img-assets/csz.png') }}" alt="CSZ Logo">
                </div>
                <h4 class="mb-0">Institutional Membership Registration</h4>
                <p class="mb-0 mt-2 opacity-75">Join the Computer Society of Zimbabwe as an institutional member and strengthen Zimbabwe's ICT ecosystem</p>
            </div>

            <div class="card-body p-4">
                <form id="registrationForm" action="{{ route('initialise') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-wizard-header">
                        <ul class="nav nav-pills nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="pill" href="#company">
                                    <i class="mdi mdi-office-building"></i>
                                    <span class="d-none d-sm-inline">Company</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="pill" href="#representative">
                                    <i class="mdi mdi-account-tie"></i>
                                    <span class="d-none d-sm-inline">Representative</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="pill" href="#payment">
                                    <i class="mdi mdi-credit-card"></i>
                                    <span class="d-none d-sm-inline">Payment</span>
                                </a>
                            </li>
                        </ul>

                        <div class="progress mt-3">
                            <div class="progress-bar" role="progressbar" style="width: 33%"></div>
                        </div>
                    </div>

                    <div class="tab-content">
                        <!-- Company Information Tab -->
                        <div class="tab-pane fade show active fade-in" id="company">
                            <div class="membership-info">
                                <h5><i class="mdi mdi-office-building-outline"></i> Institutional Membership Information</h5>
                                <p>Strengthen Zimbabwe's ICT ecosystem by joining CSZ as an institutional member. Perfect for organizations committed to advancing technology in Zimbabwe.</p>

                                <div class="info-grid">
                                    <div class="info-card">
                                        <h6><i class="mdi mdi-check-decagram"></i>Eligibility</h6>
                                        <ul>
                                            <li>Corporate and non-corporate organizations</li>
                                            <li>Must demonstrate interest in Society's objectives</li>
                                            <li>Commitment to ICT industry development</li>
                                            <li>Agreement to abide by CSZ Code of Ethics</li>
                                        </ul>
                                    </div>

                                    <div class="info-card">
                                        <h6><i class="mdi mdi-star-circle"></i>Benefits</h6>
                                        <ul>
                                            <li>Corporate networking opportunities</li>
                                            <li>Industry leadership recognition</li>
                                            <li>Access to exclusive corporate events</li>
                                            <li>Policy influence and advocacy platform</li>
                                            <li>Professional development for staff</li>
                                            <li>Thought leadership opportunities</li>
                                        </ul>
                                    </div>

                                    <div class="info-card">
                                        <h6><i class="mdi mdi-information-outline"></i>Investment</h6>
                                        <ul>
                                            <li>Annual membership fee: $2,100</li>
                                            <li>Valid for one year from registration</li>
                                            <li>Renewable annually</li>
                                            <li>Includes corporate representation rights</li>
                                            <li>Access to CSZ institutional network</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="company-details-section">
                                <h5><i class="mdi mdi-domain"></i> Company Details</h5>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Company/Organization Name</label>
                                        <input type="text" class="form-control" name="company_name" required>
                                        <div class="invalid-feedback">Please enter the company name</div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Industry/Sector</label>
                                        <select class="form-select" name="industry" required>
                                            <option value="">Select Industry</option>
                                            <option value="Information Technology">Information Technology</option>
                                            <option value="Telecommunications">Telecommunications</option>
                                            <option value="Financial Services">Financial Services</option>
                                            <option value="Healthcare">Healthcare</option>
                                            <option value="Education">Education</option>
                                            <option value="Government">Government</option>
                                            <option value="Manufacturing">Manufacturing</option>
                                            <option value="Retail">Retail</option>
                                            <option value="Consulting">Consulting</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <div class="invalid-feedback">Please select an industry</div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Registration Number</label>
                                        <input type="text" class="form-control" name="registration_number" required>
                                        <div class="invalid-feedback">Please enter the company registration number</div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">VAT Number (if applicable)</label>
                                        <input type="text" class="form-control" name="vat_number">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Company Size</label>
                                        <select class="form-select" name="company_size" required>
                                            <option value="">Select Size</option>
                                            <option value="1-10">1-10 employees</option>
                                            <option value="11-50">11-50 employees</option>
                                            <option value="51-200">51-200 employees</option>
                                            <option value="201-500">201-500 employees</option>
                                            <option value="500+">500+ employees</option>
                                        </select>
                                        <div class="invalid-feedback">Please select company size</div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Chapter Affiliation</label>
                                        <select class="form-select" name="chapter" required>
                                            <option value="">Select Chapter</option>
                                            <option value="Gweru">Gweru</option>
                                            <option value="Harare">Harare</option>
                                            <option value="Kwekwe">Kwekwe</option>
                                            <option value="Mutare">Mutare</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a chapter</div>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label class="form-label">Company Address</label>
                                        <textarea class="form-control" name="address" rows="3" required></textarea>
                                        <div class="invalid-feedback">Please enter the company address</div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Company Phone</label>
                                        <div class="input-group">
                                            <span class="input-group-text">+263</span>
                                            <input type="tel" class="form-control" name="company_phone" required>
                                        </div>
                                        <div class="invalid-feedback">Please enter company phone number</div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Company Email</label>
                                        <input type="email" class="form-control" name="company_email" required>
                                        <div class="invalid-feedback">Please enter a valid company email</div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Website (optional)</label>
                                        <input type="url" class="form-control" name="website" placeholder="https://example.com">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Year Established</label>
                                        <input type="number" class="form-control" name="year_established" min="1900" max="{{ date('Y') }}" required>
                                        <div class="invalid-feedback">Please enter the year established</div>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label class="form-label">Company Description</label>
                                        <textarea class="form-control" name="company_description" rows="4" required placeholder="Brief description of your company's activities, services, and objectives..."></textarea>
                                        <div class="invalid-feedback">Please provide a company description</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Representative Information Tab -->
                        <div class="tab-pane fade slide-in" id="representative">
                            <div class="company-details-section">
                                <h5><i class="mdi mdi-account-tie"></i> Authorized Representative Details</h5>
                                <p class="text-muted mb-3">Please provide details of the person authorized to represent your organization in CSZ matters.</p>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Representative Title/Position</label>
                                        <input type="text" class="form-control" name="rep_title" required placeholder="e.g., CEO, CTO, IT Director">
                                        <div class="invalid-feedback">Please enter the representative's title</div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" name="firstname" required>
                                        <div class="invalid-feedback">Please enter first name</div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Surname</label>
                                        <input type="text" class="form-control" name="surname" required>
                                        <div class="invalid-feedback">Please enter surname</div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Date of Birth</label>
                                        <input type="date" class="form-control" name="date_of_birth" required>
                                        <div class="invalid-feedback">Please enter date of birth</div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" class="form-control" name="email" required>
                                        <div class="invalid-feedback">Please enter a valid email address</div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Mobile Number</label>
                                        <div class="input-group">
                                            <span class="input-group-text">+263</span>
                                            <input type="tel" class="form-control" name="number" pattern="^[7-8][1-9][0-9]{7}$" required>
                                        </div>
                                        <div class="invalid-feedback">Please enter a valid Zimbabwean mobile number</div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" name="password" id="password" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$">
                                            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                                <i class="mdi mdi-eye"></i>
                                            </button>
                                        </div>
                                        <div class="invalid-feedback">Password must be at least 8 characters with letters and numbers</div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Confirm Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
                                            <button class="btn btn-outline-secondary" type="button" id="toggleConfirmPassword">
                                                <i class="mdi mdi-eye"></i>
                                            </button>
                                        </div>
                                        <div class="invalid-feedback">Passwords do not match</div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Professional Qualifications</label>
                                        <input type="text" class="form-control" name="qualifications" required placeholder="e.g., BSc Computer Science, MBA">
                                        <div class="invalid-feedback">Please enter professional qualifications</div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Years of Experience</label>
                                        <select class="form-select" name="experience_years" required>
                                            <option value="">Select Experience</option>
                                            <option value="0-2">0-2 years</option>
                                            <option value="3-5">3-5 years</option>
                                            <option value="6-10">6-10 years</option>
                                            <option value="11-15">11-15 years</option>
                                            <option value="16-20">16-20 years</option>
                                            <option value="20+">20+ years</option>
                                        </select>
                                        <div class="invalid-feedback">Please select years of experience</div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">National ID Document</label>
                                        <div class="custom-file-input">
                                            <input type="file" class="form-control" name="national_id" accept="image/*,.pdf" required>
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                        <div class="invalid-feedback">Please upload national ID</div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Company Registration Certificate</label>
                                        <div class="custom-file-input">
                                            <input type="file" class="form-control" name="school_id" accept="image/*,.pdf" required>
                                            <label class="custom-file-label">Choose file</label>
                                        </div>
                                        <div class="invalid-feedback">Please upload company registration certificate</div>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label class="form-label">Interest Groups</label>
                                        <div class="row g-2">
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="interest_groups[]" value="IT Governance" id="interest1">
                                                    <label class="form-check-label" for="interest1">IT Governance</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="interest_groups[]" value="Cybersecurity" id="interest2">
                                                    <label class="form-check-label" for="interest2">Cybersecurity</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="interest_groups[]" value="Digital Transformation" id="interest3">
                                                    <label class="form-check-label" for="interest3">Digital Transformation</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="interest_groups[]" value="Cloud Technologies" id="interest4">
                                                    <label class="form-check-label" for="interest4">Cloud Technologies</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="interest_groups[]" value="Software Development" id="interest5">
                                                    <label class="form-check-label" for="interest5">Software Development</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="interest_groups[]" value="Data Analytics" id="interest6">
                                                    <label class="form-check-label" for="interest6">Data Analytics</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label class="form-label">Reason For Joining CSZ</label>
                                        <textarea class="form-control" name="notes" rows="4" required placeholder="Please explain why your organization wants to join CSZ and how you plan to contribute to the ICT ecosystem in Zimbabwe..."></textarea>
                                        <div class="invalid-feedback">Please explain your reasons for joining</div>
                                    </div>
                                </div>
                            </div>

                            <div class="declaration-section">
                                <h5 class="mb-3">Institutional Declaration</h5>
                                <div class="declaration-box">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="declaration1" name="declaration[]" required>
                                        <label class="form-check-label" for="declaration1">
                                            1. I hereby apply for institutional membership to the Computer Society of Zimbabwe on behalf of the organization
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="declaration2" name="declaration[]" required>
                                        <label class="form-check-label" for="declaration2">
                                            2. Our organization undertakes to abide by the Constitution, Code of Ethics, Code of Professional Conduct, Rules and by-laws of the Society
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="declaration3" name="declaration[]" required>
                                        <label class="form-check-label" for="declaration3">
                                            3. I am authorized to represent this organization and commit to its membership obligations
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="declaration4" name="declaration[]" required>
                                        <label class="form-check-label" for="declaration4">
                                            4. I hereby enclose proof of payment of the non-refundable application processing fee
                                        </label>
                                    </div>
                                </div>
                                <div class="invalid-feedback">You must agree to all declarations before proceeding</div>
                            </div>
                        </div>

                        <!-- Payment Tab -->
                        <div class="tab-pane fade scale-in" id="payment">
                            <div class="payment-section">
                                <img src="images/paynow.svg" alt="PayNow" class="payment-logo">

                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label class="form-label">Ecocash Number</label>
                                            <div class="input-group">
                                                <span class="input-group-text">07</span>
                                                <input type="tel" class="form-control" name="ecocash_number" pattern="[1-9][0-9]{7}" required>
                                            </div>
                                            <div class="invalid-feedback">Please enter a valid Ecocash number</div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Membership Amount</label>
                                            <div class="input-group">
                                                <span class="input-group-text">$</span>
                                                <input type="number" class="form-control" name="amount" value="2100" readonly>
                                            </div>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="terms" required>
                                            <label class="form-check-label" for="terms">
                                                I agree to the <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">Terms and Conditions</a>
                                            </label>
                                            <div class="invalid-feedback">You must agree to the terms and conditions</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <button type="button" class="btn btn-secondary" id="prevBtn">Previous</button>
                        <button type="button" class="btn btn-primary" id="nextBtn">Next</button>
                        <button type="submit" class="btn btn-success" id="submitBtn" style="display: none;">Submit Registration</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('registrationForm');
            const tabs = document.querySelectorAll('.nav-link');
            const progressBar = document.querySelector('.progress-bar');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const submitBtn = document.getElementById('submitBtn');
            let currentTab = 0;

            // Update progress bar
            function updateProgress() {
                const progress = ((currentTab + 1) / tabs.length) * 100;
                progressBar.style.width = progress + '%';
            }

            // Show/hide buttons
            function updateButtons() {
                prevBtn.style.display = currentTab === 0 ? 'none' : 'inline-block';
                nextBtn.style.display = currentTab === tabs.length - 1 ? 'none' : 'inline-block';
                submitBtn.style.display = currentTab === tabs.length - 1 ? 'inline-block' : 'none';
            }

            // Validate current tab
            function validateTab() {
                const currentPane = document.querySelector(`.tab-pane:nth-child(${currentTab + 1})`);
                const inputs = currentPane.querySelectorAll('input, select, textarea');
                let isValid = true;

                inputs.forEach(input => {
                    if (input.hasAttribute('required') && !input.value) {
                        isValid = false;
                        input.classList.add('is-invalid');
                    } else {
                        input.classList.remove('is-invalid');
                    }
                });

                return isValid;
            }

            // Switch tabs
            function switchTab(n) {
                if (n === 1 && !validateTab()) return;

                tabs[currentTab].classList.remove('active');
                document.querySelectorAll('.tab-pane')[currentTab].classList.remove('show', 'active');

                currentTab = n;

                tabs[currentTab].classList.add('active');
                document.querySelectorAll('.tab-pane')[currentTab].classList.add('show', 'active');

                updateProgress();
                updateButtons();
            }

            // Event listeners
            prevBtn.addEventListener('click', () => switchTab(currentTab - 1));
            nextBtn.addEventListener('click', () => switchTab(currentTab + 1));

            // File input labels
            document.querySelectorAll('input[type="file"]').forEach(input => {
                input.addEventListener('change', function() {
                    const label = this.nextElementSibling;
                    label.textContent = this.files[0]?.name || 'Choose file';
                });
            });

            // Password toggle functionality
            const passwordEl = document.getElementById('password');
            const confirmPasswordEl = document.getElementById('password_confirmation');
            const togglePasswordBtn = document.getElementById('togglePassword');
            const toggleConfirmPasswordBtn = document.getElementById('toggleConfirmPassword');

            if (togglePasswordBtn && passwordEl) {
                togglePasswordBtn.addEventListener('click', function() {
                    const type = passwordEl.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordEl.setAttribute('type', type);
                    this.querySelector('i').className = `mdi mdi-eye${type === 'password' ? '' : '-off'}`;
                });
            }

            if (toggleConfirmPasswordBtn && confirmPasswordEl) {
                toggleConfirmPasswordBtn.addEventListener('click', function() {
                    const type = confirmPasswordEl.getAttribute('type') === 'password' ? 'text' : 'password';
                    confirmPasswordEl.setAttribute('type', type);
                    this.querySelector('i').className = `mdi mdi-eye${type === 'password' ? '' : '-off'}`;
                });
            }

            // Password match validation
            function validatePasswordMatch() {
                if (!passwordEl || !confirmPasswordEl) return;

                if (confirmPasswordEl.value !== passwordEl.value) {
                    confirmPasswordEl.setCustomValidity('Passwords do not match');
                } else {
                    confirmPasswordEl.setCustomValidity('');
                }
            }

            if (confirmPasswordEl) {
                confirmPasswordEl.addEventListener('input', validatePasswordMatch);
            }

            // Form submission
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                } else {
                    // Show success message
                    const alert = document.createElement('div');
                    alert.className = 'alert alert-success fade-in';
                    alert.innerHTML = '<i class="mdi mdi-check-circle me-2"></i> Your institutional membership application has been submitted successfully!';
                    form.insertBefore(alert, form.firstChild);

                    // Disable submit button
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span> Processing...';
                }
                form.classList.add('was-validated');
            });

            // Initialize
            updateProgress();
            updateButtons();
        });
    </script>
</body>
</html>
