<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookmakerMOSTBETPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookmaker_payment')->updateOrInsert(
            ['bookmaker_id' => 5,
                'payment_id' => 1
            ],
            ['bookmaker_id' => 5,
                'payment_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_payment')->updateOrInsert(
            ['bookmaker_id' => 5,
                'payment_id' => 2
            ],
            ['bookmaker_id' => 5,
                'payment_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_payment')->updateOrInsert(
            ['bookmaker_id' => 5,
                'payment_id' => 6
            ],
            ['bookmaker_id' => 5,
                'payment_id' => 6,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_payment')->updateOrInsert(
            ['bookmaker_id' => 5,
                'payment_id' => 7
            ],
            ['bookmaker_id' => 5,
                'payment_id' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_payment')->updateOrInsert(
            ['bookmaker_id' => 5,
                'payment_id' => 8
            ],
            ['bookmaker_id' => 5,
                'payment_id' => 8,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_payment')->updateOrInsert(
            ['bookmaker_id' => 5,
                'payment_id' => 9
            ],
            ['bookmaker_id' => 5,
                'payment_id' => 9,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_payment')->updateOrInsert(
            ['bookmaker_id' => 5,
                'payment_id' => 84
            ],
            ['bookmaker_id' => 5,
                'payment_id' => 84,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_payment')->updateOrInsert(
            ['bookmaker_id' => 5,
                'payment_id' => 106
            ],
            ['bookmaker_id' => 5,
                'payment_id' => 106,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_payment')->updateOrInsert(
            ['bookmaker_id' => 5,
                'payment_id' => 110
            ],
            ['bookmaker_id' => 5,
                'payment_id' => 110,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_payment')->updateOrInsert(
            ['bookmaker_id' => 5,
                'payment_id' => 119
            ],
            ['bookmaker_id' => 5,
                'payment_id' => 119,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_payment')->updateOrInsert(
            ['bookmaker_id' => 5,
                'payment_id' => 124
            ],
            ['bookmaker_id' => 5,
                'payment_id' => 124,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_payment')->updateOrInsert(
            ['bookmaker_id' => 5,
                'payment_id' => 127
            ],
            ['bookmaker_id' => 5,
                'payment_id' => 127,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_payment')->updateOrInsert(
            ['bookmaker_id' => 5,
                'payment_id' => 131
            ],
            ['bookmaker_id' => 5,
                'payment_id' => 131,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_payment')->updateOrInsert(
            ['bookmaker_id' => 5,
                'payment_id' => 133
            ],
            ['bookmaker_id' => 5,
                'payment_id' => 133,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_payment')->updateOrInsert(
            ['bookmaker_id' => 5,
                'payment_id' => 141
            ],
            ['bookmaker_id' => 5,
                'payment_id' => 141,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
        DB::table('bookmaker_payment')->updateOrInsert(
            ['bookmaker_id' => 5,
                'payment_id' => 142
            ],
            ['bookmaker_id' => 5,
                'payment_id' => 142,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
    }
}
