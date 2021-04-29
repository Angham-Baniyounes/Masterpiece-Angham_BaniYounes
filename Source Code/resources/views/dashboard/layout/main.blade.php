<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="“Grow Touch” website mainly consists of a website that helps providers to sell their products and help customers get products and know-how to care for their plants via a digital platform. Users can access the platform anytime, anywhere.">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="Angham Bani Younes">
        <link rel="shortcut icon" href="{{asset('/dashboard/images/logo .png')}}" />
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Grow Touch | @yield('title') </title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

        <link href="{{asset('/dashboard/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('/dashboard/plugins/font-awesome/css/all.min.css')}}" rel="stylesheet">

        <!-- Theme Styles -->
        <link href="{{asset('/dashboard/css/connect.min.css')}}" rel="stylesheet">
        <link href="{{asset('/dashboard/css/admindashboard.css')}}" rel="stylesheet">
        <link href="{{asset('/dashboard/css/dark_theme.css')}}" rel="stylesheet">
        <link href="{{asset('/dashboard/css/custom.css')}}" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('/dashboard/css/layout_style.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            .page-item.active .page-link {
                background-color:#00694b;
                border-color:#00694b;
            }
            .page-link {
                position: relative;
                display: block;
                padding: 0.4rem 0.75rem;
                margin-left: -1px;
                line-height: 1.25;
                color: #00694b;
                background-color: #fff;
                border: 1px solid #00694b;
            }
        </style>
    </head>
    <body>
        <div class='loader'>
            <div class='spinner-grow text-primary' role='status'>
                <span class='sr-only'>Loading...</span>
            </div>
        </div>
        <div class="connect-container align-content-stretch d-flex flex-wrap">
            <div class="page-sidebar">
                <div class="logo-box">
                    <a href="admin" class="logo-text">
                        Grow Touch
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" role="img" aria-labelledby="ackoyuxfv35dxfdewe81cr8b3s39l1kv" class="crayons-icon crayons-icon--default">
                            <g clip-path="url(#clip0)" fill="#1AB3A6">
                                <path d="M4.603 1.438a8.056 8.056 0 017.643 5.478 8.543 8.543 0 00-3.023 5.968H8.054C3.606 12.884 0 9.296 0 4.87V1.468a.03.03 0 01.03-.03h4.573zM23.97 6.515a.03.03 0 01.03.03v2.833c0 4.11-3.354 7.442-7.491 7.442h-2.881v5.726h-2.305V14.53l.022-1.145c.294-3.843 3.526-6.87 7.469-6.87h5.155z"></path>
                            </g>
                        </svg>
                    </a>
                    <a href="#" id="sidebar-close">
                        <i class="material-icons">close</i>
                    </a> 
                    <a href="#" id="sidebar-state">
                        <i class="material-icons">adjust</i>
                        <i class="material-icons compact-sidebar-icon">panorama_fish_eye</i>
                    </a>
                </div>
                <div class="page-sidebar-inner slimscroll">
                    <ul class="accordion-menu">
                        <li class="sidebar-title">
                            Dashboard
                        </li>
                        <li class="active-page">
                            <a href="/admins">
                                <i class="material-icons">admin_panel_settings</i> 
                                Manage Admin
                            </a>
                        </li>
                        <li>
                            <a href="/categories">
                                <i class="material-icons">category</i>
                                Manage Category
                            </a>
                        </li>
                        <li>
                            <a href="/subcategories">
                                <i class="material-icons-outlined">category</i>
                                Manage Subcategory
                            </a>
                        </li>
                        <li>
                            <a href="/products">
                                <i class="material-icons-outlined">inventory_2</i>
                                Manage Product
                            </a>
                        </li>
                        <li>
                            <a href="/orders">
                                <i class="material-icons-outlined">shopping_cart</i>
                                Manage Orders
                            </a>
                        </li>
                        <li>
                            <a href="/users">
                                <i class="material-icons-outlined">manage_accounts</i>
                                Manage User
                            </a>
                        </li>
                        <li>
                            <a href="/feedbacks">
                                <i class="material-icons">rate_review</i>
                                Manage Feedback
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-container">
                <div class="page-header">
                    <nav class="navbar navbar-expand">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <ul class="navbar-nav">
                            <li class="nav-item small-screens-sidebar-link">
                                <a href="#" class="nav-link"><i class="material-icons-outlined">menu</i></a>
                            </li>
                            <li class="nav-item nav-profile dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{-- <img src="{{asset('/dashboard/images/avatars/profile-image-1.png')}}" alt="profile image">  --}}
                                    {{-- <img 
                                        src="{{asset('images')}}/{{$admin->image}}" 
                                        width="65px" 
                                        alt="{{$admin['name']}} profile image"
                                    > --}}
                                    {{-- <span>{{$admin->name}}</span><i class="material-icons dropdown-icon">keyboard_arrow_down</i> --}}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Account</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    <!-- <a class="dropdown-item" href="#">Log out</a> -->
                                </div>
                            </li>
                        </ul>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                {{-- <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="material-icons-outlined">mail</i></a>
                                </li> --}}
                                {{-- <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="material-icons-outlined">notifications</i></a>
                                </li> --}}
                                <li class="nav-item">
                                    <a href="#" class="nav-link" id="dark-theme-toggle">
                                        <i class="material-icons-outlined">brightness_6</i>
                                        <i class="material-icons">brightness_6</i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="navbar-search">
                            <form>
                                <div class="form-group">
                                    <input type="text" name="search" id="nav-search" placeholder="Search...">
                                </div>
                            </form>
                        </div>
                    </nav>
                </div>
                <div class="page-content">
                    <div class="page-info">
                        @yield('breadcrumb')
                    </div>
                    <div class="main-wrapper">
                        <div class="row">
                            {{-- content --}}
                            @yield('content')
                        </div>
                    </div>
                </div>
                <div class="page-footer">
                    <div class="row">
                        <div class="col-md-12">
                            <span class="footer-text">Grow Touch <svg xmlns="http://www.w3.org/2000/svg" width="24" height="18" viewBox="0 0 24 24" fill="none" role="img" aria-labelledby="ackoyuxfv35dxfdewe81cr8b3s39l1kv" class="crayons-icon crayons-icon--default">
                                <g clip-path="url(#clip0)" fill="#1AB3A6">
                                    <path d="M4.603 1.438a8.056 8.056 0 017.643 5.478 8.543 8.543 0 00-3.023 5.968H8.054C3.606 12.884 0 9.296 0 4.87V1.468a.03.03 0 01.03-.03h4.573zM23.97 6.515a.03.03 0 01.03.03v2.833c0 4.11-3.354 7.442-7.491 7.442h-2.881v5.726h-2.305V14.53l.022-1.145c.294-3.843 3.526-6.87 7.469-6.87h5.155z"></path>
                                </g>
                            </svg> &copy; 2021 by Angham Bani Younes</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Javascripts -->
        <script src="{{asset('/dashboard/plugins/jquery/jquery-3.4.1.min.js')}}"></script>
        <script src="{{asset('/dashboard/plugins/bootstrap/popper.min.js')}}"></script>
        <script src="{{asset('/dashboard/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('/dashboard/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('/dashboard/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('/dashboard/plugins/apexcharts/dist/apexcharts.min.js')}}"></script>
        <script src="{{asset('/dashboard/plugins/blockui/jquery.blockUI.js')}}"></script>
        <script src="{{asset('/dashboard/plugins/flot/jquery.flot.min.js')}}"></script>
        <script src="{{asset('/dashboard/plugins/flot/jquery.flot.time.min.js')}}"></script>
        <script src="{{asset('/dashboard/plugins/flot/jquery.flot.symbol.min.js')}}"></script>
        <script src="{{asset('/dashboard/plugins/flot/jquery.flot.resize.min.js')}}"></script>
        <script src="{{asset('/dashboard/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('/dashboard/js/connect.min.js')}}"></script>
        <script src="{{asset('/dashboard/js/pages/dashboard.js')}}"></script>
        <script src={{asset("admin_assets/js/bootstrap.js")}}> </script>
        <script>
            $(function() {
                $('ul.nav li').on('click', function() {
                        $(this).parent().find('li.active').removeClass('active');
                        $(this).addClass('active-page');
                });
            });
            $(function() {
                $('ul.nav li').on('click', function() {
                        $(this).parent().find('li.active').removeClass('active');
                        $(this).addClass('active-page');
                });
            });
        </script>
    </body>
</html>