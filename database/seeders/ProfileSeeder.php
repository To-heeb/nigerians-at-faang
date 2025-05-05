<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profiles = [
            [
                'name' => "Gbonjubola Adelokun",
                'slug' => "gbonjubola-adelokun",
                'image' => "-image.jpg",
                'job_title' => "Senior Software Engineer",
                'company_id' => 8,
                'twitter_url' => "https://x.com/gbonjubee",
                'website_url' => "https://gbonjubola.com/",
                'instagram_url' => "https://www.instagram.com/gbonjubee_/",
                'linkedin_url' => "https://www.linkedin.com/in/gbonjubola-adelokun-12669790",
                'tiktok_url' => "",
                'short_bio' => "Gbonjubola Adelokun is a trailblazing Senior Software Engineer at Netflix, with a career spanning Banking, Fintech, and Entertainment sectors. She is recognized for breaking barriers as the first female software engineer at Flutterwave (Africa’s leading fintech) and the first Nigerian relocated from Nigeria to Adyen (a global payments giant). Known for her adaptability and technical leadership, she now excels in solution architecture and partner engineering at Netflix while actively mentoring aspiring engineers and sharing industry insights.",
                'is_published' => true,
                // https://www.youtube.com/watch?v=FbT0hYSkNVQ
                // https://www.youtube.com/watch?v=ieiaaezQ3nA
            ],
            [
                'name' => "Omotola Liadi",
                'slug' => "omotola-liadi",
                'image' => "-image.jpg",
                'job_title' => "Software Engineer",
                'company_id' => 1,
                'twitter_url' => "https://twitter.com/iamlabule",
                'website_url' => "https://rocketreach.co/omotola-liadi-email_344097513",
                'instagram_url' => "https://www.instagram.com/omotola_liadi/",
                'linkedin_url' => "https://uk.linkedin.com/in/omotola-liadi-9b3b70ab",
                'tiktok_url' => "",
                'short_bio' => "",
                'is_published' => true,
            ],
            [
                'name' => "Oluwanifemi Odeyinde",
                'slug' => "oluwanifemi-odeyinde",
                'image' => "-image.jpg",
                'job_title' => "Senior HR Professional",
                'company_id' => 11,
                'twitter_url' => "https://twitter.com/Oluwanifemi___o",
                'website_url' => "https://nifemiodeyinde.com/",
                'instagram_url' => "https://www.instagram.com/oluwanifemi__o/",
                'linkedin_url' => "https://www.linkedin.com/in/oluwanifemi-odeyinde/",
                'tiktok_url' => "",
                'short_bio' => "Oluwanifemi Odeyinde is a seasoned Human Resources (HR) professional currently serving as the Employee Relations & HR Compliance Manager at Amazon. With over nine years of experience in HR, she has worked across diverse industries, including Fast-Moving Consumer Goods (FMCG), pharmaceuticals, and shipping, holding roles at multinational corporations like Johnson & Johnson, Procter & Gamble, and Hapag-Lloyd AG",
                'is_published' => true,
            ],
            [
                'name' => "Felix Ekwueme",
                'slug' => "felix-ekwueme",
                'image' => "-image.png",
                'job_title' => "Product & Engineering Leader",
                'company_id' => 11,
                'twitter_url' => "https://x.com/felixekwuemec",
                'website_url' => "https://fcekwueme.medium.com/",
                'instagram_url' => "https://www.instagram.com/felixekwuemec/",
                'linkedin_url' => "https://www.linkedin.com/in/fcekwueme",
                'tiktok_url' => "",
                'short_bio' => "Felix Ekwueme is a Nigerian-American technologist, entrepreneur, and U.S. Army Reserve officer, currently serving as a Principal Technical Product Manager at Amazon, where he leads initiatives in supply chain optimization and customer experience innovation. With a career spanning software engineering, product management, and military service, he is recognized for his advocacy for diversity in tech and his work in emerging markets. He is also the founder of Tell Em', a social media platform designed to bridge digital and in-person interactions",
                'is_published' => true,
                // https://disruptnews.substack.com/p/felix-ekwueme-the-future-role-of-11c
            ],
            [
                'name' => "Olufunbi Falayi",
                'slug' => "olufunbi-falayi",
                'image' => "-image.jpg",
                'job_title' => "Product Lead",
                'company_id' => 5,
                'twitter_url' => "https://x.com/olufunbi1",
                'website_url' => "https://medium.com/@olufunbifalayi/passion-incubator-journey-so-far-e9bfa6ac7c27",
                'instagram_url' => "https://www.instagram.com/olufunbii/?hl=en",
                'linkedin_url' => "https://www.linkedin.com/in/olufunbifalayi/",
                'tiktok_url' => "",
                'short_bio' => "",
                'is_published' => true,
            ],
            [
                'name' => "Ijeoma Uhuegbulem",
                'slug' => "ijeoma-uhuegbulem",
                'image' => "-image.jpg",
                'job_title' => "Senior Program Manager",
                'company_id' => 11,
                'twitter_url' => "https://twitter.com/dameaijay",
                'website_url' => "https://iuhuegbulem.github.io/my-profile/",
                'instagram_url' => "",
                'linkedin_url' => "https://www.linkedin.com/in/ijeoma-uhuegbulem/",
                'tiktok_url' => "",
                'short_bio' => "Ijeoma Uhuegbulem is a Nigerian-born data and supply chain professional currently working as a Senior Supply Chain Analyst at Amazon in Luxembourg, Germany. With a background in law and a pivot to technology, she combines legal acumen with data science expertise to optimize supply chain operations. She holds an MSc in Digital Marketing & Data Science from emlyon business school (France) and has worked in roles spanning law, blockchain, and banking before transitioning to tech",
                'is_published' => true,
            ],
            [
                'name' => "Emmanuel Uche",
                'slug' => "emmanuel-uche",
                'image' => "-image.jpg",
                'job_title' => "Talent Acquisition Specialist",
                'company_id' => 11,
                'twitter_url' => "",
                'website_url' => "",
                'instagram_url' => "",
                'linkedin_url' => "https://www.linkedin.com/in/emmanuel-uche-ab0839b0/",
                'tiktok_url' => "",
                'short_bio' => "",
                'is_published' => true,
            ],
            [
                'name' => "Piriye Anga",
                'slug' => "piriye-anga",
                'image' => "-image.jpg",
                'job_title' => "Legal Counsel",
                'company_id' => 11,
                'twitter_url' => "",
                'website_url' => "https://sanetonamission.wordpress.com/2018/05/18/careergoals-getting-a-life-sentence-commuted-by-president-obama/#more-458",
                'instagram_url' => "",
                'linkedin_url' => "https://www.linkedin.com/in/piriyeanga/",
                'tiktok_url' => "",
                'short_bio' => "Piriye Anga is a Nigerian international lawyer and Corporate Counsel at Amazon, known for her work in human rights advocacy and corporate law. She has also served as a board member of Ara Africa, a grassroots initiative combating blood cancers and sickle cell anemia in Africa. Her career highlights include securing a client’s life sentence commutation through U.S. presidential intervention and working with prestigious law firms like Aluko & Oyebode and Arnold & Porter Kaye Scholer LLP in New York",
                'is_published' => true,
            ],
            [
                'name' => "Adeyemi Adetuwo",
                'slug' => "adeyemi-adetuwo",
                'image' => "-image.png",
                'job_title' => "Security Engineer",
                'company_id' => 11,
                'twitter_url' => "",
                'website_url' => "https://medium.com/@renegadedme",
                'instagram_url' => "",
                'linkedin_url' => "https://www.linkedin.com/in/yemi-a-b0237164/",
                'tiktok_url' => "",
                'short_bio' => "",
                'is_published' => true,
            ],
            [
                'name' => "Adebodun Aina",
                'slug' => "adebodun-aina",
                'image' => "-image.jpg",
                'job_title' => "Senior Manager, Product",
                'company_id' => 11,
                'twitter_url' => "https://x.com/_adebodun",
                'website_url' => "https://rocketreach.co/adebodun-aina-email_83385705",
                'instagram_url' => "https://www.instagram.com/_adebodun/?hl=en",
                'linkedin_url' => "https://www.linkedin.com/in/aina-adebodun/",
                'tiktok_url' => "",
                'short_bio' => "Adebodun Aina is a Nigerian business leader and operations expert, currently serving as a Pathways Senior Operations Manager at Amazon. With an MBA from Harvard Business School and prior experience at McKinsey & Company, he specializes in supply chain optimization, operational strategy, and leadership development. Known for his work in vaccine distribution and public sector transformation, he also mentors young African professionals through initiatives like the Young African MBA program",
                'is_published' => true,
            ],
            [
                'name' => "Ukonwa Kuzi-Orizu Ojo",
                'slug' => "ukonwa-kuzi-orizu-ojo",
                'image' => "-image.jpg",
                'job_title' => "Global Chief Marketing Officer",
                'company_id' => 11,
                'twitter_url' => "https://x.com/ukonwaojo",
                'website_url' => "https://www.thewiesuite.com/post/ukonwa-ojo-on-career-switching-and-why-she-built-her-venture-studio",
                'instagram_url' => "https://www.instagram.com/ukonwaojo/?hl=en",
                'linkedin_url' => "https://www.linkedin.com/in/ukonwa/",
                'tiktok_url' => "",
                'short_bio' => "Ukonwa Kuzi-Orizu Ojo is a Nigerian-born marketing executive, entrepreneur, and global business leader, renowned for her transformative roles at Amazon Prime Video, MAC Cosmetics, and Coty, and as the Founder/CEO of Zaia Ventures. With a career spanning 26 years, she has driven billion-dollar brands, shattered industry ceilings, and championed underrepresented communities. A Harvard Business Review-listed innovator and Forbes Most Influential CMO, she combines data-driven strategy with creative storytelling to redefine markets globally",
                'is_published' => true,
                // https://podcasts.apple.com/us/podcast/episode-88-ukonwa-kuzi-orizu-ojo/id1601870781?i=1000646388179
                // https://www.youtube.com/watch?v=2IVCF5rlnKA
            ],
            [
                'name' => "Chukwuemeka Afigbo",
                'slug' => "chukwuemeka-afigbo",
                'image' => "-image.jpg",
                'job_title' => "Program Manager",
                'company_id' => 1,
                'twitter_url' => "https://twitter.com/nke_ise",
                'website_url' => "https://nkeise.medium.com/",
                'instagram_url' => "https://www.instagram.com/nke_ise/",
                'linkedin_url' => "https://www.linkedin.com/in/emekaafigbo/",
                'tiktok_url' => "",
                'short_bio' => "Chukwuemeka Afigbo is a Nigerian technology executive and developer ecosystem leader, currently serving as Senior Director of Developer Success at Okta (Workforce Identity Cloud). With a career spanning Google, Facebook (Meta), and Okta, he specializes in fostering developer communities, strategic partnerships, and innovation in emerging markets. A graduate of Electronic Engineering (University of Nigeria) and Technology Innovations Management (Carleton University), he is recognized for pioneering initiatives like Lagos Code Camp and advocating for African tech talent globally",
                'is_published' => true,
            ],
            [
                'name' => "Ime Archibong",
                'slug' => "ime-archibong",
                'image' => "-image.jpg",
                'job_title' => "VP, Product Management",
                'company_id' => 1,
                'twitter_url' => "",
                'website_url' => "https://en.wikipedia.org/wiki/Ime_Archibong",
                'instagram_url' => "https://www.instagram.com/archibongi/?hl=en",
                'linkedin_url' => "https://www.linkedin.com/in/imearchibong/",
                'tiktok_url' => "",
                'short_bio' => "Ime Archibong is a Nigerian-American technology executive and one of Meta’s highest-ranking Black leaders, currently serving as Vice President of Product Management and Head of Messenger at Meta Platforms. A Yale and Stanford graduate, he began his career at IBM before joining Meta (formerly Facebook) in 2010, where he has spearheaded initiatives like Internet.org, Messenger, and New Product Experimentation (NPE). Recognized for his leadership in diversity and global connectivity, he holds over a dozen patents and serves on the board of Capital One and multiple nonprofits focused on education and underserved communities",
                'is_published' => true,
                // https://www.youtube.com/watch?v=JiQuzYIKOGg
                // https://www.instagram.com/reel/C-FhYTHgVXV/
                // https://www.youtube.com/watch?v=82wwpWVDWqk
                // https://www.facebook.com/atscaleevents/videos/keynote-ime-archibong/899475971452142/
                // https://www.youtube.com/watch?v=BTuUUslGUvw
                // https://www.youtube.com/watch?v=OSADQZ9XOwA
                // https://www.facebook.com/CcHUBNigeria/videos/ng_hub-launch/1782612175115032/
                //
            ],
            // [
            //     'name' => "",
            //     'slug' => "",
            //     'image' => "",
            //     'job_title' => "",
            //     'company_id' => "",
            //     'twitter_url' => "",
            //     'website_url' => "",
            //     'instagram_url' => "",
            //     'linkedin_url' => "",
            //     'tiktok_url' => "",
            //     'short_bio' => "",
            //     'is_published' => true,
            // ],
            // [
            //     'name' => "",
            //     'slug' => "",
            //     'image' => "",
            //     'job_title' => "",
            //     'company_id' => "",
            //     'twitter_url' => "",
            //     'website_url' => "",
            //     'instagram_url' => "",
            //     'linkedin_url' => "",
            //     'tiktok_url' => "",
            //     'short_bio' => "",
            //     'is_published' => true,
            // ],
        ];

        $profiles = array_map(fn($profile) => [
            'name'  => $profile['name'],
            'slug'  => Str::slug($profile['name']),
            'image' => Str::slug($profile['name']) . $profile['image'],
            'company_id' => $profile['company_id'],
            'short_bio' => $profile['short_bio'],
            'job_title' => $profile['job_title'],
            'twitter_url' => $profile['twitter_url'],
            'instagram_url' => $profile['instagram_url'],
            'linkedin_url' => $profile['linkedin_url'],
            'is_published' => $profile['is_published'],
            'published_at' => now(),
            'created_at' => now(),
            'updated_at' => now()
        ], $profiles);

        Profile::insert($profiles);
    }
}
