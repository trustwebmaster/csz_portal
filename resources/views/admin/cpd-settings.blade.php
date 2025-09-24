@extends('layouts.master')

@section('content')

    <div class="container-fluid">
        <!-- Page Title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">CPD Settings & Configuration</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.cpd-points') }}">CPD Management</a></li>
                            <li class="breadcrumb-item active">Settings</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- CPD Requirements Configuration -->
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">CPD Requirements Configuration</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="annual_requirement">Annual CPD Requirement</label>
                                        <div class="input-group">
                                            <input type="number" id="annual_requirement" class="form-control" value="20">
                                            <div class="input-group-append">
                                                <span class="input-group-text">CPD units</span>
                                            </div>
                                        </div>
                                        <small class="form-text text-muted">Minimum CPD units required per year</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="level1_max">Level 1 Maximum Units</label>
                                        <div class="input-group">
                                            <input type="number" id="level1_max" class="form-control" value="4">
                                            <div class="input-group-append">
                                                <span class="input-group-text">CPD units</span>
                                            </div>
                                        </div>
                                        <small class="form-text text-muted">Maximum self-directed learning units per year</small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="level2_min">Level 2/3 Minimum Units</label>
                                        <div class="input-group">
                                            <input type="number" id="level2_min" class="form-control" value="10">
                                            <div class="input-group-append">
                                                <span class="input-group-text">CPD units</span>
                                            </div>
                                        </div>
                                        <small class="form-text text-muted">Minimum professional/formal activity units</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="grace_period">Grace Period</label>
                                        <div class="input-group">
                                            <input type="number" id="grace_period" class="form-control" value="3">
                                            <div class="input-group-append">
                                                <span class="input-group-text">months</span>
                                            </div>
                                        </div>
                                        <small class="form-text text-muted">Grace period after year end for submissions</small>
                                    </div>
                                </div>
                            </div>

                            <div class="border-top pt-4">
                                <h5>CPD Category Limits</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card border">
                                            <div class="card-header bg-primary text-white">
                                                <h6 class="mb-0">Level 2 - Professional Activities</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Author/Co-author Max Units</label>
                                                    <input type="number" class="form-control" value="30">
                                                </div>
                                                <div class="form-group">
                                                    <label>Multiple Authors Max Units</label>
                                                    <input type="number" class="form-control" value="20">
                                                </div>
                                                <div class="form-group">
                                                    <label>Single Author Max Units</label>
                                                    <input type="number" class="form-control" value="20">
                                                </div>
                                                <div class="form-group">
                                                    <label>Speaker/Teacher Max Units</label>
                                                    <input type="number" class="form-control" value="15">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card border">
                                            <div class="card-header bg-success text-white">
                                                <h6 class="mb-0">Level 2 - Volunteer Service</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Committee Service Max Units</label>
                                                    <input type="number" class="form-control" value="15">
                                                </div>
                                                <div class="form-group">
                                                    <label>Mentoring Max Units</label>
                                                    <input type="number" class="form-control" value="10">
                                                </div>
                                                <div class="form-group">
                                                    <label>Charity Work Max Units</label>
                                                    <input type="number" class="form-control" value="6">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card border">
                                            <div class="card-header bg-danger text-white">
                                                <h6 class="mb-0">Level 3 - Formal Training</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Minimum Direct Contact Hours</label>
                                                    <input type="number" class="form-control" value="25">
                                                </div>
                                                <div class="form-group">
                                                    <label>Assessment Required</label>
                                                    <select class="form-control">
                                                        <option value="yes">Yes</option>
                                                        <option value="no">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card border">
                                            <div class="card-header bg-dark text-white">
                                                <h6 class="mb-0">Level 3 - Academic Education</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>CPD Units per Year of Study</label>
                                                    <input type="number" class="form-control" value="24">
                                                </div>
                                                <div class="form-group">
                                                    <label>Qualification Recognition</label>
                                                    <select class="form-control">
                                                        <option value="automatic">Automatic</option>
                                                        <option value="manual">Manual Review</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Quick Actions & System Status -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">System Status</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="d-flex justify-content-between">
                                <span>CPD System Status</span>
                                <span class="badge badge-success">Active</span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between">
                                <span>Auto-Approval</span>
                                <span class="badge badge-warning">Disabled</span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between">
                                <span>Email Notifications</span>
                                <span class="badge badge-success">Enabled</span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between">
                                <span>Reminder System</span>
                                <span class="badge badge-success">Active</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">System Actions</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-primary">
                                <i class="bx bx-save me-1"></i> Save All Settings
                            </button>
                            <button type="button" class="btn btn-success">
                                <i class="bx bx-refresh me-1"></i> Refresh Categories
                            </button>
                            <button type="button" class="btn btn-info">
                                <i class="bx bx-export me-1"></i> Export Configuration
                            </button>
                            <button type="button" class="btn btn-warning">
                                <i class="bx bx-import me-1"></i> Import Configuration
                            </button>
                            <button type="button" class="btn btn-secondary">
                                <i class="bx bx-reset me-1"></i> Reset to Defaults
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Recent Changes</h4>
                    </div>
                    <div class="card-body">
                        <div class="timeline-sm">
                            <div class="timeline-sm-item">
                                <div class="timeline-sm-marker bg-primary"></div>
                                <div class="timeline-sm-content">
                                    <p class="mb-1">Level 1 max updated to 4 units</p>
                                    <small class="text-muted">Admin - Sep 20, 2024</small>
                                </div>
                            </div>
                            <div class="timeline-sm-item">
                                <div class="timeline-sm-marker bg-success"></div>
                                <div class="timeline-sm-content">
                                    <p class="mb-1">Email notifications enabled</p>
                                    <small class="text-muted">Admin - Sep 18, 2024</small>
                                </div>
                            </div>
                            <div class="timeline-sm-item">
                                <div class="timeline-sm-marker bg-info"></div>
                                <div class="timeline-sm-content">
                                    <p class="mb-1">Grace period extended to 3 months</p>
                                    <small class="text-muted">Admin - Sep 15, 2024</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Email Templates Configuration -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Email Templates & Notifications</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card border">
                                    <div class="card-header">
                                        <h6 class="mb-0">Approval Notifications</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="approve_email" checked>
                                            <label class="form-check-label" for="approve_email">
                                                Send email on approval
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="decline_email" checked>
                                            <label class="form-check-label" for="decline_email">
                                                Send email on decline
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="pending_email">
                                            <label class="form-check-label" for="pending_email">
                                                Send email on pending status
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card border">
                                    <div class="card-header">
                                        <h6 class="mb-0">Reminder Notifications</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Reminder Schedule</label>
                                            <select class="form-control">
                                                <option value="quarterly">Quarterly</option>
                                                <option value="monthly">Monthly</option>
                                                <option value="bi-monthly">Bi-Monthly</option>
                                            </select>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="compliance_reminder" checked>
                                            <label class="form-check-label" for="compliance_reminder">
                                                Compliance reminders
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="deadline_reminder" checked>
                                            <label class="form-check-label" for="deadline_reminder">
                                                Deadline reminders
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Exclusions and Special Cases -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">CPD Exclusions & Guidelines</h4>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info">
                            <h6 class="alert-heading">Current Exclusions</h6>
                            <ul class="mb-0">
                                <li>Attendance at Trade Fairs and Exhibitions (either as visitor or exhibitor)</li>
                                <li>Attendance at marketing and promotional events specifically intended to promote a vendor's products</li>
                                <li>Attendance at CSZ social and procedural events (unless they include learning opportunity)</li>
                                <li>Consulting activities within one's own organization (coaching others as part of job description)</li>
                                <li>Multiple presentations of the same material (only first-time presentation counts)</li>
                            </ul>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exclusion_notes">Additional Exclusion Notes</label>
                                    <textarea id="exclusion_notes" class="form-control" rows="4" placeholder="Add any additional exclusions or special guidelines..."></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="special_circumstances">Special Circumstances</label>
                                    <textarea id="special_circumstances" class="form-control" rows="4" placeholder="Guidelines for special circumstances or exceptions..."></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="border-top pt-3">
                            <div class="d-flex gap-2">
                                <button type="button" class="btn btn-primary">
                                    <i class="bx bx-save me-1"></i> Save All Settings
                                </button>
                                <button type="button" class="btn btn-success">
                                    <i class="bx bx-check me-1"></i> Apply Changes
                                </button>
                                <button type="button" class="btn btn-info">
                                    <i class="bx bx-test-tube me-1"></i> Test Configuration
                                </button>
                                <a href="{{ route('admin.cpd-points') }}" class="btn btn-secondary">
                                    <i class="bx bx-arrow-back me-1"></i> Back to Dashboard
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
