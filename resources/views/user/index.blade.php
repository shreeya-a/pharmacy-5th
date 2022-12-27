@extends('user.layouts.main')

@section('content')
<!-- <h1 class="mt-8">Welcome to Home Page</h1> -->
 <!--====== Header Style 1 Part Start ======-->
 <section class="header-style-1">
        <!-- <div class="header-big"> -->
        <!-- <div class="header-items-active"> -->

        <div class="container">
            <div class="row align-items-center slider-animated-1">
                <div class="col-lg-5 col-md-6">
                    <div class="hero-slider-content-2">
                        <h4 class="animated">Trade-in offer</h4>
                        <h2 class="animated fw-900">Supper value deals</h2>
                        <h1 class="animated fw-900 text-brand">On all products</h1>
                        <p class="animated">Save more with coupons & up to 70% off</p>
                        <!-- <a class="animated btn btn-brush btn-brush-3" href="product-details.html"> Shop Now </a> -->
                        <a class="btn btn-primary" href="#"> Upload Now </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="single-slider-img single-slider-img-1">
                        <img class="animated slider-1-1" src="{{asset('userpanel/assets/images/slider/banner.png')}}" style="width:700px;height:700px;" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--====== Header Style 1 Part Ends ======-->




    <!--====== Content Card Style 4 Part Start ======-->
    <section class="content-card-style-4 pt-70 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-content mt-15 text-center">
                        <div class="content-icon">
                            <i class="mdi mdi-truck-fast"></i>
                        </div>
                        <div class="content-content">
                            <h4 class="title"><a href="javascript:void(0)">Fast delivery</a></h4>
                            <p>Available in most metros on selected in-stock products</p>
                            <a href="javascript:void(0)" class="more">learn more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-content mt-15 text-center">
                        <div class="content-icon">
                            <i class="mdi mdi-message-text"></i>
                        </div>
                        <div class="content-content">
                            <h4 class="title"><a href="javascript:void(0)">Get help buying</a></h4>
                            <p>Have a question? Call a Specialist or chat online for help</p>
                            <a href="contact-page.html" class="more">Contact us</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-content mt-15 text-center">
                        <div class="content-icon">
                            <i class="mdi mdi-ticket-percent"></i>
                        </div>
                        <div class="content-content">
                            <h4 class="title"><a href="javascript:void(0)">Find the card for you</a></h4>
                            <p>Get 3% Daily Cash with special financing offers from us</p>
                            <a href="javascript:void(0)" class="more">learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Content Card Style 4 Part Ends ======-->

    <!--====== Carousel Card Part Start ======-->
    <!-- featured items -->
    <section class="product-wrapper pt-100 pb-70 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-50">
                        <h1 class="heading-1 font-weight-400">Featured Items</h1>
                    </div>
                </div>
            </div>
            <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card">
                            <div class="img-wrapper"><img src="{{asset('userpanel/assets/images/content-card-1/content-1.jpg')}}" class="d-block w-100" alt="..."> </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title 1</h5>
                                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a> -->


                                <div class="product-content text-center">
                                    <h4 class="title"><a href="product-details-page.html">Metro 38 Date</a></h4>
                                    <p>Reference 1102</p>
                                    <a href="javascript:void(0)" class="main-btn secondary-1-btn">
                                        <img src="{{asset('userpanel/assets/images/icon-svg/cart-7.svg')}}" alt="">
                                        $ 399
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title 2</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title 3</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title 4</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title 5</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title 6</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                   
                </div>
             
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </section>
    <!--====== Carousel Card Part end ======-->

    <!--====== Carousel Card Part Start ======-->
    <!-- popular items -->
    <section class="product-wrapper pt-100 pb-70 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-50">
                        <h1 class="heading-1 font-weight-400">Popular Items</h1>
                    </div>
                </div>
            </div>
            <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card">
                            <div class="img-wrapper"><img src="{{asset('userpanel/assets/images/product-4/product-10.jpg')}}" class="d-block w-100" alt="..."> </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title 1</h5>
                                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a> -->


                                <div class="product-content text-center">
                                    <h4 class="title"><a href="product-details-page.html">Metro 38 Date</a></h4>
                                    <p>Reference 1102</p>
                                    <a href="javascript:void(0)" class="main-btn secondary-1-btn">
                                        <img src="{{asset('userpanel/assets/images/icon-svg/cart-7.svg')}}" alt="">
                                        $ 399
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title 2</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title 3</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title 4</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title 5</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title 6</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                    card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                   
                </div>
             
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </section>

    <!--====== Carousel Card Part end ======-->


    <!--====== Product Style 1 Part Start ======-->
    <section class="product-wrapper pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-50">
                        <h1 class="heading-1 font-weight-400">Featured Items</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="product-style-1 mt-30">
                        <div class="product-image">
                            <!-- <span class="icon-text text-style-1">NEW</span> -->
                            <div class="product-active">
                                <!-- <div class="product-item active">
                                    <img src="{{asset('userpanel/assets/images/product-1/product-1.jpg')}}" alt="product">
                                </div> -->
                                <div class="product-item">
                                    <img src="{{asset('userpanel/assets/images/product-1/product-2.jpg')}}" alt="product">
                                </div>
                            </div>
                            <a class="add-wishlist" href="javascript:void(0)">
                                <i class="mdi mdi-heart-outline"></i>
                            </a>
                        </div>
                        <div class="product-content text-center">
                            <h4 class="title"><a href="product-details-page.html">Metro 38 Date</a></h4>
                            <p>Reference 1102</p>
                            <a href="javascript:void(0)" class="main-btn secondary-1-btn">
                                <img src="{{asset('userpanel/assets/images/icon-svg/cart-7.svg')}}" alt="">
                                $ 399
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="product-style-1 mt-30">
                        <div class="product-image">
                            <span class="icon-text text-style-1">20% off</span>
                            <div class="product-active">
                                <div class="product-item active">
                                    <img src="{{asset('userpanel/assets/images/product-1/product-5.jpg')}}" alt="product">
                                </div>
                                <div class="product-item">
                                    <img src="{{asset('userpanel/assets/images/product-1/product-6.jpg')}}" alt="product">
                                </div>
                            </div>
                            <a class="add-wishlist" href="javascript:void(0)">
                                <i class="mdi mdi-heart-outline"></i>
                            </a>
                        </div>
                        <div class="product-content text-center">
                            <h4 class="title"><a href="product-details-page.html">Lady Shoe</a></h4>
                            <p>Reference 1103</p>
                            <a href="javascript:void(0)" class="main-btn secondary-1-btn">
                                <img src="{{asset('userpanel/assets/images/icon-svg/cart-7.svg')}}" alt="">
                                $ 399
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="product-style-1 mt-30">
                        <div class="product-image">
                            <div class="product-active">
                                <div class="product-item active">
                                    <img src="{{asset('userpanel/assets/images/product-1/product-3.jpg')}}" alt="product">
                                </div>
                                <div class="product-item">
                                    <img src="{{asset('userpanel/assets/images/product-1/product-4.jpg')}}" alt="product">
                                </div>
                            </div>
                            <a class="add-wishlist" href="javascript:void(0)">
                                <i class="mdi mdi-heart-outline"></i>
                            </a>
                        </div>
                        <div class="product-content text-center">
                            <h4 class="title"><a href="product-details-page.html">Casio 09 Date</a></h4>
                            <p>Reference 1112</p>
                            <a href="javascript:void(0)" class="main-btn secondary-1-btn">
                                <img src="{{asset('userpanel/assets/images/icon-svg/cart-7.svg')}}" alt="">
                                $ 399
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--====== Product Style 1 Part Ends ======-->



    <!--====== Features Part Start ======-->
    <section class="features-section pt-100 pb-50 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="features-title text-center mb-50">
                        <h1 class="heading-1 font-weight-700">Contact Us Form </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature-wrapper">
                        <div class="feature-icon">
                            <i class="lni lni-cog"></i>
                        </div>
                        <div class="feature-content">
                            <h5 class="heading-5 font-weight-500 mb-10">Bootstrap 5</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos iste veniam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature-wrapper">
                        <div class="feature-icon">
                            <i class="lni lni-code"></i>
                        </div>
                        <div class="feature-content">
                            <h5 class="heading-5 font-weight-500 mb-10">Clean Design</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos iste veniam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature-wrapper">
                        <div class="feature-icon">
                            <i class="lni lni-layers"></i>
                        </div>
                        <div class="feature-content">
                            <h5 class="heading-5 font-weight-500 mb-10">Included Business Pages</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos iste veniam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature-wrapper">
                        <div class="feature-icon">
                            <i class="lni lni-laptop-phone"></i>
                        </div>
                        <div class="feature-content">
                            <h5 class="heading-5 font-weight-500 mb-10">Fully Responsive</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos iste veniam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature-wrapper">
                        <div class="feature-icon">
                            <i class="lni lni-brush"></i>
                        </div>
                        <div class="feature-content">
                            <h5 class="heading-5 font-weight-500 mb-10">Completely Customizable</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos iste veniam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature-wrapper">
                        <div class="feature-icon">
                            <i class="lni lni-rocket"></i>
                        </div>
                        <div class="feature-content">
                            <h5 class="heading-5 font-weight-500 mb-10">Fast and Well-optimized</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos iste veniam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Features Part Ends ======-->

    <!--====== Clients Logo Part Start ======-->
    <!-- <section class="clients-logo-section pt-70 pb-70">
        <div class="container">
            <div class="row client-logo-active">
                <div class="col-lg-3">
                    <div class="single-logo-wrapper">
                        <img src="{{asset('userpanel/assets/images/client-logo/uideck-logo.svg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-logo-wrapper">
                        <img src="{{asset('userpanel/assets/images/client-logo/graygrids-logo.svg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-logo-wrapper">
                        <img src="{{asset('userpanel/assets/images/client-logo/lineicons-logo.svg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-logo-wrapper">
                        <img src="{{asset('userpanel/assets/images/client-logo/pagebulb-logo.svg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--====== Clients Logo Part Ends ======-->

    <!--====== Subscribe Part Start ======-->
    <!-- <section class="subscribe-section pt-70 pb-70 bg-primary-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <div class="heading text-center">
                        <h1 class="heading-1 font-weight-700 text-white mb-10">You are using free lite version</h1>
                        <p class="gray-3">Please, purchase full version of the template to get all pages, sections, features and permission to remove footer credits.</p>
                        </br>
                        <a href="https://rebrand.ly/estore-gg" rel="nofollow" target="_blank" class="main-btn secondary-1-btn">
                                <img src="{{asset('userpanel/assets/images/icon-svg/cart-7.svg')}}" alt="">
                                PURCHASE NOW
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--====== Subscribe Part Ends ======-->
@endsection