<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" prefix="og: http://ogp.me/ns#" xml:lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google" content="notranslate">
    <meta name="title" content="@yield('title')">
    <meta name="robots" content="all, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
    <meta name="robots" content="noindex">
    <title>@yield('title')</title>
    <meta name="theme-color" content="#1D4ED8FF">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico').'?v='.filemtime('img/favicon.ico')}}">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/tailwind.css').'?v='.filemtime('css/tailwind.css')}}">
</head>
<body>
<div class="fixed top-0 left-0 w-full h-full bg-white z-30" id="preloader">
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        <div class="animate-spin rounded-full h-5 w-5 border-b-2 border-blue-700"></div>
    </div>
</div>
<header class="bg-blue-700 shadow-sm fixed w-full z-20">
    <nav class="flex items-center py-5 w-full">
        <a href="{{route('index')}}" class="mx-4">
            <img src="{{asset('img/logo/logo.png').'?v='.filemtime('img/logo/logo.png')}}" alt="Takesbet" class="w-10 logo" width="100" height="100">
        </a>
        @if(Auth::check())
        <!--Menu-->
        <div class="items-center text-white hidden sm:flex">
            <div class="relative">
                <a class="dropdown-item mx-2 hover:bg-blue-600 p-2 transition-all duration-500" href="{{route('admin.bookmakers')}}">Bookmakers</a>
                <a class="dropdown-item mx-2 hover:bg-blue-600 p-2 transition-all duration-500" href="{{route('admin.payments')}}">Payments</a>
                <a class="dropdown-item mx-2 hover:bg-blue-600 p-2 transition-all duration-500" href="{{route('admin.currencies')}}">Currencies</a>
                <a class="dropdown-item mx-2 hover:bg-blue-600 p-2 transition-all duration-500" href="{{route('admin.sports')}}">Sports</a>
            </div>
        </div>
        <!--Mobile menu-->
        <div class="sm:hidden">
            <button class="text-white focus:outline-none" id="mobile-menu-button" title="Menu">
                <svg id="menu-icon" fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M3 5h14a1 1 0 110 2H3a1 1 0 010-2zm0 4h14a1 1 0 110 2H3a1 1 0 010-2zm0 4h14a1 1 0 110 2H3a1 1 0 010-2z" clip-rule="evenodd"></path>
                </svg>
                <svg id="close-icon" fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6 hidden">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div id="mobile-menu" class="sm:hidden fixed -left-60 w-60 top-20 transition-all bg-blue-700 z-20">
                <a class="dropdown-item mx-2 hover:bg-blue-600 p-2 transition-all duration-500" href="{{route('admin.bookmakers')}}">Bookmakers</a>
                <a class="dropdown-item mx-2 hover:bg-blue-600 p-2 transition-all duration-500" href="{{route('admin.payments')}}">Payments</a>
                <a class="dropdown-item mx-2 hover:bg-blue-600 p-2 transition-all duration-500" href="{{route('admin.currencies')}}">Currencies</a>
                <a class="dropdown-item mx-2 hover:bg-blue-600 p-2 transition-all duration-500" href="{{route('admin.sports')}}">Sports</a>
            </div>
        </div>
        @endif
    </nav>
</header>
@yield('content')
<div class="fixed inset-0 bg-black opacity-50 z-10 hidden" id="overlay"></div>
<footer class="bg-blue-700 py-5">
    <p class="text-sm text-white text-center">&copy; {{ date('Y') }} Takesbet</p>
</footer>
</body>
<script defer type="text/javascript" src="{{asset('js/preloader.js').'?v='.filemtime('js/preloader.js')}}"></script>
</html>

