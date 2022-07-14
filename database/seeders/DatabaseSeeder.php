<?php

namespace Database\Seeders;

use App\Models\ProjectCategory;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
             'name' => 'Mwamodo Erick',
             'email' => 'erick@mwamodo.com',
         ]);

        ProjectCategory::factory()->create([
            'name' => 'DUT',
        ]);

        ProjectCategory::factory()->create([
            'name' => 'Nineafrica',
        ]);

        ProjectCategory::factory()->create([
            'name' => 'Personal',
        ]);
    }
}
