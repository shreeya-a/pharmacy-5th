@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">



    <div class="container">
        <div class="card " style="height: 43rem;">
            <div class="card-header bg-gray">
                <h3 class="text-center">Add Product</h3>

            </div>

            <div class="card-body">
                <form action="{{route('saveProduct')}}" method="post" class=" p-3" enctype="multipart/form-data">
                    @csrf
                    <!-- <fieldset> -->
                    <table>
                        <tr>
                            <div class="mb-2">
                                <td> <label for="product" class="form-label">Product</label></td>
                                <td> <input type="text" class="form-control text-capitalize" name="product" id="product" placeholder="Product name"></td>
                            </div>
                        </tr>
                        <tr>
                            <div class="mb-2">
                                <td> <label for="category" class="form-label">Category:</label></td>
                                <td> <select class=" form-control" name="category" id="category">
                                        @foreach($category as $category)
                                        <option value="{{$category ->id }}">{{$category ->category }}</option>
                                        @endforeach
                                </td>
                                </select>
                            </div>
                        </tr>
                        <tr>
                            <div class="mb-2">
                                <td> <label for="section" class="form-label">section:</label></td>
                                <td> <select class=" form-control" name="section" id="section">
                                        @foreach($section as $section)
                                        <option value="{{$section ->id }}">{{$section ->section }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </div>
                        </tr>
<tr>
                        <div class="mb-2">
                           <td> <label for="price" class="form-label">Price</label></td>
                           <td> <input type="number" class="form-control" id="price" name="price" placeholder="price"></td>
                        </div>
                        </tr>
                        <tr>
                            <td></td>
                            <div class="mb-2">
                              <td>  <label for="featured" class="form-label">featured</label>
                                <input type="checkbox" class="form-control" id="featured" name="featured"></td>
                            </div>
                            <div class="mb-2">
                               <td> <label for="popular" class="form-label">popular</label></td>
                               <td>     <input type="checkbox" class="form-control" id="popular" name="popular" ></td>

                            </div>
                        </tr>
                        <tr>
                            <div class="input-group mb-2">
                              <td>  <label for="image" class="form-label">Image</label></td>
                                <div class="custom-file">

                                 <td>   <input type="file" name="image" class="form-control p-1"></td>
                                </div>

                            </div>
                        </tr>
                        <div class="input-group mb-3">

                        <tr>
                            <div class="mb-2">
                              <td>  <label for="description" class="form-label">Description</label></td>
                              <td>  <textarea rows="3" class="form-control" name="description" id="description" placeholder="Description"> </textarea></td>
                            </div>
                        </tr>
                        <tr>
                        <div class="d-flex justify-content-center">
                            <td></td>
                           <td> <button type="submit" class="btn btn-primary">Add Product</button></td>
                        </div>
                        </tr>
                        <!-- </fieldset> -->
                    </table>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection