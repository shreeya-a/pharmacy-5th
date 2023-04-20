@extends('user.layouts.main')

@section('content')
<style>
    p {
        color: black;
    }
</style>

<section class="breadcrumbs-wrapper pt-2 pb-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-style breadcrumbs-style-1 d-md-flex justify-content-between align-items-center">
                    <div class="breadcrumb-left">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
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

<div class="container my-5">
    <div class="row ">
        @foreach($product_details as $product)

        <div class="col-md-5">
            <div class="main-img">
                <img class="img-fluid" src="{{asset('/storage/'.$product->image)}}" alt="ProductS">
            </div>
        </div>
        <div class="col-md-7">
            <div class="main-description product_data px-2 ">
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
                <input type="hidden" value="{{$product->id}}" name="prod_id" class="prod_id">
                @if($product->prescribed == 0)
                
                    <div class="buttons d-flex my-5">
                        <div class="product-btn mr-10">
                            <button type="button" class="main-btn primary-btn addToCartBtn">
                                <!-- <a href="" class="main-btn primary-btn addToCartBtn"> -->
                                <img src="{{asset('userpanel/assets/images/icon-svg/cart-4.svg')}}" alt="">
                                Add to cart
                                <!-- </a> -->
                            </button>
                        </div>
                        <div class="block quantity">
                            <input type="number" class="form-control text-center qty-input" name="prod_qty" id="prod_qty" value="1" min="1" max="10">
                        </div>
                    </div>
                    
                    @else
                    <h5 class="p-3" style="color:red;">*** Presciption required ***</h5>

                    @endif
                </div>
                <div class="product-details my-4">
                    <p class="details-title text-bold mb-1" style="color:black;">Product Details</p>
                    <p class="description">{{$product->description}} </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>


    @endsection

    @section('scripts')
    <script src="{{asset('userpanel/assets/js/custom.js')}}"></script>
    @endsection