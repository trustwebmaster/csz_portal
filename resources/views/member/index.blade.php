@extends('layout/layout')

@section('navigationbar')
    @include('layout/navigation')
@endsection

@section('contents')
<div class="container-fluid">
    @if(Auth::user()->status = 'pending')
        <div class="card-body">
            <blockquote class="card-bodyquote mb-0">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                    erat a ante.</p>
                <footer class="blockquote-footer text-white-50">Someone famous in <cite title="Source Title">Source Title</cite>
                </footer>
            </blockquote>
        </div>
   @endif
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card-box">
                <h4 class="header-title mt-0 mb-3">Contionus Membership Development</h4>

                <div class="widget-box-2">
                    <div class="widget-detail-2 text-right">
                        <span class="badge badge-success badge-pill float-left mt-3">32% <i class="mdi mdi-trending-up"></i> </span>
                        <h2 class="font-weight-normal mb-1"> 8451 </h2>
                        <p class="text-muted mb-3">Attandance</p>
                    </div>
                    <div class="progress progress-bar-alt-success progress-sm">
                        <div class="progress-bar bg-success" role="progressbar"
                                aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                style="width: 77%;">
                            <span class="sr-only">77% Complete</span>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <div class="card-box">

                <h4 class="header-title mt-0 mb-4">My Profile</h4>

                <div class="widget-chart-1">
                    <div class="widget-chart-box-1 float-left" dir="ltr">
                        <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#CF4E50"
                                data-bgColor="#CF4E50" value="00"
                                data-skin="tron" data-angleOffset="180" data-readOnly=true
                                data-thickness=".15"/>
                    </div>
                    <div class="widget-detail-1 text-right">
                        <h2 class="font-weight-normal pt-2 mb-1"> 4569 </h2>
                        <p class="text-muted mb-1">View </p>
                    </div>
                </div>
            </div>

        </div><!-- end col -->
    </div>
@endsection

