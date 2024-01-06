<!-- BEGIN: Vendor JS-->
<script src="{{asset('admin_assets/app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->
<script src="{{asset('admin_assets/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('admin_assets/app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('admin_assets/app-assets/vendors/js/forms/cleave/cleave.min.js')}}"></script>
<script src="{{asset('admin_assets/app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js')}}"></script>
<script src="{{asset('admin_assets/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{asset('admin_assets/app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
<script src="{{asset('admin_assets/app-assets/vendors/js/extensions/moment.min.js')}}"></script>
<script src="{{asset('admin_assets/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js')}}"></script>
<!-- END: Page Vendor JS-->
<script src="{{ asset('admin_assets/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin_assets/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('admin_assets/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin_assets/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.min.js') }}"></script>
<script src="{{ asset('admin_assets/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script>
<script src="{{ asset('admin_assets/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
<script src="{{ asset('admin_assets/app-assets/vendors/js/tables/datatable/jszip.min.js') }}"></script>
<script src="{{ asset('admin_assets/app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
<script src="{{ asset('admin_assets/app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
<script src="{{ asset('admin_assets/app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin_assets/app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin_assets/app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js') }}"></script>
<script src="{{ asset('admin_assets/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- BEGIN: Theme JS-->
<script src="{{asset('admin_assets/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('admin_assets/app-assets/js/core/app.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('admin_assets/app-assets/js/scripts/pages/dashboard-analytics.js')}}"></script>
<!-- END: Page JS-->

<script>

    $(window).on('load', function () {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })

    $(document).ready(function () {
        var newcs = $('#user_table').DataTable({
            // "sScrollY": "400px",
            "searchDelay": 200,
            "bSort": true,
            "processing": true,
            "serverSide": true,
            "sServerMethod": "GET",
            "sAjaxSource": "/get-user",
            "iDisplayLength": 10,
            "aLengthMenu": [
                [10, 25, 50, 100],
                [10, 25, 50, 100]
            ], //-1 for All
            "aaSorting": [
                [0, 'desc']
            ],
            "aoColumns": [
                {
                    "bVisible": true,
                    "bSearchable": true,
                    "bSortable": true
                },
                {
                    "bVisible": true,
                    "bSearchable": true,
                    "bSortable": true
                },
                {
                    "bVisible": true,
                    "bSearchable": true,
                    "bSortable": true
                },
                {
                    "bVisible": true,
                    "bSearchable": true,
                    "bSortable": true
                },
                {
                    "bVisible": true,
                    "bSearchable": true,
                    "bSortable": true
                },
                {
                    "bVisible": true,
                    "bSearchable": true,
                    "bSortable": true
                },
                {
                    "bVisible": true,
                    "bSearchable": true,
                    "bSortable": true
                },
                {
                    "bVisible": true,
                    "bSearchable": true,
                    "bSortable": true
                },
                {
                    "bVisible": true,
                    "bSearchable": true,
                    "bSortable": true
                },
                {
                    "bVisible": true,
                    "bSearchable": true,
                    "bSortable": true
                },

                {
                    // Additional Column
                    "bVisible": true,
                    "mRender": function (data, type, row) {
                        return '<a class="btn btn-primary btn-update" href="' + "{{ url('edit') }}" + '/' + row[0] + '">Update</a>';
                    }
                }
            ],
            createdRow: function (row, data, dataIndex) {
                $(row).find('td:eq(10)').attr('align', 'center');
            },
            "columnDefs": [
                {
                    // Approval Column
                    "render": function (data, type, row) {
                        ret = '';


                        return ret;
                    },
                    "targets": 0
                }
            ]
        });
        new $.fn.dataTable.Responsive(newcs);

        
    });

    function filterData() {
    var fromdate = $('#fromdate').val();
    var todate = $('#todate').val();
    var status = $('#status').val(); // Get the selected status

    // Check if both fromdate and todate are provided
    if (fromdate && todate) {
        // Redraw the DataTable with new parameters including status
        $('#user_table').DataTable().ajax.url('/get-user?fromdate=' + fromdate + '&todate=' + todate + '&status=' + status).load();
    }
}


</script>

@yield('custom-js')