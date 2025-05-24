<table class="w-full border-collapse border-2 border-gray-200 rounded-xl shadow-gray-400 shadow-lg">
    <tbody>
        @foreach($bookmaker['sports'] as $sport)
            @if($loop->index % 4 === 0)
                <tr class="{{ $loop->index % 8 === 0 ? '' : 'bg-gray-100' }}">
            @endif
                <td class="text-xs sm:text-sm px-1 py-2 sm:p-2 w-1/4 border-2 border-gray-200">{{$sport['name_'.app()->getLocale()]}}</td>
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

