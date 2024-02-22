@extends('userlayout.master')
@section('content')

<br>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a style="color:#fff;"href="{{ url('allproduct') }}"><i class="fas fa-arrow-left"></i> Back</a></li>
    </ol>
</nav>
<br>
<div class="container">
    <br>

    <div class="">
        @foreach($artchart as $product)
        <div class="">
            <h4 style="color:#fff;" id="productName_{{ $product->id }}" class="productName">{{ strtoupper($product->product_name) }}</h4>
            <h6 style="font-size:30px;color:#fff;">Rs: <b id="productPrice_{{ $product->id }}" class="productPrice"
                    style="color:red">{{ $product->product_price }}</b>
                <p style="font-size:20px">GST : <span>{{ $product->product_gst }}%</span></p>
            </h6>
            <div class="star-rating">
                <i class="fas fa-star" style="color: #FFAD33;"></i>
                <i class="fas fa-star" style="color: #FFAD33;"></i>
                <i class="fas fa-star" style="color: #FFAD33;"></i>
                <i class="fas fa-star" style="color: #FFAD33;"></i>
                <i class="fas fa-star-half-alt" style="color: #FFAD33;"></i>
            </div>

            <h6 style="color:#fff;"><b>KG :</b>
                <button class="btn btn-danger" onclick="changeKG('1kg', {{ $product->id }})">1kg</button>
                <button class="btn btn-danger" onclick="changeKG('2kg', {{ $product->id }})">2kg</button>
                <button class="btn btn-danger" onclick="changeKG('3kg', {{ $product->id }})">3kg</button>
            </h6>

            <br>
            <div class="row">
                <div class="col-6">
                    <div class="d-flex">
                        <button class="btn btn-danger" onclick="decreaseCount({{ $product->id }})">-</button>
                        <input type="text" id="productCount_{{ $product->id }}" class="form-control text-center"
                            value="1" style="width:60px;" readonly>
                        <button class="btn btn-danger"
                            onclick="increaseCount({{ $product->id }})">+</button>&nbsp;&nbsp;
                        <button class="btn btn-danger"
                            onclick="removeProduct({{ $product->product_id }})">Delete</button>


                    </div>
                </div>
            </div>

        </div>
        <hr>
        @endforeach

    </div>



    <!-- Modal -->
    <div class="row">
        <div class="col-lg-6">
            <form method="POST" action="{{ route('store.order') }}" id="orderForm">
        @csrf <!-- CSRF Protection -->

        <div class="form-group">
            <label for="buyer_name" style="color:#fff;">Name:</label>
            <input type="text" class="form-control" id="buyer_name" name="buyer_name" placeholder="Enter name" required>
        </div>

        <div class="form-group">
            <label for="address" style="color:#fff;">Address:</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter Delivery Address"
                required>
        </div>

        <div class="form-group">
            <label for="phone_no" style="color:#fff;">Phone:</label>
            <input type="text"  class="form-control" id="phone_no" name="phone_no" placeholder="Enter phone number"
                required>
        </div>

        <div>
            <label class="form-check-label mr-3" style="color:#fff;">
                <input type="radio"  name="ordertype" value="cod" checked> Cash on Delivery
            </label>
            <label class="form-check-label" style="color:#fff;">
                <input type="radio" name="ordertype" value="online"> Online Payment
            </label>
        </div>

        <div class="modal fade modal-lg modal-dialog-scrollable" id="productModal" tabindex="-1"
            aria-labelledby="productModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="productModalLabel">Product Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="modal-body" id="productModalBody">
                                <!-- Product details will be displayed here -->
                            </div>
                        </div>
                        <div class="col-lg-6 p-4">
                            <button class="btn btn-primary" type="submit">Buy</button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- Payment options -->
                    </div>
                </div>
            </div>
        </div>

    </form>
        </div>
        <div class="col-lg-6"></div>
    </div>
    

