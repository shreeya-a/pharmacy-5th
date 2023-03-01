@extends('user.layouts.main')

@section('content')



<div class="container my-5">
    <div class="row">

        <div class="card">
            @if(Session::has('fail'))

            <div class="alert alert-danger" role="alert">
                {{Session::get('fail')}}
            </div>
            @endif
            <div class="card-header">{{ __('Upload prescription') }}</div>
            <div class="col-md-7">

                <div class="card-body ">

                    <hr>
                    <form method="POST" action="{{ route('prescriptionStore') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row checkout-form">
                            <div class="col-md-6">
                                <label for="">First Name</label>
                                <input type="text" value="{{ Auth::user()->name}}" name="fname" class="form-control" placeholder="Enter First Name">
                            </div>
                            <div class="col-md-6">
                                <label for="">Last Name</label>
                                <input type="text" value="{{ Auth::user()->lname}}" name="lname" class="form-control" placeholder="Enter Last Name">
                            </div>

                            <div class="col-md-6 mt-3">
                                <label for="">Email</label>
                                <input type="text" value="{{ Auth::user()->email}}" name="email" class="form-control" placeholder="Enter Email">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Phone Number</label>
                                <input type="text" value="{{ Auth::user()->phone}}" name="phone" class="form-control" placeholder="Enter Phone Number">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Address</label>
                                <input type="text" value="{{ Auth::user()->address}}" name="address" class="form-control" placeholder="Enter Address ">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">City</label>
                                <input type="text" value="{{ Auth::user()->city}}" name="city" class="form-control" placeholder="Enter City">
                            </div>

                            <div class="col-md-6 mt-3">
                                <label for="">Country</label>
                                <input type="text" value="{{ Auth::user()->country}}" name="country" class="form-control" placeholder="Enter Country">
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label> -->

                        <div class="col-md-6">
                            <!-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> -->
                            <!-- 
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                        </div>
                        <div class=" col-md-6 mt-3">

                            <!-- <div class="col-md-6"> -->
                            <label for="image" class="">Image</label>
                            <div class="custom-file">
                                <input type="file" class="form-control custom-file-input @error('image') is-invalid @enderror" id="image" name="image">
                                {{-- <label class="custom-file-label" for="image">{{ __('Choose file...') }}</label> --}}

                                @error('image')
                                <span class="invalid-feedback mt-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Save') }}
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
</div>




@endsection