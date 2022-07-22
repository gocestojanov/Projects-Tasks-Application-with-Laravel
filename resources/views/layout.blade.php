<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
    <script src="https://kit.fontawesome.com/f851d6782e.js" crossorigin="anonymous"></script>


    {{-- <link rel="stylesheet" href="{{ mix('/css/app.css') }}"> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .is_completed {
            text-decoration: line-through;
        }

    </style>

    <title>@yield('title')</title>
</head>
<body>

    <div id="app">

       {{-- <example-component></example-component> --}}


    </div>

    <div class="container">

    {{-- Navigation Menu --}}

    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          {{-- <a class="navbar-item" href="https://bulma.io"> --}}
            <img src="images/logo_website_ivil_digitalagency.png" width="150" height="95">
          {{-- </a> --}}

          <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item" href="/home">
              Home
            </a>

            <a class="navbar-item" href="/about">
                About
            </a>

            <a class="navbar-item" href="/contact" >
                Contact
            </a>

          </div>

          <div class="navbar-end">
            <div class="navbar-item">
              <div class="buttons">
                <a class="button is-primary">
                  <strong>Sign up</strong>
                </a>
                <a class="button is-light">
                  Log in
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>

      {{-- End Navigation Menu --}}




    @yield('content')

</div>

<script src= {{ mix('js/app.js') }}></script>
</body>
</html>
