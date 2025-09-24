<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $tags = [
            [
                'name' => "software engineer"
            ],
            [
                'name' => "engineer"
            ],
            [
                'name' => "engineering"
            ],
            [
                'name' => "product management"
            ],
        ];

        $tags = array_map(fn($tag) => [
            'name'  => $tag['name'],
            'slug'  => Str::slug($tag['name']),
            'created_at' => now(),
            'updated_at' => now()
        ], $tags);

        Tag::insert($tags);
    }
}
