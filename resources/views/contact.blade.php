@extends('user.layouts.main')

@section('content')

<h1 class="text-center">Contact Us</h1>


<section style="margin-bottom: 100px" class="vh-100">
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
                                <p class="text-center h1 fw-bold text-black mb-5 mx-1 mx-md-4 mt-4">Contact Form</p>

                                <form action="{{route('loginUser')}}" method="POST" class="mx-1 mx-md-4">
                                    @csrf

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="cname">Your Name</label>
                                            <input type="text" name="name" id="cname" class="form-control "/>

                                        </div>
                                    </div>


                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="mail">Your Email</label>
                                            <input type="email" name="email" id="mail" class="form-control "/>

                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="num">Your Phone</label>
                                            <input type="text" name="phone" id="num" class="form-control "/>

                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-2">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <div>
                                            <label class="form-label" for="msg">Message</label>
                                            </div>
                                            <textarea name="msg" id="msg" cols="35" rows="3"></textarea>
                                            {{-- <input type="password" name="password" id="form3Example4c" class="form-control"/> --}}
                                        </div>
                                    </div>

                    

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                    </div>
                                    <p class="text-center text-muted mt-3 mb-3">Want to Login Instead?<br> <a href="{{route('login')}}" class="fw-bold text-body"><u>Login</u></a></p>

                                </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image"> -->
                                {{-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image"> --}}
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.2121122582244!2d85.32307106458322!3d27.710736481950892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1908c874a40b%3A0x87a26cbf3b75037c!2z4KSV4KSu4KSyIOCkquCli-CkluCksOClgA!5e0!3m2!1sne!2snp!4v1676940783922!5m2!1sne!2snp"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection