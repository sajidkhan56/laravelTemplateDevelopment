<!Doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        @include('layouts.head-css')
    </head>
    <body>
        <!-- intro page start -->
            @include('layouts.intro')
        <!-- intro page end -->
        <!-- menu page start -->
            @include('layouts.menu')
        <!-- menu page end -->
        <!-- about page start -->
            @include('layouts.about')
        <!-- about page end --> 
        <!-- contact page start -->
            @include('layouts.contact')
        <!-- contact page end -->
        <!--template js start -->
            @include('layouts.template-js')
        <!--template js end --> 
    </body>
<html>