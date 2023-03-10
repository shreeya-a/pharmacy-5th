@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper bg-white">
    <!-- <div class="container"> -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header bg-primary ">
                        <div class="me-auto">
                            <h4 class="text-white">New Orders</h4>
                        </div>
                        <div class="d-flex justify-content-end">

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
                    <table class="table table-bordered my-3">
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
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>


@endsection
@section('script-table')
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
@endsection