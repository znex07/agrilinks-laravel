<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AgriLinks') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Styles -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/business.css') }}" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
    <script>
    $(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
    </script>

</head>
<body>
    <div id="app">
    <div class="se-pre-con"></div>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" >
      <a class="navbar-brand" href="/"><img src="{{asset('img/favicon.png')}}"> AgriLinks</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        @guest
          @if (Route::has('login'))

          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  href="#">
              <span class="fas fa-briefcase text-success"></span> Services</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/equipment_registration"><span class="fas fa-tractor text-success"></span> Register Equipment</a>
              <a class="dropdown-item" href="/equipment_shop"><span class="fas fa-shopping-cart text-success"></span>  Shop</a>
            </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/news"><span class="fas fa-info-circle text-success"></span>Agri News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact_us"><span class="fas fa-mail-bulk text-success"></span> Contact</a>
            </li>
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  href="/home">
                <span class="fas fa-user text-success"></span> Be a member
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/register" >
                       <span class="fas fa-cogs text-success"></span> Register
                    </a>
                    <a class="dropdown-item" href="/login">
                       <span class="fas fa-user text-primary"></span> Login
                    </a>

                </div>

          </li>
            @endif

            @else
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  href="#">
              <span class="fas fa-briefcase text-success"></span> Services</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/equipment_registration"><span class="fas fa-tractor text-success"></span> Register Equipment</a>
                <a class="dropdown-item" href="/equipment_shop"><span class="fas fa-shopping-cart text-success"></span> Shop</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/news"><span class="fas fa-info-circle text-success"></span>Agri News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact_us"><span class="fas fa-mail-bulk text-success"></span> Contact</a>
            </li>
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <span class="fas fa-user text-success"></span> {{ Str::of(Auth::user()->name)->title() }}
              </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('home') }}" >
                    <span class="fas fa-address-card text-success"></span> Dashboard
                  </a>
                  <a class="dropdown-item" href="{{ route('home') }}" >
                    <span class="fas fa-cogs text-success"></span> Settings
                  </a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                       <span class="fas fa-user text-danger"></span> {{ __('Logout') }}
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


    <main >
        @yield('content')
    </main>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="footer py-3 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Segovia Development 2020</p>
        </div>
    <!-- /.container -->
</footer>

</body>
</html>
<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
