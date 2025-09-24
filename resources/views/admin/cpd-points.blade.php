@extends('layouts.master')

@section('content')

    <div class="container-fluid">
        <!-- Page Title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">CPD Management Dashboard</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                            <li class="breadcrumb-item active">CPD Management</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- CPD Overview Statistics -->
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-1 overflow-hidden">
                                <p class="text-truncate font-size-14 mb-2">Pending Submissions</p>
                                <h4 class="mb-0">24</h4>
                            </div>
                            <div class="text-primary">
                                <i class="bx bx-time-five font-size-24"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-top py-3">
                        <div class="text-truncate">
                            <span class="badge badge-soft-warning font-size-11">Awaiting Review</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-1 overflow-hidden">
                                <p class="text-truncate font-size-14 mb-2">Active Members</p>
                                <h4 class="mb-0">156</h4>
                            </div>
                            <div class="text-primary">
                                <i class="bx bx-user font-size-24"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-top py-3">
                        <div class="text-truncate">
                            <span class="badge badge-soft-success font-size-11">Participating in CPD</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-1 overflow-hidden">
                                <p class="text-truncate font-size-14 mb-2">Total Points Awarded</p>
                                <h4 class="mb-0">2,847</h4>
                            </div>
                            <div class="text-primary">
                                <i class="bx bx-trophy font-size-24"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-top py-3">
                        <div class="text-truncate">
                            <span class="badge badge-soft-info font-size-11">This Year</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-1 overflow-hidden">
                                <p class="text-truncate font-size-14 mb-2">Compliance Rate</p>
                                <h4 class="mb-0">87%</h4>
                            </div>
                            <div class="text-primary">
                                <i class="bx bx-check-circle font-size-24"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-top py-3">
                        <div class="text-truncate">
                            <span class="badge badge-soft-success font-size-11">Meeting Requirements</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CPD Categories Overview -->
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">CPD Points Distribution by Category</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <p class="text-muted mb-2">Self-Directed Learning (Level 1)</p>
                                        <p class="text-muted mb-2">Max: 4 CPD units</p>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small class="text-muted">3/4 units utilized</small>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <p class="text-muted mb-2">Professional Activities (Level 2)</p>
                                        <p class="text-muted mb-2">Max: 20 CPD units</p>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small class="text-muted">12/20 units utilized</small>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <p class="text-muted mb-2">Other Education & Learning (Level 2)</p>
                                        <p class="text-muted mb-2">Max: 15 CPD units</p>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small class="text-muted">6/15 units utilized</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <p class="text-muted mb-2">Volunteer Service (Level 2)</p>
                                        <p class="text-muted mb-2">Max: 15 CPD units</p>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small class="text-muted">5/15 units utilized</small>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <p class="text-muted mb-2">Formal Training & Certification (Level 3)</p>
                                        <p class="text-muted mb-2">Min: 25 hours direct contact</p>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small class="text-muted">20/25 hours completed</small>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <p class="text-muted mb-2">Formal Academic Education (Level 3)</p>
                                        <p class="text-muted mb-2">24 CPD units per year</p>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-dark" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small class="text-muted">6/24 units completed</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Quick Actions</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewSubmissionsModal">
                                <i class="bx bx-check-circle me-2"></i> Review Pending Submissions
                            </button>
                            <button type="button" class="btn btn-success" onclick="window.location.href='#'">
                                <i class="bx bx-plus-circle me-2"></i> Add CPD Points Manually
                            </button>
                            <button type="button" class="btn btn-info" onclick="window.location.href='#'">
                                <i class="bx bx-user me-2"></i> View Member Records
                            </button>
                            <button type="button" class="btn btn-warning" onclick="window.location.href='#'">
                                <i class="bx bx-bar-chart me-2"></i> Generate Reports
                            </button>
                            <button type="button" class="btn btn-secondary" onclick="window.location.href='#'">
                                <i class="bx bx-cog me-2"></i> CPD Settings
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">CPD Requirements</h4>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info" role="alert">
                            <h6 class="alert-heading">Annual Requirements:</h6>
                            <ul class="mb-0">
                                <li>Minimum 20 CPD units per year</li>
                                <li>At least 10 units from Level 2/3 activities</li>
                                <li>Maximum 4 units from Level 1 activities</li>
                                <li>Evidence documentation required</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade uploads" tabindex="-1" role="dialog"
             aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myLargeModalLabel">Uploads</h5>
                        <button type="button" class="close" data-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form class="repeater" enctype="multipart/form-data" action="#" method="post">
                                            <div data-repeater-list="group-a">
                                                <div data-repeater-item class="row">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label for="resume">Upload</label>
                                                            <input type="file" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div  class="form-group col-md-5">
                                                        <label for="name">Name</label>
                                                        <input type="text" id="name" name="untyped-input" class="form-control" placeholder="Enter file name"/>
                                                    </div>

                                                    <div class="col-md-2 align-self-center">
                                                        <input data-repeater-delete type="button" class="btn btn-xs btn-danger btn-block" value="Delete"/>
                                                    </div>
                                                </div>

                                            </div>
                                            <input data-repeater-create type="button" class="btn btn-sm btn-primary mt-3 mt-lg-0" value="Add"/>
                                            <input type="submit" class="btn btn-sm btn-primary mt-3 mt-lg-0 float-right"/>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>

        <!-- Recent CPD Submissions -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">Recent CPD Submissions</h4>
                            <div>
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#reviewSubmissionsModal">
                                    <i class="bx bx-check-circle me-1"></i> Review All
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                                   style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Member Name</th>
                                    <th>CPD Category</th>
                                    <th>Activity Title</th>
                                    <th>Points Claimed</th>
                                    <th>Date Submitted</th>
                                    <th>Status</th>
                                    <th>Evidence</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>001</td>
                                    <td>John Doe</td>
                                    <td><span class="badge badge-primary">Level 2 - Professional</span></td>
                                    <td>ICT Conference Presentation</td>
                                    <td>15 CPD units</td>
                                    <td>2024-09-20</td>
                                    <td><span class="badge badge-warning">Pending Review</span></td>
                                    <td>
                                        <a href="#" class="text-primary" title="Download Evidence">
                                            <i class="bx bx-download h5 m-0"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('admin.cpd-points.show') }}" class="btn btn-success btn-sm" title="Review">
                                                <i class="bx bx-check"></i>
                                            </a>
                                            <button type="button" class="btn btn-danger btn-sm" title="Decline">
                                                <i class="bx bx-x"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>002</td>
                                    <td>Jane Smith</td>
                                    <td><span class="badge badge-info">Level 1 - Self-Directed</span></td>
                                    <td>Online ICT Course Completion</td>
                                    <td>3 CPD units</td>
                                    <td>2024-09-19</td>
                                    <td><span class="badge badge-warning">Pending Review</span></td>
                                    <td>
                                        <a href="#" class="text-primary" title="Download Evidence">
                                            <i class="bx bx-download h5 m-0"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('admin.cpd-points.show') }}" class="btn btn-success btn-sm" title="Review">
                                                <i class="bx bx-check"></i>
                                            </a>
                                            <button type="button" class="btn btn-danger btn-sm" title="Decline">
                                                <i class="bx bx-x"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>003</td>
                                    <td>Mike Johnson</td>
                                    <td><span class="badge badge-success">Level 2 - Volunteer Service</span></td>
                                    <td>CSZ Committee Service</td>
                                    <td>6 CPD units</td>
                                    <td>2024-09-18</td>
                                    <td><span class="badge badge-success">Approved</span></td>
                                    <td>
                                        <a href="#" class="text-primary" title="Download Evidence">
                                            <i class="bx bx-download h5 m-0"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <span class="text-muted">Completed</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>004</td>
                                    <td>Sarah Wilson</td>
                                    <td><span class="badge badge-danger">Level 3 - Formal Training</span></td>
                                    <td>Vendor Certification Course</td>
                                    <td>25 hours (direct contact)</td>
                                    <td>2024-09-17</td>
                                    <td><span class="badge badge-warning">Pending Review</span></td>
                                    <td>
                                        <a href="#" class="text-primary" title="Download Evidence">
                                            <i class="bx bx-download h5 m-0"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('admin.cpd-points.show') }}" class="btn btn-success btn-sm" title="Review">
                                                <i class="bx bx-check"></i>
                                            </a>
                                            <button type="button" class="btn btn-danger btn-sm" title="Decline">
                                                <i class="bx bx-x"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>005</td>
                                    <td>David Brown</td>
                                    <td><span class="badge badge-dark">Level 3 - Academic</span></td>
                                    <td>Masters in ICT - Semester 1</td>
                                    <td>24 CPD units</td>
                                    <td>2024-09-16</td>
                                    <td><span class="badge badge-danger">Declined</span></td>
                                    <td>
                                        <a href="#" class="text-primary" title="Download Evidence">
                                            <i class="bx bx-download h5 m-0"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <span class="text-danger">Insufficient Evidence</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Review Submissions Modal -->
        <div class="modal fade" id="reviewSubmissionsModal" tabindex="-1" role="dialog" aria-labelledby="reviewSubmissionsModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="reviewSubmissionsModalLabel">
                            <i class="bx bx-check-circle text-primary me-2"></i>
                            Review CPD Submissions
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card border-0">
                                    <div class="card-header bg-light">
                                        <h6 class="mb-0">Bulk Review Actions</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-sm">
                                                <thead>
                                                <tr>
                                                    <th width="5%">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="selectAll">
                                                            <label class="form-check-label" for="selectAll"></label>
                                                        </div>
                                                    </th>
                                                    <th>Member</th>
                                                    <th>Activity</th>
                                                    <th>Category</th>
                                                    <th>Points</th>
                                                    <th>Evidence</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="sub1">
                                                            <label class="form-check-label" for="sub1"></label>
                                                        </div>
                                                    </td>
                                                    <td>John Doe</td>
                                                    <td>ICT Conference Presentation</td>
                                                    <td><span class="badge badge-primary badge-sm">Level 2</span></td>
                                                    <td>15 units</td>
                                                    <td><a href="#" class="text-primary"><i class="bx bx-file-blank"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="sub2">
                                                            <label class="form-check-label" for="sub2"></label>
                                                        </div>
                                                    </td>
                                                    <td>Jane Smith</td>
                                                    <td>Online ICT Course</td>
                                                    <td><span class="badge badge-info badge-sm">Level 1</span></td>
                                                    <td>3 units</td>
                                                    <td><a href="#" class="text-primary"><i class="bx bx-file-blank"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="sub3">
                                                            <label class="form-check-label" for="sub3"></label>
                                                        </div>
                                                    </td>
                                                    <td>Sarah Wilson</td>
                                                    <td>Vendor Certification</td>
                                                    <td><span class="badge badge-danger badge-sm">Level 3</span></td>
                                                    <td>25 hours</td>
                                                    <td><a href="#" class="text-primary"><i class="bx bx-file-blank"></i></a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border-0">
                                    <div class="card-header bg-light">
                                        <h6 class="mb-0">CPD Category Guidelines</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="accordion" id="cpdGuidelines">
                                            <div class="card">
                                                <div class="card-header" id="level1Header">
                                                    <h6 class="mb-0">
                                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#level1" aria-expanded="true">
                                                            Level 1 - Self-Directed
                                                        </button>
                                                    </h6>
                                                </div>
                                                <div id="level1" class="collapse show" data-parent="#cpdGuidelines">
                                                    <div class="card-body">
                                                        <small>
                                                            <ul class="mb-0">
                                                                <li>Max 4 CPD units per year</li>
                                                                <li>Videos, books, articles</li>
                                                                <li>Self-paced learning</li>
                                                            </ul>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="level2Header">
                                                    <h6 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#level2">
                                                            Level 2 - Professional
                                                        </button>
                                                    </h6>
                                                </div>
                                                <div id="level2" class="collapse" data-parent="#cpdGuidelines">
                                                    <div class="card-body">
                                                        <small>
                                                            <ul class="mb-0">
                                                                <li>Publications & presentations</li>
                                                                <li>Conferences & workshops</li>
                                                                <li>Committee service</li>
                                                                <li>Mentoring programs</li>
                                                            </ul>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="level3Header">
                                                    <h6 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#level3">
                                                            Level 3 - Formal
                                                        </button>
                                                    </h6>
                                                </div>
                                                <div id="level3" class="collapse" data-parent="#cpdGuidelines">
                                                    <div class="card-body">
                                                        <small>
                                                            <ul class="mb-0">
                                                                <li>Min 25 hours direct contact</li>
                                                                <li>Formal assessment required</li>
                                                                <li>Academic qualifications</li>
                                                                <li>24 CPD units per year of study</li>
                                                            </ul>
                                                        </small>
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
                        <button type="button" class="btn btn-danger">
                            <i class="bx bx-x me-1"></i> Decline Selected
                        </button>
                        <button type="button" class="btn btn-success">
                            <i class="bx bx-check me-1"></i> Approve Selected
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
