@extends('user.layouts.main')

@section('content')


<section class="breadcrumbs-wrapper pt-2 pb-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-style breadcrumbs-style-1 d-md-flex justify-content-between align-items-center">
                    <div class="breadcrumb-left">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Section</li>
                            @foreach($section as $section)
                            <li class="breadcrumb-item active" aria-current="page">{{$section->section}}</li>
                            @endforeach
                        </ol>
                    </div>
                 
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">


    <div class="py-5">
        <div class="container">

            <div class="row product_data">
                @foreach($section_product as $product)
                <div class="col-md-3 mb-3">
                    <div class="card product product_data">
                        <!-- <a href="{{url($product->product.'/'.$product->id)}}"> -->
                        <a href="{{url('section/'.$product->section->section.'/'.$product->product.'/'.$product->id)}}">
                            <!-- <a href="{{url('product-details/'.$product->id)}}"> -->
                            <div class="image">
                                <img src="{{asset('/storage/'.$product->image)}}" class="d-block w-100" alt="carousel_img" width="250" height="250">
                            </div>
<!-- <hr class="m-0 black"> -->
                            <div class="card-body text-center ">
                                <input type="hidden" value="{{$product->id}}" name="prod_id" class="prod_id">
                                <h4 class="m-2"> {{$product->product}}</h4>
                                <p class="m-2">Rs {{$product->price}}</p>
                        </a>
                            @if($product->prescribed == 0)
                            <div class="product-btn mt-2 mb-2">
                                <button type="button" class="main-btn primary-btn addToCartBtn">
                                    <img src="{{asset('userpanel/assets/images/icon-svg/cart-4.svg')}}" alt="">
                                    Add to cart
                                </button>
                                <input type="hidden" class="form-control text-center qty-input" name="prod_qty" id="prod_qty" value="1">
                            </div>
                            @else
                            <p class="mt-2 mb-2 p-2" style="color:red;">*** Presciption required ***</p>
                             <!-- </div> -->
                            @endif
                    </div>
                </div>
            </div>
            @endforeach
            </div>
<div class="row">
    {{$section_product->links()}}
</div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{asset('userpanel/assets/js/custom.js')}}"></script>
@endsection