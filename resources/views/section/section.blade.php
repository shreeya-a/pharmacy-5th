@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper bg-white">
    <div class="content-header bg-white">
        <h1 class="mt-8 text-center">Section</h1>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1 text-center mt-5">
                @if(Session::has('success'))

                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
            </div>
        </div>

        <!-- section content -->
        <!-- <div class="d-flex justify-content-center"> -->
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">

            <form action="{{route('addSection')}}" method="post">
                @csrf
                <div class="input-group">
                    <input class="form-control text-capitalize" type="text" placeholder="Enter new section" name="section" aria-describedby="basic-addon2">
                    <div class="input-group-append" style="margin-left: 5px;">
                        <button type="submit" class="btn btn-primary">Add section</button>
                    </div>
                </div>
            </form>
        </div>



        <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-3 ml-3">
      
        <a href="#" class="btn btn-primary me-md-2">Add Book</a>
        </div> -->

        @php
        $SN=1;
        @endphp


    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Fixed Header Table</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>ID</th>
                                <th>Section</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($section as $section)
                            <tr>
                                <td>{{$SN++}}</td>
                                <td>{{$section->id}}</td>
                                <td>{{$section->section}}</td>
                                <td>
                                    <!-- <a href="{{url('/edit-section/'.$section->id)}}" class="btn btn-warning">Edit</a> -->
                                    <a href="{{url('/edit-section/'.$section->id)}}"><i class="fas fa-pen" aria-hidden="true"></i></a>
                                    <!-- <a href="{{url('/delete-section/'.$section->id)}}" class="btn btn-danger">Delete</a> -->
                                    <a href="{{url('/delete-section/'.$section->id)}}" ><i class="fas fa-archive" style="color:red" aria-hidden="true"></i></a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
</div>
</div>
<!-- /.content-wrapper -->

@endsection



@section('script-table')
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
@endsection