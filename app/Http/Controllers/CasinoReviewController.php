<?php

namespace App\Http\Controllers;

use App\Helpers\Components;
use App\Models\Bookmaker;
use App\Models\Casino;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CasinoReviewController extends Controller
{
    public function create(string $key): View
    {
        $bookmaker = Bookmaker::selectRaw('bookmakers.*, IF(COUNT(ratings.id) = 0, 0, ROUND(SUM(ratings.rating) / COUNT(ratings.id), 1)) as rating')
            ->leftJoin('ratings', 'bookmakers.id', '=', 'ratings.bookmaker_id')
            ->where('bookmakers.key', '=', $key)
            ->groupBy('bookmakers.id')
            ->get()
            ->toArray()[0];

        $page = Casino::select('casinos.*')
            ->where('casinos.bookmaker_id', '=', $bookmaker['id'])
            ->orderBy('casinos.order', 'asc')
            ->get()
            ->toArray();
        return view('casino_review', ['bookmaker' => $bookmaker, 'page' => $page]);
    }
    public function edit(string $key): View
    {
        $bookmaker = Bookmaker::where('key', '=', $key)->first();
        $bookmaker['payments'] = Bookmaker::find($bookmaker['id'])->payments()->get()->toArray();
        $bookmaker['currencies'] = Bookmaker::find($bookmaker['id'])->currencies()->get()->toArray();
        $bookmaker['sports'] = Bookmaker::find($bookmaker['id'])->sports()->get()->toArray();
        $bookmaker['restrictions'] = Bookmaker::find($bookmaker['id'])->restrictions()->get()->toArray();
        $bookmaker['supports'] = Bookmaker::find($bookmaker['id'])->supports()->get()->toArray();
        $bookmaker['bookmakers'] = Bookmaker::all()->toArray();
        $page = Casino::select('casinos.*')
            ->where('bookmaker_id', '=', $bookmaker['id'])
            ->orderBy('order', 'asc')
            ->get()
            ->toArray();
        return view('admin.casino', ["bookmaker" => $bookmaker, "page" => $page]);
    }
    public function store(Request $request, string $key): \Illuminate\Http\RedirectResponse
    {
        $components = new Components();
        $components -> validate($request);

        $bookmakerID = Bookmaker::where('key', '=', $key)->first()->id;

        $array = $components->getNormalizedData($request->all());
        $insertArray = $components->getInsertData($array, $bookmakerID, $key, $request);
        $components->deleteImgs($insertArray, $key, $request);

        Casino::query()->where('key', '=', $key)->delete();

        foreach ($insertArray as $insert) {
            Casino::query()->updateOrCreate(
                ['key' => $insert['key'],
                    'order' => $insert['order']
                ],
                ['key' => $insert['key'],
                    'bookmaker_id' => $insert['bookmaker_id'],
                    'component' => $insert['component'],
                    'value_en' => $insert['value_en'],
                    'value_es' => $insert['value_es'],
                    'value_fr' => $insert['value_fr'],
                    'value_pt' => $insert['value_pt'],
                    'order' => $insert['order'],
                ]
            );
        }

        return redirect()->route('admin.editCasino', ['key' => $key]);
    }
}
