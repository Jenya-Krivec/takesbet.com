@extends('admin.app')

@section('title', Auth::user()->name.' '.Auth::user()->surname)

@section('information')
    <p>1. Select the logo color</p>
    <p>2. Select the logo image in SVG format</p>
    <p>3. Enter the name of the bookmaker</p>
    <p>4. Enter in the “Bonus text” fields in English, Spanish, French, and Portuguese</p>
    <p>5. Enter the promo code</p>
    <p>6. Enter the URL of the bookmaker's website</p>
    <p>7. Enter the order number in the list of all active bookmakers</p>
    <p>8. Enter in the accompanying text in English, Spanish, French, and Portuguese</p>
    <p>9. Add the payment methods used by the bookmaker</p>
    <p>10. Add the currencies used by the bookmaker</p>
    <p>11. Add the sports covered by the bookmaker</p>
    <p>12. Enter the name of the license</p>
    <p>13. Select the available customer support options</p>
    <p>14. Enter the customer support phone number</p>
    <p>15. Enter the customer support email address</p>
    <p>16. Indicate whether live streaming is available on the bookmaker's website</p>
    <p>17. Click the Save button</p>
    <p>If you don’t want the bookmaker to be immediately visible on the website, uncheck the “Active” box.</p>
    <p>After saving, you will be able to edit the promo code page, mobile app page and the review page.</p>
@endsection

