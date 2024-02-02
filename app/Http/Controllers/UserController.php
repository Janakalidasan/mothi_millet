<?php


namespace App\Http\Controllers;
use App\Models\AdminReg;
use App\Models\ProductOne;
use App\Models\ProductTwo;
use App\Models\UserProfile;
use App\Models\ArtToChart;

use App\Models\Rating;
use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session; // Import Session facade

class UserController extends Controller
{
    public function index()
    {
        $rating = Rating::all();
        return view('user.about')->with('rating', $rating);
    }

    public function profile()
    {
        return view('user.profile');
    }
    public function updateprofile()
    {
        return view('user.updateprofile');
    }
    public function buypageone($id)
    {
        $productone = ProductOne::find($id);

        return view('user.buypagecook')->with('productone', $productone);
    }
    public function buypagetwo($id)
    {
        // $product = ProductOne::find($id);
        $producttwo = ProductTwo::find($id);

        return view('user.buypage')->with('producttwo', $producttwo);
    }
    public function homepage()
    {
        $products = ProductTwo::all();
        $productcook = ProductOne::all();
        return view('user.home')->with('products', $products)->with('productcook', $productcook);
    }
    // public function register(Request $request)
    // {
    //     // Validate the form data
    //     $validatedData = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|unique:users|max:255',
    //         'password' => 'required|string|min:8',
    //     ]);

    //     // Create a new user record
    //     $user = new Register();
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->password =$request->password; // Encrypt the password before storing
    //     $user->save();
    //     $products = ProductTwo::all();
    //     $productcook = ProductOne::all();
    //     // Redirect the user to a specific route or page
    //     return view('user.home')->with('products', $products)->with('productcook', $productcook);
    // }
//user and admin login
    // public function login(Request $request)
    // {
    //     // Validation rules
    //     $rules = [
    //         'email' => 'required|email|max:255',
    //         'password' => 'required',
    //     ];

    //     // Validate the request data
    //     $validatedData = $request->validate($rules);

    //     // Retrieve email and password from the validated data
    //     $email = strtolower($validatedData['email']);
    //     $password = $validatedData['password'];

    //     // Check if user exists with the given email
    //     $user = Register::where('email', $email)->first();
    //     $admin = AdminReg::where('email', $email)->first();
    //     if ($user) {
    //         // Verify the password
    //         if ($user->password === $password) {
    //             $products = ProductTwo::all();
    //             $productcook = ProductOne::all();
    //             return view('user.home')->with('products', $products)->with('productcook', $productcook);
    //         } else {
    //             return redirect()->to('/')->with('error', 'Invalid password')->with('email', $email);
    //         }
    //     } elseif($admin) {
    //         if ($admin->password === $password) {
    //             return view('admin.dashboard');
    //         } else {
    //             return redirect()->to('/')->with('error', 'Invalid password')->with('email', $email);
    //         }
    //     }
    // }
    public function allproduct()
    {
        $products = ProductTwo::all();
        $productcook = ProductOne::all();
        return view('user.allproducts')->with('products', $products)->with('productcook', $productcook);
    }
    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    // public function logout()
    // {
    //     Auth::logout();

    //     // Redirect to the login page or any other page after logout
    //     return redirect()->route('login');
    // }
    public function userprofile(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'altphone' => 'nullable|string|max:255',
        ]);

        // Create a new UserProfile record
        
        UserProfile::create([
            'firstname' => $validatedData['firstname'],
            'lastname' => $validatedData['lastname'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'address' => $validatedData['address'],
            'altphone' => $validatedData['altphone'],
        ]);

        // Redirect the user or return a response
        // For example, you can redirect the user to another page
        return redirect('home-page')->with('success', 'Profile saved successfully!');
    }
    public function chartview(){
        $artchart = ArtToChart::all();
        return view('user.artchart')->with('artchart', $artchart);
    }
    public function addToCart(Request $request)
    {
        // Retrieve the product details from the request
        $productId = $request->input('product_id');
        $productName = $request->input('product_name');
        $productPrice = $request->input('product_price');
        $productGst = $request->input('product_gst');
        // You can also retrieve other product details as needed

        // Here, you can save the product details to the cart table in the database
        $cartItem = new ArtToChart();
        $cartItem->product_id = $productId;
        $cartItem->product_name = $productName;
        $cartItem->product_price = $productPrice;
        $cartItem->product_gst = $productGst;
        $cartItem->save();

        // Redirect back or return a response as needed
        return redirect('chartview')->with('success', 'Product added to cart successfully');
    }
    public function removeFromCart($productId)
    {
        try {
            // Find the cart item by product ID and delete it
            $cartItem = ArtToChart::where('product_id', $productId)->first();
            
            if ($cartItem) {
                $cartItem->delete();
                return response()->json(['success' => true, 'message' => $cartItem]);
            } else {
                return response()->json(['success' => false, 'message' => 'Cart item not found.']);
            }
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
}
