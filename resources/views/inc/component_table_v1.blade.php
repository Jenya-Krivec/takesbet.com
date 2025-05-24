<div class="flex flex-col sm:flex-row justify-center items-start">
    <div class="w-full sm:w-1/2 flex-col justify-center items-start flex mr-2">
        <div class="flex-row flex justify-start items-center py-2 w-full">
            <div class="flex-row flex justify-start items-center text-green-700 bg-green-100 w-full h-6 rounded-sm mr-2 px-2">@lang('review.Pros')</div>
        </div>
        @foreach($values[0] as $value)
            <div class="flex-row flex justify-start items-center py-2">
                <div class="flex-row flex justify-center items-center text-green-700 bg-green-100 w-6 h-6 rounded-sm mr-2 flex-shrink-0">&check;</div>
                <div class="flex-row flex justify-center items-center">{{$value}}</div>
            </div>
        @endforeach
    </div>
    <div class="w-full sm:w-1/2 flex-col justify-center items-start flex">
        <div class="flex-row flex justify-start items-center py-2 w-full">
            <div class="flex-row flex justify-start items-center text-red-700 bg-red-100 w-full h-6 rounded-sm mr-2 px-2">@lang('review.Cons')</div>
        </div>
        @foreach($values[1] as $value)
            <div class="flex-row flex justify-start items-center py-2">
                <div class="flex-row flex justify-center items-center text-red-700 bg-red-100 w-6 h-6 rounded-sm mr-2 flex-shrink-0">X</div>
                <div class="flex-row flex justify-center items-center">{{$value}}</div>
            </div>
        @endforeach
    </div>
</div>
