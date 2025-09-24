@extends('layouts.master')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Review CPD Submission</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.cpd-points') }}">CPD Management</a></li>
                            <li class="breadcrumb-item active">Review Submission</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <!-- Member Information & Submission Details -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Submission Details</h4>
                    </div>
                    <div class="card-body">
                        <!-- Member Info -->
                        <div class="media mb-4">
                            <a class="image-popup-no-margins" href="http://127.0.0.1:8000/storage/Members/VMw8Yf8mjy5Z1Y1ylJiMUzNuHVZGK2NdLHBbpIDI.jpg">
                                <img class="avatar-lg rounded-circle me-4" alt="" src="http://127.0.0.1:8000/storage/Members/VMw8Yf8mjy5Z1Y1ylJiMUzNuHVZGK2NdLHBbpIDI.jpg" width="75">
                            </a>
                            <div class="media-body overflow-hidden">
                                <h5 class="text-truncate font-size-15 mb-1">John Doe</h5>
                                <p class="text-muted mb-1">Professional Member #PM2024001</p>
                                <p class="text-muted mb-0">john.doe@email.com</p>
                            </div>
                            <div class="align-self-center">
                                <span class="badge badge-warning badge-pill font-size-12">Pending Review</span>
                            </div>
                        </div>

                        <!-- CPD Activity Details -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Activity Title</label>
                                    <p class="text-muted mb-0">ICT Conference: "Future of Digital Transformation"</p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">CPD Category</label>
                                    <p class="mb-0">
                                        <span class="badge badge-primary">Level 2 - Professional Activities</span>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Activity Type</label>
                                    <p class="text-muted mb-0">Conference Presentation (Speaker)</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Date of Activity</label>
                                    <p class="text-muted mb-0">September 15, 2024</p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Duration</label>
                                    <p class="text-muted mb-0">6 hours (Full day conference + presentation)</p>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">CPD Points Claimed</label>
                                    <p class="mb-0">
                                        <span class="badge badge-info badge-pill">15 CPD Units</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Activity Description -->
                        <div class="mb-4">
                            <label class="form-label fw-bold">Activity Description</label>
                            <div class="bg-light p-3 rounded">
                                <p class="mb-0">
                                    Presented a 45-minute session on "Emerging Technologies in Enterprise Architecture"
                                    at the Annual ICT Conference. The presentation covered cloud migration strategies,
                                    microservices architecture, and digital transformation best practices. Engaged with
                                    over 200 attendees and participated in Q&A sessions. Also attended various other
                                    sessions throughout the day related to cybersecurity, AI implementation, and
                                    project management methodologies.
                                </p>
                            </div>
                        </div>

                        <!-- Learning Outcomes -->
                        <div class="mb-4">
                            <label class="form-label fw-bold">Learning Outcomes & Reflection</label>
                            <div class="bg-light p-3 rounded">
                                <ul class="mb-0">
                                    <li>Enhanced understanding of current cloud architecture patterns</li>
                                    <li>Gained insights into AI integration challenges in enterprise environments</li>
                                    <li>Improved presentation and public speaking skills</li>
                                    <li>Networked with industry professionals and potential collaborators</li>
                                    <li>Updated knowledge on latest cybersecurity threats and mitigation strategies</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Evidence Documents -->
                        <div class="mb-4">
                            <label class="form-label fw-bold">Evidence Documents</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card border">
                                        <div class="card-body text-center">
                                            <i class="bx bx-file-blank h2 text-primary"></i>
                                            <h6 class="mt-2">Conference Certificate</h6>
                                            <p class="text-muted mb-2">conference_certificate.pdf</p>
                                            <a href="#" class="btn btn-primary btn-sm">
                                                <i class="bx bx-download me-1"></i> Download
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card border">
                                        <div class="card-body text-center">
                                            <i class="bx bx-file-blank h2 text-success"></i>
                                            <h6 class="mt-2">Presentation Slides</h6>
                                            <p class="text-muted mb-2">presentation_slides.pptx</p>
                                            <a href="#" class="btn btn-success btn-sm">
                                                <i class="bx bx-download me-1"></i> Download
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Admin Review Form -->
                        <div class="border-top pt-4">
                            <h5 class="font-size-15 mb-3">Admin Review</h5>
                            <form action="#" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="awarded_points" class="form-label">Award CPD Points</label>
                                            <input type="number" id="awarded_points" class="form-control"
                                                   value="15" min="0" max="25" placeholder="Enter points to award">
                                            <small class="form-text text-muted">
                                                Recommended: 15 points (based on Level 2 Professional Activity guidelines)
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="review_status" class="form-label">Review Status</label>
                                            <select id="review_status" class="form-control">
                                                <option value="approved">Approve</option>
                                                <option value="declined">Decline</option>
                                                <option value="pending">Request More Information</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="admin_comments" class="form-label">Admin Comments</label>
                                    <textarea id="admin_comments" class="form-control" rows="3"
                                              placeholder="Add comments about this submission (optional)"></textarea>
                                </div>

                                <div class="d-flex gap-2">
                                    <button type="submit" class="btn btn-success">
                                        <i class="bx bx-check me-1"></i> Approve & Award Points
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                        <i class="bx bx-x me-1"></i> Decline Submission
                                    </button>
                                    <button type="button" class="btn btn-warning">
                                        <i class="bx bx-message-square-detail me-1"></i> Request More Info
                                    </button>
                                    <a href="{{ route('admin.cpd-points') }}" class="btn btn-secondary">
                                        <i class="bx bx-arrow-back me-1"></i> Back to List
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar with Guidelines & Member History -->
            <div class="col-lg-4">
                <!-- CPD Guidelines -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Level 2 Guidelines</h4>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info">
                            <h6 class="alert-heading">Professional Activities - Level 2</h6>
                            <ul class="mb-0">
                                <li><strong>Author/Co-author:</strong> Max 30 CPD units per article</li>
                                <li><strong>Multiple authors:</strong> Max 20 CPD units per article</li>
                                <li><strong>Single author:</strong> Max 20 CPD units per article</li>
                                <li><strong>Speaker/Teacher:</strong> Length of presentation/teaching + max 15 CPD units per event</li>
                            </ul>
                        </div>

                        <div class="mt-3">
                            <h6>Assessment Criteria:</h6>
                            <ul class="text-muted">
                                <li>Relevance to ICT field</li>
                                <li>Quality of evidence provided</li>
                                <li>Learning outcomes documented</li>
                                <li>Professional development impact</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Member CPD History -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Member CPD Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <h4 class="text-primary">18/20</h4>
                            <p class="text-muted mb-0">CPD Units (Current Year)</p>
                        </div>

                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <small>Level 1 (Self-Directed)</small>
                                <small>3/4 units</small>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-info" style="width: 75%"></div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <small>Level 2 (Professional)</small>
                                <small>12/16 units</small>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-success" style="width: 75%"></div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-1">
                                <small>Level 3 (Formal)</small>
                                <small>3 units</small>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-warning" style="width: 30%"></div>
                            </div>
                        </div>

                        <hr>

                        <h6>Recent Activities:</h6>
                        <div class="timeline-sm">
                            <div class="timeline-sm-item">
                                <div class="timeline-sm-marker bg-success"></div>
                                <div class="timeline-sm-content">
                                    <p class="mb-1">Workshop Attendance</p>
                                    <small class="text-muted">5 CPD units - Aug 2024</small>
                                </div>
                            </div>
                            <div class="timeline-sm-item">
                                <div class="timeline-sm-marker bg-primary"></div>
                                <div class="timeline-sm-content">
                                    <p class="mb-1">Online Course</p>
                                    <small class="text-muted">3 CPD units - Jul 2024</small>
                                </div>
                            </div>
                            <div class="timeline-sm-item">
                                <div class="timeline-sm-marker bg-info"></div>
                                <div class="timeline-sm-content">
                                    <p class="mb-1">Committee Service</p>
                                    <small class="text-muted">7 CPD units - Jun 2024</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
