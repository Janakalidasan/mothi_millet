<?php

namespace App\Http\Controllers;

use App\Models\ProductOne;
use App\Models\ProductTwo;
use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session; // Import Session facade

class UserController extends Controller
{
    public function index()
    {
        return view('user.about');
    }
    
    public function profile()
    {
        return view('user.profile');
    }
    public function updateprofile()
    {
        return view('user.updateprofile');
    }
    public function buypage($id)
    {
        $product = ProductOne::find($id);
        $producttwo = ProductTwo::find($id);
        return view('user.buypage');
    }
    public function homepage()
    {
        return view('user.home');
    }
   

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

        if ($user) {
            // Verify the password
            if ($user->password === $password) {
                $products = ProductTwo::all();
                $productcook = ProductOne::all();
                return view('user.home')->with('products', $products)->with('productcook', $productcook);
            } else {
                return redirect()->to('/')->with('error', 'Invalid password')->with('email', $email);
            }
        } else {
            return redirect()->to('/')->with('error_email', 'Invalid email');
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
