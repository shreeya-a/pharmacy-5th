@extends('user.layouts.main')

@section('content')

<div class="container">
    <h1 class="text-center">Section Page</h1>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-50">
                        <h1 class="">Section Items</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($section as $sect)
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="{{asset('/storage/'.$product->image)}}" class="d-block w-100" alt="carousel_img">
                        <div class="card-body">
                            <h4> {{$product->product}}</h4>
                            <p> {{$product->price}}</p>
                            <p> {{$product->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection