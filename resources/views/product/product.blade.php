@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper bg-white">

    <!-- <div class="content-header bg-white">
        <h1 class=" text-center">Product</h1>

    </div> -->


    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1 text-center mt-5" >
                @if(Session::has('success'))

                <div class="alert alert-success fade-message" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
            </div>
  
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
            <a href="{{route('addProduct')}}" class="btn btn-primary me-md-2">+Add Product</a>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-bold">Product Table</h3>

                       
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
                                        <a href="{{url('/edit-product/'.$value->id)}}" ><i class="fas fa-pen" aria-hidden="true"></i></a>
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
                <div class="row">
                {{$product->links()}}
            </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
</div> 
<script>
    $(function(){
        setTimeout(function() {
            $('.fade-message').slideUp();
        }, 2000);
    });
    </script>

@endsection
@section('script-table')
<!-- <script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script> -->
<script src="{{asset('admin/dist/js/delete.js')}}"></script>

@endsection