<?php

namespace App\Http\Controllers;

use App\ProductImage;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductImageController extends Controller
{
    public function index()
    {
        $productImages = ProductImage::paginate();
        $images = ProductImage::with('product')->get();
        return view('dashboard.products.index-images', 
        compact(
            'productImages', 
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

    public function show(ProductImage $image, $id)
    {
        $image =  Product::findOrFail($id);
        $gallery = ProductImage::find($id)::with('product')->get();
        $imageP = $gallery->first();
        // return view('dashboard.products.singleImage', compact('image'));
        // $gallery = ProductImage::with('product')->get();
        return view('dashboard.products.singleImage', [
            'image' => $imageP
        ]);
    }

    public function edit(ProductImage $productImage, $id)
    {
        $image =  ProductImage::findOrFail($id);
        // $image = ProductImage::with('product')->get();
        return view('dashboard.products.edit-image', [
            'productImage' => $image,
        ]);
    }

    public function update(ProductImage $productImage)
    {
        $productImage->update($this->validateImage());
        return redirect($productImage->path())->with('msg', 'Image Updated successfully.'); 
        redirect('/gallery')->with('msg', 'Image Updated successfully.');
    }

    public function destroy(ProductImage $productImage)
    {
        $image_name = $productImage->product_image;
        if($image_name != 'default.png') {
            File::delete(public_path('images/'.$image_name));
        }
        $productImage->delete();
        return redirect('/gallery')->with('msg', 'Image Deleted successfully.');
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
            'product_images' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        if(request()->hasFile('product_image')) {
            $image = request()->file('product_image');
            $image_name = time() . '.' . $image->extension();
            $image->move(public_path('images'), $image_name);
        } else {
            $image_name = 'default_img.png';
        }
        $imageData['product_image'] = $image_name;
        return $imageData;
    }
}
