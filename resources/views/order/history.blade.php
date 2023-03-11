@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper bg-white">
    <!-- <div class="container"> -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header bg-primary  ">
                        <h4 class="text-white">Order history</h4>
                        <div class="d-flex justify-content-end">
                            <a href="{{url('order')}}" class="btn btn-success">Back</a>
                        </div>
                    </div>
                    @php
                    $SN=1;
                    @endphp
                    <div class="card-body table-responsive p-0 mt-1" style="height: 500px;">
                        <table class="table table-head-fixed table-bordered text-nowrap">
                            <!-- <table class="table table-bordered my-3"> -->
                            <thead>
                                <tr>
                                    <td>SN</td>
                                    <td>Order Date</td>
                                    <td>Tracking Number</td>
                                    <td>Total Price</td>
                                    <td>Status</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td>{{$SN++}}</td>
                                    <td>{{$order->updated_at->format('Y-m-d') }}</td>
                                    <td>{{$order->tracking_no}}</td>
                                    <td>{{$order->total_price}}</td>
                                    <td>{{$order->status == '2' ? 'Cancelled' : 'Complete'}}</td>
                                    <td><a href="{{url('view-order/'. $order->id)}}" class="btn btn-primary">View</a></td>
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
</div>

@endsection
@section('script-table')
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
@endsection