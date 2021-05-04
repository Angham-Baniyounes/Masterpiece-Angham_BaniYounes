<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Grow Touch , plant, green, flower">
    <meta name="author" content="Angham Bani Younes">
    <meta name="description" content="Grow Touch is an online shop for indoor plants operating in Jordan. We carefully choose the best house plants and deliver them to your doorstep, we also provide care guidance to make it easier to care for your plant and keep it healthy.">
    <link rel="shortcut icon" href="{{asset('/dashboard/images/logo.png')}}" />
	<title>Grow Touch</title>
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700%7CRoboto:300,400,500,700,900&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('/publicside/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('/publicside/css/fontawesome.css')}}">
	<link rel="stylesheet" href="{{asset('/publicside/style.css')}}">
	<link rel="stylesheet" href="{{asset('/publicside/css/plugins.css')}}">
	<link rel="stylesheet" href="{{asset('/publicside/css/color.css')}}">
	<link rel="stylesheet" href="{{asset('/publicside/css/responsive.css')}}">
</head>
<body>
	<div id="pageWrapper">
		<!-- pageHeader -->
		<header id="header" class="pt-lg-5 pt-md-3 pt-2 position-absolute w-100">
			<div class="container-fluid px-xl-17 px-lg-5 px-md-3 px-0 d-flex flex-wrap">
				<div class="col-12 col-sm-6 col-lg-8 static-block">
					<!-- mainHolder -->
					<div class="mainHolder justify-content-center">
						<!-- pageNav1 -->
						<nav class="navbar navbar-expand-lg navbar-light p-0 pageNav1 position-static">
							<button type="button" class="navbar-toggle collapsed position-relative mt-md-2" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav mx-auto text-uppercase d-inline-block">
                                    <li class="nav-item">
										<a class="d-block" href="/">Grow <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" role="img" aria-labelledby="ackoyuxfv35dxfdewe81cr8b3s39l1kv" class="crayons-icon crayons-icon--default">
                                            <g clip-path="url(#clip0)" fill="#1AB3A6">
                                                <path d="M4.603 1.438a8.056 8.056 0 017.643 5.478 8.543 8.543 0 00-3.023 5.968H8.054C3.606 12.884 0 9.296 0 4.87V1.468a.03.03 0 01.03-.03h4.573zM23.97 6.515a.03.03 0 01.03.03v2.833c0 4.11-3.354 7.442-7.491 7.442h-2.881v5.726h-2.305V14.53l.022-1.145c.294-3.843 3.526-6.87 7.469-6.87h5.155z"></path>
                                            </g>
                                        </svg> Touch</a>
									</li>
                                    <li class="nav-item active">
										<a class="d-block" href="/">Home</a>
									</li>
                                    <li class="nav-item">
										<a class="d-block" href="/shop">shop</a>
									</li>
                                    <li class="nav-item">
										<a class="d-block" href="/aboutus">About Us</a>
									</li>
									<li class="nav-item">
										<a class="d-block" href="#contactus">Contact Us</a>
									</li>
								</ul>
							</div>
						</nav>
						<div class="logo pt-3">
							<a class="d-block text-success" href="/" >Grow <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" role="img" aria-labelledby="ackoyuxfv35dxfdewe81cr8b3s39l1kv" class="crayons-icon crayons-icon--default">
                                <g clip-path="url(#clip0)" fill="#1AB3A6">
                                    <path d="M4.603 1.438a8.056 8.056 0 017.643 5.478 8.543 8.543 0 00-3.023 5.968H8.054C3.606 12.884 0 9.296 0 4.87V1.468a.03.03 0 01.03-.03h4.573zM23.97 6.515a.03.03 0 01.03.03v2.833c0 4.11-3.354 7.442-7.491 7.442h-2.881v5.726h-2.305V14.53l.022-1.145c.294-3.843 3.526-6.87 7.469-6.87h5.155z"></path>
                                </g>
                            </svg> Touch</a>
						</div>
					</div>
				</div>
				<div class="col-8 col-sm-3 col-md-4 col-lg-3 order-sm-4 order-md-0 dis-none">
					<!-- wishList -->
					<ul class="nav nav-tabs wishList pt-xl-5 pt-lg-4 pt-3 mr-xl-3 mr-0 justify-content-end border-bottom-0">
						<li class="nav-item"><a class="nav-link icon-search" href="javascript:void(0);"></a></li>
						<li class="nav-item"><a class="nav-link position-relative icon-heart" href="javascript:void(0);"><span class="num rounded d-block">1</span></a></li>
						<li class="nav-item"><a class="nav-link position-relative icon-cart" href="/cart"><span class="num rounded d-block">2</span></a></li>
					
						<li class="dropdown nav-item pl-2">
							<a class="dropdown-toggle text-uppercase icon-profile" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="true" aria-expanded="false">&nbsp;</a>
							<div class="dropdown-menu pl-4 pr-4">
                                @guest
                                <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    @if (Route::has('register'))
                                        <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    @endif
                                @else
                                    <a id="navbarDropdown" class="dropdown-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                @endguest
								<a 
									class="dropdown-item" 
									href="{{ route('logout') }}" 
									onclick="event.preventDefault(); 
									document.getElementById('logout-form').submit();"
								>{{ __('Logout') }}</a>
								<a href="">
									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
										@csrf
									</form>
								</a>
                            </div>
							
						</li>
                    </ul>
				</div>
			</div>
		</header>
		<!-- main -->
		<main>
			<!-- introBlock -->
			<section class="introBlock position-relative">
				<div class="slick-fade">
					<div>
						<div class="align w-100 d-flex align-items-center bgCover" style="background-image: url({{asset('/publicside/images/b-bg.jpg')}});">
							<!-- holder -->
							<div class="container position-relative holder pt-xl-10 pt-0">
								<div class="row">
									<div class="col-12 col-xl-7">
										<div class="txtwrap pr-lg-10">
											<h1 class="fwEbold position-relative pb-lg-8 pb-4 mb-xl-7 mb-lg-6">Houseplant <span class="text-break d-block">The Perfect Choice.</span></h1>
											<p class="mb-xl-15 mb-lg-10">Grow Touch is an online shop for indoor plants operating in Jordan. We carefully choose the best house plants and deliver them to your doorstep,<br> we also provide care guidance to make it easier to care for your plant and keep it healthy.</p>
											<a href="/shop" class="btn btnTheme btnShop fwEbold text-white md-round py-md-3 px-md-4 py-2 px-3">Shop Now <i class="fas fa-arrow-right ml-2"></i></a>
										</div>
									</div>
									<div class="imgHolder">
										<img src="{{asset('/publicside/images/img77.png')}}" alt="image description" class="img-fluid w-100">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div>
						<div class="align w-100 d-flex align-items-center bgCover" style="background-image: url({{asset('/publicside/images/b-bg2.jpg')}});">
							<!-- holder -->
							<div class="container position-relative holder pt-xl-10 pt-0">
								<!-- py-12 pt-lg-30 pb-lg-25 -->
								<div class="row">
									<div class="col-12 col-xl-7">
										<div class="txtwrap pr-lg-10">
											<span class="title d-block text-uppercase fwEbold position-relative pl-2 mb-lg-5 mb-sm-3 mb-1">wellcome to Grow Touch</span>
											<h2 class="fwEbold position-relative mb-xl-7 mb-lg-5">Plants Gonna Make  <span class="text-break d-block">People Happy.</span></h2>
											<p class="mb-xl-15 mb-lg-10"> <q>Plants give us oxygen for the lungs and for the soul. — Linda Solegato</q> </p>
											<a href="/shop" class="btn btnTheme btnShop fwEbold text-white md-round py-2 px-3 py-md-3 px-md-4">Shop Now <i class="fas fa-arrow-right ml-2"></i></a>
										</div>
									</div>
									<div class="imgHolder2">
										<img src="{{asset('/publicside/images/img78.png')}}" alt="image description" class="img-fluid w-100">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div>
						<div class="align w-100 d-flex align-items-center bgCover" style="background-image: url({{asset('/publicside/images/b-bg3.jpg')}});">
							<!-- holder -->
							<div class="container position-relative holder pt-xl-10 pt-0">
								<!-- py-12 pt-lg-30 pb-lg-25 -->
								<div class="row">
									<div class="col-12 col-xl-7">
										<div class="txtwrap pr-lg-10">
											<span class="title d-block text-uppercase fwEbold position-relative pl-2 mb-lg-5 mb-sm-3 mb-1">welcome to Grow Touch</span>
											<h2 class="fwEbold position-relative mb-xl-7 mb-lg-5">Plants for healthy</h2>
											<p class="mb-xl-15 mb-lg-10">plants are always a great gift for those you hold dear, or even yourself. Whether you're shopping for a birthday gift for your mom or you want to surprise your husband at the office with a lush plant, we've got you covered. Send plants today and brighten the week of a friend, family member, or special someone.</p>
											<a href="/shop" class="btn btnTheme btnShop fwEbold text-white md-round py-2 px-3 py-md-3 px-md-4">Shop Now <i class="fas fa-arrow-right ml-2"></i></a>
										</div>
									</div>
									<div class="imgHolder3">
										<img src="{{asset('/publicside/images/img79.png')}}" alt="image description" class="img-fluid w-100">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slickNavigatorsWrap">
					<a href="#" class="slick-prev"><i class="icon-leftarrow"></i></a>
					<a href="#" class="slick-next"><i class="icon-rightarrow"></i></a>
				</div>
			</section>
			<!-- chooseUs-sec -->
			<section class="chooseUs-sec container pt-xl-22 pt-lg-20 pt-md-16 pt-10 pb-xl-12 pb-md-7 pb-2">
				<div class="row">
					<div class="col-12 col-lg-6 mb-lg-0 mb-1">
						<img src="{{asset('/publicside/images/image-01.png')}}" style="height: 100%;
                        width: 90%;" alt="plant image" class="img-fluid">
					</div>
					<div class="col-12 col-lg-6 pr-4">
						<h2 class="headingII fwEbold playfair position-relative mb-6 pb-5">Why choose us ?</h2>
						<p class="mb-xl-14 mb-lg-2">Grow Touch is an online shop for indoor plants operating in Jordan. We carefully choose the best house plants and deliver them to your doorstep,<br> we also provide care guidance to make it easier to care for your plant and keep it healthy.</p>
						<!-- chooseList -->
						<ul class="list-unstyled chooseList">
							<li class="d-flex justify-content-start mb-xl-7 mb-lg-5 mb-3">
								<span class="icon icon-plant"></span>
								<div class="alignLeft d-flex justify-content-start flex-wrap">
									<h3 class="headingIII fwEbold mb-2">Hand Planted</h3>
									<p>There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form.</p>
								</div>
							</li>
							<li class="d-flex justify-content-start mb-xl-6 mb-lg-5 mb-4">
								<span class="icon icon-ic-plant"></span>
								<div class="alignLeft d-flex justify-content-start flex-wrap">
									<h3 class="headingIII fwEbold mb-2">Natural Sunlight</h3>
									<p>It is a long established fact that a reader will be distracted by the reable content of a page.</p>
								</div>
							</li>
							<li class="d-flex justify-content-start">
								<span class="icon icon-desert"></span>
								<div class="alignLeft d-flex justify-content-start flex-wrap">
									<h3 class="headingIII fwEbold mb-2">Clean Air</h3>
									<p>There are many variations of passages of lorem ipsum available, but the majority have suffered.</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</section>
			<!-- featureSec -->
			<section class="featureSec container-fluid overflow-hidden pt-xl-1 pt-lg-5 pt-md-6 pt-3 pb-xl-8 pb-lg-3 pb-md-2 px-xl-10 px-lg-5">
				<!-- mainHeader -->
				<header class="col-12 mainHeader mb-7 text-center">
					<h1 class="headingIV playfair fwEblod mb-4">Our Products</h1>
					<span class="headerBorder d-block mb-md-5 mb-3"><img src="{{asset('/publicside/images/hbdr.png')}}" alt="Header Border" class="img-fluid img-bdr"></span>
					<p>Shop online hand-picked plants, safely packaged and delivered to your home 🌿🌵</p>
				</header>
				<div class="col-12 p-0 overflow-hidden d-flex flex-wrap">
                    @yield('products')
				</div>
			</section>
			<!-- contactListBlock -->
			<div class="contactListBlock container overflow-hidden pt-xl-8 pt-lg-10 pt-md-8 pt-4 pb-xl-12 pb-lg-10 pb-md-4 pb-1">
				<div class="row">
					<div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
						<!-- contactListColumn -->
						<div class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-6 px-md-3 px-3 d-flex">
							<span class="icon icon-van"></span>
							<div class="alignLeft pl-2">
								<strong class="headingV fwEbold d-block mb-1">Free shipping order</strong>
								<p class="m-0">On orders over  50 JD</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
						<!-- contactListColumn -->
						<div class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-6 px-md-3 px-3 d-flex">
							<span class="icon icon-gift"></span>
							<div class="alignLeft pl-2">
								<strong class="headingV fwEbold d-block mb-1">Special gift card</strong>
								<p class="m-0">The perfect gift idea</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
						<!-- contactListColumn -->
						<div class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-4 px-md-2 px-3 d-flex">
							<span class="icon icon-recycle"></span>
							<div class="alignLeft pl-2">
								<strong class="headingV fwEbold d-block mb-1">Return &amp; exchange</strong>
								<p class="m-0">Free return within 3 days</p>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
						<!-- contactListColumn -->
						<div class="contactListColumn border overflow-hidden py-xl-5 py-md-3 py-2 px-xl-6 px-md-3 px-3 d-flex">
							<span class="icon icon-call"></span>
							<div class="alignLeft pl-2">
								<strong class="headingV fwEbold d-block mb-1">Support 24 / 7</strong>
								<p class="m-0">Customer support</p>
							</div>
						</div>
					</div>
				</div>
			</div>
            {{-- Hot Products --}}
            <section class="dealSecHolder container-fluid overflow-hidden py-xl-12 py-lg-10 py-md-8 py-5">
				<!-- mainHeader -->
				<header class="col-12 mainHeader mb-7 text-center">
					<h1 class="headingIV playfair fwEblod mb-5"><span style="color:orange;"> Hot </span>Products</h1>
					<span class="headerBorder d-block mb-md-5 mb-3"><img src="{{asset('/publicside/images/hbdr.png')}}" alt="Header Border" class="img-fluid img-bdr"></span>
					<p class="mb-6">There are many products are available have <span style="color:orange; font-weight:bolder; font-size:1rem">Up 50% offer.</span> </p>
				</header>
				<!-- dealSlider -->
				<div class="dealSlider w-100 px-xl-10 px-lg-5 px-md-2">
                    @yield('hotProducts')
				</div>
			</section>

			{{-- Sale Products --}}
			<section class="dealSecHolder container-fluid overflow-hidden py-xl-12 py-lg-10 py-md-8 py-5">
				<!-- mainHeader -->
				<header class="col-12 mainHeader mb-7 text-center">
					<h1 class="headingIV playfair fwEblod mb-5"><span style="color:green;">Sale </span>Products</h1>
					<span class="headerBorder d-block mb-md-5 mb-3"><img src="{{asset('/publicside/images/hbdr.png')}}" alt="Header Border" class="img-fluid img-bdr"></span>
					<p class="mb-6">There are many products are available.</p>
				</header>
				<!-- dealSlider -->
                
				<div class="dealSlider w-100 px-xl-10 px-lg-5 px-md-2">
                    @yield('salesProducts')
				</div>
			</section>
            

            <!-- subscribeSecBlock -->
			<div class="container-fluid px-xl-20 px-lg-14" id=contactus>
				<section class="subscribeSecBlock bgCover col-12 pt-xl-24 pb-xl-12 pt-lg-20 pt-md-16 pt-10 pb-md-8 pb-5" style="background-image: url({{asset('/publicside/images/n-bg.jpg')}})">
					<header class="col-12 mainHeader mb-sm-9 mb-6 text-center">
						<h1 class="headingIV playfair fwEblod mb-4">Contact Us</h1>
						<span class="headerBorder d-block mb-md-5 mb-3"><img src="{{asset('/publicside/images/hbdr.png')}}" alt="Header Border" class="img-fluid img-bdr"></span>
						<p class="mb-sm-6 mb-3">Enter Your email address to join our mailing list and keep yourself update</p>
					</header>
					<form class="emailForm1 mx-auto overflow-hidden d-flex flex-wrap">
						<input type="email" class="form-control px-4 border-0" placeholder="Enter your mail...">
						<button type="submit" class="btn btnTheme btnShop fwEbold text-white py-3 px-4">Send<i class="fas fa-arrow-right ml-2"></i></button>
					</form>
				</section>
			</div>

			<!-- footerHolder -->
			<aside class="footerHolder container-fluid overflow-hidden px-xl-20 px-lg-14 pt-xl-12 pb-xl-8 pt-lg-12 pt-md-8 pt-10 pb-lg-8">
				<div class="d-flex flex-wrap flex-lg-nowrap">
					<div class="coll-1 pr-3 mb-sm-4 mb-3 mb-lg-0">
						<h3 class="headingVI fwEbold text-uppercase mb-7">Contact Us</h3>
						<ul class="list-unstyled footerContactList mb-3">
							<li class="mb-3 d-flex flex-nowrap"><span class="icon icon-place mr-3"></span> <address class="fwEbold m-0">Address: Amman Al-Bayader, Jordan.</address></li>
							<li class="mb-3 d-flex flex-nowrap"><span class="icon icon-phone mr-3"></span> <span class="leftAlign">Phone : <a href="javascript:void(0);">(+962) 77 608 4114</a></span></li>
							<li class="email d-flex flex-nowrap"><span class="icon icon-email mr-2"></span> <span class="leftAlign">Email:  <a href="javascript:void(0);">angham.baniyounes@gmail.com</a></span></li>
						</ul>
						<ul class="list-unstyled followSocailNetwork d-flex flex-nowrap">
							<li class="fwEbold mr-xl-11 mr-sm-6 mr-4">Follow  us:</li>
							<li class="mr-xl-6 mr-sm-4 mr-2"><a href="javascript:void(0);" class="fab fa-facebook-f"></a></li>
							<li class="mr-xl-6 mr-sm-4 mr-2"><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
							<li class="mr-xl-6 mr-sm-4 mr-2"><a href="javascript:void(0);" class="fab fa-pinterest"></a></li>
							<li class="mr-2"><a href="javascript:void(0);" class="fab fa-google-plus-g"></a></li>
						</ul>
					</div>
					<div class="coll-2 mb-sm-4 mb-3 mb-lg-0">
						<h3 class="headingVI fwEbold text-uppercase mb-6">Information</h3>
						<ul class="list-unstyled footerNavList">
							<li class="mb-1"><a href="javascript:void(0);">New Products</a></li>
							<li class="mb-2"><a href="javascript:void(0);">Top Sellers</a></li>
							<li class="mb-2"><a href="javascript:void(0);">About Our Shop</a></li>
							<li><a href="javascript:void(0);">Privacy policy</a></li>
						</ul>
					</div>
					<div class="coll-3 mb-sm-4 mb-3 mb-lg-0">
						<h3 class="headingVI fwEbold text-uppercase mb-6">My Account</h3>
						<ul class="list-unstyled footerNavList">
							<li class="mb-1"><a href="javascript:void(0);">My account</a></li>
							<li class="mb-2"><a href="javascript:void(0);">Discount</a></li>
							<li class="mb-2"><a href="javascript:void(0);">Orders history</a></li>
							<li><a href="javascript:void(0);">Personal information</a></li>
						</ul>
					</div>
					<div class="coll-4 mb-sm-4 mb-3 mb-lg-0">
						<h3 class="headingVI fwEbold text-uppercase mb-7 pl-xl-14 pl-lg-10">Popular Tag</h3>
						<ul class="list-unstyled tagNavList d-flex flex-wrap justify-content-lg-end mb-0">
							<li class="text-center mb-2 mr-2"><a href="javascript:void(0);" class="md-round d-block py-2 px-2">Trend</a></li>
							<li class="text-center mb-2 mr-2"><a href="javascript:void(0);" class="md-round d-block py-2 px-2">Decor</a></li>
							<li class="text-center mb-2 mr-2"><a href="javascript:void(0);" class="md-round d-block py-2 px-2">Plant</a></li>
                            <li class="text-center mb-2 mr-2"><a href="javascript:void(0);" class="md-round d-block py-2 px-2">Flower</a></li>
							<li class="text-center mb-2 mr-2"><a href="javascript:void(0);" class="md-round d-block py-2 px-2">Garden</a></li>
							<li class="text-center mb-2 mr-2"><a href="javascript:void(0);" class="md-round d-block py-2 px-2">Cactus</a></li>
						</ul>
					</div>
				</div>
			</aside>
		</main>
		<!-- footer -->
		<footer id="footer" class="container-fluid overflow-hidden px-lg-20 bg-dark">
			<div class="copyRightHolder text-center pt-lg-5 pb-lg-4 py-3">
				<p class="mb-0">Coppyright 2021 by <a href="/" style="color: green; font-size:18px">Grow Touch Store</a> - All right reserved</p>
			</div>
		</footer>
	</div>
	<!-- include jQuery library -->
	<script src="{{asset('/publicside/js/jquery-3.4.1.min.js')}}"></script>
	<!-- include bootstrap popper JavaScript -->
	<script src="{{asset('/publicside/js/popper.min.js')}}"></script>
	<!-- include bootstrap JavaScript -->
	<script src="{{asset('/publicside/js/bootstrap.min.js')}}"></script>
	<!-- include custom JavaScript -->
	<script src="{{asset('/publicside/js/jqueryCustome.js')}}"></script>
</body>

<!-- Mirrored from htmlbeans.com/html/botanical// by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Mar 2021 21:10:34 GMT -->
</html>