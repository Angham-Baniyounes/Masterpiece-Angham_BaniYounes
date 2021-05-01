<?php

namespace App\Http\Controllers;

use App\ProductImage;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
// use DB;
class ProductImageController extends Controller
{
    public function index()
    {
        // $productImages = ProductImage::paginate();
        $productImages = ProductImage::with('product')->paginate(8);
        $images = ProductImage::with('product')->get();
        return view('dashboard.products.index-images', 
        compact(
            'productImages', 
            'images',
        ));
    }

    public function showGallery()
    {
        $images = ProductImage::with('product')->get();
        return view('dashboard.products.gallery', 
        compact(
            'images',
        ));
    }

    public function create($id)
    {
        $product =  Product::findOrFail($id);
        return view('dashboard.products.create_gallery', [
            'id' => $id,
            'product' => $product
        ]);
    }

    public function store(Request $request)
    {
        $this->validateDataImages();
        $gallery = new ProductImage();
        $gallery->product_id  = $request['product_id'];
        $product = Product::findOrFail($request['product_id']);
        $data = [];
        $images = $request->file('product_images') ;
        foreach ($images as $key => $value) {
            $image = new ProductImage();
            $path = time() . $key . '.' . $value -> getClientOriginalExtension() ;
            $value->move(public_path('/images')  , $path );
            $image->product_image = $path;
            $data[] = $image;
        }
        $product->images()->saveMany($data);

        return redirect(route('images.index'))->with('msg', 'Product Images created successfully.');
    }

    public function show(Request $request) {
        $image = ProductImage::findOrFail($request['id']);
        return view('dashboard.products.singleImage', [
            'image' => $image
        ]);
    }
    public function showGalleryProduct(Request $request) {
        $images = Product::find($request['id'])->images;
        return view('dashboard.products.gallery-product', [
            'images' => $images
        ]);
    }

    public function edit($id) {
        $image =  ProductImage::findOrFail($id);
        $product_id = $image->product_id;
        return view('dashboard.products.edit-image', [
            'productImage' => $image,
            'product_id' => $product_id,
        ]);
    }

    public function update(ProductImage $productImage, $id) {
        $productImage = new ProductImage();
        $productImage = $productImage->find($id);
        $productImage->update($this->validateImage());
        return redirect('/single-image/'.$productImage->id)->with('msg', 'Image Updated successfully.'); 
    }

    public function updateImage($id) {
        $productImage = new ProductImage();
        $productImage = $productImage->find($id);
        $image =  ProductImage::findOrFail($id);
        $product_id = $image->product_id;
        request()->validate([
                'product_image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            ]);
        if(request()->hasFile('product_image')) {
            $image = request()->file('product_image');
            $image_name = time() . '.' . $image->extension();
            $image->move(public_path('images'), $image_name);
        } 
        $productImage->product_image = $image_name;
        $productImage->product_id = $product_id;
        $productImage->save();
        return redirect('/single-image/'.$productImage->id)->with('msg', 'Image Updated successfully.'); 
    }


    public function destroy($id)
    {
        $productImage = ProductImage::find($id);
        $image_name = $productImage->product_image;
        if($image_name != 'default.png') {
            File::delete(public_path('images/'.$image_name));
        }
        $productImage->destroy($id);
        return redirect('/images/list')->with('msg', 'Image Deleted successfully.');
    }
    
    public function validateDataImages()
    {
        $imagesData = request()->validate([
            'product_images' => ['required'],
            'product_images.*' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048']
        ]);
        return $imagesData;
    }

    public function validateImage()
    {
        $imageData = request()->validate([
            'product_image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        if(request()->hasFile('product_image')) {
            $image = request()->file('product_image');
            $image_name = time() . '.' . $image->extension();
            $image->move(public_path('images'), $image_name);
        } 
        $imageData['product_image'] = $image_name;
        return $imageData;
    }
}
