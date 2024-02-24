@extends('userlayout.master')
@section('content')

@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
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
        <div class="card" style="width: 6rem;" onclick="showLargeImage('{{ $productone->imageone}}')">
            <img src="{{ asset('storage/productoneimages/' . $productone->imageone) }}" class="pro" alt="">
        </div>&nbsp;&nbsp;&nbsp;
        <div class="card" style="width: 6rem;" onclick="showLargeImage('{{ $productone->imagetwo }}')">
            <img src="{{ asset('storage/productoneimages/' . $productone->imagetwo) }}" class="pro" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xl-6 d-flex justify-content-center">
            <div class="card mt-3" style="width: 22rem;" id="largeImageContainer">
                <img src="{{ asset('storage/productoneimages/' . $productone->imageone) }}" alt="Product Image"
                    class="pro-2">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xl-6">
            <h4 style="color:#fff">{{ strtoupper($productone->product_title) }}</h4>
            <h6 style="font-size:30px;color:#fff">Rs: <b style="color:red">{{ $productone->price }}</b></h6>
            <div class="star-rating">
                <i class="fas fa-star" style="color: #FFAD33;"></i>
                <i class="fas fa-star" style="color: #FFAD33;"></i>
                <i class="fas fa-star" style="color: #FFAD33;"></i>
                <i class="fas fa-star" style="color: #FFAD33;"></i>
                <i class="fas fa-star-half-alt" style="color: #FFAD33;"></i>
            </div>
            <p style="color:#fff">{{ $productone->description }}</p>

            <h6 style="color:#fff"><b>KG :</b>
                <button class="btn btn-danger" onclick="changeKG('1kg')">1kg</button>
                <button class="btn btn-danger" onclick="changeKG('2kg')">2kg</button>
                <button class="btn btn-danger" onclick="changeKG('3kg')">3kg</button>
            </h6>

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
                    <div class="col-6 col-lg-6">
                        <form method="POST" action="{{ url('cart') }}">
                            @csrf
                            <!-- Include other product details as hidden input fields -->
                            <input type="hidden" name="product_id" value="{{ $productone['id'] }}">
                            <input type="hidden" name="proone" value="2">
                            <input type="hidden" name="product_name" value="{{ $productone['product_title'] }}">
                            <input type="hidden" name="product_price" value="{{ $productone['price'] }}">
                            <input type="hidden" name="product_gst" value="{{ $productone['gst'] }}">
                            <input type="hidden" name="product_image" value="{{ $productone['imageone'] }}">
                            <!-- Add to Cart button -->
                            <button type="submit" class="btn btn-danger artchart">Buy Now</button>
                        </form>
                    </div>
                </div>
            </div>


            <!-- Button trigger modal -->


            <!-- <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="productModalLabel">Product Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="productModalBody">
                      
                        </div>
                        <button class="btn btn-primary " onclick="buyProduct()">Buy</button>
                    </div>
                </div>
            </div> -->
            <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="productModalLabel">Product Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="productModalBody">
                            <!-- Product details will be displayed here -->

                            <!-- Add other product details here -->
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" onclick="buyProduct()">Buy</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- QR Code Modal -->
            <div class="modal fade" id="qrModal" tabindex="-1" aria-labelledby="qrModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="qrModalLabel">Scan QR Code for Payment</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- QR code will be displayed here -->
                            <div id="qrCodeContainer"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payment Method Modal -->
            <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="paymentModalLabel">Payment Method</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Payment method and amount will be displayed here after scanning QR code -->
                            <!-- Add payment method details here -->
                        </div>
                        <div class="modal-footer">
                            <!-- Add button or action for completing payment -->
                        </div>
                    </div>
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
        <div class="card" style="width: 6rem;" onclick="showLargeImage('{{ $productone->imageone }}')">
            <img src="{{ asset('storage/productoneimages/' . $productone->imageone) }}" class="pro" alt="">
        </div>&nbsp;&nbsp;&nbsp;
        <div class="card" style="width: 6rem;" onclick="showLargeImage('{{ $productone->imagetwo }}')">
            <img src="{{ asset('storage/productoneimages/' . $productone->imagetwo) }}" class="pro" alt="">
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
        var imageUrl = "{{ asset('storage/productoneimages/') }}/" + imageName;
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
<!-- JavaScript Function -->
<script>
    var selectedKG = ''; // Variable to store selected KG

    // Function to handle changing the selected KG
    function changeKG(kg) {
        selectedKG = kg;
    }

    // Function to handle increasing the product count
    function increaseCount() {
        var countInput = $('#productCount');
        var currentCount = parseInt(countInput.val());
        countInput.val(currentCount + 1);
    }

    // Function to handle decreasing the product count
    function decreaseCount() {
        var countInput = $('#productCount');
        var currentCount = parseInt(countInput.val());

        // Ensure the count doesn't go below 1
        if (currentCount > 1) {
            countInput.val(currentCount - 1);
        }
    }

    // Function to populate the modal with product details, including selected KG and product count
    function populateModal(title, price, description) {
        var count = $('#productCount').val(); // Get the product count from the input field

        // Get modal elements
        var modalTitle = document.getElementById('productModalLabel');
        var modalBody = document.getElementById('productModalBody');

        // Set modal content with product details
        modalTitle.textContent = title;
        modalBody.innerHTML = '<h6 id="price">Price: Rs: <b style="color:red">' + price + '</b></h6>' +
            '<p>' + description + '</p>' +
            '<p>Selected KG: ' + selectedKG + '</p>' +
            '<p>Product Count: ' + count + '</p>';
    }
</script>
<script>
    // Function to handle the buy process and show QR code
    function buyProduct() {
        // Get the price from the modal
        var price = parseFloat(document.getElementById('price').innerText);

        // Show QR code modal with price
        $('#productModal').modal('hide');

        // Show the QR code modal with price
        $('#qrModal').modal('show');

        var price = parseFloat(document.getElementById('price').innerText);

        // Generate QR code with the price
        var qrCodeContainer = document.getElementById('qrCodeContainer');
        qrCodeContainer.innerHTML = ''; // Clear previous QR code if any

        var qr = new QRious({
            element: qrCodeContainer,
            value: "Price: Rs " + price,
            size: 200 // Adjust the size of the QR code as needed
        });

        // Show QR code modal
        $('#qrModal').modal('show');

    }

    // Function to handle payment after scanning QR code
    function handlePayment() {
        // Show payment method modal
        $('#paymentModal').modal('show');

        // Code to handle payment method and amount after scanning QR code goes here
    }

</script>

@endsection