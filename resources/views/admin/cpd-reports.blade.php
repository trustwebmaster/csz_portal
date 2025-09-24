@extends('layouts.master')

@section('content')

    <div class="container-fluid">
        <!-- Page Title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">CPD Reports & Analytics</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.cpd-points') }}">CPD Management</a></li>
                            <li class="breadcrumb-item active">Reports & Analytics</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Report Generation Tools -->
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Generate Reports</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="report_type">Report Type</label>
                                <select id="report_type" class="form-control">
                                    <option value="compliance">Compliance Report</option>
                                    <option value="category_breakdown">Category Breakdown</option>
                                    <option value="member_summary">Member Summary</option>
                                    <option value="trend_analysis">Trend Analysis</option>
                                    <option value="non_compliant">Non-Compliant Members</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="date_range">Date Range</label>
                                <select id="date_range" class="form-control">
                                    <option value="current_year">Current Year (2024)</option>
                                    <option value="last_year">Last Year (2023)</option>
                                    <option value="last_6_months">Last 6 Months</option>
                                    <option value="custom">Custom Range</option>
                                </select>
                            </div>
                            <div class="form-group" id="custom_date_range" style="display: none;">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="start_date">Start Date</label>
                                        <input type="date" id="start_date" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label for="end_date">End Date</label>
                                        <input type="date" id="end_date" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="membership_filter">Membership Type</label>
                                <select id="membership_filter" class="form-control">
                                    <option value="all">All Members</option>
                                    <option value="professional">Professional</option>
                                    <option value="graduate">Graduate</option>
                                    <option value="student">Student</option>
                                    <option value="company">Company</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="export_format">Export Format</label>
                                <select id="export_format" class="form-control">
                                    <option value="pdf">PDF</option>
                                    <option value="excel">Excel</option>
                                    <option value="csv">CSV</option>
                                </select>
                            </div>
                            <button type="button" class="btn btn-primary btn-block">
                                <i class="bx bx-download me-1"></i> Generate Report
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">CPD Analytics Overview</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="text-center">
                                    <h4 class="text-primary">156</h4>
                                    <p class="text-muted mb-0">Active Members</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    <h4 class="text-success">87%</h4>
                                    <p class="text-muted mb-0">Compliance Rate</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    <h4 class="text-info">2,847</h4>
                                    <p class="text-muted mb-0">Total CPD Units</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="text-center">
                                    <h4 class="text-warning">18.2</h4>
                                    <p class="text-muted mb-0">Avg Units/Member</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts and Analytics -->
        <div class="row">
            <!-- CPD Compliance Trends -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">CPD Compliance Trends</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="complianceChart" height="300"></canvas>
                        <div class="mt-3">
                            <div class="row text-center">
                                <div class="col-4">
                                    <h6 class="text-success">135</h6>
                                    <p class="text-muted mb-0">Compliant</p>
                                </div>
                                <div class="col-4">
                                    <h6 class="text-warning">15</h6>
                                    <p class="text-muted mb-0">At Risk</p>
                                </div>
                                <div class="col-4">
                                    <h6 class="text-danger">6</h6>
                                    <p class="text-muted mb-0">Non-Compliant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CPD Category Distribution -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">CPD Category Distribution</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="categoryChart" height="300"></canvas>
                        <div class="mt-3">
                            <div class="d-flex justify-content-between">
                                <div class="text-center">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-primary rounded" style="width: 12px; height: 12px;"></div>
                                        <span class="ms-2">Level 1 - 15%</span>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-success rounded" style="width: 12px; height: 12px;"></div>
                                        <span class="ms-2">Level 2 - 60%</span>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-warning rounded" style="width: 12px; height: 12px;"></div>
                                        <span class="ms-2">Level 3 - 25%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Monthly Activity Trends -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Monthly CPD Activity Trends</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="monthlyTrendsChart" height="100"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detailed Statistics Tables -->
        <div class="row">
            <!-- Top Performers -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Top CPD Performers</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead>
                                <tr>
                                    <th>Rank</th>
                                    <th>Member</th>
                                    <th>CPD Units</th>
                                    <th>Compliance</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><span class="badge badge-warning">1</span></td>
                                    <td>John Doe</td>
                                    <td>35 units</td>
                                    <td><span class="badge badge-success badge-sm">175%</span></td>
                                </tr>
                                <tr>
                                    <td><span class="badge badge-secondary">2</span></td>
                                    <td>Jane Smith</td>
                                    <td>32 units</td>
                                    <td><span class="badge badge-success badge-sm">160%</span></td>
                                </tr>
                                <tr>
                                    <td><span class="badge badge-secondary">3</span></td>
                                    <td>Mike Johnson</td>
                                    <td>28 units</td>
                                    <td><span class="badge badge-success badge-sm">140%</span></td>
                                </tr>
                                <tr>
                                    <td><span class="badge badge-secondary">4</span></td>
                                    <td>Sarah Wilson</td>
                                    <td>26 units</td>
                                    <td><span class="badge badge-success badge-sm">130%</span></td>
                                </tr>
                                <tr>
                                    <td><span class="badge badge-secondary">5</span></td>
                                    <td>David Brown</td>
                                    <td>24 units</td>
                                    <td><span class="badge badge-success badge-sm">120%</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- At-Risk Members -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Members at Risk</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead>
                                <tr>
                                    <th>Member</th>
                                    <th>CPD Units</th>
                                    <th>Progress</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Alex Turner</td>
                                    <td>8/20</td>
                                    <td>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-danger" style="width: 40%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-warning btn-xs">
                                            <i class="bx bx-mail-send"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lisa Chen</td>
                                    <td>12/20</td>
                                    <td>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-warning" style="width: 60%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-info btn-xs">
                                            <i class="bx bx-phone"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Robert Kim</td>
                                    <td>5/20</td>
                                    <td>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-danger" style="width: 25%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger btn-xs">
                                            <i class="bx bx-error-circle"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Emma Davis</td>
                                    <td>14/20</td>
                                    <td>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-warning" style="width: 70%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-info btn-xs">
                                            <i class="bx bx-mail-send"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>James Lee</td>
                                    <td>6/20</td>
                                    <td>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-danger" style="width: 30%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger btn-xs">
                                            <i class="bx bx-error-circle"></i>
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

        <!-- CPD Category Performance -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">CPD Category Performance Analysis</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>CPD Category</th>
                                    <th>Total Submissions</th>
                                    <th>Approved</th>
                                    <th>Pending</th>
                                    <th>Declined</th>
                                    <th>Total Units Awarded</th>
                                    <th>Avg Units per Activity</th>
                                    <th>Approval Rate</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <span class="badge badge-primary">Level 1 - Self-Directed Learning</span>
                                    </td>
                                    <td>89</td>
                                    <td><span class="text-success">82</span></td>
                                    <td><span class="text-warning">4</span></td>
                                    <td><span class="text-danger">3</span></td>
                                    <td>246 units</td>
                                    <td>3.0 units</td>
                                    <td><span class="badge badge-success">92%</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="badge badge-success">Level 2 - Professional Activities</span>
                                    </td>
                                    <td>156</td>
                                    <td><span class="text-success">142</span></td>
                                    <td><span class="text-warning">8</span></td>
                                    <td><span class="text-danger">6</span></td>
                                    <td>1,704 units</td>
                                    <td>12.0 units</td>
                                    <td><span class="badge badge-success">91%</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="badge badge-info">Level 2 - Other Education & Learning</span>
                                    </td>
                                    <td>67</td>
                                    <td><span class="text-success">58</span></td>
                                    <td><span class="text-warning">5</span></td>
                                    <td><span class="text-danger">4</span></td>
                                    <td>406 units</td>
                                    <td>7.0 units</td>
                                    <td><span class="badge badge-success">87%</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="badge badge-warning">Level 2 - Volunteer Service</span>
                                    </td>
                                    <td>34</td>
                                    <td><span class="text-success">32</span></td>
                                    <td><span class="text-warning">1</span></td>
                                    <td><span class="text-danger">1</span></td>
                                    <td>192 units</td>
                                    <td>6.0 units</td>
                                    <td><span class="badge badge-success">94%</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="badge badge-danger">Level 3 - Formal Training & Certification</span>
                                    </td>
                                    <td>23</td>
                                    <td><span class="text-success">19</span></td>
                                    <td><span class="text-warning">3</span></td>
                                    <td><span class="text-danger">1</span></td>
                                    <td>475 hours</td>
                                    <td>25.0 hours</td>
                                    <td><span class="badge badge-success">83%</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="badge badge-dark">Level 3 - Formal Academic Education</span>
                                    </td>
                                    <td>12</td>
                                    <td><span class="text-success">10</span></td>
                                    <td><span class="text-warning">1</span></td>
                                    <td><span class="text-danger">1</span></td>
                                    <td>240 units</td>
                                    <td>24.0 units</td>
                                    <td><span class="badge badge-success">83%</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart.js Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Compliance Chart
        const complianceCtx = document.getElementById('complianceChart').getContext('2d');
        new Chart(complianceCtx, {
            type: 'doughnut',
            data: {
                labels: ['Compliant', 'At Risk', 'Non-Compliant'],
                datasets: [{
                    data: [135, 15, 6],
                    backgroundColor: ['#28a745', '#ffc107', '#dc3545']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        // Category Distribution Chart
        const categoryCtx = document.getElementById('categoryChart').getContext('2d');
        new Chart(categoryCtx, {
            type: 'pie',
            data: {
                labels: ['Level 1', 'Level 2', 'Level 3'],
                datasets: [{
                    data: [15, 60, 25],
                    backgroundColor: ['#007bff', '#28a745', '#ffc107']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        // Monthly Trends Chart
        const monthlyCtx = document.getElementById('monthlyTrendsChart').getContext('2d');
        new Chart(monthlyCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                datasets: [{
                    label: 'CPD Submissions',
                    data: [45, 52, 38, 67, 73, 89, 95, 78, 84],
                    borderColor: '#007bff',
                    backgroundColor: 'rgba(0, 123, 255, 0.1)',
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Show/hide custom date range
        document.getElementById('date_range').addEventListener('change', function() {
            const customRange = document.getElementById('custom_date_range');
            if (this.value === 'custom') {
                customRange.style.display = 'block';
            } else {
                customRange.style.display = 'none';
            }
        });
    </script>

@endsection
