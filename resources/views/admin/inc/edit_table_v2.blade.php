<div class="relative">
    <div class="flex items-center text-white bg-blue-700 rounded-full hover:bg-blue-600 cursor-pointer transition-all duration-500 absolute -bottom-3 -left-8 hidden add-after" data-id="{{$id}}" title="Add component after Сomparison">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
            <path d="M11 5a1 1 0 1 1 2 0v6h6a1 1 0 1 1 0 2h-6v6a1 1 0 1 1-2 0v-6H5a1 1 0 1 1 0-2h6V5z"/>
            <path d="M12 18l-4-4h8l-4 4z"/>
        </svg>
    </div>
    @foreach($values as $lang => $value)
    <div data-name="{{$id.'-'.$lang}}" class="flex flex-col justify-center items-center border-gray-200 border-2 rounded-xl shadow-gray-400 shadow-lg @if($lang !== 'en') hidden @endif">
        <div class="flex justify-end items-center bg-blue-700 w-full rounded-tr-xl rounded-tl-xl">
            <span class="text-white font-bold text-sm sm:text-lg px-1 py-2 sm:p-2 w-full">@lang('review.Event'):</span>
            <span class="text-white font-bold text-sm sm:text-lg px-1 py-2 sm:p-2 w-24 sm:w-28 flex-shrink-0" id="rate">{{$bookmaker['name']}}</span>
            <select name="{{$id.'-table_v2-'.$lang.'-0-2'}}" class="text-lg font-bold text-white w-28 select-bookmaker-2" data-id="{{$id}}" title="Select Bookmaker">
                @foreach($bookmaker['bookmakers'] as $otherBookmaker)
                    <option class="text-black" value="{{$otherBookmaker['name']}}" @if($otherBookmaker['name'] === json_decode($value, true)[0][2]) selected @endif>{{$otherBookmaker['name']}}</option>
                @endforeach
            </select>
            <select name="{{$id.'-table_v2-'.$lang.'-0-3'}}" class="text-lg font-bold text-white w-28 select-bookmaker-3" data-id="{{$id}}" title="Select Bookmaker">
                @foreach($bookmaker['bookmakers'] as $otherBookmaker)
                    <option class="text-black" value="{{$otherBookmaker['name']}}" @if($otherBookmaker['name'] === json_decode($value, true)[0][3]) selected @endif>{{$otherBookmaker['name']}}</option>
                @endforeach
            </select>
        </div>
        @for($index = 1; $index < count(json_decode($value, true)); $index++)
            <?php $isEven = ($index % 2 === 0); ?>
            <div class="flex justify-end items-center w-full {{ $isEven ? '' : 'bg-gray-100' }}">
                @foreach(json_decode($value, true)[$index] as $i => $text)
                    <input name="{{$id.'-table_v2-'.$lang.'-'.$index.'-'.$i}}" class="text-xs sm:text-base px-1 py-2 sm:p-2 {{$i === 1 ? 'w-24' : 'w-16'}} @if($loop->first) border-gray-200 border-r-2 w-full @else sm:w-28 flex-shrink-0 @endif" type="text" value="{{$text}}"/>
                @endforeach
            </div>
        @endfor
        <div class="flex justify-end items-center w-full rounded-br-xl rounded-bl-xl {{ $isEven ? 'bg-gray-100' : '' }}">
            <span class="sm:border-gray-200 sm:border-r-2 w-full h-10"></span>
            <span class="w-24 sm:w-28 flex-shrink-0 h-10"></span>
            <span class="px-1 py-2 sm:p-2 w-28 flex-shrink-0 text-center">
                <a href="" class="text-blue-700 text-xs link-for-review-2">{{trans('review.Review', ['bookmaker' => json_decode($value, true)[0][2]])}}</a>
            </span>
            <span class="px-1 py-2 sm:p-2 w-28 flex-shrink-0 text-center">
                <a href="" class="text-blue-700 text-xs link-for-review-3">{{trans('review.Review', ['bookmaker' => json_decode($value, true)[0][3]])}}</a>
            </span>
        </div>
        <div class="flex items-center justify-center self-center text-white bg-blue-700 rounded-full hover:bg-blue-600 h-6 w-6 transition-all duration-500 my-1 cursor-pointer add-row-comparison" data-id="{{$id}}" title="Add Row">+</div>
    </div>
    @endforeach
    <select class="absolute top-1 -right-11 border-2 border-blue-700 text-xs rounded language" data-id="{{$id}}" title="Change language for Сomparison">
        <option value="en" selected>En</option>
        <option value="es">Es</option>
        <option value="fr">Fr</option>
        <option value="pt">Pt</option>
    </select>
    <div class="absolute bottom-0 -right-7 text-red-500 bg-red-200 w-5 h-5 rounded text-xs leading-5 cursor-pointer text-center delete" title="Delete Сomparison">X</div>
</div>
