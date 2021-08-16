<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Student Manager') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'>
    </script> 
    <!-- Boostrap-->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <section class="header">
        <div class="header1 mb-5 d-flex justify-content-center">
            <a href="#"><h2>Student Manage</h2></a>
        </div>
        <div class="navbar-default sidebar row " role="navigation">
            <div class="sidebar-nav navbar-collapse col-2 menu">
                <ul class="nav flex-column mt-3 ml-5">
                    <li class="nav-item">
                        <a href="#"><i class="fa fa-dashboard fa-fw nav_icon"></i>{{ trans('homepage.homepage') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-check-square-o nav_icon"></i>{{ trans('homepage.student') }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">{{ trans('homepage.list_student') }}</a></li>
                            <li><a class="dropdown-item" href="#">{{ trans('homepage.creat_student') }}</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-table nav_icon"></i>{{ trans('homepage.subject') }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">{{ trans('homepage.list_subject') }}</a></li>
                            <li><a class="dropdown-item" href="#">{{ trans('homepage.creat_subject') }}</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-8">
                @yield('content')
            </div>
        </div>
    </section>
</body>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</html>
