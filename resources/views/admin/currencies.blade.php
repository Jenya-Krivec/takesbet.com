@extends('admin.app')

@section('title', Auth::user()->name.' '.Auth::user()->surname)

@section('information')
    <p>To add a new currency, click the + button at the bottom of the list.</p>
    <p>Enter the currency abbreviation and name in English, Spanish, French, and Portuguese.</p>
    <p>Click the ✓ button on the right to save it.</p>
    <p>You can also edit the abbreviation and name of existing currencies.</p>
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
        <form action="{{ route('admin.storeCurrencies') }}" method="POST" enctype="multipart/form-data" class="flex justify-center items-center flex-col form">
            @csrf
            @foreach($currencies as $currency)
                <div data-id="{{$currency['id']}}" class="w-3/4 flex justify-between border-gray-200 border-2 rounded-xl p-1 m-1">
                    <input type="text" name="{{$currency['id']}}-key" value="{{$currency['key']}}" class="text-gray-500 w-24" placeholder="Abbreviation">
                    <input type="text" name="{{$currency['id']}}-name-en" value="{{$currency['name_en']}}" class="text-gray-500 w-48" placeholder="Currency name in English">
                    <input type="text" name="{{$currency['id']}}-name-es" value="{{$currency['name_es']}}" class="text-gray-500 w-48" placeholder="Currency name in Spanish">
                    <input type="text" name="{{$currency['id']}}-name-fr" value="{{$currency['name_fr']}}" class="text-gray-500 w-48" placeholder="Currency name in French">
                    <input type="text" name="{{$currency['id']}}-name-pt" value="{{$currency['name_pt']}}" class="text-gray-500 w-48" placeholder="Currency name in Portuguese">
                </div>
            @endforeach
            <input id="save-btn" class="flex justify-center items-center bg-blue-700 rounded-full hover:bg-blue-600 cursor-pointer transition-all duration-500 text-white h-10 w-10 text-xl fixed bottom-1/2 right-1" title="Save all" type="submit" value="&#x2713;">
            <span class="flex items-center justify-center self-center text-white bg-blue-700 rounded-full hover:bg-blue-600 h-6 w-6 transition-all duration-500 mb-2 mx-auto cursor-pointer add-currency" data-id="{{$currency['id']}}" title="Add Currency">+</span>
        </form>
    </main>
    <script defer type="text/javascript" src="{{ asset('js/admin/currency/currency.js').'?v='.filemtime('js/admin/currency/currency.js') }}"></script>
@endsection
