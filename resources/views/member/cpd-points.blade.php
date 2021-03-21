@extends('layouts.master')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">CPD Points</h4>

                    <div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-transparent" id="inputGroupFileAddonwithlabelicon01"><i class="bx bxs-folder-open"></i></span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFilewithlabelicon01" aria-describedby="inputGroupFileAddonwithlabelicon01">
                                <label class="custom-file-label" for="inputGroupFilewithlabelicon01">Choose file</label>
                            </div>
                        </div>
                    </div>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">CPD</a></li>
                            <li class="breadcrumb-item active">CPD Points</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                               style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Status</th>
                            </tr>
                            </thead>


                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>
                                    <span>
                                        <span class="badge badge-danger">Status</span>
                                    </span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Points</h4>
                        <div class="table-responsive">
                            <table class="table table-nowrap table-centered table-hover mb-0">
                                <tbody>
                                <tr>
                                    <td style="width: 45px;">
                                        <div class="avatar-sm">
                                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-24">
                                                                    <i class="bx bxs-file-doc"></i>
                                                                </span>
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">Skote Landing.Zip</a></h5>
                                        <small>Size : 3.25 MB</small>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <a href="#" class="text-dark"><i class="bx bx-download h3 m-0"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="avatar-sm">
                                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-24">
                                                                    <i class="bx bxs-file-doc"></i>
                                                                </span>
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">Skote Admin.Zip</a></h5>
                                        <small>Size : 3.15 MB</small>
                                    </td>
                                    <td>
                                        <div class="text-center">
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

@endsection
