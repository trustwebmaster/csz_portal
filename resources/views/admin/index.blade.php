@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <!-- Page Title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Analytics Dashboard</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row">
        <div class="col-xl-4 col-md-6">
            <div class="card card-h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Student Members</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="{{ $students }}">{{ $students }}</span>
                            </h4>
                        </div>
                        <div class="flex-shrink-0 text-end dash-widget">
                            <div class="avatar-sm">
                                <div class="avatar-title bg-soft-primary text-primary rounded-circle font-size-18">
                                    <i class="mdi mdi-school"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body border-top py-3">
                    <div class="text-truncate">
                        <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i>{{ number_format(($students / max(($students + $company + $professional), 1)) * 100, 1) }}%</span>
                        <span class="text-muted ms-2">of total members</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6">
            <div class="card card-h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Company Members</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="{{ $company }}">{{ $company }}</span>
                            </h4>
                        </div>
                        <div class="flex-shrink-0 text-end dash-widget">
                            <div class="avatar-sm">
                                <div class="avatar-title bg-soft-success text-success rounded-circle font-size-18">
                                    <i class="mdi mdi-office-building"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body border-top py-3">
                    <div class="text-truncate">
                        <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i>{{ number_format(($company / max(($students + $company + $professional), 1)) * 100, 1) }}%</span>
                        <span class="text-muted ms-2">of total members</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-6">
            <div class="card card-h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Professional Members</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="{{ $professional }}">{{ $professional }}</span>
                            </h4>
                        </div>
                        <div class="flex-shrink-0 text-end dash-widget">
                            <div class="avatar-sm">
                                <div class="avatar-title bg-soft-warning text-warning rounded-circle font-size-18">
                                    <i class="mdi mdi-account-tie"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body border-top py-3">
                    <div class="text-truncate">
                        <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i>{{ number_format(($professional / max(($students + $company + $professional), 1)) * 100, 1) }}%</span>
                        <span class="text-muted ms-2">of total members</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="row">
        <!-- Membership Distribution Doughnut Chart -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Membership Distribution</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown">
                            <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted font-size-12">Sort By:</span> <span class="fw-medium">Current<i class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <div style="width: 100%; height: 300px;">
                            <canvas id="membershipChart" width="400" height="300"></canvas>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <div class="text-center">
                                <p class="mb-2"><i class="mdi mdi-circle text-primary font-size-12 me-1"></i> Students</p>
                                <h5 class="mb-0">{{ $students }}</h5>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="text-center">
                                <p class="mb-2"><i class="mdi mdi-circle text-success font-size-12 me-1"></i> Companies</p>
                                <h5 class="mb-0">{{ $company }}</h5>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="text-center">
                                <p class="mb-2"><i class="mdi mdi-circle text-warning font-size-12 me-1"></i> Professional</p>
                                <h5 class="mb-0">{{ $professional }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Membership Comparison Chart -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Membership Comparison</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown">
                            <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted font-size-12">View:</span> <span class="fw-medium">Bar Chart<i class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div style="width: 100%; height: 300px;">
                        <canvas id="comparisonChart" width="400" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Analytics -->
    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Membership Trends</h4>
                    <div class="flex-shrink-0">
                        <button type="button" class="btn btn-soft-secondary btn-sm">
                            <i class="mdi mdi-export me-1"></i> Export
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div style="width: 100%; height: 350px;">
                        <canvas id="trendsChart" width="400" height="350"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Quick Stats</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4">
                        <div class="avatar-sm flex-shrink-0 me-3">
                            <div class="avatar-title bg-soft-primary text-primary rounded-circle font-size-18">
                                <i class="mdi mdi-account-group"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <p class="text-muted mb-1">Total Members</p>
                            <h5 class="mb-0">{{ $students + $company + $professional }}</h5>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-4">
                        <div class="avatar-sm flex-shrink-0 me-3">
                            <div class="avatar-title bg-soft-success text-success rounded-circle font-size-18">
                                <i class="mdi mdi-trending-up"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <p class="text-muted mb-1">Most Popular</p>
                            <h5 class="mb-0">
                                @if($students >= $company && $students >= $professional)
                                    Students
                                @elseif($company >= $students && $company >= $professional)
                                    Companies
                                @else
                                    Professional
                                @endif
                            </h5>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-4">
                        <div class="avatar-sm flex-shrink-0 me-3">
                            <div class="avatar-title bg-soft-warning text-warning rounded-circle font-size-18">
                                <i class="mdi mdi-chart-pie"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <p class="text-muted mb-1">Diversity Index</p>
                            <h5 class="mb-0">{{ number_format((1 - (pow($students/max(($students + $company + $professional), 1), 2) + pow($company/max(($students + $company + $professional), 1), 2) + pow($professional/max(($students + $company + $professional), 1), 2))) * 100, 1) }}%</h5>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="avatar-sm flex-shrink-0 me-3">
                            <div class="avatar-title bg-soft-info text-info rounded-circle font-size-18">
                                <i class="mdi mdi-clock-outline"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1">
                            <p class="text-muted mb-1">Last Updated</p>
                            <h5 class="mb-0">{{ date('M d, Y') }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
.card-h-100 {
    height: 100%;
}

.counter-value {
    font-size: 2rem;
    font-weight: 600;
    color: #495057;
}

.badge-soft-success {
    color: #10b759 !important;
    background-color: rgba(16, 183, 89, 0.1) !important;
}

.dash-widget {
    width: 80px;
    height: 50px;
}

.avatar-sm {
    width: 2.5rem;
    height: 2.5rem;
}

.avatar-title {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
}

.bg-soft-primary {
    background-color: rgba(31, 88, 199, 0.1) !important;
}

.bg-soft-success {
    background-color: rgba(29, 209, 161, 0.1) !important;
}

.bg-soft-warning {
    background-color: rgba(255, 214, 10, 0.1) !important;
}

.bg-soft-info {
    background-color: rgba(23, 162, 184, 0.1) !important;
}

.text-primary {
    color: #1f58c7 !important;
}

.text-success {
    color: #1dd1a1 !important;
}

.text-warning {
    color: #ffd60a !important;
}

.text-info {
    color: #17a2b8 !important;
}

.page-title-box {
    padding-bottom: 24px;
}

.card {
    border: 1px solid #eff2f7;
    border-radius: 0.375rem;
    box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    margin-bottom: 24px;
}

.card-header {
    background-color: transparent;
    border-bottom: 1px solid #eff2f7;
    padding: 1.25rem;
}

.card-body {
    padding: 1.25rem;
}

.card-title {
    font-size: 1.1rem;
    font-weight: 600;
    color: #495057;
}

.btn-soft-secondary {
    color: #6c757d;
    background-color: rgba(108, 117, 125, 0.1);
    border-color: rgba(108, 117, 125, 0.1);
}

.btn-soft-secondary:hover {
    color: #495057;
    background-color: rgba(108, 117, 125, 0.2);
    border-color: rgba(108, 117, 125, 0.2);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Data
    const studentsCount = {{ $students }};
    const companyCount = {{ $company }};
    const professionalCount = {{ $professional }};
    const totalCount = studentsCount + companyCount + professionalCount;

    // Color scheme
    const colors = {
        primary: '#1f58c7',
        success: '#1dd1a1',
        warning: '#ffd60a',
        info: '#17a2b8',
        light: '#f8f9fa',
        dark: '#495057'
    };

    // 1. Membership Distribution Doughnut Chart
    const membershipCtx = document.getElementById('membershipChart').getContext('2d');
    new Chart(membershipCtx, {
        type: 'doughnut',
        data: {
            labels: ['Students', 'Companies', 'Professional'],
            datasets: [{
                data: [studentsCount, companyCount, professionalCount],
                backgroundColor: [colors.primary, colors.success, colors.warning],
                borderColor: '#fff',
                borderWidth: 3,
                hoverBorderWidth: 5
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const percentage = ((context.parsed / totalCount) * 100).toFixed(1);
                            return `${context.label}: ${context.parsed} (${percentage}%)`;
                        }
                    }
                }
            },
            cutout: '60%',
            animation: {
                animateRotate: true,
                duration: 2000
            }
        }
    });

    // 2. Comparison Bar Chart
    const comparisonCtx = document.getElementById('comparisonChart').getContext('2d');
    new Chart(comparisonCtx, {
        type: 'bar',
        data: {
            labels: ['Students', 'Companies', 'Professional'],
            datasets: [{
                label: 'Member Count',
                data: [studentsCount, companyCount, professionalCount],
                backgroundColor: [
                    colors.primary + '80',
                    colors.success + '80',
                    colors.warning + '80'
                ],
                borderColor: [colors.primary, colors.success, colors.warning],
                borderWidth: 2,
                borderRadius: 8,
                borderSkipped: false
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    backgroundColor: 'rgba(0,0,0,0.8)',
                    titleColor: '#fff',
                    bodyColor: '#fff',
                    cornerRadius: 8
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: '#f1f1f1',
                        drawBorder: false
                    },
                    ticks: {
                        color: '#6c757d',
                        font: {
                            size: 12
                        }
                    }
                },
                x: {
                    grid: {
                        display: false
                    },
                    ticks: {
                        color: '#6c757d',
                        font: {
                            size: 12
                        }
                    }
                }
            },
            animation: {
                duration: 2000,
                easing: 'easeInOutBounce'
            }
        }
    });

    // 3. Trends Line Chart (Sample data for demonstration)
    const trendsCtx = document.getElementById('trendsChart').getContext('2d');
    new Chart(trendsCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [
                {
                    label: 'Students',
                    data: [
                        Math.max(0, studentsCount - Math.floor(Math.random() * studentsCount * 0.3)),
                        Math.max(0, studentsCount - Math.floor(Math.random() * studentsCount * 0.25)),
                        Math.max(0, studentsCount - Math.floor(Math.random() * studentsCount * 0.2)),
                        Math.max(0, studentsCount - Math.floor(Math.random() * studentsCount * 0.15)),
                        Math.max(0, studentsCount - Math.floor(Math.random() * studentsCount * 0.1)),
                        Math.max(0, studentsCount - Math.floor(Math.random() * studentsCount * 0.05)),
                        studentsCount,
                        studentsCount + Math.floor(Math.random() * 10),
                        studentsCount + Math.floor(Math.random() * 15),
                        studentsCount + Math.floor(Math.random() * 20),
                        studentsCount + Math.floor(Math.random() * 25),
                        studentsCount
                    ],
                    borderColor: colors.primary,
                    backgroundColor: colors.primary + '20',
                    tension: 0.4,
                    fill: true,
                    pointRadius: 4,
                    pointHoverRadius: 6
                },
                {
                    label: 'Companies',
                    data: [
                        Math.max(0, companyCount - Math.floor(Math.random() * companyCount * 0.3)),
                        Math.max(0, companyCount - Math.floor(Math.random() * companyCount * 0.25)),
                        Math.max(0, companyCount - Math.floor(Math.random() * companyCount * 0.2)),
                        Math.max(0, companyCount - Math.floor(Math.random() * companyCount * 0.15)),
                        Math.max(0, companyCount - Math.floor(Math.random() * companyCount * 0.1)),
                        Math.max(0, companyCount - Math.floor(Math.random() * companyCount * 0.05)),
                        companyCount,
                        companyCount + Math.floor(Math.random() * 5),
                        companyCount + Math.floor(Math.random() * 8),
                        companyCount + Math.floor(Math.random() * 10),
                        companyCount + Math.floor(Math.random() * 12),
                        companyCount
                    ],
                    borderColor: colors.success,
                    backgroundColor: colors.success + '20',
                    tension: 0.4,
                    fill: true,
                    pointRadius: 4,
                    pointHoverRadius: 6
                },
                {
                    label: 'Professional',
                    data: [
                        Math.max(0, professionalCount - Math.floor(Math.random() * professionalCount * 0.3)),
                        Math.max(0, professionalCount - Math.floor(Math.random() * professionalCount * 0.25)),
                        Math.max(0, professionalCount - Math.floor(Math.random() * professionalCount * 0.2)),
                        Math.max(0, professionalCount - Math.floor(Math.random() * professionalCount * 0.15)),
                        Math.max(0, professionalCount - Math.floor(Math.random() * professionalCount * 0.1)),
                        Math.max(0, professionalCount - Math.floor(Math.random() * professionalCount * 0.05)),
                        professionalCount,
                        professionalCount + Math.floor(Math.random() * 8),
                        professionalCount + Math.floor(Math.random() * 12),
                        professionalCount + Math.floor(Math.random() * 15),
                        professionalCount + Math.floor(Math.random() * 18),
                        professionalCount
                    ],
                    borderColor: colors.warning,
                    backgroundColor: colors.warning + '20',
                    tension: 0.4,
                    fill: true,
                    pointRadius: 4,
                    pointHoverRadius: 6
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            interaction: {
                intersect: false,
                mode: 'index'
            },
            plugins: {
                legend: {
                    position: 'top',
                    labels: {
                        usePointStyle: true,
                        padding: 20,
                        font: {
                            size: 12
                        }
                    }
                },
                tooltip: {
                    backgroundColor: 'rgba(0,0,0,0.8)',
                    titleColor: '#fff',
                    bodyColor: '#fff',
                    cornerRadius: 8,
                    displayColors: true
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: '#f1f1f1',
                        drawBorder: false
                    },
                    ticks: {
                        color: '#6c757d',
                        font: {
                            size: 12
                        }
                    }
                },
                x: {
                    grid: {
                        display: false
                    },
                    ticks: {
                        color: '#6c757d',
                        font: {
                            size: 12
                        }
                    }
                }
            },
            animation: {
                duration: 2000,
                easing: 'easeInOutQuart'
            }
        }
    });

    // Counter animation
    function animateCounter(element, target) {
        let current = 0;
        const increment = target / 50;
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            element.textContent = Math.floor(current);
        }, 40);
    }

    // Animate counters
    document.querySelectorAll('.counter-value').forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target'));
        animateCounter(counter, target);
    });
});
</script>
@endsection
