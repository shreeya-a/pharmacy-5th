<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- <meta charset="utf-8"> -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--====== Title ======-->
    <title>NePharma</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('userpanel/assets/images/favicon.png')}}" type="image/png">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{asset('userpanel/assets/css/slick.css')}}">
    
    <!--====== Product-details CSS ======-->
    <link rel="stylesheet" href="{{asset('userpanel/assets/css/product-details.css')}}">

    <!--====== Checkout CSS ======-->
    <link rel="stylesheet" href="{{asset('userpanel/assets/css/custom.css')}}">

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


    <!--====== search autocomplete ======-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <!--====== alertify ======-->
    
    <!-- CSS -->
    <!-- <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/> -->
    <!-- Default theme -->
    <!-- <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/> -->
    
    <!--====== toastr ======-->

<!-- <link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
     alpha/css/bootstrap.css" rel="stylesheet">
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

 

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

<body>
    <div>
    @include('user.layouts.header')

    @yield('content')

    @include('user.layouts.footer')
    </div>


    <!-- <script>
        if(session ('success')){
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('success') }}");
        }
</script> -->


    <!--====== Jquery js ======-->
    <script src="{{asset('userpanel/assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('userpanel/assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>
    


    <!-- carousel -->
    <script src="{{asset('userpanel/assets/js/jquery-3.6.3.min.js')}}"></script>
    <script src="{{asset('userpanel/assets/js/owl.carousel.min.js')}}"></script>

    <!-- search autocomplete -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> -->
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>

    var availableTags = [];
    $.ajax({
        method: 'GET',
        url: "/product-list",
        success: function(response){
            startAutoComplete(response);
        }

    });
    function startAutoComplete(availableTags){
        $( "#search_product" ).autocomplete({
        source: availableTags
        });
    }
  </script>
    
    <!--====== Bootstrap 5 js ======-->
    <script src="{{asset('userpanel/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('userpanel/assets/js/bootstrap.min.js')}}"></script>

   

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

    <!--====== sweetalert2js ======-->
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
    @if(session('status'))
        <script>
             
             swal({
  title: "Good job!",
  text: "{{session('status')}}",
  icon: "success",
  button: "OK!",
})
        </script>
    @endif
    @if(session('success'))
        <script>
             swal({
  title: "Good job!",
  text: "{{session('success')}}",
  icon: "success",
  button: "OK!",
})

             // Swal.fire("{{session('success')}}");
        </script>
    @endif

    @yield('scripts')

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
</body>

</html>