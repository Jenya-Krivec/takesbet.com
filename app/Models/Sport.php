<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    protected $fillable = [
        'key',
        'name_en',
        'name_es',
        'name_fr',
        'name_pt',
        'icon',
    ];
    public function bookmakers()
    {
        return $this->belongsToMany(Bookmaker::class);
    }
}
