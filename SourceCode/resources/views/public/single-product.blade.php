@extends('public.layout.pages-layout')

@section('description', 'Grow Touch is an online shop for indoor plants operating in Jordan. We carefully choose the best house plants and deliver them to your doorstep, we also provide care guidance to make it easier to care for your plant and keep it healthy.')

@section('title', 'Single Product')

@section('breadcrumb')
    <div class="col-12 pt-lg-23 pt-md-15 pt-sm-10 pt-6 text-center">
        <h1 class="headingIV fwEbold playfair mb-4">Shop</h1>
        <ul class="list-unstyled breadCrumbs d-flex justify-content-center">
            <li class="mr-2"><a href="/">Home</a></li>
            <li class="mr-2">/</li>
            <li class="mr-2"><a href="/shop">Shop</a></li>
            <li class="mr-2">/</li>
            <li class="active">{{$product->product_name}}</li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="row mb-6">
        @if ($message = Session::get('msg'))
            <div class="alert alert-info">
                <p class="text-dark">{{ $message }}</p>
            </div>
        @endif
        <div class="col-12 col-lg-6 order-lg-1">
            <!-- productSliderImage -->
            <div class="productSliderImage mb-lg-2 mb-4">
                <div>
                    <img  style="width:570px; height:634px;" src="{{asset('images')}}/{{$product->product_primary_image}}" alt="{{$product->product_name}} primary image" class="img-fluid w-100">
                </div>
                @foreach ($images as $image)
                    <div>
                        <img src="{{asset('images')}}/{{$image->product_image}}" alt="{{$product->product_name}} image" class="img-fluid w-100">
                    </div>                
                @endforeach
            </div>
        </div>
        <div class="col-12 col-lg-6 order-lg-3">
            <!-- productTextHolder -->
            <div class="productTextHolder overflow-hidden">
                <h2 class="fwEbold mb-2">{{$product->product_name}}</h2>
                <ul class="list-unstyled ratingList d-flex flex-nowrap mb-2">
                    <li class="mr-2"><a href="javascript:void(0);"><i class="fas fa-star"></i></a></li>
                    <li class="mr-2"><a href="javascript:void(0);"><i class="fas fa-star"></i></a></li>
                    <li class="mr-2"><a href="javascript:void(0);"><i class="fas fa-star"></i></a></li>
                    <li class="mr-2"><a href="javascript:void(0);"><i class="fas fa-star"></i></a></li>
                    <li class="mr-2"><a href="javascript:void(0);"><i class="far fa-star"></i></a></li>
                    <li>( 5 customer reviews )</li>
                </ul>
                @if ($product->product_discount > 0.00 && $product->product_discount < 1.00)
                    <strong class="price d-block mb-5 mt-5 text-green">
                        <del>{{$product->product_price}}JD</del>
                        {{$product->product_price - ($product->product_price * $product->product_discount)}}JD
                    </strong>
                @else
                    <strong class="price d-block mb-5 text-green">{{$product->product_price}}JD</strong>
                @endif
                <p class="mb-5">{{$product->product_description}}.</p>
                <ul class="list-unstyled productInfoDetail mb-5 overflow-hidden">
                    <li class="mb-2">Product Code: <span>GT{{$product->id}}.</span></li>
                    <li class="mb-2">Status: 
                        @if ($product->product_state == 1)
                            <span>Avaliable</span>
                        @else
                            <span>Out Of Stock</span>                        
                        @endif
                    
                    </li>
                    <li class="mb-2">Shipping tax: <span>Free</span></li>
                </ul>
                <ul class="list-unstyled sizeList d-flex flex-wrap mb-4">
                    <li class="mr-6">Subcategory:</li>
                    <li class="mr-2">
                        <label for="check-1">
                            {{$product->subcategory->subcategory_name}}
                        </label>
                    </li>
                </ul>
                <ul class="list-unstyled productInfoDetail mb-0">
                    <li class="mb-2">Category: <a href="javascript:void(0);">{{$product->subcategory->category->category_name}}</a></li>
                </ul>
                <ul class="list-unstyled colorList d-flex flex-wrap mb-8">
                </ul>
                @if (!isset(session("loginUser")['id']))
                    <form action="{{asset('addToCart')}}" method="post">
                        @csrf
                        <div class="holder overflow-hidden d-flex flex-wrap mb-6">
                            <input type="number" value="1" name="qty" min="1">
                            {{-- <input type="hidden" name="pro_id" id="pro_id" value="{{$product->id}}"> --}}
                            <input type="hidden" name="id" value="{{$product->id}}">
                            <button type="submit" class="btn btnTheme btnShop fwEbold text-white md-round py-3 px-4 py-md-3 px-md-4">
                                Add To Cart 
                                <i class="fas fa-arrow-right ml-2"></i>
                            </button>
                        </div>
                    </form>
                @endif
                <ul class="list-unstyled socialNetwork d-flex flex-wrap mb-sm-11 mb-4">
                    <li class="text-uppercase mr-5">SHARE THIS PRODUCT:</li>
                    <li class="mr-4"><a href="javascript:void(0);" class="fab fa-facebook-f"></a></li>
                    <li class="mr-4"><a href="javascript:void(0);" class="fab fa-google-plus-g"></a></li>
                    <li class="mr-4"><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
                    <li class="mr-4"><a href="javascript:void(0);" class="fab fa-pinterest-p"></a></li>
                </ul>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <!-- paggSlider -->
            <div class="paggSlider">
                @foreach ($images as $image)              
                    <div>
                        <div class="imgBlock">
                            <img src="{{asset('images')}}/{{$image->product_image}}" alt="{{$product->product_name}} image" class="img-fluid">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container">
        @if ($message = Session::get('msg'))
            <div class="alert alert-info">
                <p class="text-dark">{{ $message }}</p>
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <!-- tabSetList -->
                <ul class="list-unstyled tabSetList d-flex justify-content-center mb-9 mt-9">
                    <li class="mr-md-20 mr-sm-10 mr-2">
                        <a href="#tab1-0" class="active playfair fwEbold pb-2">Description</a>
                    </li>
                    <li>
                        <a href="#tab2-0" class="playfair fwEbold pb-2">Reviews</a>
                    </li>
                </ul>
                <!-- tab-content -->
                <div class="tab-content mb-xl-11 mb-lg-10 mb-md-8 mb-5">
                    <div id="tab1-0" class="active">
                        <p>{{$product->product_description}}</p>
                    </div>
                    <div id="tab2-0">
                        @foreach ($feedbacks as $feedback)
                            <div class="d-flex mt-5">
                                <div>
                                    <img width="60px" src="{{asset("images/{$feedback->user_image}")}}">
                                </div>
                                <div class="administrator_contnet">
                                    <h4>{{ $feedback->name }}</h4>
                                    <div>{!! str_repeat('<i class="fa fa-star" aria-hidden="true"></i>', $feedback->feedback_rating) !!}
                                        {!! str_repeat('<i class="fa fa-star-o" aria-hidden="true"></i>', 5 - $feedback->feedback_rating) !!}</div>
                                    <p>{{ $feedback->feedback_message }}</p>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                        <div class="panel-heading mb-2">Add Your Comment</div>
                        <div class="panel panel-default pl-4 pr-4">
                            <div class="panel-body">
                                <form action="{{route('feedback.store', $product->id)}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <textarea 
                                            name="message" 
                                            id="comment" 
                                            placeholder="enter your comment" 
                                            class="form-control" 
                                            cols="30" 
                                            rows="10"
                                            style="color:#fff; font-size:1rem; padding:1rem;"
                                        ></textarea>
                                    </div>
                                    <div class="panel-heading mb-2">Rating</div>
                                    <div class="form-group required d-flex justify-content-center">
                                        <div class="col-sm-9 d-flex justify-content-between align-items-center">
                                            <div class="form-group">
                                                <input class="star star-5" value="5" id="star-5" type="radio" name="star"/>
                                                <label class="star star-5" for="star-5">⭐⭐⭐⭐⭐</label>
                                            </div>
                                            <div class="form-group">
                                                <input class="star star-4" value="4" id="star-4" type="radio" name="star"/>
                                                <label class="star star-4" for="star-4">⭐⭐⭐⭐</label>
                                            </div>
                                            <div class="form-group">
                                                <input class="star star-3" value="3" id="star-3" type="radio" name="star"/>
                                                <label class="star star-3" for="star-3">⭐⭐⭐</label>
                                            </div>
                                            <div class="form-group">
                                                <input class="star star-2" value="2" id="star-2" type="radio" name="star"/>
                                                <label class="star star-2" for="star-2">⭐⭐</label>
                                            </div>
                                            <div class="form-group">
                                                <input class="star star-1" value="1" id="star-1" type="radio" name="star"/>
                                                <label class="star star-1" for="star-1">⭐</label>
                                            </div>                                            
                                        </div>
                                    </div>
                                    @error('message')
                                        <small class='text-danger'>{{$message}}</small>
                                    @enderror
                                    <div class="form-group text-right mt-0">
                                        <button type="submit" class="button btn btn-success" style="width:100px">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="featureSec container overflow-hidden pt-xl-12 pb-xl-29 pt-lg-10 pb-lg-14 pt-md-8 pb-md-10 py-5">
        <div class="row">
            <!-- mainHeader -->
            <header class="col-12 mainHeader mb-5 text-center">
                <h1 class="headingIV playfair fwEblod mb-4">Related products</h1>
            </header>
        </div>
        <div class="row">
            @foreach ($relatedProducts as $product)
                @if (($product->product_discount == 0.00) OR ($product->product_discount == 1.00))
                    <div class="col-12 col-sm-6 col-lg-3 featureCol mb-7">
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
                                <span class="price d-block fwEbold">{{$product->product_price}}</span>
                            </div>
                        </div>
                    </div>
                @elseif ($product->product_discount >= 0.70 AND $product->product_discount <= 0.90)
                    <div class="col-12 col-sm-6 col-lg-3 featureCol mb-7">
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
                            </div>
                        </div>
                    </div>
                @elseif (($product->product_discount >= 0.50) AND ($product->product_discount <= 0.90))
                    <div class="col-12 col-sm-6 col-lg-3 featureCol mb-7">
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
                    <div class="col-12 col-sm-6 col-lg-3 featureCol mb-7">
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
                                <span class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block">Sale</span>
                            </div>
                        </div>
                    </div> 
                @endif
            @endforeach
        </div>
    </section>
@endsection

@section('script')
    <script>
        $('#addStar').change('.star', function(e) {
        $(this).submit();
        });
    </script>
@endsection