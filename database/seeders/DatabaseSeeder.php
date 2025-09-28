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
        // User::factory(10)->create();

        $this->call([
            CompanySeeder::class,
            TagSeeder::class,
            ProfileSeeder::class,
            IndustrySeeder::class,
            BlogSeeder::class
        ]);

        User::factory()->create([
            'name' => 'Oyekola Toheeb',
            'email' => 'toheeb.olawale.to23@gmail.com',
        ]);
    }
}
