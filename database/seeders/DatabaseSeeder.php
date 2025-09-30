<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
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
            IndustrySeeder::class,
            CompanySeeder::class,
            TagSeeder::class,
            ProfileSeeder::class,
            BlogSeeder::class
        ]);

        User::create([
            'name' => config('app.runner_name'),
            'email' => config('app.runner_mail'),
            'email_verified_at' => now(),
            'password' => config('app.runner_pass'),
            'remember_token' => Str::random(10),
        ]);
    }
}
