@extends('userlayout.master')
@section('content')
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif


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
<!-- Your HTML code -->
<div class="container">
    <div class="row">
        @foreach($products as $productmain)
        <div class="col-6 col-lg-3 mb-3 newsixe">
            <div class="card cards-2">
                <!-- Left -30% container with red background -->
                <div class="left-text-container"
                    style="position: absolute; left: 0; top: 0px; width: 25%; height: 17%; background-color: red; color: white; padding: 5px;">
                    <div class="left-text" style="transform: translateY(50%);font-size: 14px;">
                        -{{ $productmain['discount'] }}%
                    </div>
                </div>
                <!-- Product image and details -->
                <img src="{{ asset('storage/producttwoimages/' . $productmain['imageone']) }}" alt="" class="products">
                <div class="card-body">
                    <p class="card-title">{{ $productmain['product_title'] }}</p>
                    <div class="d-flex">
                        <p class="card-text text-danger">Rs: {{ $productmain['price'] }}</p>&nbsp;
                        <span class="strikeout-text" style="color: grey; text-decoration: line-through;">{{
                            $productmain['oldprice'] }}</span>
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
                        <form method="POST" action="{{ url('cart') }}">
                            @csrf
                            <!-- Include other product details as hidden input fields -->
                            <input type="hidden" name="product_id" value="{{ $productmain['id'] }}">
                            <input type="hidden" name="product_name" value="{{ $productmain['product_title'] }}">
                            <input type="hidden" name="product_price" value="{{ $productmain['price'] }}">
                            <input type="hidden" name="product_gst" value="{{ $productmain['gst'] }}">
                            <!-- Add to Cart button -->
                            <button type="submit" class="btn btn-primary artchart">Add to Cart</button>
                        </form>
                        &nbsp;
                        <a href="{{ url('buy-page-two', ['id' => $productmain['id']]) }}"
                            class="btn btn-success buyproductbuton">Buy</a>
                    </div>
                </div>

                <!-- Heart icon on the right side -->
                <div style="position: absolute; right: 5px; top: 5px;">
                    <i class="far fa-heart" style="color: red;"></i>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


<br>
<!-- <div class="d-flex justify-content-end">
    <button class="btn btn-danger">Show More &nbsp;<i class="fas fa-arrow-right"></i></button>
</div> -->

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
        @foreach($productcook as $productcook)
        <div class="col-6 col-lg-3 col-md-6 mb-3 newsixe">
            <div class="card cards-2" style="width: 12rem; position: relative;">
                <!-- Left -30% container with red background -->
                <div class="left-text-container"
                    style="position: absolute; left: 0; top: 0px; width: 25%; height: 17%; background-color: red; color: white; padding: 5px;">
                    <div class="left-text" style="transform: translateY(50%);font-size: 14px;">
                        -{{ $productcook['discount'] }}%
                    </div>
                </div>
                <br>
                <!-- Product image and details -->
                <img src="{{ asset('storage/productoneimages/' . $productcook['imageone']) }}" alt="" class="products">
                <div class="card-body">
                    <p class="card-title">{{ $productcook['product_title'] }}</p>
                    <div class="d-flex">
                        <p class="card-text text-danger">Rs:{{ $productcook['price'] }}</p>&nbsp;
                        <span class="strikeout-text" style="color: grey; text-decoration: line-through;">{{
                            $productcook['oldprice'] }}</span>
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
                    <form method="POST" action="{{ url('cart') }}">
                            @csrf
                            <!-- Include other product details as hidden input fields -->
                            <input type="hidden" name="product_id" value="{{ $productcook['id'] }}">
                            <input type="hidden" name="product_name" value="{{ $productcook['product_title'] }}">
                            <input type="hidden" name="product_price" value="{{ $productcook['price'] }}">
                            <input type="hidden" name="product_gst" value="{{ $productcook['gst'] }}">
                            <!-- Add to Cart button -->
                            <button type="submit" class="btn btn-primary artchart">Add to Cart</button>
                        </form>
                        &nbsp;
                        <a href="{{ url('buy-page-one', ['id' => $productcook['id']]) }}"
                            class="btn btn-success buyproductbuton">Buy</a>
                    </div>
                </div>

                <!-- Heart icon on the right side -->
                <div style="position: absolute; right: 5px; top: 5px;">
                    <i class="far fa-heart" style="color: red;"></i>
                </div>
            </div>

        </div>
        @endforeach
    </div>
</div>
<!-- <div class="d-flex justify-content-end">
    <button class="btn btn-danger">Show More &nbsp;<i class="fas fa-arrow-right"></i></button>
</div> -->

<br>

@endsection