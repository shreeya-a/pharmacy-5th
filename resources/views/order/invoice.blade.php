@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper" style="min-height: 2646.8px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Invoice</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Order</li>
                        <li class="breadcrumb-item active">Invoice</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">



                    <!-- Main content -->
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    <img src="{{asset('userpanel/assets/images/logo-pharma.png')}}" alt="Logo" height="50px" width="150px">

                                    <small class="float-right">Date: {{date('m-d-Y')}}</small>
                                </h4>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                From
                                <address>
                                    <strong>NePharna</strong><br>
                                    Kamalpokhari-01<br>
                                    Kathmandu, Nepal<br>
                                    Phone:01-4454545<br>
                                    Email: nepharma@gmail.com
                                </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                To
                                @foreach($order as $user)
                                <address>
                                    <strong>{{$user->fname}} {{$user->lname}}</strong><br>
                                    {{$user->address}}<br>
                                    {{$user->city}}, {{$user->country}}<br>
                                    Phone: {{$user->phone}}<br>
                                    Email:{{$user->email}}
                                </address>
                                @endforeach
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">

                                <b>Invoice: Order placement</b><br>

                                @foreach($order as $order)
                                <b>Invoice: Ne#{{ $order->tracking_no}}</b><br>

                                <b>Tracking ID:</b>{{ $order->tracking_no}}<br>
                                @endforeach

                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Qty</th>
                                            <th>Rate</th>
                                            <th>Amt</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orderItem as $item)
                                        <tr>

                                            <td class="col-2">{{$item->product->product}}</td>
                                            <td>{{$item->qty}}</td>
                                            <td>{{$item->price}}</td>
                                            <td>{{$item->price * $item->qty}}</td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-6">
                                <p class="lead">Payment Methods:  Cash on Delivery</p>
                                <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                                    <!-- Cash on Delivery -->
                                </p>
                            </div>
                            <!-- /.col -->
                            <div class="col-6">

                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th style="width:50%">Total:</th>
                                                <td>{{$order->total_price}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        <!-- to pass order id to print invoice -->

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-12">
                                <a href="{{url('print-order-invoice/'.$order->id)}}" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                                <!-- <a href="" onclick=" return print();" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a> -->


                            </div>
                        </div>
                    </div>
                    <!-- /.invoice -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

</div>
</div>


@endsection