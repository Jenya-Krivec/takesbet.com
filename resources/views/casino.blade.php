@extends('app')

@section('title', trans('casino.title').' '.date('Y', strtotime('+10 days')))

@section('description',  trans('casino.description'))

@section('keywords', trans('casino.keywords'))

@section('content')
    <main class="xl:px-20 sm:py-5 px-3 py-2 m-auto pt-24 sm:pt-24">
        <h1 class="text-center text-lg px-0 sm:text-2xl sm:px-7 sm:text-left  font-bold">@lang('casino.Review of casinos from popular online bookmakers') {{ date('Y') }}</h1>
        <h2 class="text-lg sm:text-2xl px-0 sm:px-7 font-bold mt-4">@lang('casino.Online Casinos')</h2>
        <p>@lang('casino.paragraph_1')</p>
        <p>@lang('casino.paragraph_2')</p>
        <h3 class="text-lg px-0 sm:text-2xl sm:px-7 font-bold mt-4">@lang('casino.Top Bookmakers with Online Casinos')</h3>
        @foreach($bookmakers as $bookmaker)
            @include('inc.component_casino_bookmaker', ['bookmaker' => $bookmaker, 'iteration' => $loop->iteration, 'authorized' => false])
        @endforeach
        <br>
        <div class="px-2 sm:px-10 lg:px-36 text-justify">
            <p class="text-base text-gray-700 text-justify indent-10 mb-4 font-bold">@lang('casino.paragraph_3')</p>
        </div>
        <h3 class="text-lg sm:text-2xl font-bold mt-4 text-center">@lang('casino.Slots and Slot Machines')</h3>
        <div class="px-2 sm:px-10 lg:px-36 text-justify">
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('casino.paragraph_4')</p>
        </div>
        <h3 class="text-lg sm:text-2xl font-bold mt-4 text-center">@lang('casino.Live Casino')</h3>
        <div class="px-2 sm:px-10 lg:px-36 text-justify">
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('casino.paragraph_5')</p>
        </div>
        <div class="relative w-full sm:w-3/4 overflow-hidden my-4 mx-auto">
            <div class="slider flex">
                <a href="" target="_blank" class="slide flex justify-center items-center relative mr-1">
                    <img class="block w-full" src="{{ asset('img/casino_games/baccarat.webp').'?v='.filemtime('img/casino_games/baccarat.webp')}}" alt="@lang('casino.baccarat')" width="100" height="100">
                    <span class="absolute bottom-0 left-0 text-white p-1 w-full text-center" style="background-color: rgba(0, 0, 0, 0.5)">@lang('casino.baccarat')</span>
                </a>
                <a href="" target="_blank" class="slide flex justify-center items-center relative mr-1">
                    <img class="block w-full" src="{{ asset('img/casino_games/blackjack.webp').'?v='.filemtime('img/casino_games/blackjack.webp')}}" alt="@lang('casino.blackjack')" width="100" height="100">
                    <span class="absolute bottom-0 left-0 text-white p-1 w-full text-center" style="background-color: rgba(0, 0, 0, 0.5)">@lang('casino.blackjack')</span>
                </a>
                <a href="" target="_blank" class="slide flex justify-center items-center relative mr-1">
                    <img class="block w-full" src="{{ asset('img/casino_games/craps.webp').'?v='.filemtime('img/casino_games/craps.webp')}}" alt="@lang('casino.craps')" width="100" height="100">
                    <span class="absolute bottom-0 left-0 text-white p-1 w-full text-center" style="background-color: rgba(0, 0, 0, 0.5)">@lang('casino.craps')</span>
                </a>
                <a href="" target="_blank" class="slide flex justify-center items-center relative mr-1">
                    <img class="block w-full" src="{{ asset('img/casino_games/poker.webp').'?v='.filemtime('img/casino_games/poker.webp')}}" alt="@lang('casino.poker')" width="100" height="100">
                    <span class="absolute bottom-0 left-0 text-white p-1 w-full text-center" style="background-color: rgba(0, 0, 0, 0.5)">@lang('casino.poker')</span>
                </a>
                <a href="" target="_blank" class="slide flex justify-center items-center relative mr-1">
                    <img class="block w-full" src="{{ asset('img/casino_games/keno.webp').'?v='.filemtime('img/casino_games/keno.webp')}}" alt="@lang('casino.keno')" width="100" height="100">
                    <span class="absolute bottom-0 left-0 text-white p-1 w-full text-center" style="background-color: rgba(0, 0, 0, 0.5)">@lang('casino.keno')</span>
                </a>
                <a href="" target="_blank" class="slide flex justify-center items-center relative mr-1">
                    <img class="block w-full" src="{{ asset('img/casino_games/roulette.webp').'?v='.filemtime('img/casino_games/roulette.webp')}}" alt="@lang('casino.roulette')" width="100" height="100">
                    <span class="absolute bottom-0 left-0 text-white p-1 w-full text-center" style="background-color: rgba(0, 0, 0, 0.5)">@lang('casino.roulette')</span>
                </a>
                <a href="" target="_blank" class="slide flex justify-center items-center relative mr-1">
                    <img class="block w-full" src="{{ asset('img/casino_games/slots.webp').'?v='.filemtime('img/casino_games/slots.webp')}}" alt="@lang('casino.slots')" width="100" height="100">
                    <span class="absolute bottom-0 left-0 text-white p-1 w-full text-center" style="background-color: rgba(0, 0, 0, 0.5)">@lang('casino.slots')</span>
                </a>
            </div>
        </div>
        <div class="px-2 sm:px-10 lg:px-36 text-justify">
            <div class="border-black border-2 rounded-md p-4 shadow-gray-400 shadow-xl">
                <div class="w-full flex">
                    <img class="w-1/12" src="{{ asset('img/index/faq.svg').'?v='.filemtime('img/index/faq.svg')}}" alt="faq" width="42" height="44">
                    <h3 class="text-lg pl-4 sm:text-2xl font-bold mt-4">@lang('casino.Frequently Asked Questions about Casinos')</h3>
                </div>
                <h4 class="text-base px-0 sm:text-lg font-bold mt-4">@lang('casino.What is an online casino?')</h4>
                <p class="text-base text-gray-700 text-justify mb-4">@lang('casino.paragraph_6')</p>
                <h4 class="text-base px-0 sm:text-lg font-bold mt-4">@lang('casino.Are online casinos legal?')</h4>
                <p class="text-base text-gray-700 text-justify mb-4">@lang('casino.paragraph_7')</p>
                <h4 class="text-base px-0 sm:text-lg font-bold mt-4">@lang('casino.What games are available in online casinos?')</h4>
                <p class="text-base text-gray-700 text-justify mb-4">@lang('casino.paragraph_8')</p>
                <h4 class="text-base px-0 sm:text-lg font-bold mt-4">@lang('casino.What is live casino?')</h4>
                <p class="text-base text-gray-700 text-justify mb-4">@lang('casino.paragraph_9')</p>
                <h4 class="text-base px-0 sm:text-lg font-bold mt-4">@lang('casino.Can you play at a casino without real money?')</h4>
                <p class="text-base text-gray-700 text-justify mb-4">@lang('casino.paragraph_10')</p>
                <h4 class="text-base px-0 sm:text-lg font-bold mt-4">@lang('casino.How to choose a reliable online casino?')</h4>
                <p class="text-base text-gray-700 text-justify mb-4">@lang('casino.paragraph_11')</p>
            </div>
        </div>
    </main>
    <script defer type="text/javascript" src="{{ asset('js/index/rate.js').'?v='.filemtime('js/index/rate.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/index/slider.js').'?v='.filemtime('js/index/slider.js') }}"></script>
@endsection
