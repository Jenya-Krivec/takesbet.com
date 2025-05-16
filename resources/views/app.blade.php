<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google" content="notranslate">
    <meta name="description" content="Takesbet">
    <meta name="keywords" content="Takesbet">
    <meta name="google-site-verification" content="">
    <title>@yield('title')</title>
    @foreach(\App\Helpers\Language::LOCALE as $locale => $language)
        @if($locale != app()->getLocale())
            <link rel="alternate" hreflang="{{$locale}}" href="{{\App\Helpers\Language::getUri($locale)}}"/>
        @else
            <link rel="canonical" href="{{\App\Helpers\Language::getUri($locale)}}"/>
            <meta property="og:url" content="{{\App\Helpers\Language::getUri($locale)}}"/>
        @endif
    @endforeach
    <meta property="og:site_name" content="Takesbet"/>
    <meta property="og:type" content="website">
    <meta property="og:description" content="Takesbet @lang('app.is the best place to find the best online betting sites, reviews, and bonuses. Check out our picks below')!"/>
    <meta property="og:title" content="Takesbet - @lang('app.best Betting Sites, Reviews & Bonuses') {{ date('Y') }}"/>
    <meta property="og:image" content="{{asset('img/logo/logo.png').'?v='.filemtime('img/logo/logo.png')}}">
    <meta property="og:image:secure_url" content="{{asset('img/logo/logo.png').'?v='.filemtime('img/logo/logo.png')}}">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="100">
    <meta property="og:image:height" content="100">
    <meta name="theme-color" content="#1D4ED8FF">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico').'?v='.filemtime('img/favicon.ico')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css').'?v='.filemtime('css/app.css')}}">
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
            <img src="{{asset('img/logo/logo.png').'?v='.filemtime('img/logo/logo.png')}}" alt="Takesbet" class="w-10 logo">
        </a>
        <!--Menu-->
        <div class="items-center text-white hidden sm:flex">
            <div class="relative">
                <a class="dropdown-item mx-2 hover:bg-blue-600 p-2 transition-all duration-500" href="{{route('betting')}}">@lang('app.Betting')</a>
                <a class="dropdown-item mx-2 hover:bg-blue-600 p-2 transition-all duration-500" href="{{route('casino')}}">@lang('app.Casino')</a>
                <a class="dropdown-item mx-2 hover:bg-blue-600 p-2 transition-all duration-500" href="/sport">@lang('app.Sport')</a>
                <a class="dropdown-item mx-2 hover:bg-blue-600 p-2 transition-all duration-500" href="/betting_offers">@lang('app.Betting offers')</a>
            </div>
        </div>
        <!--Mobile menu-->
        <div class="sm:hidden">
            <button class="text-white focus:outline-none" id="mobile-menu-button">
                <svg id="menu-icon" fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M3 5h14a1 1 0 110 2H3a1 1 0 010-2zm0 4h14a1 1 0 110 2H3a1 1 0 010-2zm0 4h14a1 1 0 110 2H3a1 1 0 010-2z" clip-rule="evenodd"></path>
                </svg>
                <svg id="close-icon" fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6 hidden">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div id="mobile-menu" class="sm:hidden fixed -left-60 w-60 top-20 transition-all bg-blue-700 z-20">
                <a class="block px-4 py-2 text-white hover:bg-blue-600 transition-all duration-500" href="{{route('betting')}}">@lang('app.Betting')</a>
                <a class="block px-4 py-2 text-white hover:bg-blue-600 transition-all duration-500" href="{{route('casino')}}">@lang('app.Casino')</a>
                <a class="block px-4 py-2 text-white hover:bg-blue-600 transition-all duration-500" href="/sport">@lang('app.Sport')</a>
                <a class="block px-4 py-2 text-white hover:bg-blue-600 transition-all duration-500" href="/betting_offers">@lang('app.Betting offers')</a>
            </div>
        </div>
        <!--Change language-->
        <div class="relative align-self-center ml-auto mr-2">
            <button class="block text-white focus:outline-none" id="language" aria-haspopup="true" aria-expanded="false">
                <span class="hover:bg-blue-600 p-2 transition-all duration-500">
                    @foreach(\App\Helpers\Language::LOCALE as $locale => $language)
                        @if($locale == app()->getLocale())
                            {{$language}}
                        @endif
                    @endforeach
                    <svg fill="currentColor" viewBox="0 0 20 20" class="language-arrow w-4 h-4 inline-block rotate-180 transition-all duration-300">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </span>
            </button>
            <div class="dropdown-menu absolute right-0 mt-2 py-2 w-48 bg-blue-700 rounded-md shadow-lg hidden z-20">
                @foreach(\App\Helpers\Language::LOCALE as $locale => $language)
                    <a class="block px-4 py-2 text-white hover:bg-blue-600 transition-all duration-500" href="{{\App\Helpers\Language::getUri($locale)}}">{{$language}}</a>
                @endforeach
            </div>
        </div>
    </nav>
</header>
@yield('content')
<button class="fixed bottom-20 right-4 bg-white rounded-full p-4 shadow-md hidden" id="go-up">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="rgba(29, 78, 216, 1)">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
    </svg>
</button>
<div class="fixed inset-0 bg-black opacity-50 z-10 hidden" id="overlay"></div>
<footer class="bg-blue-700 py-5">
    <p class="text-sm text-white text-center">&copy; {{ date('Y') }} Takesbet</p>
</footer>
</body>
<script type="text/javascript" src="{{asset('js/preloader.js').'?v='.filemtime('js/preloader.js')}}"></script>
<script type="text/javascript" src="{{asset('js/language.js').'?v='.filemtime('js/language.js')}}"></script>
<script type="text/javascript" src="{{asset('js/menu.js').'?v='.filemtime('js/menu.js')}}"></script>
<script type="text/javascript" src="{{asset('js/goUp.js').'?v='.filemtime('js/goUp.js')}}"></script>
</html>

