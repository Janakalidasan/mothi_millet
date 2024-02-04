@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-1 col-xl-1 col-md-1 col-sm-12"></div>
    <div class="col-lg-5 col-xl-5 col-md-5 col-sm-12">
        <img src="{{ url('assets\images\logimag.png') }}" class="loginimage img-fluid" alt="logo" />
    </div>
    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12">
        <div class="login-container">
            <h2>Password Reset</h2>
            <form class="login-form" action="{{ route('password.update') }}" method="post">
                @csrf <!-- Laravel CSRF protection -->
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" placeholder="Enter Email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">New Password:</label>
                    <input type="password" id="password" placeholder="Enter password" name="password" required>
                </div>
                <div class="over logreg">
                    <input type="submit" class="login btn" value="Submit">
                </div>
                <br>
            </form>
        </div>
    </div>
</div>
@endsection
