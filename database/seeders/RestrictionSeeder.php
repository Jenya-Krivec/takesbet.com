<?php

namespace Database\Seeders;

use App\Models\Restriction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestrictionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Restriction::query()->updateOrCreate(
            ['key' => 'depositlimit'],
            ['key' => 'depositlimit',
             'name_en' => 'Deposit Limit',
             'name_es' => 'Límite de depósito',
             'name_fr' => 'Limite de dépôt',
             'name_pt' => 'Limite de depósito',
            ]
        );
        Restriction::query()->updateOrCreate(
            ['key' => 'shortbreak'],
            ['key' => 'shortbreak',
             'name_en' => 'Take a short break',
             'name_es' => 'Tomar un descanso corto',
             'name_fr' => 'Prendre une courte pause',
             'name_pt' => 'Fazer uma pausa curta',
            ]
        );
        Restriction::query()->updateOrCreate(
            ['key' => 'selfexclusion'],
            ['key' => 'selfexclusion',
             'name_en' => 'Self Exclusion',
             'name_es' => 'Autoexclusión',
             'name_fr' => 'Auto-exclusion',
             'name_pt' => 'Autoexclusão',
            ]
        );
    }
}
