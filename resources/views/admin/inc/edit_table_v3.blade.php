<div class="relative">
    <div class="flex items-center text-white bg-blue-700 rounded-full hover:bg-blue-600 cursor-pointer transition-all duration-500 absolute -bottom-3 -left-8 hidden add-after" data-id="{{$id}}" title="Add component after Sports">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
            <path d="M11 5a1 1 0 1 1 2 0v6h6a1 1 0 1 1 0 2h-6v6a1 1 0 1 1-2 0v-6H5a1 1 0 1 1 0-2h6V5z"/>
            <path d="M12 18l-4-4h8l-4 4z"/>
        </svg>
    </div>
    @foreach($values as $lang => $value)
        <table data-name="{{$id.'-'.$lang}}" class="w-full border-collapse border-2 border-gray-200 rounded-xl shadow-gray-400 shadow-lg @if($lang !== 'en') hidden @endif">
            <tbody>
            <input hidden="hidden" name="{{$id.'-table_v3-'.$lang}}" value="1">
            @foreach($bookmaker['sports'] as $sport)
                @if($loop->index % 4 === 0)
                    <tr class="{{ $loop->index % 8 === 0 ? '' : 'bg-gray-100' }}">
                @endif
                        <td class="text-xs sm:text-sm px-1 py-2 sm:p-2 w-1/4 border-2 border-gray-200">{{$sport['name_'.$lang]}}</td>
                        @if($loop->last && $loop->count % 4 !== 0)
                            @for($i = 0; $i < 4 - ($loop->index + 1) % 4; $i++)
                                <td class="text-xs sm:text-sm px-1 py-2 sm:p-2 w-1/4 border-2 border-gray-200">&nbsp;</td>
                            @endfor
                        @endif
                @if(($loop->index + 1) % 4 === 0)
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    @endforeach
    <select class="absolute top-1 -right-11 border-2 border-blue-700 text-xs rounded language" data-id="{{$id}}" title="Change language for Sports">
        <option value="en" selected>En</option>
        <option value="es">Es</option>
        <option value="fr">Fr</option>
        <option value="pt">Pt</option>
    </select>
    <div class="absolute bottom-0 -right-7 text-red-500 bg-red-200 w-5 h-5 rounded text-xs leading-5 cursor-pointer text-center delete" title="Delete Sports">X</div>
</div>
