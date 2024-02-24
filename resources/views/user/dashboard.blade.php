@extends('userlayout.master')
@section('content')
<br>
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
                    
                    <th>Product Name</th>
                    <th>kg</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Order Type</th>
                    <th>Status</th>
                    <th>Order Date</th>
                    <th>Tracking No</th>  <!-- New column for action buttons -->
                </tr>
            </thead>
            <tbody>
                @foreach($order as $data)
                <tr>
                    
                    <td>{{ $data['product_name'] }}</td>
                    <td>{{ $data['kg'] }}</td>
                    <td>{{ $data['quantity'] }}</td>
                    <td>{{ $data['total_price'] }}</td>
                    <td>{{ $data['ordertype'] }}</td>
                    <td>{{ $data['status'] }}</td>
                    <td>{{ $data['created_at']->format('Y-m-d') }}</td>
                    <td>{{ $data['ticketNumber'] }}</td>

                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <div class="d-flex justify-content-center">
        <ul class="pagination">
            <!-- Show the previous page if available -->
            @if($order->currentPage() > 1)
                <li class="page-item">
                    <a class="page-link" href="{{ $order->previousPageUrl() }}" rel="prev">{{ $order->currentPage() - 1 }}</a>
                </li>
            @endif

            <!-- Show the current page -->
            <li class="page-item active" aria-current="page">
                <span class="page-link">{{ $order->currentPage() }}</span>
            </li>

            <!-- Show the next page if available -->
            @if($order->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $order->nextPageUrl() }}" rel="next">{{ $order->currentPage() + 1 }}</a>
                </li>
            @endif
        </ul>
    </div>
        <div class="d-flex justify-content-center"></div>
        <br>
      
    </div>
</div>

<!-- <script>
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
            success: function(response) {
                if (response.success) {
                    // Reload the page after successful status change
                    location.reload();
                } else {
                    console.error('Failed to update order status:', response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error updating order status:', error);
            }
        });
    } -->
</script>
<br>

@endsection