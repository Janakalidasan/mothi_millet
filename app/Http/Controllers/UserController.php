<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function buypage()
    {
        return view('user.buypage');
    }
    public function homepage()
    {
        return view('user.home');
    }

}
