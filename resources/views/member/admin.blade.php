@extends('layout/layout')

@section('navigationbar')
    @include('layout/navigation')
@endsection

@section('contents')

{{-- <div class="card-header">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Proffessional Membership</h5>
                    <p class="card-text"></p>
                    <b><h4></h4></b>
                </div>
            </div>
        </div> <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Student Membership<</h5>
                    <p class="card-text"></p>
                    <b><h4>{</h4></b>
                </div>
            </div>
        </div> <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Graduate Membership<</h5>
                    <p class="card-text"></p>
                    <b><h4></h4></b>
                </div>
            </div>
        </div>
</div>
<!-- /Leave Statistics -->

<div class="row">
    <div class="col-md-12">
        <div class="card">
        <div class="table table-hover">
            <table class="table table-striped custom-table mb-12 datatable" id="example2">
                <thead>
                <tr>
                    <th>Aplication Membership</th>
                    <th>From</th>
                    <th>To</th>
                    <th>No of Days</th>
                    <th class="text-center">Status</th>
                    <th class="text-right">Actions</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td>{{ $lv->type }}</td>
                    <td>{{ $lv->from }}</td>
                    <td>{{ $lv->to }}</td>
                    <td>  {{ $lv->number_of_days }} days</td>
                    <td class="text-center">
                        <div class="action-label">
                            @if($lv->status == "pending")
                                <button type="button" class="btn btn-info">Pending</button>
                                @elseif($lv->status == "accept")
                                <button type="button" class="btn btn-success">Success</button>
                                @elseif($lv->status == "decline")
                                <button type="button" class="btn btn-danger">Declined</button>
                            @endif
                            </a>
                        </div>
                    </td>
                    <td class="text-right">
                         @if($lv->status == "pending")
                                <a class="btn btn-primary" data-toggle="modal" data-target="{{'#approveLeave'.$lv->id}}"><i class="fa fa-plus"></i> Approve a leave</a>
                                @elseif($lv->status == "accept")
                                No Futher Actions
                                @elseif($lv->status == "decline")
                                 <a class="btn btn-primary" data-toggle="modal" data-target="{{'#approveLeave'.$lv->id}}"><i class="fa fa-plus"></i> Approve a leave</a>
                            @endif
                        </div>
                    </td>
                </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>
</div>
<!-- /Page Content -->

<!-- Add Leave Modal -->
@foreach($leaves as $lv)
<div id="{{'approveLeave'.$lv->id}}"" class="modal custom-modal fade" role="dialog">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Manage Leave</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('admin-leave' , ['id' => $lv->id])}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Decision <span class="text-danger">*</span></label>
                    <select name="decision" class="select  form-control" id="decision">
                        <option value="accept">Accept</option>
                        <option value="decline">Decline</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Employee Name <span class="text-danger">*</span></label>
                    <div class="cal-icon">
                        <input class="form-control" name="from" type="text" value="{{ $lv->employee_name }}" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label>Period In Days <span class="text-danger">*</span></label>
                    <div class="cal-icon">
                        <input class="form-control " name="period" type="text" value="{{ $lv->number_of_days }}">
                    </div>
                </div>
                 <div class="form-group">
                    <label>Staring Date<span class="text-danger">*</span></label>
                    <div class="cal-icon">
                        <input class="form-control " name="from" type="text" value="{{ $lv->from }}">
                    </div>
                </div>
              <div class="form-group">
                    <label>Notes <span class="text-danger">*</span></label>
                    <textarea rows="4" name="notes" class="form-control"></textarea>
                </div>
                <div class="submit-section">
                    <button class="btn btn-primary submit-btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach --}}

@endsection

<script type="text/javascript">
$('#decision').on('change', function() {
    var selectionType = $(this).val();
    if (selectionType == "accept") {
        $('#cat').hide();
        document.getElementById("reason").required = true;
    }
 if((selectionType == "decline") ) {
         $('#cat').show();
        document.getElementById("reason").required = true;
    }
});
</script>

