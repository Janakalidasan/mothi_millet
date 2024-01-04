@extends('layout.master')

@section('content')
<div class="">
    
    <div class="stretch-card">
        <div class="card card-statistics">
            <h5 class="ml-2 py-3">Profile</h5>
            <div class="card-body">
            <div class="card-body">
            @foreach ($admin as $data)
            <p class="card-text "><img src="storage\app\public\profileimage\1704384733_logomini.png" style="height:100px" alt="Image">
          </p>
          <h5 class="card-title">Name : {{ $data['name'] }}</h5>
          <p class="card-text">Email : {{ $data['email'] }}</p>
          <p class="card-text">Phone : {{ $data['phone'] }}</p>
          <p class="card-text">Dob : {{ $data['dob'] }}</p>
          <p class="card-text">Gerder : {{ $data['gender'] }}</p>
        
          @endforeach
        </div>
            </div>
        </div>
    </div>
</div>

@endsection