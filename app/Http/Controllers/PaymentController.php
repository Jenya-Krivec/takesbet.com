<?php

namespace App\Http\Controllers;

use App\Helpers\Components;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PaymentController extends Controller
{
    public function create() : View
    {
        $payments = Payment::all()->toArray();

        return view('admin.payments', ['payments' => $payments]);
    }
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $components = new Components();
        $components->validate($request);

        $array = $components->getNormalizedData($request->all());
        $imgArray = [];
        foreach ($array as $id => $arr) {
            $payment = Payment::find($id);
            $key = $payment ? $payment->key : preg_replace('/[^a-zA-Z0-9]/', '', strtolower($arr['name']));;
            $icon = $payment ? $payment->icon : $key;
            if (isset($arr['imgpayment'])) {
                $imgArray[$id]['id'] = $id;
                $imgArray[$id]['key'] = $key;
                $imgArray[$id]['icon'] = $icon;
            }
            $array[$id]['id'] = $id;
            $array[$id]['key'] = $key;
            $array[$id]['icon'] = $icon;
        }

        if (!empty($imgArray)) {
            foreach ($imgArray as $arr){
                if (file_exists(public_path('/img/'.$components->getRoute($request).'/'.$arr['icon'].'.png'))) {
                    unlink(public_path('/img/'.$components->getRoute($request).'/'.$arr['icon'].'.png'));
                }
                $components->handleImg($arr['icon'], $arr['id'], $request);
            }
        }

        foreach ($array as $insert) {
            Payment::query()->updateOrCreate(
                ['id' => $insert['id']],
                ['key' => $insert['key'],
                 'name' => $insert['name'],
                 'url' => '',
                 'logo' => '',
                 'logo_color' => '',
                 'icon' => $insert['icon'],
                ]
            );
        }

        return redirect()->route('admin.payments');
    }
}
