<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title')
            | Welcome
        @show
    </title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/index.css') }}">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!--end of global css-->
    <!--page level css-->
    @yield('header_styles')
    <!--end of page level css-->
</head>

<body>
    <!-- Header Section Start -->
    <header>
        <nav class="navbar ">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-bars"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="{{ asset('assets/img/logo.PNG')}}" height="40px" width="180px" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('home') }}"> Home</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- //Header Section Start -->
        
        <!-- Content -->
        @yield('content')

    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top fa fa-hand-o-up" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
    </a>
    <!-- global js start-->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/chandra.js') }}"></script>
    <!-- //global js end -->
    <!-- page level js -->
    @yield('footer_scripts')
    <!-- //page level js -->
</body>

</html>
