<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name') }}</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png"
        href="{{asset('dist/images/logo_koprasi.png')}}" />
    @yield('css')
    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href="{{ asset('dist/css/style.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dist/libs/sweetalert2/dist/sweetalert2.min.css') }}">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="{{asset('dist/images/logo_koprasi.png')}}"
            alt="loader" class="lds-ripple img-fluid" />
    </div>
    {{-- <!-- Preloader -->
    <div class="preloader">
        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico"
            alt="loader" class="lds-ripple img-fluid" />
    </div> --}}
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <x-sidebar.sidebar />
        <!-- Sidebar End -->
        <!--  Main wrapper -->
        <x-navbar.navbar/>
            <!-- Header End -->
            {{ $slot }}
        </div>
    </div>
    <!--  Import Js Files -->
    <script src="{{ asset('dist/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!--  core files -->
    <script src="{{ asset('dist/js/app.min.js') }}"></script>
    <script src="{{ asset('dist/js/app.init.js') }}"></script>
    <script src="{{ asset('dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('dist/js/custom.js') }}"></script>
    <script src="{{ asset('dist/libs/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <!--  current page js files -->
    @yield('script')
    @livewireScripts
    @stack('scripts')
</body>
</html>
