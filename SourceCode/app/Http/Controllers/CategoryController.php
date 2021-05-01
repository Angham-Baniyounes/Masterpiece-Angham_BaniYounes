<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::paginate();
        return view('dashboard.categories.index', compact('categories'));
    }

    public function create() {
        return view('dashboard.categories.create');
    }

    public function store() {
        Category::create($this->validateData());
        return redirect(route('categories.index'))->with('msg', 'Category created successfully.'); 
    }
    
    public function show(Category $category) {
        return view('dashboard.categories.show', compact('category'));
    }

    public function edit(Category $category) {
        return view('dashboard.categories.edit', ['category' => $category]);
    }

    public function update(Category $category) {
        $category->update($this->validateData());
        return redirect($category->path())->with('msg', 'Category Updated successfully.'); 
    }

    public function destroy(Category $category)
    {
        File::delete(public_path('images/'.$category->category_image));
        $category->delete();
        return redirect('/categories')->with('msg', 'Category Deleted successfully.');
    }

    public function validateData() {
        $categoryData = request()->validate([
            'category_name'        => ['required', 'max:255'],
            'category_image'       => ['image', 'mimes: jpeg,png,jpg,gif,svg', 'max:2048'],
            'category_description' => ['required', 'min:100'],
        ]);  
        if(request()->hasFile('category_image')) {
            $image = request()->file('category_image');
            $img_name = time() . '.' . $image->extension();
            $image->move(public_path('images'), $img_name);
        } else {
            $img_name = 'default_img.png';
        }
        $categoryData['category_image'] = $img_name;
        return $categoryData;
    }

    public function search() {
        request()->validate([
            'search' => ['required'],
        ]);
        $text = request()->search;
        $filteredCategories = Category::where('category_name', 'like', '%'.$text.'%')->orWhere('category_description', 'like', '%'.$text.'%')->paginate(10);
        if($filteredCategories->count()) {
            return view('dashboard.categories.index')->with([
                'categories' => $filteredCategories,
            ]);
        } else {
            return redirect('/categories')->with('msg', 'Sorry, there are no results');
        }
    }
}
