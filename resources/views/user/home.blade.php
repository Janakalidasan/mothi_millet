@extends('userlayout.master')
@section('content')
<div class="container-fluid" style="background:black;">
    <br>
    <div class="comtainer">
        <div class="row">
            <div class="col-lg-1 ">
            </div>
            <div class="col-lg-4 ">
                <div class="d-flex align-items-center">
                    <img src="{{ url('assets\images\mothilogo.png') }}" style="width:70px" alt="logo" />
                    <h5 style="color:#fff">Little Millet</h5>
                </div>
                <br>
                <h1 style="color:#fff">Up to 10% <br> off Voucher</h1>
                <br>
                <a href="#" style="color:#fff" class="">Shop Now <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="col-lg-7">
                <br>
                <img src="{{ url('assets\images\pro-3.png') }}" style="width:70%;" alt="logo" />
            </div>
        </div>
    </div>
    <br>
</div>
<br>
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col d-flex   ">
            <div class="bg-danger" style="width: 1.3%; height: 30px;"></div>
            &nbsp;&nbsp;<p class="mb-0 ms-2" style="color: red;">This Month</p>
        </div>
        <br>
    </div>
    <div class="row">
        <div class="col">
            <h3>Best Selling Products</h3>
        </div>
    </div>
</div>
<br>

<!-- card -->
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="card cards-2" style="width: 12rem; position: relative;">
                <!-- Left -30% container with red background -->
                <div class="left-text-container"
                    style="position: absolute; left: 0; top: 0px; width: 25%; height: 17%; background-color: red; color: white; padding: 5px;">
                    <div class="left-text" style="transform: translateY(50%);">
                        -30%
                    </div>
                </div>

                <!-- Product image and details -->
                <img src="{{ url('assets\images\pro-1.png') }}" alt="" class="products">
                <div class="card-body">
                    <p class="card-title">Productname</p>
                    <div class="d-flex">
                        <p class="card-text text-danger">$260</p>&nbsp;
                        <span class="strikeout-text" style="color: grey; text-decoration: line-through;">$360</span>
                    </div>

                    <div class="star-rating d-flex">
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star-half-alt" style="color: #FFAD33;"></i>
                        <p>(65)</p>
                    </div>

                    <div class="d-flex justify-content-between mt-2">
                        <button class="btn btn-primary">Add Cart</button>&nbsp;
                        <button class="btn btn-success">Buy</button>
                    </div>
                </div>

                <!-- Heart icon on the right side -->
                <div style="position: absolute; right: 5px; top: 5px;">
                    <i class="far fa-heart" style="color: red;"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card cards-2" style="width: 12rem; position: relative;">
                <!-- Left -30% container with red background -->
                <div class="left-text-container"
                    style="position: absolute; left: 0; top: 0px; width: 25%; height: 17%; background-color: red; color: white; padding: 5px;">
                    <div class="left-text" style="transform: translateY(50%);">
                        -45%
                    </div>
                </div>

                <!-- Product image and details -->
                <img src="{{ url('assets\images\pro-1.png') }}" alt="" class="products">
                <div class="card-body">
                    <p class="card-title">Productname</p>
                    <div class="d-flex">
                        <p class="card-text text-danger">$260</p>&nbsp;
                        <span class="strikeout-text" style="color: grey; text-decoration: line-through;">$360</span>
                    </div>

                    <div class="star-rating d-flex">
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star-half-alt" style="color: #FFAD33;"></i>
                        <p>(65)</p>
                    </div>

                    <div class="d-flex justify-content-between mt-2">
                        <button class="btn btn-primary">Add Cart</button>&nbsp;
                        <button class="btn btn-success">Buy</button>
                    </div>
                </div>

                <!-- Heart icon on the right side -->
                <div style="position: absolute; right: 5px; top: 5px;">
                    <i class="far fa-heart" style="color: red;"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card cards-2" style="width: 12rem; position: relative;">
                <!-- Left -30% container with red background -->
                <div class="left-text-container"
                    style="position: absolute; left: 0; top: 0px; width: 25%; height: 17%; background-color: red; color: white; padding: 5px;">
                    <div class="left-text" style="transform: translateY(50%);">
                        -89%
                    </div>
                </div>

                <!-- Product image and details -->
                <img src="{{ url('assets\images\pro-1.png') }}" alt="" class="products">
                <div class="card-body">
                    <p class="card-title">Productname</p>
                    <div class="d-flex">
                        <p class="card-text text-danger">$260</p>&nbsp;
                        <span class="strikeout-text" style="color: grey; text-decoration: line-through;">$360</span>
                    </div>

                    <div class="star-rating d-flex">
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star-half-alt" style="color: #FFAD33;"></i>
                        <p>(65)</p>
                    </div>

                    <div class="d-flex justify-content-between mt-2">
                        <button class="btn btn-primary">Add Cart</button>&nbsp;
                        <button class="btn btn-success">Buy</button>
                    </div>
                </div>

                <!-- Heart icon on the right side -->
                <div style="position: absolute; right: 5px; top: 5px;">
                    <i class="far fa-heart" style="color: red;"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card cards-2" style="width: 12rem; position: relative;">
                <!-- Left -30% container with red background -->
                <div class="left-text-container"
                    style="position: absolute; left: 0; top: 0px; width: 25%; height: 17%; background-color: red; color: white; padding: 5px;">
                    <div class="left-text" style="transform: translateY(50%);">
                        -30%
                    </div>
                </div>

                <!-- Product image and details -->
                <img src="{{ url('assets\images\pro-1.png') }}" alt="" class="products">
                <div class="card-body">
                    <p class="card-title">Productname</p>
                    <div class="d-flex">
                        <p class="card-text text-danger">$260</p>&nbsp;
                        <span class="strikeout-text" style="color: grey; text-decoration: line-through;">$360</span>
                    </div>

                    <div class="star-rating d-flex">
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star-half-alt" style="color: #FFAD33;"></i>
                        <p>(65)</p>
                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <button class="btn btn-primary">Add Cart</button>&nbsp;
                        <button class="btn btn-success">Buy</button>
                    </div>
                </div>

                <!-- Heart icon on the right side -->
                <div style="position: absolute; right: 5px; top: 5px;">
                    <i class="far fa-heart" style="color: red;"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="d-flex justify-content-end">
    <button class="btn btn-danger">Show More &nbsp;<i class="fas fa-arrow-right"></i></button>
