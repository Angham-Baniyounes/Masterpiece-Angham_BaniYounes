@extends('public.layout.pages-layout')

@section('description', 'Grow Touch is an online shop for indoor plants operating in Jordan. We carefully choose the best house plants and deliver them to your doorstep, we also provide care guidance to make it easier to care for your plant and keep it healthy.')

@section('title', 'Shop')

@section('breadcrumb')
    <div class="col-12 pt-lg-23 pt-md-15 pt-sm-10 pt-6 text-center">
        <h1 class="headingIV fwEbold playfair mb-4">Shop</h1>
        <ul class="list-unstyled breadCrumbs d-flex justify-content-center">
            <li class="mr-2"><a href="/">Home</a></li>
            <li class="mr-2">/</li>
            <li class="active">Shop</li>
        </ul>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-12 col-lg-9 order-lg-3">
        <article id="content">
            <!-- show-head -->
            <header class="show-head d-flex flex-wrap justify-content-between mb-7">
                <ul class="list-unstyled viewFilterLinks d-flex flex-nowrap align-items-center">
                    <li class="mr-2"><a href="javascript:void(0);" class="active"><i class="fas fa-th-large"></i></a></li>
                    <li class="mr-2">Showing {{$getTotal->total}} results</li>
                </ul>
            </header>
            <!-- Products -->
            <div class="row">
                @foreach ($products as $product)
                    @if (($product->product_discount == 0.00) OR ($product->product_discount == 1.00))
                        <div class="col-12 col-sm-6 col-lg-4 featureCol mb-7">
                            <div class="border">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="{{asset('images')}}/{{$product->product_primary_image}}" alt="{{$product->product_name}} image" class="img-fluid w-100">
                                    <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="/cart"  class="icon-cart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="/single-product/{{$product->id}}" class="icon-eye d-block"></a></li>
                                        <li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
                                    </ul>
                                </div>
                                <div class="text-center py-5 px-4">
                                    <span class="title d-block mb-2"><a href="shop-detail.html">{{$product->product_name}}</a></span>
                                    <span class="price d-block fwEbold">{{$product->product_price}}</span>
                                </div>
                            </div>
                        </div>
                    @elseif ($product->product_discount >= 0.70 AND $product->product_discount <= 0.90)
                        <div class="col-12 col-sm-6 col-lg-4 featureCol mb-7">
                            <div class="border">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="{{asset('images')}}/{{$product->product_primary_image}}" alt="{{$product->product_name}} image" class="img-fluid w-100">
                                    <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="/cart"  class="icon-cart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="/single-product/{{$product->id}}" class="icon-eye d-block"></a></li>
                                        <li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
                                    </ul>
                                </div>
                                <div class="text-center py-5 px-4">
                                    <span class="title d-block mb-2"><a href="shop-detail.html">{{$product->product_name}}</a></span>
                                    <span class="price d-block fwEbold"><del>{{$product->product_price}}JD</del>{{$product->product_price - ($product->product_price * $product->product_discount)}}JD</span>
                                    <span class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">HOT</span>
                                </div>
                            </div>
                        </div>
                    @elseif (($product->product_discount >= 0.50) AND ($product->product_discount <= 0.90))
                        <div class="col-12 col-sm-6 col-lg-4 featureCol mb-7">
                            <div class="border">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="{{asset('images')}}/{{$product->product_primary_image}}" alt="{{$product->product_name}} image" class="img-fluid w-100">
                                    <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="/cart" class="icon-cart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="/single-product/{{$product->id}}" class="icon-eye d-block"></a></li>
                                        <li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
                                    </ul>
                                </div>
                                <div class="text-center py-5 px-4">
                                    <span class="title d-block mb-2"><a href="shop-detail.html">{{$product->product_name}}</a></span>
                                    <span class="price d-block fwEbold"><del>{{$product->product_price}}JD</del>{{$product->product_price - ($product->product_price * $product->product_discount)}}JD</span>
                                    <span class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">HOT</span>
                                    <span class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block ml-8">Sale</span>
                                </div>
                            </div>
                        </div>
                    @elseif (($product->product_discount > 0.00) AND ($product->product_discount < 1.00))
                        <div class="col-12 col-sm-6 col-lg-4 featureCol mb-7">
                            <div class="border">
                                <div class="imgHolder position-relative w-100 overflow-hidden">
                                    <img src="{{asset('images')}}/{{$product->product_primary_image}}" alt="{{$product->product_name}} image" class="img-fluid w-100">
                                    <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                        <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="/cart"  class="icon-cart d-block"></a></li>
                                        <li class="mr-2 overflow-hidden"><a href="/single-product/{{$product->id}}" class="icon-eye d-block"></a></li>
                                        <li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
                                    </ul>
                                </div>
                                <div class="text-center py-5 px-4">
                                    <span class="title d-block mb-2"><a href="shop-detail.html">{{$product->product_name}}</a></span>
                                    <span class="price d-block fwEbold"><del>{{$product->product_price}}JD</del>{{$product->product_price - ($product->product_price * $product->product_discount)}}JD</span>
                                    <span class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block">Sale</span>
                                </div>
                            </div>
                        </div> 
                    @endif
                @endforeach
                <div class="col-12 pt-3 mb-lg-0 mb-md-6 mb-3">
                    <!-- pagination -->
                    {{ $products->appends(request()->input())->links('pagination::custom') }}
                </div>
            </div>
        </article>
    </div>
    <div class="col-12 col-lg-3 order-lg-1">
        <!-- sidebar -->
        <aside id="sidebar">
            <form action="{{route('shop.index')}}" method="POST" class="searchForm position-relative border p-4">
                @csrf
                <section class="widget overflow-hidden mb-9">
                    <fieldset>
                        <input type="search" name="keyword" class="form-control" placeholder="Search product here..." value={{old('keyword, $keyword')}}>                    
                    </fieldset>
                </section>
                <section class="widget overflow-hidden mb-9">
                    <h3 class="headingVII fwEbold text-uppercase mb-5">PRODUCT CATEGORIES</h3>
                    @foreach ($categories as $category)
                        <div class="form-check">
                            <label for="category" class="form-check-label">
                                <input type="radio" class="form-check-input" name="category" id="category" value="{{$category->id}}" {{ isset($selected_category) && $selected_category == $category->id ? 'checked' : '' }}> {{$category->category_name}}
                            </label>
                        </div>
                    @endforeach
                </section>
                {{-- Filter by tag name --}}
                <section class="widget mb-9">
                    <h3 class="headingVII fwEbold text-uppercase mb-5">Subcategory tags</h3>
                    @foreach ($subcategories as $subcategory)
                        <div class="form-check">
                            <label for="subcategory" class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="subcategories[]" id="subcategory" value="{{$subcategory->id}}" {{ isset($selected_subcategories) && in_array($subcategory->id, $selected_subcategories) ? 'checked' : '' }}> {{$subcategory->subcategory_name}}
                            </label>
                        </div>
                    @endforeach
                </section> 
                <section class="widget mb-9">
                    <div class="pb-3">
                        <h3>Price</h3>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="price" value="price_1_25" {{ isset($selected_price) && $selected_price == 'price_1_25' ? 'checked' : '' }}> 1 - 25
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="price" value="price_26_50" {{ isset($selected_price) && $selected_price == 'price_26_50' ? 'checked' : '' }}> 26 - 50
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="price" value="price_51_75" {{ isset($selected_price) && $selected_price == 'price_51_75' ? 'checked' : '' }}> 51 - 75
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="price" value="price_76_100" {{ isset($selected_price) && $selected_price == 'price_76_100' ? 'checked' : '' }}> 76 - 100
                            </label>
                        </div>
                    </div>
                </section>
                <div class="get-results-wrap d-flex align-items-center justify-content-between">
                    <button type="submit" style="color: aliceblue" class="btn btnTheme btn-shop fwEbold md-round px-3 pt-1 pb-2 text-uppercase">Filter</button>
                    <a href="{{ route('shop.index') }}" style="color: aliceblue" class="btn btn-warning btn-shop fwEbold md-round px-3 pt-1 pb-2 text-uppercase">Reset</a>
                </div>
            </form>
        </aside>
    </div>
</div>
@endsection
