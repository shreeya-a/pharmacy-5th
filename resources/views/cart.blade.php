@extends('user.layouts.main')

@section('content')
<style>
    .incdec {
        padding: 0px 0px 0px 150px;
    }
    h2{
        color: #542ded;
    }
</style>
<section class="breadcrumbs-wrapper pt-2 pb-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-style breadcrumbs-style-1 d-md-flex justify-content-between align-items-center">
                    <div class="breadcrumb-left">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ol>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</section>


<div class="container my-3 mb-5">
    <div class="card shadow ">
        <div class="card-body">
            @php
            $total =0;
            @endphp
            @if($cartItem->count()>0)
            <div class="table-responsive">
                <div class="col-md-12 text-right mb-3">
                    <a href="{{route('clearCart')}}" class="clear_cart font-weight-bold delete"  data-confirm="Are you sure to clear cart?">Clear Cart</a>
                </div>
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th class="cart-description">Image</th>
                            <th class="cart-product-name">Product Name</th>
                            <th class="cart-price">Price</th>
                            <th class="cart-qty">Quantity</th>
                            <th class="cart-total">Grandtotal</th>
                            <th class="cart-romove"></th>
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

                            <td class="">
                                <div class="incdec">
                                    <div class="input-group " style="width:110px">
                                        <button class="input-group-text  decrement-btn changeQuantity">-</button>
                                        <input type="text" id="number" class="form-control text-center qty-input " name="Quantity" value="{{$item->prod_qty}}">
                                        <button class="input-group-text increment-btn changeQuantity">+</button>
                                    </div>
                                </div>
                                <!-- <div class="input-group " style="width:110px">
                                    <button class="input-group-text  decrement-btn changeQuantity">-</button>
                                    <input type="text" id="number" class="form-control text-center qty-input " name="Quantity" value="{{$item->prod_qty}}">
                                    <button class="input-group-text increment-btn changeQuantity">+</button>
                                </div> -->
                            </td>
                            <td class="cart-product-grand-total">
                                <span class="cart-grand-total-price">
                                    {{$item->product->price* $item->prod_qty}}
                                </span>
                            </td>
                            <td>
                                <button class="btn btn-danger delete-cart-item "><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</button>
                            </td>
                        </tr>
                        @php
                        $total +=$item->product->price * $item->prod_qty;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>

    </div>
    <div class="card-footer bg-white d-flex  justify-content-between mt-2">
        <h6>Total: Rs {{$total}}</h6>
        <a href="{{url('checkout')}}" class="btn btn-outline-success">Proceed to Checkout</a>
    </div>
    @else
    <div class="card-body text-center mt-2 mb-5">
        <h2 class="mb-5">Your <i class="mdi mdi-cart"></i> Cart is empty</h2>
        <div class="d-flex justify-content-end">
        <a href="{{url('/')}}" class="btn btn-outline-primary float-end pt-10">Continue Shopping</a>
    </div>
    </div>
    @endif
</div>
</div>
</div>

@endsection

@section('scripts')
<script src="{{asset('userpanel/assets/js/custom.js')}}"></script>
<script src="{{asset('admin/dist/js/delete.js')}}"></script>

<!-- <script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script> -->

@endsection