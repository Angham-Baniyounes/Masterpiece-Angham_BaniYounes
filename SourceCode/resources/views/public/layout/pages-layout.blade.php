<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Grow Touch , plant, green, flower">
    <meta name="author" content="Angham Bani Younes">
    <meta name="description" content="@yield('description')">
    <link rel="shortcut icon" href="{{asset('/dashboard/images/logo.png')}}" />
	<title>@yield('title')</title>
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700%7CRoboto:300,400,500,700,900&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('/publicside/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('/publicside/css/fontawesome.css')}}">
	<link rel="stylesheet" href="{{asset('/publicside/style.css')}}">
	<link rel="stylesheet" href="{{asset('/publicside/css/plugins.css')}}">
	<link rel="stylesheet" href="{{asset('/publicside/css/color.css')}}">
	<link rel="stylesheet" href="{{asset('/publicside/css/responsive.css')}}">
	
    <style>
        .page-item.active .page-link {
			z-index: 1;
			color: #fff;
			background-color: #5ba515 !important;
			border-color: #5ba515 !important;
		}
    </style>
</head>
<body>
	<div id="pageWrapper">
		<header id="header" class="position-relative">
			<div class="headerHolder container pt-lg-5 pb-lg-7 py-4">
				<div class="row">
					<div class="col-2 col-sm-7 col-md-2 col-lg-8 static-block">
						<!-- mainHolder -->
						<div class="mainHolder pt-lg-5 pt-3 justify-content-center">
							<!-- pageNav2 -->
							<nav class="navbar navbar-expand-lg navbar-light p-0 pageNav2 position-static">
								<button type="button" class="navbar-toggle collapsed position-relative" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarNav">
									<ul class="navbar-nav mx-auto text-uppercase d-inline-block">
                                        <li  class="nav-item">
                                            <a class="d-block text-success" href="/" >Grow <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" role="img" aria-labelledby="ackoyuxfv35dxfdewe81cr8b3s39l1kv" class="crayons-icon crayons-icon--default">
                                                <g clip-path="url(#clip0)" fill="#1AB3A6">
                                                    <path d="M4.603 1.438a8.056 8.056 0 017.643 5.478 8.543 8.543 0 00-3.023 5.968H8.054C3.606 12.884 0 9.296 0 4.87V1.468a.03.03 0 01.03-.03h4.573zM23.97 6.515a.03.03 0 01.03.03v2.833c0 4.11-3.354 7.442-7.491 7.442h-2.881v5.726h-2.305V14.53l.022-1.145c.294-3.843 3.526-6.87 7.469-6.87h5.155z"></path>
                                                </g>
                                            </svg> Touch</a></li>
										<li class="nav-item">
											<a class="dropdown-toggle d-block" href="/" role="button">home</a>
										</li>
										<li class="nav-item active">
											<a class="dropdown-toggle d-block" href="/shop" role="button">Shop</a>
										</li>
										<li class="nav-item">
											<a class="d-block" href="/aboutus">About</a>
										</li>
										<li class="nav-item">
											<a class="d-block" href="#contactus">contact</a>
										</li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
					<div class="col-3 col-sm-3 col-md-9 col-lg-3">
						<ul class="nav nav-tabs wishListII pt-5 justify-content-end border-bottom-0">
							<li class="nav-item ml-0"><a class="nav-link icon-search" href="javascript:void(0);"></a></li>
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
                                        <a id="navbarDropdown" class="dropdown-item dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>
    
                                    @endguest
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a 
                                            class="dropdown-item" 
                                            href="{{ route('logout') }}" 
                                            onclick="event.preventDefault(); 
                                            document.getElementById('logout-form').submit();"
                                        >{{ __('Logout') }}</a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- main -->
		<main>

			<!-- introBannerHolder -->
			<section class="introBannerHolder d-flex w-100 bgCover" style="background-image: url({{asset('/publicside/images/b-bg7.jpg')}});">
				<div class="container">
					<div class="row">
                        @yield('breadcrumb')
					</div>
				</div>
			</section>
			<!-- twoColumns -->
			<div class="twoColumns container pt-lg-23 pb-lg-20 pt-md-16 pb-md-4 pt-10 pb-4">
				@yield('content')
			</div>
			<div class="container mb-lg-24 mb-md-16 mb-10" id="contactus">
				<!-- subscribeSecBlock -->
				<section class="subscribeSecBlock bgCover col-12 pt-lg-24 pb-lg-12 pt-md-16 pb-md-8 py-10" style="background-image: url({{asset('/publicside/images/n-bg3.jpg')}})">
					<header class="col-12 mainHeader mb-9 text-center">
						<h1 class="headingIV playfair fwEblod mb-4">Contact Us</h1>
						<span class="headerBorder d-block mb-5"><img src="{{asset('/publicside/images/hbdr.png')}}" alt="Header Border" class="img-fluid img-bdr"></span>
						<p class="mb-6">Enter Your email address to join our mailing list and keep yourself update</p>
					</header>
					<form class="emailForm1 mx-auto overflow-hidden d-flex flex-wrap">
						<input type="email" class="form-control px-4 border-0" placeholder="Enter your mail...">
						<button type="submit" class="btn btnTheme btnShop fwEbold text-white py-3 px-4 py-md-3 px-md-4">Send<i class="fas fa-arrow-right ml-2"></i></button>
					</form>
				</section>
			</div>
			<!-- footerHolder -->
			<aside class="footerHolder overflow-hidden bg-lightGray pt-xl-23 pb-xl-8 pt-lg-10 pb-lg-8 pt-md-12 pb-md-8 pt-10">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-6 col-lg-4 mb-lg-0 mb-4">
							<h3 class="headingVI fwEbold text-uppercase mb-7">Contact Us</h3>
							<ul class="list-unstyled footerContactList mb-3">
								<li class="mb-3 d-flex flex-nowrap pr-xl-20 pr-0"><span class="icon icon-place mr-3"></span> <address class="fwEbold m-0">Address: Amman Al-Bayader, Jordan.</address></li>
								<li class="mb-3 d-flex flex-nowrap"><span class="icon icon-phone mr-3"></span> <span class="leftAlign">Phone : <a href="javascript:void(0);">(+962) 77 608 4114</a></span></li>
								<li class="email d-flex flex-nowrap"><span class="icon icon-email mr-2"></span> <span class="leftAlign">Email:  <a href="javascript:void(0);">angham.baniyounes@gmail.com</a></span></li>
							</ul>
							<ul class="list-unstyled followSocailNetwork d-flex flex-nowrap">
								<li class="fwEbold mr-xl-11 mr-md-8 mr-3">Follow  us:</li>
								<li class="mr-xl-6 mr-md-5 mr-2"><a href="javascript:void(0);" class="fab fa-facebook-f"></a></li>
								<li class="mr-xl-6 mr-md-5 mr-2"><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
								<li class="mr-xl-6 mr-md-5 mr-2"><a href="javascript:void(0);" class="fab fa-pinterest"></a></li>
								<li class="mr-2"><a href="javascript:void(0);" class="fab fa-google-plus-g"></a></li>
							</ul>
						</div>
						<div class="col-12 col-sm-6 col-lg-3 pl-xl-14 mb-lg-0 mb-4">
							<h3 class="headingVI fwEbold text-uppercase mb-6">Information</h3>
							<ul class="list-unstyled footerNavList">
								<li class="mb-1"><a href="javascript:void(0);">New Products</a></li>
								<li class="mb-2"><a href="javascript:void(0);">Top Sellers</a></li>
								<li class="mb-2"><a href="javascript:void(0);">Our Blog</a></li>
								<li class="mb-2"><a href="javascript:void(0);">About Our Shop</a></li>
								<li><a href="javascript:void(0);">Privacy policy</a></li>
							</ul>
						</div>
						<div class="col-12 col-sm-6 col-lg-3 pl-xl-12 mb-lg-0 mb-4">
							<h3 class="headingVI fwEbold text-uppercase mb-7">My Account</h3>
							<ul class="list-unstyled footerNavList">
								<li class="mb-1"><a href="javascript:void(0);">My account</a></li>
								<li class="mb-2"><a href="javascript:void(0);">Discount</a></li>
								<li class="mb-2"><a href="javascript:void(0);">Orders history</a></li>
								<li><a href="javascript:void(0);">Personal information</a></li>
							</ul>
						</div>
						<div class="col-12 col-sm-6 col-lg-2 pl-xl-18 mb-lg-0 mb-4">
							<h3 class="headingVI fwEbold text-uppercase mb-5">PRODUCTS</h3>
							<ul class="list-unstyled footerNavList">
								<li class="mb-2"><a href="javascript:void(0);">Delivery</a></li>
								<li class="mb-2"><a href="javascript:void(0);">Legal notice</a></li>
								<li class="mb-2"><a href="javascript:void(0);">Prices drop</a></li>
								<li class="mb-2"><a href="javascript:void(0);">New products</a></li>
								<li><a href="javascript:void(0);">Best sales</a></li>
							</ul>
						</div>
					</div>
				</div>
			</aside>
		</main>
		<!-- footer -->
		<footer id="footer" class="overflow-hidden bg-dark">
			<div class="container">
				<div class="row">
					<div class="col-12 copyRightHolder v-II text-center pt-md-3 pb-md-4 py-2">
						<p class="mb-0">Coppyright 2021 by <a href="/" style="color: green; font-size:18px">Grow Touch Store</a> - All right reserved</p>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<script src="{{asset('/publicside/js/jquery-3.4.1.min.js')}}"></script>
	<!-- include bootstrap popper JavaScript -->
	<script src="{{asset('/publicside/js/popper.min.js')}}"></script>
	<!-- include bootstrap JavaScript -->
	<script src="{{asset('/publicside/js/bootstrap.min.js')}}"></script>
	<!-- include custom JavaScript -->
	<script src="{{asset('/publicside/js/jqueryCustome.js')}}"></script>
	@yield('script')
</body>

<!-- Mirrored from htmlbeans.com/html/botanical/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Mar 2021 21:13:28 GMT -->
</html>