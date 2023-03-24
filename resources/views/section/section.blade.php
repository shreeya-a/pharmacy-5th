@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper bg-white">
<section class="content-header ">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h5>Section</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Section</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="container">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
            <form action="{{route('addSection')}}" method="post">
                @csrf
                <div class="input-group">
                    <input class="form-control text-capitalize  @error('section') is-invalid @enderror" type="text" placeholder="Enter new section" name="section" aria-describedby="basic-addon2">
                    <div class="input-group-append" style="margin-left: 5px;">
                        <button type="submit" class="btn btn-primary">Add section</button>
                    </div>
                </div>
            </form>
        </div>

        @php
        $SN=1;
        @endphp
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Section Table</h3>                 
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" >
                    <table class="table  text-nowrap">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>ID</th>
                                <th>Section</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sections as $section)
                            <tr>
                                <td>{{$SN++}}</td>
                                <td>{{$section->id}}</td>
                                <td>{{$section->section}}</td>
                                <td>
                                    <!-- <a href="{{url('/edit-section/'.$section->id)}}" class="btn btn-warning">Edit</a> -->
                                    <a href="{{url('/edit-section/'.$section->id)}}"><i class="fas fa-pen" aria-hidden="true"></i></a>
                                    <!-- <a href="{{url('/delete-section/'.$section->id)}}" class="btn btn-danger">Delete</a> -->
                                    <a href="{{url('/delete-section/'.$section->id)}}" class="delete" data-confirm="Are you sure to delete {{$section->section}}?"><i class="fas fa-archive" style="color:red" aria-hidden="true"></i></a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="row">
                {{$sections->links()}}
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
</div>
<!-- /.content-wrapper -->

@endsection



@section('script-table')
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/dist/js/delete.js')}}"></script>
@endsection