@extends('layouts.master')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-12">Approval Overview</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.pending-approvals') }}">Pending
                                    Approvals</a></li>
                            <li class="breadcrumb-item active">Approval Overview</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <a class="image-popup-no-margins" href="{{ asset('assets/images/users/avatar-3.jpg') }}">
                                <img class="avatar-sm rounded-circle mr-4" alt="" src="{{ asset('assets/images/users/avatar-3.jpg') }}" width="75">
                            </a>

                            <div class="media-body overflow-hidden">
                                <h5 class="text-truncate font-size-15">Tiger Nixon</h5>
                            </div>
                            <div>
                                <button type="button"
                                        class="btn btn-success btn-xs waves-effect waves-light">Approve
                                </button>
                                |
                                <button type="button"
                                        class="btn btn-danger btn-xs waves-effect waves-light">Decline
                                </button>
                            </div>
                        </div>

                        <h5 class="font-size-15 mt-4">Overview</h5>

                        <p class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum debitis dicta, dolor ducimus
                            earum error eveniet incidunt nobis perferendis quas, qui temporibus tenetur unde, vitae
                            voluptates! Consequatur deleniti earum id pariatur quo quos veritatis. Adipisci delectus
                            dolore error fugiat laboriosam officia ratione similique vitae! At deleniti earum eum facere
                            sed?
                        </p>

                        <div class="row task-dates">
                            <div class="col-sm-4 col-6">
                                <div class="mt-4">
                                    <h5 class="font-size-14"><i class="bx bx-calendar mr-1 text-primary"></i> Registration Date
                                    </h5>
                                    <p class="text-muted mb-0">08 Sept, 2019</p>
                                </div>
                            </div>

                            <div class="col-sm-2"></div>

                            <div class="col-sm-4 col-6">
                                <div class="mt-4">
                                    <h5 class="font-size-14"><i class="bx bxs-city mr-1 text-primary"></i> Interest Groups</h5>
                                    <span class="badge badge-warning">Coding</span>,
                                    <span class="badge badge-warning">Fishing</span>,
                                    <span class="badge badge-warning">Singing</span>
                                </div>
                            </div>
                        </div>

                        <div class="row task-dates mt-4">
                            <div class="col-sm-4 m-0">
                                <div class="mt-4">
                                    <h5 class="font-size-14"><i class="bx bx-id-card mr-1 text-primary"></i>National ID</h5>
                                    <table class="table table-borderless m-0">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="avatar-sm">
                                                    <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-24">
                                                        <i class="bx bxs-file-doc"></i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="font-size-12 mb-1"><a href="#" class="text-dark">Skote Landing.Zip</a></h5>
                                                <small>Size : 3.25 MB</small>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <a href="#" class="text-dark"><i class="bx bx-download h3 m-0"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-sm-2"></div>

                            <div class="col-sm-4 m-0">
                                <div class="mt-4">
                                    <h5 class="font-size-14"><i class="bx bx-id-card mr-1 text-primary"></i>School ID</h5>
                                    <table class="table table-borderless m-0">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="avatar-sm">
                                                    <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-24">
                                                        <i class="bx bxs-file-doc"></i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="font-size-12 mb-1"><a href="#" class="text-dark">Skote Landing.Zip</a></h5>
                                                <small>Size : 3.25 MB</small>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <a href="#" class="text-dark"><i class="bx bx-download h3 m-0"></i></a>
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
            </div>
            <!-- end col -->

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Personal Information</h4>
                        <div class="table-responsive">
                            <table class="table table-nowrap mb-0">
                                <tbody>
                                <tr>
                                    <th scope="row">Full Name :</th>
                                    <td>Tiger Nixon</td>
                                </tr>
                                <tr>
                                    <th scope="row">Mobile :</th>
                                    <td>(123) 123 1234</td>
                                </tr>
                                <tr>
                                    <th scope="row">E-mail :</th>
                                    <td class="text-wrap">tigern@gmail.com</td>
                                </tr>
                                <tr>
                                    <th scope="row">Address :</th>
                                    <td class="text-wrap">California, United States</td>
                                </tr>
                                <tr>
                                    <th scope="row">School Name :</th>
                                    <td class="text-wrap">University of Zimbabwe</td>
                                </tr>
                                <tr>
                                    <th scope="row">Date of Birth :</th>
                                    <td class="text-wrap">13 May 1999</td>
                                </tr>
                                <tr>
                                    <th scope="row">Chapter :</th>
                                    <td class="text-wrap">Harare</td>
                                </tr>
                                <tr>
                                    <th scope="row">Current Year :</th>
                                    <td class="text-wrap">Third Year</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
    </div>

@endsection
