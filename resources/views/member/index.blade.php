@extends('layouts.master')

@section('content')
<style>
    .dashboard-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        overflow: hidden;
    }

    .dashboard-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.15);
    }

    .stats-card {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-radius: 15px;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        position: relative;
        overflow: hidden;
    }

    .stats-card::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .stats-card:hover::before {
        transform: scale(1.2);
    }

    .stats-number {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .stats-label {
        font-size: 0.9rem;
        opacity: 0.9;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .welcome-card {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        color: white;
        border-radius: 20px;
        padding: 2rem;
        margin-bottom: 2rem;
        position: relative;
        overflow: hidden;
    }

    .welcome-card::after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 150px;
        height: 150px;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Ccircle cx='30' cy='30' r='4'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
        opacity: 0.3;
    }

    .quick-action-btn {
        background: white;
        border: none;
        border-radius: 12px;
        padding: 1rem;
        text-decoration: none;
        color: #495057;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        height: 100%;
    }

    .quick-action-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        color: #667eea;
        text-decoration: none;
    }

    .quick-action-icon {
        font-size: 2.5rem;
        margin-bottom: 0.5rem;
        color: #667eea;
    }

    .activity-item {
        padding: 1rem;
        border-left: 4px solid #667eea;
        margin-bottom: 1rem;
        background: #f8f9fa;
        border-radius: 0 10px 10px 0;
        transition: all 0.3s ease;
    }

    .activity-item:hover {
        background: #e9ecef;
        border-left-color: #f5576c;
    }

    .membership-status {
        display: inline-block;
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .status-active {
        background: rgba(40, 167, 69, 0.1);
        color: #28a745;
    }

    .feature-highlight {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-radius: 15px;
        padding: 1.5rem;
        text-align: center;
        margin-bottom: 1.5rem;
    }

    .icon-wrapper {
        width: 60px;
        height: 60px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
        font-size: 1.5rem;
    }

    @media (max-width: 768px) {
        .stats-number {
            font-size: 2rem;
        }

        .welcome-card {
            padding: 1.5rem;
        }

        .quick-action-btn {
            margin-bottom: 1rem;
        }
    }
</style>

<div class="container-fluid">
    <!-- Page Title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <div>
                    <h4 class="mb-0 font-size-18">Member Dashboard</h4>
                    <p class="text-muted mb-0">Welcome back! Here's your membership overview</p>
                </div>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">CSZ</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Welcome Section -->
    <div class="row">
        <div class="col-12">
            <div class="welcome-card">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h3 class="mb-2">Welcome back, {{ Auth::user()->name ?? 'Member' }}!</h3>
                        <p class="mb-0 opacity-75">Stay connected with the Computer Society of Zimbabwe and manage your professional development.</p>
                    </div>
                    <div class="col-md-4 text-right">
                        <div class="icon-wrapper">
                            <i class="mdi mdi-account-circle"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="stats-card">
                <div class="stats-number">18</div>
                <div class="stats-label">CPD Units Earned</div>
                <div class="position-absolute" style="bottom: 10px; right: 15px; opacity: 0.3;">
                    <i class="mdi mdi-school" style="font-size: 2rem;"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="stats-card" style="background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);">
                <div class="stats-number">90%</div>
                <div class="stats-label">Compliance Rate</div>
                <div class="position-absolute" style="bottom: 10px; right: 15px; opacity: 0.3;">
                    <i class="mdi mdi-chart-line" style="font-size: 2rem;"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="stats-card" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                <div class="stats-number">3</div>
                <div class="stats-label">Events Attended</div>
                <div class="position-absolute" style="bottom: 10px; right: 15px; opacity: 0.3;">
                    <i class="mdi mdi-calendar-check" style="font-size: 2rem;"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="stats-card" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">
                <div class="stats-number">2</div>
                <div class="stats-label">Years Member</div>
                <div class="position-absolute" style="bottom: 10px; right: 15px; opacity: 0.3;">
                    <i class="mdi mdi-trophy" style="font-size: 2rem;"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="row">
        <!-- Quick Actions -->
        <div class="col-lg-8">
            <div class="card dashboard-card">
                <div class="card-header bg-transparent border-bottom">
                    <h5 class="mb-0"><i class="mdi mdi-flash mr-2 text-primary"></i>Quick Actions</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-3">
                            <a href="{{ route('user.membership-renewal') }}" class="quick-action-btn">
                                <div class="quick-action-icon">
                                    <i class="mdi mdi-refresh"></i>
                                </div>
                                <h6 class="mb-1">Renew Membership</h6>
                                <small class="text-muted">Update your annual membership</small>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-3">
                            <a href="{{ route('user.profile') }}" class="quick-action-btn">
                                <div class="quick-action-icon">
                                    <i class="mdi mdi-account-edit"></i>
                                </div>
                                <h6 class="mb-1">Update Profile</h6>
                                <small class="text-muted">Manage your personal information</small>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-3">
                            <a href="{{ route('user.cpd-points') }}" class="quick-action-btn">
                                <div class="quick-action-icon">
                                    <i class="mdi mdi-chart-donut"></i>
                                </div>
                                <h6 class="mb-1">CPD Progress</h6>
                                <small class="text-muted">Track your development points</small>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-3">
                            <a href="{{ route('user.cpd-events') }}" class="quick-action-btn">
                                <div class="quick-action-icon">
                                    <i class="mdi mdi-calendar-multiple"></i>
                                </div>
                                <h6 class="mb-1">Browse Events</h6>
                                <small class="text-muted">Find upcoming CPD events</small>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-3">
                            <a href="#" class="quick-action-btn">
                                <div class="quick-action-icon">
                                    <i class="mdi mdi-file-document"></i>
                                </div>
                                <h6 class="mb-1">Certificates</h6>
                                <small class="text-muted">Download your certificates</small>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-3">
                            <a href="#" class="quick-action-btn">
                                <div class="quick-action-icon">
                                    <i class="mdi mdi-help-circle"></i>
                                </div>
                                <h6 class="mb-1">Get Support</h6>
                                <small class="text-muted">Contact our support team</small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activities -->
            <div class="card dashboard-card mt-4">
                <div class="card-header bg-transparent border-bottom">
                    <h5 class="mb-0"><i class="mdi mdi-timeline mr-2 text-primary"></i>Recent Activities</h5>
                </div>
                <div class="card-body">
                    <div class="activity-item">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h6 class="mb-1">CPD Activity Approved</h6>
                                <p class="mb-1 text-muted">Your "ICT Conference Presentation" has been approved for 15 CPD units.</p>
                                <small class="text-muted"><i class="mdi mdi-clock-outline mr-1"></i>2 hours ago</small>
                            </div>
                            <span class="badge badge-success">Approved</span>
                        </div>
                    </div>

                    <div class="activity-item">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h6 class="mb-1">Profile Updated</h6>
                                <p class="mb-1 text-muted">You successfully updated your contact information.</p>
                                <small class="text-muted"><i class="mdi mdi-clock-outline mr-1"></i>1 day ago</small>
                            </div>
                            <span class="badge badge-info">Updated</span>
                        </div>
                    </div>

                    <div class="activity-item">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h6 class="mb-1">Event Registration</h6>
                                <p class="mb-1 text-muted">Registered for "Cybersecurity Masterclass" scheduled for Nov 20, 2024.</p>
                                <small class="text-muted"><i class="mdi mdi-clock-outline mr-1"></i>3 days ago</small>
                            </div>
                            <span class="badge badge-primary">Registered</span>
                        </div>
                    </div>

                    <div class="text-center mt-3">
                        <a href="#" class="btn btn-outline-primary btn-sm">View All Activities</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- Membership Status -->
            <div class="card dashboard-card">
                <div class="card-header bg-transparent border-bottom">
                    <h5 class="mb-0"><i class="mdi mdi-card-account-details mr-2 text-primary"></i>Membership Status</h5>
                </div>
                <div class="card-body text-center">
                    <div class="mb-3">
                        <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="Profile" class="rounded-circle" width="80">
                    </div>
                    <h5 class="mb-1">{{ Auth::user()->name ?? 'Member Name' }}</h5>
                    <p class="text-muted mb-2">{{ Auth::user()->email ?? 'member@email.com' }}</p>
                    <span class="membership-status status-active">Professional Member</span>

                    <div class="mt-4">
                        <div class="row text-center">
                            <div class="col-6">
                                <div class="border-right">
                                    <h6 class="mb-1">Joined</h6>
                                    <p class="text-muted mb-0">Mar 2022</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <h6 class="mb-1">Expires</h6>
                                <p class="text-muted mb-0">Mar 2025</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <a href="{{ route('user.membership-renewal') }}" class="btn btn-primary btn-sm">Renew Now</a>
                    </div>
                </div>
            </div>

            <!-- CPD Progress -->
            <div class="card dashboard-card mt-4">
                <div class="card-header bg-transparent border-bottom">
                    <h5 class="mb-0"><i class="mdi mdi-progress-check mr-2 text-primary"></i>CPD Progress</h5>
                </div>
                <div class="card-body text-center">
                    <div class="progress-ring mb-3 position-relative">
                        <svg width="120" height="120">
                            <circle cx="60" cy="60" r="50" stroke="#e9ecef" stroke-width="8" fill="transparent"/>
                            <circle cx="60" cy="60" r="50" stroke="#667eea" stroke-width="8" fill="transparent"
                                    stroke-dasharray="314" stroke-dashoffset="62.8" class="progress-ring-circle"/>
                        </svg>
                        <div class="position-absolute" style="top: 50%; left: 50%; transform: translate(-50%, -50%);">
                            <h4 class="mb-0 text-primary">90%</h4>
                            <small class="text-muted">Complete</small>
                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="col-6">
                            <h6 class="text-primary mb-1">18</h6>
                            <small class="text-muted">Earned</small>
                        </div>
                        <div class="col-6">
                            <h6 class="text-muted mb-1">20</h6>
                            <small class="text-muted">Required</small>
                        </div>
                    </div>

                    <div class="mt-3">
                        <a href="{{ route('user.cpd-points') }}" class="btn btn-outline-primary btn-sm">View Details</a>
                    </div>
                </div>
            </div>

            <!-- Upcoming Events -->
            <div class="card dashboard-card mt-4">
                <div class="card-header bg-transparent border-bottom">
                    <h5 class="mb-0"><i class="mdi mdi-calendar-clock mr-2 text-primary"></i>Upcoming Events</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h6 class="mb-1">Cybersecurity Masterclass</h6>
                                <p class="mb-1 text-muted small">Nov 20, 2024 • Online</p>
                                <small class="text-primary">8 CPD Units</small>
                            </div>
                            <span class="badge badge-success">Registered</span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h6 class="mb-1">Annual ICT Conference</h6>
                                <p class="mb-1 text-muted small">Dec 15, 2024 • Harare</p>
                                <small class="text-primary">15 CPD Units</small>
                            </div>
                            <span class="badge badge-warning">Available</span>
                        </div>
                    </div>

                    <div class="text-center">
                        <a href="{{ route('user.cpd-events') }}" class="btn btn-outline-primary btn-sm">Browse All Events</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature Highlights -->
    <div class="row mt-4">
        <div class="col-lg-4 col-md-6">
            <div class="feature-highlight">
                <div class="icon-wrapper">
                    <i class="mdi mdi-shield-check"></i>
                </div>
                <h5 class="mb-2">Professional Development</h5>
                <p class="mb-0 opacity-75">Track your CPD activities and maintain professional standards with our comprehensive tracking system.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="feature-highlight" style="background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);">
                <div class="icon-wrapper">
                    <i class="mdi mdi-account-group"></i>
                </div>
                <h5 class="mb-2">Networking Events</h5>
                <p class="mb-0 opacity-75">Connect with industry professionals and expand your network through our regular events and workshops.</p>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="feature-highlight" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">
                <div class="icon-wrapper">
                    <i class="mdi mdi-certificate"></i>
                </div>
                <h5 class="mb-2">Certification Support</h5>
                <p class="mb-0 opacity-75">Access resources and support for professional certifications and career advancement opportunities.</p>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animate progress ring
    const progressRing = document.querySelector('.progress-ring-circle');
    if (progressRing) {
        const circumference = 2 * Math.PI * 50; // radius = 50
        const progress = 90; // 90% complete
        const offset = circumference - (progress / 100) * circumference;

        setTimeout(() => {
            progressRing.style.strokeDashoffset = offset;
        }, 500);
    }

    // Add hover effects to stats cards
    const statsCards = document.querySelectorAll('.stats-card');
    statsCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px) scale(1.02)';
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });
});
</script>

@endsection
