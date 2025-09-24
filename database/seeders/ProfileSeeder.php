<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Profile;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(database_path('seeders/data/profiles.json'));
        $profiles = json_decode($json, true);

        // 🔹 Step 1: Prepare bulk profile insert
        $now = now();
        $bulkProfiles = [];

        foreach ($profiles as $data) {
            $bulkProfiles[] = [
                'name'          =>  $data['name'],
                'slug'          =>  Str::slug($data['name']),
                'image'         =>  Str::slug($data['name']) . $data['image'],
                'job_title'     =>  $data['job_title'],
                'company_id'    =>  $data['company_id'],
                'twitter_url'   =>  $data['twitter_url'],
                'website_url'   =>  $data['website_url'],
                'instagram_url' =>  $data['instagram_url'],
                'tiktok_url'    =>  $data['tiktok_url'],
                'linkedin_url'  =>  $data['linkedin_url'],
                'short_bio'     =>  $data['short_bio'],
                'is_published'  =>  $data['is_published'],
                'is_approved'   =>  $data['is_approved'],
                'created_at'    =>  $now,
                'updated_at'    =>  $now,
            ];
        }

        // 🔹 Step 2: Insert profiles in chunks (bulk insert)
        DB::table('profiles')->insertOrIgnore(array_chunk($bulkProfiles, 500)[0]);

        // Reload profiles with IDs
        $profileMap = Profile::all()->keyBy('name');

        // 🔹 Step 3: Preload tags
        $tagMap = Tag::all()->keyBy('name');

        // 🔹 Step 4: Prepare pivot bulk insert
        $bulkPivot = [];

        foreach ($profiles as $data) {
            $profile = $profileMap[$data['name']] ?? null;
            if (!$profile) continue;

            $tags = $this->generateTags($data);

            foreach ($tags as $tagName) {
                if (!$tagMap->has($tagName)) {
                    $tagMap[$tagName] = Tag::create(['name' => $tagName]);
                }

                $bulkPivot[] = [
                    'profile_id' => $profile->id,
                    'tag_id'     => $tagMap[$tagName]->id,
                ];
            }
        }

        // 🔹 Step 5: Bulk insert pivot (avoid duplicates)
        DB::table('profile_tag')->insertOrIgnore($bulkPivot);
    }


    private function generateTags(array $data): array
    {
        $tags = [];

        // Rule 1: Based on job_title
        if (Str::contains(strtolower($data['job_title']), 'engineer')) {
            $tags[] = 'engineering';
        }
        if (Str::contains(strtolower($data['job_title']), 'developer')) {
            $tags[] = 'development';
        }
        if (Str::contains(strtolower($data['job_title']), 'manager')) {
            $tags[] = 'management';
        }

        // Rule 2: Based on company_id
        if (strtolower($data['company_id']) === 'netflix') {
            $tags[] = 'entertainment';
        }
        if (strtolower($data['company_id']) === 'flutterwave') {
            $tags[] = 'fintech';
        }

        // Rule 3: Based on short_bio keywords
        $bio = strtolower($data['short_bio'] ?? '');
        if (Str::contains($bio, 'fintech')) {
            $tags[] = 'fintech';
        }
        if (Str::contains($bio, 'banking')) {
            $tags[] = 'banking';
        }
        if (Str::contains($bio, 'mentor')) {
            $tags[] = 'mentorship';
        }
        if (Str::contains($bio, 'leadership')) {
            $tags[] = 'leadership';
        }

        return array_unique($tags); // prevent duplicates
    }
}
