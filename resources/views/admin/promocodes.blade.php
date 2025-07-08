@extends('admin.app')

@section('title', Auth::user()->name.' '.Auth::user()->surname)

@section('information')
    <p>To add a new element to the page:</p>
    <p>1. Click the + button on the left</p>
    <p>2. Select an element from the list that appears on the left</p>
    <p>3. Choose the location where you want to add it</p>
    <p>4. Fill in all fields in English, Spanish, French, and Portuguese (on the right side of the element, there is a language switch menu)</p>
    <p>5. Click the ✓ button on the right to save all your edits</p>
    <br>
    <p>Image upload is done in two steps:</p>
    <p>1.Upload a .webp image for the desktop version of the website (recommended aspect ratio – 900x450)</p>
    <p>2. Upload a .webp image for the mobile version of the website (recommended aspect ratio – 360x360)</p>
    <p>Once uploaded successfully, the image will be displayed.</p>
    <p>Attention! Files for the desktop and mobile versions of the website must have the same file extension.</p>
    <br>
    <p>To delete an element, click the X button located on the right next to each element.</p>
    <p>In some elements, such as the Pros & Cons table, there are + buttons at the bottom that allow you to add new rows to the table.</p>
    <p>If you need to delete a row in the table, simply leave it empty for all languages.</p>
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
        <div class="w-full flex justify-center items-center bg-white text-blue-700 py-2 text-sm sm:text-base text-center">
            <a href="{{route('admin.editReview', $bookmaker['key'])}}" class="flex justify-center items-center mx-1 py-1 px-4">{{trans('promocode.Review', ['bookmaker' => ''])}}</a>
            <div class="flex-col flex justify-center items-center py-1 px-4 mt-1">
                <p>{{trans('promocode.Promo Codes & Bonus', ['bookmaker' => ''])}}</p>
                <span class="w-full h-1 bg-blue-700"></span>
            </div>
            <a href="{{route('admin.editMobileApp', $bookmaker['key'])}}" class="flex justify-center items-center mx-1 py-1 px-4">@lang('promocode.Mobile App')</a>
        </div>
        <!-- Banner -->
        <div class="w-full flex py-10 flex-col sm:flex-row relative" style="background-color: {{ $bookmaker['logo_color'] }}">
            <div class="w-full sm:w-2/3 flex justify-center items-center flex-col sm:flex-row">
                <div class="w-20 h-20 flex justify-center items-center border-2 border-white rounded-md flex-shrink-0">
                    <img src="{{asset('img/logo/'.$bookmaker['logo'].'?v='.filemtime('img/logo/'.$bookmaker['logo']))}}" alt="{{$bookmaker['name']}} logo" class="p-2" width="100" height="100">
                </div>
                <div class="text-white mx-4">
                    <h1 class="text-sm sm:text-base lg:text-2xl font-bold my-2">{{trans('promocode.Promo Codes & Bonus', ['bookmaker' => $bookmaker['name']])}}</h1>
                    <div class="rate flex justify-between items-center lg:w-40" data-rate-id="{{$bookmaker['id']}}">
                        <input name="rate" value="1" type="checkbox" aria-label="One star" disabled="disabled">
                        <input name="rate" value="2" type="checkbox" aria-label="Two stars" disabled="disabled">
                        <input name="rate" value="3" type="checkbox" aria-label="Three stars" disabled="disabled">
                        <input name="rate" value="4" type="checkbox" aria-label="Four stars" disabled="disabled">
                        <input name="rate" value="5" type="checkbox" aria-label="Five stars" disabled="disabled">
                        <div class="text-lg" data-rate-value-id="{{$bookmaker['id']}}">{{$bookmaker['rating']}}</div>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/3 flex-col justify-center items-center flex text-white px-2">
                <h2 class="font-bold text-xs sm:text-lg my-1 text-center">{{$bookmaker['bonus_label_1_'.app()->getLocale()]}}</h2>
                <div class="text-sm lg:text-lg my-1 text-center">{{$bookmaker['bonus_label_2_'.app()->getLocale()]}}</div>
                @if($bookmaker['warning_'.app()->getLocale()])
                    <div class="text-xs my-1 text-center">{{$bookmaker['name']}}: {{$bookmaker['warning_'.app()->getLocale()]}}</div>
                @endif
                <span data-url="{{$bookmaker['url']}}" class="shadow-black bg-blue-700 text-xs sm:text-lg rounded-full hover:bg-blue-600 flex justify-center items-center cursor-pointer transition-all duration-500 my-2 px-16 py-2 shadow-lg">@lang('promocode.Registration')</span>
            </div>
            <button class="flex items-center text-white bg-blue-700 rounded-full hover:bg-blue-600 cursor-pointer transition-all duration-500 absolute -bottom-3 left-48 hidden add-after" data-id="0" title="add component after">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M11 5a1 1 0 1 1 2 0v6h6a1 1 0 1 1 0 2h-6v6a1 1 0 1 1-2 0v-6H5a1 1 0 1 1 0-2h6V5z"/>
                    <path d="M12 18l-4-4h8l-4 4z"/>
                </svg>
            </button>
        </div>
        <!-- Content -->
        <form method="POST" action="{{route('admin.storePromoCode', ['key' => $bookmaker['key']])}}" enctype="multipart/form-data" class="lg:px-56 sm:py-5 px-3 py-2 m-auto form">
            @csrf
            @foreach($page as $component)
                @include('admin/inc/edit_'.$component['component'], ['id' => $component['id'], 'key' => $component['key'], 'values' => ['en' => $component['value_en'], 'es' => $component['value_es'], 'fr' => $component['value_fr'], 'pt' => $component['value_pt']]])
            @endforeach
            <input id="save-btn" class="flex justify-center items-center bg-blue-700 rounded-full hover:bg-blue-600 cursor-pointer transition-all duration-500 text-white h-10 w-10 text-xl fixed bottom-1/2 right-1" title="Save all" type="submit" value="&#x2713;">
        </form>
        <!--Promo code-->
        <div class="lg:px-56 sm:py-5 px-3 py-2 m-auto">
            <h3 class="text-lg sm:text-2xl font-bold px-0 sm:px-10 my-4">{{trans('promocode.Promo Codes', ['bookmaker' => $bookmaker['name']])}}</h3>
            <div class="w-full flex justify-between p-5 flex-col sm:flex-row border-gray-200 border-2 rounded-xl shadow-gray-400 shadow-lg">
                <div class="flex-row justify-between items-center flex px-2">
                    <div class="w-28 h-28 flex justify-center items-center rounded-md" style="background-color: {{ $bookmaker['logo_color'] }}">
                        <img src="{{asset('img/logo/'.$bookmaker['logo']).'?v='.filemtime('img/logo/'.$bookmaker['logo'])}}" alt="{{$bookmaker['name']}} logo" class="p-2" width="100" height="100">
                    </div>
                    <div class="flex-row flex sm:hidden justify-end items-center">
                        <span data-url="{{$bookmaker['url']}}" class="text-white shadow-gray-400 bg-blue-700 text-xs sm:text-base rounded-full hover:bg-blue-600 flex justify-center items-center cursor-pointer transition-all duration-500 my-2 px-8 py-2">@lang('promocode.Registration')</span>
                    </div>
                </div>
                <div class="flex-col justify-center items-start flex px-2 mt-1 sm:mt-0">
                    <div class="font-bold text-xs sm:text-base mx-1">{{$bookmaker['bonus_label_1_'.app()->getLocale()]}}</div>
                    <div class="font-bold text-xs sm:text-sm mx-1">{{trans('promocode.Promo Codes', ['bookmaker' => ' ']).' '.$bookmaker['promo_code']}}</div>
                    <div class="curl w-full h-10 flex justify-end items-center border-black border-2 border-dotted rounded-xl bg-gray-100 relative mt-2">
                        <div class="font-bold text-xs sm:text-base px-1 text-white bg-blue-700 h-10 w-full flex justify-center items-center rounded-tl-xl rounded-bl-xl cursor-pointer">@lang('promocode.Relevant Code')</div>
                        <div class="px-2">XXXXX</div>
                        <div class="w-full text-center hidden">{{$bookmaker['promo_code']}}</div>
                    </div>
                </div>
                <div class="flex-col justify-center items-end px-2 w-1/3 ml-auto hidden sm:flex">
                    <div class="flex-row flex justify-end items-center">
                        @if($bookmaker['tested'])
                            <div class="flex-row flex justify-center items-center text-white bg-blue-700 w-4 h-4 rounded-full mr-2 flex-shrink-0">&check;</div>
                            <div class="text-sm text-gray-700">@lang('promocode.Tested')</div>
                        @endif
                    </div>
                    <div class="flex-row justify-end items-center">
                        <span data-url="{{$bookmaker['url']}}" class="text-white shadow-gray-400 bg-blue-700 text-xs sm:text-base rounded-full hover:bg-blue-600 flex justify-center items-center cursor-pointer transition-all duration-500 my-2 px-8 py-2">@lang('promocode.Registration')</span>
                    </div>
                    <div class="flex-row flex justify-end items-center">
                        <div class="text-xs text-gray-700 text-justify">@lang('promocode.See full details of the') {{trans('promocode.Promo Codes', ['bookmaker' => $bookmaker['name']])}}</div>
                    </div>
                </div>
            </div>
            @if($bookmaker['warning_'.app()->getLocale()])
                <p class="text-xs text-gray-700 text-justify px-2">{{$bookmaker['name']}}: {{$bookmaker['warning_'.app()->getLocale()]}}</p>
            @endif
        </div>
        <div id="add-section-btn" class="flex justify-center items-center bg-blue-700 rounded-full hover:bg-blue-600 cursor-pointer transition-all duration-500 text-white h-10 w-10 text-xl fixed bottom-1/2 left-1" title="Add Component">+</div>
        <div id="add-section" class="fixed border-2 border-blue-700 bg-white rounded-md flex justify-center items-center -left-52 p-2 flex-col bottom-1/2 transition-all duration-500 z-20" style="transform: translateY(50%);">
            <button id="close-add-section-btn" class="text-white bg-blue-700 text-xs rounded-full hover:bg-blue-600 cursor-pointer transition-all duration-500 h-5 w-5 absolute -top-2 -right-2 pb-1" title="Close">x</button>
            <script>
                const bookmakerName = '{{$bookmaker['name']}}';
                const bookmakerPhone = '{{$bookmaker['phone']}}';
                const bookmakerEmail = '{{$bookmaker['email']}}';
                const sports = {en: [], es: [], fr: [], pt: []};
                const payments = [];
                const bookmakers = [];
                @foreach(['en', 'es', 'fr', 'pt'] as $lang)
                    @foreach($bookmaker['sports'] as $sport)
                    sports['{{$lang}}'].push('{{$sport['name_'.$lang]}}');
                @endforeach
                @endforeach
                @for($i = 0; $i < count($bookmaker['payments']); $i++)
                @if($i < 16)
                payments.push('{{$bookmaker['payments'][$i]['name']}}');
                @endif
                @endfor
                @foreach($bookmaker['bookmakers'] as $bookmaker)
                bookmakers.push('{{$bookmaker['name']}}');
                @endforeach
            </script>
            <button class="w-full text-white border-2 border-blue-700 bg-blue-700 text-xs rounded-full hover:bg-blue-600 flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="Caption">Add Caption</button>
            <button class="w-full text-white border-2 border-blue-700 bg-blue-700 text-xs rounded-full hover:bg-blue-600 flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="Subtitle">Add Subtitle</button>
            <button class="w-full text-white border-2 border-blue-700 bg-blue-700 text-xs rounded-full hover:bg-blue-600 flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="Paragraph">Add Paragraph</button>
            <button class="w-full text-white border-2 border-blue-700 bg-blue-700 text-xs rounded-full hover:bg-blue-600 flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="Picture">Add Picture</button>
            <button class="w-full text-white border-2 border-blue-700 bg-blue-700 text-xs rounded-full hover:bg-blue-600 flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="List">Add List</button>
            <button class="w-full text-white border-2 border-blue-700 bg-blue-700 text-xs rounded-full hover:bg-blue-600 flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="ProsCons">Add Pros & Cons</button>
            <button class="w-full text-white border-2 border-blue-700 bg-blue-700 text-xs rounded-full hover:bg-blue-600 flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="Sports">Add Sports</button>
            <button class="w-full text-white border-2 border-blue-700 bg-blue-700 text-xs rounded-full hover:bg-blue-600 flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="Payments">Add Payments</button>
            <button class="w-full text-white border-2 border-blue-700 bg-blue-700 text-xs rounded-full hover:bg-blue-600 flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="Support">Add Support</button>
            <button class="w-full text-white border-2 border-blue-700 bg-blue-700 text-xs rounded-full hover:bg-blue-600 flex justify-center items-center cursor-pointer transition-all duration-500 p-2 my-1" value="Comparison">Add Comparison</button>
        </div>
    </main>
    <script defer type="text/javascript" src="{{ asset('js/promocode/rate.js').'?v='.filemtime('js/promocode/rate.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/promocode/promoCode.js').'?v='.filemtime('js/promocode/promoCode.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/promocode/textarea.js').'?v='.filemtime('js/admin/promocode/textarea.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/promocode/delete.js').'?v='.filemtime('js/admin/promocode/delete.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/promocode/language.js').'?v='.filemtime('js/admin/promocode/language.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/promocode/caption.js').'?v='.filemtime('js/admin/promocode/caption.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/promocode/subtitle.js').'?v='.filemtime('js/admin/promocode/subtitle.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/promocode/paragraph.js').'?v='.filemtime('js/admin/promocode/paragraph.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/promocode/picture.js').'?v='.filemtime('js/admin/promocode/picture.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/promocode/list.js').'?v='.filemtime('js/admin/promocode/list.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/promocode/prosCons.js').'?v='.filemtime('js/admin/promocode/prosCons.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/promocode/sports.js').'?v='.filemtime('js/admin/promocode/sports.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/promocode/payments.js').'?v='.filemtime('js/admin/promocode/payments.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/promocode/support.js').'?v='.filemtime('js/admin/promocode/support.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/promocode/comparison.js').'?v='.filemtime('js/admin/promocode/comparison.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/promocode/addSection.js').'?v='.filemtime('js/admin/promocode/addSection.js') }}"></script>
@endsection
