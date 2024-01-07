@extends('layout.master')

@section('content')
<div class="">

    <div class="stretch-card">
        <div class="card card-statistics">
            <h3 class="ml-2 py-3"><b>Profile</b></h3>
            <div class="card-body">
                <div class="card-body">
                    @foreach ($admin as $data)
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-xl-7 col-sm-6">
                        <p class="card-text "><img src="{{ asset('storage/profileimage/' . $data->image) }}"
                                    style="height:150px;border-radius:50%" alt="Image">
                            </p>

                        </div>
                        <div class="col-lg-5 col-md-5 col-xl-5 col-sm-6 mt-2">
                          
                            <h5 class="card-title">Name : {{ $data['name'] }}</h5>
                            <p class="card-text">Email : {{ $data['email'] }}</p>
                            <p class="card-text">Phone : {{ $data['phone'] }}</p>
                            <p class="card-text">Dob : {{ $data['dob'] }}</p>
                            <p class="card-text">Gerder : {{ $data['gender'] }}</p>

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection