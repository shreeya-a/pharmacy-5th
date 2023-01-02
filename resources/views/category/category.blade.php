@extends('admin.layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header bg-white">
        <h1 class="mt-8 text-center">Category page</h1>

    </div>
    <!-- /.content header -->

    <div class="container">
    <div class="row justify-content-center">
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
                    <input class="form-control" type="text" placeholder="Enter new category" name="category" aria-describedby="basic-addon2">
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
 
    <table class="table align-middle table-bordered table-sm bg-white">
        <thead class="align-middle">
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
                    <a href="{{url('/edit-category/'.$category->id)}}" class="btn btn-warning">Edit</a>
                    <a href="{{url('/delete-category/'.$category->id)}}" class="btn btn-danger">Delete</a>
                </td>
             
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>

</div>
</div>
<!-- /.content-wrapper -->

@endsection