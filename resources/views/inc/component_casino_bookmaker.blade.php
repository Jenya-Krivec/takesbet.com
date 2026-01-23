<div class="border-2 border-gray-400 rounded-md mt-4 flex justify-between flex-col relative shadow-gray-400 shadow-lg">
    <div class="justify-start flex md:hidden border-b-2 border-gray-400">
        <div data-url="{{$bookmaker['url']}}" class="flex cursor-pointer">
            <div data-url="{{$bookmaker['url']}}" class="w-20 rounded-tl-md flex justify-center items-center" style="background-color: {{$bookmaker['logo_color']}}">
                <img data-url="{{$bookmaker['url']}}" src="{{ asset('img/logo/'.$bookmaker['logo']).'?v='.filemtime('img/logo/'.$bookmaker['logo']) }}" alt="{{$bookmaker['name']}} logo" class="ml-4 z-10" width="100" height="100">
            </div>
            <div data-url="{{$bookmaker['url']}}" class="triangle-right" style="border-left-color: {{$bookmaker['logo_color']}}"></div>
        </div>
        <div class="flex flex-col px-2 justify-around self-center">
            <div class="text-blue-700">
                <span data-url="{{$bookmaker['url']}}" class="flex">{{ trans('casino.Casino', ['bookmaker' => $bookmaker['name']])}} </span>
            </div>
            <div class="text-xs sm:text-base">{{$bookmaker['bonus_casino_'.app()->getLocale()]}}</div>
        </div>
    </div>
    <div class="flex justify-between">
        <div data-url="{{$bookmaker['url']}}" class="hidden md:flex cursor-pointer">
            <div data-url="{{$bookmaker['url']}}" class="w-20 rounded-l-md flex justify-center items-center" style="background-color: {{$bookmaker['logo_color']}}">
                <img data-url="{{$bookmaker['url']}}" src="{{ asset('img/logo/'.$bookmaker['logo']).'?v='.filemtime('img/logo/'.$bookmaker['logo']) }}" alt="{{$bookmaker['name']}} logo" class="ml-4 z-10" width="100" height="100">
            </div>
            <div data-url="{{$bookmaker['url']}}" class="triangle-right" style="border-left-color: {{$bookmaker['logo_color']}}"></div>
        </div>
        <div class="flex-col px-2 justify-around self-center hidden md:flex xl:w-full">
            <div class="text-blue-700 hidden md:block">
                <span data-url="{{$bookmaker['url']}}" class="flex">{{ trans('casino.Casino', ['bookmaker' => $bookmaker['name']])}}</span>
            </div>
            <div class="text-xs sm:text-base">{{$bookmaker['bonus_casino_'.app()->getLocale()]}}</div>
        </div>
        <div class="flex flex-col justify-around self-center ml-2 md:w-48">
            <div class="text-2xl sm:text-4xl text-center" data-rate-value-id="{{$bookmaker['id']}}">{{$bookmaker['rating']}}</div>
            <a href="{{route('casino.review', $bookmaker['key'])}}" class="text-gray-700 text-xs sm:text-sm underline text-center">@lang('casino.Read Review')</a>
        </div>
        <div class="flex-col justify-around self-center hidden md:flex mx-2">
            <div class="text-center flex mx-auto">
                <p class="text-xs xl:text-base">@lang('casino.Rate it')! (</p>
                <p class="rate-count text-xs xl:text-base" data-rate-count-id="{{$bookmaker['id']}}">{{$bookmaker['rating_count']}}</p>
                <p class="text-xs xl:text-base">)</p>
            </div>
            <div class="rate flex mx-auto justify-between lg:w-40" data-rate-id="{{$bookmaker['id']}}">
                <input name="rate" value="1" type="checkbox" aria-label="One star">
                <input name="rate" value="2" type="checkbox" aria-label="Two stars">
                <input name="rate" value="3" type="checkbox" aria-label="Three stars">
                <input name="rate" value="4" type="checkbox" aria-label="Four stars">
                <input name="rate" value="5" type="checkbox" aria-label="Five stars">
            </div>
        </div>
        <div class="flex-col justify-around self-center flex w-1/3 xl:w-48">
            <div class="text-xs sm:text-sm text-center">@lang('casino.Promo code'):</div>
            <div class="flex bg-gray-300 rounded w-min pr-2 mx-auto">
                <p class="p-1 font-bold text-sm sm:text-base">{{$bookmaker['promo_code']}}</p>
                <span data-url="{{$bookmaker['url']}}" class="cope-promo-code" aria-label="Get promo code"></span>
            </div>
            <a href="{{route('casino', $bookmaker['key'])}}" class="text-gray-700 text-xs sm:text-sm underline text-center">{{$bookmaker['name']}} @lang('casino.Promo code')</a>
        </div>
        <div class="flex flex-col justify-around self-center mx-2">
            <span data-url="{{$bookmaker['url']}}" class="h-10 w-28 bg-blue-700 text-xs sm:text-sm text-white rounded-full hover:bg-blue-600 flex justify-center items-center cursor-pointer transition-all duration-500  my-4 sm:my-2">@lang('index.Claim') &#8594;</span>
            <span data-url="{{$bookmaker['url']}}" class="text-gray-700 text-xs sm:text-sm underline text-center mb-4 sm:mb-auto cursor-pointer">@lang('casino.Visit') {{$bookmaker['name']}}</span>
        </div>
    </div>
</div>
@if($bookmaker['warning_'.app()->getLocale()])
    <p class="text-xs text-gray-700 text-justify px-2">{{$bookmaker['name']}}: {{$bookmaker['warning_'.app()->getLocale()]}}</p>
@endif
