@extends('layout.master')
<!-- col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin  -->
@section('content')
<div class="">
  <div class="stretch-card">
    <div class="card card-statistics">
      <h5 class="ml-2 py-3">Create Profile</h5>
      <div class="card-body">
        <form>
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>

              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone">
              </div>
              <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob">
              </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
              <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <br>
                <select class="form-select" id="gender" name="gender">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" id="address" name="address" rows="3"></textarea>
              </div>
              <div class="mb-3">
                <label for="profile_picture" class="form-label">Profile Picture</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="profile_picture" name="profile_picture"
                    onchange="displayFileName(this)">
                  <label class="custom-file-label" for="profile_picture">Choose file</label>
                </div>
                <div id="file-name" class="mt-2"></div>
              </div>
            </div>
          </div>

          <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>

        </form>
      </div>
    </div>
  </div>
  <script>
    function displayFileName(input) {
      var fileName = input.files[0].name;
      document.getElementById('file-name').innerText = 'Selected file: ' + fileName;
    }
  </script>
</div>

@endsection