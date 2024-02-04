<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Register;
use App\Models\AdminReg;
use App\Models\ProductOne;
use App\Models\ProductTwo;
use App\Models\ArtToChart;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class LoginController extends Controller
{
    use AuthenticatesUsers;
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
                // Pass user's name to the home page
                $userName = $user->name;
                $userId = $user->id;

                session(['userName' => $userName, 'id' => $userId]);
                $userId = session('id');
        
                // Retrieve only the cart items associated with the currently logged-in user
                $artchart = ArtToChart::where('user_id', $userId)->get();
                
                // Get the count of items in the cart for the user
                $chartcount = $artchart->count();
                
                // Store the count in the session
                session(['chartcount' => $chartcount]);

                $products = ProductTwo::all();
                $productcook = ProductOne::all();
                return view('user.home')->with(['products' => $products, 'productcook' => $productcook]);
            } else {
                return redirect()->back()->with('error', 'Invalid password')->with('email', $email);
            }
        } elseif ($admin) {
            // Compare plain text passwords for admin
            if (Hash::check($password, $admin->password)) {
                $users = User::all();
                $userCount = User::count();
                $products = ProductOne::count();
                $productsTwo = ProductTwo::count();
                $totalproduct = $products + $productsTwo;
                return view('admin.dashboard')->with(['users' => $users, 'usercount' => $userCount, 'totalproduct' => $totalproduct]); // Redirect to admin dashboard
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
    
    public function logout()
{
    // Clear the user's session
    session()->forget('userName');
    session()->forget('id');
    session()->forget('chartcount');
    // Redirect the user to the login page or any other desired page
    return redirect('/');
}

public function forgetpassword()
{
    return view('loginReg.forgetpassword');
}

}
