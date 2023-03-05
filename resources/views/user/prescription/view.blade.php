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
                                    <th>Image</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </thead>
                                <tbody>
                                    @foreach($presItem as $item)
                                    <tr>
                                        <td>{{$item->product->product}}</td>
                                        <td>

                                        </td>
                                        <td>{{$item->qty}}</td>
                                        <td>{{$item->price}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-between">
                                <h4>Grand Total: </h4>
                                <h5 class="mr-4 pr-2 ">Rs {{$presorder->total_price}}</h5>
                            </div>
                            <div class="col-6">

<div class="table-responsive">
  <table class="table">
    <tbody>
    @foreach($presorder as $order)  
    <tr>
      <th style="width:50%">Subtotal:</th>
      <td>{{$order->total_price}}</td>
    </tr>
    <tr>
      <th style="width:50%">Discount:</th>
      <td>{{$order->discount}}%</td>
    </tr>
    <tr>
      <th style="width:50%">Tax:</th>
      <td>{{$order->tax}}%</td>
    </tr>
    <tr>
      <th style="width:50%">Total:</th>
      <td>{{($order->total_price) - ( ($order->discount/100) * $order->total_price) + (($order->tax/100) * $order->total_price)}}</td>
    </tr>
    @endforeach
 
 
  </tbody></table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

