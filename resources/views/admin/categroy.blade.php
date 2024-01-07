@extends('layout.master')

@section('content')

<div class="">
    <h3><b>Cookies</b></h3>
    <div class="row">


        <div class="col-lg-4 col-md-4 col-xl-4 col-sm-6 ">
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
            <p class="card-text dets ">
                <img src="{{ asset('storage/productoneimages/' . $productdetails->imageone) }}" style="height:150px">
            </p>
            <p class="dets" style="margin-bottom:0px">Product name: {{$productdetails->product_title}}</p>
            <p class="dets">Price: {{$productdetails->price}} + GST: {{$productdetails->gst}}%</p>
        </div>
        <div class="col-lg-4 col-md-4 col-xl-4 col-sm-6">
            <p class="card-text "><img src="{{ asset('storage/productoneimages/' . $productdetails->imagetwo) }}"
                    style="height:150px">
            </p>
        </div>
        <div class="col-lg-4 col-md-4 col-xl-4 col-sm-6">
            <p class="card-text "><img src="{{ asset('storage/productoneimages/' . $productdetails->imagethree) }}"
                    style="height:150px">
            </p>
        </div>
       
    </div>
    <button class="btn btn-danger">Delete</button>
    @endforeach


</div>
<br>
<!-- powder -->
<div class="mt-5">
    <h3><b>Powder</b></h3>
    <div class="row">


        <div class="col-lg-4 col-md-4 col-xl-4 col-sm-6 ">
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
        @foreach($producttwo as $productdetailss)
        <div class="col-lg-4 col-md-4 col-xl-4 col-sm-6">
            <p class="card-text dets ">
                <img src="{{ asset('storage/producttwoimages/' . $productdetailss->imageone) }}" style="height:150px">
            </p>
            <p class="dets" style="margin-bottom:0px">Product name: {{$productdetailss->product_title}}</p>
            <p class="dets">Price: {{$productdetailss->price}} + GST: {{$productdetailss->gst}}%</p>
        </div>
        <div class="col-lg-4 col-md-4 col-xl-4 col-sm-6">
            <p class="card-text "><img src="{{ asset('storage/producttwoimages/' . $productdetailss->imagetwo) }}"
                    style="height:150px">
            </p>
        </div>
        <div class="col-lg-4 col-md-4 col-xl-4 col-sm-6">
            <p class="card-text "><img src="{{ asset('storage/producttwoimages/' . $productdetailss->imagethree) }}"
                    style="height:150px">
            </p>
        </div>
       
    </div>
    <button class="btn btn-danger">Delete</button>
    @endforeach


</div>

@endsection