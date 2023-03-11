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
            <div class="card">
           
                @php
                $SN=1;
                @endphp

                <div class="card-body"style="height: 500px;">
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
                                    <th>Last Name</th>
                                    <th>:</th>
                                    <td>{{$orders->lname}}</td>
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
                            </table>
                        </div>
                        <div class="col-md-7 ">
                            <h4>Order details</h4>
                            <table class="table table-bordered text-center ">
                                <thead>
                                    <th>Product</th>
                                    <th>Image</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </thead>
                                <tbody>
                                    @foreach($orders->orderitems as $item)
                                    <tr>
                                        <td>{{$item->product->product}}</td>
                                        <td>
                                            <img class="card-img-top" src="{{asset('/storage/'.$item->product->image)}}" style="width: 3rem; height:3rem;" alt="pp">
                                        </td>
                                        <td>{{$item->qty}}</td>
                                        <td>{{$item->price}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-between">
                                <h4>Grand Total: </h4>
                                <h5 class="mr-4 pr-2 ">Rs {{$orders->total_price}}</h5>
                            </div>
                           
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