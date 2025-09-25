@extends('layouts.master')

@section('content')

    <div class="container-fluid">
        <!-- Page Title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">CPD Events & Opportunities</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('member-dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">CPD Events</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filter and Search -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="event_search">Search Events</label>
                                    <input type="text" id="event_search" class="form-control" placeholder="Search by title, topic, or location">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="event_category">CPD Category</label>
                                    <select id="event_category" class="form-control">
                                        <option value="">All Categories</option>
                                        <option value="level1">Level 1 - Self-Directed</option>
                                        <option value="level2_professional">Level 2 - Professional</option>
                                        <option value="level2_education">Level 2 - Education</option>
                                        <option value="level2_volunteer">Level 2 - Volunteer</option>
                                        <option value="level3">Level 3 - Formal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="event_format">Format</label>
                                    <select id="event_format" class="form-control">
                                        <option value="">All Formats</option>
                                        <option value="online">Online</option>
                                        <option value="in_person">In-Person</option>
                                        <option value="hybrid">Hybrid</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="event_date_range">Date Range</label>
                                    <select id="event_date_range" class="form-control">
                                        <option value="upcoming">Upcoming</option>
                                        <option value="this_month">This Month</option>
                                        <option value="next_month">Next Month</option>
                                        <option value="next_3_months">Next 3 Months</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex align-items-end">
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary me-2">
                                        <i class="bx bx-search me-1"></i> Search
                                    </button>
                                    <a href="{{ route('user.cpd-points') }}" class="btn btn-success">
                                        <i class="bx bx-plus me-1"></i> Submit Activity
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Featured CPD Events -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">🌟 Featured CPD Events</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card border border-primary">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="badge badge-primary">Level 2 - Professional</span>
                                            <span class="badge badge-success">15 CPD Units</span>
                                        </div>
                                        <h5 class="card-title">Annual ICT Conference 2024</h5>
                                        <p class="text-muted mb-2">
                                            <i class="bx bx-calendar me-1"></i> December 15-16, 2024<br>
                                            <i class="bx bx-map me-1"></i> Harare International Conference Centre<br>
                                            <i class="bx bx-time me-1"></i> 9:00 AM - 5:00 PM
                                        </p>
                                        <p class="card-text">Join industry leaders discussing emerging technologies, digital transformation, and the future of ICT in Zimbabwe.</p>
                                        <div class="d-flex gap-2">
                                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#eventDetailModal">
                                                <i class="bx bx-info-circle me-1"></i> Details
                                            </button>
                                            <button class="btn btn-success btn-sm">
                                                <i class="bx bx-calendar-plus me-1"></i> Register
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border border-info">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="badge badge-info">Level 2 - Education</span>
                                            <span class="badge badge-success">8 CPD Units</span>
                                        </div>
                                        <h5 class="card-title">Cybersecurity Masterclass</h5>
                                        <p class="text-muted mb-2">
                                            <i class="bx bx-calendar me-1"></i> November 20, 2024<br>
                                            <i class="bx bx-globe me-1"></i> Online Workshop<br>
                                            <i class="bx bx-time me-1"></i> 9:00 AM - 5:00 PM
                                        </p>
                                        <p class="card-text">Comprehensive workshop on modern cybersecurity threats, prevention strategies, and incident response.</p>
                                        <div class="d-flex gap-2">
                                            <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#eventDetailModal">
                                                <i class="bx bx-info-circle me-1"></i> Details
                                            </button>
                                            <button class="btn btn-success btn-sm">
                                                <i class="bx bx-calendar-plus me-1"></i> Register
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border border-warning">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between mb-2">
                                            <span class="badge badge-warning">Level 2 - Volunteer</span>
                                            <span class="badge badge-success">6 CPD Units</span>
                                        </div>
                                        <h5 class="card-title">CSZ Technical Committee</h5>
                                        <p class="text-muted mb-2">
                                            <i class="bx bx-calendar me-1"></i> Ongoing Opportunity<br>
                                            <i class="bx bx-users me-1"></i> Committee Service<br>
                                            <i class="bx bx-time me-1"></i> Monthly Meetings
                                        </p>
                                        <p class="card-text">Join our technical standards committee to contribute to ICT policy development and earn CPD units.</p>
                                        <div class="d-flex gap-2">
                                            <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#eventDetailModal">
                                                <i class="bx bx-info-circle me-1"></i> Details
                                            </button>
                                            <button class="btn btn-success btn-sm">
                                                <i class="bx bx-user-plus me-1"></i> Apply
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Upcoming Events Timeline -->
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">📅 Upcoming CPD Events</h4>
                    </div>
                    <div class="card-body">
                        <div class="timeline">
                            <div class="timeline-item">
                                <div class="timeline-marker bg-primary"></div>
                                <div class="timeline-content">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Cloud Computing Workshop</h6>
                                            <p class="text-muted mb-2">AWS Fundamentals and Best Practices</p>
                                            <div class="d-flex gap-3 text-muted small">
                                                <span><i class="bx bx-calendar me-1"></i> Nov 25, 2024</span>
                                                <span><i class="bx bx-time me-1"></i> 2:00 PM - 6:00 PM</span>
                                                <span><i class="bx bx-map me-1"></i> Online</span>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <span class="badge badge-primary mb-2">Level 2</span><br>
                                            <span class="badge badge-info badge-pill">4 CPD Units</span><br>
                                            <button class="btn btn-outline-primary btn-xs mt-2">Register</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <div class="timeline-marker bg-success"></div>
                                <div class="timeline-content">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">AI and Machine Learning Seminar</h6>
                                            <p class="text-muted mb-2">Practical Applications in Business</p>
                                            <div class="d-flex gap-3 text-muted small">
                                                <span><i class="bx bx-calendar me-1"></i> Dec 5, 2024</span>
                                                <span><i class="bx bx-time me-1"></i> 9:00 AM - 12:00 PM</span>
                                                <span><i class="bx bx-map me-1"></i> UZ Campus</span>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <span class="badge badge-info mb-2">Level 2</span><br>
                                            <span class="badge badge-info badge-pill">3 CPD Units</span><br>
                                            <button class="btn btn-outline-success btn-xs mt-2">Register</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <div class="timeline-marker bg-warning"></div>
                                <div class="timeline-content">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Data Privacy and Protection Training</h6>
                                            <p class="text-muted mb-2">GDPR Compliance and Local Regulations</p>
                                            <div class="d-flex gap-3 text-muted small">
                                                <span><i class="bx bx-calendar me-1"></i> Dec 12, 2024</span>
                                                <span><i class="bx bx-time me-1"></i> 1:00 PM - 5:00 PM</span>
                                                <span><i class="bx bx-map me-1"></i> Hybrid</span>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <span class="badge badge-danger mb-2">Level 3</span><br>
                                            <span class="badge badge-info badge-pill">4 CPD Units</span><br>
                                            <button class="btn btn-outline-warning btn-xs mt-2">Register</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <div class="timeline-marker bg-info"></div>
                                <div class="timeline-content">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Project Management Certification Prep</h6>
                                            <p class="text-muted mb-2">PMP Exam Preparation Course</p>
                                            <div class="d-flex gap-3 text-muted small">
                                                <span><i class="bx bx-calendar me-1"></i> Jan 15-17, 2025</span>
                                                <span><i class="bx bx-time me-1"></i> 9:00 AM - 5:00 PM</span>
                                                <span><i class="bx bx-map me-1"></i> Rainbow Towers</span>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <span class="badge badge-danger mb-2">Level 3</span><br>
                                            <span class="badge badge-info badge-pill">24 Hours</span><br>
                                            <button class="btn btn-outline-info btn-xs mt-2">Register</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <button class="btn btn-outline-primary">
                                <i class="bx bx-refresh me-1"></i> Load More Events
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">📚 CPD Resources</h4>
                    </div>
                    <div class="card-body">
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="mb-1">Online Course Library</h6>
                                        <small class="text-muted">Self-paced learning modules</small>
                                    </div>
                                    <span class="badge badge-primary">Level 1</span>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="mb-1">Webinar Archive</h6>
                                        <small class="text-muted">Past recorded sessions</small>
                                    </div>
                                    <span class="badge badge-info">Level 2</span>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="mb-1">Research Papers</h6>
                                        <small class="text-muted">Latest ICT research</small>
                                    </div>
                                    <span class="badge badge-primary">Level 1</span>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h6 class="mb-1">Mentorship Program</h6>
                                        <small class="text-muted">Professional guidance</small>
                                    </div>
                                    <span class="badge badge-warning">Level 2</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">🎯 My CPD Progress</h4>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <h4 class="text-primary">18/20</h4>
                            <p class="text-muted mb-0">CPD Units (2024)</p>
                            <div class="progress mt-2">
                                <div class="progress-bar bg-success" style="width: 90%"></div>
                            </div>
                        </div>
                        <div class="d-grid">
                            <a href="{{ route('user.cpd-points') }}" class="btn btn-primary btn-sm">
                                <i class="bx bx-tachometer me-1"></i> View Full Dashboard
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">📅 This Month</h4>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info">
                            <ul class="mb-0 small">
                                <li><strong>5 Events</strong> available</li>
                                <li><strong>32 CPD Units</strong> potential</li>
                                <li><strong>3 Online</strong> workshops</li>
                                <li><strong>2 In-person</strong> seminars</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Event Detail Modal -->
        <div class="modal fade" id="eventDetailModal" tabindex="-1" role="dialog" aria-labelledby="eventDetailModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="eventDetailModalLabel">
                            <i class="bx bx-info-circle text-primary me-2"></i>
                            Event Details
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="fw-bold">Event Title:</label>
                                    <p>Annual ICT Conference 2024</p>
                                </div>
                                <div class="mb-3">
                                    <label class="fw-bold">Category:</label>
                                    <p><span class="badge badge-primary">Level 2 - Professional Activities</span></p>
                                </div>
                                <div class="mb-3">
                                    <label class="fw-bold">Date & Time:</label>
                                    <p>December 15-16, 2024<br>9:00 AM - 5:00 PM</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="fw-bold">CPD Units Available:</label>
                                    <p><span class="badge badge-success badge-pill">15 CPD Units</span></p>
                                </div>
                                <div class="mb-3">
                                    <label class="fw-bold">Location:</label>
                                    <p>Harare International Conference Centre</p>
                                </div>
                                <div class="mb-3">
                                    <label class="fw-bold">Registration Fee:</label>
                                    <p>$50 (Members) / $75 (Non-members)</p>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="fw-bold">Description:</label>
                            <p class="text-muted">Join industry leaders, technology experts, and ICT professionals for two days of insightful presentations, workshops, and networking opportunities. Topics include digital transformation, cybersecurity, AI applications, and the future of technology in Zimbabwe.</p>
                        </div>

                        <div class="mb-3">
                            <label class="fw-bold">Learning Objectives:</label>
                            <ul class="text-muted">
                                <li>Understand current trends in digital transformation</li>
                                <li>Learn about emerging cybersecurity threats and solutions</li>
                                <li>Explore AI and machine learning applications</li>
                                <li>Network with industry professionals</li>
                                <li>Gain insights into future technology developments</li>
                            </ul>
                        </div>

                        <div class="mb-3">
                            <label class="fw-bold">Requirements:</label>
                            <ul class="text-muted">
                                <li>Active CSZ membership (for member rates)</li>
                                <li>Registration required by December 10, 2024</li>
                                <li>Attendance at minimum 80% of sessions for full CPD units</li>
                                <li>Completion of evaluation forms</li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">
                            <i class="bx bx-calendar-plus me-1"></i> Register Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
