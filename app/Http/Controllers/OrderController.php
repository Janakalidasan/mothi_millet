<?php


namespace App\Http\Controllers;
use App\Models\AdminReg;
use App\Models\ProductOne;
use App\Models\ProductTwo;
use App\Models\UserProfile;
use App\Models\ArtToChart;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session; // Import Session facade

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::all();
        return view('admin.orderdetails')->with('order',$order);
    }
    public function store(Request $request)
    {
        // Retrieve form data
        $buyerName = $request->input('buyer_name');
        $address = $request->input('address');
        $phoneNo = $request->input('phone_no');
        $paymentOption = $request->input('ordertype');
        $selectedProducts = $request->input('selectedProducts');
    
        // Process each selected product and store in the database
        foreach ($selectedProducts as $productId => $productDetails) {
            $order = new Order();
            $order->buyer_name = $buyerName;
            $order->address = $address;
            $order->phone_no = $phoneNo;
            $order->ordertype = $paymentOption;
            $order->product_name = $productDetails['product_name'];
            $order->kg = $productDetails['kg'];
            $order->quantity = $productDetails['quantity'];
            $order->status = "Pending";
             $order->total_price = $productDetails['total_price'];
            $order->save();
        }
    
        // Return success response or redirect to a success page
        return response()->json(['success' => true, 'message' => 'Order placed successfully']);
    }
    



    
    public function updateStatus(Request $request, $orderId)
    {
        // Validate the request data if necessary
        
        // Retrieve the order from the database
        $order = Order::find($orderId);

        if (!$order) {
            return response()->json(['success' => false, 'message' => 'Order not found']);
        }

        // Update the order status based on the request
        $newStatus = $request->input('newStatus');
        $order->status = $newStatus;
        $order->save();

        return response()->json(['success' => true, 'message' => 'Order status updated successfully']);
    }
 
}
// public function store(Request $request)
// {
//     // Validate the incoming request data
//     $validatedData = $request->validate([
//         'buyer_name' => 'required|string|max:255',
//         'address' => 'required|string|max:255',
//         'phone_no' => 'required|string|max:20',
//         'ordertype' => 'required|string|max:255', // Validate ordertype
//     ]);

//     // Store the order details in the database
//     $order = new Order();
//     $order->buyer_name = $validatedData['buyer_name'];
//     $order->address = $validatedData['address'];
//     $order->phone_no = $validatedData['phone_no'];
//     $order->ordertype = $validatedData['ordertype'];
//     $order->status = "Pending";

//     // Parse and process the products data
//     $products = json_decode($request->input('products'));

//     // Iterate over each product
//     foreach ($products as $productId => $productData) {
//         // Store product details
//         $order->product_name = $productData->name;
//         $order->kg = $productData->weight;
//         $order->quantity = $productData->count;
//         $order->total_price = $productData->price * $productData->count * $productData->weight;
//         $order->save();
//     }

//     // Return success response
//     return response()->json(['success' => true, 'message' => 'Order placed successfully']);
// }