</div>
<div class="text-center mt-4">
    <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#productModal"
        onclick="buyProduct()">Buy Now</button>
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

        // Recalculate the total price when KG changes
        calculateTotalPrice();
    }

    // Function to handle increasing the product count for a specific product
    function increaseCount(productId) {
        var countInput = $('#productCount_' + productId);
        var currentCount = parseInt(countInput.val());
        countInput.val(currentCount + 1);

        // Recalculate the total price when count changes
        calculateTotalPrice();
    }

    // Function to handle decreasing the product count for a specific product
    function decreaseCount(productId) {
        var countInput = $('#productCount_' + productId);
        var currentCount = parseInt(countInput.val());

        // Ensure the count doesn't go below 1
        if (currentCount > 1) {
            countInput.val(currentCount - 1);

            // Recalculate the total price when count changes
            calculateTotalPrice();
        }
    }

    // Function to calculate the total price based on selected products and quantities
    function calculateTotalPrice() {
        var totalPrice = 0;

        // Loop through selected products
        Object.keys(selectedProducts).forEach(function (productId) {
            var product = selectedProducts[productId];
            var productPrice = parseFloat($("#productPrice_" + productId).text().trim()); // Get product price
            var productCount = parseInt($('#productCount_' + productId).val()); // Get product count

            // If product.kg is defined, use it, otherwise default to 1
            var productWeight = product.kg ? parseFloat(product.kg) : 1;

            // Calculate total price for this product considering the weight
            var productTotal = productPrice * productCount * productWeight;
            totalPrice += productTotal;
        });

        // Update the total price in the modal
        $('#totalPrice').text(totalPrice.toFixed(2));
    }

    function buyProduct() {
    var modalBodyContent = ''; // Variable to store modal body content

    // Loop through selected products
    Object.keys(selectedProducts).forEach(function (productId) {
        var product = selectedProducts[productId];
        var productName = $("#productName_" + productId).text().trim(); // Get product name
        var productPrice = parseFloat($("#productPrice_" + productId).text().trim()); // Get product price
        var productCount = parseInt($('#productCount_' + productId).val()); // Get product count

        // If product.kg is defined, use it, otherwise default to 1
        var productWeight = product.kg ? parseFloat(product.kg) : 1;

        // Calculate total price for this product considering the weight
        var productTotal = productPrice * productCount * productWeight;

        // Generate HTML content for this product
        modalBodyContent += '<h6>' + productName + '</h6>' +
            '<p>Price per unit: Rs: <b style="color:red">' + productPrice.toFixed(2) + '</b></p>' +
            '<p>KG: ' + (product.kg ? product.kg : 'Not specified') + '</p>' + // Check if kg is specified
            '<p>Quantity: ' + productCount + '</p>' +
            '<p>Total: Rs: <b style="color:red">' + productTotal.toFixed(2) + '</b></p>' +
            '<hr>';

        // Include hidden input fields for each product
        modalBodyContent += '<input type="hidden" name="selectedProducts[' + productId + '][product_name]" value="' + productName + '">';
        modalBodyContent += '<input type="hidden" name="selectedProducts[' + productId + '][kg]" value="' + (product.kg ? product.kg : '') + '">';
        modalBodyContent += '<input type="hidden" name="selectedProducts[' + productId + '][quantity]" value="' + productCount + '">';
        modalBodyContent += '<input type="hidden" name="selectedProducts[' + productId + '][total_price]" value="' + productTotal.toFixed(2) + '">';
    });

    // Set modal content with product details
    $('#productModalBody').html(modalBodyContent);
    $('#productModal').modal('show'); // Show the modal
}




    // Function to remove a product from the cart
    function removeProduct(productId) {
        // Send an AJAX request to remove the product from the cart
        $.ajax({
            type: 'POST',
            url: '/remove-from-cart/' + productId,
            data: {
                _token: '{{ csrf_token() }}',
            },
            success: function (response) {
                if (response.success) {
                    // Reload the page after successful removal
                    location.reload();
                } else {
                    console.error('Failed to remove product from cart:', response.message);
                }
            },
            error: function (xhr, status, error) {
                console.error('Error removing product from cart:', error);
            }
        });
    }

    // Function to handle the buy process and show product details in modal
    // function storeorders() {
    //     // Capture form data
    //     var buyerName = $('#buyer_name').val();
    //     var address = $('#address').val();
    //     var phoneNo = $('#phone_no').val();
    //     var paymentOption = $('input[name=paymentOption]:checked').val();
    //     var ordertype = (paymentOption === 'cod') ? 'Casry' : 'Online Payment'; // Determine the ordertype based on payment option

    //     // Fetch selected p //     var selectedProductsData = {};
    //     Object.keys(selectedProducts).forEach(function (productId) {
    //         var product = selectedProducts[productId];
    //         var productName = $("#productName_" + productId).text().trim(); // Get product name
    //         var productPrice = parseFloat($("#productPrice_" + productId).text().trim()); // Get product price
    //         var productCount = parseInt($('#productCount_' + productId).val()); // Get product count
    //         var productWeight = product.kg ? parseFloat(product.kg) : 1; // If kg is specified, use it, otherwise default to 1

    //         selectedProductsData[productId] = {
    //             name: productName,
    //             price: productPrice,
    //             count: productCount,
    //             weight: productWeight
    //         };
    //     });

    //     // Calculate total price
    //     var totalPrice = calculateTotalPrice();

    //     // Send data to server via AJAX
    //     $.ajax({
    //         type: 'POST',
    //         url: '/store-order', // Define your route for storing orders
    //         data: {
    //             _token: '{{ csrf_token() }}',
    //             buyer_name: buyerName,
    //             address: address,
    //             phone_no: phoneNo,
    //             payment_option: paymentOption,
    //             ordertype: ordertype, // Include the ordertype value
    //             products: JSON.stringify(selectedProductsData),
    //             total_price: totalPrice
    //         },
    //         success: function (response) {
    //             if (response.success) {
    //                 alert('Order placed successfully!');
    //                 // Optionally, redirect the user to a success page or perform other actions
    //             } else {
    //                 console.error('Failed to place order:', response.message);
    //             }
    //         },
    //         error: function (xhr, status, error) {
    //             console.error('Error placing order:', error);
    //         }
    //     });

    //     // Close the modal after processing the buy action
    //     $('#productModal').modal('hide');
    // }
</script>

@endsection