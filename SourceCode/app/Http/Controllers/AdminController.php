<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Auth;

class AdminController extends Controller
{

    public function __construct() {
        $this->middleware('auth:admin');
    }

    public function index() {
        $admins = Admin::all();
        // $id = Auth::guard('admin')->user()->id;
        // $admin = Admin::findOrFail($id);
        return view('dashboard.admins.index', compact(
            'admins',
            // 'admin'
        ));
    }

    public function create() {
        return view('dashboard.admins.create');
    }

    public function store() {
        $adminData = request()->validate([
            'name' => ['required', 'min:10'],
            'email'    => ['required', 'email', 'unique:admins'],
            'password' => ['required', 'min:8', 'max:16'],
            'image'    => ['image', 'mimes: jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        if(request()->hasFile('image')) {
            $image = request()->file('image');
            $image_name = time() . '.' . $image->extension();
            $image->move(public_path('images'), $image_name);
        } else {
            $image_name = 'default.png';
        }
        $adminData['image'] = $image_name;
        $adminData['password'] = bcrypt(request()->password);
        Admin::create($adminData);
        return redirect('/admin')->with('msg', 'Admin created successfully.');
    }

    public function show(Admin $admin) {
        return view('dashboard.admins.show', compact('admin'));
    }

    public function edit(Admin $admin) {
        return view('dashboard.admins.edit', compact('admin'));
    } 

    public function update(Request $request, Admin $admin) {
        $adminData = request()->validate([
            'name' => ['required', 'min:10'],
            'email'    => ['required', 'email'],
            'password' => ['required', 'min:8', 'max:16'],
            'image'    => ['image', 'mimes: jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        if(!empty(request()->image)) {
            $image_name = $admin->image;
            if($image_name != 'default.png') {
                File::delete(public_path('images/'.$image_name));
            }
            $image = request()->file('image');
            $image_name = time() . '.' . $image->extension();
            $image->move(public_path('images'), $image_name);
        } else {
            $image_name = $admin->image;
        }
        $adminData['image'] = $image_name; 
        $adminData['password'] = bcrypt(request()->password);
        $admin->update($adminData);
        return redirect('/admin')->with('msg', 'Admin Updated successfully.');
    }

    public function destroy(Admin $admin) {
        $admin->delete();
        return redirect('/admin')->with('msg', 'Admin Deleted successfully.');
    }

    public function search() {
        request()->validate([
            'search' => ['required'],
        ]);
        $text = request()->search;
        $filteredAdmin = Admin::where('name', 'like', '%'.$text.'%')
        ->orWhere('email', 'like', '%'.$text.'%')->get();
        if($filteredAdmin->count()) {
            return view('dashboard.admins.index')->with([
                'admins' => $filteredAdmin,
            ]);
        } else {
            return redirect('/admin')->with('msg', 'Sorry, there are no results, This admin does not exist');
        }
    }
}
