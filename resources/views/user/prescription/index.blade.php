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
                    @if($prescription->count()>0)

                    <table class="table table-bordered table-responsive  my-3">
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
                            @foreach($prescription as $item)
                            <tr>
                                <td>{{$SN++}}</td>
                                <td>
                                    <img src="{{asset('/storage/'.$item->image)}}" height="60rem" width="60rem" alt="Image here">
                                </td>
                                <td>{{$item->updated_at->format('Y-m-d') }}</td>
                                <td>{{$item->status == '0'? 'Pending':($item->status=='1'? 'Completed': 'Cancelled')}}</td>
                                @if ($item ->status =='0')
                                <td>
                                    <a href="{{url('view-prescription-order/'. $item->id)}}" class="btn btn-primary">View</a>
                                <a href="{{url('cancel-prescription-order/'. $item->id)}}" class="btn btn-danger delete" data-confirm="Are you sure you want to CANCEL?">Cancel</a>
                            </td>
                                @elseif ($item ->status == '1')
                                <td><a href="{{url('view-prescription-order/'. $item->id)}}" class="btn btn-primary">View</a></td>
                                @else 
                                <td></td>
                                @endif
                            </tr>

                            @endforeach
                        </tbody>
                    </table>

                    @else
                    <div class="card-body text-center mt-2 mb-5" style="height:10rem">
                        <h2 class="mb-5">You have no prescription uploads</h2>
                        <div class="d-flex justify-content-end">
                            <a href="{{url('/upload-prescription')}}" class="btn btn-outline-primary float-end pt-10">Upload prescription</a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<!-- <script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script> -->
<script src="{{asset('admin/dist/js/delete.js')}}"></script>

@endsection