@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">

    <div class="content-header bg-white">
        <h1 class=" text-center">Product page</h1>

    </div>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1 text-center mt-5">
                @if(Session::has('success'))

                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-1 mt-3">
            <a href="{{route('addProduct')}}" class="btn btn-primary me-md-2">+Add Product</a>
        </div>

        <table class="table table-bordered  table-sm bg-white">
            <thead class="text-center p-4">
                <th>SN</th>
                <th>ID</th>
                <th>Product</th>
                <th>Category</th>
                <th>Section</th>
                <th>Price</th>
                <th>Description</th>
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
                    <td>{{$value->id}}</td>
                    <td>{{$value->product}}</td>
                    <td>{{$value->category->category}}</td>
                    <td>{{$value->section->section}}</td>
                    <td>{{$value->price}}</td>
                    <td>{{$value->description}}</td>

                    <td class="text-left">
                        <img src="{{asset('/storage/'.$value->image)}}" alt="product" width="50 rem" height="50 rem">
                    </td>
                    <td>
                        <a href="{{url('/edit-product/'.$value->id)}}" class="btn btn-warning">Edit</a>
                        <a href="{{url('/delete-product/'.$value->id)}}" class="btn btn-danger">Delete</a>

                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection