<div class="relative">
    <div class="flex items-center text-white bg-blue-700 rounded-full hover:bg-blue-600 cursor-pointer transition-all duration-500 absolute -bottom-3 -left-8 hidden add-after" data-id="{{$id}}" title="Add component after Image">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
            <path d="M11 5a1 1 0 1 1 2 0v6h6a1 1 0 1 1 0 2h-6v6a1 1 0 1 1-2 0v-6H5a1 1 0 1 1 0-2h6V5z"/>
            <path d="M12 18l-4-4h8l-4 4z"/>
        </svg>
    </div>
    <input type="text" name="{{$id.'-img-en'}}" class="hidden" value="{{json_decode($values['en'], true)[0]}}">
    <img data-name="{{$id.'-en'}}" class="w-full my-4" src="{{ asset('img/'.(\App\Helpers\Components::getRoute(request())).'/'.$key.'/'.json_decode($values['en'], true)[0]).'?v='.filemtime('img/'.(\App\Helpers\Components::getRoute(request())).'/'.$key.'/'.json_decode($values['en'], true)[0])}}" alt="{{$bookmaker['name']}}">
    <div class="absolute bottom-0 -right-7 text-red-500 bg-red-200 w-5 h-5 rounded text-xs leading-5 cursor-pointer text-center delete" title="Delete Image">X</div>
</div>
