<div class="text-justify my-4">
    @if($bookmaker['phone'])
        <a href="tel:{{$bookmaker['phone']}}" class="text-base text-gray-700 text-justify indent-10 block">@lang('review.Telephone') - {{$bookmaker['phone']}}</a>
   @endif
    @if($bookmaker['email'])
        <a href="mailto:{{$bookmaker['email']}}" class="text-base text-gray-700 text-justify indent-10 block">E-mail - {{$bookmaker['email']}}</a>
   @endif
   @foreach($values as $value)
       <p class="text-base text-gray-700 text-justify indent-10">{{$value}}</p>
   @endforeach
</div>
