@extends('admin.layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper bg-white">
    <!-- Content Header (Page header) -->
    <!-- <div class="content-header bg-white">
        <h1 class="mt-8 text-center"> Category </h1>

    </div> -->
    <!-- /.content header -->
    <!-- <div class="container"> -->
    <div class="container d-flex justify-content-center mt-3">
        <div class="card " style=" width: 40rem;height: 17rem;">
            <div class="card-header bg-light">
                <h3 class="text-center">Edit Category</h3>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-0 mt-0">
                    <a href="{{route('category')}}" class="btn btn-primary me-md-2">Back</a>
                </div>

            </div>

            <div class="card-body p-2">
                <form action="{{route('editCategory')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value={{$category->id}}>
                    <div>
                        <label for="category">Category:</label>
                    </div>
                    <div class="text-center">
                        <input type="text" name="category" class="form-control" id="category" placeholder="{{$category->category}}">
                        <button type="submit" class="btn btn-primary mt-3 mb-3">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- /.content-wrapper -->

@endsection