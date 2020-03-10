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
    <script src="{{ asset ('js/functions.js') }}"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="flex items-center justify-between flex-wrap bg-gray-800 p-2 px-24">
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
              @guest
                <div class="text-sm lg:flex-grow">
                  <a href="{{ route('login') }}" class="block mt-4 lg:inline-block lg:mt-0 text-orange-500 hover:text-white mr-2">
                    SIGN IN
                  </a>
                  <span class="block mt-4 lg:inline-block lg:mt-0 text-orange-500 hover:text-white mr-2">|</span>
                  @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="block mt-4 lg:inline-block lg:mt-0 text-orange-500 hover:text-white mr-4">
                      SIGN UP
                    </a>
                  @endif
                </div>
              @else
                <div class="text-sm lg:flex-grow">
                  <a href="{{ route('logout') }}"  class="block mt-4 lg:inline-block lg:mt-0 text-orange-500 hover:text-white mr-2"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    SIGN OUT
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>

                  <span class="block mt-4 lg:inline-block lg:mt-0 text-orange-500 hover:text-white mr-2">|</span>
                  @if (Auth::user()->is_admin)
                    <a href="{{ route('admin') }}" class="block mt-4 lg:inline-block lg:mt-0 text-orange-500 hover:text-white mr-4">
                      DASHBOARD
                    </a>
                  @endif
                </div>
              @endguest
              <div>
                <a href="//facebook.com/" class="block mt-4 lg:inline-block lg:mt-0 text-orange-500 hover:text-white mr-2">
                    <i class='fab fa-facebook' style='font-size:24px'></i>
                </a>
                <a href="//instagram.com/" class="block mt-4 lg:inline-block lg:mt-0 text-orange-500 hover:text-white mr-2">
                    <i class='fab fa-instagram' style='font-size:24px'></i>
                </a>
                <a href="//linkedin.com/" class="block mt-4 lg:inline-block lg:mt-0 text-orange-500 hover:text-white mr-2">
                    <i class='fab fa-linkedin' style='font-size:24px'></i>
                </a>
                <a href="//twitter.com/" class="block mt-4 lg:inline-block lg:mt-0 text-orange-500 hover:text-white mr-2">
                    <i class='fab fa-twitter' style='font-size:24px'></i>
                </a>
              </div>
            </div>
          </nav>
          <nav class="flex items-center justify-between flex-wrap bg-gray-700 p-2 px-24">
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto shadow-xl">
              <div class="text-xl lg:flex-grow">
                <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-orange-500 hover:text-white mr-2">
                    <img src='{{ asset('images/logo.png') }}'>
                </a>
              </div>
              <div>
                <a href="/home/list/" class="block mt-4 lg:inline-block lg:mt-0 text-orange-500 hover:text-white mr-2">
                    FIND A HOME
                </a>
                <span class="block mt-4 lg:inline-block lg:mt-0 text-orange-500 hover:text-white mr-2">|</span>
                <a href="/agent/list/" class="block mt-4 lg:inline-block lg:mt-0 text-orange-500 hover:text-white mr-2">
                    FIND AN AGENT
                </a>
                <span class="block mt-4 lg:inline-block lg:mt-0 text-orange-500 hover:text-white mr-2">|</span>
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-orange-500 hover:text-white mr-2">
                    CAREERS
                </a>
                <span class="block mt-4 lg:inline-block lg:mt-0 text-orange-500 hover:text-white mr-2">|</span>
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-orange-500 hover:text-white mr-2">
                    CONTACT
                </a>
              </div>
            </div>
          </nav>
        <main class="h-screen bg-gray-700">
            @yield('content')
        </main>
    </div>
</body>
</html>
