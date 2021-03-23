@extends('layouts.master')

@section('content')

    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Report</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Other</a></li>
                            <li class="breadcrumb-item active">Report</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="invoice-title">
                            <h5 class="float-right">
                                {{ \Carbon\Carbon::today()->format('l\\, j F Y') }}
                            </h5>
                            <div class="mb-4">
                                <img src="{{ asset('assets/images/csz.png') }}" alt="logo" height="45"/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <address>
                                    <strong>CSZ</strong><br>
                                    John Smith<br>
                                    1234 Main<br>
                                    Apt. 4B<br>
                                    Springfield, ST 54321
                                </address>
                            </div>
                        </div>
                        <div class="py-2 mt-3">
                            <em>
                                <h3 class="font-size-15 font-weight-bold text-center">Report Title</h3>
                            </em>
                        </div>
                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                                   style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th>Chapter</th>
                                    <th>Registration Date</th>
                                </tr>
                                </thead>


                                <tbody>
                                @foreach($students as $user)
                                    <tr>
                                        <td>{{ $user->name() }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->number }}</td>
                                        <td>{{ $user->chapter }}</td>
                                        <td>{{ $user->created_at->format('d-m-Y') }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="d-print-none">
                            <div class="float-right">
                                <a href="javascript:window.print()"
                                   class="btn btn-primary waves-effect waves-light mr-1"><i
                                        class="fa fa-print"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div>

@endsection
