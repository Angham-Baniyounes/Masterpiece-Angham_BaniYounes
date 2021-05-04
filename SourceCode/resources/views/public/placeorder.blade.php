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
    <h2>Your order has been placed!</h2>
@endsection