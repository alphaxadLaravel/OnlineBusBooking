<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="img/logo.png">
    <title>@yield('title')</title>

    @livewireStyles
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('vendor/icons/icofont.min.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/slick/slick.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/slick/slick-theme.min.css') }}" />

    <link href="{{ asset('vendor/select-tool/dist/css/select2.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <link href="{{ asset('vendor/sidebar/demo.css') }}" rel="stylesheet">
</head>

<body class="{{request()->is('home') ? 'bg-danger':'bg-light'}}">

    @yield('pages')

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}" type="a8feb881b7dc5ced65f0bff6-text/javascript"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"
        type="a8feb881b7dc5ced65f0bff6-text/javascript"></script>

    <script type="a8feb881b7dc5ced65f0bff6-text/javascript" src="{{ asset('vendor/slick/slick.min.js') }}"></script>

    <script src="{{ asset('vendor/select-tool/dist/js/select2.min.js') }}" type="a8feb881b7dc5ced65f0bff6-text/javascript">
    </script>

    <script type="a8feb881b7dc5ced65f0bff6-text/javascript" src="{{ asset('vendor/sidebar/hc-offcanvas-nav.js') }}">
    </script>

    <script src="{{ asset('js/custom.js') }}" type="a8feb881b7dc5ced65f0bff6-text/javascript"></script>
    <script src="{{ asset('cloud/rocket-loader.min.js') }}" data-cf-settings="a8feb881b7dc5ced65f0bff6-|49" defer="">
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"717b6b77f86d9cd2","version":"2021.12.0","r":1,"token":"dd471ab1978346bbb991feaa79e6ce5c","si":100}'
        crossorigin="anonymous"></script>
        
    @livewireScripts

</body>

</html>
