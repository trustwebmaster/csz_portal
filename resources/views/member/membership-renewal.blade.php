@extends('layouts.master')

@section('content')
<style>
    .renewal-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .renewal-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    }

    .card-header-custom {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        padding: 1.5rem;
        border: none;
    }

    .form-group-enhanced {
        margin-bottom: 1.5rem;
        position: relative;
    }

    .form-control-enhanced {
        border: 2px solid #e3ebf6;
        border-radius: 10px;
        padding: 0.75rem 1rem;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        background-color: #fff;
    }

    .form-control-enhanced:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        background-color: #fff;
    }

    .form-control-enhanced.readonly {
        background-color: #f8f9fa;
        border-color: #dee2e6;
    }

    .form-label-enhanced {
        font-weight: 600;
        color: #495057;
        margin-bottom: 0.5rem;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .btn-submit {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        border-radius: 10px;
        padding: 0.75rem 2rem;
        font-weight: 600;
        font-size: 1rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
    }

    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        background: linear-gradient(135deg, #5a67d8 0%, #6b46c1 100%);
    }

    .info-card {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        border-radius: 15px;
        color: white;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
    }

    .payment-instructions {
        background: #f8f9fa;
        border-left: 4px solid #667eea;
        border-radius: 0 10px 10px 0;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
    }

    .step-indicator {
        display: flex;
        justify-content: center;
        margin-bottom: 2rem;
    }

    .step {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #e9ecef;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 10px;
        font-weight: 600;
        color: #6c757d;
        position: relative;
    }

    .step.active {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }

    .step::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 100%;
        width: 20px;
        height: 2px;
        background: #e9ecef;
        transform: translateY(-50%);
    }

    .step:last-child::after {
        display: none;
    }

    .amount-display {
        font-size: 1.5rem;
        font-weight: 700;
        color: #667eea;
        text-align: center;
        padding: 1rem;
        background: rgba(102, 126, 234, 0.1);
        border-radius: 10px;
        margin: 1rem 0;
    }

    .icon-input {
        position: relative;
    }

    .icon-input i {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #6c757d;
    }

    .icon-input .form-control-enhanced {
        padding-left: 45px;
    }

    @media (max-width: 768px) {
        .step-indicator {
            display: none;
        }

        .col-lg-8 {
            padding: 0 15px;
        }
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <div>
                    <h4 class="mb-0 font-size-18">Membership Renewal</h4>
                    <p class="text-muted mb-0">Renew your membership to continue enjoying our services</p>
                </div>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Membership</a></li>
                        <li class="breadcrumb-item active">Renewal</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Step Indicator -->
            <div class="step-indicator">
                <div class="step active">1</div>
                <div class="step">2</div>
                <div class="step">3</div>
            </div>

            <!-- Main Renewal Card -->
            <div class="card renewal-card">
                <div class="card-header-custom">
                    <h5 class="mb-0"><i class="mdi mdi-account-check mr-2"></i>Membership Renewal Form</h5>
                    <p class="mb-0 opacity-75">Complete the form below to renew your membership</p>
                </div>

                <div class="card-body p-4">
                    <!-- Current Membership Info -->
                    <div class="info-card">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h6 class="mb-1">Current Membership Status</h6>
                                <p class="mb-0 opacity-75">Your membership is about to expire. Renew now to continue accessing all benefits.</p>
                            </div>
                            <div class="col-md-4 text-right">
                                <div class="amount-display bg-white text-dark">
                                    $5.00
                                </div>
                            </div>
                        </div>
                    </div>

                    <form action="" method="post" enctype="multipart/form-data" id="renewalForm">
                        @csrf

                        <!-- Account Information -->
                        <div class="form-group-enhanced">
                            <label class="form-label-enhanced">
                                <i class="mdi mdi-email mr-1"></i>Email Address
                            </label>
                            <div class="icon-input">
                                <i class="mdi mdi-email"></i>
                                <input type="email" class="form-control-enhanced readonly" value="johnd@gmail.com" readonly>
                            </div>
                            <small class="text-muted">This is your registered email address</small>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group-enhanced">
                                    <label class="form-label-enhanced">
                                        <i class="mdi mdi-currency-usd mr-1"></i>Renewal Amount
                                    </label>
                                    <div class="icon-input">
                                        <i class="mdi mdi-currency-usd"></i>
                                        <input type="text" class="form-control-enhanced readonly" value="$5.00" readonly>
                                    </div>
                                    <small class="text-muted">Annual membership fee</small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-enhanced">
                                    <label class="form-label-enhanced">
                                        <i class="mdi mdi-account-group mr-1"></i>Membership Type
                                    </label>
                                    <div class="icon-input">
                                        <i class="mdi mdi-account-group"></i>
                                        <select class="form-control-enhanced" name="membership_type" required>
                                            <option value="">Select Membership Type</option>
                                            <option value="student">Student Member</option>
                                            <option value="graduate">Graduate Member</option>
                                            <option value="professional">Professional Member</option>
                                            <option value="company">Company Member</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Payment Information -->
                        <div class="payment-instructions">
                            <h6><i class="mdi mdi-information mr-2"></i>Payment Instructions</h6>
                            <ul class="mb-0">
                                <li>Enter your EcoCash number below</li>
                                <li>You will receive a payment prompt on your phone</li>
                                <li>Complete the payment to activate your renewal</li>
                            </ul>
                        </div>

                        <div class="form-group-enhanced">
                            <label class="form-label-enhanced">
                                <i class="mdi mdi-phone mr-1"></i>EcoCash Number
                            </label>
                            <div class="icon-input">
                                <i class="mdi mdi-phone"></i>
                                <input type="tel" class="form-control-enhanced" name="ecocash_number"
                                       placeholder="e.g., 0771234567" pattern="[0-9]{10}" required>
                            </div>
                            <small class="text-muted">Enter your 10-digit EcoCash number</small>
                        </div>

                        <!-- Terms and Conditions -->
                        <div class="form-group-enhanced">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="terms" required>
                                <label class="custom-control-label" for="terms">
                                    I agree to the <a href="#" class="text-primary">Terms and Conditions</a> and
                                    <a href="#" class="text-primary">Privacy Policy</a>
                                </label>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-submit">
                                <i class="mdi mdi-credit-card mr-2"></i>
                                Process Renewal Payment
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Help Section -->
            <div class="card mt-4">
                <div class="card-body">
                    <h6><i class="mdi mdi-help-circle mr-2"></i>Need Help?</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="mb-1"><strong>Payment Issues:</strong></p>
                            <p class="text-muted small">Contact support at payment@csz.org</p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-1"><strong>Technical Support:</strong></p>
                            <p class="text-muted small">Call +263 123 456 789</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('renewalForm');
    const ecocashInput = document.querySelector('input[name="ecocash_number"]');

    // Format EcoCash number input
    ecocashInput.addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, '');
        if (value.length > 10) {
            value = value.slice(0, 10);
        }
        e.target.value = value;
    });

    // Form validation
    form.addEventListener('submit', function(e) {
        const membershipType = document.querySelector('select[name="membership_type"]').value;
        const ecocashNumber = document.querySelector('input[name="ecocash_number"]').value;
        const termsAccepted = document.getElementById('terms').checked;

        if (!membershipType) {
            e.preventDefault();
            alert('Please select a membership type');
            return;
        }

        if (ecocashNumber.length !== 10) {
            e.preventDefault();
            alert('Please enter a valid 10-digit EcoCash number');
            return;
        }

        if (!termsAccepted) {
            e.preventDefault();
            alert('Please accept the terms and conditions');
            return;
        }

        // Show loading state
        const submitBtn = form.querySelector('button[type="submit"]');
        submitBtn.innerHTML = '<i class="mdi mdi-loading mdi-spin mr-2"></i>Processing...';
        submitBtn.disabled = true;
    });
});
</script>

@endsection
