<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Bookmaker22BETSportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookmaker_sport')->updateOrInsert(
            ['bookmaker_id' => 10,
             'sport_id' => 18
            ],
            ['bookmaker_id' => 10,
             'sport_id' => 18,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_sport')->updateOrInsert(
            ['bookmaker_id' => 10,
             'sport_id' => 26
            ],
            ['bookmaker_id' => 10,
             'sport_id' => 26,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_sport')->updateOrInsert(
            ['bookmaker_id' => 10,
             'sport_id' => 29
            ],
            ['bookmaker_id' => 10,
             'sport_id' => 29,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_sport')->updateOrInsert(
            ['bookmaker_id' => 10,
             'sport_id' => 30
            ],
            ['bookmaker_id' => 10,
             'sport_id' => 30,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_sport')->updateOrInsert(
            ['bookmaker_id' => 10,
             'sport_id' => 37
            ],
            ['bookmaker_id' => 10,
             'sport_id' => 37,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_sport')->updateOrInsert(
            ['bookmaker_id' => 10,
             'sport_id' => 38
            ],
            ['bookmaker_id' => 10,
             'sport_id' => 38,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_sport')->updateOrInsert(
            ['bookmaker_id' => 10,
             'sport_id' => 45
            ],
            ['bookmaker_id' => 10,
             'sport_id' => 45,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_sport')->updateOrInsert(
            ['bookmaker_id' => 10,
             'sport_id' => 46
            ],
            ['bookmaker_id' => 10,
             'sport_id' => 46,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_sport')->updateOrInsert(
            ['bookmaker_id' => 10,
             'sport_id' => 48
            ],
            ['bookmaker_id' => 10,
             'sport_id' => 48,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_sport')->updateOrInsert(
            ['bookmaker_id' => 10,
             'sport_id' => 49
            ],
            ['bookmaker_id' => 10,
             'sport_id' => 49,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_sport')->updateOrInsert(
            ['bookmaker_id' => 10,
             'sport_id' => 53
            ],
            ['bookmaker_id' => 10,
             'sport_id' => 53,
             'created_at' => date('Y-m-d H:i:s'),
             'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
    }
}
