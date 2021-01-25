@extends('layout/layout')

@section('navigationbar')
    @include('layout/navigation')
@endsection

@section('contents')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">

      <!-- Profile Image -->
      <div class="card card-info card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
            <img class="profile-user-img img-fluid img-circle"
                 src="img-assets/csz.png"
                 alt="User profile picture">
          </div>

          <h3 class="profile-username text-center">Continuous Professional Development</h3>

          <p class="text-muted text-center">Trust Musikiri</p>

          <ul class="list-group list-group-unbordered mb-3">
            <li class="list-group-item">
              <b>Attandance Points</b> <a class="float-right">22</a>
            </li>
            <li class="list-group-item">
              <b>CPD Requirements Points</b> <a class="float-right">543</a>
            </li>


        </div>
        <!-- /.card-body -->
      </div>
    </div>
          <div class="col-lg-9">
              <div class="card-box">
                  <div id="calendar"></div>
              </div>
          </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</div><!-- /.container-fluid --
@endsection

@section('modals')
@endsection

@section('pagejs')
@endsection

