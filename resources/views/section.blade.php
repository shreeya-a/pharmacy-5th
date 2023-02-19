@extends('user.layouts.main')

@section('content')

<div class="container">
    <h1 class="text-center">Section Page</h1>

    <div class="py-5">
        <div class="container">

            <div class="row">
                @foreach($section_product as $product)
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <!-- <a href="{{url($product->product.'/'.$product->id)}}"> -->
                        <a href="{{url('section/'.$product->section->section.'/'.$product->product.'/'.$product->id)}}">
                        <!-- <a href="{{url('product-details/'.$product->id)}}"> -->
                            <img src="{{asset('/storage/'.$product->image)}}" class="d-block w-100" alt="carousel_img">
                            <div class="card-body">
                                <h4> {{$product->product}}</h4>
                                <p> {{$product->price}}</p>
                                <div class="product-btn">
                                <a href="javascript:void(0)" class="main-btn primary-btn">
                                    <img src="{{asset('userpanel/assets/images/icon-svg/cart-4.svg')}}" alt="">
                                    Add to cart
                                </a>
                           
                            </div>
                            </div>
                            </a>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
</div>
@endsection