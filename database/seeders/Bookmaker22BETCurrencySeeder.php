<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Bookmaker22BETCurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookmaker_currency')->updateOrInsert(
            ['bookmaker_id' => 10,
             'currency_id' => 1
            ],
            ['bookmaker_id' => 10,
             'currency_id' => 1,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_currency')->updateOrInsert(
            ['bookmaker_id' => 10,
             'currency_id' => 2
            ],
            ['bookmaker_id' => 10,
             'currency_id' => 2,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_currency')->updateOrInsert(
            ['bookmaker_id' => 10,
             'currency_id' => 3
            ],
            ['bookmaker_id' => 10,
             'currency_id' => 3,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_currency')->updateOrInsert(
            ['bookmaker_id' => 10,
             'currency_id' => 4
            ],
            ['bookmaker_id' => 10,
             'currency_id' => 4,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_currency')->updateOrInsert(
            ['bookmaker_id' => 10,
             'currency_id' => 7
            ],
            ['bookmaker_id' => 10,
             'currency_id' => 7,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_currency')->updateOrInsert(
            ['bookmaker_id' => 10,
             'currency_id' => 9
            ],
            ['bookmaker_id' => 10,
             'currency_id' => 9,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_currency')->updateOrInsert(
            ['bookmaker_id' => 10,
             'currency_id' => 11
            ],
            ['bookmaker_id' => 10,
             'currency_id' => 11,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_currency')->updateOrInsert(
            ['bookmaker_id' => 10,
             'currency_id' => 34
            ],
            ['bookmaker_id' => 10,
             'currency_id' => 34,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
    }
}
