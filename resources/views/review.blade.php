@extends('app')

@section('title', trans('review.title', ['bookmaker' => $bookmaker['name']]))

@section('description',  trans('review.description', ['bookmaker' => $bookmaker['name']]))

@section('keywords', trans('review.keywords', ['bookmaker' => $bookmaker['name']]))

@section('content')
    <main class="pt-20">
        <div class="w-full flex justify-center items-center bg-white text-blue-700 py-2 text-sm sm:text-base text-center">
            <div class="flex-col flex justify-center items-center py-1 px-4 mt-1">
                <p>{{trans('review.Review', ['bookmaker' => $bookmaker['name']])}}</p>
                <span class="w-full h-1 bg-blue-700"></span>
            </div>
            <a href="{{route('promocode', $bookmaker['key'])}}" class="flex-col flex justify-center items-center mx-1 py-1 px-4">{{trans('review.Promo Codes', ['bookmaker' => $bookmaker['name']])}} & @lang('review.Bonus')</a>
            <a href="" class="flex justify-center items-center mx-1 py-1 px-4">@lang('review.Mobile App')</a>
        </div>
        <!-- Banner -->
        <div class="w-full flex py-10 flex-col sm:flex-row" style="background-color: {{ $bookmaker['logo_color'] }}">
            <div class="w-full sm:w-2/3 flex justify-center items-center flex-col sm:flex-row">
                <div class="w-20 h-20 flex justify-center items-center border-2 border-white rounded-md">
                    <img src="{{asset('img/logo/'.$bookmaker['logo'].'?v='.filemtime('img/logo/'.$bookmaker['logo']))}}" alt="{{$bookmaker['name']}} logo" class="p-2" width="100" height="100">
                </div>
                <div class="text-white mx-4">
                    <h1 class="text-sm sm:text-4xl font-bold my-2">{{trans('review.Review', ['bookmaker' => $bookmaker['name']])}}</h1>
                    <div class="rate flex justify-between items-center lg:w-40" data-rate-id="{{$bookmaker['id']}}">
                        <input name="rate" value="1" type="checkbox" aria-label="One star" disabled="disabled">
                        <input name="rate" value="2" type="checkbox" aria-label="Two stars" disabled="disabled">
                        <input name="rate" value="3" type="checkbox" aria-label="Three stars" disabled="disabled">
                        <input name="rate" value="4" type="checkbox" aria-label="Four stars" disabled="disabled">
                        <input name="rate" value="5" type="checkbox" aria-label="Five stars" disabled="disabled">
                        <div class="text-lg" data-rate-value-id="{{$bookmaker['id']}}">{{$bookmaker['rating']}}</div>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/3 flex-col justify-center items-center flex text-white px-2">
                <h2 class="font-bold text-xs sm:text-lg my-1 text-center">{{$bookmaker['bonus_label_1_'.app()->getLocale()]}}</h2>
                <div class="text-sm lg:text-lg my-1 text-center">{{$bookmaker['bonus_label_2_'.app()->getLocale()]}}</div>
                <div class="text-xs my-1 text-center">{{$bookmaker['name']}}: {{$bookmaker['warning_'.app()->getLocale()]}}</div>
                <a href="{{$bookmaker['url']}}" target="_blank" class="shadow-black bg-blue-700 text-xs sm:text-lg rounded-full hover:bg-blue-600 flex justify-center items-center cursor-pointer transition-all duration-500 my-2 px-16 py-2 shadow-lg">@lang('review.Claim')</a>
            </div>
        </div>
        <!-- Quick Info -->
        <div class="lg:mx-56 sm:py-5 mx-3 py-2 m-auto border-b-2 border-gray-200">
            <button class="focus:outline-none flex justify-start items-center mx-auto cursor-pointer" id="quick-info" aria-haspopup="true" aria-expanded="false">
                <span class="text-lg sm:text-2xl font-bold">{{trans('review.Quick Info', ['bookmaker' => $bookmaker['name']])}}</span>
                <svg fill="currentColor" viewBox="0 0 20 20" class="arrow w-4 h-4 inline-block transition-all duration-300">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="dropdown-menu flex-col flex cursor-pointer hidden">
                @if($bookmaker['payments'])
                    <button class="focus:outline-none flex justify-start items-center cursor-pointer" id="payment-methods" aria-haspopup="true" aria-expanded="false">
                        <span class="text-base font-bold">@lang('review.Payment Methods'):</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" class="arrow w-4 h-4 inline-block transition-all duration-300">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div class="dropdown-menu relative flex-row flex justify-start items-center flex-wrap cursor-pointer pl-4 hidden">
                        @foreach($bookmaker['payments'] as $payment)
                            <img class="w-8 h-8 p-1" src="{{ asset('img/payment_icon/'.$payment['icon'].'.png').'?v='.filemtime('img/payment_icon/'.$payment['icon'].'.png')}}" alt="{{$payment['name']}} icon" title="{{$payment['name']}}" width="66" height="66">
                        @endforeach
                    </div>
                @endif
                @if($bookmaker['currencies'])
                    <button class="focus:outline-none flex justify-start items-center cursor-pointer" id="currency" aria-haspopup="true" aria-expanded="false">
                        <span class="text-base font-bold">@lang('review.Currency'):</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" class="arrow w-4 h-4 inline-block transition-all duration-300">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                   <div class="dropdown-menu flex-row flex justify-between items-center flex-wrap cursor-default pl-4 hidden">
                       @foreach($bookmaker['currencies'] as $currency)
                           <p class="px-1" title="{{$currency['key']}}">{{$currency['name_'.app()->getLocale()]}}@if($currency != end($bookmaker['currencies'])),@endif</p>
                       @endforeach
                   </div>
                @endif
                @if($bookmaker['licensed'])
                    <button class="focus:outline-none flex justify-start items-center cursor-pointer" id="licensed" aria-haspopup="true" aria-expanded="false">
                       <span class="text-base font-bold">@lang('review.Licensed/Regulated by'):</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" class="arrow w-4 h-4 inline-block transition-all duration-300">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div class="dropdown-menu flex-row flex justify-between items-center cursor-pointer pl-4 hidden">
                        <p class="p-1">{{$bookmaker['licensed']}}</p>
                    </div>
                @endif
                @if($bookmaker['sports'])
                    <button class="focus:outline-none flex justify-start items-center cursor-pointer" id="sports" aria-haspopup="true" aria-expanded="false">
                        <span class="text-base font-bold">@lang('review.Sports'):</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" class="arrow w-4 h-4 inline-block transition-all duration-300">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div class="dropdown-menu relative flex-row flex justify-start items-center flex-wrap cursor-pointer pl-4 hidden">
                        @foreach($bookmaker['sports'] as $sport)
                            <img class="w-8 h-8 p-1" src="{{asset('img/sport_icon/'.$sport['icon'].'.png').'?v='.filemtime('img/sport_icon/'.$sport['icon'].'.png')}}" alt="{{$sport['name_'.app()->getLocale()]}} icon" title="{{$sport['name_'.app()->getLocale()]}}" width="66" height="66">
                        @endforeach
                    </div>
                @endif
                @if($bookmaker['restrictions'])
                    <button class="focus:outline-none flex justify-start items-center cursor-pointer" id="gambling" aria-haspopup="true" aria-expanded="false">
                        <span class="text-base font-bold">@lang('review.Responsible Gambling'):</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" class="arrow w-4 h-4 inline-block transition-all duration-300">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div class="dropdown-menu flex-row flex justify-start items-center flex-wrap cursor-default pl-4 hidden">
                        @foreach($bookmaker['restrictions'] as $restriction)
                            <p class="px-1">{{$restriction['name_'.app()->getLocale()]}}@if($restriction != end($bookmaker['restrictions'])),@endif</p>
                        @endforeach
                    </div>
                @endif
                @if($bookmaker['supports'])
                    <button class="focus:outline-none flex justify-start items-center cursor-pointer" id="support" aria-haspopup="true" aria-expanded="false">
                        <span class="text-base font-bold">@lang('review.Customer Support'):</span>
                        <svg fill="currentColor" viewBox="0 0 20 20" class="arrow w-4 h-4 inline-block transition-all duration-300">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div class="dropdown-menu flex-row flex justify-start items-center flex-wrap cursor-default pl-4 hidden">
                        @foreach($bookmaker['supports'] as $support)
                            <p class="px-1">{{$support['name_'.app()->getLocale()]}}@if($support != end($bookmaker['supports'])),@endif</p>
                        @endforeach
                    </div>
                @endif
                <button class="focus:outline-none flex justify-start items-center cursor-pointer" id="streaming" aria-haspopup="true" aria-expanded="false">
                    <span class="text-base font-bold">@lang('review.Live Streaming'):</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" class="arrow w-4 h-4 inline-block transition-all duration-300">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="dropdown-menu flex-row flex justify-start items-center cursor-pointer hidden">
                    @if($bookmaker['streaming'])
                        <div class="flex-row flex justify-center items-center cursor-default text-green-500 bg-green-200 w-6 h-6 ml-5 rounded-sm">&check;</div>
                    @else
                        <div class="flex-row flex justify-center items-center cursor-default text-red-500 bg-red-200 w-6 h-6 ml-5 rounded-sm">X</div>
                    @endif
                </div>
                <button class="focus:outline-none flex justify-start items-center cursor-pointer" id="test" aria-haspopup="true" aria-expanded="false">
                    <span class="text-base font-bold">@lang('review.Tested Betting Sites'):</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" class="arrow w-4 h-4 inline-block transition-all duration-300">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="dropdown-menu flex-row flex justify-start items-center cursor-pointer hidden">
                    @if($bookmaker['tested'])
                        <div class="flex-row flex justify-center items-center cursor-default text-green-500 bg-green-200 w-6 h-6 ml-5 rounded-sm">&check;</div>
                    @else
                        <div class="flex-row flex justify-center items-center cursor-default text-red-500 bg-red-200 w-6 h-6 ml-5 rounded-sm">X</div>
                    @endif
                </div>
            </div>
        </div>
        <!--Reviews-->
        <div class="lg:px-56 sm:py-5 px-3 py-2 m-auto">
            @foreach($review as $component)
                @include('inc/component_'.$component['component'], ['key' => $component['key'], 'values' => json_decode($component['value_'.app()->getLocale()], true)])
            @endforeach
        </div>
        <!--Promo code-->
        <div class="lg:px-56 sm:py-5 px-3 py-2 m-auto">
            <h3 class="text-lg sm:text-2xl font-bold px-0 sm:px-10 my-4">{{trans('review.Promo Codes', ['bookmaker' => $bookmaker['name']])}}</h3>
            <div class="w-full flex justify-between p-5 flex-col sm:flex-row border-gray-200 border-2 rounded-xl shadow-gray-400 shadow-lg">
                <div class="flex-row justify-between items-center flex px-2">
                    <div class="w-28 h-28 flex justify-center items-center rounded-md" style="background-color: {{ $bookmaker['logo_color'] }}">
                        <img src="{{asset('img/logo/'.$bookmaker['logo']).'?v='.filemtime('img/logo/'.$bookmaker['logo'])}}" alt="{{$bookmaker['name']}} logo" class="p-2" width="100" height="100">
                    </div>
                    <div class="flex-row flex sm:hidden justify-end items-center">
                        <a href="{{$bookmaker['url']}}" target="_blank" class="text-white shadow-gray-400 bg-blue-700 text-xs sm:text-base rounded-full hover:bg-blue-600 flex justify-center items-center cursor-pointer transition-all duration-500 my-2 px-8 py-2">@lang('review.Claim')</a>
                    </div>
                </div>
                <div class="flex-col justify-center items-start flex px-2 mt-1 sm:mt-0">
                    <div class="font-bold text-xs sm:text-base mx-1">{{$bookmaker['bonus_label_1_'.app()->getLocale()]}}</div>
                    <div class="font-bold text-xs sm:text-sm mx-1">{{trans('review.Promo Codes', ['bookmaker' => ' ']).' '.$bookmaker['promo_code']}}</div>
                    <div class="curl w-full h-10 flex justify-end items-center border-black border-2 border-dotted rounded-xl bg-gray-100 relative mt-2">
                        <div class="font-bold text-xs sm:text-base px-1 text-white bg-blue-700 h-10 w-full flex justify-center items-center rounded-tl-xl rounded-bl-xl cursor-pointer">@lang('review.Relevant Code')</div>
                        <div class="px-2">XXXXX</div>
                        <div class="w-full text-center hidden">{{$bookmaker['promo_code']}}</div>
                    </div>
                </div>
                <div class="flex-col justify-center items-end px-2 w-1/3 ml-auto hidden sm:flex">
                    <div class="flex-row flex justify-end items-center">
                        @if($bookmaker['tested'])
                            <div class="flex-row flex justify-center items-center text-white bg-blue-700 w-4 h-4 rounded-full mr-2 flex-shrink-0">&check;</div>
                            <div class="text-sm text-gray-700">@lang('review.Tested')</div>
                        @endif
                    </div>
                    <div class="flex-row justify-end items-center">
                        <a href="{{$bookmaker['url']}}" target="_blank" class="text-white shadow-gray-400 bg-blue-700 text-xs sm:text-base rounded-full hover:bg-blue-600 flex justify-center items-center cursor-pointer transition-all duration-500 my-2 px-8 py-2">@lang('review.Claim')</a>
                    </div>
                    <div class="flex-row flex justify-end items-center">
                        <div class="text-xs text-gray-700 text-justify">@lang('review.See full details of the') {{trans('review.Promo Codes', ['bookmaker' => $bookmaker['name']])}}</div>
                    </div>
                </div>
            </div>
            <p class="text-xs text-gray-700 text-justify px-2">{{$bookmaker['name']}}: {{$bookmaker['warning_'.app()->getLocale()]}}</p>
        </div>
    </main>
    <script defer type="text/javascript" src="{{ asset('js/review/rate.js').'?v='.filemtime('js/review/rate.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/review/quickInfo.js').'?v='.filemtime('js/review/quickInfo.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/review/promoCode.js').'?v='.filemtime('js/review/promoCode.js') }}"></script>
@endsection
