<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(
            [
                BookmakerSeeder::class,
                PaymentSeeder::class,
                CurrencySeeder::class,
                SportSeeder::class,
                RestrictionSeeder::class,
                SupportSeeder::class,
                BookmakerBetwinnerPaymentSeeder::class,
                BookmakerBetwinnerCurrencySeeder::class,
                BookmakerBetwinnerSportSeeder::class,
                BookmakerBetwinnerRestrictionSeeder::class,
                BookmakerBetwinnerSupportSeeder::class,
                BookmakerBetwinnerReviewSeeder::class,
                Bookmaker1XBETPaymentSeeder::class,
                Bookmaker1XBETCurrencySeeder::class,
                Bookmaker1XBETSportSeeder::class,
                Bookmaker1XBETSupportSeeder::class,
                Bookmaker1XBETReviewSeeder::class,
            ]
        );
    }
}
