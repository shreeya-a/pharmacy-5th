@extends('admin.layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <h1 class="mt-8">Edit section </h1>

    </div>
    <!-- /.content header -->
    <div class="container">
        <form action="{{route('editSection')}}" method="post">
            @csrf
            <input type="hidden" name="id" value={{$section->id}}>
            <div>
            <label for="section">Section:</label>
            </div>
            
            <input type="text" name="section" class="form-control text-capitalize" id="section" placeholder="{{$section->section}}">
            <button type="submit" class="btn btn-primary mt-3 mb-3">Save Changes</button>
        </form>
    </div>
</div>

<!-- /.content-wrapper -->

@endsection