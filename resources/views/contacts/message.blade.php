@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper bg-white">
    <!-- <div class="container"> -->
    <section class="content-header ">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h5>Contact Us</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Contact Us</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <h1>User Info:</h1>
    <h4>Name:{{$details['name']}}</h4>
    <h4>Email:{{$details['email']}}</h4>
    <h4>Phone:{{$details['phone']}}</h4>
    <h4>Message:{{$details['msg']}}</h4>
@endsection

@section('script-table')
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/dist/js/delete.js')}}"></script>

@endsection