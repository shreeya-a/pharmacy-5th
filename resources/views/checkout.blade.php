@extends('user.layouts.main')

@section('content')
<div class="container my-5">
    <form action="{{url('place-order')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <h6>Basic Details</h6>
                        <hr>
                        <div class="row checkout-form">
                            <!-- <div class="mb-3"> -->
                            <div class="col-md-6">
                                <label for="">First Name</label>
                                <input type="text" value="{{ Auth::user()->name}}" name="fname" class="form-control" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="">Email</label>
                                <input type="text" value="{{ Auth::user()->email}}" name="email" class="form-control" readonly>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Phone Number</label>
                                <input type="text" value="{{ Auth::user()->phone}}" name="phone" class="form-control  @error('phone') is-invalid @enderror" placeholder="Enter Phone Number">
                                @error('phone')
                                <span class="invalid-feedback mt-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Address</label>
                                <input type="text" value="{{ Auth::user()->address}}" name="address" class="form-control  @error('address') is-invalid @enderror" placeholder="Enter Address ">
                                @error('address')
                                <span class="invalid-feedback mt-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">City</label>
                                <input type="text" value="{{ Auth::user()->city}}" name="city" class="form-control  @error('city') is-invalid @enderror" placeholder="Enter City">
                                @error('city')
                                <span class="invalid-feedback mt-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Country</label>
                                <input type="text" value="{{ Auth::user()->country}}" name="country" class="form-control  @error('country') is-invalid @enderror" placeholder="Enter Country">
                                 @error('country')
                                <span class="invalid-feedback mt-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @php
            $total =0;
            @endphp
            <div class="col-md-5">
                <!-- <div class="card">
                    <div class="card-body"> -->
                <h6>Order Details</h6>
                <hr>
                @if($cartItem->count()>0)
                <table class="table ">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Amt</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartItem as $item)
                        <tr>
                            <td>{{$item->product->product}}</td>
                            <td>{{$item->prod_qty}}</td>
                            <td>{{$item->product->price}} </td>
                            <td>{{$item->product->price * $item->prod_qty}} </td>
                        </tr>
                        @php
                        $total +=$item->product->price * $item->prod_qty;
                        @endphp
                        @endforeach

                    </tbody>
                </table>
                <div class="d-flex justify-content-between mr-5">
                    <h5 class="ml-2">Total:</h5>
                    <h6>Rs {{$total}}</h6>

                </div>
                <div class="  d-flex justify-content-center mt-4 mb-3 mr-5">
                    <button type="submit" class="btn btn-primary col-sm-6">Place Order</button>
                </div>
                @else
                <h5 class="text-center">Your <i class="mdi mdi-cart"></i> Cart is Empty</h5>
                @endif
                <!-- </div>
                </div> -->
            </div>
        </div>
    </form>
</div>
@endsection