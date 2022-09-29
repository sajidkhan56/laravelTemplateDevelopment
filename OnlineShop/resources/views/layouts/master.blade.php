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
        <title>@yield('title')</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        @include('layouts.head-css')
    </head>
    <body>
        <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header start-->
        @include('layouts.header')
      <!-- end header -->
      <!-- banner start-->
        @include('layouts.banner')
      <!-- end banner -->
      <!-- about start -->
        @include('layouts.about')
      <!-- about end -->
      <!-- productlisting start -->
        @include('layouts.productlisting')
      <!-- end productlisting -->
      <!-- Our shop start -->
        @include('layouts.ourshop')
      <!-- end Our shop  -->
      <!-- clients start -->
        @include('layouts.clients')
      <!-- end clients -->
      <!-- contact start -->
        @include('layouts.contact')
      <!-- end contact  -->
      <!--  footer start -->
        @include('layouts.footer')
      <!-- end footer -->
       @include('layouts.template-js')
    </body>
</html>