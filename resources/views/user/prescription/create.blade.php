@extends('user.layouts.main')

@section('content')

<section class="breadcrumbs-wrapper pt-2 pb-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-style breadcrumbs-style-1 d-md-flex justify-content-between align-items-center">
                    <div class="breadcrumb-left">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Upload Prescription</li>
                        </ol>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container my-2 mb-5">
    <div class="row">

        <div class="card">
            @if(Session::has('fail'))

            <div class="alert alert-danger" role="alert">
                {{Session::get('fail')}}
            </div>
            @endif
        
            <div class="col-md-12">

                <div class="card-body ">
<div class="">
    <h5>Shipping Details</h5>
</div>
                    <hr class="">
                    <form method="POST" action="{{ route('prescriptionStore') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row checkout-form">
                            <div class="col-md-6">
                                <label for="">First Name</label>
                                <input type="text" value="{{ Auth::user()->name}}" name="fname" class="form-control" placeholder="Enter First Name" readonly>

                            </div>
                            <div class="col-md-6">
                                <label for="">Last Name</label>
                                <input type="text" value="{{ Auth::user()->lname}}" name="lname" class="form-control" placeholder="Enter Last Name">

                            </div>

                            <div class="col-md-6 mt-3">
                                <label for="">Email</label>
                                <input type="text" value="{{ Auth::user()->email}}" name="email" class="form-control" placeholder="Enter Email" readonly>

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
                        <!-- <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label> -->

                        <!-- <div class="col-md-6"> -->
                        <!-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> -->
                        <!-- 
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                        <!-- </div> -->
                        <div class=" col-md-6 mt-3">

                            <!-- <div class="col-md-6"> -->
                            <label for="image" class=" black"><strong>Prescription Image </strong></label>
                            <div class="custom-file">
                                <input type="file" class="form-control custom-file-input @error('image') is-invalid @enderror" id="image" name="image" onchange="loadFile(event)">
                                {{-- <label class="custom-file-label" for="image">{{ __('Choose file...') }}</label> --}}

                                @error('image')
                                <span class="invalid-feedback mt-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-3 mt-3d-flex justify-content-center">
                            <div class="col-md-6 offset-md-4 mt-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Upload') }}
                                </button>
                            </div>
                        </div>
                </div>
                </form>
            </div>




        </div>
    </div>
</div>
</div>




@endsection