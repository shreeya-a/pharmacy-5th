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
                            <li class="breadcrumb-item"> Order</li>
                            <li class="breadcrumb-item"> My Orders</li>
                            <li class="breadcrumb-item active" aria-current="page">Order Details</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<div class="container my-2">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">

                @php
                $SN=1;
                $total =0;
                @endphp

                <div class="card-body" >
                    <div class="row">
                        <div class="col-md-4 order-details mr-5">
                            <h4>Shipping details</h4>
                            <hr>
                            <table class="table table-head-fixed text-nowrap">
                                <tr>
                                    <th>First Name</th>
                                    <th>:</th>
                                    <td>{{$orders->fname}}</td>
                                </tr>
                                <tr>
                                    <th>Tracking Id</th>
                                    <th>:</th>
                                    <td>{{$orders->tracking_no}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <th>:</th>
                                    <td>{{$orders->email}}</td>
                                </tr>
                                <tr>
                                    <th>Contact No. </th>
                                    <th>:</th>
                                    <td>{{$orders->phone}}</td>
                                </tr>
                                <tr>
                                    <th>Shipping Address </th>
                                    <th>:</th>
                                    <td>
                                        {{$orders->address}}, {{$orders->city}}, <br><br>
                                        {{$orders->state}}, {{$orders->country}}
                                    </td>
                                </tr>
                               
                                @if($orders->status == '0' ||$orders->status == '1' )
                                <tr>
                                    <th>Payment method</th>
                                    <th>:</th>
                                    <td>Cash on Delivery</td>
                                </tr>
                                @endif
                                <tr>
                                    <th>Order Status</th>
                                    <th>:</th>
                                    <th>{{$orders->status == '0'? 'Pending':($orders->status =='1'? 'Completed':'Cancelled')}}</th>
                                </tr>

                            </table>
                        </div>
                        <div class="col-md-7 ">
                            @if($orders->status == '0')
                            <div class="card shadow-none  pl-50">
                                <div class="">
                                    <h4 class=" pl-10">Order details</h4>
                                    <hr>
                                </div>
                          
                            <table class="table table-bordered text-center ">
                                <thead>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Rate</th>
                                    <th>Amt</th>
                                </thead>
                                <tbody>
                                    @foreach($orders->orderitems as $item)
                                    <tr>
                                        <td>{{$item->product->product}}</td>
                                        <td>{{$item->qty}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>{{$item->price * $item->qty}}</td>
                                    </tr>
                                    @php
                                    $total += $item->qty *$item->product->price;
                                    @endphp
                                    @endforeach

                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end">
                                <div class="col-6">

                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th style="width:50%">Subtotal:</th>
                                                    <td>{{$total}}</td>
                                                </tr>
                                         
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            </div>

                            @elseif ($orders->status == '2')
                            <div class="card shadow-none  pl-50">
                                <div class="">
                                    <h4 class=" pl-10">Order details</h4>
                                    <hr>
                                </div>
                                <div class="box p-10">
                                    <p>Sorry, your order has been cancelled.  </p>
                                </div>
                            </div>
                            @else
                            <h4>Order details</h4>
                            <table class="table table-bordered text-center ">
                                <thead>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Rate</th>
                                    <th>Amt</th>
                                </thead>
                                <tbody>
                                    @foreach($orders->orderitems as $item)
                                    <tr>
                                        <td>{{$item->product->product}}</td>
                                        <td>{{$item->qty}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>{{$item->price * $item->qty}}</td>
                                    </tr>
                                    @php
                                    $total += $item->qty *$item->product->price;
                                    @endphp
                                    @endforeach

                                </tbody>
                            </table>

                            <div class="d-flex justify-content-end">
                                <div class="col-6">

                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th style="width:50%">Subtotal:</th>
                                                    <td>{{$total}}</td>
                                                </tr>
                                         
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script-table')
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
@endsection