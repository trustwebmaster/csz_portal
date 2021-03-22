<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

<!-- apexcharts -->
<script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

<!-- twitter-bootstrap-wizard js -->
<script src="{{ asset('assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>

<script src="{{ asset('assets/libs/twitter-bootstrap-wizard/prettify.js') }}"></script>

<!-- form wizard init -->
<script src="{{ asset('assets/js/pages/form-wizard.init.js') }}"></script>

<!-- Required datatable js -->
<script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

<!-- Responsive examples -->
<script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

<!-- Datatable init js -->
<script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>

<!-- Magnific Popup-->
<script src="{{ asset('assets/libs/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

<!-- lightbox init js-->
<script src="{{ asset('assets/js/pages/lightbox.init.js') }}"></script>

<!-- form repeater js -->
<script src="{{ asset('assets/libs/jquery.repeater/jquery.repeater.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/form-repeater.int.js') }}"></script>

<!-- calendar js -->
<script src="{{ asset('../../../uicdn.toast.com/tui.code-snippet/latest/tui-code-snippet.min.js') }}"></script>
<script src="{{ asset('assets/libs/tui-dom/tui-dom.min.js') }}"></script>

<script src="{{ asset('assets/libs/tui-time-picker/tui-time-picker.min.js') }}"></script>
<script src="{{ asset('assets/libs/tui-date-picker/tui-date-picker.min.js') }}"></script>

<script src="{{ asset('assets/libs/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('assets/libs/chance/chance.min.js') }}"></script>

<script src="{{ asset('assets/libs/tui-calendar/tui-calendar.min.js') }}"></script>

<script src="{{ asset('assets/js/pages/calendars.js') }}"></script>
<script src="{{ asset('assets/js/pages/schedules.js') }}"></script>
<script src="{{ asset('assets/js/pages/calendar.init.js') }}"></script>

<!-- Bootstrap rating js -->
<script src="{{ asset('assets/libs/bootstrap-rating/bootstrap-rating.min.js') }}"></script>

<script src="{{ asset('assets/js/pages/rating-init.js') }}"></script>

<!-- App js -->
<script src="{{ asset('assets/js/app.js') }}"></script>

<script>
    $(document).ready(function () {
        $('input[type="radio"]').click(function () {
            var value = $("input:radio[name=report]:checked").val();
            if (value == "pending_reports") {
                $('#pending_reports').show();
                $('#to').show();
                $('#from').show();
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
