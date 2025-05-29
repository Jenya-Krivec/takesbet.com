<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookmakerMOSTBETCurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookmaker_currency')->updateOrInsert(
            ['bookmaker_id' => 5,
                'currency_id' => 1
            ],
            ['bookmaker_id' => 5,
                'currency_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_currency')->updateOrInsert(
            ['bookmaker_id' => 5,
                'currency_id' => 2
            ],
            ['bookmaker_id' => 5,
                'currency_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_currency')->updateOrInsert(
            ['bookmaker_id' => 5,
                'currency_id' => 11
            ],
            ['bookmaker_id' => 5,
                'currency_id' => 11,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_currency')->updateOrInsert(
            ['bookmaker_id' => 5,
                'currency_id' => 12
            ],
            ['bookmaker_id' => 5,
                'currency_id' => 12,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_currency')->updateOrInsert(
            ['bookmaker_id' => 5,
                'currency_id' => 16
            ],
            ['bookmaker_id' => 5,
                'currency_id' => 16,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_currency')->updateOrInsert(
            ['bookmaker_id' => 5,
                'currency_id' => 22
            ],
            ['bookmaker_id' => 5,
                'currency_id' => 22,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_currency')->updateOrInsert(
            ['bookmaker_id' => 5,
                'currency_id' => 24
            ],
            ['bookmaker_id' => 5,
                'currency_id' => 24,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
    }
}
