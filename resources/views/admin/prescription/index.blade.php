@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper bg-white">
    <!-- <div class="container"> -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header bg-primary d-flex justif ">
                        <div class="me-auto">
                            <h4 class="text-white">Prescription</h4>
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
                                <td>Prescription</td>
                                <td>Date of upload</td>
                                <td>Status</td>
                                <td>View Details</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($prescription as $pres)
                            <tr>
                                <td>{{$SN++}}</td>
                                <td>{{$pres -> fname}}</td>
                                <td>
                                    <img class="card-img-top" src="{{asset('/storage/'.$pres->image)}}" style="width: 3rem; height:3rem;" alt="pp">
                                </td>
                                <!-- <td>{{$pres->tracking_no}}</td>
                                <td>{{$pres->total_price}}</td> -->
                                <td>{{$pres->updated_at->format('Y-m-d') }}</td>
                                <td>{{$pres -> status == '0'? 'Pending':( $pres->status == '1'? 'Complete': 'Cancelled')}}</td>
                                <!-- <td>{{$pres -> status == '0'? 'Pending':'Completed'}}</td> -->
                                @if ($pres ->status =='0')
                                <td>
                                    <a href="{{url('view-prescription/'. $pres->id)}}" class="btn btn-primary">View</a>
                                <a href="{{url('cancel-prescription/'. $pres->id)}}" class="btn btn-danger">Cancel</a>
                            </td>
                                @elseif ($pres ->status == '1')
                                <td><a href="{{url('view-prescription-order/'. $pres->id)}}" class="btn btn-primary">View</a></td>
                                @else 
                                <td></td>
                                @endif
                                <!-- <td>
                                <a href="{{url('view-prescription/'. $pres->id)}}" class="btn btn-primary">Details</a>

                                    
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