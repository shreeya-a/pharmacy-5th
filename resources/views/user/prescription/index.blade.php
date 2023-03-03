@extends('user.layouts.main')

@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>My Prescription Uploads</h4>
                </div>
                @php
                $SN=1;
                @endphp
                <div class="card-body">
                    @if($orders->count()>0)

                    <table class="table table-bordered table-responsive my-3">
                        <thead>
                            <tr>
                                <td>SN</td>
                                <td>Prescription</td>
                                <td>Date-of-upload</td>
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
                                <td><a href="{{url('view-prescription-order/'. $item->id)}}" class="btn btn-primary">View</a></td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @else
                    <div class="card-body text-center mt-2 mb-5" style="height:10rem">
                        <h2 class="mb-5">You have no prescription uploads</h2>
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