@extends('layouts.master')

@section('content')

    <div class="container-fluid">
        <!-- Page Title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">My CPD Dashboard</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('member-dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">CPD Management</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- CPD Progress Overview -->
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">My CPD Progress (2024)</h4>
                            <div>
                                <span class="badge badge-success badge-pill">18/20 CPD Units</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Overall Progress -->
                        <div class="mb-4">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="fw-bold">Annual CPD Requirement</span>
                                <span class="text-muted">18 of 20 units completed (90%)</span>
                            </div>
                            <div class="progress" style="height: 12px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small class="text-success mt-1">Great progress! You need 2 more units to meet your annual requirement.</small>
                        </div>

                        <!-- CPD Categories Breakdown -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-primary">Level 1 - Self-Directed Learning</span>
                                        <span class="badge badge-info">3/4 units</span>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-primary" style="width: 75%"></div>
                                    </div>
                                    <small class="text-muted">Reading, online courses, videos - Max 4 units</small>
                                </div>

                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-success">Level 2 - Professional Activities</span>
                                        <span class="badge badge-success">12 units</span>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-success" style="width: 80%"></div>
                                    </div>
                                    <small class="text-muted">Conferences, presentations, publications</small>
                                </div>

                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-warning">Level 2 - Volunteer Service</span>
                                        <span class="badge badge-warning">3 units</span>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-warning" style="width: 20%"></div>
                                    </div>
                                    <small class="text-muted">Committee service, mentoring - Max 15 units</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-info">Level 2 - Other Education</span>
                                        <span class="badge badge-info">0 units</span>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-info" style="width: 0%"></div>
                                    </div>
                                    <small class="text-muted">Workshops, seminars - Max 15 units</small>
                                </div>

                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-danger">Level 3 - Formal Training</span>
                                        <span class="badge badge-danger">0 hours</span>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-danger" style="width: 0%"></div>
                                    </div>
                                    <small class="text-muted">Certification courses - Min 25 hours</small>
                                </div>

                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-dark">Level 3 - Academic Education</span>
                                        <span class="badge badge-dark">0 units</span>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-dark" style="width: 0%"></div>
                                    </div>
                                    <small class="text-muted">Formal academic qualifications - 24 units/year</small>
                                </div>
                            </div>
                        </div>

                        <!-- Quick Actions -->
                        <div class="border-top pt-3">
                            <div class="d-flex gap-2 flex-wrap">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#submitActivityModal">
                                    <i class="bx bx-plus-circle me-1"></i> Submit New Activity
                                </button>
                                <button type="button" class="btn btn-success" onclick="window.location.href='{{ route('user.cpd-events') }}'">
                                    <i class="bx bx-calendar me-1"></i> Browse CPD Events
                                </button>
                                <button type="button" class="btn btn-info">
                                    <i class="bx bx-download me-1"></i> Download CPD Record
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CPD Guidelines & Tips -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">CPD Requirements</h4>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info">
                            <h6 class="alert-heading">Annual Requirements</h6>
                            <ul class="mb-0 small">
                                <li><strong>Minimum:</strong> 20 CPD units per year</li>
                                <li><strong>Level 2/3 Activities:</strong> At least 10 units</li>
                                <li><strong>Level 1 Maximum:</strong> 4 units per year</li>
                                <li><strong>Evidence:</strong> Required for all activities</li>
                            </ul>
                        </div>

                        <div class="mt-3">
                            <h6>💡 CPD Tips</h6>
                            <ul class="text-muted small">
                                <li>Plan your CPD activities early in the year</li>
                                <li>Mix different types of activities for variety</li>
                                <li>Keep evidence and certificates organized</li>
                                <li>Reflect on your learning outcomes</li>
                                <li>Submit activities promptly after completion</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Upcoming Deadlines</h4>
                    </div>
                    <div class="card-body">
                        <div class="timeline-sm">
                            <div class="timeline-sm-item">
                                <div class="timeline-sm-marker bg-warning"></div>
                                <div class="timeline-sm-content">
                                    <p class="mb-1 fw-bold">CPD Year End</p>
                                    <small class="text-muted">December 31, 2024</small>
                                    <br>
                                    <small class="text-warning">3 months remaining</small>
                                </div>
                            </div>
                            <div class="timeline-sm-item">
                                <div class="timeline-sm-marker bg-info"></div>
                                <div class="timeline-sm-content">
                                    <p class="mb-1">Grace Period Ends</p>
                                    <small class="text-muted">March 31, 2025</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- My CPD Activities History -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">My CPD Activities</h4>
                            <div>
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#submitActivityModal">
                                    <i class="bx bx-plus me-1"></i> Submit New Activity
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Activity Title</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>CPD Units</th>
                                    <th>Status</th>
                                    <th>Evidence</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div>
                                            <h6 class="mb-1">ICT Conference Presentation</h6>
                                            <small class="text-muted">Future of Digital Transformation</small>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">Level 2 - Professional</span></td>
                                    <td>Sep 15, 2024</td>
                                    <td><span class="badge badge-info badge-pill">15 units</span></td>
                                    <td><span class="badge badge-success">Approved</span></td>
                                    <td>
                                        <a href="#" class="text-primary me-2" title="Certificate">
                                            <i class="bx bx-file-blank"></i>
                                        </a>
                                        <a href="#" class="text-success" title="Presentation">
                                            <i class="bx bx-presentation"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <button class="btn btn-info btn-sm" title="View Details" data-toggle="modal" data-target="#activityDetailModal">
                                            <i class="bx bx-show"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <h6 class="mb-1">Online Cybersecurity Course</h6>
                                            <small class="text-muted">CompTIA Security+ Fundamentals</small>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-primary">Level 1 - Self-Directed</span></td>
                                    <td>Aug 20, 2024</td>
                                    <td><span class="badge badge-info badge-pill">3 units</span></td>
                                    <td><span class="badge badge-success">Approved</span></td>
                                    <td>
                                        <a href="#" class="text-primary" title="Certificate">
                                            <i class="bx bx-file-blank"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <button class="btn btn-info btn-sm" title="View Details">
                                            <i class="bx bx-show"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <h6 class="mb-1">CSZ Committee Participation</h6>
                                            <small class="text-muted">Technical Standards Committee</small>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-warning">Level 2 - Volunteer</span></td>
                                    <td>Jul 10, 2024</td>
                                    <td><span class="badge badge-info badge-pill">3 units</span></td>
                                    <td><span class="badge badge-success">Approved</span></td>
                                    <td>
                                        <a href="#" class="text-primary" title="Participation Letter">
                                            <i class="bx bx-file-blank"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <button class="btn btn-info btn-sm" title="View Details">
                                            <i class="bx bx-show"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <h6 class="mb-1">Cloud Computing Workshop</h6>
                                            <small class="text-muted">AWS Fundamentals Workshop</small>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-info">Level 2 - Education</span></td>
                                    <td>Sep 22, 2024</td>
                                    <td><span class="badge badge-info badge-pill">6 units</span></td>
                                    <td><span class="badge badge-warning">Pending Review</span></td>
                                    <td>
                                        <a href="#" class="text-primary" title="Certificate">
                                            <i class="bx bx-file-blank"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" title="Under Review">
                                            <i class="bx bx-time"></i>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Submit Activity Modal -->
        <div class="modal fade" id="submitActivityModal" tabindex="-1" role="dialog" aria-labelledby="submitActivityModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="submitActivityModalLabel">
                            <i class="bx bx-plus-circle text-primary me-2"></i>
                            Submit CPD Activity
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="cpdSubmissionForm" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <!-- Activity Details -->
                                    <div class="card border-0">
                                        <div class="card-header bg-light">
                                            <h6 class="mb-0">Activity Information</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="activity_title" class="form-label">Activity Title <span class="text-danger">*</span></label>
                                                        <input type="text" id="activity_title" name="activity_title" class="form-control" required placeholder="Enter activity title">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="cpd_category" class="form-label">CPD Category <span class="text-danger">*</span></label>
                                                        <select id="cpd_category" name="cpd_category" class="form-control" required>
                                                            <option value="">Select Category</option>
                                                            <option value="level1_self_directed">Level 1 - Self-Directed Learning</option>
                                                            <option value="level2_professional">Level 2 - Professional Activities</option>
                                                            <option value="level2_education">Level 2 - Other Education & Learning</option>
                                                            <option value="level2_volunteer">Level 2 - Volunteer Service</option>
                                                            <option value="level3_training">Level 3 - Formal Training & Certification</option>
                                                            <option value="level3_academic">Level 3 - Formal Academic Education</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="activity_date" class="form-label">Activity Date <span class="text-danger">*</span></label>
                                                        <input type="date" id="activity_date" name="activity_date" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="duration" class="form-label">Duration <span class="text-danger">*</span></label>
                                                        <input type="text" id="duration" name="duration" class="form-control" required placeholder="e.g., 6 hours, 2 days">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="cpd_units_claimed" class="form-label">CPD Units Claimed <span class="text-danger">*</span></label>
                                                        <input type="number" id="cpd_units_claimed" name="cpd_units_claimed" class="form-control" required min="1" placeholder="Enter units claimed">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="activity_type" class="form-label">Activity Type</label>
                                                        <input type="text" id="activity_type" name="activity_type" class="form-control" placeholder="e.g., Conference, Workshop, Course">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="activity_description" class="form-label">Activity Description <span class="text-danger">*</span></label>
                                                <textarea id="activity_description" name="activity_description" class="form-control" rows="4" required placeholder="Provide detailed description of the activity, including what you learned and how it relates to your professional development..."></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label for="learning_outcomes" class="form-label">Learning Outcomes & Reflection <span class="text-danger">*</span></label>
                                                <textarea id="learning_outcomes" name="learning_outcomes" class="form-control" rows="4" required placeholder="Describe what you learned from this activity and how it will benefit your professional development..."></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Evidence Upload -->
                                    <div class="card border-0">
                                        <div class="card-header bg-light">
                                            <h6 class="mb-0">Evidence Upload <span class="text-danger">*</span></h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="repeater">
                                                <div data-repeater-list="evidence">
                                                    <div data-repeater-item class="row mb-3">
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Upload Evidence</label>
                                                                <input type="file" name="evidence_file" class="form-control" accept=".pdf,.jpg,.jpeg,.png,.doc,.docx">
                                                                <small class="text-muted">Accepted: PDF, Images, Word documents (Max 5MB)</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Document Description</label>
                                                                <input type="text" name="evidence_description" class="form-control" placeholder="e.g., Certificate, Attendance Record">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 align-self-center">
                                                            <button data-repeater-delete type="button" class="btn btn-danger btn-sm">
                                                                <i class="bx bx-trash"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button data-repeater-create type="button" class="btn btn-info btn-sm">
                                                    <i class="bx bx-plus me-1"></i> Add More Evidence
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Guidelines Sidebar -->
                                <div class="col-md-4">
                                    <div class="card border-0">
                                        <div class="card-header bg-light">
                                            <h6 class="mb-0">CPD Guidelines</h6>
                                        </div>
                                        <div class="card-body">
                                            <div id="categoryGuidelines">
                                                <div class="alert alert-info">
                                                    <small>Select a CPD category to see specific guidelines and requirements.</small>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <h6>📋 Submission Tips</h6>
                                                <ul class="text-muted small">
                                                    <li>Be specific and detailed in your descriptions</li>
                                                    <li>Include clear evidence of participation</li>
                                                    <li>Reflect on actual learning outcomes</li>
                                                    <li>Submit within 3 months of completion</li>
                                                    <li>Keep copies of all evidence</li>
                                                </ul>
                                            </div>

                                            <div class="mt-3">
                                                <h6>❌ What's NOT Accepted</h6>
                                                <ul class="text-muted small">
                                                    <li>Trade fair attendance (as visitor)</li>
                                                    <li>Vendor promotional events</li>
                                                    <li>Social events without learning</li>
                                                    <li>Regular job duties</li>
                                                    <li>Repeated presentations</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-info" onclick="saveDraft()">
                            <i class="bx bx-save me-1"></i> Save as Draft
                        </button>
                        <button type="submit" form="cpdSubmissionForm" class="btn btn-primary">
                            <i class="bx bx-send me-1"></i> Submit for Review
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Activity Detail Modal -->
        <div class="modal fade" id="activityDetailModal" tabindex="-1" role="dialog" aria-labelledby="activityDetailModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="activityDetailModalLabel">
                            <i class="bx bx-info-circle text-primary me-2"></i>
                            Activity Details
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="fw-bold">Activity Title:</label>
                                    <p>ICT Conference Presentation</p>
                                </div>
                                <div class="mb-3">
                                    <label class="fw-bold">Category:</label>
                                    <p><span class="badge badge-success">Level 2 - Professional Activities</span></p>
                                </div>
                                <div class="mb-3">
                                    <label class="fw-bold">Date:</label>
                                    <p>September 15, 2024</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="fw-bold">CPD Units Awarded:</label>
                                    <p><span class="badge badge-info badge-pill">15 units</span></p>
                                </div>
                                <div class="mb-3">
                                    <label class="fw-bold">Status:</label>
                                    <p><span class="badge badge-success">Approved</span></p>
                                </div>
                                <div class="mb-3">
                                    <label class="fw-bold">Approved By:</label>
                                    <p>Admin - Sep 20, 2024</p>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="fw-bold">Description:</label>
                            <p class="text-muted">Presented a 45-minute session on "Emerging Technologies in Enterprise Architecture" at the Annual ICT Conference...</p>
                        </div>

                        <div class="mb-3">
                            <label class="fw-bold">Learning Outcomes:</label>
                            <ul class="text-muted">
                                <li>Enhanced understanding of current cloud architecture patterns</li>
                                <li>Improved presentation and public speaking skills</li>
                                <li>Networked with industry professionals</li>
                            </ul>
                        </div>

                        <div class="mb-3">
                            <label class="fw-bold">Evidence:</label>
                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-outline-primary btn-sm">
                                    <i class="bx bx-download me-1"></i> Certificate
                                </a>
                                <a href="#" class="btn btn-outline-success btn-sm">
                                    <i class="bx bx-download me-1"></i> Presentation
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
