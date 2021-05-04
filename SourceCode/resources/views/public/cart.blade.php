@extends('public.layout.pages-layout')

@section('description', 'Grow Touch is an online shop for indoor plants operating in Jordan. We carefully choose the best house plants and deliver them to your doorstep, we also provide care guidance to make it easier to care for your plant and keep it healthy.')

@section('title', 'Single Product')

@section('breadcrumb')
    <div class="col-12 pt-lg-23 pt-md-15 pt-sm-10 pt-6 text-center">
        <h1 class="headingIV fwEbold playfair mb-4">My Cart</h1>
        <ul class="list-unstyled breadCrumbs d-flex justify-content-center">
            <li class="mr-sm-2 mr-1"><a href="/">Home</a></li>
            <li class="mr-sm-2 mr-1">/</li>
            <li class="mr-sm-2 mr-1"><a href="/shop">Shop</a></li>
            <li class="mr-sm-2 mr-1">/</li>
            <li class="active">My Cart</li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="cartHolder container pt-xl-21 pb-xl-24 py-lg-20 py-md-16 py-10">
        <form action="{{asset('update')}}" method="post">
            @csrf
            <div class="row">
                <!-- table-responsive -->
                <div class="col-12 table-responsive mb-lg-20 mb-md-16 mb-10">
                    <!-- cartTable -->
                    <table class="table cartTable mb-xl-22">
                        <thead>
                            <tr>
                                <th scope="col" class="text-uppercase fwEbold border-top-0 pro-thumbnail">Image</th>
                                <th scope="col" class="text-uppercase fwEbold border-top-0 pro-title">product</th>
                                <th scope="col" class="text-uppercase fwEbold border-top-0 pro-price">price</th>
                                <th scope="col" class="text-uppercase fwEbold border-top-0 pro-quantity">quantity</th>
                                <th scope="col" class="text-uppercase fwEbold border-top-0 pro-subtotal">total</th>
                                <th scope="col" class="text-uppercase fwEbold border-top-0 pro-remove">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartDetails as $item)
                                <tr class="align-items-center">
                                    <td class="fwEbold border-top-0 border-bottom px-0 py-6 pro-thumbnail">
                                        <div class="imgHolder">
                                            <img src="{{asset('/images/'.$item["product"]->product_primary_image)}}" alt="product image" class="img-fluid">
                                        </div>
                                    </td>
                                    <td class="fwEbold border-top-0 border-bottom px-0 py-6 pro-title">
                                        <span class="title pl-2">
                                            <a href="/single-product/{{$item["product"]->id}}">{{$item["product"]->product_name}}</a>
                                        </span>

                                    </td>
                                    <td class="fwEbold border-top-0 border-bottom px-0 py-6 pro-price">{{$item["product"]->product_price}} JD</td>
                                    <td class="fwEbold border-top-0 border-bottom px-0 py-6 border-top-0 border-bottom px-0 py-6 pro-quantity">
                                        <input type="number" value="{{$item['qty']}}" name="{{$item['product']->id}}" placeholder="1">
                                    </td>
                                    <td class="fwEbold border-top-0 border-bottom px-0 py-6 pro-subtotal">{{$item["product"]->product_price * $item["qty"]}} JD
                                    </td>
                                    <td class="fwEbold border-top-0 border-bottom px-0 py-6 pro-remove"><a href="{{asset('cart/delete/'.$item["product"]->id)}}" class="fas fa-times float-left"></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="col-12 col-md-4 offset-md-8">
                        <div class="d-flex justify-content-between">
                            <strong class="txt fwEbold text-uppercase mb-1">subtotal</strong>
                            <strong class="price fwEbold text-uppercase mb-1">${{$total}} JD</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-between">
                <div class="col-12 col-md-3 d-flex justify-content-between">
                    <div class="cart-buttons mb-30">
                        <input type="submit" value="Update Cart" class="btn btn-warning w-35 fwEbold text-center text-white md-round py-3 px-2 py-md-3 px-md-2 mt-3"/>
                    </div>
                    <div class="cart-buttons mb-30">
                        <a href="/shop" class="btn btn-info ml-3 w-100 fwEbold text-center text-white md-round py-2 px-2 py-md-2 px-md-2 mt-3">Continue Shopping</a>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                </div>
                <div class="col-12 col-md-6">
                    <a href="checkout" class="btn btnTheme mt-2 w-100 fwEbold text-center text-white md-round py-3 px-4 py-md-3 px-md-4">Proceed to checkout</a>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#cartBtn').click(function() {
                alert('clicked');
            });
        });
    </script>
@endsection