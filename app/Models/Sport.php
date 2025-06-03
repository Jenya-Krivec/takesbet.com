<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    public function bookmakers()
    {
        return $this->belongsToMany(Bookmaker::class);
    }
}
