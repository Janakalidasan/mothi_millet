@extends('userlayout.master')
@section('content')
<br>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">About</li>
    </ol>
</nav>

<br>

<div class="container">
    <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-12 col-xl-5">
            <h3><b>Our Story</b></h3>
            <p>Launced in 2015, Exclusive is South Asia’s premier online shopping makterplace with an active presense in
                Bangladesh. Supported by wide range of tailored marketing, data and service solutions, Exclusive has
                10,500 sallers and 300 brands and serves 3 millioons customers across the region. </p>
            <p>Launced in 2015, Exclusive is South Asia’s premier online shopping makterplace with an active presense in
                Bangladesh. Supported by wide range of tailored marketing, data and service solutions, Exclusive has
                10,500 sallers and 300 brands and serves 3 millioons customers across the region. </p>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-12 col-xl-7">
            <img src="{{ url('assets\images\clienimg.png') }}" alt="" class="clientimg img-fluid">
        </div>

    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xl-3 rate">
            <div class="card cards" style="width: 14rem;">
                <img src="{{ url('assets\images\Services.png') }}" alt="" class="icoservices">
                <div class="card-body">
                    <h5 class="card-title users"><b>10.5 K</b></h5>
                    <p class="card-text">Sallers active our site</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xl-3 rate">
            <div class="card cards" style="width: 14rem;">
                <img src="{{ url('assets\images\Icon-Sale.png') }}" alt="" class="icoservices">
                <div class="card-body">
                    <h5 class="card-title users"><b>33 K</b></h5>
                    <p class="card-text">Mopnthly Produduct Sale</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xl-3 rate">
            <div class="card cards" style="width: 14rem;">
                <img src="{{ url('assets\images\Services-1.png') }}" alt="" class="icoservices">
                <div class="card-body">
                    <h5 class="card-title users"><b>45.5 K</b></h5>
                    <p class="card-text">Customer active in our site</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xl-3 rate">
            <div class="card cards" style="width: 14rem;">
                <img src="{{ url('assets\images\Services-2.png') }}" alt="" class="icoservices">
                <div class="card-body">
                    <h5 class="card-title users"><b>25 K</b></h5>
                    <p class="card-text">Anual gross sale in our site</p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xl-4 rate">
            <div class="card cards-1" style="width: 20rem;">
                <img src="{{ url('assets\images\Services-travel.png') }}" alt="" class="icoservices">
                <div class="card-body">
                    <h6 class="card-title users-tr">FREE AND FAST DELIVERY</h6>
                    <p class="card-text">Free delivery for all orders over $140</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xl-4 rate ">
            <div class="card cards-1" style="width: 20rem;">
                <img src="{{ url('assets\images\Services-support.png') }}" alt="" class="icoservices">
                <div class="card-body">
                    <h6 class="card-title users-tr">24/7 CUSTOMER SERVICE</h6>
                    <p class="card-text">Friendly 24/7 customer support</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xl-4 rate">
        <div class="card cards-1" style="width: 20rem;">
                <img src="{{ url('assets\images\Services-money.png') }}" alt="" class="icoservices">
                <div class="card-body">
                    <h6 class="card-title users-tr">MONEY BACK GUARANTEE</h6>
                    <p class="card-text">We reurn money within 30 days</p>
                </div>
            </div>
        </div>
    </div>

</div>
<br>
<br>
@endsection