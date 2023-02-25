@extends('user.layouts.main')

@section('content')

<div class="container">
    <h1 class="text-center">Section Page</h1>

    <div class="py-5">
        <div class="container">

            <div class="row product_data">
                @foreach($section_product as $product)
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <!-- <a href="{{url($product->product.'/'.$product->id)}}"> -->
                        <a href="{{url('section/'.$product->section->section.'/'.$product->product.'/'.$product->id)}}">
                            <!-- <a href="{{url('product-details/'.$product->id)}}"> -->
                            <div class="image">
                                <img src="{{asset('/storage/'.$product->image)}}" class="d-block w-100" alt="carousel_img" width="250" height="250">
                            </div>

                            <div class="card-body text-center ">
                                <input type="hidden" value="{{$product->id}}" name="prod_id" class="prod_id">
                                <h4 class="m-2"> {{$product->product}}</h4>
                                <p class="m-2">Rs {{$product->price}}</p>
                        </a>
                        <div class="product-btn mt-2 mb-2">
                            <button type="button" class="main-btn primary-btn addToCartBtn">
                                <img src="{{asset('userpanel/assets/images/icon-svg/cart-4.svg')}}" alt="">
                                Add to cart
                            </button>
                            <input type="hidden" class="form-control text-center qty-input" name="prod_qty" id="prod_qty" value="1">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{asset('userpanel/assets/js/custom.js')}}"></script>
@endsection