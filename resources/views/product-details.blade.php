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


                    <div class="buttons d-flex my-5">
                        <div class="product-btn mr-10">
                            <button type="button" class="main-btn primary-btn addToCartBtn">
                                <!-- <a href="" class="main-btn primary-btn addToCartBtn"> -->
                                <img src="{{asset('userpanel/assets/images/icon-svg/cart-4.svg')}}" alt="">
                                Add to cart
                                <!-- </a> -->
                            </button>
                        </div>


                        <input type="hidden" value="{{$product->id}}" name="prod_id" class="prod_id">

                        <div class="block quantity">
                            <input type="number" class="form-control text-center qty-input" name="prod_qty" id="prod_qty" value="1" min="1" max="10">
                        </div>
                        <!-- <div class="row">
                        <div class="col-md-3">
                            <span class="input-group-text decrement-btn">-</span>
                            <input type="text" class="form-control text-center" id="cart_quantity" value="1" name="cart_quantity">
                            <span class="input-group-text increment-btn">+</span>
                        </div>-->
                    </div>
                    <!-- <div class="row mt-2 mr-4">
                            <div class="col-md-3">
                                <input type="hidden" value="{{$product->id}}" class="prod_id"> -->

                    <!-- <label for="Quantity">Quantity</label> -->
                    <!-- <div class="input-group text-center mb-3" style="width:130px;">
                                    <button class="input-group-text decrement-btn" onclick="minus();">-</button>
                                    <input type="text" id="number" class="form-control text-center qty-input" name="prod_qty" value="1">
                                    <button class="input-group-text increment-btn" onclick="plus()">+</button>
                                </div>
                            </div> -->
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

@section('scripts')
<script>
    // function plus() {
    //     var totalValue = document.getElementById("number").value;
    //     totalValue++;
    //     document.getElementById("number").value = totalValue;

    // }

    // function minus() {
    //     var totalValue = document.getElementById("number").value;
    //     totalValue--;
    //     document.getElementById("number").value = totalValue;

    // }
    $(document).ready(function() {

        $('.addToCartBtn').click(function(e) {
            e.preventDefault();

            var product_id = $(this).closest('.product_data').find('.prod_id').val();
            var product_qty = $(this).closest('.product_data').find('.qty-input').val();

            if (product_qty > 10) {

                alert("Maximum input :10");
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: "POST",
                url: "/add-to-cart",
                data: {
                    'product_id': product_id,
                    'product_qty': product_qty,
                },
                success: function(response) {
                    alert(response.status);
                    // swal(response.status);
                    // sweetalert
                }


            });
        });
    });
    // $('.increment-btn').click(function(e) {
    //     e.preventDefault();

    //     var inc_value = $(this).closest('.product.data').find('.qty-input').val();
    //     var value = parseInt(inc_value, 10);
    //     value = isNaN(value) ? 0 : value;
    //     if (value < 10) {
    //         value++;
    //         $(this).closest('.product.data').find('.qty-input').val();

    //     }
    // });
    // $('.decrement-btn').click(function(e) {
    //     e.preventDefault();


    //     var dec_value = $(this).closest('.product.data').find('.qty-input').val();
    //     var value = parseInt(dec_value, 10);
    //     value = isNaN(value) ? 0 : value;
    //     if (value > 1) {
    //         value--;
    //         $(this).closest('.product.data').find('.qty-input').val();

    //     }
    // });
</script>
@endsection