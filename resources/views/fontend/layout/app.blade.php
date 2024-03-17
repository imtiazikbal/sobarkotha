<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#C60C1D" />

<!-- Required meta tags --> 

  <meta property="fb:app_id" content="100691088472033">
  <meta name="description" content="">
  <meta name="keywords" content="banglanews, bdnews, bangladesh newspaper, online newspaper in bangladesh">
  
  <meta http-equiv="refresh" content="400">
  <meta name="author" content="">
  
  <meta name="robots" content="index, follow">
  <meta name="googlebot" content="index, follow">
  <meta name="googlebot-news" content="index, follow">
  
  <meta property="fb:app_id" content="100691088472033">
  <meta property="og:site_name" content="">
  <meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:url" content="">
  <meta property="og:type" content="article">
  <meta property="og:image" content="">
  <meta property="og:locale" content="en_US">
  <meta name="og:image:width" content= "100%" />
  <meta name="og:image:height" content= "auto" />
  
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@BanglarAlo24.com">
  <meta name="twitter:creator" content="@itmunnabd">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">
  <meta name="twitter:url" content="">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400..800&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('fontend') }}/img/favicon_io/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- w3css CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('fontend') }}/css/solaimanLipi.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('fontend') }}/css/stylebnews3.css">
<!-- animate.css --> 
    <link rel="stylesheet" type="text/css" href="{{ asset('fontend') }}/css/animate.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('fontend') }}/css/custom.css">

<!-- font-awesome	-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
</head>
<body>

    {{-- nav bar here --}}
   @include('fontend.layout.nav')

    {{-- nav bar here --}}

    {{-- header here --}}

    @include('fontend.layout.header')
    {{-- header end --}}


    @include('fontend.component.trending')

    @yield('content')
</body>
</html>