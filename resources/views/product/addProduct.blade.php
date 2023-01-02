@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">


    <div class="content-header">
        <!-- <h1 class="mt-8">Edit Product</h1> -->

    </div>

    <div class="container d-flex justify-content-center">
        <div class="card " style=" width: 40rem;height: 43rem;">
            <div class="card-header bg-light">
                <h3 class="text-center">Add Product</h3>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-0 mt-0">
                    <a href="{{route('product')}}" class="btn btn-primary me-md-2">Back</a>
                </div>

            </div>

            <div class="card-body p-2">
                <form action="{{route('saveProduct')}}" method="post" class=" p-0" enctype="multipart/form-data">
                    @csrf
                    <table>

                        <tr class="p-2">
                            <!-- <div class="mb-2"> -->
                            <td class=""> <label for="product" class="form-label">Product:</label></td>
                            <td class="col-sm-12 p-2"> <input type="text" class="form-control text-capitalize" name="product" id="product" placeholder="Product name"></td>
                            <!-- </div> -->
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <!-- <div class="mb-2"> -->
                            <td> <label for="category" class="form-label">Category:</label></td>
                            <td class="p-2"> <select class=" form-control" name="category" id="category">
                                    @foreach($category as $category)
                                    <option value="{{$category ->id }}">{{$category ->category }}</option>
                                    @endforeach
                            </td>
                            </select>

                        </tr>
                        <tr>
                            <!-- <div class="mb-2"> -->
                            <td> <label for="section" class="form-label">Section:</label></td>
                            <td class="p-2"> <select class=" form-control" name="section" id="section">
                                    @foreach($section as $section)
                                    <option value="{{$section ->id }}">{{$section ->section }}</option>
                                    @endforeach
                                </select>
                            </td>

                        </tr>
                        <tr>
                            <!-- <div class="mb-2"> -->
                            <td> <label for="price" class="form-label">Price:</label></td>
                            <td class="p-2"> <input type="number" class="form-control" id="price" name="price" placeholder="price"></td>

                        </tr>

                        <tr>
                            <!-- <div class="input-group mb-2"> -->
                            <td> <label for="image" class="form-label">Image:</label></td>
                            <div class="custom-file">

                                <td class="p-2"> <input type="file" name="image" class="form-control p-1"></td>
                                <!--  -->


                        </tr>
                        <!-- <div class="input-group mb-3"> -->

                        <tr>
                            <!-- <div class="mb-2"> -->
                            <td> <label for="description" class="form-label">Description:</label></td>
                            <td class="p-2"> <textarea rows="3" class="form-control" name="description" id="description" placeholder="Description"> </textarea></td>

                        </tr>
                    </table>
                    <table>
                        <tr>
                            <!-- <div class="mb-2"> -->
                            <!-- <div class="d-flex justify-content-left mt-2 "> -->

                            <td class="col-sm-6 p-4"> <label for="featured" class="form-label">
                                    <!-- <input type="checkbox" class="form-control" id="featured" name="featured"> 
                                   featured -->

                                </label>
                            </td>
                            <td class="col-sm-4 text-left"> <label for="featured" class="form-label">
                                    <input type="checkbox" class="form-control" id="featured" name="featured">
                                    featured

                                </label>
                            </td>
                            <td class="col-sm-4 text-right">

                                <label for="popular" class="form-label">
                                    <input type="checkbox" class="form-control" id="popular" name="popular">
                                    popular

                                </label>
                            </td>
                        </tr>


                    </table>

                    <tr>
                        <td>
                            <div class="d-flex justify-content-center mt-3">

                                <button type="submit" class="btn btn-primary">Add Product</button>
                            </div>
                        </td>
                    </tr>

                </form>
            </div>
        </div>

    </div>
</div>

@endsection