@section('content')
    <form class="xl:px-20 sm:py-5 px-3 py-2 m-auto pt-24 sm:pt-24" action=" {{route('admin.storeBookmaker', $bookmaker['key'])}}" method="POST" enctype="multipart/form-data">
        <div class="border-gray-400 border-2 rounded-md mt-4 flex justify-between flex-col relative shadow-gray-400 shadow-lg">
            @csrf
            <span for="order" class="absolute top-0 right-6 text-xs text-gray-500 ">Order:</span>
            <input class="absolute top-0 right-0 text-xs bg-gray-300 rounded-tr-md rounded-bl-md w-5 h-5 text-center" type="text" name="order" value="{{$bookmaker['order']}}" placeholder="1">
            <div class="flex justify-between">
                <div class="hidden md:flex">
                    <div class="w-20 cursor-pointer absolute top-1/2" style="transform: translateY(-50%);">
                        @if(!$bookmaker['logo'])
                        <label for="logo" class="w-full h-full flex justify-center items-center cursor-pointer bg-blue-700 text-white rounded-md mx-1">Add logo</label>
                        @endif
                        <input type="file" name="logo" class="hidden" id="logo" accept="image/svg+xml">
                        <img id="logo-preview" src="@if($bookmaker['logo']) {{ asset('img/logo/'.$bookmaker['logo']).'?v='.filemtime('img/logo/'.$bookmaker['logo']) }} @endif" alt="{{$bookmaker['name']}} logo" class="ml-4 z-10 @if(!$bookmaker['logo']) hidden @endif" width="100" height="100">
                    </div>
                    <div class="w-20 rounded-l-md flex justify-center items-center cursor-pointer" id="logo-container" style="background-color: {{$bookmaker['logo_color']}}">
                        @if(!$bookmaker['logo_color'])
                            <label for="logo_color" class="absolute top-10 left-1 w-20 flex justify-center items-center cursor-pointer bg-blue-700 text-white rounded-md">Add color</label>
                        @endif
                        <input type="color" id="logo_color" name="logo_color" class="hidden" value="{{$bookmaker['logo_color']}}">
                    </div>
                    <div class="triangle-right" style="border-top: 8rem solid transparent; border-left: 3rem solid; border-bottom: 8rem solid transparent; border-left-color: @if($bookmaker['logo_color']) {{$bookmaker['logo_color']}} @else white @endif "></div>
                </div>
                <div class="flex-col px-2 justify-around self-center hidden md:flex w-full mx-2">
                    <div class="hidden md:flex">
                        <span class="text-gray-500 mr-1">Name:</span>
                        <input class="text-blue-700 border-gray-200 border-b-2 w-full" type="text" name="name" value="{{$bookmaker['name']}}" placeholder="Name">
                    </div>
                    <div class="flex">
                        <span class="text-gray-500 mr-1 w-44">Bonus text 1 en:</span>
                        <input class="font-bold text-xs sm:text-base border-gray-200 border-b-2 w-full" type="text" name="bonus_label_1_en" value="{{$bookmaker['bonus_label_1_en']}}" placeholder="Bonus text in English">
                    </div>
                    <div class="flex">
                        <span class="text-gray-500 mr-1 w-44">Bonus text 2 en:</span>
                        <input class="text-sm lg:text-base border-gray-200 border-b-2 w-full" type="text" name="bonus_label_2_en" value="{{$bookmaker['bonus_label_2_en']}}" placeholder="Bonus text in English">
                    </div>
                    <div class="flex">
                        <span class="text-gray-500 mr-1 w-44">Bonus text 1 es:</span>
                        <input class="font-bold text-xs sm:text-base border-gray-200 border-b-2 w-full" type="text" name="bonus_label_1_es" value="{{$bookmaker['bonus_label_1_es']}}" placeholder="Bonus text in Spanish">
                    </div>
                    <div class="flex">
                        <span class="text-gray-500 mr-1 w-44">Bonus text 2 es:</span>
                        <input class="text-sm lg:text-base border-gray-200 border-b-2 w-full" type="text" name="bonus_label_2_es" value="{{$bookmaker['bonus_label_2_es']}}" placeholder="Bonus text in Spanish">
                    </div>
                    <div class="flex">
                        <span class="text-gray-500 mr-1 w-44">Bonus text 1 fr:</span>
                        <input class="font-bold text-xs sm:text-base border-gray-200 border-b-2 w-full" type="text" name="bonus_label_1_fr" value="{{$bookmaker['bonus_label_1_fr']}}" placeholder="Bonus text in French">
                    </div>
                    <div class="flex">
                        <span class="text-gray-500 mr-1 w-44">Bonus text 2 fr:</span>
                        <input class="text-sm lg:text-base border-gray-200 border-b-2 w-full" type="text" name="bonus_label_2_fr" value="{{$bookmaker['bonus_label_2_fr']}}" placeholder="Bonus text in French">
                    </div>
                    <div class="flex">
                        <span class="text-gray-500 mr-1 w-44">Bonus text 1 pt:</span>
                        <input class="font-bold text-xs sm:text-base border-gray-200 border-b-2 w-full" type="text" name="bonus_label_1_pt" value="{{$bookmaker['bonus_label_1_pt']}}" placeholder="Bonus text in Portuguese">
                    </div>
                    <div class="flex">
                        <span class="text-gray-500 mr-1 w-44">Bonus text 2 pt:</span>
                        <input class="text-sm lg:text-base border-gray-200 border-b-2 w-full" type="text" name="bonus_label_2_pt" value="{{$bookmaker['bonus_label_2_pt']}}" placeholder="Bonus text in Portuguese">
                    </div>
                </div>
                <div class="flex-col justify-around self-center flex w-3/8 xl:w-1/5 mx-2 flex-shrink-0">
                    <div class="flex flex-row">
                        <span class="text-gray-500 text-xs sm:text-sm mr-1 mt-1">Promo code:</span>
                        <div class="flex bg-gray-300 rounded w-min mx-1">
                            <input class="p-1 font-bold text-sm sm:text-base w-32" type="text" name="promo_code" value="{{$bookmaker['promo_code']}}" placeholder="Promo code">
                        </div>
                    </div>
                    <div class="flex flex-row">
                        <span class="text-gray-500 text-xs sm:text-sm mr-1 mt-1">Url:</span>
                        <input class="text-blue-700 border-gray-200 border-b-2 w-48" type="text" name="url" value="{{$bookmaker['url']}}" placeholder="https://example.com">
                    </div>
                    <div class="flex flex-row">
                        <span class="text-gray-500 text-xs sm:text-sm mr-1 mt-1">Active:</span>
                        <input name="active" value="1" type="checkbox" class="h-7" @if($bookmaker['active']) checked="checked" @endif>
                    </div>
                    @if($bookmaker['key']!==' ')
                        <div class="flex flex-row">
                            <a href="{{route('admin.editReview', $bookmaker['key'])}}" class="text-gray-500 text-xs sm:text-sm underline mt-1">Edit review page</a>
                        </div>
                        <div class="flex flex-row">
                            <a href="{{route('admin.editPromoCode', $bookmaker['key'])}}" class="text-gray-500 text-xs sm:text-sm underline mt-1">Edit promo code page</a>
                        </div>
                        <div class="flex flex-row">
                            <a href="{{route('admin.editMobileApp', $bookmaker['key'])}}" class="text-gray-500 text-xs sm:text-sm underline mt-1">Edit mobile app page</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="flex">
            <span class="text-gray-500 mr-1 w-42 flex-shrink-0">Accompanying text en:</span>
            <input name="warning_en" value="{{$bookmaker['warning_en']}}" type="text" class="text-xs text-gray-700 text-justify px-2 border-gray-200 border-b-2 w-full" placeholder="Accompanying text in English">
        </div>
        <div class="flex">
            <span class="text-gray-500 mr-1 w-42 flex-shrink-0">Accompanying text es:</span>
            <input name="warning_es" value="{{$bookmaker['warning_es']}}" type="text" class="text-xs text-gray-700 text-justify px-2 border-gray-200 border-b-2 w-full" placeholder="Accompanying text in Spanish">
        </div>
        <div class="flex">
            <span class="text-gray-500 mr-1 w-42 flex-shrink-0">Accompanying text fr:</span>
            <input name="warning_fr" value="{{$bookmaker['warning_fr']}}" type="text" class="text-xs text-gray-700 text-justify px-2 border-gray-200 border-b-2 w-full" placeholder="Accompanying text in French">
        </div>
        <div class="flex">
            <span class="text-gray-500 mr-1 w-42 flex-shrink-0">Accompanying text pt:</span>
            <input name="warning_pt" value="{{$bookmaker['warning_pt']}}" type="text" class="text-xs text-gray-700 text-justify px-2 border-gray-200 border-b-2 w-full" placeholder="Accompanying text in Portuguese">
        </div>
        <hr>
        <div class="flex flex-row justify-start items-center m-2">
            <span class="text-gray-500 mr-1 w-42 flex-shrink-0 w-48">Select payment methods:</span>
            <div class="box-border flex border-2 border-gray-200 rounded-md w-48 h-48 mx-0 my-auto overflow-hidden flex-shrink-0">
                <div class="flex flex-col flex-shrink-0 w-full overflow-x-hidden overflow-y-auto">
                    @foreach($payments as $payment)
                        <input id="payment{{$payment['id']}}" class="hidden" type="checkbox" name="payments[]" value="{{$payment['id']}}" @if(in_array($payment['id'], array_column($bookmaker['payments'], 'id'))) checked="checked" @endif >
                        <label for="payment{{$payment['id']}}" class="payment-label flex items-center flex-shrink-0 h-6 text-xs px-2 cursor-pointer hover:bg-gray-100 transition-all duration-200">
                            <img src="{{asset('img/payment_icon/'.$payment['icon'].'.png')}}" alt="{{$payment['name']}} logo" title="{{$payment['name']}}" width="16" height="16" class="mr-2">
                            {{$payment['name']}}
                        </label>
                    @endforeach
                </div>
            </div>
            <div class="flex w-full overflow-x-hidden overflow-y-auto flex-wrap">
                @foreach($payments as $payment)
                    <img src="{{asset('img/payment_icon/'.$payment['icon'].'.png')}}" alt="{{$payment['name']}} logo" data-payment-id="{{$payment['id']}}" class="selected-payment m-1 @if(!in_array($payment['id'], array_column($bookmaker['payments'], 'id'))) hidden @endif" title="{{$payment['name']}}" width="20" height="20">
                @endforeach
            </div>
        </div>
        <hr>
        <div class="flex flex-row justify-start items-center m-2">
            <span class="text-gray-500 mr-1 w-42 flex-shrink-0 w-48">Select currencies:</span>
            <div class="box-border flex border-2 border-gray-200 rounded-md w-48 h-48 mx-0 my-auto overflow-hidden flex-shrink-0">
                <div class="flex flex-col flex-shrink-0 w-full overflow-x-hidden overflow-y-auto">
                    @foreach($currencies as $currency)
                        <input id="currency{{$currency['id']}}" class="hidden" type="checkbox" name="currencies[]" value="{{$currency['id']}}" @if(in_array($currency['id'], array_column($bookmaker['currencies'], 'id'))) checked="checked" @endif >
                        <label for="currency{{$currency['id']}}" class="currency-label flex items-center flex-shrink-0 h-6 text-xs px-2 cursor-pointer hover:bg-gray-100 transition-all duration-200">{{$currency['key'] .' '.$currency['name_en']}}</label>
                    @endforeach
                </div>
            </div>
            <div class="flex w-full overflow-x-hidden overflow-y-auto flex-wrap">
                @foreach($currencies as $currency)
                    <p data-currency-id="{{$currency['id']}}" title="{{$currency['key']}}" class="selected-currency m-1 @if(!in_array($currency['id'], array_column($bookmaker['currencies'], 'id'))) hidden @endif">{{$currency['name_en']}},</p>
                @endforeach
            </div>
        </div>
        <hr>
        <div class="flex flex-row justify-start items-center m-2">
            <span class="text-gray-500 mr-1 w-42 flex-shrink-0 w-48">Select sports:</span>
            <div class="box-border flex border-2 border-gray-200 rounded-md w-48 h-48 mx-0 my-auto overflow-hidden flex-shrink-0">
                <div class="flex flex-col flex-shrink-0 w-full overflow-x-hidden overflow-y-auto">
                    @foreach($sports as $sport)
                        <input id="sport{{$sport['id']}}" class="hidden" type="checkbox" name="sports[]" value="{{$sport['id']}}" @if(in_array($sport['id'], array_column($bookmaker['sports'], 'id'))) checked="checked" @endif >
                        <label for="sport{{$sport['id']}}" class="sport-label flex items-center flex-shrink-0 h-6 text-xs px-2 cursor-pointer hover:bg-gray-100 transition-all duration-200">
                            <img src="{{asset('img/sport_icon/'.$sport['icon'].'.png')}}" alt="{{$sport['name_en']}} logo" title="{{$sport['name_en']}}" width="16" height="16" class="mr-2">
                            {{$sport['name_en']}}
                        </label>
                    @endforeach
                </div>
            </div>
            <div class="flex w-full overflow-x-hidden overflow-y-auto flex-wrap">
                @foreach($sports as $sport)
                    <img src="{{asset('img/sport_icon/'.$sport['icon'].'.png')}}" alt="{{$sport['name']}} logo" data-sport-id="{{$sport['id']}}" class="selected-sport m-1 @if(!in_array($sport['id'], array_column($bookmaker['sports'], 'id'))) hidden @endif" title="{{$sport['name_en']}}" width="20" height="20">
                @endforeach
            </div>
        </div>
        <hr>
        <div class="flex flex-row justify-start items-center m-2">
            <span class="text-gray-500 mr-1 w-42 flex-shrink-0 w-48">Select supports:</span>
            <div class="box-border flex border-2 border-gray-200 rounded-md w-48 mx-0 my-auto overflow-hidden flex-shrink-0">
                <div class="flex flex-col flex-shrink-0 w-full overflow-x-hidden overflow-y-auto">
                    @foreach($supports as $support)
                        <input id="support{{$support['id']}}" class="hidden" type="checkbox" name="supports[]" value="{{$support['id']}}" @if(in_array($support['id'], array_column($bookmaker['supports'], 'id'))) checked="checked" @endif >
                        <label for="support{{$support['id']}}" class="support-label flex items-center flex-shrink-0 h-6 text-xs px-2 cursor-pointer hover:bg-gray-100 transition-all duration-200">{{$support['name_en']}}</label>
                    @endforeach
                </div>
            </div>
            <div class="flex w-full overflow-x-hidden overflow-y-auto flex-wrap">
                @foreach($supports as $support)
                    <p data-support-id="{{$support['id']}}" class="selected-support m-1 @if(!in_array($support['id'], array_column($bookmaker['supports'], 'id'))) hidden @endif">{{$support['name_en']}},</p>
                @endforeach
            </div>
        </div>
        <hr>
        <div class="flex flex-row justify-start items-center m-2">
            <span class="text-gray-500 mr-1 w-42 flex-shrink-0 w-48">Name of the license:</span>
            <input type="text" name="licensed" value="{{$bookmaker['licensed']}}" class="w-full h-6 border-b-2 border-gray-200" placeholder="Name of the license">
        </div>
        <hr>
        <div class="flex flex-row justify-start items-center m-2">
            <span class="text-gray-500 mr-1 w-42 flex-shrink-0 w-48">Support phone number:</span>
            <input type="text" name="phone" value="{{$bookmaker['phone']}}" class="w-full h-6 border-b-2 border-gray-200" placeholder="+XX XXX XXX XXX">
        </div>
        <hr>
        <div class="flex flex-row justify-start items-center m-2">
            <span class="text-gray-500 mr-1 w-42 flex-shrink-0 w-48">Support phone email:</span>
            <input type="text" name="email" value="{{$bookmaker['email']}}" class="w-full h-6 border-b-2 border-gray-200" placeholder="info@example.com">
        </div>
        <hr>
        <div class="flex flex-row justify-start items-center m-2">
            <span class="text-gray-500 mr-1 w-42 flex-shrink-0 w-48">Live streaming:</span>
            <input type="checkbox" name="streaming" value="1" class="h-6" @if($bookmaker['streaming']) checked="checked" @endif>
        </div>
        <hr>
        <div class="flex flex-row justify-center items-center m-2">
            <input type="submit" name="save" value="Save" class="h-10 bg-blue-700 text-white px-4 rounded-full cursor-pointer transition-all duration-500 hover:bg-blue-600">
        </div>
    </form>

    @if($errors->any())
        <script>
            window.onload = setTimeout(function() {
                let error = '';
                @foreach($errors->all() as $error)
                    error += '{{$error}}\n';
                @endforeach
                alert(error);
            }, 1000);
        </script>
    @endif

    <script defer type="text/javascript" src="{{ asset('js/admin/bookmaker/color.js').'?v='.filemtime('js/admin/bookmaker/color.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/bookmaker/currencies.js').'?v='.filemtime('js/admin/bookmaker/currencies.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/bookmaker/logo.js').'?v='.filemtime('js/admin/bookmaker/logo.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/bookmaker/payments.js').'?v='.filemtime('js/admin/bookmaker/payments.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/bookmaker/sports.js').'?v='.filemtime('js/admin/bookmaker/sports.js') }}"></script>
    <script defer type="text/javascript" src="{{ asset('js/admin/bookmaker/supports.js').'?v='.filemtime('js/admin/bookmaker/supports.js') }}"></script>
@endsection
