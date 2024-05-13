<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Favicon -->
    <link href="{{ asset('/') }}images/laravel.png" rel="icon">

    <!-- CSS
    ========================= -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">

    <!-- Font CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.min.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

    <!-- Modernizer JS -->
    <script src="{{ asset('frontend/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    <!-- Google reCaptcha JS -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<body>

    <div class="wrapper">
        @include('partials.nav')
        @yield('content')

        @include('partials.footer')

    </div>


<!-- JS
============================================ -->
{{-- {{ asset('frontend/') }} --}}
<!-- jQuery JS -->
<script src="{{ asset('frontend/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<!-- Popper JS -->
<script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
<!-- Plugins JS -->
<script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
<!-- Ajax Mail -->
<script src="{{ asset('frontend/assets/js/ajax-mail.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>
<!-- Custom JS -->
<script src="{{ asset('frontend/assets/js/script.js') }}"></script>
</body>
</html>
