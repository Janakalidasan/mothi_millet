<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Admin;
use App\Models\User;
use App\Models\ProductOne;
use App\Models\ProductTwo;
use DataTables;
use Illuminate\Support\Facades\Storage;



class AdminController extends Controller
{

    public function dashboard()
    {
        $users = User::all();
        $userCount = User::count();
        $products = ProductOne::count();
        $productsTwo = ProductTwo::count();
        $totalproduct = $products + $productsTwo;
        return view('admin.dashboard')->with(['users' => $users, 'usercount' => $userCount,'totalproduct'=> $totalproduct]);
    }

    public function index()
    {
        return view('admin.createprofile');
    }

    //profile create and store
    public function store(Request $request): RedirectResponse
    {
        // Handle file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('profileimage', $fileName,'public'); // Adjust storage path as needed
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

    //profile update
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
        } else {
            $fileName = $admin['image'];
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

    //profile show
    public function show(): View
    {
        $Admin = Admin::all();
        return view('admin.showprofile')->with('admin', $Admin);
    }

    public function customer(Request $request): View
    {
       
        $users = User::paginate(5);
        return view('admin.customerlist')->with('users' , $users);
      
    }
    public function getUsers()
    {
        $users = User::all();
        return response()->json(['users' => $users]);
    }
   
    public function GetUserData()
    {
        $fromDate = request()->input('fromdate', '0000-00-00');
        $toDate = request()->input('todate', now());
        $status = request()->input('status'); // Get the selected status
    
        $output = Admin::GetUserData($fromDate, $toDate, $status);
        return response()->json($output);
    }

    public function productone(): View
    {
        return view('admin.productaddone');
    }
    

    //product store method

    public function productonestore(Request $request): RedirectResponse
{
    // Handle file uploads for each image input
    $imagePaths = [];

    for ($i = 1; $i <= 3; $i++) {
        $inputName = "image{$i}";

        if ($request->hasFile($inputName)) {
            $file = $request->file($inputName);
            $fileName = time() . "_{$file->getClientOriginalName()}";
            $file->storeAs('productoneimages', $fileName,'public'); // Adjust storage path as needed
            $imagePaths["image{$i}"] = $fileName;
        }
    }

    // Create a new product record
    ProductOne::create([
        'product_title' => $request->input('product_title'),
        'description' => $request->input('description'),
        'imageone' => $imagePaths['image1'] ?? null,
        'imagetwo' => $imagePaths['image2'] ?? null,
        'imagethree' => $imagePaths['image3'] ?? null,
        'price' => $request->input('price'),
        'gst' => $request->input('gst'),
        // Add other fields here
    ]);

    return redirect('category')->with('success', 'Product added successfully.');
}

public function producttwo(): View
{
    return view('admin.productaddtwo');
}

public function producttwostore(Request $request): RedirectResponse
{
    // Handle file uploads for each image input
    $imagePaths = [];

    for ($i = 1; $i <= 3; $i++) {
        $inputName = "image{$i}";

        if ($request->hasFile($inputName)) {
            $file = $request->file($inputName);
            $fileName = time() . "_{$file->getClientOriginalName()}";
            $file->storeAs('producttwoimages', $fileName,'public'); // Adjust storage path as needed
            $imagePaths["image{$i}"] = $fileName;
        }
    }

    // Create a new product record
    ProductTwo::create([
        'product_title' => $request->input('product_title'),
        'description' => $request->input('description'),
        'imageone' => $imagePaths['image1'] ?? null,
        'imagetwo' => $imagePaths['image2'] ?? null,
        'imagethree' => $imagePaths['image3'] ?? null,
        'price' => $request->input('price'),
        'gst' => $request->input('gst'),
        // Add other fields here
    ]);

    return redirect('category')->with('success', 'Product added successfully.');
}

public function category(): View
{
    $productone = ProductOne::all();
    $producttwo = ProductTwo::all();
    return view('admin.categroy')->with(['productone' => $productone, 'producttwo' => $producttwo]);
}

//cooies detele
public function deleteProduct($id)
{
    $product = ProductOne::find($id);

    if (!$product) {
        return redirect()->back()->with('error', 'Product not found.');
    }

    // Delete associated images
    if ($product->imageone) {
        Storage::delete('productoneimages/' . $product->imageone);
    }
    if ($product->imagetwo) {
        Storage::delete('productoneimages/' . $product->imagetwo);
    }
    if ($product->imagethree) {
        Storage::delete('productoneimages/' . $product->imagethree);
    }

    // Delete the product record
    $product->delete();

    return redirect()->back()->with('success', 'Product deleted successfully.');
}
//powder detele
public function deleteProducts($id)
{
    $product = Producttwo::find($id);

    if (!$product) {
        return redirect()->back()->with('error', 'Product not found.');
    }

    // Delete associated images
    if ($product->imageone) {
        Storage::delete('producttwoimages/' . $product->imageone);
    }
    if ($product->imagetwo) {
        Storage::delete('producttwoimages/' . $product->imagetwo);
    }
    if ($product->imagethree) {
        Storage::delete('producttwoimages/' . $product->imagethree);
    }

    // Delete the product record
    $product->delete();

    return redirect()->back()->with('success', 'Product deleted successfully.');
}

}

