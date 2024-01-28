@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-1 col-xl-1 col-md-1 col-sm-12"></div>
    <div class="col-lg-5 col-xl-5 col-md-5 col-sm-12">
        <img src="{{ url('assets\images\logimag.png') }}" class="loginimage img-fluid" alt="logo" />
    </div>
    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12">
        <div class="login-container">
            <h2>Login</h2>
            <p>Enter your details below</p>
            <form class="login-form" action="{{ route('login') }}" method="post">
                @csrf <!-- Laravel CSRF protection -->

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="over logreg">
                    <input type="submit" class="login btn" value="Login">
                    <a class="forget" href="" style="text-decoration:none;">Forget Password?</a>
                </div>
                <br>
                <a class="forget" href="{{url('signup')}}" style="text-decoration:none;">Go to SignUp &nbsp; <i class="fa fa-arrow-right"></i></a>
            </form>
        </div>
    </div>
</div>
@endsection
