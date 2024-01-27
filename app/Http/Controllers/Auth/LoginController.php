<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Register;
use App\Models\AdminReg;
use App\Models\ProductOne;
use App\Models\ProductTwo;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
            if (Hash::check($password, $user->password)) {
                $products = ProductTwo::all();
                $productcook = ProductOne::all();
                return view('user.home')->with('products', $products)->with('productcook', $productcook);
            } else {
                return redirect()->back()->with('error', 'Invalid password')->with('email', $email);
            }
        } elseif ($admin) {
            if (Hash::check($password, $admin->password)) {
                return view('admin.dashboard');
            } else {
                return redirect()->back()->with('error', 'Invalid password')->with('email', $email);
            }
        } else {
            return redirect()->back()->with('error', 'User not found')->with('email', $email);
        }
        
    }
    public function signup()
    {
        $products = ProductTwo::all();
        $productcook = ProductOne::all();
       return view('loginReg.register')->with('products', $products)->with('productcook', $productcook);
   }
   public function index()
   {
      return view('loginReg.login');
  }
  
}
