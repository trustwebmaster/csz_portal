<div class="modal fade"
     id="modal-info">
    <form class="form-horizontal"
          method="POST"
          action="#">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content bg-default">
                <div class="modal-header">
                    <h4 class="modal-title">Generate Report</h4>
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
                                           value="pending_reports">
                                    <label for="customRadio1"
                                           class="custom-control-label">Pending
                                    </label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input"
                                           type="radio"
                                           id="customRadio2"
                                           name="report"
                                           value="approved_reports">
                                    <label for="customRadio2"
                                           class="custom-control-label">Approved</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input"
                                           type="radio"
                                           id="customRadio8"
                                           name="report"
                                           value="students_reports">
                                    <label for="customRadio8"
                                           class="custom-control-label">Students</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input"
                                           type="radio"
                                           id="customRadio3"
                                           name="report"
                                           value="professionals_reports">
                                    <label for="customRadio3"
                                           class="custom-control-label">Professionals</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input"
                                           type="radio"
                                           id="customRadio4"
                                           name="report"
                                           value="companies_reports">
                                    <label for="customRadio4"
                                           class="custom-control-label">Companies</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group"
                                 id="pending_reports"
                                 style="display:none;">
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
{{--                    <button type="submit"--}}
{{--                            class="btn btn-primary">Submit--}}
{{--                    </button>--}}

                    <a href="{{ route('admin.report.show') }}"
                       class="btn btn-primary">
                        Submit
                    </a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </form>
</div>
