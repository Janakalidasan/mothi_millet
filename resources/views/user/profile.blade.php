@extends('userlayout.master')
@section('content')
<br>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">My Account</li>
    </ol>
</nav>

<br>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xl-4">
            <h5>Manage My Account</h5>
            <div>
            <a href="{{url('profile-page')}}" style="text-decoration:none; color:#000;">  <p>My Profile</p></a>
                <a href="{{url('update-profile')}}" style="text-decoration:none; color:#000;"><p>Update profile</p></a>
                <p></p>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xl-8 mt-4">
            <p style="color:#DB4444">Create Profile</p>
            <form>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-6">
                        <div class="mb-3">
                            <label for="examplefirstname" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="examplefirstname" aria-describedby="emailHelp"
                                placeholder="Enter first name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Phone</label>
                            <input type="telegam" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter phone no">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-6">
                        <div class="mb-3">
                            <label for="examplelastname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="examplelastname" aria-describedby="emailHelp"
                                placeholder="Enter last name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleadress" class="form-label">Address</label>
                            <input type="tex" class="form-control" id="exampleadress" aria-describedby="emailHelp"
                                placeholder="Enter Address">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alt-Phone</label>
                            <input type="telegam" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter Alternate number">
                        </div>
                    </div>
                </div>
                <br>
                <div class="d-flex justify-content-end align-items-center">
                    <a href="#" class="btn btn-danger" style="text-decoration:none; color:#000;"><i class="fas fa-times"></i> Cancel</a>&nbsp;&nbsp;
                    <a href="#" class="btn btn-success"><i class="fas fa-save"></i> Save Profile</a>
                </div>
            </form>
        </div>
    </div>
</div>
<br>
<br>

@endsection