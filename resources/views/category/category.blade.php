@extends('admin.layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper bg-white">

    <section class="content-header ">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h5>Category</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Category</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="container">
      
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2">
            <form action="{{route('addCategory')}}" method="post">
                @csrf
                <div class="input-group">
                    <input class="form-control  text-capitalize @error('category') is-invalid @enderror" type="text" placeholder="Enter new category" name="category" aria-describedby="basic-addon2">
                    <div class="input-group-append" style="margin-left: 5px;">
                        <button type="submit" class="btn btn-primary">Add Category</button>
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
                        <h3 class="card-title text-bold">Category Table</h3>

                        
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" >
                        <table class="table text-nowrap">
                            <thead class="">
                                <th>SN</th>
                                <th>ID</th>
                                <th>Category</th>
                                <th colspan="2">Action</th>
                            </thead>
                            <tbody>
                                @foreach ($categorys as $category)
                                <tr>
                                    <td>{{$SN++}}</td>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->category}}</td>
                                    <td>
                                        <a href="{{url('/edit-category/'.$category->id)}}"><i class="fas fa-pen" aria-hidden="true"></i></a>
                                        <a href="{{url('/delete-category/'.$category->id)}}" class="delete" data-confirm="Are you sure to delete {{$category->category}}?"><i class="fas fa-archive" style="color:red" aria-hidden="true"></i></a>
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
                    {{$categorys->links()}}
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