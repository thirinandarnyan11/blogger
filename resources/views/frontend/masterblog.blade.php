<!DOCTYPE html>
  <head>
  <title>Beauty Blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
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
  @yield('style')
</head>
<body>
 <nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
   <div class="container">
     <a class="navbar-brand navbar-brand-black" href="index.html" style="color: white">BB</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> 
     </button>
     <div class="collapse navbar-collapse" id="ftco-nav">

       <ul class="navbar-nav" style="float: right;">
         <li class="nav-item"><a href="{{route('index')}}" class="nav-link" style="color: white;font-size: 15px;"><i class="icon icon-home2"></i>&nbsp;&nbsp;Home</a></li>

       <ul class="navbar-nav ml-auto">
         <li class="nav-item"><a href="{{route('index')}}" class="nav-link">Home</a></li>
         {{--<li class="nav-item"><a href="author.html" class="nav-link">Other Bloggers</a></li>--}}

         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;font-size: 15px;">{{Auth::user()->name}}</a>
           <div class="dropdown-menu" aria-labelledby="dropdown04">
            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
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
  <script src="{{asset('frontendtemplate/bloggertemplate/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false')}}"></script>
  <script src="{{asset('frontendtemplate/bloggertemplate/js/google-map.js')}}"></script>
  <script src="{{asset('frontendtemplate/bloggertemplate/js/main.js')}}"></script>
 <script src="{{asset('frontendtemplate/bloggertemplate/js/summernote.js')}}"></script>
 <link href="https://netdna.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.css" rel="stylesheet"> 
  <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css">
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.
  4/jquery.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.js"></script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>


<!-- this file was missing -->
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>

<!-- this file was moved after the jQuery Datatables library was laoded -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/dataTables.bootstrap.min.js"></script>
<!-- this file was missing -->
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<!-- this file was moved after the jQuery Datatables library was laoded -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/dataTables.bootstrap.min.js"></script>
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.css" rel="stylesheet"> 
  <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css">
 {{--  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.
  4/jquery.js"></script> --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.js"></script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>

</body>
</html>
