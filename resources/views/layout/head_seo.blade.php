<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title')</title>

    <meta name="description" content="{{setting('site.description')}}">
    <meta name="keywords" content="{{setting('site.seo')}}">

    <meta name="author" content="Elmarzougui Abdelghafour">
    <meta name="robots" content="">

    <!-- Og facebook abdelghafour -->
    <meta property="og:title" content="{{setting('site.title')}}">
    <meta property="og:description" content="{{setting('site.description')}}">
    <meta property="og:image" content="https://www.haymacproduction.ma/cover.jpg">
    <meta property="og:url" content="https://www.haymacproduction.ma">
    <meta property="og:type" content="digital">
    <meta property="og:site_name" content="Abdelghafour">
    <!--END Og facebook abdelghafour -->

    <!-- Og Twitter abdelghafour -->
    <meta property="twitter:image" content="https://www.haymacproduction.ma/cover.jpg">
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description" content="{{setting('site.description')}}" />
    <meta name="twitter:title" content="HayMacProduction"/>
    <meta name="twitter:site" content="@haymacprod2"/>
    <meta name="twitter:creator" content="@haymacprod2"/>
    <!-- END Og Twitter abdelghafour -->

    <meta name="format-detection" content="telephone=no">

    <meta name="turbolinks-cache-control" content="no-cache" />
    <!-- FAVICONS ICON -->

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}" />


@include('layout.styles')

<!-- Fonts -->
    @yield('styles')

</head>