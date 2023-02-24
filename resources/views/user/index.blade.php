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
                    <a class="btn btn-primary" href="{{route('image')}}"> Upload Now </a>
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

<!--====== Featured product Carousel Part Start ======-->


<section class="product-wrapper pt-10 ">
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-50">
                        <h1 class="heading-1 font-weight-400">Featured Items</h1>
                    </div>
                </div>
            </div>
            <div class="owl-carousel featured-carousel owl-theme">
                @foreach($featured_products as $product)
                <div class="item">
                    <div class="card mb-3  text-center">
                        <a href="{{url('section/'.$product->section->section.'/'.$product->product.'/'.$product->id)}}">
                            <div class="img-wrapper">
                                <img src="{{asset('/storage/'.$product->image)}}" class="d-block w-100" alt="carousel_img">
                            </div>
                            <div class="card-body justify-content-center gray-bg ">
                                <h4 class="text-capitalize "> {{$product->product}}</h4>
                                <p>Rs {{$product->price}}</p>
                                <div class="mt-4 mb-4">
                                    <a href="#" class="main-btn primary-btn" style="max-width:150px">Add to Cart </a>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


<!--====== Featured product Carousel Part End ======-->


<!--====== Popular products Part Start ======-->
<section class="product-wrapper pt-10 gray-bg ">
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-50">
                        <h1 class="heading-1 font-weight-400">Popular Items</h1>
                    </div>
                </div>
            </div>
            <div class="owl-carousel popular-carousel owl-theme">
                @foreach($popular_products as $product)
                <div class="item">
                    <div class="card mb-3 text-center">
                        <a href="{{url('section/'.$product->section->section.'/'.$product->product.'/'.$product->id)}}">
                            <div class="img-wrapper">
                                <img src="{{asset('/storage/'.$product->image)}}" class="d-block w-100" alt="carousel_img">
                            </div>
                            <div class="card-body justify-content-center gray-bg ">
                                <h4 class="text-capitalize "> {{$product->product}}</h4>
                                <p>Rs {{$product->price}}</p>
                                <div class="mt-4 mb-4">
                                    <a href="#" class="main-btn primary-btn">Add to Cart </a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>

<!--====== Popular products Part End ======-->





<!--====== Features Part Start ======-->
<section class="features-section pt-100 pb-50 ">
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

@section('scripts')
<script>
    $('.featured-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
    $('.popular-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
</script>

@endsection