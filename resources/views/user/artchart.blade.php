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

    <div class="">
        @foreach($artchart as $product)
        <div class="product" id="product_{{ $product->id }}">
            <h4 id="productName_{{ $product->id }}" class="productName">{{ strtoupper($product->product_name) }}</h4>
            <h6 style="font-size:30px">Rs: <b id="productPrice_{{ $product->id }}" class="productPrice" style="color:red">{{ $product->product_price }}</b><p style="font-size:20px">GST : <span>{{ $product->product_gst }}%</span></p></h6>
            <div class="star-rating">
                <i class="fas fa-star" style="color: #FFAD33;"></i>
                <i class="fas fa-star" style="color: #FFAD33;"></i>
                <i class="fas fa-star" style="color: #FFAD33;"></i>
                <i class="fas fa-star" style="color: #FFAD33;"></i>
                <i class="fas fa-star-half-alt" style="color: #FFAD33;"></i>
            </div>

            <h6><b>KG :</b>
                <button class="btn btn-danger" onclick="changeKG('1kg', {{ $product->id }})">1kg</button>
                <button class="btn btn-danger" onclick="changeKG('2kg', {{ $product->id }})">2kg</button>
                <button class="btn btn-danger" onclick="changeKG('3kg', {{ $product->id }})">3kg</button>
            </h6>

            <br>
            <div class="row">
                <div class="col-6">
                    <div class="d-flex">
                        <button class="btn btn-danger" onclick="decreaseCount({{ $product->id }})">-</button>
                        <input type="text" id="productCount_{{ $product->id }}" class="form-control text-center" value="1"
                            style="width:60px;" readonly>
                        <button class="btn btn-danger" onclick="increaseCount({{ $product->id }})">+</button>
                        <button class="btn btn-warning" onclick="removeProduct({{ $product->id }})">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        @endforeach
        
    </div>

    <!-- Single Buy Button -->
    <div class="text-center mt-4">
        <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#productModal">Buy Now</button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productModalLabel">Product Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="productModalBody">
                    <!-- Product details will be displayed here -->
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" onclick="buyProduct()">Buy</button>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<!-- JavaScript code -->
<script>
    var selectedProducts = {}; // Object to store selected products

    // Function to handle changing the selected KG for a specific product
    function changeKG(kg, productId) {
        selectedProducts[productId] = {
            ...selectedProducts[productId],
            kg: kg
        };
    }

    // Function to handle increasing the product count for a specific product
    function increaseCount(productId) {
        var countInput = $('#productCount_' + productId);
        var currentCount = parseInt(countInput.val());
        countInput.val(currentCount + 1);
    }

    // Function to handle decreasing the product count for a specific product
    function decreaseCount(productId) {
        var countInput = $('#productCount_' + productId);
        var currentCount = parseInt(countInput.val());

        // Ensure the count doesn't go below 1
        if (currentCount > 1) {
            countInput.val(currentCount - 1);
        }
    }

    // Function to handle removing a product from the cart
    function removeProduct(productId) {
        // Send an AJAX request to remove the product from the cart
        $.ajax({
            type: 'POST',
            url: '/remove-from-cart/' + productId,
            data: {
                _token: '{{ csrf_token() }}',
            },
            success: function(response) {
                if (response.success) {
                    // Remove the product's HTML from the page
                    $('#product_' + productId).remove();
                }
            }
        });
    }

    // Function to handle the buy process and show product details in modal
    function buyProduct() {
        var modalBodyContent = ''; // Variable to store modal body content
        var totalPrice = 0; // Variable to store total price

        // Loop through selected products
        Object.keys(selectedProducts).forEach(function(productId) {
            var product = selectedProducts[productId];
            var productName = $("#productName_" + productId).text().trim(); // Get product name
            var productPrice = parseFloat($("#productPrice_" + productId).text().trim().replace('Rs: ', '')); // Get product price
            var productCount = parseInt($('#productCount_' + productId).val()); // Get product count

            // Calculate total price for this product
            var productTotal = productPrice * productCount;
            totalPrice += productTotal;

            // Generate HTML content for this product
            modalBodyContent += '<h6>' + productName + '</h6>' +
                '<p>Price: Rs: <b style="color:red">' + productPrice.toFixed(2) + '</b></p>' +
                '<p>KG: ' + (product.kg ? product.kg : 'Not specified') + '</p>' + // Check if kg is specified
                '<p>Quantity: ' + productCount + '</p>' +
                '<p>Total: Rs: <b style="color:red">' + productTotal.toFixed(2) + '</b></p>' +
                '<hr>';
        });

        // Add total price to modal body content
        modalBodyContent += '<h5>Total Price: Rs: <b style="color:red">' + totalPrice.toFixed(2) + '</b></h5>';

        // Set modal content with product details and total price
        $('#productModalBody').html(modalBodyContent);
    }
</script>
@endsection