</div>

<br>
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col d-flex   ">
            <div class="bg-danger" style="width: 1.3%; height: 30px;"></div>
            &nbsp;&nbsp;<p class="mb-0 ms-2" style="color: red;">This Month</p>
        </div>
        <br>
    </div>
    <div class="row">
        <div class="col">
            <h3>Cookies</h3>
        </div>
    </div>
</div>
<br>

<!-- card -->
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="card cards-2" style="width: 12rem; position: relative;">
                <!-- Left -30% container with red background -->
                <div class="left-text-container"
                    style="position: absolute; left: 0; top: 0px; width: 25%; height: 17%; background-color: red; color: white; padding: 5px;">
                    <div class="left-text" style="transform: translateY(50%);">
                        -30%
                    </div>
                </div>

                <!-- Product image and details -->
                <img src="{{ url('assets\images\pro-4.png') }}" alt="" class="products-1 ">
                <div class="card-body">
                    <p class="card-title">Productname</p>
                    <div class="d-flex">
                        <p class="card-text text-danger">$260</p>&nbsp;
                        <span class="strikeout-text" style="color: grey; text-decoration: line-through;">$360</span>
                    </div>

                    <div class="star-rating d-flex">
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star-half-alt" style="color: #FFAD33;"></i>
                        <p>(65)</p>
                    </div>

                    <!-- Add to Cart and Buy Now buttons -->
                    <div class="d-flex justify-content-between mt-2">
                        <button class="btn btn-primary">Add Cart</button>&nbsp;
                        <button class="btn btn-success">Buy</button>
                    </div>
                </div>

                <!-- Heart icon on the right side -->
                <div style="position: absolute; right: 5px; top: 5px;">
                    <i class="far fa-heart" style="color: red;"></i>
                </div>
            </div>

        </div>
        <div class="col-lg-3">
            <div class="card cards-2" style="width: 12rem; position: relative;">
                <!-- Left -30% container with red background -->
                <div class="left-text-container"
                    style="position: absolute; left: 0; top: 0px; width: 25%; height: 17%; background-color: red; color: white; padding: 5px;">
                    <div class="left-text" style="transform: translateY(50%);">
                        -30%
                    </div>
                </div>

                <!-- Product image and details -->
                <img src="{{ url('assets\images\pro-4.png') }}" alt="" class="products-1 ">
                <div class="card-body">
                    <p class="card-title">Productname</p>
                    <div class="d-flex">
                        <p class="card-text text-danger">$260</p>&nbsp;
                        <span class="strikeout-text" style="color: grey; text-decoration: line-through;">$360</span>
                    </div>

                    <div class="star-rating d-flex">
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star-half-alt" style="color: #FFAD33;"></i>
                        <p>(65)</p>
                    </div>

                    <!-- Add to Cart and Buy Now buttons -->
                    <div class="d-flex justify-content-between mt-2">
                        <button class="btn btn-primary">Add Cart</button>&nbsp;
                        <button class="btn btn-success">Buy</button>
                    </div>
                </div>

                <!-- Heart icon on the right side -->
                <div style="position: absolute; right: 5px; top: 5px;">
                    <i class="far fa-heart" style="color: red;"></i>
                </div>
            </div>

        </div>
        <div class="col-lg-3">
            <div class="card cards-2" style="width: 12rem; position: relative;">
                <!-- Left -30% container with red background -->
                <div class="left-text-container"
                    style="position: absolute; left: 0; top: 0px; width: 25%; height: 17%; background-color: red; color: white; padding: 5px;">
                    <div class="left-text" style="transform: translateY(50%);">
                        -30%
                    </div>
                </div>

                <!-- Product image and details -->
                <img src="{{ url('assets\images\pro-4.png') }}" alt="" class="products-1 ">
                <div class="card-body">
                    <p class="card-title">Productname</p>
                    <div class="d-flex">
                        <p class="card-text text-danger">$260</p>&nbsp;
                        <span class="strikeout-text" style="color: grey; text-decoration: line-through;">$360</span>
                    </div>

                    <div class="star-rating d-flex">
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star-half-alt" style="color: #FFAD33;"></i>
                        <p>(65)</p>
                    </div>

                    <!-- Add to Cart and Buy Now buttons -->
                    <div class="d-flex justify-content-between mt-2">
                        <button class="btn btn-primary">Add Cart</button>&nbsp;
                        <button class="btn btn-success">Buy</button>
                    </div>
                </div>

                <!-- Heart icon on the right side -->
                <div style="position: absolute; right: 5px; top: 5px;">
                    <i class="far fa-heart" style="color: red;"></i>
                </div>
            </div>

        </div>
        <div class="col-lg-3">
            <div class="card cards-2" style="width: 12rem; position: relative;">
                <!-- Left -30% container with red background -->
                <div class="left-text-container"
                    style="position: absolute; left: 0; top: 0px; width: 25%; height: 17%; background-color: red; color: white; padding: 5px;">
                    <div class="left-text" style="transform: translateY(50%);">
                        -30%
                    </div>
                </div>

                <!-- Product image and details -->
                <img src="{{ url('assets\images\pro-4.png') }}" alt="" class="products-1 ">
                <div class="card-body">
                    <p class="card-title">Productname</p>
                    <div class="d-flex">
                        <p class="card-text text-danger">$260</p>&nbsp;
                        <span class="strikeout-text" style="color: grey; text-decoration: line-through;">$360</span>
                    </div>

                    <div class="star-rating d-flex">
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star" style="color: #FFAD33;"></i>
                        <i class="fas fa-star-half-alt" style="color: #FFAD33;"></i>
                        <p>(65)</p>
                    </div>

                    <!-- Add to Cart and Buy Now buttons -->
                    <div class="d-flex justify-content-between mt-2">
                        <button class="btn btn-primary">Add Cart</button>&nbsp;
                        <button class="btn btn-success">Buy</button>
                    </div>
                </div>

                <!-- Heart icon on the right side -->
                <div style="position: absolute; right: 5px; top: 5px;">
                    <i class="far fa-heart" style="color: red;"></i>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="d-flex justify-content-end">
    <button class="btn btn-danger">Show More &nbsp;<i class="fas fa-arrow-right"></i></button>
