@extends('layouts.master2')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card overflow-hidden">
                <div class="bg-soft-primary">
                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-4">
                                <h5 class="text-primary">Graduate Membership Registration</h5>
                            </div>
                        </div>
                        <div class="col-5 align-self-end">
                            <img src="{{ asset('assets/images/profile-img.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div>
                        <a href="/">
                            <div class="avatar-md profile-user-wid mb-4">
                                            <span>
                                                <img src="{{ asset('assets/images/csz.png') }}" alt="logo"
                                                     height="45">
                                            </span>
                            </div>
                        </a>
                    </div>
                    <div class="p-2">

                        <form name="student" action="{{ route('initialise') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div id="progrss-wizard" class="twitter-bs-wizard">
                                <ul class="twitter-bs-wizard-nav nav-justified">
                                    <li class="nav-item">
                                        <a href="#account-2" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                            <span class="step-number mr-2">01</span>
                                            Account
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#profile-tab-2" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                            <span class="step-number mr-2">03</span>
                                            Profile
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#finish-2" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                            <span class="step-number mr-2">03</span>
                                            Payment
                                        </a>
                                    </li>
                                </ul>

                                <div id="bar" class="progress mt-4">
                                    <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"></div>
                                </div>
                                <div class="tab-content twitter-bs-wizard-tab-content">
                                    <div class="tab-pane" id="account-2">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label" for="userName1">Chapter Affiliation</label>
                                                    <div class="col-md-9">
                                                        <select type="text" class="form-control"  name="chapter" required>
                                                            <option>Gweru</option>
                                                            <option>Harare</option>
                                                            <option>Kwekwe</option>
                                                            <option>Mutare</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label" for="userName1">Interest Groups</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"  name="interest_group" data-role="tagsinput" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label"> First Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" name="name" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label">Date Of Bith</label>
                                                    <div class="col-md-9">
                                                        <input type="date" class="form-control" name="date_of_bith"  placeholder="mm/dd/yyyy" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label">Surname</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="password1" name="surname" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label">Email</label>
                                                    <div class="col-md-9">
                                                        <input type="email" id="password1" name="email" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label" for="password1"> Password</label>
                                                    <div class="col-md-9">
                                                        <input type="password" id="password1" name="password1" class="form-control"  required>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>

                                    <div class="tab-pane" id="profile-tab-2">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label" for="name1"> Mobile Number</label>
                                                    <div class="col-md-9">
                                                        <input type="number"  name="phonenumber" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label">Graduating  School</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="school" name="surname1" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label">Certifiate </label>
                                                    <div class="col-md-9">
                                                        <input type="file" name="school_id" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label">National ID</label>
                                                    <div class="col-md-9">
                                                        <input type="file" name="national_id" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label" for="surname1">Reason For Joining CSZ</label>
                                                    <div class="col-md-9">
                                                        <textarea type="text" id="notes" rows="3" cols="3" name="notes" class="form-control" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-3">
                                                    <label class="col-md-3 col-form-label" for="surname1">Physical Address</label>
                                                    <div class="col-md-9">
                                                        <textarea type="text" id="address" rows="3" cols="3" name="address" class="form-control" required></textarea>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>

                                    <div class="tab-pane" id="finish-2">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="text-center">
                                                    <img src="images/paynow.svg" width="200px" height="100px">
                                                    <div class="form-group row mb-3">
                                                        <label class="col-md-3 col-form-label">Membership Amount</label>
                                                        <div class="col-md-9">
                                                            <input type="number" name="number" class="form-control" value="150" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div>
                                </div>
                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                    <li class="previous"><a href="javascript: void(0);">Previous</a></li>
                                    <li class="next"><a href="javascript: void(0);">Next</a></li>
                                </ul>
                            </div>

                        <!-- Payment Tab -->
                        <div class="tab-pane fade scale-in" id="payment">
                            <div class="payment-section">
                                <img src="{{asset("images/paynow.svg")}}" alt="PayNow" class="payment-logo">

                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label class="form-label">Ecocash Number</label>
                                            <div class="input-group">
                                                <span class="input-group-text">07</span>
                                                <input type="tel" class="form-control" name="ecocash_number"
                                                       pattern="[1-9][0-9]{7}" required>
                                                        </div>
                                            <div class="invalid-feedback">Please enter a valid Ecocash number</div>
                                                    </div>

                                        <div class="mb-3">
                                            <label class="form-label">Membership Amount</label>
                                            <div class="input-group">
                                                <span class="input-group-text">$</span>
                                                <input type="number" class="form-control" name="amount" value="150" readonly>
                                                        </div>
                                                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection
