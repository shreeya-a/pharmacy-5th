@extends('user.layouts.main')

@section('content')

<style>
    .card:hover {
        border: 1px solid #3E7DC0 !important;

    }
</style>
<!-- <h1 class="mt-8">Welcome to Home Page</h1> -->
<!--====== Header Style 1 Part Start ======-->
<section class="header-style-1">
    <!-- <div class="header-big"> -->
    <!-- <div class="header-items-active"> -->

    <div class="container">
        <div class="row justify-content-center slider-animated-1 mt-4">
            <div class="col-lg-5 col-md-6 justify-content-center mt-5 p-0">


                <div class="hero-slider-content-2 mt-5 text-center">
                    <div class="m-2" >
                        <h2 class="mt-5"> Welcome to <span style="color: #542DED"> NePharma</span></h2>
                    </div>
                    <div class="m-2">
                        <p class="fw-normal" style="color: black">Your health, our priority: Shop with confidence at our online pharmacy.</p>
                    </div>
                    <div class="m-4">
                        <p class="fw-normal">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio nemo itaque asperiores ducimus minus. 
                            Illo itaque et libero 
                            ullam in autem, laborum illum vel mollitia asperiores tempore voluptatum expedita aliquam.</p>
                    </div>
                    <div class="mt-5">
                        <h3>Upload your Prescription </h3>
                        <h5 class="mt-2">Have your medications delivered to your door. </h5>
                    </div>
                    <div class="m-4">
                        <a class="main-btn primary-btn" href="{{route('image')}}"> <i class="mdi mdi-camera"></i> Upload Now </a>
                    </div>

                </div>
            </div>
            <div class="col-lg-7 col-md-6  ">
                <div class="single-slider-img single-slider-img-1 mt-5  mb-5">
                    <!-- <img class="animated slider-1-1" src="{{asset('userpanel/assets/images/slider/Picsart_slider.jpg')}}" style="width:800px;height:500px;" alt=""> -->
                    <img class="animated slider-1-1" src="{{asset('userpanel/assets/images/slider/slider.jpg')}}" style="width:7500px;height:500px;" alt="">
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
                    <div class=" mb-5 features-title text-center ">
            <h2 class="heading-1 font-weight-600"  style=" color:#393D8E ;">Featured Products</h2>
        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel featured-carousel owl-theme mt-3">
                @foreach($featured_products as $product)
                <div class="item">
                    <div class="card mb-3 product_data text-center">
                        <a href="{{url('section/'.$product->section->section.'/'.$product->product.'/'.$product->id)}}">
                            <div class="img-wrapper">
                                <img src="{{asset('/storage/'.$product->image)}}" class="d-block w-100" alt="carousel_img">
                            </div>
                            <div class="card-body justify-content-center mb-3 ">
                                <h5 class="text-capitalize "> {{$product->product}}</h5>
                                <p>Rs {{$product->price}}</p>
                        </a>

                        <!-- @if($product->prescribed == 0)
                                <div class=" product-btn mt-4 mb-4"> -->
                        <!-- <a href="#" class="main-btn primary-btn" style="max-width:150px">Add to Cart </a> -->
                        <!-- <button type="button" class="main-btn primary-btn addToCartBtn" style="max-width:150px">Add to Cart </button>
                                <input type="hidden" class="form-control text-center qty-input" name="prod_qty" id="prod_qty" value="1">

                                </div>
                                @else
                            <p class="mt-2 mb-2 p-4" style="color:red;">*** Presciption required ***</p>
                                @endif -->


                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </div>
</section>


<!--====== Featured product Carousel Part End ======-->


<!--====== Popular products Part Start ======-->
<section class="product-wrapper pt-10  ">
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-50 features-title text-center ">
                    <h4 class="heading-1 font-weight-600"  style=" color:#393D8E ;">Popular Products</h1>
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
                            <div class="card-body justify-content-center mb-3 ">
                                <h5 class="text-capitalize "> {{$product->product}}</h5>
                                <p>Rs {{$product->price}}</p>
                                <!-- <div class="mt-4 mb-4">
                                    <a href="#" class="main-btn primary-btn">Add to Cart </a>
                                </div> -->
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
                    <h1 class="heading-1 font-weight-600" style=" color:#393D8E ;">Our Pharmacy</h1>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="single-slider-img single-slider-img-1 ">
                    <!-- <img class="animated slider-1-1" src="{{asset('userpanel/assets/images/slider/Picsart_slider.jpg')}}" style="width:800px;height:500px;" alt=""> -->
                    <img class="animated slider-1-1" src="{{asset('userpanel/assets/images/pharmacy-background.jpg')}}" style="width:7500px;height:400px;" alt="">
                </div>
            

</section>
<script src="{{asset('userpanel/assets/js/custom.js')}}"></script>
<!--====== Features Part Ends ======-->

<!--====== Clients Logo Part Start ======--> 
 <section class="clients-logo-section pt-70 pb-70">
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="features-title text-center mb-50">
                    <h1 class="heading-1 font-weight-600" style=" color:#393D8E ;">Brands</h1>
                </div>
            </div>
        </div>
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
    </section> 
<!--====== Clients Logo Part Ends ======-->


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