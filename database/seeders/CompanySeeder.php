<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = [
            [
                'name' => "Meta",
                "website" => "https://www.meta.com/",
                "about" => "Meta Platforms, Inc. is an American multinational technology company headquartered in Menlo Park, California. Meta owns and operates several prominent social media platforms and communication services, including Facebook, Instagram, Threads, Messenger and WhatsApp. The company also operates an advertising network for its own sites and third parties.",
                "founded_at" => 2004, //industry => "Digital Advertising, Social Media, Virtual/Augmented Reality (VR/AR), Artificial Intelligence, Machine Learning"
                "headquarters" => "	Menlo Park, California, United States",
                "information_website" => "https://www.meta.com/about/company-info/",
                "linkedin_url" => "https://www.linkedin.com/company/meta",
                "twitter_url" => "https://x.com/meta",
                "youtube_url" => "https://www.youtube.com/meta",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Meta_Platforms",
                "career_page_url" => "https://www.metacareers.com/"
            ],
            [
                'name' => "Samsung",
                "website" => "https://www.samsung.com/",
                "about" => "Samsung Electronics Co., Ltd. (SEC; stylized as SΛMSUNG; Korean: 삼성전자; RR: Samseong Jeonja; lit. Tristar Electronics) is a South Korean multinational major appliance and consumer electronics corporation founded on 13 January 1969.",
                "founded_at" => 1969, //industry => "Consumer Electronics, Semiconductors , Hardware Engineering"
                "headquarters" => "Suwon-si, South Korea",
                "information_website" => "https://www.samsung.com/africa_en/about-us/company-info/",
                "linkedin_url" => "https://ng.linkedin.com/company/samsung-electronics",
                "twitter_url" => "https://twitter.com/SamsungNewsroom",
                "youtube_url" => "https://www.youtube.com/channel/UCHIKWrhweDqw7_eiit8frJw",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Samsung",
                "career_page_url" => "https://www.samsung.com/africa_en/about-us/careers/"
            ],
            [
                'name' => "Apple",
                "website" => "https://www.apple.com/",
                "about" => "Apple Inc. is an American multinational corporation and technology company headquartered in Cupertino, California, in Silicon Valley. It is best known for its consumer electronics, software, and services. Founded in 1976 as Apple Computer Company by Steve Jobs, Steve Wozniak and Ronald Wayne, the company was incorporated by Jobs and Wozniak as Apple Computer, Inc. the following year. It was renamed Apple Inc. in 2007 as the company had expanded its focus from computers to consumer electronics.",
                "founded_at" => 1976, //industry => "Software & Services, Consumer Electronics, Semiconductors, Hardware Engineering"
                "headquarters" => "1 Apple Park Way, Cupertino, California, United State",
                "information_website" => "https://www.apple.com/newsroom/",
                "linkedin_url" => "https://www.linkedin.com/company/apple",
                "twitter_url" => "https://x.com/Apple",
                "youtube_url" => "https://www.youtube.com/user/Apple",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Apple_Inc",
                "career_page_url" => "https://www.apple.com/careers/ng/"
            ],
            [
                'name' => "Microsoft",
                "website" => "https://www.microsoft.com/",
                "about" => "Microsoft Corporation is an American multinational corporation and technology conglomerate headquartered in Redmond, Washington.",
                "founded_at" => 1975, //industry => "Enterprise Service, Productivity Tools, Cloud Computing, Personal Computing, Artificial Intelligence, Operating System"
                "headquarters" => "One Microsoft Way, Redmond, Washington, United States",
                "information_website" => "https://www.microsoft.com/en-ng/about",
                "linkedin_url" => "https://x.com/Microsoft?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor",
                "twitter_url" => "https://x.com/Microsoft",
                "youtube_url" => "https://www.youtube.com/user/Microsoft",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Microsoft",
                "career_page_url" => "https://careers.microsoft.com/"
            ],
            [
                'name' => "Google",
                "website" => "https://google.com/",
                "about" => "Google LLC is an American multinational corporation and technology company focusing on online advertising, search engine technology, cloud computing, computer software, quantum computing, e-commerce, consumer electronics, and artificial intelligence.",
                "founded_at" => 1998, //industry => "Digital Advertising, Cloud Computing, Artificial Intelligence, Machine Learning, Consumer Electronics, Hardware Engineering"
                "headquarters" => "Mountain View, California, United States",
                "information_website" => "https://about.google/",
                "linkedin_url" => "https://www.linkedin.com/company/google",
                "twitter_url" => "https://x.com/Google",
                "youtube_url" => "https://www.youtube.com/Google",
                "wikipedia_url" => "https://x.com/Google",
                "career_page_url" => "https://www.google.com/about/careers/applications/"
            ],
            [
                'name' => "Sony",
                "website" => "https://www.sony.com/",
                "about" => "Sony Group Corporation is a Japanese multinational conglomerate headquartered at Sony City in Minato, Tokyo, Japan. The Sony Group encompasses various businesses, including Sony Corporation (electronics), Sony Semiconductor Solutions (imaging and sensing), Sony Entertainment.",
                "founded_at" => 1946, //industry => "Consumer Electronics, Gaming & Interactive Entertainment, Entertainment & Media, Semiconductors, Hardware Engineering"
                "headquarters" => "	Sony City, Minato, Tokyo, Japan",
                "information_website" => "https://www.sony.com/en/SonyInfo/design/about/",
                "linkedin_url" => "https://www.linkedin.com/company/sony",
                "twitter_url" => "https://x.com/sony",
                "youtube_url" => "https://www.youtube.com/user/Sony",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Sony",
                "career_page_url" => "https://www.sonyjobs.com/careers.html"
            ],
            [
                'name' => "PayPal",
                "website" => "https://www.paypal.com/",
                "about" => "PayPal Holdings, Inc. is an American multinational financial technology company operating an online payments system in the majority of countries that support online money transfers; it serves as an electronic alternative to traditional paper methods such as checks and money orders. The company operates as a payment processor for online vendors, auction sites and many other commercial and company users, for which it charges an international addition bank charges fee.",
                "founded_at" => 1998, //industry => "Financial Technology(Fintech), Cryptocurrency, Blockchain, E-Commerce, Digital Payments"
                "headquarters" => "	San Jose, California, United States",
                "information_website" => "https://about.pypl.com/about-us/default.aspx",
                "linkedin_url" => "https://www.linkedin.com/company/paypal",
                "twitter_url" => "https://x.com/PayPal",
                "youtube_url" => "https://www.youtube.com/paypal",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/PayPal",
                "career_page_url" => "https://careers.pypl.com/home/"
            ],
            [
                'name' => "Netflix",
                "website" => "https://www.netflix.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://help.netflix.com/en/node/412",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Intel",
                "website" => "https://www.intel.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://www.intel.com/content/www/us/en/company-overview/company-overview.html",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Logitech",
                "website" => "https://www.logitech.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://www.logitech.com/en-us/about.html",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Amazon",
                "website" => "https://www.amazon.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://www.aboutamazon.com/",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Oracle",
                "website" => "https://www.oracle.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://www.oracle.com/ng/corporate/",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Redhat",
                "website" => "https://www.redhat.com",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://www.redhat.com/en/about/company",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "IBM",
                "website" => "https://www.ibm.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://www.ibm.com/about",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "X",
                "website" => "https://x.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://about.x.com/",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Lyft",
                "website" => "https://www.lyft.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://www.lyft.com/business",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Uber",
                "website" => "https://www.uber.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://www.uber.com/us/en/about/",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Stripe",
                "website" => "https://stripe.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://stripe.com/newsroom/",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Roblox",
                "website" => "https://www.roblox.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://corp.roblox.com/",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Coinbase",
                "website" => "https://www.coinbase.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://www.coinbase.com/en-gb/about",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Databricks",
                "website" => "https://www.databricks.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://www.databricks.com/company/about-us",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Snap",
                "website" => "https://www.snapchat.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://www.snap.com/?lang=en-GB",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Salesforce",
                "website" => "https://www.salesforce.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://www.salesforce.com/products/what-is-salesforce/",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "JPMorgan Chase",
                "website" => "https://www.jpmorganchase.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://www.jpmorganchase.com/about",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Capital One",
                "website" => "https://www.capitalone.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://www.capitalone.com/about/",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "ByteDance",
                "website" => "https://www.bytedance.com/en/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Xiaomi",
                "website" => "https://www.mi.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://www.mi.com/us/about/",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Alibaba",
                "website" => "https://www.alibaba.com",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Dell",
                "website" => "https://www.dell.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://www.dell.com/en-us/lp/dt/who-we-are",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Nvidia",
                "website" => "https://www.nvidia.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://www.nvidia.com/en-us/about-nvidia/",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Reddit",
                "website" => "https://www.reddit.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Bolt",
                "website" => "https://bolt.eu/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://bolt.eu/en/careers/life-at-bolt/",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Airbnb",
                "website" => "https://www.airbnb.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://www.airbnb.com/release/",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Yelp",
                "website" => "https://www.yelp.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://www.yelp.com/about",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Bloomberg",
                "website" => "https://bloomberg.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://bloomberg.com/context",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Binance",
                "website" => "https://www.binance.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://www.binance.com/en/about",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "DoorDash",
                "website" => "https://www.doordash.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://about.doordash.com/en-us",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Adobe",
                "website" => "https://www.adobe.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://www.adobe.com/about-adobe.html",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Goldman Sachs",
                "website" => "https://www.goldmansachs.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://www.goldmansachs.com/what-we-do/our-businesses",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "MasterCard",
                "website" => "https://www.mastercard.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://www.mastercard.us/en-us/vision/who-we-are.html",
                "linkedin_url" => "http://www.linkedin.com/company/mastercard",
                "twitter_url" => "https://x.com/mastercardmena",
                "youtube_url" => "http://www.youtube.com/user/MasterCard",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Visa",
                "website" => "https://corporate.visa.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://corporate.visa.com/en/about-visa.html",
                "linkedin_url" => "https://www.linkedin.com/company/visa",
                "twitter_url" => "https://x.com/Visa",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Open AI",
                "website" => "https://openai.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://openai.com/about/",
                "linkedin_url" => "https://www.linkedin.com/company/openai",
                "twitter_url" => "https://x.com/OpenAI",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Cisco",
                "website" => "https://www.cisco.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://www.cisco.com/c/en/us/about.html",
                "linkedin_url" => "https://www.linkedin.com/company/cisco",
                "twitter_url" => "https://twitter.com/Cisco/",
                "youtube_url" => "",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Fortinet",
                "website" => "https://www.fortinet.com/",
                "about" => "",
                "founded_at" => "", //industry =>
                "headquarters" => "",
                "information_website" => "https://www.fortinet.com/corporate/about-us/about-us",
                "linkedin_url" => "https://www.linkedin.com/company/fortinet/",
                "twitter_url" => "https://www.x.com/Fortinet",
                "youtube_url" => "https://www.youtube.com/channel/UCJHo4AuVomwMRzgkA5DQEOA?sub_confirmation=1",
                "wikipedia_url" => "",
                "career_page_url" => ""
            ],
            [
                'name' => "Atlassian",
                "website" => "https://www.atlassian.com/",
                "about" => "Atlassian Corporation is an Australian-American proprietary software company that specializes in collaboration tools designed primarily for software development and project management.",
                "founded_at" => 2002, //industry => "Developer Tools, DevOps, Collaboration & Productivity Software"
                "headquarters" => "Sydney, Australia",
                "information_website" => "https://www.atlassian.com/company",
                "linkedin_url" => "https://www.linkedin.com/company/atlassian",
                "twitter_url" => "https://x.com/atlassian",
                "youtube_url" => "https://www.youtube.com/@Atlassian/featured",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Atlassian",
                "career_page_url" => "https://www.atlassian.com/company/careers/all-jobs"
            ],
            [
                'name' => "Twilio",
                "website" => "https://www.twilio.com/en-us",
                "about" => "Twilio Inc. is an American cloud communications company based in San Francisco, California, which provides programmable communication tools for making and receiving phone calls, sending and receiving text messages, and performing other communication functions using its web service APIs.",
                "founded_at" => 2008, //industry => "Cloud Communications Platform as a Service, Customer Engagement & Experience, Software Development Tools"
                "headquarters" => "San Francisco, California, United States",
                "information_website" => "https://www.fortinet.com/corporate/about-us/about-us",
                "linkedin_url" => "https://www.linkedin.com/company/twilio-inc-",
                "twitter_url" => "https://twitter.com/twilio",
                "youtube_url" => "https://www.youtube.com/channel/UCWh3G9LZmZ3q_xWOyPpn8ag",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Twilio",
                "career_page_url" => "https://www.twilio.com/en-us/company/jobs"
            ],
            [
                'name' => "Hewlett Packard Enterprise",
                "website" => "https://www.hpe.com/",
                "about" => "The Hewlett Packard Enterprise Company (HPE) is an American multinational information technology company based in Spring, Texas. It is a business-focused organization which works in servers, storage, networking, containerization software and consulting and support. HPE was ranked No. 107 in the 2018 Fortune 500 list of the largest United States corporations by total revenue.",
                "founded_at" => 2015, //industry => "Networking & Connectivity, Data Analytics, Artificial Intelligence, Edge Computing, Hybrid Cloud, Enterprise IT Infrastructure"
                "headquarters" => "Spring, Houston, Texas, United States",
                "information_website" => "https://www.hpe.com/emea_europe/en/about.html",
                "linkedin_url" => "https://www.linkedin.com/company/hewlett-packard-enterprise/",
                "twitter_url" => "https://twitter.com/hpe",
                "youtube_url" => "https://www.youtube.com/channel/UCAdEqOhSnzlLBtaapu567AQ",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Hewlett_Packard_Enterprise",
                "career_page_url" => "https://careers.hpe.com/us/en"
            ],
            [
                'name' => "Block",
                "website" => "https://block.xyz/",
                "about" => "Block, Inc. is an American technology company and a financial services provider for consumers and merchants. Founded in 2009 by Jack Dorsey, it is the U.S. market leader in point-of-sale systems.",
                "founded_at" => 2009, //industry => "Financial Technology(Fintech), Financial Services, Point-of-Sale (POS) Systems, Blockchain, Cryptocurrency, Small Business Services"
                "headquarters" => "San Francisco, United State",
                "information_website" => "https://block.xyz/news",
                "linkedin_url" => "https://www.linkedin.com/company/joinblock/",
                "twitter_url" => "https://x.com/blocks",
                "youtube_url" => "https://www.youtube.com/square",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Block,_Inc.",
                "career_page_url" => "https://block.xyz/careers/jobs"
            ],
            [
                'name' => "Citi",
                "website" => "https://www.citi.com/",
                "about" => "Citibank, N.A. ('N. A.' stands for 'National Association'; stylized as citibank) is the primary U.S. banking subsidiary of Citigroup, a financial services multinational corporation.",
                "founded_at" => 1998, //industry => "Banking & Financial Services, Investment Banking, Capital Markets, Global Transaction Services, Credit Cards, Consumer Lending"
                "headquarters" => "	New York City, United States",
                "information_website" => "https://www.citigroup.com/global/about-us",
                "linkedin_url" => "http://www.linkedin.com/company/citi",
                "twitter_url" => "https://twitter.com/Citi",
                "youtube_url" => "http://www.youtube.com/citi",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Citibank",
                "career_page_url" => "https://jobs.citi.com/"
            ],
            [
                'name' => "Wayfair",
                "website" => "https://www.wayfair.com/",
                "about" => "Wayfair Inc. is an American e-commerce company based in Boston, Massachusetts that sells furniture and home goods online. Formerly known as CSN Stores, it was founded in 2002, and currently offers 14 million items from more than 11,000 global suppliers. It has offices and warehouses throughout the United States and in Canada, Germany, Ireland, China and the United Kingdom.",
                "founded_at" => 2008, //industry => "E-Commerce, Supply Chain & Logistics, Furniture Retail, B2B & Trade Services"
                "headquarters" => "Boston, Massachusetts, United State",
                "information_website" => "https://www.aboutwayfair.com/",
                "linkedin_url" => "https://www.linkedin.com/company/wayfair",
                "twitter_url" => "https://twitter.com/Wayfair",
                "youtube_url" => "https://www.youtube.com/channel/UCygNJ1TutAAtYlmu0gUMLBA",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Wayfair",
                "career_page_url" => "https://www.wayfair.com/careers/jobs"
            ],
            [
                'name' => "Ikea",
                "website" => "https://www.ikea.com/",
                "about" => "IKEA is a multinational furniture company that was founded by Ingvar Kamprad, from Sweden. The name IKEA is an acronym from the name Ingvar Kamprad, Elmtaryd (the farm where he grew up), and Agunnaryd (his hometown in Småland, southern Sweden).",
                "founded_at" => 1943, //industry => "Furniture Retail, E-Commerce, Sustainable Manufacturing & Circular Economy, Food Services & Hospitality"
                "headquarters" => "Delft, Netherlands",
                "information_website" => "https://www.ikea.com/global/en/our-business/",
                "linkedin_url" => "https://www.linkedin.com/company/ikea/",
                "twitter_url" => "https://x.com/ikea",
                "youtube_url" => "https://www.youtube.com/user/IKEA",
                "wikipedia_url" => "https://simple.wikipedia.org/wiki/IKEA",
                "career_page_url" => "https://jobs.ikea.com/en"
            ],
            [
                'name' => "Akamai",
                "website" => "https://www.akamai.com/",
                "about" => "Akamai Technologies, Inc. is an American company specialized in content delivery network, cybersecurity, DDoS mitigation, and cloud services.",
                "founded_at" => 1998, //industry => "Cloud Computing, Edge Computing, Cloud Infrastructure, Content Delivery Network, Cloud Security, Media & Streaming Delivery"
                "headquarters" => " Cambridge, Massachusetts, United States",
                "information_website" => "https://www.akamai.com/company",
                "linkedin_url" => "https://www.linkedin.com/company/akamai-technologies",
                "twitter_url" => "https://twitter.com/Akamai",
                "youtube_url" => "https://www.youtube.com/user/akamaitechnologies",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Akamai_Technologies",
                "career_page_url" => "https://jobs.akamai.com/"
            ],
            [
                'name' => "Walmart",
                "website" => "https://www.walmart.com/",
                "about" => "Walmart Inc. is an American multinational retail corporation that operates a chain of hypermarkets (also called supercenters), discount department stores, and grocery stores in the United States and 23 other countries.",
                "founded_at" => 1962, //industry => "Retail, E-Commerce, Supply Chain & Logistics, Online Marketplace, Healthcare Services"
                "headquarters" => "	Bentonville, Arkansas, United States",
                "information_website" => "https://corporate.walmart.com/",
                "linkedin_url" => "https://www.linkedin.com/company/walmart",
                "twitter_url" => "https://x.com/walmartinc",
                "youtube_url" => "https://www.youtube.com/walmart",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Walmart",
                "career_page_url" => "https://careers.walmart.com/"
            ],
            [
                'name' => "Zillow",
                "website" => "https://www.zillow.com/",
                "about" => "Zillow Group, Inc., or simply Zillow, is an American tech real-estate marketplace company that was founded in 2006[4] by co-executive chairmen Rich Barton[5] and Lloyd Frink, former Microsoft executives and founders of Microsoft spin-off Expedia; Spencer Rascoff, a co-founder of Hotwire.com; David Beitel, Zillow's current chief technology officer; and Kristin Acker, Zillow's current technology leadership advisor.",
                "founded_at" => 2006, //industry => "Real Estate Technology(PropTech), Online Marketplace, Mortgage & Financial Services"
                "headquarters" => "Seattle, Washington, United States",
                "information_website" => "https://www.zillow.com/z/corp/about/",
                "linkedin_url" => "https://www.linkedin.com/company/zillow",
                "twitter_url" => "https://twitter.com/zillow",
                "youtube_url" => "https://www.youtube.com/user/zillownews",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Zillow",
                "career_page_url" => "https://www.zillow.com/careers/"
            ],
            [
                'name' => "SAP",
                "website" => "https://www.sap.com/",
                "about" => "SAP SE is a German multinational software company based in Walldorf, Baden-Württemberg, Germany. The company is the world's largest vendor of enterprise resource planning software, and the most valuable company in Europe.",
                "founded_at" => 1972, //industry => "Enterprise Software, Cloud Computing, Automation"
                "headquarters" => " Walldorf, German",
                "information_website" => "https://www.sap.com/about/company.html",
                "linkedin_url" => "https://www.linkedin.com/company/sap",
                "twitter_url" => "https://twitter.com/sap",
                "youtube_url" => "https://www.youtube.com/@SAP",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/SAP",
                "career_page_url" => "https://jobs.sap.com/"
            ],
            [
                'name' => "Gitlab",
                "website" => "https://gitlab.com/",
                "about" => "GitLab is a complete DevOps platform, delivered as a single application, that enhances the software development lifecycle from planning to monitoring. It provides version control, CI/CD, issue tracking, and more.",
                "founded_at" => 2011, //industry => "Software Development, DevOps, Developer Tools",
                "headquarters" => "San Francisco, California, United States",
                "information_website" => "https://about.gitlab.com/company/",
                "linkedin_url" => "https://www.linkedin.com/company/gitlab-com",
                "twitter_url" => "https://twitter.com/gitlab",
                "youtube_url" => "https://www.youtube.com/channel/UCnMGQ8QHMAnVIsI3xJrihhg",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/GitLab",
                "career_page_url" => "https://about.gitlab.com/jobs/"
            ],
            [
                'name' => "Github",
                "website" => "https://github.com/",
                "about" => "GitHub is a proprietary developer platform that allows developers to create, store, manage, and share their code. It uses Git to provide distributed version control and GitHub itself provides access control, bug tracking, software feature requests, task management, continuous integration, and wikis for every project.",
                "founded_at" => 2008, //industry => "Software Development, DevOps, Developer Tools, Open Source Platforms",
                "headquarters" => "San Francisco, California, United States",
                "information_website" => "https://github.com/about",
                "linkedin_url" => "https://www.linkedin.com/company/github",
                "twitter_url" => "https://twitter.com/github",
                "youtube_url" => "https://www.youtube.com/github",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/GitHub",
                "career_page_url" => "https://www.github.careers/careers-home"
            ],
        ];

        $companies = array_map(fn($company) => [
            'name'  => $company['name'],
            'slug'  => Str::slug($company['name']),
            "website" => $company['website'],
            "about" => $company['about'],
            "founded_at" => !empty($company['founded_at']) ? $company['founded_at'] : 2000,
            "headquarters" => $company['headquarters'],
            "information_website" => $company['information_website'],
            "linkedin_url" => $company['linkedin_url'],
            "twitter_url" => $company['twitter_url'],
            "youtube_url" => $company['youtube_url'],
            "wikipedia_url" => $company['wikipedia_url'],
            "career_page_url" => $company['career_page_url'],
            'logo' => Str::slug($company['name']) . "-logo.svg",
            'mini_logo' => Str::slug($company['name']) . "-mini-logo.svg",
            'created_at' => now(),
            'updated_at' => now()
        ], $companies);

        Company::insert($companies);
    }
}
