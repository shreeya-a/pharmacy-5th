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
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary d-flex ">
                        <div class="me-auto">
                        <h4 class="text-white">Order View</h4>
                        </div>
                        <div class="p-2">

                        <a href="{{url('orders')}}" class="btn btn-success">Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 order-details mr-5">
                                <h4>Shipping details</h4>
                                <table class="table table-bordered-none table-responsive">
                                    <tr>
                                        <th>First Name</th>
                                        <th>:</th>
                                        <td>{{$order->fname}}</td>
                                    </tr>
                                    <tr>
                                        <th>Last Name</th>
                                        <th>:</th>
                                        <td>{{$order->lname}}</td>
                                    </tr>
                                    <tr>
                                        <th>Tracking Id</th>
                                        <th>:</th>
                                        <td>{{$order->tracking_no}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <th>:</th>
                                        <td>{{$order->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Contact No. </th>
                                        <th>:</th>
                                        <td>{{$order->phone}}</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping Address </th>
                                        <th>:</th>
                                        <td>
                                            {{$order->address}}, {{$order->city}}, <br><br>
                                            {{$order->state}}, {{$order->country}}
                                        </td>
                                    </tr>

                                </table>
                            </div>
                            <div class="col-md-7 ">
                                <h4>Order details</h4>
                                <table class="table table-bordered text-center ">
                                    <thead>
                                        <th>Product</th>
                                        <th>Image</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                    </thead>
                                    <tbody>
                                        @foreach($order->orderitems as $item)
                                        <tr>
                                            <td>{{$item->product->product}}</td>
                                            <td>
                                                <img class="card-img-top" src="{{asset('/storage/'.$item->product->image)}}" style="width: 3rem; height:3rem;" alt="pp">
                                            </td>
                                            <td>{{$item->qty}}</td>
                                            <td>{{$item->price}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-between">
                                    <h4>Grand Total: </h4>
                                    <h5 class="mr-4 pr-2 ">Rs {{$order->total_price}}</h5>
                                </div>
                                <div class="mt-3  ">
                                    <form action="{{url('update-order/'.$order->id)}}" method="post">
                                        @csrf
                                        @method('PUT')
                                    <label for="" class="form-label">Order Status</label>
                                    <select class="form-control" name="order_status">
                                        <option {{$order->status == '0'? 'selected': ''}} value="0">Pending</option>
                                        <option {{$order->status == '1'? 'selected': ''}} value="1">Completed</option>
                                        <option {{$order->status == '2'? 'selected': ''}} value="2">Canclled</option>
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
    </div>

</div>

</div>
</div>
</div>


@endsection
@section('script-table')
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
@endsection