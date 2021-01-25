@extends('layout/layout')

@section('navigationbar')
    @include('layout/navigation')
@endsection

@section('contents')

<div class="container-fluid">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- Profile Image -->
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-view">
                                    <div class="text-right text-red-700 pr-4">
                                        <button type="button" class="btn btn-dark   text-2xl"
                                            data-target="#edit_member" data-toggle="modal" aria-expanded="false">
                                            <span aria-hidden="true"> <i class="fas fa-edit"></i></span>
                                        </button>
                                    </div>
                                    <div class="profile-basic">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <h3 class="user-name m-t-0 mb-0">Name:  {{ $member->name }} </h3>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <h4 class="text-muted">Date of Birth:</h4>
                                                                <h4 class="text-muted">Nationality:</h4>
                                                                <h4 class="text-muted">Joining Date:</h4>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h4 class="text-muted"> {{ $member->date_of_birth }}</h4>
                                                                <h4 class="text-muted">Zimbabwean </h4>
                                                                <h4 class="text-muted"> {{ $member->created_at }}</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <h3 class="user-name m-t-0 mb-0">Contact Information</h3>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h4 class="text-muted">Phone:</h4>
                                                        <h4 class="text-muted">Email:</h4>
                                                        <h4 class="text-muted">Address:</h4>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h4 class="text-muted">{{ $member->number }}</h4>
                                                        <h4 class="text-muted"> {{ $member->email }}</h4>
                                                        <h4 class="text-muted">{{ $member->address }}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header p-2">

                    </div><!-- /.card-header -->
                </div><!-- /.card -->
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card card-inverse card-outline">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="general">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-footer mb-0">
                                            <div class="text-right text-red-700 pr-4">
                                                <button type="button" class="btn btn-dark   text-2xl"
                                                    data-target="#edit_member_bank" data-toggle="modal"
                                                    aria-expanded="false">
                                                    <span aria-hidden="true"> <i class="fas fa-edit"></i></span>
                                                </button>
                                            </div>
                                            <h5>Education and Hobies </h5> <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h4 class="text-muted">Current School</h4>
                                                            <h4 class="text-muted">Current Year</h4>
                                                            <h4 class="text-muted">Interests Group</h4>
                                                            <h4 class="text-muted">Reason For Joining CSZ</h4>                                                       
                                                        </div>

                                                            <div class="col-md-6">
                                                                <h4 class="text-muted"> {{ $member->school_name }}</h4>
                                                                <h4 class="text-muted"> {{ $member->current_year }}</h4>
                                                                <h4 class="text-muted"> {{ $member->interest_group }} </h4>
                                                                <h4 class="text-muted"> {{ $member->notes }} </h4>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-footer mb-0">
                                            <div class="text-right text-red-700 pr-4">
                                                <button type="button" class="btn btn-dark   text-2xl"
                                                    data-target="#edit_dependants" data-toggle="modal"
                                                    aria-expanded="false">
                                                    <span aria-hidden="true"> <i class="fas fa-edit"></i></span>
                                                </button>
                                            </div>
                                            <h5>Membership affiliation </h5> <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                        <tr>
                                                                            <td><span>{{ $member->chapter }}</span></td>
                                                                        </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-footer mb-0">
                                            <div class="text-right text-red-700 pr-4">
                                                <button type="button" class="btn btn-dark   text-2xl"
                                                    data-target="#edit_member_documents" data-toggle="modal"
                                                    aria-expanded="false">
                                                    <span aria-hidden="true"> <i class="fas fa-edit"></i></span>
                                                </button>
                                            </div>
                                            <h5>Qualifications and Personal Documents </h5> <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Documment Type</th>
                                                                    <th>File</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                    <tr>
                                                                        <td> School ID</td>
                                                                        <td><a
                                                                            href=" "><i
                                                                                class="fa fa-download"></i></a> &nbsp
                                                                        &nbsp
                                                                    </td>
                                                                    </tr>
                                                                    <tr>
                                                                      <td>National ID</td>
                                                                        <td><a
                                                                            href=" "><i
                                                                                class="fa fa-download"></i></a> &nbsp
                                                                        &nbsp
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

                            </div>
                            <!-- /Bank Statutory Tab -->
                        </div><!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div><!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
    <!-- Edit member Modal -->
    <div id="edit_member" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Member</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('edit-member') }} " enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $member->id }}">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                    <input class="form-control" name="firstname" value="{{ $member->firstname }}"
                                        type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Last Name</label>
                                    <input class="form-control" name="lastname" value="{{ $member->surname }}"
                                        type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Phone </label>
                                    <input class="form-control" name="phone_number" value="{{ $member->number }}"
                                        type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                    <input class="form-control" name="email" value="{{ $member->email }}"
                                        type="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Address </label>
                                    <input class="form-control" name="address"   value="{{ $member->address }}"
                                        type="text">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <center>
                                <button type="submit" name="contact" class="btn btn-dark">Save Details</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit member Info Modal -->
    <div id="edit_member_bank" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Education and Hobbies</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('edit-member') }} " enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{ $member->id }}" name="id">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Current School: </label>
                                        <input class="form-control" value="{{ $member->current_year }}" name="current_year" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Current School: </label>
                                        <input class="form-control" value="{{ $member->school_name }}" name="school_name" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Interest Group: </label>
                                        <input class="form-control" value="{{ $member->interest_group }}" name="interest_group" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Reason For Joining CSZ: </label>
                                        <textarea class="form-control" name="notes" type="text" rows="3" cols="3">{{ $member->notes }}</textarea>
                                    </div>
                                </div>
                            </div>

                        <div class="card-footer">
                            <center>
                                <button type="submit" name="hobbies" class="btn btn-dark">Save Details</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit member Info Modal -->
    <!-- Edit dependants Modal -->
    <div id="edit_dependants" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-xs" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Member Chapter</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- dependants -->
                    <form method="POST" action="{{ route('edit-member') }}" enctype="multipart/form-data">
                         {{ csrf_field() }}
                        <!-- /.card-header -->
                        <input type="hidden" value="{{ $member->id }}" name="id">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="col-form-label">Chapter Affiliation: </label>
                                    <select multiple data-role="tagsinput" name="chapter">
                                        <option value="Harare">Harare</option>
                                        <option value="Gweru">Gweru</option>
                                        <option value="Kwekwe">Kwekwe</option>
                                        <option value="Bulawayo">Bulawayo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <center>
                                <button type="submit" name="affiliation" class="btn btn-dark">Save Details</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit dependants Modal -->
  
    <!-- Edit member Qualifications Modal -->
    <div id="edit_member_documents" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Documents/Qualification</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Qualifications -->
                    <form method="POST" action="  "
                        enctype="multipart/form-data">
                         {{ csrf_field() }}
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="btn btn-dark" type="button" value="Add Row"
                                            onclick="addRow1('dataTable1')" />
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="btn btn-danger" type="button" value="Delete Row"
                                            onclick="deleteRow1('dataTable1')" />
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <input type="hidden" name="counter" id="counter" value="0">
                                <div class="col-md-12">

                                    <table class="table table-bordered " id="dataTableFacilities" width="80%"
                                        border="1">
                                        <thead>
                                            <tr>
                                                <th style="font-size:9px;"></th>
                                                <th style="font-size:9px;">Document Type</th>
                                                <th style="font-size:9px;">Document</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>

                                </div>

                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <center>
                                <button type="submit" class="btn btn-dark">Save Details</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        var c = 0;

        function addRow(tableID) {
            var table = document.getElementById("dataTableFacilities");
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);

            var cell1 = row.insertCell(0);
            var element1 = document.createElement("input");
            element1.type = "checkbox";
            element1.name = "chkbox[]";
            cell1.appendChild(element1);



            var cell2 = row.insertCell(1);
            var element2 = document.createElement("input");
            element2.type = "text";
            element2.name = `dependant[${c}][depname]`;
            element2.setAttribute("required", "true");
            element2.style.border = "none";
            cell2.appendChild(element2);


            var cell4 = row.insertCell(3);
            var element4 = document.createElement("select");
            element4.option = "date";
            element4.name = `dependant[${c}][deprelationship]`;
            element4.setAttribute("required", "true");
            element4.style.border = "none";
            cell4.appendChild(element4);
            var myParent = document.body;
            //Create and append the options
            for (var i = 0; i < array.length; i++) {
                var option = document.createElement("option");
                option.value = array[i];
                option.text = array[i];
                element4.appendChild(option);
            }

            var cell5 = row.insertCell(4);
            var element5 = document.createElement("input");
            element5.type = "text";
            element5.name = `dependant[${c}][depnatid]`;
            element5.setAttribute("required", "true");
            element5.style.border = "none";
            cell5.appendChild(element5);

            c += 1;
        }

        function deleteRow(tableID) {
            try {
                var table = document.getElementById("dataTableFacilities");
                var rowCount = table.rows.length;

                for (var i = 0; i < rowCount; i++) {
                    var row = table.rows[i];
                    var chkbox = row.cells[0].childNodes[0];
                    if (null != chkbox && true == chkbox.checked) {
                        table.deleteRow(i);
                        rowCount--;
                        i--;
                    }


                }
            } catch (e) {
                alert(e);
            }
        }

    </SCRIPT>
 
@endsection

@section('modals')
@endsection

@section('pagejs')
@endsection

