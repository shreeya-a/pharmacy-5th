@extends('user.layouts.main')

@section('content')
<div class="py-3 mb-4 shadow-sm bg-primary-light border-top">
    <div class="container">
        <h6 class="mb-0">
            <a href="{{url('/')}}">Home</a>
            /
            <a href="{{url('cart')}}">Cart</a>
        </h6>
    </div>
</div>

<div class="container my-5">
    <div class="card shadow ">
        <div class="card-body">
            @foreach($cartItem as $item)
            <div class="row product_data">
                <div class="col-md-2">
                    <img src="{{asset('/storage/'.$item->product->image)}}" height="100rem" width="100rem" alt="Image here">
                </div>
                <div class="col-md-5">
                    <h3>{{$item->product->product}}</h3>
                </div>
                <div class="col-md-2">
                    <input type="hidden" value="{{$item->prod_id}}" class="prod_id">
                    <label for="Quantity">Quantity</label>
                    <div class="input-group text-center mb-3" style="width:130px">
                        <button class="input-group-text decrement-btn">-</button>
                        <input type="text" id="number" class="form-control text-center qty-input" name="Quantity" value="{{$item->prod_qty}}">
                        <button  class="input-group-text increment-btn " >+</button>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-danger delete-cart-item"> Remove</button>
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