<div class="flex flex-col justify-center items-center border-gray-200 border-2 rounded-xl shadow-gray-400 shadow-lg">
    <div class="flex justify-end items-center bg-blue-700 w-full rounded-tr-xl rounded-tl-xl">
        <span class="text-white font-bold text-sm sm:text-lg px-1 py-2 sm:p-2 w-full">@lang('review.Event'):</span>
        <span class="text-white font-bold text-sm sm:text-lg px-1 py-2 sm:p-2 w-24 sm:w-28 flex-shrink-0" id="rate">{{$bookmaker['name']}}</span>
        <span class="text-white font-bold text-sm sm:text-lg px-0 py-2 sm:p-2 w-16 sm:w-28 flex-shrink-0">{{$values[0][2]}}</span>
        <span class="text-white font-bold text-sm sm:text-lg px-0 py-2 sm:p-2 w-16 sm:w-28 flex-shrink-0">{{$values[0][3]}}</span>
    </div>
    @for($index = 1; $index < count($values); $index++)
        <?php $isEven = ($index % 2 === 0); ?>
        <div class="flex justify-end items-center w-full {{ $isEven ? '' : 'bg-gray-100' }}">
            @foreach($values[$index] as $key => $value)
                @if($loop->first)
                    <span class="text-xs sm:text-base px-1 py-2 sm:p-2 border-gray-200 border-r-2 w-full">{{$value}}</span>
                @else
                    <span class="text-xs sm:text-base px-1 py-2 sm:p-2 {{$key === 1 ? 'w-24' : 'w-16'}} sm:w-28 flex-shrink-0">{{$value}}</span>
                @endif
            @endforeach
        </div>
    @endfor
    <div class="flex justify-end items-center w-full rounded-br-xl rounded-bl-xl {{ $isEven ? 'bg-gray-100' : '' }}">
        <span class="sm:border-gray-200 sm:border-r-2 w-full h-10"></span>
        <span class="w-24 sm:w-28 flex-shrink-0 h-10"></span>
        <span class="px-1 py-2 sm:p-2 w-28 flex-shrink-0 text-center">
            <a href="{{route('review', $values[0][0])}}" class="text-blue-700 text-xs lea">{{trans('review.Review', ['bookmaker' => $values[0][2]])}}</a>
        </span>
        <span class="px-1 py-2 sm:p-2 w-28 flex-shrink-0 text-center">
            <a href="{{route('review', $values[0][1])}}" class="text-blue-700 text-xs">{{trans('review.Review', ['bookmaker' => $values[0][3]])}}</a>
        </span>
    </div>
</div>
