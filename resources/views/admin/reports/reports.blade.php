@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- TABLE: Schemes -->
                <div class="card card-default">
                    <div class="card-header border-transparent">
                        <h2 class="card-title">Generate Reports</h2>
                        <div class="card-tools">
                            <button type="button"
                                    class="btn btn-tool"
                                    data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-footer clearfix">
                        <button type="button"
                                class="btn btn-outline-primary"
                                data-toggle="modal"
                                data-target="#modal-info">
                            Generate
                        </button>

                    </div>
                    <div class="card-body p-0">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade"
         id="modal-info">
        <form class="form-horizontal"
              method="POST"
              action="{{ route('admin-reports') }}">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content bg-default">
                    <div class="modal-header">
                        <h4 class="modal-title">Generate Leave Report</h4>
                        <button type="button"
                                class="close"
                                data-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input"
                                               type="radio"
                                               id="customRadio1"
                                               name="report"
                                               value="leave_ledger_employee">
                                        <label for="customRadio1"
                                               class="custom-control-label">legder by Employee
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input"
                                               type="radio"
                                               id="customRadio7"
                                               name="report"
                                               value="leave_ledger_department"
                                               checked>
                                        <label for="customRadio7"
                                               class="custom-control-label">ledger by Department
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input"
                                               type="radio"
                                               id="customRadio2"
                                               name="report"
                                               value="leave_summary_employee">
                                        <label for="customRadio2"
                                               class="custom-control-label">Employee Summary by Employee</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input"
                                               type="radio"
                                               id="customRadio8"
                                               name="report"
                                               value="leave_summary_department">
                                        <label for="customRadio8"
                                               class="custom-control-label">Employee Summary by Department</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input"
                                               type="radio"
                                               id="customRadio3"
                                               name="report"
                                               value="overtime">
                                        <label for="customRadio3"
                                               class="custom-control-label">Overtime</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input"
                                               type="radio"
                                               id="customRadio4"
                                               name="report"
                                               value="extension">
                                        <label for="customRadio4"
                                               class="custom-control-label">Extensions</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input"
                                               type="radio"
                                               id="customRadio5"
                                               name="report"
                                               value="leave_applications">
                                        <label for="customRadio5"
                                               class="custom-control-label">Leave Applications</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input"
                                               type="radio"
                                               id="customRadio6"
                                               name="report"
                                               value="cash_in_leu">
                                        <label for="customRadio6"
                                               class="custom-control-label">Cash In Leu Report</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"
                                     id="department"
                                     style="display:none;">
                                    <label>By Department</label>
                                    <select class="form-control select2"
                                            type="text"
                                            id="department"
                                            name="department">
{{--                                        @foreach($departments as $art)--}}
                                        {{--                                            <option>{{ $art->name }}</option>--}}
                                        {{--                                        @endforeach--}}
                                    </select>
                                    <hr>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"
                                     id="employee"
                                     style="display:none;">
                                    <label>By Employee</label>
                                    <select class="form-control select2"
                                            type="text"
                                            id="employee"
                                            name="employee">
{{--                                        @foreach($employees as $emp)--}}
{{--                                            <option value="{{ $emp->id }}">{{ $emp->name() }}</option>--}}
{{--                                        @endforeach--}}
                                    </select>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"
                                     style="display:none"
                                     id="from">
                                    <label>From</label>
                                    <input type="date"
                                           class="form-control"
                                           name="from">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"
                                     style="display:none"
                                     id="to">
                                    <label for="to">To</label>
                                    <input type="date"
                                           class="form-control"
                                           name="to">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button"
                                class="btn btn-default"
                                data-dismiss="modal">Close
                        </button>
                        <button type="submit"
                                class="btn btn-primary">Submit
                        </button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </form>
    </div>

   @include('layouts.partials._scripts')

    <script>
        $(document).ready(function () {
            $('input[type="radio"]').click(function () {
                var value = $("input:radio[name=report]:checked").val();
                if (value == "leave_ledger_employee") {
                    $('#department').hide();
                    $('#employee').show();
                    $('#from').hide();
                    $('#to').hide();
                    document.getElementById("to").required = false;
                    document.getElementById("from").required = false;
                    document.getElementById("employee").required = true;
                } else if (value == "leave_ledger_department") {
                    $('#department').show();
                    $('#employee').hide();
                    $('#from').hide();
                    $('#to').hide();
                    document.getElementById("to").required = false;
                    document.getElementById("from").required = false;
                    document.getElementById("department").required = true;
                    document.getElementById("employee").required = false;
                } else if (value == "leave_summary_employee") {
                    $('#department').hide();
                    $('#employee').show();
                    $('#from').hide();
                    $('#to').hide();
                    document.getElementById("to").required = false;
                    document.getElementById("from").required = false;
                    document.getElementById("employee").required = true;
                    document.getElementById("department").required = false;
                } else if (value == "leave_summary_department") {
                    $('#department').show();
                    $('#employee').hide();
                    $('#from').hide();
                    $('#to').hide();
                    document.getElementById("to").required = false;
                    document.getElementById("from").required = false;
                    document.getElementById("department").required = true;
                } else if (value == "leave_applications") {
                    $('#department').hide();
                    $('#employee').hide();
                    $('#to').show();
                    $('#from').show();
                    document.getElementById("to").required = true;
                    document.getElementById("from").required = true;
                    document.getElementById("employee").required = false;
                    document.getElementById("department").required = false;
                } else if (value == "overtime") {
                    $('#employee').hide();
                    $('#department').hide();
                    $('#to').show();
                    $('#from').show();
                    document.getElementById("to").required = true;
                    document.getElementById("from").required = true;
                    document.getElementById("department").required = false;
                    document.getElementById("employee").required = false;
                } else if (value == "extension") {
                    $('#employee').hide();
                    $('#department').hide();
                    $('#to').show();
                    $('#from').show();
                    document.getElementById("to").required = true;
                    document.getElementById("from").required = true;
                    document.getElementById("department").required = false;
                    document.getElementById("employee").required = false;
                } else {
                    $('#department').show();
                    $('#employee').show();
                    $('#to').show();
                    $('#from').show();
                    document.getElementById("artisan").required = false;
                    document.getElementById("artisan").required = false;
                }
            });
        });
    </script>
@endsection
