@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">

    <div class="content-header">
        <!-- <h1 class="mt-8">Edit Product</h1> -->

    </div>


    <div class="container">
        <div class="card " style="height: 43rem;">
            <div class="card-header bg-gray">
                <h3 class="text-center ">Edit Product</h4>
            </div>
            <div class="card-body">
                <form action="{{route('updateProduct')}}" method="post" class=" p-3" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <!-- <fieldset> -->
                    <input type="hidden" name="id" value="{{$product->id}}">

                    <div class="mb-2">
                        <label for="product" class="form-label">Product</label>
                        <input type="text" class="form-control text-capitalize" name="product" id="product" value="{{$product->product}}">
                    </div>
                    <div class="mb-2">
                        <label for="category" class="form-label">Category:</label>
                        <select class=" form-control" name="category" id="category">

                            <option value="{{$product->category_id }}">{{$product->category_id }}</option>
                            @foreach($category as $category)
                            <option value="{{$category ->id }}">{{$category ->category }}</option>
                            @endforeach




                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="section" class="form-label">section:</label>
                        <select class=" form-control" name="section" id="section">

                            <option value="{{$product->section_id }}">{{$product->section_id }}</option>
                            @foreach($section as $section)
                            <option value="{{$section ->id }}">{{$section ->section }}</option>
                            @endforeach




                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="featured" class="form-label">featured</label>
                        <input type="checkbox" {{$product->featured =="1"? 'checked':''}} class="form-control" id="featured" name="featured">
                    </div>
                    <div class="mb-2">
                        <label for="popular" class="form-label">popular</label>
                        <input type="checkbox" {{$product->popular =="1"? 'checked':''}} class="form-control" id="popular" name="popular">
                    </div>
                    <div class="mb-2">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{$product->price}}">
                    </div>

                    <!-- <span><img src="{{asset('/storage/'.$product->image)}}" alt="product" width="100" height="100"></span> -->
                    <!-- </label> -->
                    <table>
                        <tr>

                            <label for="image" class="form-label">Image </label>
                        </tr>
                        <tr>
                            <td class="col-sm-11">

                                <div class="custom-file">
                                    <!-- <label for="image" class="form-label">Image</label> -->
                                    <input type="file" name="image" class="form-control">
                                </div>


                            </td>
                            <td>
                                <div class="card" style="width: 6rem; height:5rem;">
                                    <img class="card-img-top" src="{{asset('/storage/'.$product->image)}}" alt="Card image cap">
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="mb-4">
                        <label for="description" class="form-label">Description</label>
                        <textarea rows="3" class="form-control" name="description" id="description" value=""> {{$product->description}}</textarea>
                    </div>
                    <div class="d-flex justify-content-center ">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                    <!-- </fieldset> -->
                </form>
            </div>
        </div>
    </div>
</div>

@endsection