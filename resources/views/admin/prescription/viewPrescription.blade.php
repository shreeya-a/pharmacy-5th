@extends('admin.layouts.app')

@section('content')
<style>
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-weight: bold;
    }

    label {
        font-weight: light;
    }
</style>

<div class="content-wrapper bg-white">

    <section class="content">

        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                
                    <form action="" method="post">
                        <!-- <div class="col-md-6"> -->
                        <label for="medicine" class="form-label">Medicine:</label>
                         <select class=" form-control" name="prod_id" id="product">
                            @foreach($product as $product)
                            <option value="{{$product ->id }}">{{$product ->product }}</option>
                            @endforeach
                        </select>
                        </div> 
                         <div class="col-md-3">
                            <label for="prod_qty">Quantity:</label>
                        <input type="number" class="form-control text-center qty-input" name="prod_qty" id="prod_qty" value="1" min="1" max="10">
                            
                        </div>
                        <div class="col-md-3">
                         <label for="price" class="form-label">Price:</label>
                                <input type="number" class="form-control" id="price" name="price" value="{{$product->price}}">
                        </div>
                        </div>
                    </form>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
                        <div class="col-12">
                            <img src="{{asset('/storage/'.$prescription->image)}}" class="product-image" alt="Product Image">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</div>
</div>


@endsection
@section('script-table')
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
@endsection