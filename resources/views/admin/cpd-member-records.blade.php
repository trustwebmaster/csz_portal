@extends('layouts.master')

@section('content')

    <div class="container-fluid">
        <!-- Page Title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Member CPD Records</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.cpd-points') }}">CPD Management</a></li>
                            <li class="breadcrumb-item active">Member Records</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search and Filter -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="member_search">Search Member</label>
                                    <input type="text" id="member_search" class="form-control" placeholder="Name or Member ID">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="year_filter">Year</label>
                                    <select id="year_filter" class="form-control">
                                        <option value="2024">2024</option>
                                        <option value="2023">2023</option>
                                        <option value="2022">2022</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="membership_type">Membership Type</label>
                                    <select id="membership_type" class="form-control">
                                        <option value="">All Types</option>
                                        <option value="professional">Professional</option>
                                        <option value="graduate">Graduate</option>
                                        <option value="student">Student</option>
                                        <option value="company">Company</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="compliance_status">Compliance</label>
                                    <select id="compliance_status" class="form-control">
                                        <option value="">All Status</option>
                                        <option value="compliant">Compliant</option>
                                        <option value="non-compliant">Non-Compliant</option>
                                        <option value="at-risk">At Risk</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex align-items-end">
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary me-2">
                                        <i class="bx bx-search me-1"></i> Search
                                    </button>
                                    <button type="button" class="btn btn-success">
                                        <i class="bx bx-export me-1"></i> Export
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Member CPD Records Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">CPD Records Overview</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="cpd-records-table" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Member ID</th>
                                    <th>Name</th>
                                    <th>Membership Type</th>
                                    <th>Total CPD Units</th>
                                    <th>Level 1 Units</th>
                                    <th>Level 2 Units</th>
                                    <th>Level 3 Units</th>
                                    <th>Compliance Status</th>
                                    <th>Last Activity</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>PM2024001</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="http://127.0.0.1:8000/storage/Members/VMw8Yf8mjy5Z1Y1ylJiMUzNuHVZGK2NdLHBbpIDI.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                            <div>
                                                <h6 class="mb-0">John Doe</h6>
                                                <small class="text-muted">john.doe@email.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-primary">Professional</span></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <h6 class="mb-0">22/20</h6>
                                            </div>
                                            <div class="progress flex-fill" style="height: 6px;">
                                                <div class="progress-bar bg-success" style="width: 110%"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-info">4/4</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-info" style="width: 100%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-success">15</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success" style="width: 75%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-warning">3</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-warning" style="width: 30%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">Compliant</span></td>
                                    <td>Sep 20, 2024</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#memberDetailModal" title="View Details">
                                                <i class="bx bx-show"></i>
                                            </button>
                                            <button type="button" class="btn btn-info btn-sm" title="Generate Report">
                                                <i class="bx bx-file-blank"></i>
                                            </button>
                                            <button type="button" class="btn btn-warning btn-sm" title="Send Reminder">
                                                <i class="bx bx-mail-send"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>PM2024002</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="http://127.0.0.1:8000/storage/Members/VMw8Yf8mjy5Z1Y1ylJiMUzNuHVZGK2NdLHBbpIDI.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                            <div>
                                                <h6 class="mb-0">Jane Smith</h6>
                                                <small class="text-muted">jane.smith@email.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-primary">Professional</span></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <h6 class="mb-0">12/20</h6>
                                            </div>
                                            <div class="progress flex-fill" style="height: 6px;">
                                                <div class="progress-bar bg-warning" style="width: 60%"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-info">3/4</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-info" style="width: 75%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-success">9</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success" style="width: 45%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-warning">0</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-warning" style="width: 0%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-warning">At Risk</span></td>
                                    <td>Sep 15, 2024</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#memberDetailModal" title="View Details">
                                                <i class="bx bx-show"></i>
                                            </button>
                                            <button type="button" class="btn btn-info btn-sm" title="Generate Report">
                                                <i class="bx bx-file-blank"></i>
                                            </button>
                                            <button type="button" class="btn btn-warning btn-sm" title="Send Reminder">
                                                <i class="bx bx-mail-send"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>GM2024003</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="http://127.0.0.1:8000/storage/Members/VMw8Yf8mjy5Z1Y1ylJiMUzNuHVZGK2NdLHBbpIDI.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                            <div>
                                                <h6 class="mb-0">Mike Johnson</h6>
                                                <small class="text-muted">mike.johnson@email.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">Graduate</span></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <h6 class="mb-0">18/20</h6>
                                            </div>
                                            <div class="progress flex-fill" style="height: 6px;">
                                                <div class="progress-bar bg-success" style="width: 90%"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-info">4/4</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-info" style="width: 100%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-success">14</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success" style="width: 70%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-warning">0</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-warning" style="width: 0%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-success">Compliant</span></td>
                                    <td>Sep 18, 2024</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#memberDetailModal" title="View Details">
                                                <i class="bx bx-show"></i>
                                            </button>
                                            <button type="button" class="btn btn-info btn-sm" title="Generate Report">
                                                <i class="bx bx-file-blank"></i>
                                            </button>
                                            <button type="button" class="btn btn-warning btn-sm" title="Send Reminder">
                                                <i class="bx bx-mail-send"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>SM2024004</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="http://127.0.0.1:8000/storage/Members/VMw8Yf8mjy5Z1Y1ylJiMUzNuHVZGK2NdLHBbpIDI.jpg" alt="" class="avatar-xs rounded-circle me-2">
                                            <div>
                                                <h6 class="mb-0">Sarah Wilson</h6>
                                                <small class="text-muted">sarah.wilson@email.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-info">Student</span></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <h6 class="mb-0">8/20</h6>
                                            </div>
                                            <div class="progress flex-fill" style="height: 6px;">
                                                <div class="progress-bar bg-danger" style="width: 40%"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-info">2/4</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-info" style="width: 50%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-success">6</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success" style="width: 30%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-warning">0</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-warning" style="width: 0%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge badge-danger">Non-Compliant</span></td>
                                    <td>Aug 28, 2024</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#memberDetailModal" title="View Details">
                                                <i class="bx bx-show"></i>
                                            </button>
                                            <button type="button" class="btn btn-info btn-sm" title="Generate Report">
                                                <i class="bx bx-file-blank"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-sm" title="Send Warning">
                                                <i class="bx bx-error-circle"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Member Detail Modal -->
        <div class="modal fade" id="memberDetailModal" tabindex="-1" role="dialog" aria-labelledby="memberDetailModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="memberDetailModalLabel">
                            <i class="bx bx-user-circle text-primary me-2"></i>
                            Member CPD Details
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card border-0">
                                    <div class="card-body text-center">
                                        <img src="http://127.0.0.1:8000/storage/Members/VMw8Yf8mjy5Z1Y1ylJiMUzNuHVZGK2NdLHBbpIDI.jpg" alt="" class="avatar-lg rounded-circle mb-3">
                                        <h5 class="mb-1">John Doe</h5>
                                        <p class="text-muted mb-2">Professional Member</p>
                                        <p class="text-muted">PM2024001</p>
                                        <div class="text-center">
                                            <h4 class="text-primary">22/20</h4>
                                            <p class="text-muted mb-0">CPD Units (2024)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card border-0">
                                    <div class="card-header bg-light">
                                        <h6 class="mb-0">CPD Breakdown by Category</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <span>Level 1 - Self-Directed</span>
                                                        <span class="badge badge-info">4/4 units</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-info" style="width: 100%"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <span>Level 2 - Professional</span>
                                                        <span class="badge badge-success">15 units</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" style="width: 75%"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <span>Level 3 - Formal</span>
                                                        <span class="badge badge-warning">3 units</span>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" style="width: 30%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h6>Recent Activities:</h6>
                                                <div class="timeline-sm">
                                                    <div class="timeline-sm-item">
                                                        <div class="timeline-sm-marker bg-success"></div>
                                                        <div class="timeline-sm-content">
                                                            <p class="mb-1">Conference Presentation</p>
                                                            <small class="text-muted">15 CPD units - Sep 2024</small>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-sm-item">
                                                        <div class="timeline-sm-marker bg-primary"></div>
                                                        <div class="timeline-sm-content">
                                                            <p class="mb-1">Online Course</p>
                                                            <small class="text-muted">3 CPD units - Aug 2024</small>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-sm-item">
                                                        <div class="timeline-sm-marker bg-info"></div>
                                                        <div class="timeline-sm-content">
                                                            <p class="mb-1">Workshop Attendance</p>
                                                            <small class="text-muted">4 CPD units - Jul 2024</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-info">
                            <i class="bx bx-file-blank me-1"></i> Generate Report
                        </button>
                        <button type="button" class="btn btn-primary">
                            <i class="bx bx-edit me-1"></i> Edit Record
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
