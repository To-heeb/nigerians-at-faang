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
                'name' => "meta"
            ],
            [
                'name' => "samsung"
            ],
            [
                'name' => "microsoft"
            ],
            [
                'name' => "google"
            ],
            [
                'name' => "sony"
            ],
            [
                'name' => "paypal"
            ],
            [
                'name' => "netflix"
            ],
            [
                'name' => "intel"
            ],
            [
                'name' => "logitech"
            ],
            [
                'name' => "amazon"
            ],
            [
                'name' => "oracle"
            ],
            [
                'name' => "redhat"
            ],
            [
                'name' => "ibm"
            ],
            [
                'name' => "x"
            ],
            [
                'name' => "twitter"
            ],
            [
                'name' => "lyft"
            ],
            [
                'name' => "uber"
            ],
            [
                'name' => "stripe"
            ],
            [
                'name' => "roblox"
            ],
            [
                'name' => "coinbase"
            ],
            [
                'name' => "database"
            ],
            [
                'name' => "snap"
            ],
            [
                'name' => "salesforce"
            ],
            [
                'name' => "jpmorgan chase"
            ],
            [
                'name' => "capital_one"
            ],
            [
                'name' => "bytedance"
            ],
            [
                'name' => "xiaomi"
            ],
            [
                'name' => "alibaba"
            ],
            [
                'name' => "dell"
            ],
            [
                'name' => "nvidia"
            ],
            [
                'name' => "reddit"
            ],
            [
                'name' => "bolt"
            ],
            [
                'name' => "airbnb"
            ],
            [
                'name' => "yelp"
            ],
            [
                'name' => "software engineer"
            ],
            [
                'name' => "engineer"
            ],
            [
                'name' => "product management"
            ],
            [
                'name' => "bloomberg"
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
