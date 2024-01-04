<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.createprofile');
    }
    public function store(Request $request): RedirectResponse
    {
        // Handle file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/profileimage', $fileName); // Adjust storage path as needed
        } else {
            // Handle the case where no image is provided
            $fileName = null;
        }

        // Create a new admin record
        Admin::create([
            'admin_id' => '1',
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'dob' => $request->input('dob'),
            'phone' => $request->input('phone'),
            'gender' => $request->input('gender'),
            // Add other fields here
            'image' => $fileName,
        ]);

        return redirect('/createprofile')->with('success', 'Profile added successfully.');
    }

    public function updatepage()
    {
        $Admin = Admin::all();
        return view('admin.updateprofile')->with('admin', $Admin);
    }


    public function update(Request $request): RedirectResponse
    {
        $id = $request->input('admin_id');
        $admin = Admin::find($id);
    
        if (!$admin) {
            return redirect()->back()->with('error', 'Admin not found.');
        }
    
        $fileName = '';
    
        // Handle file upload if needed
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('profileimage', $fileName, 'public'); // Adjust storage path as needed
        }
    
        $admin->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'dob' => $request->input('dob'),
            'phone' => $request->input('phone'),
            'gender' => $request->input('gender'),
            'image' => $fileName,
        ]);
    
        return redirect('/profileshow')->with('flash_message', 'Profile Updated!');
    }
    

    public function show(): View
    {
         $Admin = Admin::all();
        return view('admin.showprofile')->with('admin', $Admin);
    }


}

