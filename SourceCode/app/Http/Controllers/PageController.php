<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Subcategory;
// use DB;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function indexShop() {
        $keyword = request()->has('keyword') ? request()->get('keyword') : null;
        $selected_price = request()->has('price') ? request()->get('price') : null;
        $selected_category = request()->has('category') ? request()->get('category') : null;
        $selected_subcategories = request()->has('subcategories') ? request()->get('subcategories') : [];

        $products = Product::with(['subcategory', 'images']);
        if($keyword != null) {
            $products = $products->search($keyword);
        }

        if($selected_price != null) {
            $products = $products->when($selected_price, function ($query) use ($selected_price) {
                if($selected_price == 'price_1_25') {
                    $query->whereBetween('product_price', [1, 25]);
                } elseif ($selected_price == 'price_26_50') {
                    $query->whereBetween('product_price', [26, 50]);
                } elseif ($selected_price == 'price_51_75') {
                    $query->whereBetween('product_price', [51, 75]);
                } elseif ($selected_price == 'price_76_100') {
                    $query->whereBetween('product_price', [76, 100]);
                }
            });
        }
        if($selected_category != null) {
            $products = $products->whereSubcategoryId($selected_category);
        }

        if(is_array($selected_subcategories) && count($selected_subcategories) > 0) {
            $products = $products->whereHas('subcategory', function ($query) use ($selected_subcategories) {
                $query->whereIn('products.subcategory_id', $selected_subcategories);
            });
        }
        $products = $products->orderByDesc('created_at')->paginate(6);

        $categories = Category::limit(3)->get();
        $subcategories = Subcategory::limit(6)->get();

        $getData = $products;
        $getData = json_encode($getData);
        $getTotal = json_Decode($getData);

        return view('public.shop', compact(
                                            'products',
                                            'categories', 
                                            'subcategories',
                                            'keyword', 
                                            'selected_category', 
                                            'selected_subcategories',
                                            'getTotal'
                                        )); 
    }


    public function showSingleProduct(Request $request) {
        $product = Product::findOrFail($request['id']);
        $images = Product::find($request['id'])->images()->limit(4);
        $subcategory_id = $product->subcategory_id;
        $relatedProducts = DB::table('products')
            ->where('subcategory_id', "=", $subcategory_id)
            ->where("id", "!=", $request['id'])
            ->limit(4)->get();
        
        $feedbacks = DB::table('users')
        ->select('feedbacks.feedback_message', 'feedbacks.feedback_rating', 'users.name', 'users.user_image')
        ->where('feedbacks.product_id', '=', $request['id'])
        ->join('feedbacks', 'users.id', 'feedbacks.user_id')
        ->get();
        $averageFeedbacks=0;
        if (count($feedbacks)){
            $total = 0;
        foreach ($feedbacks as $feedback){
            $total += $feedback->feedback_rating;
        }
            $averageFeedbacks = round($total/count($feedbacks));
        }
        return view('public.single-product', compact('product', 'images', 'relatedProducts', 'feedbacks'));
    }

    public function showAboutUs()
    {
        return view('public.aboutus');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
