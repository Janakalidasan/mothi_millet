@extends('layout.master')
@section('content')

<div class="card p-1">

    <div class="row mb-2">
        <div class="col-6">
            <h3><b>User List</b></h3>
        </div>
    </div>


    <div id="userTableContainer">
    <table id="user_table" class="table table-striped table-responsive table-bordered nowrap w100" style="font-size:10px;">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>dob</th>
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

    </div>
</div>



@endsection
