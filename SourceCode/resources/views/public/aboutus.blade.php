@extends('public.layout.pages-layout')

@section('description', 'Grow Touch is an online shop for indoor plants operating in Jordan. We carefully choose the best house plants and deliver them to your doorstep, we also provide care guidance to make it easier to care for your plant and keep it healthy.')

@section('title', 'Single Product')

@section('breadcrumb')
    <div class="col-12 pt-lg-23 pt-md-15 pt-sm-10 pt-6 text-center">
        <h1 class="headingIV fwEbold playfair mb-4">Shop</h1>
        <ul class="list-unstyled breadCrumbs d-flex justify-content-center">
            <li class="mr-2"><a href="/">Home</a></li>
            <li class="mr-2">/</li>
            <li class="mr-2"><a class="active" href="/about-us">About</a></li>
        </ul>
    </div>
@endsection

@section('content')
    <section class="abtSecHolder container pt-xl-24 pb-xl-12 pt-lg-20 pb-lg-10 pt-md-16 pb-md-8 pt-10 pb-5">
        <div class="row">
            <div class="col-12 col-lg-6 pt-xl-12 pt-lg-8">
                <h2 class="playfair fwEbold position-relative mb-7 pb-5">
                    <strong class="d-block">Grow Touch</strong>
                    <strong class="d-block">For a Better World</strong>
                </h2>
                <p class="pr-xl-16 pr-lg-10 mb-lg-0 mb-6">Grow Touch is an online shop for indoor plants operating in Jordan. We carefully choose the best house plants and deliver them to your doorstep, we also provide care guidance to make it easier to care for your plant and keep it healthy.</p>
            </div>
            <div class="col-12 col-lg-6">
                <img src="{{asset('/publicside/images/img80.jpg')}}" alt="image description" class="img-fluid">
            </div>
        </div>
    </section>
    <section class="introSec bg-lightGray pt-xl-12 pb-xl-7 pt-10 pb-10">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 mb-lg-0 mb-6">
                    <img src="{{asset('/publicside/images/img81.png')}}" alt="image description" class="img-fluid">
                </div>
                <div class="col-12 col-lg-6">
                    <div id="accordion" class="accordionList pt-lg-12">
                        <div class="card mb-2">
                            <div class="card-header px-xl-5 py-xl-3" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link fwEbold text-uppercase text-left w-100 p-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Grow Touch Store <i class="fas fa-sort-down float-right"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body px-xl-5 py-0">
                                    <p class="mb-7">Grow Touch is an online shop for indoor plants operating in Jordan. We carefully choose the best house plants and deliver them to your doorstep, we also provide care guidance to make it easier to care for your plant and keep it healthy.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="card-header px-xl-5 py-xl-3" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link fwEbold text-uppercase text-left w-100 collapsed p-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    we build your dream <i class="fas fa-sort-down float-right"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body px-xl-5 py-0">
                                    <p class="mb-7">We carefully find the best and healthiest houseplants for you.
                                        Low-light is tolerant to pet-friendly plants, pots, and tools to grow your indoor forest. Plants look good and they will make you feel good.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="card-header px-xl-5 py-xl-3" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link fwEbold text-uppercase text-left w-100 collapsed p-0" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Plant Store <i class="fas fa-sort-down float-right"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body px-xl-5 py-0">
                                    <p class="mb-7">Grow Touch is a website mainly consists of a website that helps providers to sell their products and help customers get products and know-how to care for their plants via a digital platform. Users can access the platform anytime, anywhere.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2">
                            <div class="card-header px-xl-5 py-xl-3" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link fwEbold text-uppercase text-left w-100 collapsed p-0" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    make the world better <i class="fas fa-sort-down float-right"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                <div class="card-body px-xl-5 py-0">
                                    <p class="mb-7">
                                        Healthy Indoor Plants Delivered To Your Door.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="processStepSec container pt-xl-23 pb-xl-10 pt-lg-20 pb-lg-10 pt-md-16 pb-md-8 pt-10 pb-0">
        <div class="row">
            <header class="col-12 mainHeader mb-3 text-center">
                <h1 class="headingIV playfair fwEblod mb-4">Delivery Process</h1>
                <span class="headerBorder d-block mb-5"><img src="{{asset('/publicside/images/hbdr.png')}}" alt="Header Border" class="img-fluid img-bdr"></span>
            </header>
        </div>
        <div class="row">
            <div class="col-12 pl-xl-23 mb-lg-3 mb-10">
                <div class="stepCol position-relative bg-lightGray py-6 px-6">
                    <strong class="mainTitle text-uppercase mt-n8 mb-5 d-block text-center py-1 px-3">step 01</strong>
                    <h2 class="headingV fwEblod text-uppercase mb-3">Choose Your Products</h2>
                    {{-- <p class="mb-5">There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour. Both betanin</p> --}}
                </div>
            </div>
            <div class="col-12 pr-xl-23 mb-lg-3 mb-10">
                <div class="stepCol rightArrow position-relative bg-lightGray py-6 px-6 float-right">
                    <strong class="mainTitle text-uppercase mt-n8 mb-5 d-block text-center py-1 px-3">step 02</strong>
                    <h2 class="headingV fwEblod text-uppercase mb-3">Choose Payment Method</h2>
                    {{-- <p class="mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p> --}}
                </div>
            </div>
            <div class="col-12 pl-xl-23 mb-lg-3 mb-10">
                <div class="stepCol position-relative bg-lightGray py-6 px-6">
                    <strong class="mainTitle text-uppercase mt-n8 mb-5 d-block text-center py-1 px-3">step 03</strong>
                    <h2 class="headingV fwEblod text-uppercase mb-3">Share your location</h2>
                </div>
            </div>
            <div class="col-12 pr-xl-23 mb-lg-3 mb-10">
                <div class="stepCol rightArrow position-relative bg-lightGray py-6 px-6 float-right">
                    <strong class="mainTitle text-uppercase mt-n8 mb-5 d-block text-center py-1 px-3">step 04</strong>
                    <h2 class="headingV fwEblod text-uppercase mb-3">Get delivered fast</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="teamSec pt-xl-9 pb-xl-18 pt-lg-8 pb-lg-16 pt-md-8 pb-md-12 pt-0 pb-1">
        <div class="container">
            <div class="row">
                <header class="col-12 mainHeader mb-9 text-center">
                    <h1 class="headingIV playfair fwEblod mb-4">Meet Our Team</h1>
                    <span class="headerBorder d-block mb-5"><img src="{{asset('/publicside/images/hbdr.png')}}" alt="Header Border" class="img-fluid img-bdr"></span>
                </header>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4 mb-lg-0 mb-2">
                </div>
                <div class="col-12 col-sm-6 col-lg-4 mb-lg-0 mb-2">
                    <article class="teamBlock overflow-hidden">
                        <span class="imgWrap position-relative d-block w-100 mb-2">
                            <img src="https://avatars.githubusercontent.com/u/71583926?v=4" class="img-fluid" alt="Angham Bani Younes">
                            <ul class="list-unstyled position-absolute mb-0 d-flex justify-content-center socialNetworks">
                                <li><a href="javascript:void(0);" class="fab fa-facebook-f"></a></li>
                                <li><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
                                <li><a href="javascript:void(0);" class="fab fa-instagram"></a></li>
                            </ul>
                        </span>
                        <div class="textDetail w-100 text-center">
                            <h3>
                                <strong class="text-uppercase d-block fwEbold name mb-2"><a href="javascript:void(0);">Angham Bani Younes</a></strong>
                                <strong class="text-capitalize d-block desination">Founder</strong>
                            </h3>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection