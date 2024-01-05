@extends('layout.master')

@section('content')
<div class="">
    
    <div class="stretch-card">
        <div class="card card-statistics">
        <h3 class="ml-2 py-3"><b>Update Profile</b></h3>
            <div class="card-body">
                @foreach ($admin as $data)
            
                <form action="{{ url('updates') }}" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <input type="text" name="admin_id" id="admin_id" class="form-control" hidden
                        value="{{ $data['id'] }}">
                    <div class="row">
                        <div class="col-lg-6">
                            <label>Name</label><br>
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ $data['name'] }}"><br>
                            <label>Email</label><br>
                            <input type="text" name="email" id="email" class="form-control"
                                value="{{ $data['email'] }}"><br>
                            <label for="phone">Phone</label><br>
                            <input type="text" name="phone" id="phone" class="form-control"
                                value="{{ $data['phone'] }}"><br>
                        </div>
                        <div class="col-lg-6">
                            <label>Dob</label><br>
                            <input type="date" name="dob" id="dob" class="form-control" value="{{ $data['dob'] }}"><br>

                            <label for="gender" class="form-label">Gender</label>
                            <div class="input-group">
                                <select class="form-select" id="gender" name="gender">
                                    <option value="male" {{ $data['gender']=='male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ $data['gender']=='female' ? 'selected' : '' }}>Female
                                    </option>
                                    <option value="other" {{ $data['gender']=='other' ? 'selected' : '' }}>Other
                                    </option>
                                </select>
                            </div><br>

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
                    </div><br>
                    <input type="submit" value="Update Profile" class="btn btn-success">
                </form>
           
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection