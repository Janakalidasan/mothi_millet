<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Register;
use App\Models\ProductOne;
use App\Models\ProductTwo;

class RegisterController extends Controller
{
    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']); // Encrypt the password before storing
        $user->save();

        // Fetch products for the home page
        $products = ProductTwo::all();
        $productcook = ProductOne::all();

        // Redirect the user to the home page with products
        return view('user.home')->with('products', $products)->with('productcook', $productcook);
    }
    public function updatepass(Request $request)
    {
        // Retrieve the new password from the form submission
        // Validate the form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // Retrieve the email and new password from the form submission
        $email = $request->input('email');
        $newPassword = $request->input('password');

        // Find the user by email
        $user = Register::where('email', $email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }

        // Update the user's password
        $user->password = bcrypt($newPassword);
        $user->update();

        return redirect('/')->with('success', 'Password updated successfully');
      
    }
    
    
}
