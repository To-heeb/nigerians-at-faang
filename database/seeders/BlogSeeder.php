<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
                'title' => "",
                'body' => "",
                'image' => "",
                'profile_id' => 1,
                'is_published' => true,
            ],
            [
                'title' => "",
                'body' => "",
                'image' => "",
                'profile_id' => 1,
                'is_published' => true,
            ],
            [
                'title' => "",
                'body' => "",
                'image' => "",
                'profile_id' => 1,
                'is_published' => true,
            ],
            [
                'title' => "Gbonjubola Adelokun",
                'body' => "gbonjubola-adelokun",
                'image' => "",
                'profile_id' => 1,
                'is_published' => true,
            ],
        ];

        $blogs = array_map(fn($blog) => [
            'title'  => $blog['title'],
            'body' => $blog['body'],
            'slug'  => Str::slug($blog['title']),
            'image' => $blog['image'],
            'profile_id' => $blog['profile_id'],
            'is_published' => $blog['is_published'],
            'published_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ], $blogs);

        Blog::insert($blogs);
    }
}