</div>

<br>
<div class="container-fluid">
    <img src="{{ url('assets\images\mix-2.png') }}" alt="" style="width: 73%;height:350px">
</div>

<br>
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col d-flex   ">
            <div class="bg-danger" style="width: 1.3%; height: 30px;"></div>
            &nbsp;&nbsp;<p class="mb-0 ms-2" style="color: red;">This Month</p>
        </div>
        <br>
    </div>
    <div class="row">
        <div class="col">
            <h3>New Arrive</h3>
        </div>
    </div>
</div>

<br>
<div class="container">
    <div class="row">
    <div class="col-lg-1"></div>
        <div class="col-lg-5">
            <div class="card" style="background-color:rgb(160 154 154 / 21%);width:20rem">
                <img src="{{ url('assets\images\pro-1.png') }}" alt="" style="height:400px;width:300px">
                <div class="m-3">
                    <h5 class="text-danger">PlayStation 5</h5>
                    <p>Black and White version of the <br>PS5 coming out on sale.</p>
                    <a href="">Shop Now</a>
                </div>

            </div>
        </div>
        <div class="col-lg-6">
            <div class="card" style="background-color:rgb(160 154 154 / 21%);">
                <img src="{{ url('assets\images\pro-3.png') }}" alt=""
                    style="height:150px;width:450px;margin-left:20px">
                <div class="m-3">
                    <h5 class="text-danger">Cookies collection</h5>
                    <a href="">Shop Now</a>
                </div>

            </div>
            <div class="row mt-3">
                <div class="col-lg-6">
                    <div class="card" style="background-color:rgb(160 154 154 / 21%);width:16rem">
                        <img src="{{ url('assets\images\pro-1.png') }}" alt="" style="height:200px;width:200px">
                        <div class="m-3">
                            <h5 class="text-danger">PlayStation 5</h5>

                            <a href="">Shop Now</a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card" style="background-color:rgb(160 154 154 / 21%);">
                        <img src="{{ url('assets\images\pro-3.png') }}" alt=""
                            style="height:100px;width:200px;margin-left:20px">
                        <div class="m-3">
                            <h5 class="text-danger">Cookies collection</h5>
                            <a href="">Shop Now</a>
                        </div>

                    </div>
                </div>
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
<br>
@endsection