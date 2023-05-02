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
                            <li class="breadcrumb-item">Prescription</li>
                            <li class="breadcrumb-item active" aria-current="page">My Uploads</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<div class="container my-2 ">
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                @php
                $SN=1;
                @endphp
                <div class="card-body p-1">
                    @if($prescription->count()>0)

                    <table class="table  table-responsive  my-1">
                        <thead>
                            <tr>
                                <!-- <td>SN</td> -->
                                <td>Prescription</td>
                                <td>Date-of-upload</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($prescription as $item)
                            <tr>
                                <!-- <td>{{$SN++}}</td> -->
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
                    <div class="card-body text-center mt-2 mb-5">
                        <h2 class="mb-5">You have no prescription uploads</h2>
                        <div class="d-flex justify-content-end">
                            <a href="{{url('/upload-prescription')}}" class="btn btn-outline-primary float-end pt-10">Upload prescription</a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <div class="row mt-4">
                {{$prescription->links()}}
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/dist/js/delete.js')}}"></script>

@endsection