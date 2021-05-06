<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- font roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;900&display=swap" rel="stylesheet">        

    <!-- awesome font -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
        *{
            font-family: 'Roboto', sans-serif;
        }
        #login{
            padding-top: 130px;
            /* background-color: #0f4567ea; */
            background-image: url('desa.jpg');
            background-size: cover;
            height: 760px;
            /* opacity: 1.2; */
            /* filter: brightness(50%); */
            /* position: block; */
        }
        #login .headcard{
           padding: 15px 7px 7px;
           width: 350px;
           background: #8E2DE2;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #4A00E0, #8E2DE2);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #4A00E0, #8E2DE2); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
           z-index: 1;
           border-radius: 10px;
           
        }
        #login .formcard{
            width: 400px;
            padding-bottom: 30px;
            margin-top: -35px !important;
            border-radius: 10px;
            border: none;
        }
        #login .formcard .input-group-text{
            border: none; 
            color: white;
            background: -webkit-linear-gradient(to right, #4A00E0, #8E2DE2);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #4A00E0, #8E2DE2);
            /* border-radius: 150px; */
        }
        #login .formcard .form-control{
            border: none;
            font-weight: 400;
        }
        #login button{
            background: #8E2DE2;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #4A00E0, #8E2DE2);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #4A00E0, #8E2DE2);
            margin-left: 110px;
            width: 170px;
            font-size: 16px;
            /* border-radius: 10px; */
            
        }
        
        #register{
            padding-top: 80px;
            /* background-color: #0f4567ea; */
            background-image: url('desa.jpg');
            background-size: cover;
            height: 760px;
            /* opacity: 1.2; */
            /* filter: brightness(50%); */
            /* position: block; */
            
            
        }
        #register .headcard{
           padding: 15px 7px 7px;
           width: 350px;
           background: #8E2DE2;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #4A00E0, #8E2DE2);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #4A00E0, #8E2DE2); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
           z-index: 1;
           border-radius: 10px;
           
        }
        #register .formcard{
            width: 430px;
            padding-bottom: 30px;
            margin-top: -35px !important;
            border-radius: 10px;
            border: none;
        }
        #register .formcard .input-group-text{
            border: none;
            border-bottom: 1px solid #4A00E0; 
            color: #4A00E0;
            background-color: transparent;
            
        }
        #register .formcard .form-control{
            border: none;
            font-weight: 400;
            border-bottom: 1px solid #4A00E0;
        }
        #register button{
            background: #8E2DE2;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #4A00E0, #8E2DE2);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #4A00E0, #8E2DE2);
            margin-left: 130px;
            width: 170px;
            font-size: 16px;
            /* border-radius: 10px; */
            
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
              
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('form.register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('form.register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>