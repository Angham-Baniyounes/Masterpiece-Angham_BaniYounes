<?php

namespace App\Http\Controllers;

use App\Subcategory;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SubcategoryController extends Controller
{
    public function index() {
        $subcategories = Subcategory::with('category')->paginate();
        return view('dashboard.subcategories.index', compact('subcategories'));
    }

    public function create() {
        return view('dashboard.subcategories.create', [
            'categories' => Category::all()
        ]);
    }

    public function store() {
        Subcategory::create($this->validateData());
        return redirect(route('subcategory.view'))->with('msg', 'Subcategory created successfully.');
    }

    public function show(Subcategory $subcategory) {
        return view('dashboard.subcategories.show', compact('subcategory'));
    }

    public function edit(Subcategory $subcategory) {
        $categories = Category::all();
        return view('dashboard.subcategories.edit', [
            'subcategory' => $subcategory,
            'categories' => $categories
        ]);
    }

    public function update(Subcategory $subcategory) {
        $subcategory->update($this->validateData());
        return redirect($subcategory->path())->with('msg', 'Subcategory Updated successfully.'); 
    }

    public function destroy(Subcategory $subcategory) {
        File::delete(public_path('images/'.$subcategory->subcategory_image));
        $subcategory->delete();
        return redirect('/subcategories')->with('msg', 'Subcategory Deleted successfully.');
    }

    public function validateData() {
        $subcategoryData = request()->validate([
            'subcategory_name'        => ['required', 'max: 255'],
            'subcategory_image'       => ['image',  'mimes: jpeg,png,jpg,gif,svg', 'max:2048'],
            'subcategory_description' => ['required', 'min: 100'],
            'category_id'             => ['exists:categories,id'],
        ]);
        if(request()->hasFile('subcategory_image')) {
            $image = request()->file('subcategory_image');
            $img_name = time() . '.' . $image->extension();
            $image->move(public_path('images'), $img_name);
        } else {
            $img_name = 'default_img.png';
        }
        $subcategoryData['subcategory_image'] = $img_name;

        return $subcategoryData;
    }

    public function search() {
        request()->validate([
            'search' => ['required'],
        ]);
        $text = request()->search;
        $filteredSubcategories = Subcategory::where('subcategory_name', 'like', '%'.$text.'%')->orWhere('subcategory_description', 'like', '%'.$text.'%')->paginate(10);
        if($filteredSubcategories->count()) {
            return view('dashboard.subcategories.index')->with([
                'subcategories' => $filteredSubcategories,
            ]);
        } else {
            return redirect('/subcategories')->with('msg', 'Sorry, there are no results');
        }
    }
}
