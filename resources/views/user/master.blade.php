<!DOCTYPE HTML>
<html>
    <head>
        <!-- Title and Logo -->
        <title>GEMS MEGA STORE | {{$data['page']}}</title>
        <link rel="icon" href="{{asset('/imgs/tiny-logo.png')}}">

        <!-- Bootstrap -->
        <script src="{{asset('/js/jquery4.js')}}"></script>
        <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('/css/bootstrap-grid.css')}}">

    </head>
    <body>
        <header>

        </header>
    @yield('content')

    </body>
    <!-- JQuery & Bootstrap -->
    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
</html>