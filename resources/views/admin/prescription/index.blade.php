@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper bg-white">
    <!-- <div class="container"> -->
        <div class="row">
            <div class="col-md-12">
                <div class="card m-0 shadow-none">
                    <div class="card-body ">
                        <div class="card-header">
                            <h3 class="card-title text-bold">Prescription</h3>
                        </div>
                        @php
                        $SN=1;
                        @endphp
                        <hr class="m-0">
                        <div class="card-body table-responsive p-0" style="height: 550px;">
                            <table class="table table-head-fixed table-bordered text-nowrap">
                                <thead>
                                    <tr>
                                        <td>SN</td>
                                        <td>Name</td>
                                        <td>Tracking number</td>
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
                                        <!-- <td>
                                        <img class="card-img-top" src="{{asset('/storage/'.$pres->image)}}" style="width: 3rem; height:3rem;" alt="pp">
                                    </td> -->
                                        <td>{{$pres->tracking_no}}</td>
                                        <!--  <td>{{$pres->total_price}}</td> -->
                                        <td>{{$pres->updated_at->format('Y-m-d') }}</td>
                                        <td>{{$pres -> status == '0'? 'Pending':( $pres->status == '1'? 'Complete': 'Cancelled')}}</td>
                                        <!-- <td>{{$pres -> status == '0'? 'Pending':'Completed'}}</td> -->
                                        @if ($pres ->status =='0')
                                        <td>
                                            <a href="{{url('view-prescription/'. $pres->id)}}" class="btn btn-primary">View</a>
                                            <a href="{{url('cancel-prescription/'. $pres->id)}}" class="btn btn-danger delete" data-confirm="Are you sure you want to CANCEL?">Cancel</a>
                                        </td>
                                        @elseif ($pres ->status == '1')
                                        <td><a href="{{url('view-prescription/'. $pres->id)}}" class="btn btn-primary">View</a></td>
                                        @else
                                        <td></td>
                                        @endif
                           

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
                <div class="row ml-5">
                    {{$prescription->links()}}
                </div>
            </div>
        </div>
    <!-- </div> -->
</div>


@endsection
@section('script-table')
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/dist/js/delete.js')}}"></script>

@endsection