@extends('admin.app')

@section('title', Auth::user()->name.' '.Auth::user()->surname)

@section('content')
    <main class="xl:px-20 sm:py-5 px-3 py-2 m-auto pt-24 sm:pt-24">
        <h1 class="text-center text-lg px-0 sm:text-2xl sm:px-7 sm:text-left  font-bold">Bookmakers</h1>
        <p>On this page, you can see what the main page with the list of bookmakers will look like.</p>
        <p>To edit a bookmaker, click the pencil icon in the bottom right corner.</p>
        <p>Inactive bookmakers are placed at the bottom and highlighted in red.</p>
        <p>To add a new bookmaker, click the '+' button at the bottom of the list.</p>
        @foreach($bookmakers as $bookmaker)
            @include('inc.component_bookmaker', ['bookmaker' => $bookmaker, 'iteration' => $loop->iteration, 'authorized' => Auth::check()])
        @endforeach
        <a href="{{ route('admin.editBookmaker', ' ') }}" class="flex justify-center items-center bg-blue-700 rounded-full hover:bg-blue-600 cursor-pointer transition-all duration-500 text-white h-10 w-10 text-xl mx-auto my-4">+</a>
    </main>
@endsection
