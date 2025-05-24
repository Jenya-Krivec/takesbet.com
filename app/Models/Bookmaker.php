<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Bookmaker extends Model
{
    public function payments(): BelongsToMany
    {
        return $this->belongsToMany(Payment::class);
    }
    public function currencies(): BelongsToMany
    {
        return $this->belongsToMany(Currency::class);
    }
    public function sports(): BelongsToMany
    {
        return $this->belongsToMany(Sport::class);
    }
    public function restrictions(): BelongsToMany
    {
        return $this->belongsToMany(Restriction::class);
    }
    public function supports(): BelongsToMany
    {
        return $this->belongsToMany(Support::class);
    }
}
