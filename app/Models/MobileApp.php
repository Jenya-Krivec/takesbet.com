<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MobileApp extends Model
{
    protected $fillable = [
        'key',
        'bookmaker_id',
        'component',
        'value_en',
        'value_es',
        'value_fr',
        'value_pt',
        'order',
    ];
}
