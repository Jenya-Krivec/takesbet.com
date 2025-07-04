<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->updateOrCreate(
            ['email' => 'Zhenya.krivec@gmail.com'],
            ['email' => 'Zhenya.krivec@gmail.com',
             'name' => 'Jenya',
             'surname' => 'Krivets',
             'password' => '$2y$12$kzSR/5nmtcc8n7mIR4WNt.gYBxd52m/qVxwfZd1CReyBzlk5xeQx.',
            ]
        );
        User::query()->updateOrCreate(
            ['email' => 'admin@gmail.com'],
            ['email' => 'admin@gmail.com',
             'name' => 'Admin',
             'surname' => '',
             'password' => '$2y$12$kzSR/5nmtcc8n7mIR4WNt.gYBxd52m/qVxwfZd1CReyBzlk5xeQx.',
            ]
        );
    }
}
