<?php

namespace App\Http\Controllers;

use App\Product;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index() {
        $products = Product::paginate();
        // $subcategories = Product::with('subcategory')->get();
        // return view('dashboard.products.index', compact('products', 'subcategories'));
        return view('dashboard.products.index', compact('products'));
    }

    public function create() {
        return view('dashboard.products.create', [
            'subcategories' => Subcategory::all(),
            
        ]);
    }

    public function store(){
        Product::create($this->validateData());
        return redirect(route('products.index'))->with('msg', 'Product created successfully.');
    }

    public function show(Product $product) {
        return view('dashboard.products.show', compact('product'));
    }

    public function edit(Product $product) {
        $subcategories = Subcategory::all();
        return view('dashboard.products.edit', [
            'product' => $product,
            'subcategories' => $subcategories
        ]);
    }

    public function update(Product $product) {
        $product->update($this->validateData());
        return redirect($product->path())->with('msg', 'Product Updated successfully.'); 
    }

    public function destroy(Product $product)
    {
        File::delete(public_path('images/'.$product->product_primary_image));
        $product->delete();
        return redirect('/products')->with('msg', 'Product Deleted successfully.');
    }

    public function ValidateData() {
        $productData = request()->validate([
            'product_name'          => ['required', 'max:255'],
            'product_primary_image' => ['image', 'mimes: jpeg,png,jpg,gif,svg', 'max:2048'],
            'product_price'  => ['required', 'numeric', 'min:1', 'max:100'],
            'product_discount'  => ['required', 'numeric', 'between:0.0,1.0'],
            'product_state'  => ['required', 'boolean'],
            'product_description'  => ['required', 'min:10', 'max:300'],
            'subcategory_id'  => ['exists:subcategories,id'],
        ]);
        if(request()->hasFile('product_primary_image')) {
            $image = request()->file('product_primary_image');
            $image_name = time() . '.' . $image->extension();
            $image->move(public_path('images'), $image_name);
        } else {
            $image_name = 'default_img.png';
        }
        $productData['product_primary_image'] = $image_name;

        return $productData;
    }

    public function search() {
        request()->validate([
            'search' => ['required'],
        ]);
        $text = request()->search;
        $subcategories = Product::with('subcategory')->get();
        $filteredProducts = Product::where('product_name', 'like', '%'.$text.'%')->orWhere('product_description', 'like', '%'.$text.'%')->paginate(30);
        if($filteredProducts->count()) {
            return view('dashboard.products.index')->with([
                'products' => $filteredProducts,
                'subcategories' => $subcategories
            ]);
        } else {
            return redirect('/products')->with('msg', 'Sorry, there are no results');
        }
    }
}
