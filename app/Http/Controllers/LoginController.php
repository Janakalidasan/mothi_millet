<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductOne;
use App\Models\ProductTwo;
class LoginController extends Controller
{
    public function index()
     {
        return view('loginReg.login');
    }
    public function signup()
    {
        $products = ProductTwo::all();
        $productcook = ProductOne::all();
       return view('loginReg.register')->with('products', $products)->with('productcook', $productcook);
   }
   
}
