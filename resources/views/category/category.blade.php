@extends('admin.layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper bg-white">
    <!-- Content Header (Page header) -->
    <!-- <div class="content-header bg-white">
        <h1 class="mt-8 text-center">Category</h1>

    </div> -->
    <!-- /.content header -->

    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1 text-center mt-5 text-center">
                @if(Session::has('success'))

                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
            </div>
        </div>

        <!-- category content -->
        <!-- <div class="d-flex justify-content-center"> -->
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