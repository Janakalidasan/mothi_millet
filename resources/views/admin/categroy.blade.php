@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-lg-6 col-sm-12 col-xl-6 col-md-6" style="border-right:1px solid">
        <div class="">
            <h3><b>Cookies</b></h3>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xl-4 col-sm-6">
                    <h5>Front View</h5>
                </div>
                <div class="col-lg-4 col-md-4 col-xl-4 col-sm-6">
                    <h5>Back View</h5>
                </div>
                <div class="col-lg-4 col-md-4 col-xl-4 col-sm-6">
                    <h5>Side View</h5>
                </div>
            </div>
            <div class="row">
                @foreach($productone as $productdetails)
                <div class="col-lg-4 col-md-4 col-xl-4 col-sm-6">
                    <form action="{{ route('delete.product', ['id' => $productdetails->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <p class="card-text dets ">
                            <img src="{{ asset('storage/productoneimages/' . $productdetails->imageone) }}"
                                style="height:100px">
                        </p>
                        <p class="dets" style="margin-bottom:0px">Product name: {{$productdetails->product_title}}</p>
                        <p class="dets">Price: {{$productdetails->price}} <br> GST: {{$productdetails->gst}}% (Add on price)</p>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
                <div class="col-lg-4 col-md-4 col-xl-4 col-sm-6">
                    <p class="card-text "><img
                            src="{{ asset('storage/productoneimages/' . $productdetails->imagetwo) }}"
                            style="height:100px"></p>
                </div>
                <div class="col-lg-4 col-md-4 col-xl-4 col-sm-6">
                    <p class="card-text "><img
                            src="{{ asset('storage/productoneimages/' . $productdetails->imagethree) }}"
                            style="height:100px"></p>
                </div>
                @endforeach
            </div>
        </div>
        <br>
        <!-- Your existing HTML for displaying the 'Powder' products... -->
        
    </div>
    <div class="col-lg-6 col-sm-12 col-xl-6 col-md-6">
        <!-- Add content for the second column if needed -->
        <div class="">
            <h3><b>Powder</b></h3>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xl-4 col-sm-6">
                    <h5>Front View</h5>
                </div>
                <div class="col-lg-4 col-md-4 col-xl-4 col-sm-6">
                    <h5>Back View</h5>
                </div>
                <div class="col-lg-4 col-md-4 col-xl-4 col-sm-6">
                    <h5>Side View</h5>
                </div>
            </div>
            <div class="row">
                @foreach($producttwo as $productdetails)
                <div class="col-lg-4 col-md-4 col-xl-4 col-sm-6">
                    <form action="{{ route('delete.products', ['id' => $productdetails->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <p class="card-text dets ">
                            <img src="{{ asset('storage/producttwoimages/' . $productdetails->imageone) }}"
                                style="height:100px">
                        </p>
                        <p class="dets" style="margin-bottom:0px">Product name: {{$productdetails->product_title}}</p>
                        <p class="dets">Price: {{$productdetails->price}} <br>GST: {{$productdetails->gst}}% (Add on price)</p>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
                <div class="col-lg-4 col-md-4 col-xl-4 col-sm-6">
                    <p class="card-text "><img
                            src="{{ asset('storage/producttwoimages/' . $productdetails->imagetwo) }}"
                            style="height:100px"></p>
                </div>
                <div class="col-lg-4 col-md-4 col-xl-4 col-sm-6">
                    <p class="card-text "><img
                            src="{{ asset('storage/producttwoimages/' . $productdetails->imagethree) }}"
                            style="height:100px"></p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection