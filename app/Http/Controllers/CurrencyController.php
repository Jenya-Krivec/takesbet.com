<?php

namespace App\Http\Controllers;

use App\Helpers\Components;
use App\Models\Currency;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CurrencyController extends Controller
{
    public function create() : View
    {
        $currencies = Currency::all()->toArray();

        return view('admin.currencies', ['currencies' => $currencies]);
    }
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $components = new Components();
        $components->validate($request);

        $array = $components->getNormalizedData($request->all());

        foreach ($array as $id => $arr) {
            $key = preg_replace('/[^a-zA-Z0-9]/', '', strtoupper($arr['key']));
            $array[$id]['id'] = $id;
            $array[$id]['key'] = $key;
        }

        foreach ($array as $insert) {
            Currency::query()->updateOrCreate(
                ['id' => $insert['id']],
                ['key' => $insert['key'],
                 'name_en' => $insert['name']['en'],
                 'name_es' => $insert['name']['es'],
                 'name_fr' => $insert['name']['fr'],
                 'name_pt' => $insert['name']['pt'],
                ]
            );
        }

        return redirect()->route('admin.currencies');
    }
}
