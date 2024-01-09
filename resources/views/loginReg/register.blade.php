@extends('userlayout.master')
@section('content')
<div class="row">
<div class="col-lg-1 col-xl-1 col-md-1 col-sm-12">
</div>
    <div class="col-lg-5 col-xl-5 col-md-5 col-sm-12">
        <img src="{{ url('assets\images\logimag.png') }}" class="loginimage" alt="logo" />
    </div>
    <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12">
    <div class="login-container">
    <h2>Register</h2>
    <p>Create an account</p>
    <form class="login-form" action="#" method="post">
    <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" >
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" >
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" >
        </div>
        <div class="logreg">
            <input type="submit" class="login btn" value="Create Account">
            <br>
            <br>
            <div class="already">
            <p  class="forgets">Already have a acoount?</p>
            <a  class="forget"  style="text-decoration:none;" href="{{url('/')}}">Login</a>
            </div>
          
        </div>
    </form>
</div>
    </div>
</div>
@endsection