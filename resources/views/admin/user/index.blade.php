@extends('admin.layouts.app')

@section('content')

<div class="content-wrapper bg-white">
    <!-- <div class="container"> -->
    <section class="content-header ">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h5>User</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Users List</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="row">
        <div class="col-md-12">
            <div class="card m-0 shadow-none">
                <div class="card-body ">
                    <div class="card-header">
                        <h5 class="card-title text-bold">User List </h5>
                    </div>
                    <hr class="m-0">
                    <div class="card-body table-responsive p-0" style="height: 600px;">
                        <table class="table table-head-fixed table-bordered text-nowrap">
                            <thead>
                                <tr>
                                    <td>SN</td>
                                    <td>Name</td>
                                    <td>Email</td>
                                    <td>Date of registration</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $key => $user)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->created_at->format('Y-m-d')}}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <div class="row mt-3 ml-1">
                            {{$users->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endsection
    @section('script-table')
    <script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/dist/js/delete.js')}}"></script>

    @endsection