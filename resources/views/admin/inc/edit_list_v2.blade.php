<div class="relative border-b-2 border-gray-200">
    <div class="flex items-center text-white bg-blue-700 rounded-full hover:bg-blue-600 cursor-pointer transition-all duration-500 absolute -bottom-3 -left-8 hidden add-after" data-id="{{$id}}" title="Add component after List">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
            <path d="M11 5a1 1 0 1 1 2 0v6h6a1 1 0 1 1 0 2h-6v6a1 1 0 1 1-2 0v-6H5a1 1 0 1 1 0-2h6V5z"/>
            <path d="M12 18l-4-4h8l-4 4z"/>
        </svg>
    </div>
    @foreach($values as $lang => $value)
    <div data-name="{{$id.'-'.$lang}}" class="list-disc pl-5 my-4 @if($lang !== 'en') hidden @endif">
        <ol class="list-disc pl-5 my-4">
            @foreach(json_decode($value, true) as $i => $text)
                <li class="text-base text-gray-700">
                    <input type="text" name="{{$id.'-list_v2-'.$lang.'-'.$i}}" class="text-base text-gray-700 w-full" value="{{$text}}">
                </li>
            @endforeach
        </ol>
    </div>
    @endforeach
    <div class="flex items-center justify-center self-center text-white bg-blue-700 rounded-full hover:bg-blue-600 h-6 w-6 transition-all duration-500 mb-2 mx-auto cursor-pointer add-row-list" data-id="{{$id}}" title="Add Row">+</div>
    <select class="absolute top-1 -right-11 border-2 border-blue-700 text-xs rounded language" data-id="{{$id}}" title="Change language for Caption">
        <option value="en" selected>En</option>
        <option value="es">Es</option>
        <option value="fr">Fr</option>
        <option value="pt">Pt</option>
    </select>
    <div class="absolute bottom-0 -right-7 text-red-500 bg-red-200 w-5 h-5 rounded text-xs leading-5 cursor-pointer text-center delete" title="Delete List">X</div>
</div>
