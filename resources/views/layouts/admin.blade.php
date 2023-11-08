<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Fonts -->
   <link rel="dns-prefetch" href="//fonts.gstatic.com">
   <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

   <!-- Scripts -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
   {{-- Laravel標準で用意されているJavascript/scssを読み込みます --}}
   @vite(['resources/sass/app.scss', 'resources/js/app.js']) 
</head>
<body>
    <div id="app">
    {{-- 画面上部に表示するナビゲーションバーです。 --}}
        <nav class="navbar nabvar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="{{ url('admin/sns') }}" class="navbar">
                 {{ config('app.name', 'Tsubuyaki')  }}
                </a>
                <button class="navber-toggler" type="button" data-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-cllapse" id="navbarSupportedContent"></div>
                <!-- Navbarの左側 -->
                    <ul class="navbar-nav me-auto">


                    </ul>

                    <!-- Navbarの右側 -->
                    <ul class="navbar-bav ms-auto">
                        @guest
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        <!-- ログイン時のヘッダーメニュー -->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                                </a>
                            
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" 
                                    oneclik="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" methood="POST" class="d-none">
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
</body>
</html>