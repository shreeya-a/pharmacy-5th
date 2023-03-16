@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper bg-white">
    <!-- <div class="container"> -->
    <section class="content-header ">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h5>Order</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Order</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-none p-4">
                    <div class="card-header  ">
                        <div class="d-flex justify-content-between">
                            <div class="me-auto">
                                <h4 class="text-bold">New Orders</h4>
                            </div>

                            <a href="{{url('order-history')}}" class="btn btn-success">Order History</a>
                        </div>
                    </div>
                    <!-- <div class="card-header bg-primary d-flex justify-content-end">
                        <h4 class="text-white">New Orders</h4>
                        <button class="btn btn-success ">Order History</button>
                    </div> -->
                    @php
                    $SN=1;
                    @endphp
                    <!-- <div class="card-body table-responsive p-0" > -->
                    <div class="card-body table-responsive p-0 " style="height: 500px;">
                        <table class="table table-head-fixed table-bordered text-nowrap">
                            <thead>
                                <tr>
                                    <td>SN</td>
                                    <td>Name</td>
                                    <td>Tracking no.</td>
                                    <td>Total Price</td>
                                    <td>Order Date</td>
                                    <td>Status</td>
                                    <td>View Details</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td>{{$SN++}}</td>
                                    <td>{{$order->fname}}</td>
                                    <td>{{$order->tracking_no}}</td>
                                    <td>{{$order->total_price}}</td>
                                    <td>{{$order->updated_at->format('Y-m-d') }}</td>
                                    <td>{{$order->status == '0' ? 'Pending' :($order->status == '1'?'Completed': 'Cancelled')}}</td>
                                    <td>
                                        <a href="{{url('view-order/'. $order->id)}}" class="btn btn-primary">Details</a>
                                        @if($order->status == 1)
                                        <a href="{{url('order-invoice/'.$order->id)}}" class="btn btn-success">Generate Invoice</a>
@endif
                                    </td>
                                    <!-- <td>
                                        @if($order->status == '0')
                                        <a href="{{url('view-order/'. $order->id)}}" class="btn btn-primary">View</a>
                                    <a href="{{url('view-order/'. $order->id)}}" class="btn btn-danger">Cancel Order</a>
                                    @else
                                    <a href="{{url('view-order/'. $order->id)}}" class="btn btn-primary">View</a>
                                    @endif
                                </td> -->
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                {{$orders->links()}}
            </div>
        </div>
    </div>
</div>


@endsection
@section('script-table')
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
@endsection