@extends('admin.layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <h1 class="mt-8">Edit Category </h1>

    </div>
    <!-- /.content header -->
    <div class="container">
        <form action="{{route('editCategory')}}" method="post">
            @csrf
            <input type="hidden" name="id" value={{$category->id}}>
            <div>
            <label for="category">Category:</label>
            </div>
            
            <input type="text" name="category" class="form-control" id="category" placeholder="{{$category->category}}">
            <button type="submit" class="btn btn-primary mt-3 mb-3">Save Changes</button>
        </form>
    </div>
</div>

<!-- /.content-wrapper -->

@endsection