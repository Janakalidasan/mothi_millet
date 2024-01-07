@extends('layout.master')

@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.5/xlsx.full.min.js"></script>

<div class="card p-1">
    <div class="row mb-2">
        <div class="col-6">
            <h3><b>User List</b></h3>
        </div>
    </div>

    <div id="userTableContainer">
        <table id="user_table" class="table table-responsive table-bordered nowrap w100" style="font-size:10px;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $data)
                <tr>
                    <td>{{ $data['id'] }}</td>
                    <td>{{ $data['name'] }}</td>
                    <td>{{ $data['email'] }}</td>
                    <td>{{ $data['phone'] }}</td>
                    <td>{{ $data['dob'] }}</td>
                    <td>{{ $data['adress'] }}</td>
                    <td>{{ $data['created_at'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
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
</script>

@endsection
