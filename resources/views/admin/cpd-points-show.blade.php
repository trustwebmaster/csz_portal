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


        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <a class="image-popup-no-margins" href="http://127.0.0.1:8000/storage/Members/VMw8Yf8mjy5Z1Y1ylJiMUzNuHVZGK2NdLHBbpIDI.jpg">
                                <img class="avatar-sm rounded-circle mr-4" alt="" src="http://127.0.0.1:8000/storage/Members/VMw8Yf8mjy5Z1Y1ylJiMUzNuHVZGK2NdLHBbpIDI.jpg" width="75">
                            </a>

                            <div class="media-body overflow-hidden">
                                <h5 class="text-truncate font-size-15">tawan jim</h5>
                            </div>

                            <div>
                                <a type="button" href="#" class="btn btn-success btn-xs waves-effect waves-light">Approve
                                </a>
                                |
                                <a type="button" href="#" class="btn btn-danger btn-xs waves-effect waves-light">Decline
                                </a>
                            </div>
                        </div>

                        <h5 class="font-size-15 mt-4">Award Points</h5>

                        <form action="#" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="number"
                                       class="form-control"
                                       placeholder="Award points"
                                >
                            </div>

                            <div>
                                <input type="submit" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
    </div>

@endsection
