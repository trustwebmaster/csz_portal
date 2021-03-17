@extends('layout.layout')

@section('navigationbar')
    @include('layout.admin-layout')
@endsection

@section('contents')
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="mt-0 header-title">Default Example</h4>
                <p class="text-muted font-14 mb-3">
                    DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>.
                </p>

                <table id="datatable" class="table table-bordered dt-responsive nowrap">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>email</th>
                        <th>status</th>
                        <th>registration date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                @foreach($users as $user)
                    <tr>
                      <th>{{ $user->name }}</th>
                      <th>{{ $user->email }}</th>
                      <th>{{ $user->status }}</th>
                      <th>{{ $user->created_at->format('d-m-Y') }}</th>
                        <th>
                            <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#staticBackdrop">
                                Action
                            </button>
                        </th>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>I will not close if you click outside me. Don't even try to press escape key.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
@endsection

