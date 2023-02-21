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
            @php
            $total =0;
            @endphp
            <!-- <div class="shopping-cart">
                <div class="shopping-cart-table"> -->
            <div class="table-responsive">
                <div class="col-md-12 text-right mb-3">
                    <a href="javascript:void(0)" class="clear_cart font-weight-bold">Clear Cart</a>
                </div>
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th class="cart-description">Image</th>
                            <th class="cart-product-name">Product Name</th>
                            <th class="cart-price">Price</th>
                            <th class="cart-qty">Quantity</th>
                            <th class="cart-total">Grandtotal</th>
                            <th class="cart-romove">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cartItem as $item)
                        <tr class="product_data">
                            <td class="product-image">
                                <img src="{{asset('/storage/'.$item->product->image)}}" height="60rem" width="60rem" alt="Image here">
                            </td>
                            <td>
                                {{$item->product->product}}
                            </td>
                            <td>
                                Rs {{$item->product->price}}
                            </td>
                            <input type="hidden" value="{{$item->prod_id}}" class="prod_id">
                            <td class="text-center">
                                <div class="input-group" style="width:130px">
                                    <button class="input-group-text decrement-btn changeQuantity">-</button>
                                    <input type="text" id="number" class="form-control text-center qty-input" name="Quantity" value="{{$item->prod_qty}}">
                                    <button class="input-group-text increment-btn changeQuantity">+</button>
                                </div>
                            </td>
                            <td class="cart-product-grand-total">
                                <span class="cart-grand-total-price">
                                    {{$item->product->price* $item->prod_qty}}
                                </span>
                            </td>
                            <td>
                                <button class="btn btn-danger delete-cart-item"> Remove</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- </div>
    </div> -->


        </div>
        @php
        $total +=$item->product->price* $item->prod_qty;
        @endphp
    </div>
    <div class="card-footer d-flex  justify-content-between">
        <h6>Total: Rs {{$total}}</h6>
        <button class="btn btn-outline-success">Checkout</button>
    </div>
</div>



</div>
</div>

@endsection

@section('scripts')
<script src="{{asset('userpanel/assets/js/custom.js')}}"></script>

<!-- <script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script> -->

@endsection