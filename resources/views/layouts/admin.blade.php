<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title')</title>
    @livewireStyles
    <link rel="stylesheet"
        href="{{ asset('assets/bootstrap/css/bootstrap.min.css?h=f5f356e3f332dfdd6f287ec04cb8028a') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Nunito.css?h=119b3d3229ddd887af19d2dbd611f1f4') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
</head>

<body id="page-top">

    <div id="wrapper">
        @include('components.admin_sidebar')
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                @include('components.admin_topnav')
                @yield('admin')

            </div>
            @include('components.admin_footer')
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    @livewireScripts
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <script src="{{ asset('assets/js/bs-init.js?h=24944136186a01ba6322da1c4ad1dfbe') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="{{ asset('assets/js/theme.js?h=6d33b44a6dcb451ae1ea7efc7b5c5e30') }}"></script>
</body>

</html>
