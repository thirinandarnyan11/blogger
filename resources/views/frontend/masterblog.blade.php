<!DOCTYPE html>
<html>
<head>
  <title>Beauty Blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('frontendtemplate/bloggertemplate/css/open-iconic-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontendtemplate/bloggertemplate/css/animate.css')}}">

  <link rel="stylesheet" href="{{asset('frontendtemplate/bloggertemplate/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontendtemplate/bloggertemplate/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontendtemplate/bloggertemplate/css/magnific-popup.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/bloggertemplate/css/bootstrap.min.css')}}">

  <link rel="stylesheet" href="{{asset('frontendtemplate/bloggertemplate/css/aos.css')}}">
  <link rel="stylesheet" href="{{asset('frontendtemplate/bloggertemplate/css/ionicons.min.css')}}">

  <link rel="stylesheet" href="{{asset('frontendtemplate/bloggertemplate/css/bootstrap-datepicker.css')}}">

  <link rel="stylesheet" href="{{asset('frontendtemplate/bloggertemplate/css/flaticon.css')}}">
  <link rel="stylesheet" href="{{asset('frontendtemplate/bloggertemplate/css/icomoon.css')}}">
  
  <link rel="stylesheet" href="{{asset('frontendtemplate/bloggertemplate/css/profile.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/bloggertemplate/css/style.css')}}">
</head>
<body>

 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
     <a class="navbar-brand navbar-brand-black" href="index.html">BB</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> 
     </button>

     <div class="collapse navbar-collapse" id="ftco-nav">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item"><a href="{{route('blogger')}}" class="nav-link">Home</a></li>
         {{--<li class="nav-item"><a href="author.html" class="nav-link">Other Bloggers</a></li>--}}
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nay Chi Oo</a>
           <div class="dropdown-menu" aria-labelledby="dropdown04">
             <a class="dropdown-item" href="left-sidebar.html">Logout</a>
           </div>
         </li>

       </ul>
     </div>
   </div>
 </nav>
 <!-- END nav -->
@yield('bloggercontent')


<!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
 

  <script src="{{asset('frontendtemplate/bloggertemplate/js/jquery.min.js')}}"></script>
  <script src="{{asset('frontendtemplate/bloggertemplate/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('frontendtemplate/bloggertemplate/js/popper.min.js')}}"></script>
  <script src="{{asset('frontendtemplate/bloggertemplate/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontendtemplate/bloggertemplate/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('frontendtemplate/bloggertemplate/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('frontendtemplate/bloggertemplate/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('frontendtemplate/bloggertemplate/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontendtemplate/bloggertemplate/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('frontendtemplate/bloggertemplate/js/aos.js')}}"></script>
  <script src="{{asset('frontendtemplate/bloggertemplate/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('frontendtemplate/bloggertemplate/js/bootstrap-datepicker.js')}}"></script>
  
  <script src="{{asset('frontendtemplate/bloggertemplate/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false')}}"></script>
  <script src="{{asset('frontendtemplate/bloggertemplate/js/google-map.js')}}"></script>
  <script src="{{asset('frontendtemplate/bloggertemplate/js/main.js')}}"></script>

</body>
</html>