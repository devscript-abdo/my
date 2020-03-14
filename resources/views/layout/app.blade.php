<!DOCTYPE html>
<html lang="en">

@include('layout.head_seo')
<!--<body oncontextmenu="return false;">-->
<body>

@include('layout.header')

@yield('content')

@include('layout.footer')


@include('layout.scriptCompiled')


</body>

</html>
