@extends('user.layouts.main')

@section('content')



<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card my-5">
                <div class="card-header">{{ __('Upload prescription') }}</div>

                <div class="card-body ">
                    <form method="POST" action="{{ route('image.store') }}" enctype="multipart/form-data">
                        @csrf

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
                        </div>

                        <div class="form-group row my-5">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                            <div class="col-md-6">
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
                        </div>

                        <div class="form-group row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



                            
@endsection
