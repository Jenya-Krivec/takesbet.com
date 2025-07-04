@extends('admin.app')

@section('title', Auth::user()->name.' '.Auth::user()->surname)

@section('information')
    <p>To add a new sport, click the + button at the bottom of the list.</p>
    <p>Select an image by clicking Choose image.</p>
    <p>Enter the name of the sport in English, Spanish, French, and Portuguese.</p>
    <p>Click the ✓ button on the right to save it.</p>
    <p>You can also edit the image and name of existing sports.</p>
    <br>
    <p>Note: Only .png images are allowed. The recommended image size is 66x66px.</p>
@endsection

@section('content')
    <main class="pt-20">
        <div>
            @if($errors->any())
                <ul class="list-disc pl-5 my-4">
                    @foreach($errors->all() as $error)
                        <li class="text-base text-red-700">{{$error}}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <form action="{{ route('admin.storeSports') }}" method="POST" enctype="multipart/form-data" class="flex justify-center items-center flex-col form">
            @csrf
            @foreach($sports as $sport)
                <div data-id="{{$sport['id']}}" class="w-3/4 flex justify-between border-gray-200 border-2 rounded-xl p-1 m-1">
                    <input name="{{$sport['id']}}-imgsport" type="file" class="hidden sport-img" value="" accept="image/*">
                    <img data-id="{{$sport['id']}}" src="{{asset('img/sport_icon/'.$sport['icon'].'.png')}}" alt="{{$sport['name_en']}} logo" title="Change Image" width="16" height="16" class="mr-1 flex-shrink-0 w-32 h-6 cursor-pointer object-contain">
                    <input type="text" name="{{$sport['id']}}-name-en" value="{{$sport['name_en']}}" class="text-gray-500 w-48" placeholder="Sport name in English">
                    <input type="text" name="{{$sport['id']}}-name-es" value="{{$sport['name_es']}}" class="text-gray-500 w-48" placeholder="Sport name in Spanish">
                    <input type="text" name="{{$sport['id']}}-name-fr" value="{{$sport['name_fr']}}" class="text-gray-500 w-48" placeholder="Sport name in French">
                    <input type="text" name="{{$sport['id']}}-name-pt" value="{{$sport['name_pt']}}" class="text-gray-500 w-48" placeholder="Sport name in Portuguese">
                </div>
            @endforeach
            <input id="save-btn" class="flex justify-center items-center bg-blue-700 rounded-full hover:bg-blue-600 cursor-pointer transition-all duration-500 text-white h-10 w-10 text-xl fixed bottom-1/2 right-1" title="Save all" type="submit" value="&#x2713;">
            <span class="flex items-center justify-center self-center text-white bg-blue-700 rounded-full hover:bg-blue-600 h-6 w-6 transition-all duration-500 mb-2 mx-auto cursor-pointer add-sport" data-id="{{$sport['id']}}" title="Add Sport">+</span>
        </form>
    </main>
    <script defer type="text/javascript" src="{{ asset('js/admin/sport/sport.js').'?v='.filemtime('js/admin/sport/sport.js') }}"></script>
@endsection
