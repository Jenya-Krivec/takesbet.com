<?php

namespace App\Http\Controllers;

use App\Models\Bookmaker;
use App\Models\Payment;
use App\Models\Currency;
use App\Models\Sport;
use App\Models\Support;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookmakerController extends Controller
{
    /**
     * Returns the list of bookmakers in the admin panel and site.
     *
     * @return View The view for displaying the list of bookmakers.
     */
    public function create() : View
    {
        $bookmakers = Bookmaker::selectRaw('bookmakers.*, IF(COUNT(ratings.id) = 0, 0, ROUND(SUM(ratings.rating) / COUNT(ratings.id), 1)) as rating, COUNT(ratings.id) as rating_count')
            ->leftJoin('ratings', 'bookmakers.id', '=', 'ratings.bookmaker_id')
            ->groupBy('bookmakers.id')
            ->orderBy('bookmakers.active', 'desc')
            ->orderBy('bookmakers.order', 'asc')
            ->get();
        return view('admin.bookmakers', ['bookmakers' => $bookmakers]);
    }
    /**
     * Edit the details of a specific bookmaker.
     *
     * This method retrieves all necessary data for editing a bookmaker, including
    * payments, currencies, sports, and supports. It fetches the bookmaker by its
    * unique key and populates its associated data. If the bookmaker does not
    * exist, it initializes a new bookmaker with default values. The method
    * returns a view with the bookmaker data and related entities for further
    * modifications.
    *
    * @param string $key The unique key identifier for the bookmaker.
    * @return \Illuminate\View\View The view for editing the bookmaker.
    */
    public function edit(string $key) : View
    {
        $payments = Payment::all();
        $currencies = Currency::all();
        $sports = Sport::all();
        $supports = Support::all();
        $bookmaker = Bookmaker::where('key', '=', $key)->first();
        if ($bookmaker) {
            $bookmaker['payments'] = Bookmaker::find($bookmaker['id'])->payments()->get()->toArray();
            $bookmaker['currencies'] = Bookmaker::find($bookmaker['id'])->currencies()->get()->toArray();
            $bookmaker['sports'] = Bookmaker::find($bookmaker['id'])->sports()->get()->toArray();
            $bookmaker['supports'] = Bookmaker::find($bookmaker['id'])->supports()->get()->toArray();
        }else {
            $bookmaker = [
                'key' => ' ',
                'name' => '',
                'logo' => '',
                'logo_color' => '',
                'url' => '',
                'active' => 0,
                'order' => 0,
                'payments' => [],
                'currencies' => [],
                'sports' => [],
                'supports' => [],
                'email' => ' ',
                'streaming' => 0,
                'warning_en' => '',
                'warning_es' => '',
                'warning_fr' => '',
                'warning_pt' => '',
                'promo_code' => '',
                'bonus_label_1_en' => '',
                'bonus_label_2_en' => '',
                'bonus_label_1_es' => '',
                'bonus_label_2_es' => '',
                'bonus_label_1_fr' => '',
                'bonus_label_2_fr' => '',
                'bonus_label_1_pt' => '',
                'bonus_label_2_pt' => '',
                'bonus_available' => 0,
                'licensed' => '',
                'phone' => '',
                ];
        }
        return view('admin.bookmaker', ['bookmaker' => $bookmaker, 'payments' => $payments, 'currencies' => $currencies, 'sports' => $sports, 'supports' => $supports]);
    }
    /**
     * Store a newly created or updated bookmaker in storage.
     *
     * This method validates the incoming request data for creating or updating
     * a bookmaker. It checks for the presence of required fields, handles the
     * uploading of a logo file if provided, and syncs related entities like
     * payments, currencies, sports, and supports. After processing, it saves
     * the bookmaker data and redirects to the edit page for further modifications.
     *
     * @param \Illuminate\Http\Request $request The request instance containing
     *                                          the bookmaker data to be stored.
     * @param string $key The unique key identifier for the bookmaker.
     * @return \Illuminate\Http\RedirectResponse Redirects to the edit bookmaker
     *                                           route upon successful storage.
     */
    public function store(Request $request, string $key)
    {
        $request->validate([
            'name' => 'string|required|min:2|max:100',
            'logo_color' => 'string|required|min:2|max:10',
            'bonus_label_1_en' => 'string|required|min:2|max:100',
            'bonus_label_2_en' => 'string|required|min:2|max:100',
            'bonus_label_1_es' => 'string|required|min:2|max:100',
            'bonus_label_2_es' => 'string|required|min:2|max:100',
            'bonus_label_1_fr' => 'string|required|min:2|max:100',
            'bonus_label_2_fr' => 'string|required|min:2|max:100',
            'bonus_label_1_pt' => 'string|required|min:2|max:100',
            'bonus_label_2_pt' => 'string|required|min:2|max:100',
            'bonus_available' => 'boolean',
            'promo_code' => 'string|required|min:2|max:100',
            'url' => 'nullable|url|max:100',
            'active' => 'boolean',
            'warning_en' => 'string|required',
            'warning_es' => 'string|required',
            'warning_fr' => 'string|required',
            'warning_pt' => 'string|required',
            'payments' => 'array',
            'currencies' => 'array',
            'sports' => 'array',
            'supports' => 'array',
            'licensed' => 'string|max:50|nullable',
            'email' => 'email|max:50|nullable',
            'phone' => 'string|max:50|nullable',
            'streaming' => 'boolean',
            'tested' => 'boolean',
            'order' => 'integer',
        ]);
        $bookmaker = Bookmaker::where('key', '=', $key)->first();
        if (!$bookmaker) {
            $bookmaker = new Bookmaker();
            $key = preg_replace('/[^A-Za-z0-9]/', '', strtolower($request->get('name')));
        }
        $bookmaker->fill($request->all());
        if ($request->hasFile('logo')) {
            $request->validate(['logo' => 'mimes:svg|max:1024']);
            $image = $request->file('logo');
            $name = $key.'.svg';
            $destinationPath = public_path('/img/logo/');
            $image->move($destinationPath, $name);
            $bookmaker->logo = $key.'.svg';
        }
        $bookmaker->key = $key;
        $bookmaker->bonus_available = (int)$request->get('bonus_available');
        $bookmaker->active = (int)$request->get('active');
        $bookmaker->save();

        $bookmaker->payments()->sync($request->get('payments'));
        $bookmaker->currencies()->sync($request->get('currencies'));
        $bookmaker->sports()->sync($request->get('sports'));
        $bookmaker->supports()->sync($request->get('supports'));

        return redirect()->route('admin.editBookmaker', ['key' => $key]);
    }

}
