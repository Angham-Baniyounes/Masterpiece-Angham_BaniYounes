@extends('public.layout.public-side')

@section('products')
    @foreach ($products as $product)
        @if (($product->product_discount == 0.00) OR ($product->product_discount == 1.00))
            <div class="featureCol px-3 mb-6">
                <div class="border">
                    <div class="imgHolder position-relative w-100 overflow-hidden">
                        <img src="{{asset('images')}}/{{$product->product_primary_image}}" alt="{{$product->product_name}} image" class="img-fluid" style="width:280px; height:278px">
                        <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                            <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
                            <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
                            <li class="mr-2 overflow-hidden"><a href="/single-product/{{$product->id}}" class="icon-eye d-block"></a></li>
                            <li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
                        </ul>
                    </div>
                    <div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                        <span class="title d-block mb-2"><a href="shop-detail.html">{{$product->product_name}}</a></span>
                        <span class="price d-block fwEbold">{{$product->product_price}}JD</span>
                    </div>
                </div>
            </div> 
        @elseif (($product->product_discount >= 0.70) AND ($product->product_discount <= 0.90))
            <div class="featureCol px-3 position-relative mb-6">
                <div class="border">
                    <div class="imgHolder position-relative w-100 overflow-hidden">
                        <img src="{{asset('images')}}/{{$product->product_primary_image}}" alt="{{$product->product_name}} image" class="img-fluid" style="width:280px; height:278px">
                        <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                            <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
                            <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
                            <li class="mr-2 overflow-hidden"><a href="/single-product/{{$product->id}}" class="icon-eye d-block"></a></li>
                            <li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
                        </ul>
                    </div>
                    <div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                        <span class="title d-block mb-2"><a href="shop-detail.html">{{$product->product_name}}</a></span>
                        <span class="price d-block fwEbold"><del>{{$product->product_price}}JD</del>{{$product->product_price - ($product->product_price * $product->product_discount)}}JD</span>
                        <span class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">HOT</span>
                    </div>
                </div>
            </div>
        @elseif (($product->product_discount >= 0.50) AND ($product->product_discount <= 0.90))
            <div class="featureCol position-relative px-3 mb-6">
                <div class="border">
                    <div class="imgHolder position-relative w-100 overflow-hidden">
                        <img src="{{asset('images')}}/{{$product->product_primary_image}}" alt="{{$product->product_name}} image" class="img-fluid" style="width:280px; height:278px">
                        <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                            <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
                            <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
                            <li class="mr-2 overflow-hidden"><a href="/single-product/{{$product->id}}" class="icon-eye d-block"></a></li>
                            <li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
                        </ul>
                    </div>
                    <div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                        <span class="title d-block mb-2"><a href="shop-detail.html">{{$product->product_name}}</a></span>
                        <span class="price d-block fwEbold"><del>{{$product->product_price}}JD</del>{{$product->product_price - ($product->product_price * $product->product_discount)}}JD</span>
                        <span class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">HOT</span>
                        <span class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block ml-8">Sale</span>
                    </div>
                </div>
            </div>
        @elseif (($product->product_discount > 0.00) AND ($product->product_discount < 1.00))
            <!-- featureCol -->
            {{-- 3 just sale --}}
            <div class="featureCol px-3 position-relative mb-6">
                <div class="border">
                    <div class="imgHolder position-relative w-100 overflow-hidden">
                        <img src="{{asset('images')}}/{{$product->product_primary_image}}" alt="{{$product->product_name}} image" class="img-fluid" style="width:280px; height:278px">
                        <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                            <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
                            <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
                            <li class="mr-2 overflow-hidden"><a href="/single-product/{{$product->id}}" class="icon-eye d-block"></a></li>
                            <li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
                        </ul>
                    </div>
                    <div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                        <span class="title d-block mb-2"><a href="shop-detail.html">Aspetur Autodit Autfugit</a></span>
                        <span class="price d-block fwEbold"><del>{{$product->product_price}}JD</del>{{$product->product_price - ($product->product_price * $product->product_discount)}}JD</span>
                        <span class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block">Sale</span>
                    </div>
                </div>
            </div>  
        @endif
    @endforeach
@endsection

@section('salesProducts')
    @foreach ($saleProducts as $saleProduct)
        <div>
            <!-- featureCol -->
            <div class="featureCol position-relative w-100 px-3 mb-sm-8 mb-6">
                <div class="border">
                    <div class="imgHolder position-relative w-100 overflow-hidden">
                        {{-- <img src="{{asset('images')}}/{{$saleProduct->product_primary_image}}" alt="{{$saleProduct->product_name}} image" class="img-fluid" style="width:280px; height:278px"> --}}
                        <img src="{{asset('images')}}/{{$saleProduct->product_primary_image}}" alt="{{$saleProduct->product_name}} image" class="img-fluid w-100" style="width:280px; height:250px">
                        <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                            <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
                            <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
                            <li class="mr-2 overflow-hidden"><a href="/single-product/{{$product->id}}" class="icon-eye d-block"></a></li>
                            <li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
                        </ul>
                    </div>
                    <div class="text-center py-5 px-2">
                        <span class="title d-block mb-2"><a href="shop-detail.html">{{$saleProduct->product_name}}</a></span>
                        <span class="price d-block fwEbold"><del>{{$saleProduct->product_price}}JD</del>{{$saleProduct->product_price - ($saleProduct->product_price * $saleProduct->product_discount)}}JD</span>
                        <span class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block">Sale</span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@section('hotProducts')
    @foreach ($hotProducts as $hotProduct)
        <div>
            <!-- featureCol -->
            <div class="featureCol position-relative w-100 px-3 mb-sm-8 mb-6">
                <div class="border">
                    <div class="imgHolder position-relative w-100 overflow-hidden">
                        <img src="{{asset('images')}}/{{$hotProduct->product_primary_image}}" alt="{{$hotProduct->product_name}} image" class="img-fluid w-100" style="width:280px; height:250px">
                        <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                            <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
                            <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
                            <li class="mr-2 overflow-hidden"><a href="/single-product/{{$product->id}}" class="icon-eye d-block"></a></li>
                            <li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
                        </ul>
                    </div>
                    <div class="text-center py-5 px-2">
                        <span class="title d-block mb-2"><a href="shop-detail.html">{{$hotProduct->product_name}}</a></span>
                        <span class="price d-block fwEbold"><del>{{$hotProduct->product_price}}JD</del>{{$hotProduct->product_price - ($hotProduct->product_price * $hotProduct->product_discount)}}JD</span>
                        <span class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">HOT</span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection