<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>NePharma</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('userpanel/assets/images/favicon.png')}}" type="image/png">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{asset('userpanel/assets/css/slick.css')}}">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{asset('userpanel/assets/css/LineIcons.css')}}">

    <!--====== Material Design Icons CSS ======-->
    <link rel="stylesheet" href="{{asset('userpanel/assets/css/materialdesignicons.min.css')}}">

    <!--====== Jquery Ui CSS ======-->
    <link rel="stylesheet" href="{{asset('userpanel/assets/css/jquery-ui.min.css')}}">

    <!--====== nice select CSS ======-->
    <link rel="stylesheet" href="{{asset('userpanel/assets/css/nice-select.css')}}">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{asset('userpanel/assets/css/bootstrap.min.css')}}">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{asset('userpanel/assets/css/default.css')}}">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{asset('userpanel/assets/css/style.css')}}">

    <!--====== Carousel Index Style CSS ======-->
    <link rel="stylesheet" href="{{asset('userpanel/assets/css/carousel-index.css')}}">

    <!--====== login CSS ======-->
    <link rel="stylesheet" href="{{asset('userpanel/assets/css/login.css')}}">

    <!-- owl carousel     -->
    <link rel="stylesheet" href="{{asset('userpanel/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('userpanel/assets/css/owl.theme.default.min.css')}}">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

<body>
    <div>
    @include('user.layouts.header')

    @yield('content')

    @include('user.layouts.footer')
    </div>

<!-- carousel -->
<script src="{{asset('userpanel/assets/js/jquery-3.6.3.min.js')}}"></script>
    <script src="{{asset('userpanel/assets/js/owl.carousel.min.js')}}"></script>

    @yield('scripts')
    <!--====== Bootstrap 5 js ======-->
    <script src="{{asset('userpanel/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('userpanel/assets/js/bootstrap.min.js')}}"></script>

   

    <!--====== Jquery js ======-->
    <!-- <script src="{{asset('userpanel/assets/js/vendor/jquery-3.5.1.min.js')}}"></script> -->
    <script src="{{asset('userpanel/assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>

    <!--====== Slick js ======-->
    <script src="{{asset('userpanel/assets/js/slick.min.js')}}"></script>

    <!--====== Accordion Steps Form js ======-->
    <script src="{{asset('userpanel/assets/js/jquery-vj-accordion-steps.js')}}"></script>

    <!--====== Jquery Ui js ======-->
    <script src="{{asset('userpanel/assets/js/jquery-ui.min.js')}}"></script>

    <!--====== Form validator js ======-->
    <script src="{{asset('userpanel/assets/js/jquery.form-validator.min.js')}}"></script>

    <!--====== nice select js ======-->
    <script src="{{asset('userpanel/assets/js/jquery.nice-select.min.js')}}"></script>

    <!--====== formatter js ======-->
    <script src="{{asset('userpanel/assets/js/jquery.formatter.min.js')}}"></script>

    <!--====== Main js ======-->
    <script src="{{asset('userpanel/assets/js/count-up.min.js')}}"></script>

    <!--====== Main js ======-->
    <script src="{{asset('userpanel/assets/js/main.js')}}"></script>

    <!--====== Carousel Index js ======-->
    <script src="{{asset('userpanel/assets/js/carousel-index.js')}}"></script>


    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
</body>

</html>