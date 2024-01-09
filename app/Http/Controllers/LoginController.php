<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
     {
        return view('loginReg.login');
    }
    public function signup()
    {
       return view('loginReg.register');
   }
}
