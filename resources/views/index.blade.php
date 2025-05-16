@extends('app')

@section('title', 'Takesbet')

@section('content')
    <div class="xl:px-20 sm:py-5 px-3 py-2 m-auto pt-24 sm:pt-24">
        <h1 class="text-center text-lg px-0 sm:text-2xl sm:px-7 sm:text-left  font-bold">@lang('index.Best Betting Sites'), @lang('index.Reviews & Bonuses') {{ date('Y') }}</h1>
        <h2 class="text-base px-0 sm:px-7 text-gray-700">Takesbet @lang('index.is the best place to find the best online betting sites, reviews, and bonuses. Check out our picks below')!</h2>
        <h3 class="text-lg px-0 sm:text-2xl sm:px-7 font-bold mt-4">@lang('index.Top Betting Sites')</h3>
        @foreach($bookmakers as $bookmaker)
            <div class="border-grey border-2 rounded-md mt-4 flex justify-between flex-col relative shadow-gray-500 shadow-xl">
                <div class="absolute top-0 right-0 text-xs bg-gray-200 rounded-tr-md rounded-bl-md w-5 h-5 flex justify-center items-center">{{$loop->iteration}}</div>
                <div class="justify-start flex md:hidden border-b-2 border-grey">
                    <a href="https://{{$bookmaker['url']}}" target="_blank" class="flex">
                        <div class="w-20 rounded-tl-md flex justify-center items-center" style="background-color: {{$bookmaker['logo_color']}}">
                            <img src="{{ asset('img/logo/'.$bookmaker['logo']).'?v='.filemtime('img/logo/'.$bookmaker['logo']) }}" alt="{{$bookmaker['name']}} logo" class="ml-4 z-10">
                        </div>
                        <div class="triangle-right" style="border-left-color: {{$bookmaker['logo_color']}}"></div>
                    </a>
                    <div class="flex flex-col px-2 justify-around self-center">
                        <div class="text-blue-500">
                            <a href="https://{{$bookmaker['url']}}" target="_blank" class="flex">{{$bookmaker['name']}}</a>
                        </div>
                        <div class="font-bold text-xs sm:text-base">{{$bookmaker['bonus_label_1_'.app()->getLocale()]}}</div>
                        <div class="text-xs sm:text-base">{{$bookmaker['bonus_label_2_'.app()->getLocale()]}}</div>
                        @if($bookmaker['bonus_available'])
                            <a href="/bonus/{{$bookmaker['key']}}" class="text-gray-500 text-sm underline">{{$bookmaker['name']}} @lang('index.Bonus')</a>
                        @endif
                    </div>
                </div>
                <div class="flex justify-between">
                    <a href="https://{{$bookmaker['url']}}" target="_blank" class="hidden md:flex">
                        <div class="w-20 rounded-l-md flex justify-center items-center" style="background-color: {{$bookmaker['logo_color']}}">
                            <img src="{{ asset('img/logo/'.$bookmaker['logo']).'?v='.filemtime('img/logo/'.$bookmaker['logo']) }}" alt="{{$bookmaker['name']}} logo" class="ml-4 z-10">
                        </div>
                        <div class="triangle-right" style="border-left-color: {{$bookmaker['logo_color']}}"></div>
                    </a>
                    <div class="flex-col px-2 justify-around self-center hidden md:flex w-96">
                        <div class="text-blue-500 hidden md:block">
                            <a href="https://{{$bookmaker['url']}}" target="_blank" class="flex">{{$bookmaker['name']}}</a>
                        </div>
                        <div class="font-bold text-xs sm:text-base">{{$bookmaker['bonus_label_1_'.app()->getLocale()]}}</div>
                        <div class="text-sm lg:text-base">{{$bookmaker['bonus_label_2_'.app()->getLocale()]}}</div>
                        @if($bookmaker['bonus_available'])
                            <a href="/bonus/{{$bookmaker['key']}}" class="text-gray-500 text-xs sm:text-sm underline">{{$bookmaker['name']}} @lang('index.Bonus')</a>
                        @endif
                    </div>
                    <div class="flex flex-col justify-around self-center ml-2 md:w-36">
                        <div class="text-2xl sm:text-4xl text-center" data-rate-value-id="{{$bookmaker['id']}}">{{$bookmaker['rating']}}</div>
                        <a href="/bookmakers/{{$bookmaker['key']}}" class="text-gray-500 text-xs sm:text-sm underline text-center">@lang('index.Read Review')</a>
                    </div>
                    <div class="flex-col justify-around self-center hidden md:flex">
                        <div class="text-center flex mx-auto">
                            <p class="text-xs xl:text-base">@lang('index.Rate it')! (</p>
                            <p class="rate-count text-xs xl:text-base" data-rate-count-id="{{$bookmaker['id']}}">{{$bookmaker['rating_count']}}</p>
                            <p class="text-xs xl:text-base">)</p>
                        </div>
                        <div class="rate flex mx-auto" data-rate-id="{{$bookmaker['id']}}">
                            <input name="rate" value="1" type="checkbox">
                            <input name="rate" value="2" type="checkbox">
                            <input name="rate" value="3" type="checkbox">
                            <input name="rate" value="4" type="checkbox">
                            <input name="rate" value="5" type="checkbox">
                        </div>
                    </div>
                    <div class="flex-col justify-around self-center flex w-1/3 sm:w-auto">
                        <div class="text-xs sm:text-sm text-center">@lang('index.Promo code'):</div>
                        <div class="flex bg-gray-100 rounded w-min pr-2 mx-auto">
                            <p class="p-1 font-bold text-sm sm:text-base">{{$bookmaker['promo_code']}}</p>
                            <a href="https://{{$bookmaker['url']}}" target="_blank" class="cope-promo-code"></a>
                        </div>
                        <a href="promo-code/{{$bookmaker['key']}}" class="text-gray-500 text-xs sm:text-sm underline text-center">{{$bookmaker['name']}} @lang('index.Promo code')</a>
                    </div>
                    <div class="flex flex-col justify-around self-center mr-2">
                        <a href="https://{{$bookmaker['url']}}" target="_blank" class="h-10 w-28 bg-blue-500 text-xs sm:text-sm text-white rounded-full hover:bg-blue-400 flex justify-center items-center cursor-pointer transition-all duration-500">@lang('index.Claim') &#8594;</a>
                        <a href="https://{{$bookmaker['url']}}" class="text-gray-500 text-xs sm:text-sm underline text-center">@lang('index.Visit') {{$bookmaker['name']}}</a>
                    </div>
                </div>
            </div>
            <p class="text-xs text-gray-700 text-justify px-2">{{$bookmaker['name']}}: {{$bookmaker['warning_'.app()->getLocale()]}}</p>
        @endforeach
        <h3 class="text-lg sm:text-2xl font-bold mt-4 text-center">@lang('index.Best Betting Sites')</h3>
        <div class="px-2 sm:px-10 lg:px-36 text-justify">
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_1')</p>
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_2')</p>
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_3')</p>
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_4')</p>
        </div>
        <h3 class="text-lg sm:text-2xl font-bold mt-4 text-center">@lang('index.Top 10 Betting Sites (Worldwide)')</h3>
        <div class="px-2 sm:px-10 lg:px-36 text-justify">
            <p class="text-base text-gray-700 text-justify indent-10">1. bet365</p>
            <p class="text-base text-gray-700 text-justify indent-10">2. Stake.com</p>
            <p class="text-base text-gray-700 text-justify indent-10">3. Ladbrokes & Ladbrokes Australia</p>
            <p class="text-base text-gray-700 text-justify indent-10">4. Unibet</p>
            <p class="text-base text-gray-700 text-justify indent-10">5. 1xBet</p>
            <p class="text-base text-gray-700 text-justify indent-10">6. Betwinner</p>
            <p class="text-base text-gray-700 text-justify indent-10">7. Hollywoodbets</p>
            <p class="text-base text-gray-700 text-justify indent-10">8. Pinnacle</p>
            <p class="text-base text-gray-700 text-justify indent-10">9. Duelbits</p>
            <p class="text-base text-gray-700 text-justify indent-10">10. 1Win</p>
        </div>
        <div class="relative w-full sm:w-3/4 overflow-hidden my-4 mx-auto">
            <div class="slider flex">
                <a href="https://bet365.com" target="_blank" class="slide flex justify-center items-center" style="background-color: #1a674b">
                    <img class="block w-full p-4" src="{{ asset('img/logo/bet365.svg').'?v='.filemtime('img/logo/bet365.svg')}}" alt="bet365 logo">
                </a>
                <a href="https://stake.com" target="_blank" class="slide flex justify-center items-center" style="background-color: #1A2C38">
                    <img class="block w-full p-4" src="{{ asset('img/logo/stake.svg').'?v='.filemtime('img/logo/stake.svg')}}" alt="Stake logo">
                </a>
                <a href="https://ladbrokes.com" target="_blank" class="slide flex justify-center items-center" style="background-color: #F01E28;">
                    <img class="block w-full p-4" src="{{ asset('img/logo/ladbrokes.svg').'?v='.filemtime('img/logo/ladbrokes.svg')}}" alt="Ladbrokes logo">
                </a>
                <a href="https://unibet.com" target="_blank" class="slide flex justify-center items-center" style="background-color: #147B45">
                    <img class="block w-full p-4" src="{{ asset('img/logo/unibet.svg').'?v='.filemtime('img/logo/unibet.svg')}}" alt="Unibet logo">
                </a>
                <a href="https://1xbet.com" target="_blank" class="slide flex justify-center items-center" style="background-color: #1A5685">
                    <img class="block w-full p-4" src="{{ asset('img/logo/1xbet.svg').'?v='.filemtime('img/logo/1xbet.svg')}}" alt="1xbet logo">
                </a>
                <a href="https://betwinner.com" target="_blank" class="slide flex justify-center items-center" style="background-color: #1a674b;">
                    <img class="block w-full p-4" src="{{ asset('img/logo/betwinner.svg').'?v='.filemtime('img/logo/betwinner.svg')}}" alt="Betwinner logo">
                </a>
                <a href="https://www.hollywoodbets.com" target="_blank" class="slide flex justify-center items-center" style="background-color: #7d1bd9">
                    <img class="block w-full p-4" src="{{ asset('img/logo/hollywoodbets.svg').'?v='.filemtime('img/logo/hollywoodbets.svg')}}" alt="Hollywoodbets logo">
                </a>
                <a href="https://pinnacle.com" target="_blank" class="slide flex justify-center items-center" style="background-color: #000000">
                    <img class="block w-full p-4" src="{{ asset('img/logo/pinnacle.svg').'?v='.filemtime('img/logo/pinnacle.svg')}}" alt="Pinnacle logo">
                </a>
                <a href="https://duelbits.com" target="_blank" class="slide flex justify-center items-center" style="background-color: #19262b">
                    <img class="block w-full p-4" src="{{ asset('img/logo/duelbits.svg').'?v='.filemtime('img/logo/duelbits.svg')}}" alt="Duelbits logo">
                </a>
                <a href="https://1win.com" target="_blank" class="slide flex justify-center items-center" style="background-color: #000000">
                    <img class="block w-full p-4" src="{{ asset('img/logo/1win.svg').'?v='.filemtime('img/logo/1win.svg')}}" alt="1Win logo">
                </a>
            </div>
        </div>
        <h3 class="text-lg sm:text-2xl font-bold mt-4 text-center">@lang('index.Bookmaker Payment Methods')</h3>
        <div class="px-2 sm:px-10 lg:px-36 text-justify">
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_5')</p>
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_6')</p>
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_7')</p>
        </div>
        <h3 class="text-lg sm:text-2xl font-bold mt-4 text-center">@lang('index.Top 10 Payment Methods')</h3>
        <div class="px-2 sm:px-10 lg:px-36 text-justify">
            <p class="text-base text-gray-700 text-justify indent-10">1. PayPal</p>
            <p class="text-base text-gray-700 text-justify indent-10">2. Neteller</p>
            <p class="text-base text-gray-700 text-justify indent-10">3. Skrill</p>
            <p class="text-base text-gray-700 text-justify indent-10">4. Mastercard</p>
            <p class="text-base text-gray-700 text-justify indent-10">5. Visa</p>
            <p class="text-base text-gray-700 text-justify indent-10">6. @lang('index.Cryptocurrencies including Bitcoin')</p>
            <p class="text-base text-gray-700 text-justify indent-10">7. Paysafecard</p>
            <p class="text-base text-gray-700 text-justify indent-10">8. iDeal</p>
            <p class="text-base text-gray-700 text-justify indent-10">9. giropay</p>
            <p class="text-base text-gray-700 text-justify indent-10">10. Klarna</p>
        </div>
        <div class="relative w-full sm:w-3/4 overflow-hidden my-4 mx-auto">
            <div class="slider flex">
                <a href="https://www.paypal.com" target="_blank" class="slide flex justify-center items-center" style="background-color: white">
                    <img class="block w-full p-4" src="{{ asset('img/payment/paypal.svg').'?v='.filemtime('img/payment/paypal.svg')}}" alt="PayPal logo">
                </a>
                <a href="https://neteller.com" target="_blank" class="slide flex justify-center items-center" style="background-color: #336633">
                    <img class="block w-full p-4" src="{{ asset('img/payment/neteller.svg').'?v='.filemtime('img/payment/neteller.svg')}}" alt="Neteller logo">
                </a>
                <a href="https://skrill.com" target="_blank" class="slide flex justify-center items-center" style="background-color: #910590;">
                    <img class="block w-full p-4" src="{{ asset('img/payment/skrill.svg').'?v='.filemtime('img/payment/skrill.svg')}}" alt="Skrill logo">
                </a>
                <a href="https://mastercard.com" target="_blank" class="slide flex justify-center items-center" style="background-color: white">
                    <img class="block w-full p-4" src="{{ asset('img/payment/mastercard.svg').'?v='.filemtime('img/payment/mastercard.svg')}}" alt="Mastercard logo">
                </a>
                <a href="https://visa.com" target="_blank" class="slide flex justify-center items-center" style="background-color: white">
                    <img class="block w-full p-4" src="{{ asset('img/payment/visa.svg').'?v='.filemtime('img/payment/visa.svg')}}" alt="Visa logo">
                </a>
                <a href="https://bitcoin.com" target="_blank" class="slide flex justify-center items-center" style="background-color: white">
                    <img class="block w-full p-4" src="{{ asset('img/payment/bitcoin.svg').'?v='.filemtime('img/payment/bitcoin.svg')}}" alt="Bitcoin logo">
                </a>
                <a href="https://paysafecard.com" target="_blank" class="slide flex justify-center items-center" style="background-color: #3200ff;">
                    <img class="block w-full p-4" src="{{ asset('img/payment/paysafecard.svg').'?v='.filemtime('img/payment/paysafecard.svg')}}" alt="Paysafecard logo">
                </a>
                <a href="https://www.ideal.nl" target="_blank" class="slide flex justify-center items-center" style="background-color: white">
                    <img class="block w-full p-4" src="{{ asset('img/payment/ideal.svg').'?v='.filemtime('img/payment/ideal.svg')}}" alt="iDeal logo">
                </a>
                <a href="https://www.girocard.eu" target="_blank" class="slide flex justify-center items-center" style="background-color: white">
                    <img class="block w-full p-4" src="{{ asset('img/payment/giropay.svg').'?v='.filemtime('img/payment/giropay.svg')}}" alt="giropay logo">
                </a>
                <a href="https://klarna.com" target="_blank" class="slide flex justify-center items-center" style="background-color: #FFA8CDFF">
                    <img class="block w-full p-4" src="{{ asset('img/payment/klarna.svg').'?v='.filemtime('img/payment/klarna.svg')}}" alt="Klarna logo">
                </a>
            </div>
        </div>
        <h3 class="text-lg sm:text-2xl font-bold mt-4 text-center">@lang('index.Betting Site Offers')</h3>
        <div class="px-2 sm:px-10 lg:px-36 text-justify">
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_8')</p>
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_9')</p>
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_10')</p>
        </div>
        <div class="relative w-full lg:w-3/4 overflow-hidden my-4 mx-auto">
            <div class="flex">
                <a href="https://stake.com" target="_blank" class="box flex-col justify-between flex" style="background-color: #1A2C38">
                    <div class="w-full h-10 bg-gray-900 flex justify-center items-center opacity-50">
                        <img class="h-10 p-1" src="{{ asset('img/logo/stake.svg').'?v='.filemtime('img/logo/stake.svg')}}" alt="Stake logo">
                    </div>
                    <p class="text-center text-white text-xs sm:text-base">@lang('index.Bonus')</p>
                    <p class="text-center text-white text-xs sm:text-base">$3000</p>
                    <p class="text-center text-white text-xs sm:text-base">@lang('index.Promo code')</p>
                    <p class="text-center text-white text-xs sm:text-base">NEWBONUS</p>
                    <p class="mx-auto mb-1 h-8 w-3/4 bg-blue-500 text-xs sm:text-sm text-white rounded-full hover:bg-blue-400 flex justify-center items-center cursor-pointer transition-all duration-500">@lang('index.Join')</p>
                </a>
                <a href="https://shuffle.com" target="_blank" class="box flex-col justify-between flex" style="background-color: #7717ff">
                    <div class="w-full h-10 bg-gray-900 flex justify-center items-center opacity-50">
                        <img class="h-10 p-1" src="{{ asset('img/logo/shuffle.svg').'?v='.filemtime('img/logo/shuffle.svg')}}" alt="Shuffle logo">
                    </div>
                    <p class="text-center text-white text-xs sm:text-base">@lang('index.Deposit') @lang('index.Bonus')</p>
                    <p class="text-center text-white text-xs sm:text-base">$1000</p>
                    <p class="text-center text-white text-xs sm:text-base">@lang('index.Promo code')</p>
                    <p class="text-center text-white text-xs sm:text-base">MAXBONUS</p>
                    <p class="mx-auto mb-1 h-8 w-3/4 bg-blue-500 text-xs sm:text-sm text-white rounded-full hover:bg-blue-400 flex justify-center items-center cursor-pointer transition-all duration-500">@lang('index.Join')</p>
                </a>
                <a href="https://hopufoa6.site/registration" target="_blank" class="box flex-col justify-between flex" style="background-color: #204f14">
                    <div class="w-full h-10 bg-gray-900 flex justify-center items-center opacity-50">
                        <img class="h-10 p-1" src="{{ asset('img/logo/888starz.svg').'?v='.filemtime('img/logo/888starz.svg')}}" alt="888starz logo">
                    </div>
                    <p class="text-center text-white text-xs sm:text-base">@lang('index.Free Bet')</p>
                    <p class="text-center text-white text-xs sm:text-base">€130</p>
                    <p class="text-center text-white text-xs sm:text-base">@lang('index.Promo code')</p>
                    <p class="text-center text-white text-xs sm:text-base">NEWBONUS</p>
                    <p class="mx-auto mb-1 h-8 w-3/4 bg-blue-500 text-xs sm:text-sm text-white rounded-full hover:bg-blue-400 flex justify-center items-center cursor-pointer transition-all duration-500">@lang('index.Join')</p>
                </a>
                <a href="https://betwinner.com" target="_blank" class="box flex-col justify-between hidden sm:flex" style="background-color: #1a674b">
                    <div class="w-full h-10 bg-gray-900 flex justify-center items-center opacity-50">
                        <img class="h-10 p-1" src="{{ asset('img/logo/betwinner.svg').'?v='.filemtime('img/logo/betwinner.svg')}}" alt="Betwinner logo">
                    </div>
                    <p class="text-center text-white text-xs sm:text-base">@lang('index.Bonus')</p>
                    <p class="text-center text-white text-xs sm:text-base">$130</p>
                    <p class="text-center text-white text-xs sm:text-base">@lang('index.Promo code')</p>
                    <p class="text-center text-white text-xs sm:text-base">NEWBONUS</p>
                    <p class="mx-auto mb-1 h-8 w-3/4 bg-blue-500 text-xs sm:text-sm text-white rounded-full hover:bg-blue-400 flex justify-center items-center cursor-pointer transition-all duration-500">@lang('index.Join')</p>
                </a>
            </div>
        </div>
        <h3 class="text-lg px-0 sm:text-2xl sm:px-7 font-bold mt-4 text-center">@lang('index.Top Betting Sites')</h3>
        <div class="px-2 sm:px-10 lg:px-36 text-justify">
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_11')</p>
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_12')</p>
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_13')</p>
            <h4 class="text-base px-0 sm:text-lg font-bold mt-4 indent-10">@lang('index.Bonus/Free Bet Offers')</h4>
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_14')</p>
            <h4 class="text-base px-0 sm:text-lg font-bold mt-4 indent-10">@lang('index.Range of Sports')</h4>
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_15')</p>
            <h4 class="text-base px-0 sm:text-lg font-bold mt-4 indent-10">@lang('index.Live Streaming')</h4>
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_16')</p>
            <h4 class="text-base px-0 sm:text-lg font-bold mt-4 indent-10">@lang('index.Payment Methods')</h4>
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_17')</p>
            <h4 class="text-base px-0 sm:text-lg font-bold mt-4 indent-10">@lang('index.Website')</h4>
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_18')</p>
            <h4 class="text-base px-0 sm:text-lg font-bold mt-4 indent-10">@lang('index.Safety and Security')</h4>
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_19')</p>
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_20')</p>
        </div>
        <div class="px-2 sm:px-10 lg:px-36 relative">
            <img class="w-full" src="{{ asset('img/index/baner_win.jpg').'?v='.filemtime('img/index/baner_win.jpg')}}" alt="Win">
            <img class="logo absolute top-4 left-8 sm:top-6 sm:left-16 lg:left-44 w-1/12" src="{{ asset('img/logo/logo.png').'?v='.filemtime('img/logo/logo.png')}}" alt="Win">
            <p class="text-base sm:text-2xl absolute bottom-4 left-8 sm:bottom-6 sm:left-16 lg:left-44 text-white font-bold">@lang('index.Best Sports Betting Sites')</p>
        </div>
        <h3 class="text-lg px-0 sm:text-2xl sm:px-7 font-bold mt-4 text-center">@lang('index.Best Sports Betting Sites')</h3>
        <div class="px-2 sm:px-10 lg:px-36 text-justify">
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_21')</p>
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_22')</p>
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_23')</p>
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_24')</p>
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_25')</p>
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_26')</p>
        </div>
        <h3 class="text-lg px-0 sm:text-2xl sm:px-7 font-bold mt-4 text-center">@lang('index.New Sports Betting Sites')</h3>
        <div class="px-2 sm:px-10 lg:px-36 text-justify">
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_27')</p>
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_28')</p>
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_29')</p>
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_30')</p>
        </div>
        <h3 class="text-lg px-0 sm:text-2xl sm:px-7 font-bold mt-4 text-center">@lang('index.Which are the most popular sports to bet on?')</h3>
        <div class="px-2 sm:px-10 lg:px-36 text-justify">
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_31')</p>
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_32')</p>
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_33')</p>
            <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph_34')</p>
        </div>
        <div class="px-2 sm:px-10 lg:px-36 text-justify">
            <div class="border-black border-2 rounded-md p-4 shadow-gray-500 shadow-xl">
                <div class="w-full flex">
                    <img class="w-1/12" src="{{ asset('img/index/faq.svg').'?v='.filemtime('img/index/faq.svg')}}">
                    <h3 class="text-lg pl-4 sm:text-2xl font-bold mt-4">@lang('index.Betting Sites FAQs')</h3>
                </div>
                <h4 class="text-base px-0 sm:text-lg font-bold mt-4">@lang('index.Which betting site offers free bet?')</h4>
                <p class="text-base text-gray-700 text-justify mb-4">@lang('index.paragraph_35')</p>
                <p class="text-base text-gray-700 text-justify mb-4">@lang('index.paragraph_36')</p>
                <h4 class="text-base px-0 sm:text-lg font-bold mt-4">@lang('index.Which betting sites can you cash out on?')</h4>
                <p class="text-base text-gray-700 text-justify mb-4">@lang('index.paragraph_37')</p>
                <p class="text-base text-gray-700 text-justify mb-4">@lang('index.paragraph_38')</p>
                <p class="text-base text-gray-700 text-justify mb-4">@lang('index.paragraph_39')</p>
                <h4 class="text-base px-0 sm:text-lg font-bold mt-4">@lang('index.Which betting sites use PayPal?')</h4>
                <p class="text-base text-gray-700 text-justify mb-4">@lang('index.paragraph_40')</p>
                <p class="text-base text-gray-700 text-justify mb-4">@lang('index.paragraph_41')</p>
                <h4 class="text-base px-0 sm:text-lg font-bold mt-4">@lang('index.Which betting sites accept Neteller?')</h4>
                <p class="text-base text-gray-700 text-justify mb-4">@lang('index.paragraph_42')</p>
                <p class="text-base text-gray-700 text-justify mb-4">@lang('index.paragraph_43')</p>
                <p class="text-base text-gray-700 text-justify mb-4">@lang('index.paragraph_44')</p>
                <h4 class="text-base px-0 sm:text-lg font-bold mt-4">@lang('index.How do betting sites calculate odds?')</h4>
                <p class="text-base text-gray-700 text-justify mb-4">@lang('index.paragraph_45')</p>
                <p class="text-base text-gray-700 text-justify mb-4">@lang('index.paragraph_46')</p>
                <h4 class="text-base px-0 sm:text-lg font-bold mt-4">@lang('index.Which betting sites have live streaming?')</h4>
                <p class="text-base text-gray-700 text-justify mb-4">@lang('index.paragraph_47')</p>
                <p class="text-base text-gray-700 text-justify mb-4">@lang('index.paragraph_48')</p>
                <p class="text-base text-gray-700 text-justify mb-4">@lang('index.paragraph_49')</p>
            </div>
        </div>

    </div>
    <script type="text/javascript" src="{{ asset('js/index/rate.js').'?v='.filemtime('js/index/rate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/index/slider.js').'?v='.filemtime('js/index/slider.js') }}"></script>
@endsection
