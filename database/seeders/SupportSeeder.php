<?php

namespace Database\Seeders;

use App\Models\Support;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Support::query()->updateOrCreate(
            ['key' => 'livechat'],
            ['key' => 'livechat',
             'name_en' => 'Live Chat',
             'name_es' => 'Chat en vivo',
             'name_fr' => 'Chat en direct',
             'name_pt' => 'Chat ao vivo',
            ]
        );
        Support::query()->updateOrCreate(
            ['key' => 'email'],
            ['key' => 'email',
             'name_en' => 'Email',
             'name_es' => 'Email',
             'name_fr' => 'Email',
             'name_pt' => 'Email',
            ]
        );
        Support::query()->updateOrCreate(
            ['key' => 'phone'],
            ['key' => 'phone',
             'name_en' => 'Phone',
             'name_es' => 'Teléfono',
             'name_fr' => 'Téléphone',
             'name_pt' => 'Telefone',
            ]
        );
    }
}
