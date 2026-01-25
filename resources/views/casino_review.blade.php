@extends('app')

@section('title', trans('casino_review.title', ['bookmaker' => $bookmaker['name']]).' '.date('Y', strtotime('+10 days')))

@section('description',  trans('casino_review.description', ['bookmaker' => $bookmaker['name']]))

@section('keywords', trans('casino_review.keywords', ['bookmaker' => $bookmaker['name']]))

@section('content')
    <main class="pt-20">
        <!-- Banner -->
        <div class="w-full flex py-10 flex-col sm:flex-row" style="background-color: {{ $bookmaker['logo_color'] }}">
            <div class="w-full sm:w-2/3 flex justify-center items-center flex-col sm:flex-row">
                <div class="w-20 h-20 flex justify-center items-center border-2 border-white rounded-md">
                    <img src="{{asset('img/logo/'.$bookmaker['logo'].'?v='.filemtime('img/logo/'.$bookmaker['logo']))}}" alt="{{$bookmaker['name']}} logo" class="p-2" width="100" height="100">
                </div>
                <div class="text-white mx-4">
                    <h1 class="text-sm sm:text-4xl font-bold my-2">{{trans('casino_review.Review', ['bookmaker' => $bookmaker['name']])}}</h1>
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
                @if($bookmaker['bonus_casino_'.app()->getLocale()])
                    <div class="text-xs my-1 text-center">{{$bookmaker['bonus_casino_'.app()->getLocale()]}}</div>
                @endif
                <span data-url="{{$bookmaker['url']}}" class="shadow-black bg-blue-700 text-xs sm:text-lg rounded-full hover:bg-blue-600 flex justify-center items-center cursor-pointer transition-all duration-500 my-2 px-16 py-2 shadow-lg">@lang('casino_review.Claim')</span>
            </div>
        </div>
        <!--Reviews-->
        <div class="lg:px-56 sm:py-5 px-3 py-2 m-auto">
            @foreach($page as $component)
                @include('inc/component_'.$component['component'], ['key' => $component['key'], 'values' => json_decode($component['value_'.app()->getLocale()], true)])
            @endforeach
        </div>
        <!--Promo code-->
        <div class="lg:px-56 sm:py-5 px-3 py-2 m-auto">
            <div class="w-full flex justify-between p-5 flex-col sm:flex-row border-gray-200 border-2 rounded-xl shadow-gray-400 shadow-lg">
                <div class="flex-row justify-between items-center flex px-2">
                    <div class="w-28 h-28 flex justify-center items-center rounded-md" style="background-color: {{ $bookmaker['logo_color'] }}">
                        <img src="{{asset('img/logo/'.$bookmaker['logo']).'?v='.filemtime('img/logo/'.$bookmaker['logo'])}}" alt="{{$bookmaker['name']}} logo" class="p-2" width="100" height="100">
                    </div>
                    <div class="flex-row flex sm:hidden justify-end items-center">
                        <span data-url="{{$bookmaker['url']}}" class="text-white shadow-gray-400 bg-blue-700 text-xs sm:text-base rounded-full hover:bg-blue-600 flex justify-center items-center cursor-pointer transition-all duration-500 my-2 px-8 py-2">@lang('review.Claim')</span>
                    </div>
                </div>
                <div class="flex-col justify-center items-start flex px-2 mt-1 sm:mt-0">
                    @if($bookmaker['bonus_casino_'.app()->getLocale()])
                        <div class="text-xs my-1">{{$bookmaker['bonus_casino_'.app()->getLocale()]}}</div>
                    @endif
                </div>
                <div class="flex-col justify-center items-end px-2 w-1/3 ml-auto hidden sm:flex">
                    <div class="flex-row flex justify-end items-center">
                        @if($bookmaker['tested'])
                            <div class="flex-row flex justify-center items-center text-white bg-blue-700 w-4 h-4 rounded-full mr-2 flex-shrink-0">&check;</div>
                            <div class="text-sm text-gray-700">@lang('casino_review.Tested')</div>
                        @endif
                    </div>
                    <div class="flex-row justify-end items-center">
                        <span data-url="{{$bookmaker['url']}}" class="text-white shadow-gray-400 bg-blue-700 text-xs sm:text-base rounded-full hover:bg-blue-600 flex justify-center items-center cursor-pointer transition-all duration-500 my-2 px-8 py-2">@lang('review.Claim')</span>
                    </div>
                    <div class="flex-row flex justify-end items-center">
                        <div class="text-xs text-gray-700 text-justify">@lang('casino_review.See full details of the') {{$bookmaker['name']}}</div>
                    </div>
                </div>
            </div>
            @if($bookmaker['warning_'.app()->getLocale()])
                <p class="text-xs text-gray-700 text-justify px-2">{{$bookmaker['name']}}: {{$bookmaker['warning_'.app()->getLocale()]}}</p>
            @endif
        </div>
    </main>
    <script defer type="text/javascript" src="{{ asset('js/review/rate.js').'?v='.filemtime('js/review/rate.js') }}"></script>
@endsection

