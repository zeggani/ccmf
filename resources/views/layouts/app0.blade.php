<!DOCTYPE html>
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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    CMFF
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('users.index') }}">{{ __('Users') }}</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('clients.index') }}">{{ __('Clients') }}</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('import') }}">{{ __('Impots') }}</a>
                      </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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

<div class="container-fluid row">
                    <div class="col">

                      <ul class="list-group">

                        <li style="padding: 5px;background:#38c172;color:white;text-align:center;" class="list-group active">MENU</li>
                        <input name="datecreation" type="date" style="text-align:center;" value="{{date('Y-m-d')}}" class="form-control form-control">
                        <nav class="navbar navbar-light bg-light">
                          <div class="row">
                            <form class="form-inline" action="{{route('search')}}" >
                              <input class="form-control mr-sm-2" name="nom" style="width:70%;" type="search"
                              placeholder="Search" aria-label="Search"><button class="btn btn-outline-success my-2 my-sm-0"
                              type="submit">Search</button>
                            </form>
                          </div>
                        </nav>

                        <!-- <li style="padding: 5px;background:Green;"  class="list-group-item"></li> -->
                        <li style="padding: 5px;" class="list-group-item"><a href="{{route('clients.index')}}">Prospets</a></li>
                        <li style="padding: 5px;"  class="list-group-item">Signés</li>
                        <li style="padding: 5px;"  class="list-group-item">Clients</li>
                      </ul>
                    </div>

          <div class="col-9">
{{(Auth::user())->role->name}}
              @yield('content')
          </div>
        </div>
        </main>
    </div>
</body>
</html>
