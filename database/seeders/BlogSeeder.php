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
                'title' => "From Lagos to Google: Ada’s Journey to Silicon Valley",
                'body' => "Ada grew up in the bustling streets of Lagos, surrounded by the noise, color, and culture that defines Nigeria’s most vibrant city. Her first experience with a computer was at a cyber café where she used N200 to spend thirty minutes online — just enough time to Google 'how to build a website'. That small moment sparked a fire in her. With no personal computer at home, Ada spent her evenings at internet cafés watching YouTube tutorials and reading articles on W3Schools. Her interest in coding grew, but so did the challenges. Slow internet, frequent blackouts, and limited mentorship made learning difficult. But she pushed through — every obstacle became part of her story. While studying Computer Science at the University of Lagos, Ada co-founded a campus tech club. She taught others what she had learned and organized small hackathons. It was at one of these events she met a visiting software engineer from the UK, who encouraged her to contribute to open-source projects on GitHub. Ada started contributing to open-source, despite her impostor syndrome. She built small tools, fixed documentation bugs, and eventually landed a remote internship with a U.S.-based startup. That experience taught her how teams in Silicon Valley worked — the collaboration, code reviews, and fast-paced environment were unlike anything she had seen. She applied to the Google Africa Developer Scholarship and made the most of the mentorship and learning tracks. With each step, she improved her technical skills and expanded her network. After graduating, she set her sights on Google. The application process was grueling. Multiple interviews, weeks of prep, and more than a few moments of self-doubt. But in the end, she got the call: “We’d like to offer you a position as a Software Engineer at Google.” Now based in Mountain View, California, Ada works on Google Search and volunteers with organizations that support women in tech. She’s a mentor, a role model, and a powerful example that it is possible — with grit, curiosity, and support — to go from a cyber café in Lagos to the Googleplex in Silicon Valley. Her advice? 'Don’t wait to be ready. Start now. Stay hungry. Help others along the way.'",
                'image' => "blog-1.jpg",
                'profile_id' => 1,
                'is_published' => true,
            ],
            [
                'title' => "Breaking Barriers: Chuka’s Path from UNILAG to Netflix",
                'body' => "Chuka always believed storytelling and software could go hand in hand. After years of building community tools and mentoring others, he earned a spot at Netflix as a senior engineer.",
                'image' => "blog-2.jpg",
                'profile_id' => 2,
                'is_published' => true,
            ],
            [
                'title' => "Faith, Grit, and Amazon: Tolu’s Tale of Tenacity",
                'body' => "Tolu didn’t have the perfect GPA or elite connections, but her faith and consistency helped her secure a cloud engineering role at Amazon. She shares her thoughts on imposter syndrome, mentorship, and growth.",
                'image' => "blog-3.jpg",
                'profile_id' => 3,
                'is_published' => true,
            ],
            [
                'title' => "Tech Sis in Big Tech: Zainab at Meta",
                'body' => "Zainab started a YouTube channel documenting her coding journey. That led to internships and eventually an offer from Meta. She now advocates for more women in engineering from underrepresented regions.",
                'image' => "blog-4.jpg",
                'profile_id' => 4,
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
