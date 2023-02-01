<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>{{config('app.name')}}</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('assets/frontend/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('assets/frontend/images/fevicon.png')}}" type="{{asset('assets/frontend/image/gif')}}" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('assets/frontend/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="{{asset('https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')}}">
      <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer')}}" />
      <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css')}}" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <body class="main-layout">
    @php
        $setting = \App\Models\Setting::first();
    @endphp

    @include('frontend.layout.partial.header')

     @yield('frontend_main')

    @include('frontend.layout.partial.footer')




    <!-- Javascript files-->
    <script src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery-3.0.0.min.js')}}"></script>
    <!-- sidebar -->
    <script src="{{asset('assets/frontend/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/custom.js')}}"></script>
    <script src="{{asset('assets/js/app.min.js')}}"></script>
    <!-- JS Libraies -->
    <script src="{{asset('assets/bundles/summernote/summernote-bs4.js')}}"></script>
    <script src="{{asset('assets/bundles/codemirror/lib/codemirror.js')}}"></script>
    <script src="{{asset('assets/bundles/codemirror/mode/javascript/javascript.js')}}"></script>
    <script src="{{asset('assets/bundles/jquery-selectric/jquery.selectric.min.js')}}"></script>
    <script src="{{asset('assets/bundles/ckeditor/ckeditor.js')}}"></script>
    <!-- Page Specific JS File -->
 </body>
</html>

