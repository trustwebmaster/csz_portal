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
                            <a class="image-popup-no-margins" href="{{ asset( 'storage/'.$member->image ) }}">
                                <img class="avatar-sm rounded-circle mr-4" alt="" src="{{ asset( 'storage/'.$member->image  ) }}" width="75">
                            </a>

                            <div class="media-body overflow-hidden">
                                <h5 class="text-truncate font-size-15">{{ $member->name() }}</h5>
                            </div>
                            <div>
                                <a type="button" href="{{ route('accept-member' , ['member' => $member->user_id]) }}"
                                        class="btn btn-success btn-xs waves-effect waves-light">Approve
                                </a>
                                |
                                <a type="button" href="{{ route('decline-member' , ['member' => $member->user_id]) }}"
                                        class="btn btn-danger btn-xs waves-effect waves-light">Decline
                                </a>
                            </div>
                        </div>

                        <h5 class="font-size-15 mt-4">Reason for Joining CSZ</h5>

                        <p class="text-muted">
                      {{ $member->notes }}
                        </p>

                        <div class="row task-dates">
                            <div class="col-sm-4 col-6">
                                <div class="mt-4">
                                    <h5 class="font-size-14"><i class="bx bx-calendar mr-1 text-primary"></i> Registration Date
                                    </h5>
                                    <p class="text-muted mb-0">{{ $member->created_at->format('d-m-Y') }}</p>
                                </div>
                            </div>

                            <div class="col-sm-2"></div>

                            <div class="col-sm-4 col-6">
                                <div class="mt-4">
                                    <h5 class="font-size-14"><i class="bx bxs-city mr-1 text-primary"></i> Interest Groups</h5>
                                    <span class="badge badge-warning">{{ $member->interest_group }}</span>
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
                                                <h5 class="font-size-12 mb-1"><a href="{{ route('member-national' , ['member' => $member->id]) }}" class="text-dark">Download</a></h5>
                                                <small>Size : KB</small>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <a href="{{ route('member-national' , ['member' => $member->id]) }}" class="text-dark"><i class="bx bx-download h3 m-0"></i></a>
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
                                                <h5 class="font-size-12 mb-1"><a href="{{ route('member-school' , ['member' => $member->id]) }}" class="text-dark">Download</a></h5>
                                                <small>Size : KB</small>
                                            </td>
                                            <td>
                                                <div class="">
                                                    <a href="{{ route('member-national' , ['member' => $member->id]) }}" class="text-dark"><i class="bx bx-download h3 m-0"></i></a>
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
                                    <td>{{ $member->name() }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Mobile :</th>
                                    <td>{{ $member->number }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">E-mail :</th>
                                    <td class="text-wrap">{{ $member->email }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Address :</th>
                                    <td class="text-wrap">{{ $member->address }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">School Name :</th>
                                    <td class="text-wrap">{{ $member->school_name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Date of Birth :</th>
                                    <td class="text-wrap">{{ $member->date_of_birth }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Chapter :</th>
                                    <td class="text-wrap">{{ $member->chapter }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Current Year :</th>
                                    <td class="text-wrap">{{ $member->current_year }}</td>
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
