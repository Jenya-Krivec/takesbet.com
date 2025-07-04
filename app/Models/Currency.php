<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $fillable = [
        'key',
        'name_en',
        'name_es',
        'name_fr',
        'name_pt',
    ];
    public function bookmakers()
    {
        return $this->belongsToMany(Bookmaker::class);
    }
}
