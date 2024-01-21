@extends('userlayout.master')
@section('content')


<br>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a>Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Buy Page</li>
    </ol>
</nav>
<br>
<div class="container">
<br>
    <div class="d-flex justify-content-center mobile-view">
        <div class="card" style="width: 6rem;" onclick="showLargeImage('pro-1.png')">
            <img src="{{ url('assets\images\pro-1.png') }}" class="pro" alt="">
        </div>&nbsp;&nbsp;&nbsp;
        <div class="card" style="width: 6rem;" onclick="showLargeImage('pro-2.png')">
            <img src="{{ url('assets\images\pro-2.png') }}" class="pro" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xl-6 d-flex justify-content-center">
            <div class="card mt-3" style="width: 22rem;" id="largeImageContainer">
                <img src="{{ url('assets\images\pro-1.png') }}" class="pro-1" alt="">
            </div>

        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xl-6">
            <h4>Product name</h4>
            <div class="star-rating">
                <i class="fas fa-star" style="color: #FFAD33;"></i>
                <i class="fas fa-star" style="color: #FFAD33;"></i>
                <i class="fas fa-star" style="color: #FFAD33;"></i>
                <i class="fas fa-star" style="color: #FFAD33;"></i>
                <i class="fas fa-star-half-alt" style="color: #FFAD33;"></i>

            </div>
            <br>
            <h6 style="font-size:30px">$190</h6>
            <p>lsdxgyshxbchvsxv atxgx bfxsb
                x xcvdsghx cxncaghx bcdgh
                x shsjcvd cgdc dgcdgcb bashdawnskdniow</p>

            <h6><b>KG :
                    <button class="btn btn-danger" onclick="changeColor(this)">1kg</button>
                    <button class="btn btn-danger" onclick="changeColor(this)">2kg</button>
                    <button class="btn btn-danger" onclick="changeColor(this)">3kg</button>
                </b></h6>

            <br>
            <div class="row">
                <div class="col-6">
                    <div class="d-flex">
                        <button class="btn btn-danger" onclick="decreaseCount()">-</button>
                        <input type="text" id="productCount" class="form-control text-center" value="1"
                            style="width:60px;" readonly>
                        <button class="btn btn-danger" onclick="increaseCount()">+</button>
                    </div>
                </div>

                <div class="col-6 col-lg-6">
                    <button class="btn btn-danger" onclick="buyProduct()">Buy Now</button>
                </div>
            </div>
            <br>

            <div class="card" style="width: 20rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <i class="fas fa-truck"></i> <b>Free Delivery</b>
                        <p>Enter your postal code for Delivery Availability</p>
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-undo"></i> <b>Return Delivery</b>
                        <p>Free 30 Days Delivery Returns. Details</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <br>
    <div class="d-flex justify-content-center lap-view">
        <div class="card" style="width: 6rem;" onclick="showLargeImage('pro-1.png')">
            <img src="{{ url('assets\images\pro-1.png') }}" class="pro" alt="">
        </div>&nbsp;&nbsp;&nbsp;
        <div class="card" style="width: 6rem;" onclick="showLargeImage('pro-2.png')">
            <img src="{{ url('assets\images\pro-2.png') }}" class="pro" alt="">
        </div>
    </div>


</div>
<br>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>

<script>
    function changeColor(button) {
        // Remove 'btn-danger' class from all buttons
        $(button).toggleClass("btn-success");

        // Toggle 'btn-danger' class on the clicked button
        $(button).toggleClass("btn-danger");

        // Remove 'btn-success' class from other buttons
        $("button").not(button).removeClass("btn-success");

        // Add 'btn-danger' class to other buttons
        $("button").not(button).addClass("btn-danger");
    }
    function showLargeImage(imageName) {
        var imageUrl = "{{ asset('assets/images') }}/" + imageName;
        $("#largeImageContainer img").attr("src", imageUrl);
        $("#largeImageContainer img").removeClass("d-none");
    }
    function increaseCount() {
        var countInput = $('#productCount');
        var currentCount = parseInt(countInput.val());
        countInput.val(currentCount + 1);
    }

    function decreaseCount() {
        var countInput = $('#productCount');
        var currentCount = parseInt(countInput.val());

        // Ensure the count doesn't go below 1
        if (currentCount > 1) {
            countInput.val(currentCount - 1);
        }
    }

</script>
@endsection