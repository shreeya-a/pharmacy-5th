@extends('user.layouts.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="mb-50">
                <h1 class="heading-1 font-weight-400">product details</h1>
            </div>
            <div class="mb-50">
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($product_details as $product)
            <h1 class="heading-1 font-weight-400 mb-10 text-center">{{$product->product}}</h1>
        <div class="col-md-3 mb-3">
           
                <div class="card">
                    <img src="{{asset('/storage/'.$product->image)}}" class="d-block w-100" alt="carousel_img">
                    <div class="card-body">
                        <h4> {{$product->product}}</h4>
                        <p> {{$product->price}}</p>
                        <p> {{$product->description}}</p>
                        <button> Add to cart </button>
                    </div>
                </div>
            
        </div>
        @endforeach
    </div>
</div>


@endsection