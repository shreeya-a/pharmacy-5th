@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">

    <div class="content-header">
        <h1 class="mt-8">Add Product</h1>

    </div>


    <div class="container">
        <form action="{{route('saveProduct')}}" method="post" class=" p-3" enctype="multipart/form-data">
            @csrf
            <!-- <fieldset> -->

            <div class="mb-2">
                <label for="product" class="form-label">Product</label>
                <input type="text" class="form-control" name="product" id="product" placeholder="Product name">
            </div>
            <div class="mb-2">
                <label for="category" class="form-label">Category:</label>
                <select class=" form-control" name="category" id="category">
                    @foreach($category as $category)
                    <option value="{{$category ->id }}">{{$category ->category }}</option>
                    @endforeach
        
                </select>
            </div>
            <div class="mb-2">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="price">
            </div>
            <div class="mb-2">
                <label for="image" class="form-label">Image</label>
                <div class="custom-file">
        
                    <input type="file" name="image" class="form-control" >
                </div>

            </div>
            <div class="mb-2">
                <label for="description" class="form-label">Description</label>
                <textarea rows="3" class="form-control" name="description" id="description" placeholder="Description"> </textarea>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Add Product</button>
            </div>
            <!-- </fieldset> -->
        </form>

    </div>
</div>

@endsection