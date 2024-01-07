@extends('layout.master')
@section('content')
<div class="row">
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div
          class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <!-- <i class="mdi mdi-cube text-danger icon-lg"></i> -->
            <i class="mdi mdi-account-box-multiple text-info icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Users</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{ $usercount }}</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> All User Count
        </p>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div
          class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-receipt text-warning icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">products</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{$totalproduct}}</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Product-wise Total Count
        </p>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div
          class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-poll-box text-success icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Sales</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">5693</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Total Sales
        </p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12 grid-margin">
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
          @foreach($users as $index => $data)
        <tr class="{{ $index >= 5 ? 'hidden-row' : '' }}">
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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function () {
    $(".hidden-row").hide();

    $("#loadMoreBtn").click(function () {
      $(".hidden-row").show();
      $("#loadMoreBtn").hide();
    });
  });
</script>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body py-5">
        <div class="d-flex flex-row justify-content-center align-items">
          <i class="mdi mdi-facebook text-facebook icon-lg"></i>
          <div class="ml-3">
            <h6 class="text-facebook font-weight-semibold mb-0">2.62 Subscribers</h6>
            <p class="text-muted card-text">You main list growing</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body py-5">
        <div class="d-flex flex-row justify-content-center align-items">
          <i class="mdi mdi-instagram text-instagram icon-lg instagram-color" style="color:#bc2a8d"></i>

          <div class="ml-3">
            <h6 class="text-google font-weight-semibold mb-0">3.4k Followers</h6>
            <p class="text-muted card-text">You main list growing</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body py-5">
        <div class="d-flex flex-row justify-content-center align-items">
          <i class="mdi mdi-twitter text-twitter icon-lg"></i>
          <div class="ml-3">
            <h6 class="text-twitter font-weight-semibold mb-0">3k followers</h6>
            <p class="text-muted card-text">You main list growing</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection