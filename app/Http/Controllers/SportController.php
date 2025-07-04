<?php

namespace App\Http\Controllers;

use App\Helpers\Components;
use App\Models\Sport;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SportController extends Controller
{
    public function create() : View
    {
        $sports = Sport::all()->toArray();

        return view('admin.sport', ['sports' => $sports]);
    }
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $components = new Components();
        $components->validate($request);

        $array = $components->getNormalizedData($request->all());

        $imgArray = [];
        foreach ($array as $id => $arr) {
            $sport = Sport::find($id);
            $key = $sport ? $sport->key : preg_replace('/[^a-zA-Z0-9]/', '', strtolower($arr['name']['en']));
            $icon = $sport ? $sport->icon : $key;
            if (isset($arr['imgsport'])) {
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
            Sport::query()->updateOrCreate(
                ['id' => $insert['id']],
                ['key' => $insert['key'],
                 'name_en' => $insert['name']['en'],
                 'name_es' => $insert['name']['es'],
                 'name_fr' => $insert['name']['fr'],
                 'name_pt' => $insert['name']['pt'],
                 'icon' => $insert['icon'],
                ]
            );
        }

        return redirect()->route('admin.sports');
    }
}
