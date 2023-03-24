@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper bg-white">

    <!-- <div class="content-header bg-white">
        <h1 class=" text-center">Product</h1>

    </div> -->
    <section class="content-header ">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h5>Product</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Product</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card ">
                    <div class="card-header p-0">
                        <div class="d-flex justify-content-between p-2 ">
                            <div class="me-auto ml-2">
                                <h4 class=" text-bold">Product Table</h4>
                            </div>
                            <a href="{{route('addProduct')}}" class="btn btn-primary ">Add Product</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 500px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead class="text-center p-4">
                                    <th>SN</th>
                                    <!-- <th>ID</th> -->
                                    <th>Product</th>
                                    <th>Category</th>
                                    <th>Section</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th colspan="2">Action</th>
                                </thead>
                                <tbody class="text-center">
                                    @php
                                    $SN=1;
                                    @endphp
                                    @foreach($product as $value)



                                    <tr>
                                        <td>{{$SN++}}</td>
                                        <!-- <td>{{$value->id}}</td> -->
                                        <td>{{$value->product}}</td>
                                        <td>{{$value->category->category}}</td>
                                        <td>{{$value->section->section}}</td>
                                        <td>{{$value->price}}</td>

                                        <td class="">
                                            <img src="{{asset('/storage/'.$value->image)}}" alt="product" width="50 rem" height="50 rem">
                                        </td>
                                        <td>
                                            <a href="{{url('/edit-product/'.$value->id)}}"><i class="fas fa-pen" aria-hidden="true"></i></a>
                                            <a href="{{url('/delete-product/'.$value->id)}}" class="delete" data-confirm="Are you sure to delete {{$value->product}}?"><i class="fas fa-archive" style="color:red" aria-hidden="true"></i></a>

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
                <div class="row">
                    {{$product->links()}}
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
    </div>
    <script>
        $(function() {
            setTimeout(function() {
                $('.fade-message').slideUp();
            }, 2000);
        });
    </script>

    @endsection
    @section('script-table')
    <script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/dist/js/delete.js')}}"></script>

    @endsection