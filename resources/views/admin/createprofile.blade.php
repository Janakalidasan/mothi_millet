@extends('layout.master')
<!-- col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin  -->
@section('content')
<div class="">
  <div class="stretch-card">
    <div class="card card-statistics">
    <h3 class="ml-2 py-3"><b>Create Profile</b></h3>
      <div class="card-body">
        <form action="{{ url('createprofiles') }}" method="post" enctype="multipart/form-data">
          {!! csrf_field() !!}
          <input type="text" name="admin_id" id="admin_id" class="form-control" hidden value="">
          <div class="row">
            <div class="col-lg-6">
              <label>Name</label></br>
              <input type="text" name="name" id="name" class="form-control">
              <br>
              <label>Email</label></br>
              <input type="text" name="email" id="email" class="form-control">
              <br>
              <label for="Phone">Country</label></br>
              <input type="text" name="phone" id="phone" class="form-control">
            </div>
            <div class="col-lg-6">
              <label>Dob</label></br>
              <input type="date" name="dob" id="dob" class="form-control">
              <br>

              <label for="gender" class="form-label">Gender</label>
              <div class="input-group">
                <select class="form-select" id="gender" name="gender">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                </select>
              </div>

              <br>
              <label for="profile" class="form-label">Upload Profile</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="profile" name="image"
                    onchange="displayFileName(this)">
                  <label class="custom-file-label" for="profile">Choose file</label>
                </div>
              </div>
              <div id="file-name" class="mt-2"></div>

              <script>
                function displayFileName(input) {
                  var fileName = input.files[0].name;
                  document.getElementById('file-name').innerText = 'Selected file: ' + fileName;
                }
              </script>

            </div>

          </div>
          <br>
          <input type="submit" value="Save Profile" class="btn btn-success">
        </form>
      </div>
    </div>
  </div>
</div>

@endsection