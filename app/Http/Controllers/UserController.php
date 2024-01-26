<?php

namespace App\Http\Controllers;

use App\Models\AdminReg;
use App\Models\ProductOne;
use App\Models\ProductTwo;
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
    public function register(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8',
        ]);

        // Create a new user record
        $user = new Register();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =$request->password; // Encrypt the password before storing
        $user->save();
        $products = ProductTwo::all();
        $productcook = ProductOne::all();
        // Redirect the user to a specific route or page
        return view('user.home')->with('products', $products)->with('productcook', $productcook);
    }
//user and admin login
    public function login(Request $request)
    {
        // Validation rules
        $rules = [
            'email' => 'required|email|max:255',
            'password' => 'required',
        ];

        // Validate the request data
        $validatedData = $request->validate($rules);

        // Retrieve email and password from the validated data
        $email = strtolower($validatedData['email']);
        $password = $validatedData['password'];

        // Check if user exists with the given email
        $user = Register::where('email', $email)->first();
        $admin = AdminReg::where('email', $email)->first();
        if ($user) {
            // Verify the password
            if ($user->password === $password) {
                $products = ProductTwo::all();
                $productcook = ProductOne::all();
                return view('user.home')->with('products', $products)->with('productcook', $productcook);
            } else {
                return redirect()->to('/')->with('error', 'Invalid password')->with('email', $email);
            }
        } elseif($admin) {
            if ($admin->password === $password) {
                return view('admin.dashboard');
            } else {
                return redirect()->to('/')->with('error', 'Invalid password')->with('email', $email);
            }
        }
    }
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

}
