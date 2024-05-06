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
        <!--navabr start -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button type="button" class="btn btn-outline-secondary"><i class = "fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </nav>
        <!--end navabr-->

        {{-- sidebar + content  start --}}
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="list-group margin-top-20">
                        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                        The current link item
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                        <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                        <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                        <a class="list-group-item list-group-item-action disabled">A disabled link item</a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="widget">
                        <h3>Featured products</h3>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                    <img src="{{ asset('frontend/assets/css/images/formal.jpg')  }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{-- sidebar + content  end --}}

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
