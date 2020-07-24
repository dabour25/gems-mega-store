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

        <!--Css Files -->
        <link rel="stylesheet" href="{{asset('/css/style.css')}}">

        <!--Fonts -->
        <style>
            @font-face {
                font-family: Lovelo-Black;
                src: url({{asset('/fonts/Lovelo-Black.otf')}});
            }
        </style>

    </head>
    <body>
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-2">
                        <a href="/">
                            <img src="{{asset('/imgs/tiny-logo.png')}}" class="header-logo">
                            <img src="{{asset('/imgs/gems.png')}}" class="header-gems">
                        </a>
                    </div>
                    <div class="col-sm-3 language-div">
                        <a href="/lang/en" class="lang">
                            English
                        </a>|
                        <a href="/lang/ar" class="lang">
                            Arabic
                        </a>
                    </div>
                    <div class="col-sm-4 main-word">
                        GEMS MEGA STORE
                    </div>
                    <div class="col-sm-3">
                        <a href="/"><img class="header-icon" src="{{asset('/imgs/icons/home.png')}}"></a>
                        <a href="/login"><img class="header-icon" src="{{asset('/imgs/icons/user.png')}}"></a>
                        <a href="/card">
                            <img class="header-icon" src="{{asset('/imgs/icons/cart.png')}}">
                            <span class="badge badge-warning card-count">9+</span>
                        </a>
                    </div>
                </div>
            </div>
        </header>
    @yield('content')
    @include('version_view')
    </body>
    <!-- Bootstrap -->
    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
</html>