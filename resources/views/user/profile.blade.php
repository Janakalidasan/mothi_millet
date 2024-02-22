@extends('userlayout.master')
@section('content')
<br>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('home-page')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">My Account</li>
    </ol>
</nav>

<br>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xl-4">
            <h5 style="color:#fff">Manage My Account</h5>
            <div>
            <a  href="{{url('profile-page')}}" style="text-decoration:none; color:#fff;">  <p>My Profile</p></a>
                <a href="{{url('update-profile')}}" style="text-decoration:none; color:#fff;"><p>Update profile</p></a>
                <p></p>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xl-8 mt-4">
            <p style="color:#DB4444">Create Profile</p>
            <form method="POST" action="{{ route('userprofile.store') }}">
            @csrf <!-- CSRF Protection -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="firstname" style="color:#fff">First Name:</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter first name" value="{{'userId'}}" required>
                    </div>
                    <div class="form-group">
                        <label for="lastname" style="color:#fff">Last Name:</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter last name" required>
                    </div>
                    <div class="form-group " >
                        <label for="email" style="color:#fff">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone" style="color:#fff">Phone:</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone number" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="address" style="color:#fff">Address:</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" required>
                    </div>
                    <div class="form-group">
                        <label for="altphone" style="color:#fff">Alternate Phone:</label>
                        <input type="text" class="form-control" id="altphone" name="altphone" placeholder="Enter alternate phone number">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Save Profile</button>
        </form>
        </div>
    </div>
</div>
<br>
<br>

@endsection