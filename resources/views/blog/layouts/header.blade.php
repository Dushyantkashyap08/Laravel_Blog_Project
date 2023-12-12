<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- css starts here-->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>BLOGGER</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

      <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--css ends here-->

   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
        <div class="header_main">
            <div class="mobile_menu">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="logo_mobile">
                     <a href="{{url('/')}}">
                         <img src="{{asset('images/blogomatic.png')}}" style="margin:auto">
                     </a>
                 </div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('about')}}">About</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="{{url('contact')}}">Contact</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
            <div class="container-fluid">
               <div class="logo" style="width:100%; height:140px; "><a href="{{url('/')}}"><img src="{{asset('images/blogomatic.png')}}" style="margin:auto; height:120px; position:relative; top:-10px; width:300px"></a></div>
               <div class="menu_main">
                  <ul>
                     <li class="active"><a href="{{url('/')}}">Home</a></li>
                     <li><a href="{{url('about')}}">About</a></li>
                     <li><a href="{{url('contact')}}">Contact</a></li>

                     @if(Route::has('login'))
                     
                        @auth
                        
                        <li>
                           <a href="{{url('user_post')}}">Create Post</a>
                        </li>
                        
                        <li>
                           <a href="{{url('my_posts')}}">My Posts</a>
                        </li>
                        
                        <li>
                          <x-app-layout></x-app-layout>
                       </li>
                            @else
                            <li><a href="{{route('login')}}">Login</a></li>

                            <li><a href="{{route('register')}}">Registration</a></li>

                        @endauth

                     @endif
                     {{-- <li><a href="{{url('services')}}">Services</a></li>
                     <li><a href="{{url('contact')}}">Contact us</a></li> --}}
                  </ul>
               </div>
            </div>
         </div>
         
      </div>
      <!-- header section end -->