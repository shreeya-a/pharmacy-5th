@extends('admin.layouts.app')

@section('content')
<style>
    .box{
        width: 100%;
        padding: 10px 20px;
        align-items: center;
    }
    .box1{
        width: 70%;
        padding: 30px 30px;
    }
    .box2{
        width: 30%;
    }
</style>
<div class="content-wrapper  bg-white">
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
                        <li class="breadcrumb-item active">Edit Product</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="container d-flex justify-content-center mt-3">
        <div class="card " style=" width: 80rem;height: 45rem;">
            <div class="card-header bg-light ">
                <!-- <h3 class="">Edit Product</h3> -->
                <div class="d-flex justify-content-between">
                            <div class="me-auto">

                                <h4 class="text-bold">Edit Product</h4>
                            </div>


                            <a href="{{route('product')}}" class="btn btn-success ">Back</a>

                        </div>
                <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-end ml-5mb-0 mt-0">
                    <a href="{{route('product')}}" class="btn btn-success ">Back</a>
                </div> -->

            </div>
            <div class="box" style="display:flex;">
                <div class="box1">
                    <div class="">
                        <form action="{{route('updateProduct')}}" method="post" class=" p-3" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{$product->id}}">

                            <table>

                                <tr>
                                    <!-- <div class="mb-2"> -->
                                    <td> <label for="product" class="form-label">Product:</label></td>

                                    <td class="col-sm-12 p-2"> <input type="text" class="form-control text-capitalize" name="product" id="product" value="{{$product->product}}" required></td>

                                </tr>
                                <tr>
                                    <!-- <div class="mb-2"> -->
                                    <td><label for="category" class="form-label">Category:</label></td>
                                    <td class="p-2">
                                        <select class=" form-control" name="category" id="category">
                                            <option type="hidden" value="{{$product->category_id }}">{{$product->category->category }}</option>
                                            @foreach($category as $category)
                                            <option value="{{$category ->id }}">{{$category ->category }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <!-- <div class="mb-2"> -->
                                    <td> <label for="section" class="form-label">Section:</label></td>
                                    <td class="p-2"> <select class=" form-control" name="section" id="section">
                                    <option type="hidden" value="{{$product->section_id }}">{{$product->section->section }}</option>
                                            @foreach($section as $section)
                                            <option value="{{$section ->id }}">{{$section ->section }}</option>
                                            @endforeach
                                        </select>
                                    </td>

                                </tr>
                                <tr>
                                    <!-- <div class="mb-2"> -->
                                    <td><label for="price" class="form-label">Price:</label></td>
                                    <td class="p-2">
                                        <input type="number" class="form-control" id="price" name="price" value="{{$product->price}}" required>
                                    </td>
                                </tr>

                                <tr>
                                    <!-- <div class="mb-4"> -->
                                    <td><label for="description" class="form-label">Description:</label></td>
                                    <td class="p-2">
                                        <textarea rows="3" class="form-control" name="description" id="description" value="" required> {{$product->description}}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <!-- <div class="input-group mb-2"> -->
                                    <td> <label for="image" class="form-label">Image:</label></td>
                                    <td class="p-2"> <input type="file" name="image" class="form-control p-1" required></td>
                                    <!--  -->
                                </tr>
                                </tr>

                            </table>
                            <table>
                                <tr>
                                    <td class=" p-4"> <label for="featured" class="form-label">
                                            <!-- <input type="checkbox" class="form-control" id="featured" name="featured"> 
                                   featured -->
                                        </label>
                                    </td>
                                    <td class="col-sm-4 text-right">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" id="popular" name="popular" type="checkbox" {{$product->popular =="1"? 'checked':''}}>
                                                <label class="form-check-label">Popular</label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="col-sm-4 text-right">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" id="featured" name="featured" type="checkbox" {{$product->featured =="1"? 'checked':''}}>
                                                <label class="form-check-label">Featured</label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="col-sm-4 text-right">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" id="prescribed" name="prescribed" type="checkbox" {{$product->prescribed =="1"? 'checked':''}}>
                                                <label class="form-check-label">Prescribed</label>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- <td class="col-sm-4 text-right">
                                        <div class="card" style="width: 6rem; height:5rem;">
                                            <img class="card-img-top" src="{{asset('/storage/'.$product->image)}}" alt="Card image cap">
                                        </div>

                                    </td> -->
                                </tr>

                            </table>
                            <div class="d-flex justify-content-center  mt-2">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                            <!-- </div>-->
                    </div>
                    </form>



                   
                </div>
                <div class="box2">
                        <img class="card-img-top" src="{{asset('/storage/'.$product->image)}}" alt="Card image cap">

                    </div>
            </div>
        </div>
    </div>

    @endsection