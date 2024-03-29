@extends('admin.layouts.app')

@section('content')
<!-- <style>
    .box {
        width: 100%;
        padding: 10px 20px;
        align-items: center;
    }

    .box1 {
        width: 70%;
        padding: 30px 30px;
    }

    .box2 {
        width: 30%;
        background-color: red;
    }
</style> -->
<div class="content-wrapper bg-white ">
<section class="content-header ">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h5>Product</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Product</li>
                        <li class="breadcrumb-item active">Add Product</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="container d-flex justify-content-center mt-2">
        <div class="card " style=" width: 80rem;height: 40rem;">
            <div class="card-header bg-light">
                <h3 class="text-center">Add Product</h3>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-0 mt-0">
                    <a href="{{route('product')}}" class="btn btn-primary me-md-2">Back</a>
                </div>
            </div>

            <form action="{{route('saveProduct')}}" method="post" class=" p-0" enctype="multipart/form-data">
                <div class=" p-4">
                @csrf
                <table>

                    <tr class="p-2">
                        <!-- <div class="mb-2"> -->
                        <td class=""> <label for="product" class="form-label">Product:</label></td>
                        <td class="col-sm-12 p-2"> <input type="text" class="form-control text-capitalize  @error('product') is-invalid @enderror" name="product" id="product" placeholder="Product name"></td>
                     
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
                        <td> <label for="category" class="form-label">Section:</label></td>
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
                        <td class="p-2"> <input type="number" class="form-control  @error('price') is-invalid @enderror" id="price" name="price" placeholder="price"></td>

                    </tr>

                    <tr>
                        <!-- <div class="input-group mb-2"> -->
                        <td> <label for="image" class="form-label">Image:</label></td>
                        <!-- <div class="custom-file">

                                <td class="p-2"> <input type="file" name="image" class="form-control p-1"></td> -->
                        <!--  -->
                        <!-- <td class="p-2"> -->
                        <!-- <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div> -->
                        <td class="p-2"> <input type="file" name="image" class="form-control  @error('image') is-invalid @enderror p-1"></td>
                        <!-- </td> -->
                    </tr>
                    <!-- <div class="input-group mb-3"> -->

                    <tr>
                        <!-- <div class="mb-2"> -->
                        <td> <label for="description" class="form-label">Description:</label></td>
                        <td class="p-2"> <textarea rows="3" class="form-control  @error('description') is-invalid @enderror" name="description" id="description" placeholder="Description"> </textarea></td>

                    </tr>
                </table>
                <table class="mt-3">
                    <tr></tr>
                    <tr>
                        <td></td>
                        <td class="col-sm-4 text-right">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" id="popular" name="popular" type="checkbox">
                                    <label class="form-check-label">Popular</label>
                                </div>
                            </div>
                        </td>
                        <td class="col-sm-4 text-right">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" id="featured" name="featured" type="checkbox">
                                    <label class="form-check-label">Featured</label>
                                </div>
                            </div>
                        </td>
                        <td class="col-sm-4 text-right">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" id="pescribed" name="pescribed" type="checkbox">
                                    <label class="form-check-label">Prescribed</label>
                                </div>
                            </div>
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
       

            </div>
        </form>


</div>
</div>
</div>

</div>
</div>


@endsection