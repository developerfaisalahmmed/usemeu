<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <title>@yield('title') - {{ config('app.name') }}</title>

    <link rel="icon" href="{{asset('backend')}}/assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="{{asset('backend')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
    <link href="{{asset('backend')}}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{asset('backend')}}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{asset('backend')}}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="{{asset('backend')}}/assets/css/pace.min.css" rel="stylesheet" />
    <script src="{{asset('backend')}}/assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="{{asset('backend')}}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('backend')}}/assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{asset('backend')}}/assets/css/app.css" rel="stylesheet">
    <link href="{{asset('backend')}}/assets/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{asset('backend')}}/assets/css/dark-theme.css" />
    <link rel="stylesheet" href="{{asset('backend')}}/assets/css/semi-dark.css" />
    <link rel="stylesheet" href="{{asset('backend')}}/assets/css/header-colors.css" />

    @stack('css')
</head>

<body>
{{--<!--wrapper-->--}}
<div class="wrapper">
    <!--sidebar wrapper -->
    <div class="sidebar-wrapper" data-simplebar="true">
        @include('backend.layouts.partials.sidebar')

    </div>
    <!--end sidebar wrapper -->
    <!--start header -->
    <header>
        @include('backend.layouts.partials.header')
    </header>
    <!--end header -->
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            @yield('content')
        </div>
    </div>
    @include('backend.layouts.partials.footer')
</div>
<!--end wrapper-->
@include('backend.layouts.partials.theme')

<!-- Bootstrap JS -->
<script src="{{asset('backend')}}/assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="{{asset('backend')}}/assets/js/jquery.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="{{asset('backend')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{asset('backend')}}/assets/plugins/chartjs/js/Chart.min.js"></script>
<script src="{{asset('backend')}}/assets/plugins/chartjs/js/Chart.extension.js"></script>
<script src="{{asset('backend')}}/assets/js/index.js"></script>
<!--app JS-->
<script src="{{asset('backend')}}/assets/js/app.js"></script>



@stack('js')
</body>

</html>
