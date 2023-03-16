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
                            <li class="breadcrumb-item">Order</li>
                            <li class="breadcrumb-item active" aria-current="page">My Orders</li>
                        </ol>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
              
                @php
                $SN=1;
                @endphp
                <div class="card-body p-1">
                    @if($orders->count()>0)

                    <table class="table table-responsive my-1">
                        <thead>
                            <tr>
                                <td>SN</td>
                                <td>Tracking Number</td>
                                <td>Total Price</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $item)
                            <tr>
                                <td>{{$SN++}}</td>
                                <td>{{$item->tracking_no}}</td>
                                <td>{{$item->total_price}}</td>
                                <td>{{$item->status == '0'? 'Pending':($item->status=='1'? 'Completed': 'Cancelled')}}</td>
                                @if ($item ->status =='0')
                                <td>
                                <a href="{{url('view-my-order/'. $item->id)}}" class="btn btn-primary">View</a>
                                <a href="{{url('cancel-my-order/'. $item->id)}}" class="btn btn-danger">Cancel</a>

                                <!-- <a href="{{url('cancel-my-order/'. $item->id)}}" class="btn btn-danger delete" data-confirm="Are you sure you want to CANCEL?">Cancel</a> -->
                            </td>
                                @elseif ($item ->status == '1')
                                <td>
                                <a href="{{url('view-my-order/'. $item->id)}}" class="btn btn-primary">View</a>
                                </td>
                                @else 
                                <td></td>
                                @endif


                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @else
                    <div class="card-body text-center mt-2 mb-5" style="height:10rem">
                        <h2 class="mb-5">You have no orders</h2>
                        <div class="d-flex justify-content-end">
                            <a href="{{url('/')}}" class="btn btn-outline-primary float-end pt-10">Continue Shopping</a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection