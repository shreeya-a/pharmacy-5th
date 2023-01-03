@extends('user.layouts.main')

@section('content')

@php
    if(isset($_COOKIE['login_email']) && isset($_COOKIE['login_pass'])){
        $log_email = $_COOKIE['login_email'];
        $log_pass = $_COOKIE['login_pass'];
        $is_active ='checked';
    }else{
        $log_email = '';
        $log_pass = '';
        $is_active ='';
    }
@endphp


<section class="vh-100">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11 mt-30">
                <div class="card text-black mt-30" style="border-radius:0;">
                    <div class="card-body p-md-5">

                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                @if(Session::has('fail'))

                                <div class="alert alert-danger" role="alert">
                                    {{Session::get('fail')}}
                                </div>
                                @endif
                                <p class="text-center h1 fw-bold text-black mb-5 mx-1 mx-md-4 mt-4">Login</p>

                                <form action="{{route('loginUser')}}" method="POST" class="mx-1 mx-md-4">
                                    @csrf


                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="email" name="email" id="form3Example3c" class="form-control  @error('email') is-invalid @enderror" value="{{$log_email}}"/>
                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                            <label class="form-label" for="form3Example3c">Your Email</label>

                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-2">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="password" name="password" id="form3Example4c" class="form-control @error('password') is-invalid @enderror" value="{{$log_pass}}"/>
                                            @error('password')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                            <label class="form-label" for="form3Example4c">Password</label>
                                        </div>
                                    </div>

                    


                                     {{-- remember me code --}}

                                    <div class="my-2">
                                        <input type="checkbox" name="remember" id="remember" {{$is_active}}>
                                        <label for="remember">Remember Me</label>
                                    </div>



                                    <div class="d-flex justify-content-between align-items-center">


                                        <a href="#!" class="text-body">Forgot password?</a>
                                    </div>
                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" class="btn btn-primary btn-lg">Login</button>
                                    </div>
                                    <p class="text-center text-muted mt-3 mb-3">Don't have an account? <a href="{{route('register')}}" class="fw-bold text-body"><u>Register here</u></a></p>

                                </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image"> -->
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection