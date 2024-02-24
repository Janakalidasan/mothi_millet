@extends('layout.master')

@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.5/xlsx.full.min.js"></script>

<div class="card p-1">
    <div class="row mb-2">
        <div class="col-6">
            <h3><b>Order List</b></h3>
        </div>
    </div>

    <div id="userTableContainer">
        <table id="user_table" class="table table-responsive table-bordered nowrap w100" style="font-size:10px;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Buyer Id</th>
                    <th>Buyer Name</th>
                    <th>Address</th>
                    <th>Phone No</th>
                    <th>Product Name</th>
                    <th>kg</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Order Type</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th>Order Date</th>
                    <th>Track No</th> <!-- New column for action buttons -->
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order as $data)
                <tr>
                    <td>{{ $data['id'] }}</td>
                    <td>{{ $data['buyer_id'] }}</td>
                    <td>{{ $data['buyer_name'] }}</td>
                    <td>{{ $data['address'] }}</td>
                    <td>{{ $data['phone_no'] }}</td>
                    <td>{{ $data['product_name'] }}</td>
                    <td>{{ $data['kg'] }}</td>
                    <td>{{ $data['quantity'] }}</td>
                    <td>{{ $data['total_price'] }}</td>
                    <td>{{ $data['ordertype'] }}</td>
                    <td>{{ $data['status'] }}</td>

                    <td>
                        @if($data['status'] == 'Pending')
                        <button class="btn btn-warning"
                            onclick="changeStatus({{ $data['id'] }}, 'Dispatched')">Dispatch</button>
                        <button class="btn btn-success"
                            onclick="changeStatus({{ $data['id'] }}, 'Delivered')">Deliver</button>
                        @elseif($data['status'] == 'Dispatched')
                        <button class="btn btn-success"
                            onclick="changeStatus({{ $data['id'] }}, 'Delivered')">Deliver</button>
                        <button class="btn btn-warning"
                            onclick="changeStatus({{ $data['id'] }}, 'Pending')">Pending</button>
                        @elseif($data['status'] == 'Delivered')
                            <p>Order Delivered</p>

                        @else
                        <!-- Show no button for delivered status -->
                        @endif
                    </td>

                    <td>{{ $data['created_at']->format('Y-m-d') }}</td>
                    <td>{{ $data['ticketNumber'] }}</td>
                    <td><button class="btn btn-info" onclick="openEditTicketModal({{ $data['id'] }})">
                            Add Track no</button></td>
                </tr>
                @endforeach
            </tbody>

            <div class="modal fade" id="editTicketModal" tabindex="-1" aria-labelledby="editTicketModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editTicketModalLabel">Enter Tracking Number</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="text" id="newTicketNumber" class="form-control"
                                placeholder="Enter New Track Number">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="saveNewTicketNumber()">Save
                                changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </table>
        <br>
        <div class="d-flex justify-content-center">
            <ul class="pagination">
                <!-- Show the previous page if available -->
                @if($order->currentPage() > 1)
                <li class="page-item">
                    <a class="page-link" href="{{ $order->previousPageUrl() }}" rel="prev">{{ $order->currentPage() - 1
                        }}</a>
                </li>
                @endif

                <!-- Show the current page -->
                <li class="page-item active" aria-current="page">
                    <span class="page-link">{{ $order->currentPage() }}</span>
                </li>

                <!-- Show the next page if available -->
                @if($order->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $order->nextPageUrl() }}" rel="next">{{ $order->currentPage() + 1
                        }}</a>
                </li>
                @endif
            </ul>
        </div>
        <br>
        <div class="d-flex justify-content-end">
            <button class="btn btn-success" onclick="exportToExcel()">Export to Excel</button>
        </div>
    </div>
</div>

<script>
    function exportToExcel() {
        const table = document.getElementById('user_table');
        const sheet = XLSX.utils.table_to_sheet(table);

        /* create a new blank workbook */
        const wb = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(wb, sheet, 'Sheet1');

        /* save to file */
        XLSX.writeFile(wb, 'user_data.xlsx');
    }

    function changeStatus(orderId, newStatus) {
        // Send an AJAX request to update the order status
        $.ajax({
            type: 'POST',
            url: '/update-order-status/' + orderId,
            data: {
                newStatus: newStatus,
                _token: '{{ csrf_token() }}'
            },
            success: function (response) {
                if (response.success) {
                    // Reload the page after successful status change
                    location.reload();
                } else {
                    console.error('Failed to update order status:', response.message);
                }
            },
            error: function (xhr, status, error) {
                console.error('Error updating order status:', error);
            }
        });



        function editTicketNumber(orderId) {
            var newTicketNumber = prompt("Enter the new ticket number:");
            if (newTicketNumber !== null) {
                $.ajax({
                    type: 'POST',
                    url: '/update-ticket-number/' + orderId,
                    data: {
                        newTicketNumber: newTicketNumber,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function (response) {
                        if (response.success) {
                            location.reload();
                        } else {
                            console.error('Failed to update ticket number:', response.message);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error('Error updating ticket number:', error);
                    }
                });
            }
        }
    }
</script>
<script>
    // JavaScript function to open the edit ticket modal
    function openEditTicketModal(orderId) {
        $('#editTicketModal').modal('show');
        // Pass the orderId to the modal for reference
        $('#editTicketModal').data('orderId', orderId);
    }

    // JavaScript function to save the new ticket number
    function saveNewTicketNumber() {
        var orderId = $('#editTicketModal').data('orderId');
        var newTicketNumber = $('#newTicketNumber').val();

        $.ajax({
            type: 'POST',
            url: '/update-ticket-number/' + orderId,
            data: {
                newTicketNumber: newTicketNumber,
                _token: '{{ csrf_token() }}'
            },
            success: function (response) {
                if (response.success) {
                    // Close the modal and reload the page
                    $('#editTicketModal').modal('hide');
                    location.reload();
                } else {
                    console.error('Failed to update ticket number:', response.message);
                }
            },
            error: function (xhr, status, error) {
                console.error('Error updating ticket number:', error);
            }
        });
    }
</script>

@endsection