<div class="text-justify my-4">
    @foreach($values as $value)
        <p class="text-base text-gray-700 text-justify indent-10 mb-4">{{str_replace(':promocode', $bookmaker['promo_code'], $value)}}</p>
    @endforeach
</div>
