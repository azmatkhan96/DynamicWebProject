<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">
        <!-- Scripts -->
        <script src="{{ URL::to('js/app.js') }}" defer></script>

        <title>Login | Upcube - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{URL::to('backend/assets/images/favicon.ico')}}">

        <!-- Bootstrap Css -->
        <link href="{{URL::to('backend/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{URL::to('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{URL::to('backend/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
          @yield('links')

    </head>
    <body class="auth-body-bg">
        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            @yield('login&register')
        </div>
        <!-- end -->

        <script src="{{URL::to('backend/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{URL::to('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{URL::to('backend/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{URL::to('backend/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{URL::to('backend/assets/libs/node-waves/waves.min.js')}}"></script>

        <script src="{{URL::to('backend/assets/js/app.js')}}"></script>
        @stack('scripts')
    </body>
</html>
