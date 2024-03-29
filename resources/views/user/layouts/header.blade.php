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
                                <!-- <a href="index.html"><img src="{{asset('userpanel/assets/images/logo.svg')}}" alt="Logo"></a> -->
                                <a href="{{route('homepage')}}"><img src="{{asset('userpanel/assets/images/logo-pharma.png')}}" alt="Logo" height="60px" width="200px"></a>

                            </div>
                            <!-- desktop logo Ends -->
                        </div>
                        <div class="col-3">
                            <!-- navbar cart start -->
                            <div class="navbar-cart">
                                <a class="icon-btn primary-icon-text icon-text-btn" href="{{route('viewCart')}}">
                                    <img src="{{asset('userpanel/assets/images/icon-svg/cart-1.svg')}}" alt="Icon">
                                    <span class="icon-text text-style-1">{{$count}}</span>



                                </a>
                            </div>
                            <!-- navbar cart Ends -->
                        </div>
                    </div>
                    <!-- navbar search start -->
                    <!-- <div class="navbar-search mt-15 search-style-5"> -->

                    <form action="{{route('searchProduct')}}" method="POST" class=" mt-2">

                                    @csrf
                                    <div class="navbar-search search-style-5">
                                        <div class="search-input">
                                            <input type="search" id="" name="product_name" placeholder="Search products" required>
                                        </div>
                                        <div class="search-btn">
                                            <button type="submit"><i class="lni lni-search-alt"></i></button>
                                        </div>
                                    </div>
                                </form>

                    <!-- </div> -->
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
                <!-- <div class="navbar-top-wrapper">
                    <div class="container-lg">
                        <div class="navbar-top d-lg-flex justify-content-between"> -->
                <!-- navbar top left Start -->
                <!-- <div class="navbar-top-left">
                                <ul class="navbar-top-link">
                                    <li><a href="{{route('homepage')}}">Home</a></li>
                                    <li><a href="{{route('about')}}">About</a></li>
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                    <li><a href="{{route('myPresOrder')}}">prescription</a></li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="mdi mdi-phone-in-talk"></i>
                                            +8801234567890
                                        </a>
                                    </li>
                                </ul>
                            </div> -->
                <!-- navbar top left Ends -->
                <!-- navbar top right Start -->
                <!-- @guest
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
                            @endauth -->
                <!-- navbar top right Ends -->
                <!-- </div>
                    </div>
                </div>  -->
                <!-- navbar top Ends -->

                <!-- main navbar Start -->
                <div class="navbar-wrapper pt-2 pb-2">
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
                                    <li class="active"><a href="{{route('homepage')}}">Home</a></li>
                                    <li><a href="{{route('about')}}">About</a></li>
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Sections</a>
                                        <!-- sub menu Start -->
                                        <ul class="sub-menu">
                                            @foreach($cats as $cat)
                                           
                                            <li><a href="{{url('/section/'.$cat->section.'/'.$cat->id)}}">{{$cat->section}}</a></li>
                                            @endforeach
                                        </ul>
                                        <!-- sub menu Ends -->
                                    </li>
                                </ul>

                                </ul>

                            </div>
                            <!-- navbar menu Ends -->

                            <div class="navbar-search-cart d-none d-lg-flex ">
                                <!-- navbar search start -->
                               
                                <form action="{{route('searchProduct')}}" method="POST"class=" mt-2">
                                    @csrf
                                    <div class="navbar-search search-style-5">
                                        <div class="search-input">
                                            <input type="search" id="search_product" name="product_name" placeholder="Search products" required>
                                        </div>
                                        <div class="search-btn">
                                            <button type="submit"><i class="lni lni-search-alt"></i></button>
                                        </div>
                                    </div>
                                </form>
                                <!-- navbar search Ends -->
                                <!-- navbar cart start -->
                                <div class="navbar-cart">
                                    <a class="icon-btn primary-icon-text icon-text-btn" href="{{route('viewCart')}}">
                                        <img src="{{asset('userpanel/assets/images/icon-svg/cart-1.svg')}}" alt="Icon">
                                        <span class="icon-text text-style-1">{{$count}}</span>
                                    </a>


                                    <!-- navbar cart Ends -->
                                </div>
                                <div class="account mr-4">
                                    @guest
                                    <ul>
                                        <li>
                                            <a class="icon primary-icon-text icon-text-btn mt-1 ml-4" href="{{route('loginUser')}}"><i class="mdi mdi-account-key" style=" font-size:1.5rem;"></i>
                                                <span> LOGIN</span>

                                            </a>
                                        </li>
                                    </ul>

                                    <!-- <a class="icon-btn primary-icon-text icon-text-btn" href="{{route('loginUser')}}">
                                        <i class="mdi mdi-account">  <span class="black" style="font-size: 1rem;">Login</span></i>
                                      
                                        </a> -->
                                    @endguest
                                    @auth

                                    <span class="navbar-menu" style="margin: -1px;">
                                        <ul class="main-menu">
                                            <li class="menu-item-has-children p-1">
                                                <!-- <a class="icon text-primary primary-icon-text icon-text-btn  ml-2" href="{{route('loginUser')}}"><i class="mdi mdi-account"></i>LOGIN</a> -->
                                                <div class="navbar-cart">
                                                    <!-- <a class="icon  primary-icon-text icon-text-btn  ml-2"><i class="mdi mdi-account-check" style="color:#542DED; font-size:25px;"></i></a> -->
                                                    <a class="icon  primary-icon-text icon-text-btn  ml-2"><i class="mdi mdi-account-check" style="color:#542DED; font-size:1.5rem;"></i> <i class="mdi mdi-menu-down"  style="color:#542DED; font-size:1.5rem;"></i></a>
                                                </div>
                                                <!-- sub menu Start -->
                                                <ul class="sub-menu mt-3 " style="width:175px;">


                                                    <li class="p-3 mr-1 mt-1" style="text-transform:capitalize;"> {{auth()->user()->name}}</li>
                                                    <hr class="m-0 ">
                                                    <li><a href="{{route('myPresOrder')}}" style="text-transform:capitalize;">My Prescription</a></p></li>
                                                    <li><a href="{{route('myOrder')}}" style="text-transform:capitalize;">My Orders</a></li>
                                                    <hr class="m-0 ">
                                                    <li><a href="{{route('changepass')}}" style="text-transform:capitalize;">Change Password</a></li>
                                                    <li><a href="{{route('logout')}}" style="text-transform:capitalize;"><i class="mdi mdi-logout"></i>Sign out</a></li>

                                                </ul>
                                            </li>
                                        </ul>
                                    </span>
                                    @endauth
                                </div>
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