@extends('layout.master')

@section('content')

<div class="stretch-card">
    <div class="card card-statistics">
        <h3 class="ml-2 py-3"><b>Cookies</b></h3>
        <div class="card-body">
            <form action="{{ url('addproductone') }}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        <label>Product Title</label><br>
                        <input type="text" name="product_title" id="product_title" class="form-control">
                        <br>
                        <label>Description</label><br>
                        <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                        <br>
                        <label>Images</label><br>
                        <div class="row">
                            @for($i = 1; $i <= 3; $i++) <div class="col-lg-4 col-xl-4 col-md-4 col-sm-12">
                                <div class="image-upload-box">
                                    <label for="image{{ $i }}" class="form-label">Image {{ $i }}</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image{{ $i }}"
                                                name="image{{ $i }}"
                                                onchange="displayImage(this, 'image-box-{{ $i }}', 'image-preview-{{ $i }}')">
                                            <div class="custom-file-label" for="image{{ $i }}">Choose file</div>
                                        </div>
                                    </div>
                                    <div id="image-box-{{ $i }}" class="mt-2"></div>
                                    <img id="image-preview-{{ $i }}" class="mt-2"
                                        style="max-width: 100px; max-height: 100px;" />
                                </div>
                        </div>
                        @endfor
                    </div>

                    <!-- Add similar blocks for image2 and image3 -->

                    <br>

                    <div class="row">
                        <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6">
                        <label>Discount</label><br>
                            <input type="number" name="discount" id="discount" class="form-control">
                        </div>
                        <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6">
                        <label>Old Price</label><br>
                            <input type="number" name="oldprice" id="oldprice" class="form-control">
                        </div>
                    </div>
                
                    <br>
                    <div class="row">
                        <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6">
                            <label>Price</label><br>
                            <input type="text" name="price" id="price" class="form-control">
                        </div>
                        <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6">
                            <label>GST</label><br>
                            <input type="text" name="gst" id="gst" class="form-control">
                        </div>
                    </div>

                    <br>
                    <div class="input-group">
                        <input type="submit" value="Submit" class="btn btn-success">
                    </div>
                </div>

                <div class="col-lg-2"></div>
        </div>

        </form>
    </div>
</div>
</div>
<script>
    function displayImage(input, targetBoxId, imagePreviewId) {
        var fileName = input.files[0].name;
        document.getElementById(targetBoxId).innerHTML = 'Selected file: ' + fileName;

        // Display image preview
        var preview = document.getElementById(imagePreviewId);
        var reader = new FileReader();

        reader.onload = function (e) {
            preview.src = e.target.result;
        };

        reader.readAsDataURL(input.files[0]);
    }
</script>

@endsection