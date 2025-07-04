<div class="relative border-b-2 border-gray-200">
    <div class="flex items-center text-white bg-blue-700 rounded-full hover:bg-blue-600 cursor-pointer transition-all duration-500 absolute -bottom-3 -left-8 hidden add-after" data-id="{{$id}}" title="Add component after Pros & Cons">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
            <path d="M11 5a1 1 0 1 1 2 0v6h6a1 1 0 1 1 0 2h-6v6a1 1 0 1 1-2 0v-6H5a1 1 0 1 1 0-2h6V5z"/>
            <path d="M12 18l-4-4h8l-4 4z"/>
        </svg>
    </div>
    @foreach($values as $lang => $value)
    <div data-name="{{$id.'-'.$lang}}" class="flex flex-col sm:flex-row justify-center items-start @if($lang !== 'en') hidden @endif">
        <div class="w-full sm:w-1/2 flex-col justify-center items-start flex mr-2 pros">
            <div class="flex-row flex justify-start items-center py-2 w-full">
                <div class="flex-row flex justify-start items-center text-green-700 bg-green-100 w-full h-6 rounded-sm mr-2 px-2">@lang('review.Pros')</div>
            </div>
            @foreach(json_decode($value, true)[0] as $i => $pros)
                <div class="flex-row flex justify-start items-center py-2 w-full">
                    <div class="flex-row flex justify-center items-center text-green-700 bg-green-100 w-6 h-6 rounded-sm mr-2 flex-shrink-0">&check;</div>
                    <input class="text-base text-gray-700 text-justify mb-1 mr-2 w-full border-b-2 border-gray-200" type="text" name="{{$id.'-table_v1-'.$lang.'-0-'.$i}}" value="{{$pros}}">
                </div>
            @endforeach
            @if(!json_decode($value, true)[0])
                <div class="flex-row flex justify-start items-center py-2 w-full">
                    <div class="flex-row flex justify-center items-center text-green-700 bg-green-100 w-6 h-6 rounded-sm mr-2 flex-shrink-0">&check;</div>
                    <input class="text-base text-gray-700 text-justify mb-1 mr-2 w-full border-b-2 border-gray-200" type="text" name="{{$id.'-table_v1-'.$lang.'-0-0'}}" value="">
                </div>
            @endif
            <div class="flex items-center justify-center self-center text-white bg-blue-700 rounded-full hover:bg-blue-600 h-6 w-6 transition-all duration-500 mb-1 cursor-pointer add-pros" data-id="{{$id}}" title="Add Pros">+</div>
        </div>
        <div class="w-full sm:w-1/2 flex-col justify-center items-start flex cons">
            <div class="flex-row flex justify-start items-center py-2 w-full">
                <div class="flex-row flex justify-start items-center text-red-700 bg-red-100 w-full h-6 rounded-sm mr-2 px-2">@lang('review.Cons')</div>
            </div>
            @foreach(json_decode($value, true)[1] as $i => $cons)
                <div class="flex-row flex justify-start items-center py-2 w-full">
                    <div class="flex-row flex justify-center items-center text-red-700 bg-red-100 w-6 h-6 rounded-sm mr-2 flex-shrink-0">X</div>
                    <input class="text-base text-gray-700 text-justify mb-1 mr-2 w-full border-b-2 border-gray-200" type="text" name="{{$id.'-table_v1-'.$lang.'-1-'.$i}}" value="{{$cons}}">
                </div>
            @endforeach
            @if(!json_decode($value, true)[1])
                <div class="flex-row flex justify-start items-center py-2 w-full">
                    <div class="flex-row flex justify-center items-center text-green-700 bg-green-100 w-6 h-6 rounded-sm mr-2 flex-shrink-0">&check;</div>
                    <input class="text-base text-gray-700 text-justify mb-1 mr-2 w-full border-b-2 border-gray-200" type="text" name="{{$id.'-table_v1-'.$lang.'-1-0'}}" value="">
                </div>
            @endif
            <div class="flex items-center justify-center self-center text-white bg-blue-700 rounded-full hover:bg-blue-600 h-6 w-6 transition-all duration-500 mb-1 cursor-pointer add-cons" data-id="{{$id}}" title="Add Cons">+</div>
        </div>
    </div>
    @endforeach
    <select class="absolute top-1 -right-11 border-2 border-blue-700 text-xs rounded language" data-id="{{$id}}" title="Change language for Pros & Cons">
        <option value="en" selected>En</option>
        <option value="es">Es</option>
        <option value="fr">Fr</option>
        <option value="pt">Pt</option>
    </select>
    <div class="absolute bottom-0 -right-7 text-red-500 bg-red-200 w-5 h-5 rounded text-xs leading-5 cursor-pointer text-center delete" title="Delete Pros & Cons">X</div>
</div>

