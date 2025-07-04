<div class="relative border-b-2 border-gray-200">
    <div class="flex items-center text-white bg-blue-700 rounded-full hover:bg-blue-600 cursor-pointer transition-all duration-500 absolute -bottom-3 -left-8 hidden add-after" data-id="{{$id}}" title="Add component after Payments">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
            <path d="M11 5a1 1 0 1 1 2 0v6h6a1 1 0 1 1 0 2h-6v6a1 1 0 1 1-2 0v-6H5a1 1 0 1 1 0-2h6V5z"/>
            <path d="M12 18l-4-4h8l-4 4z"/>
        </svg>
    </div>
    <div data-name="{{$id.'-en'}}" class="list-disc pl-5 my-4">
        <input hidden="hidden" name="{{$id.'-list-en'}}" value="1">
        <ol class="list-disc pl-5 my-4">
            <?php $count = count($bookmaker['payments']) >= 16 ? 16 : count($bookmaker['payments']); ?>
            @for($i = 0; $i < $count; $i++)
                <li class="text-base text-gray-700">{{$bookmaker['payments'][$i]['name']}}</li>
            @endfor
        </ol>
    </div>
    <div class="absolute bottom-0 -right-7 text-red-500 bg-red-200 w-5 h-5 rounded text-xs leading-5 cursor-pointer text-center delete" title="Delete Payments">X</div>
</div>

