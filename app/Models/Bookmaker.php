<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Bookmaker extends Model
{
    protected $fillable = [
        'key',
        'name',
        'logo',
        'logo_color',
        'promo_code',
        'bonus_label_1_en',
        'bonus_label_2_en',
        'bonus_label_1_es',
        'bonus_label_2_es',
        'bonus_label_1_fr',
        'bonus_label_2_fr',
        'bonus_label_1_pt',
        'bonus_label_2_pt',
        'bonus_available',
        'licensed',
        'url',
        'active',
        'warning_en',
        'warning_es',
        'warning_fr',
        'warning_pt',
        'phone',
        'email',
        'streaming',
        'order',
    ];
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
