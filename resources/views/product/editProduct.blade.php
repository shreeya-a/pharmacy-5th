@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">

    <div class="content-header bg-white">
        <h1 class="mt-8 text-center"> Product</h1>

    </div>


    <div class="container d-flex justify-content-center">
        <div class="card " style=" width: 40rem;height: 43rem;">
            <div class="card-header bg-light">
                <h3 class="text-center">Edit Product</h3>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-0 mt-0">
                    <a href="{{route('product')}}" class="btn btn-primary me-md-2">Back</a>
                </div>

            </div>
            <div class="card-body">
                <form action="{{route('updateProduct')}}" method="post" class=" p-3" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{$product->id}}">

                    <table>

                        <tr>
                            <!-- <div class="mb-2"> -->
                            <td> <label for="product" class="form-label">Product:</label></td>

                            <td class="col-sm-12 p-2"> <input type="text" class="form-control text-capitalize" name="product" id="product" value="{{$product->product}}"></td>

            </div>
            </tr>
            <tr>
                <!-- <div class="mb-2"> -->
                <td><label for="category" class="form-label">Category:</label></td>
                <td class="p-2">
                    <select class=" form-control" name="category" id="category">
                        <option value="{{$product->category_id }}">{{$product->category_id }}</option>
                        @foreach($category as $category)
                        <option value="{{$category ->id }}">{{$category ->category }}</option>
                        @endforeach
                    </select>
                </td>
        </div>
        </tr>
        <tr>
            <!-- <div class="mb-2"> -->
            <td><label for="section" class="form-label">Section:</label></td>
            <td class="p-2">
                <select class=" form-control" name="section" id="section">
                    <option value="{{$product->section_id }}">{{$product->section_id }}</option>
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
                <input type="number" class="form-control" id="price" name="price" value="{{$product->price}}">
            </td>
        </tr>

        <tr>
            <!-- <div class="mb-4"> -->
            <td><label for="description" class="form-label">Description:</label></td>
            <td class="p-2">
                <textarea rows="3" class="form-control" name="description" id="description" value=""> {{$product->description}}</textarea>
            </td>
        </tr>
        <tr>
            <!-- <div class="input-group mb-2"> -->
            <td> <label for="image" class="form-label">Image:</label></td>
            <td class="p-2"> <input type="file" name="image" class="form-control p-1"></td>
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
                <td class="col-sm-4 text-center"> <label for="featured" class="form-label">
                        <input type="checkbox" {{$product->featured =="1"? 'checked':''}} class="form-control" id="featured" name="featured">
                        Featured

                    </label>
                </td>
                <td class="col-sm-4 text-center">

                    <label for="popular" class="form-label">
                        <input type="checkbox" {{$product->popular =="1"? 'checked':''}} class="form-control" id="popular" name="popular">
                        Popular

                    </label>
                </td>
                <td class="col-sm-4 text-right">
                    <div class="card" style="width: 6rem; height:5rem;">
                        <img class="card-img-top" src="{{asset('/storage/'.$product->image)}}" alt="Card image cap">
                    </div>

                </td>
            </tr>

        </table>
        <div class="d-flex justify-content-center  mt-2">
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
        </form>
    </div>
</div>
</div>
</div>

@endsection