@extends('layouts.master')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">CPD Points</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">CPD</a></li>
                            <li class="breadcrumb-item active">CPD Points</li>
                        </ol>
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
                                        <form class="repeater" enctype="multipart/form-data" action="{{ route('upload.member.files') }}" method="post">
                                            @csrf

                                            <div data-repeater-list="files">
                                                <div data-repeater-item class="row">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label for="resume">Upload</label>
                                                            <input type="file" class="form-control" name="file" required>
                                                        </div>
                                                    </div>

                                                    <div  class="form-group col-md-5">
                                                        <label for="name">Name</label>
                                                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter file name"/>
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

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-2">
                             <span class="float-right">
                                <input type="hidden" class="rating" data-filled="mdi mdi-star text-primary" data-empty="mdi mdi-star-outline text-muted" data-readonly value="3"/>
                            </span>
                            <a href="" data-toggle="modal" data-target=".uploads" class="btn btn-sm btn-info">Upload Files</a>
                            <span class="badge badge-pill badge-danger float-right"> 50 </span>
                        </div>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                               style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Document Name</th>
                                <th>Status</th>
                                <th>Download</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach($documents as $doc)
                            <tr>
                                <td>{{ $doc->id }}</td>
                                <td>{{ $doc->name }}</td>
                                <td>
                                    <span>
                                        <span class="badge badge-primary">{{ $doc->status }}</span>
                                    </span>
                                </td><td>
                                    <span>
                                        <a href="{{ route('download.member.files' , ['document' => $doc->id]) }}" class="text-primary"><i class="bx bx-download h3 m-0"></i></a>
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>

@endsection
