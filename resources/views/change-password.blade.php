@extends('user.layouts.main')


@section('content')
<style>
    .form-label{
        color: black;
    }
</style>
<section class="breadcrumbs-wrapper pt-2 pb-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-style breadcrumbs-style-1 d-md-flex justify-content-between align-items-center">
                    <div class="breadcrumb-left">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Change Password</li>
                        </ol>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</section>
    <div class="container">

        <div class="row justify-content-center my-5">
            <div class="col-md-8">
                <div class="card">
                    
                    <div class="card-header">
                      <h6>  {{ __('Change Password') }}</h6>
                    </div>

                    <form action="{{ route('updatepass') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @elseif (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <div class="mb-3">
                                <label for="oldPasswordInput" class="form-label">Old Password</label>
                                <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                                    placeholder="Old Password">
                                @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="newPasswordInput" class="form-label">New Password</label>
                                <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                    placeholder="New Password">
                                @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label>
                                <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
                                    placeholder="Confirm New Password">
                            </div>

                        </div>

                        <div class="card-footer text-center">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>       
    </div>
@endsection

@section('scripts')
<script src="{{asset('userpanel/assets/js/custom.js')}}"></script>
@endsection