<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'key',
        'name',
        'url',
        'logo',
        'logo_color',
        'icon',
    ];
    public function bookmaker()
    {
        return $this->belongsTo(Bookmaker::class);
    }
}
