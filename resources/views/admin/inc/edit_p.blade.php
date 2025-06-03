<div class="text-justify my-4">
    @foreach($values as $value)
        <textarea name="{{$id}}" class="text-base text-gray-700 text-justify indent-10 mb-4 w-full border-b-2 border-gray-200">{{$value}}</textarea>
    @endforeach
</div>
