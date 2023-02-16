@extends('user.layouts.main')

@section('content')
<section class="breadcrumbs-wrapper pt-2 pb-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-style breadcrumbs-style-1 d-md-flex justify-content-between align-items-center">
                    <div class="breadcrumb-left">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$section_name}}</li>
                        </ol>
                    </div>
                    <div class="breadcrumb-right">
                        <h5 class="heading-5 font-weight-500">{{$product_name}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">


    <!-- <div class="row">
        <div class="col-lg-12">
            <div class="mb-50">
                <h1 class="heading-1 font-weight-400">product details</h1>
            </div>
            <div class="mb-50">
            </div>
        </div>
    </div> -->
    <!-- <div class="row">
        @foreach($product_details as $product)
        <h1 class="heading-1 font-weight-400 mb-10 text-center">{{$product->product}}</h1>
        <div class="col-md-3 mb-3">

            <div class="card">
                <img src="{{asset('/storage/'.$product->image)}}" class="d-block w-100" alt="carousel_img">
                <div class="card-body">
                    <h4> {{$product->product}}</h4>
                    <p> {{$product->price}}</p>
                    <p> {{$product->description}}</p>-->
                    <!-- <button> Add to cart </button> -->
                    <!-- <div class="product-btn">
                        <a href="javascript:void(0)" class="main-btn primary-btn">
                            <img src="{{asset('userpanel/assets/images/icon-svg/cart-4.svg')}}" alt="">
                            Add to cart
                        </a>
                        <a href="javascript:void(0)" class="main-btn secondary-1-btn">
                            <img src="{{asset('userpanel/assets/images/icon-svg/cart-8.svg')}}" alt="">
                            Buy Now
                        </a>
                    </div>
                </div>
            </div>

        </div>
        @endforeach 
    </div> -->
    <!-- @foreach($product_details as $product)

    <div class="card mb-3" style="max-width: 540rem; ">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{asset('/storage/'.$product->image)}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title">{{$product->product}}</h3>
                    <h5 class="card-text pt-3">{{$product->price}}</h5>
                    <p class="card-text">{{$product->description}}</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <div class="product-items flex-wrap">
                        <div class="select-item">
                            <h6 class="select-title">Select Quantity: </h6>

                            <div class="select-quantity">
                                <button type="button" id="sub" class="sub"><i class="mdi mdi-minus"></i></button>
                                <input type="text" value="1" />
                                <button type="button" id="add" class="add"><i class="mdi mdi-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="product-btn">
                        <a href="javascript:void(0)" class="main-btn primary-btn">
                            <img src="{{asset('userpanel/assets/images/icon-svg/cart-4.svg')}}" alt="">
                            Add to cart
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach -->


        <div class="container my-5">
            <div class="row">
                @foreach($product_details as $product)

                <div class="col-md-5">
                    <div class="main-img">
                        <img class="img-fluid" src="{{asset('/storage/'.$product->image)}}" alt="ProductS">

                    </div>
                </div>
                <div class="col-md-7">
                    <div class="main-description px-2">
                        <div class="category text-bold">
                            Category: {{$product->section->section}}
                        </div>
                        <div class="product-title text-bold my-3">
                        {{$product->product}}
                        </div>


                        <div class="price-area my-4">
                           
                            <p class="new-price  mb-2">Rs {{$product->price}}</p>
                            <p class="text-secondary mb-1">(Additional tax may apply on checkout)</p>

                        </div>


                        <div class="buttons d-flex my-5">
                        <div class="product-btn mr-10">
                        <a href="javascript:void(0)" class="main-btn primary-btn">
                            <img src="{{asset('userpanel/assets/images/icon-svg/cart-4.svg')}}" alt="">
                            Add to cart
                        </a>
                    </div>
                         
                            

                            <div class="block quantity">
                                <input type="number" class="form-control" id="cart_quantity" value="1" min="0" max="5" placeholder="Enter email" name="cart_quantity">
                            </div>
                        </div>




                    </div>

                    <div class="product-details my-4">
                        <p class="details-title text-color mb-1">Product Details</p>
                        <p class="description">{{$product->description}} </p>
                    </div>
                   
                </div>
            </div>
            @endforeach
        </div>

        <div class="container similar-products my-4">
        <hr>
        <p class="display-5">Similar Products</p>

        <div class="row">
            <div class="col-md-3">
                <div class="similar-product">
                    <img class="w-100" src="https://source.unsplash.com/gsKdPcIyeGg" alt="Preview">
                    <p class="title">Lovely black dress</p>
                    <p class="price">$100</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="similar-product">
                    <img class="w-100" src="https://source.unsplash.com/sg_gRhbYXhc" alt="Preview">
                    <p class="title">Lovely Dress with patterns</p>
                    <p class="price">$85</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="similar-product">
                    <img class="w-100" src="https://source.unsplash.com/gJZQcirK8aw" alt="Preview">
                    <p class="title">Lovely fashion dress</p>
                    <p class="price">$200</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="similar-product">
                    <img class="w-100" src="https://source.unsplash.com/qbB_Z2pXLEU" alt="Preview">
                    <p class="title">Lovely red dress</p>
                    <p class="price">$120</p>
                </div>
            </div>
        </div>
    </div>
    </div>


    @endsection