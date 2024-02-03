<?php


namespace App\Http\Controllers;
use App\Models\AdminReg;
use App\Models\ProductOne;
use App\Models\ProductTwo;
use App\Models\UserProfile;
use App\Models\ArtToChart;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\storeorder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session; // Import Session facade

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('created_at', 'desc')->get();
        return view('admin.orderdetails')->with('order',$orders);
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
            $order->buyer_id = session('id');
            $order->buyer_name = $buyerName;
            $order->address = $address;
            $order->phone_no = $phoneNo;
            $order->ordertype = $paymentOption;
            $order->product_name = $productDetails['product_name'];
            $order->kg = $productDetails['kg'];
            $order->quantity = $productDetails['quantity'];
            $order->status = "Pending";
             $order->total_price = $productDetails['total_price'];
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
 
    public function orderdashboard() {
        $userId = session('id');
    
        // Retrieve store orders associated with the current user
        $storeOrders = Order::where('buyer_id', $userId)->get();
    
        // If there are store orders associated with the user
        if($storeOrders->isNotEmpty()) {
            // Retrieve orders belonging to the current user
            $orders = Order::where('buyer_id', $userId)->orderBy('created_at', 'desc')->get();
            
            // Pass the orders to the view
            return view('user.dashboard')->with('order', $orders);
        }
        // If there are no store orders associated with the user
        else {
            // You might want to handle this case, for example, redirect to a page
            // indicating that there are no orders available.
            return redirect()->back()->with('error', 'No orders found for the current user.');
        }
    }
    
}
