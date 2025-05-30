<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookmakerPARIPESASupportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookmaker_support')->updateOrInsert(
            ['bookmaker_id' => 6,
                'support_id' => 1
            ],
            ['bookmaker_id' => 6,
                'support_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_support')->updateOrInsert(
            ['bookmaker_id' => 6,
                'support_id' => 2
            ],
            ['bookmaker_id' => 6,
                'support_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_support')->updateOrInsert(
            ['bookmaker_id' => 6,
                'support_id' => 3
            ],
            ['bookmaker_id' => 6,
                'support_id' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
    }
}
