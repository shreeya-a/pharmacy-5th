    <!--====== Navbar Style 7 Part Start ======-->
    <div class="navigation">
        <header class="navbar-style-7 position-relative">
            <div class="container">
                <!-- navbar mobile Start -->
                <div class="navbar-mobile d-lg-none">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <!-- navbar cart start -->
                            <div class="navbar-toggle icon-text-btn">
                                <a class="icon-btn primary-icon-text mobile-menu-open-7" href="javascript:void(0)">
                                    <i class="mdi mdi-menu"></i>
                                </a>
                            </div>
                            <!-- navbar cart Ends -->
                        </div>
                        <div class="col-6">
                            <!-- desktop logo Start -->
                            <div class="mobile-logo text-center">
                                <!-- <a href="index.html"><img src="{{asset('userpanel/assets/images/logo.png')}}" alt="Logo"></a> -->
                                <a href="index.html"><img src="{{asset('userpanel/assets/images/logo.svg')}}" alt="Logo"></a>
                            </div>
                            <!-- desktop logo Ends -->
                        </div>
                        <div class="col-3">
                            <!-- navbar cart start -->
                            <div class="navbar-cart">
                                <a class="icon-btn primary-icon-text icon-text-btn" href="{{route('viewCart')}}">
                                    <img src="{{asset('userpanel/assets/images/icon-svg/cart-1.svg')}}" alt="Icon">
                                    <span class="icon-text text-style-1">88</span>
                                </a>

                                <div class="navbar-cart-dropdown">
                                    <div class="checkout-style-2">
                                        <div class="checkout-header d-flex justify-content-between">
                                            <h6 class="title">Shopping Cart</h6>
                                        </div>

                                        <div class="checkout-table table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td class="checkout-product">
                                                            <div class="product-cart d-flex">
                                                                <div class="product-thumb">
                                                                    <img src="{{asset('userpanel/assets/images/product-cart/product-1.png')}}" alt="Product">
                                                                </div>
                                                                <div class="product-content media-body">
                                                                    <h5 class="title">
                                                                        <a href="product-details-page.html">Hollow Port</a>
                                                                    </h5>
                                                                    <ul>
                                                                        <li><span>Brown</span></li>
                                                                        <li><span>XL</span></li>
                                                                        <li>
                                                                            <a class="delete" href="javascript:void(0)">
                                                                                <i class="mdi mdi-delete"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="checkout-quantity">
                                                            <div class="product-quantity d-inline-flex">
                                                                <button type="button" id="sub" class="sub">
                                                                    <i class="mdi mdi-minus"></i>
                                                                </button>
                                                                <input type="text" value="1">
                                                                <button type="button" id="add" class="add">
                                                                    <i class="mdi mdi-plus"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                        <td class="checkout-price">
                                                            <p class="price">$36.00</p>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="checkout-footer">
                                            <div class="checkout-sub-total d-flex justify-content-between">
                                                <p class="value">Subtotal Price:</p>
                                                <p class="price">$144</p>
                                            </div>
                                            <br>
                                            <div class="checkout-btn">
                                                <a href="cart-page.html" class="main-btn primary-btn-border">View Cart</a>
                                                <a href="checkout-page.html" class="main-btn primary-btn">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- navbar cart Ends -->
                        </div>
                    </div>
                    <!-- navbar search start -->
                    <div class="navbar-search mt-15 search-style-5">

                        <div class="search-input">
                            <input type="text" placeholder="Search">
                        </div>
                        <div class="search-btn">
                            <button><i class="lni lni-search-alt"></i></button>
                        </div>
                    </div>
                    <!-- navbar search Ends -->
                </div>
                <!-- navbar mobile Start -->
            </div>

            <div class="navbar-container navbar-sidebar-7">
                <!-- navbar close  Ends -->
                <div class="navbar-close d-lg-none">
                    <a class="close-mobile-menu-7" href="javascript:void(0)"><i class="mdi mdi-close"></i></a>
                </div>
                <!-- navbar close  Ends -->

                <!-- navbar top Start -->
                <div class="navbar-top-wrapper">
                    <div class="container-lg">
                        <div class="navbar-top d-lg-flex justify-content-between">
                            <!-- navbar top left Start -->
                            <div class="navbar-top-left">
                                <ul class="navbar-top-link">
                                    <li><a href="{{route('homepage')}}">Home</a></li>
                                    <li><a href="{{route('about')}}">About</a></li>
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="mdi mdi-phone-in-talk"></i>
                                            +8801234567890
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- navbar top left Ends -->
                            <!-- navbar top right Start -->
                            @guest
                            <div class="navbar-top-right">
                                <ul class="navbar-top-link">


                                    <li><a href="{{route('loginUser')}}"><i class="mdi mdi-account"></i>Login</a></li>
                                </ul>
                            </div>
                            @endguest


                            @auth
                            <div class="navbar-top-right">
                                <ul class="navbar-top-link">
                                    <li>{{auth()->user()->name}}</li>
                                    <li><a href="{{route('logout')}}"><i class="mdi mdi-account"></i>Logout</a></li>
                                </ul>
                            </div>
                            @endauth
                            <!-- navbar top right Ends -->
                        </div>
                    </div>
                </div>
                <!-- navbar top Ends -->

                <!-- main navbar Start -->
                <div class="navbar-wrapper">
                    <div class="container-lg">
                        <nav class="main-navbar d-lg-flex justify-content-between align-items-center">
                            <!-- desktop logo Start -->
                            <div class="desktop-logo d-none d-lg-block">
                                <!-- <a href="index.html"><img src="{{asset('userpanel/assets/images/nepharma-logo.png')}}" alt="Logo" height="60px" width="80px"></a> -->
                                <a href="{{route('homepage')}}"><img src="{{asset('userpanel/assets/images/logo-pharma.png')}}" alt="Logo" height="60px" width="200px"></a>
                            </div>
                            <!-- desktop logo Ends -->
                            <!-- navbar menu Start -->
                            <div class="navbar-menu">
                                <ul class="main-menu">
                                    <li><a href="{{url('/sectionnav/'.'1')}}">Ayurveda</a></li>
                                    <li><a href="{{url('/sectionnav/'.'2')}}">Hair Care</a></li>
                                    <li><a href="{{url('/sectionnav/'.'3')}}">Personal Care</a></li>
                                    <li><a href="{{url('/sectionnav/'.'4')}}">Baby Care</a></li>
                                    <li><a href="{{url('/sectionnav/'.'5')}}">Skin Care</a></li>
                                    <!-- <li><a href="{{url('/sectionnav/'.'Ayurveda')}}">Ayurveda</a></li> -->

                                </ul>
                            </div>
                            <!-- navbar menu Ends -->
                            <div class="navbar-search-cart d-none d-lg-flex">
                                <!-- navbar search start -->
                                <div class="navbar-search search-style-5">
                                    <div class="search-input">
                                        <input type="text" placeholder="Search">
                                    </div>
                                    <div class="search-btn">
                                        <button><i class="lni lni-search-alt"></i></button>
                                    </div>
                                </div>
                                <!-- navbar search Ends -->
                                <!-- navbar cart start -->
                                <div class="navbar-cart">
                                    <a class="icon-btn primary-icon-text icon-text-btn" href="{{route('viewCart')}}">
                                        <img src="{{asset('userpanel/assets/images/icon-svg/cart-1.svg')}}" alt="Icon">
                                        <span class="icon-text text-style-1">88</span>
                                    </a>

                                    <div class="navbar-cart-dropdown">
                                        <div class="checkout-style-2">
                                            <div class="checkout-header d-flex justify-content-between">
                                                <h6 class="title">Shopping Cart</h6>
                                            </div>

                                            <div class="checkout-table">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td class="checkout-product">
                                                                <div class="product-cart d-flex">
                                                                    <div class="product-thumb">
                                                                        <img src="{{asset('userpanel/assets/images/product-cart/product-1.png')}}" alt="Product">
                                                                    </div>
                                                                    <div class="product-content media-body">
                                                                        <h5 class="title">
                                                                            <a href="product-details-page.html">Hollow Port</a>
                                                                        </h5>
                                                                        <ul>
                                                                            <li><span>Brown</span></li>
                                                                            <li><span>XL</span></li>
                                                                            <li>
                                                                                <a class="delete" href="javascript:void(0)">
                                                                                    <i class="mdi mdi-delete"></i>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="checkout-quantity">
                                                                <div class="product-quantity d-inline-flex">
                                                                    <button type="button" id="sub" class="sub">
                                                                        <i class="mdi mdi-minus"></i>
                                                                    </button>
                                                                    <input type="text" value="1">
                                                                    <button type="button" id="add" class="add">
                                                                        <i class="mdi mdi-plus"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td class="checkout-price">
                                                                <p class="price">$36.00</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="checkout-footer">
                                                    <div class="checkout-sub-total d-flex justify-content-between">
                                                        <p class="value">Subtotal Price:</p>
                                                        <p class="price">$144</p>
                                                    </div>
                                                    <br>
                                                    <div class="checkout-btn">
                                                        <a href="cart-page.html" class="main-btn primary-btn-border">View Cart</a>
                                                        <a href="checkout-page.html" class="main-btn primary-btn">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- navbar cart Ends -->
                                </div>
                        </nav>
                    </div>
                </div>
                <!-- main navbar Ends -->
            </div>
            <div class="overlay-7"></div>
        </header>
    </div>
    <!--====== Navbar Style 7 Part Ends ======-->