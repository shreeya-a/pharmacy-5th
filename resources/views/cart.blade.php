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
                    <!-- <div class="input-group quantity">
                        <div class="input-group-prepend decrement-btn" style="cursor: pointer">
                            <span class="input-group-text">-</span>
                        </div>
                        <input type="text" class="qty-input form-control" maxlength="2" max="10" value="{{$item->prod_qty}}">
                        <div class="input-group-append increment-btn" style="cursor: pointer">
                            <span class="input-group-text">+</span>
                        </div>
                    </div> -->
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
<script>
    $('.increment-btn').click(function(e) {
        e.preventDefault();

        var inc_value = $(this).closest('.product_data').find('.qty-input').val();

        var value = parseInt(inc_value, 10);

        value = isNaN(value) ? 0 : value;
        if (value < 10) {
            value++;
            $(this).closest('.product_data').find('.qty-input').val(value);



        }
    });
    $('.decrement-btn').click(function(e) {
        e.preventDefault();


        var dec_value = $(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(dec_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value > 1) {
            value--;
            // $("#number").val(value);

            $(this).closest('.product_data').find('.qty-input').val(value);

        }
    });
    $('.delete-cart-item').click(function(e) {
        e.preventDefault();

        var prod_id = $(this).closest('.product_data').find('.qty-input').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: "get",
            url: "/delete-cart-item",
            data: {
                'prod_id': prod_id,
            },
            success: function(response) {
                alert(response.status);
                // swal("".response.status."success");
                // sweetalert
            }


        });
    });
</script>

@endsection