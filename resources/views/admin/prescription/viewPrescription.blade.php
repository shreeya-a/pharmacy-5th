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
        <!-- <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1 text-center mt-5">
            @if(Session::has('success'))

            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
            @endif
        </div> -->

        <!-- <div class="card card-solid">
            <div class="card-body">
                <div class="row"> -->
        <div class="container my-2">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card">
                            <img src="{{asset('/storage/'.$prescription->image)}}" class="product-image" alt="Product Image">

                        </div>
                        <hr>
                        <form action="{{url('add-prescription-item')}}" method="post" class="mr-2">
                            @csrf
                            <!-- <div class="col-md-6"> -->
                            <table >
                                <tr>
                                    <td class="p-2">
                                        <input type="hidden" name="pres_id" value="{{$prescription->id}}">
                                        <label for="medicine" class="form-label">Medicine:</label>
                                        <select class=" form-control" name="prod_id" id="product">
                                            @foreach($product as $product)
                                            <option value="{{$product ->id }}">{{$product ->product }}</option>
                                            <!-- {{$itemprice = $product->price}} -->
                                            @endforeach
                                        </select>
                                    </td>
                                    <!-- </div> -->
                                    <td>
                                        <div class="p-2">
                                            <label for="prod_qty">Quantity:</label>
                                            <input type="number" class="form-control text-center qty-input" name="prod_qty" id="prod_qty" value="1" min="1" max="10">

                                        </div>
                                    </td>

                                    <td>
                                        <label for="message" class="form-label">Message:</label>
                                        <textarea name="message" id="message" class="form-control" cols="30" rows="1" placeholder="How to use?"></textarea>
                                    </td>

                    </div>
                    </tr>

                    </table>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary mt-4 col-sm-4">Add Item</button>
                    </div>

                    </form>


                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <table class="table table-responsive">
                        @php
                        $SN=1;
                        $total =0;
                        @endphp
                        @if (!empty($presItem))

                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Product</th>
                                <th>Message</th>
                                <th>Quantity</th>
                                <th>Rate</th>
                                <th>Amt</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($presItem as $item)
                            <tr>
                                <td>{{$SN++}}</td>
                                <td>{{$item->product->product}}</td>
                                <td>{{$item->message}}</td>
                                <td>{{$item->qty}}</td>
                                <td>{{$item->product->price}}</td>
                                <td>{{$item->product->price * $item->qty}}</td>
                                <td>
                                <a href="{{url('/delete-prescription-item/'.$item->id .'/'.$prescription->id)}}"><i class="fas fa-archive" style="color:red" aria-hidden="true"></i></a>

                                <!-- <a href="{{url('delete-prescription-item/'.$item->id)}}" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i> Remove</a> -->
                                </td>
                            </tr>
                            @php
                            $total += $item->qty *$item->product->price;
                            @endphp

                            @endforeach
                        </tbody>
                </div>

                @endif

                </table>
                <div class="d-flex justify-content-between p-2">
                    <h4>Grand Total: </h4>
                    <h5 class="mr-4 pr-2 ">Rs {{$total}}</h5>
                </div>
                <div>
                </div>
            </div>
            <div class="mt-3  ">
                <form action="{{url('update-prescription-order/'.$prescription->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <label for="" class="form-label">Order Status</label>
                    <select class="form-control" name="order_status">
                        <option {{$prescription->status == '0'? 'selected': ''}} value="0">Pending</option>
                        <option {{$prescription->status == '1'? 'selected': ''}} value="1">Completed</option>
                        <option {{$prescription->status == '2'? 'selected': ''}} value="2">Cancelled</option>
                    </select>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mt-4 col-sm-4">Update</button>
            </div>
            </form>

        </div>
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