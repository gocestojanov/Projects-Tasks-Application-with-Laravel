<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
    <script src="https://kit.fontawesome.com/f851d6782e.js" crossorigin="anonymous"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} -  @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>





    <div class="container">

    {{-- Navigation Menu --}}

    <nav class="navbar is-spaced" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
                @guest
                    <a class="" href="/">
                @else
                    <a class="" href="/home">
                @endguest
                        <img src="/images/logo_project_tasks.png" width="150" height="150" >
                    </a>
        </div>
        <div id="navbarBasicExample" class="navbar-menu">
                @guest
                <div class="navbar-start" style="margin-left:10ch;">
                    <a class="navbar-item" href="/">Home</a>
                    <a class="navbar-item" href="/about">About</a>
                    <a class="navbar-item" href="/contact" >Contact</a>
                </div>
                @endguest
        <div class="navbar-end">
            <div class="navbar-item">
              <div class="buttons">

                    <!-- Right Side Of Navbar -->
                        <!-- Authentication Links -->
                        @guest

                            <a class="button is-primary" href="{{ route('login') }}">{{ __('Login') }}</a>

                            @if (Route::has('register'))
                                    <a class="button is-primary" href="{{ route('register') }}">{{ __('auth.register') }}</a>
                            @endif
                        @else

                        <div class="dropdown is-hoverable">
                            <div class="dropdown-trigger">

                                <button href="/home?active1=yes" class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
                                    <span class="image is-24x24">
                                        <img src="{{ asset('simages/') .  '/images/' . auth()->user()->image }}" alt="" height="50" width="50" class="is-rounded">
                                    </span>
                                    &nbsp;
                                    {{ Auth::user()->name }}
                                    <span class="icon is-small">
                                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                                    </span>
                                </button>
                            </div>

                            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                              <div class="dropdown-content">
                                    <a id="" class="dropdown-item" href="/profile">Profile Settings</a>

                                     <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                               </div>
                            </div>
                        </div>
                        @endguest
              </div>
            </div>
          </div>
        </div>
      </nav>

      {{-- End Navigation Menu --}}

             @yield('content')
     </div>

     <footer class="footer" style="padding:2ex; margin-top:10ex;">
        <div class="content has-text-centered">
          <p>
            © 2020 Project & Tasks App   |   All Rights Reserved   | <strong>Project & Tasks</strong> by <a href="http://laravel.ivil.com.mk/contact">Goce Stojanov</a>.
          </p>
        </div>
      </footer>
 </body>
</html>
