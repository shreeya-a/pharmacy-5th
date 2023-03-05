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
    <section class="content-header ">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h5>Prescription Order Placement</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Prescription</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <div class="container my-2">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card">
                        <img src="{{asset('/storage/'.$prescription->image)}}" class="product-image" alt="Product Image">

                    </div>
                    <hr>
                    <form action="{{url('add-prescription-item')}}" method="post" class=" p-2">
                        @csrf
                        <!-- <div class="col-md-6"> -->
                        <table>
                            <tr>
                                <td class=" col-4 p-1">
                                    <input type="hidden" name="pres_id" value="{{$prescription->id}}">
                                    <label for="medicine" class="form-label   ">Medicine:</label>
                                    <select class=" form-control" name="prod_id" id="product">
                                        @foreach($product as $product)
                                        <option value="{{$product ->id }}">{{$product ->product }}</option>
                                        <!-- {{$itemprice = $product->price}} -->
                                        @endforeach
                                    </select>
                                </td>
                                <!-- </div> -->
                                <td class="col-2">
                                    <div>
                                        <label for="prod_qty">Qty:</label>
                                        <input type="number" class="form-control text-center  qty-input" name="prod_qty" id="prod_qty" value="1" min="1" max="10">

                                    </div>
                                </td>

                                <td class=" col-8 p-1">
                                    <label for="message" class="form-label">Message:</label>
                                    <textarea name="message" id="message" class="form-control col-md-12" cols="30" rows="1" placeholder="How to use?"></textarea>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-primary mt-4">Add</button>
                                </td>

                </div>
                </tr>

                </table>

                </form>

            </div>
            <!-- row class end -->
        </div>

        <div class="col-md-6">
            <div class="card">

                <div class="p-2">
                    <div class="card-header">
                        <h3 class="card-title">Prescription Items</h3>

                        <div class="card-tools">
                            <ul class="pagination pagination-sm float-right">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                    <table class="table table-bordered table-responsive">
                        @if ($presItem->count()>0)
                        @php
                        $total =0;
                        @endphp

                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Message</th>
                                <th>Qty</th>
                                <th>Rate</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($presItem as $item)
                            <tr>
                                <td>{{$item->product->product}}</td>
                                <td class="col-10 " style="word-break: break-all">{{$item->message}}</td>
                                <td>{{$item->qty}}</td>
                                <td>{{$item->product->price}}</td>
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


                    </table>

                </div>

                <div class="d-flex justify-content-between p-2">
                    <h4>Grand Total: </h4>
                    <h5 class="mr-4 pr-2 ">Rs {{$total}}</h5>
                </div>
            </div>
            <div class="card ">
                <div class="p-3">
                    <form action="{{url('update-prescription-order/'.$prescription->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <table>
                            <tr>


                                <td class="col-12">
                                    <label for="" class="form-label">Order Status: </label>
                                    <select class="form-control" name="order_status">
                                        <option {{$prescription->status == '0'? 'selected': ''}} value="0">Pending</option>
                                        <option {{$prescription->status == '1'? 'selected': ''}} value="1">Completed</option>
                                        <option {{$prescription->status == '2'? 'selected': ''}} value="2">Cancelled</option>
                                    </select>
                                </td>
                                <td></td>
                                <td>
                                    <button type="submit" class="btn btn-primary  mt-4 col-20">Update</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                    @if($prescription->status == 1)
                    <table class="mt-2">
                        <form action="{{url('invoice/'.$prescription->id)}}" method="post">
                            @csrf
                            <tr>
                                <td class="col-sm-5">
                                    <label for="dis" class="form-label">Discount: </label>
                                    <input type="number" name="discount" class="form-control" id="dis" value="5" min="1" max="100">
                                </td>
                                <td class="col-sm-5"><label for="tax" class="form-label">Tax: </label>
                                    <input type="number" name="tax" class="form-control" id="dis" value="8" min="1" max="13">
                                </td>
                                <td class="col-sm-12 ">
                                    <button type="submit" class="btn btn-success mt-3">Generate Invoice</button>
                                </td>
                            </tr>
                    </table>
                    @endif
                </div>
            </div>
            @else

            <div class="p-2">

                <hr>

                <!-- <p>No items added</p> -->
                <p>Prescription is yet to be processed.</p>
            </div>

            @endif
        </div>




    </div>
</div>

</div>
</div>






@endsection
@section('script-table')
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
@endsection