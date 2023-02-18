@extends('user.layouts.main')

<!-- @section('title')
    My Cart
@endsection -->


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
                    <input type="hidden" class="prod_id">
                    <!-- <div class="block quantity">
                            <input type="number" class="form-control text-center qty-input"  value="{{$item->prod_qty}}"  max="10">
                        </div> -->
                    <label for="Quantity">Quantity</label>
                    <div class="input-group text-center mb-3" style="width:130px">
                        <button type="submit" class="input-group-text decrement-btn">-</button>
                        <input type="text" class="form-control text-center qty-input" value="{{$item->prod_qty}}">
                        <button type="submit" class="input-group-text increment-btn">+</button>
                    </div>
                </div>
                <div class="col-md-2">
                    <h6>Remove</h6>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
   
    $('.increment-btn').click(function(e) {
        e.preventDefault();

        var inc_value = $(this).closest('.product.data').find('.qty-input').val();
        var value = parseInt(int_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value < 10) {
            value++;
            $(this).closest('.product.data').find('.qty-input').val();

        }
    });
    $('.decrement-btn').click(function(e) {
        e.preventDefault();


        var dec_value = $(this).closest('.product.data').find('.qty-input').val();
        var value = parseInt(dec_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value > 1) {
            value--;
            $(this).closest('.product.data').find('.qty-input').val();

        }
    });
</script>

@endsection