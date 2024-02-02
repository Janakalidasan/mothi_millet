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
