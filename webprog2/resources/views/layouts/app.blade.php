<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="bg-image" style="position: relative; z-index: 1; height: 30vh; filter: grayscale(85%);  background-image: url(assets/pictures/banner.jpg)">
        <div id="app" class="col-12 pt-5">
            
            <nav class="navbar navbar-expand-lg navbar-light bg-light" >
                <div class="container-fluid">
                    <div class="navbar-brand ms-3 pb-2">
                        <img src="assets/pictures/fil2.png" style="width: 80px; height: 60px;" alt="Anasayfa">
                    </div>
                    <div class="navbar-brand ms-3">
                        <h1 class="display-5 pt-1">Elephone Aksesuar</h1>
                        </div> 
                    <a class="navbar-brand" href="{{ url('/') }}">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Elephone Hesabıma Giriş Yap') }}</a>
                                    </li>
                                    
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Elephone Hesabı Oluştur') }}</a>
                                    </li>
                                @endif
                            @else
                            <li class="nav-item me-5">
                                <a class="nav-link active" aria-current="page" href="/"><i class="fa fa-house"></i> Anasayfa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Çıkış Yap') }}
                                </a>
  
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
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
    </div>

      
   
</body>
</html>
