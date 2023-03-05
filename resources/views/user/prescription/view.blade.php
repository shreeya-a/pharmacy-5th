@extends('user.layouts.main')

@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Prescription order</h4>
                </div>
                @php
                $SN=1;
                @endphp

                <div class="card-body" style="height: 500px;">
                    <div class="row">
                        <div class="col-md-4 order-details mr-5">
                            <h4>Shipping details</h4>
                            <hr>
                            <table class="table table-head-fixed text-nowrap">
                                <tr>
                                    <th>First Name</th>
                                    <th>:</th>
                                    <td>{{$presorder->fname}}</td>
                                </tr>
                                <tr>
                                    <th>Last Name</th>
                                    <th>:</th>
                                    <td>{{$presorder->lname}}</td>
                                </tr>
                                <tr>
                                    <th>Tracking Id</th>
                                    <th>:</th>
                                    <td>{{$presorder->tracking_no}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <th>:</th>
                                    <td>{{$presorder->email}}</td>
                                </tr>
                                <tr>
                                    <th>Contact No. </th>
                                    <th>:</th>
                                    <td>{{$presorder->phone}}</td>
                                </tr>
                                <tr>
                                    <th>Shipping Address </th>
                                    <th>:</th>
                                    <td>
                                        {{$presorder->address}}, {{$presorder->city}}, <br><br>
                                        {{$presorder->country}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Payment</th>
                                    <th>:</th>
                                    <td>Cash on Delivery</td>
                                </tr>
                                <tr>
                                    <th>Order Status</th>
                                    <th>:</th>
                                    <td>{{$presorder->status == '0'? 'Pending':($presorder->status =='1'? 'Completed':'Cancelled')}}</td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-md-7 ">
                            @if($presorder->status == '0')


                            <div class="card shadow-none  pl-50">
                                <div class="">
                                    <h4 class=" pl-10">Order details</h4>
                                    <hr>
                                </div>
                                <div class="box p-10">
                                    <p>Your order is yet to be processed. </p>
                                </div>
                            </div>
                            @elseif ($presorder->status == '2')
                            <div class="card shadow-none  pl-50">
                                <div class="">
                                    <h4 class=" pl-10">Order details</h4>
                                    <hr>
                                </div>
                                <div class="box p-10">
                                    <p>Sorry, your order has been cancelled. </p>
                                </div>
                            </div>
                            @else
                            <h4 class="">Order details</h4>

                            <table class="table table-bordered text-center ">
                                <thead>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Rate</th>
                                    <th>Amount</th>
                                </thead>
                                <tbody>
                                    @foreach($presItem as $item)
                                    <tr>
                                        <td>{{$item->product->product}}</td>
                                        <td>{{$item->qty}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>{{$item->price * $item->qty}}</td>
                                    </tr>
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
                                                    <td>{{$presorder->total_price}}</td>
                                                </tr>
                                                <tr>
                                                    <th style="width:50%">Discount:</th>
                                                    <td>{{$presorder->discount}}%</td>
                                                </tr>
                                                <tr>
                                                    <th style="width:50%">Tax:</th>
                                                    <td>{{$presorder->tax}}%</td>
                                                </tr>
                                                <tr>
                                                    <th style="width:50%">Total:</th>
                                                    <td>{{$presorder->final_price}}</td>
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

        @endsection