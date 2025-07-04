@extends('admin.app')

@section('title', Auth::user()->name.' '.Auth::user()->surname)

@section('information')
    <p>To add a new payment method, click the + button at the bottom of the list.</p>
    <p>Select an image by clicking Choose image.</p>
    <p>Enter the name of the payment method.</p>
    <p>Click the ✓ button on the right to save it.</p>
    <p>You can also edit the image and name of existing payment methods.</p>
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
        <form action="{{ route('admin.storePayments') }}" method="POST" enctype="multipart/form-data" class="flex justify-center items-center flex-col form">
            @csrf
            @foreach($payments as $payment)
                <div data-id="{{$payment['id']}}" class="w-96 flex justify-between border-gray-200 border-2 rounded-xl p-1 m-1">
                    <input name="{{$payment['id']}}-imgpayment" type="file" class="hidden payment-img" value="" accept="image/*">
                    <img data-id="{{$payment['id']}}" src="{{asset('img/payment_icon/'.$payment['icon'].'.png')}}" alt="{{$payment['name']}} logo" title="Change Image" width="16" height="16" class="mr-1 flex-shrink-0 w-32 h-6 cursor-pointer object-contain">
                    <input type="text" name="{{$payment['id']}}-name" value="{{$payment['name']}}" class="text-gray-500 w-48" placeholder="Payment name">
                </div>
            @endforeach
            <input id="save-btn" class="flex justify-center items-center bg-blue-700 rounded-full hover:bg-blue-600 cursor-pointer transition-all duration-500 text-white h-10 w-10 text-xl fixed bottom-1/2 right-1" title="Save all" type="submit" value="&#x2713;">
            <span class="flex items-center justify-center self-center text-white bg-blue-700 rounded-full hover:bg-blue-600 h-6 w-6 transition-all duration-500 mb-2 mx-auto cursor-pointer add-payment" data-id="{{$payment['id']}}" title="Add Payment">+</span>
        </form>
    </main>
    <script defer type="text/javascript" src="{{ asset('js/admin/payment/payment.js').'?v='.filemtime('js/admin/payment/payment.js') }}"></script>
@endsection
