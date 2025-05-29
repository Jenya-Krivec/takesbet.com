<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Bookmaker1winPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookmaker_payment')->updateOrInsert(
            ['bookmaker_id' => 4,
                'payment_id' => 1
            ],
            ['bookmaker_id' => 4,
                'payment_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_payment')->updateOrInsert(
            ['bookmaker_id' => 4,
                'payment_id' => 2
            ],
            ['bookmaker_id' => 4,
                'payment_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_payment')->updateOrInsert(
            ['bookmaker_id' => 4,
                'payment_id' => 6
            ],
            ['bookmaker_id' => 4,
                'payment_id' => 6,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_payment')->updateOrInsert(
            ['bookmaker_id' => 4,
                'payment_id' => 7
            ],
            ['bookmaker_id' => 4,
                'payment_id' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_payment')->updateOrInsert(
            ['bookmaker_id' => 4,
                'payment_id' => 8
            ],
            ['bookmaker_id' => 4,
                'payment_id' => 8,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_payment')->updateOrInsert(
            ['bookmaker_id' => 4,
                'payment_id' => 17
            ],
            ['bookmaker_id' => 4,
                'payment_id' => 17,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_payment')->updateOrInsert(
            ['bookmaker_id' => 4,
                'payment_id' => 84
            ],
            ['bookmaker_id' => 4,
                'payment_id' => 84,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_payment')->updateOrInsert(
            ['bookmaker_id' => 4,
                'payment_id' => 84
            ],
            ['bookmaker_id' => 4,
                'payment_id' => 84,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_payment')->updateOrInsert(
            ['bookmaker_id' => 4,
                'payment_id' => 138
            ],
            ['bookmaker_id' => 4,
                'payment_id' => 138,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_payment')->updateOrInsert(
            ['bookmaker_id' => 4,
                'payment_id' => 139
            ],
            ['bookmaker_id' => 4,
                'payment_id' => 139,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_payment')->updateOrInsert(
            ['bookmaker_id' => 4,
                'payment_id' => 140
            ],
            ['bookmaker_id' => 4,
                'payment_id' => 140,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_payment')->updateOrInsert(
            ['bookmaker_id' => 4,
                'payment_id' => 141
            ],
            ['bookmaker_id' => 4,
                'payment_id' => 141,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
    }
}
