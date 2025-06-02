<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Bookmaker4rabetSportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookmaker_sport')->updateOrInsert(
            ['bookmaker_id' => 7,
             'sport_id' =>4
            ],
            ['bookmaker_id' => 7,
             'sport_id' => 4,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_sport')->updateOrInsert(
            ['bookmaker_id' => 7,
             'sport_id' =>7
            ],
            ['bookmaker_id' => 7,
             'sport_id' => 7,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_sport')->updateOrInsert(
            ['bookmaker_id' => 7,
             'sport_id' => 13
            ],
            ['bookmaker_id' => 7,
             'sport_id' => 13,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_sport')->updateOrInsert(
            ['bookmaker_id' => 7,
             'sport_id' => 13
            ],
            ['bookmaker_id' => 7,
             'sport_id' => 13,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_sport')->updateOrInsert(
            ['bookmaker_id' => 7,
             'sport_id' => 18
            ],
            ['bookmaker_id' => 7,
             'sport_id' => 18,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_sport')->updateOrInsert(
            ['bookmaker_id' => 7,
             'sport_id' => 45
            ],
            ['bookmaker_id' => 7,
             'sport_id' => 45,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_sport')->updateOrInsert(
            ['bookmaker_id' => 7,
             'sport_id' => 46
            ],
            ['bookmaker_id' => 7,
             'sport_id' => 46,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
    }
}
