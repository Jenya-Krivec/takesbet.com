<picture>
    <?php $mobileImg = explode('.', $values[0])[0].'-400.'.explode('.', $values[0])[1]; ?>
    <source srcset="{{ asset('img/'.(Route::currentRouteName()).'/'.$key.'/'.$mobileImg).'?v='.filemtime('img/'.(Route::currentRouteName()).'/'.$key.'/'.$mobileImg)}}" media="(max-width: 767px)" />
    <img class="w-full my-4" src="{{ asset('img/'.(Route::currentRouteName()).'/'.$key.'/'.$values[0]).'?v='.filemtime('img/'.(Route::currentRouteName()).'/'.$key.'/'.$values[0])}}" alt="{{$bookmaker['name']}}" width="{{getimagesize('img/'.(Route::currentRouteName()).'/'.$key.'/'.$values[0])[0]}}" height="{{getimagesize('img/'.(Route::currentRouteName()).'/'.$key.'/'.$values[0])[1]}}">
</picture>
