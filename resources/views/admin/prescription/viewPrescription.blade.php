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
        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1 text-center mt-5">
            @if(Session::has('success'))

            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
            @endif
        </div>

        <div class="card card-solid">
            <div class="card-body">
                <div class="row">

                    <form action="{{url('add-prescription-item')}}" method="post">
                        @csrf
                        <!-- <div class="col-md-6"> -->
                        <input type="hidden" name="pres_id" value="{{$prescription->id}}">
                        <label for="medicine" class="form-label">Medicine:</label>
                        <select class=" form-control" name="prod_id" id="product">
                            @foreach($product as $product)
                            <option value="{{$product ->id }}">{{$product ->product }}</option>
                            <!-- {{$itemprice = $product->price}} -->
                            @endforeach
                        </select>
                </div>
                <div class="col-md-3">
                    <label for="prod_qty">Quantity:</label>
                    <input type="number" class="form-control text-center qty-input" name="prod_qty" id="prod_qty" value="1" min="1" max="10">

                </div>
          
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mt-4 col-sm-4">Add Item</button>
            </div>
            </form>
        </div>
        <table class="table">
        @php
                $SN=1;
            @endphp
            @if (!empty($presItem))

                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                        <tbody>
                            @foreach($presItem as $item)
                            <tr>
                                <td>{{$SN++}}</td>
                                <td>{{$item->product->product}}</td>
                                <td>{{$item->qty}}</td>
                                <td>{{$item->product->price}}</td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </thead>
                    @endif
                </table>

        <div class="col-12">
            <div class="col-sm-6">
            <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
            <div class="col-12">
                <img src="{{asset('/storage/'.$prescription->image)}}" class="product-image" alt="Product Image">

            </div>
            </div>
            @php
                $SN=1;
            @endphp
            <div class="col-sm-6">
              
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