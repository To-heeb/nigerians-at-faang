<?php

namespace Database\Seeders;

use App\Models\Tag;
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
                'name' => "Meta", //1
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
                'name' => "Samsung", //2
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
                'name' => "Apple", //3
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
                'name' => "Microsoft", //4
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
                'name' => "Google", //5
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
                'name' => "Sony", //6
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
                'name' => "PayPal", //7
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
                'name' => "Netflix", //8
                "website" => "https://www.netflix.com/",
                "about" => "Netflix is an American subscription video on-demand over-the-top streaming service. The service primarily distributes original and acquired films and television shows from various genres, and it is available internationally in multiple languages.",
                "founded_at" => 2007, //industry => "Streaming Entertainment, Data Analytics, Content Production & Licensing"
                "headquarters" => "	Los Gatos, California, United States",
                "information_website" => "https://about.netflix.com/en",
                "linkedin_url" => "https://www.linkedin.com/company/netflix",
                "twitter_url" => "https://x.com/netflix",
                "youtube_url" => "https://www.youtube.com/channel/UCWOA1ZGywLbqmigxE4Qlvuw",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Netflix",
                "career_page_url" => "https://jobs.netflix.com/careers"
            ],
            [
                'name' => "Intel", //9
                "website" => "https://www.intel.com/",
                "about" => "Intel Corporation is an American multinational corporation and technology company headquartered in Santa Clara, California, and incorporated in Delaware. Intel designs, manufactures, and sells computer components such as central processing units and related products for business and consumer markets.",
                "founded_at" => 1968, //industry => "Semiconductors, Edge Computing, Artificial Intelligence, Data Center, Cloud Computing "
                "headquarters" => "Mountain View, California, United States",
                "information_website" => "https://www.intel.com/content/www/us/en/company-overview/company-overview.html",
                "linkedin_url" => "https://www.linkedin.com/company/intel-corporation",
                "twitter_url" => "https://twitter.com/intel",
                "youtube_url" => "https://www.youtube.com/user/channelintel",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Intel",
                "career_page_url" => "https://www.intel.com/content/www/us/en/jobs/life-at-intel.html"
            ],
            [
                'name' => "Logitech", //10
                "website" => "https://www.logitech.com/",
                "about" => "Logitech International S.A is a Swiss multinational manufacturer of computer peripherals and software.",
                "founded_at" => 1981, //industry => "Computer Peripherals, Gaming Hardware"
                "headquarters" => "Lausanne, Switzerland",
                "information_website" => "https://www.logitech.com/en-us/about.html",
                "linkedin_url" => "https://www.linkedin.com/company/logitech",
                "twitter_url" => "https://x.com/logitech",
                "youtube_url" => "https://www.youtube.com/c/logitech",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Logitech",
                "career_page_url" => "https://www.logitech.com/en-eu/careers"
            ],
            [
                'name' => "Amazon", //11
                "website" => "https://www.amazon.com/",
                "about" => "Amazon Inc. is an American multinational technology company engaged in e-commerce, cloud computing, online advertising, digital streaming, and artificial intelligence.The company originally started as an online marketplace for books but gradually expanded its offerings to include a wide range of product categories, referred to as 'The Everything Store'.",
                "founded_at" => 1994, //industry => "Cloud Computing, E-Commerce, Entertainment & Media, Artificial Intelligence"
                "headquarters" => "Seattle, Washington, United States",
                "information_website" => "https://www.aboutamazon.com/",
                "linkedin_url" => "https://www.linkedin.com/company/amazon",
                "twitter_url" => "https://x.com/amazon",
                "youtube_url" => "https://www.youtube.com/user/amazon",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Amazon_(company)",
                "career_page_url" => "https://www.amazon.jobs/en/"
            ],
            [
                'name' => "Oracle", //12
                "website" => "https://www.oracle.com/",
                "about" => "Oracle Corporation is an American multinational computer technology company headquartered in Austin, Texas. Co-founded in 1977 in Santa Clara, California, by Larry Ellison.",
                "founded_at" => 1977, //industry => "Artificial Intelligence, Cloud Computing, Enterprise Software, Database Systems"
                "headquarters" => "Austin, Texas, United States",
                "information_website" => "https://www.oracle.com/ng/corporate/",
                "linkedin_url" => "https://www.linkedin.com/company/oracle",
                "twitter_url" => "https://x.com/oracle",
                "youtube_url" => "http://www.youtube.com/user/Oracle",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Oracle_Corporation",
                "career_page_url" => "https://www.oracle.com/careers/"
            ],
            [
                'name' => "Redhat", //13
                "website" => "https://www.redhat.com",
                "about" => "Red Hat, Inc. (formerly Red Hat Software, Inc.) is an American software company that provides open source software products to enterprises and is a subsidiary of IBM.",
                "founded_at" => 1993, //industry => "DevOps , Enterprise Open-Source Software, Automation, Cloud  Computing"
                "headquarters" => "Raleigh, North Carolina, United States",
                "information_website" => "https://www.redhat.com/en/about/company",
                "linkedin_url" => "https://www.linkedin.com/company/red-hat",
                "twitter_url" => "https://x.com/RedHat?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor",
                "youtube_url" => "https://www.youtube.com/redhat",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Red_Hat",
                "career_page_url" => "https://www.redhat.com/en/jobs"
            ],
            [
                'name' => "IBM", //14
                "website" => "https://www.ibm.com/",
                "about" => "International Business Machines Corporation (using the trademark IBM), nicknamed Big Blue, is an American multinational technology company headquartered in Armonk, New York, and present in over 175 countries.",
                "founded_at" => 1911, //industry => "Enterprise Software, Artificial Intelligence, Cloud Computing, Infrastructure, Consulting & IT Services"
                "headquarters" => "Armonk, New York, United States",
                "information_website" => "https://www.ibm.com/about",
                "linkedin_url" => "https://www.linkedin.com/company/ibm",
                "twitter_url" => "https://x.com/ibm?",
                "youtube_url" => "https://www.youtube.com/ibm",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/IBM",
                "career_page_url" => "https://www.ibm.com/careers/search"
            ],
            [
                'name' => "X", //15
                "website" => "https://x.com/",
                "about" => "Twitter, Inc. was an American social media company based in San Francisco, California, which operated and was named for its flagship social media network prior to its rebrand as X. In addition to Twitter, the company previously operated the Vine short video app and Periscope livestreaming service.",
                "founded_at" => 2006, //industry => "Digital Advertising, Social Media, Artificial Intelligence"
                "headquarters" => "San Francisco, California, United States",
                "information_website" => "https://about.x.com/",
                "linkedin_url" => "https://www.linkedin.com/company/x-corp",
                "twitter_url" => "https://x.com/x",
                "youtube_url" => "https://www.youtube.com/@X.com",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Twitter,_Inc",
                "career_page_url" => "https://careers.x.com/en"
            ],
            [
                'name' => "Lyft", //16
                "website" => "https://www.lyft.com/",
                "about" => "Lyft, Inc. is an American company offering ride-hailing services, motorized scooters, and bicycle-sharing systems in the United States and Canada.",
                "founded_at" => 2012, //industry => "Ride-Hailing, Autonomous Vehicle Technology"
                "headquarters" => "San Francisco, California, United States",
                "information_website" => "https://www.lyft.com/business",
                "linkedin_url" => "https://www.linkedin.com/company/lyft",
                "twitter_url" => "https://x.com/lyft?lang=en",
                "youtube_url" => "https://www.youtube.com/@lyft",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Lyft",
                "career_page_url" => "https://www.lyft.com/careers"
            ],
            [
                'name' => "Uber", //17
                "website" => "https://www.uber.com/",
                "about" => "Uber Technologies, Inc. is an American multinational transportation company that provides ride-hailing services, courier services, food delivery, and freight transport.",
                "founded_at" => 2009, //industry => "Ride-Hailing, Autonomous Vehicle Technology, Food Delivery"
                "headquarters" => "San Francisco, California, United States",
                "information_website" => "https://www.uber.com/us/en/about/",
                "linkedin_url" => "https://www.linkedin.com/company/uber-com/",
                "twitter_url" => "https://x.com/Uber",
                "youtube_url" => "https://www.youtube.com/channel/UCgnxoUwDmmyzeigmmcf0hZA",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Uber",
                "career_page_url" => "https://www.uber.com/us/en/careers/"
            ],
            [
                'name' => "Stripe", //18
                "website" => "https://stripe.com/",
                "about" => "Stripe, Inc. is an Irish-American multinational financial services and software as a service company dual-headquartered in South San Francisco, California, United States, and Dublin, Ireland.",
                "founded_at" => 2010, //industry => "Digital Payments, Fintech Infrastructure, Developer Tools, "
                "headquarters" => "Dublin, Ireland",
                "information_website" => "https://stripe.com/newsroom/",
                "linkedin_url" => "https://www.linkedin.com/company/stripe",
                "twitter_url" => "https://x.com/stripe?lang=en",
                "youtube_url" => "https://www.youtube.com/channel/UCM1guA1E-RHLO2OyfQPOkEQ",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Stripe,_Inc.",
                "career_page_url" => "https://stripe.com/jobs"
            ],
            [
                'name' => "Roblox", //19
                "website" => "https://www.roblox.com/",
                "about" => "Roblox is an online game platform and game creation system developed by Roblox Corporation that allows users to program and play games created by themselves or other users.",
                "founded_at" => 2006, //industry => "Gaming & Interactive Entertainment, Digital Commerce, Education & Learning Tools"
                "headquarters" => "San Mateo, California, United States",
                "information_website" => "https://corp.roblox.com/",
                "linkedin_url" => "https://www.linkedin.com/company/roblox",
                "twitter_url" => "https://x.com/Roblox",
                "youtube_url" => "https://www.youtube.com/@RobloxNoobX",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Roblox",
                "career_page_url" => "https://careers.roblox.com/"
            ],
            [
                'name' => "Coinbase", //20
                "website" => "https://www.coinbase.com/",
                "about" => "Coinbase Global, Inc. is an American cryptocurrency exchange. It was founded in 2012 by Brian Armstrong and Fred Ehrsam. Coinbase has over 100 million users, and is the largest U.S. based cryptocurrency exchange as well as the world's biggest bitcoin custodian, as of 2024.",
                "founded_at" => 2012, //industry => "Cryptocurrency, Blockchain Infrastructure, Cryptocurrency Exchange"
                "headquarters" => "San Francisco, California, United States",
                "information_website" => "https://www.coinbase.com/en-gb/about",
                "linkedin_url" => "https://www.linkedin.com/company/coinbase",
                "twitter_url" => "https://x.com/coinbase?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor",
                "youtube_url" => "https://en.wikipedia.org/wiki/Coinbase",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Coinbase",
                "career_page_url" => "https://www.coinbase.com/careers/positions"
            ],
            [
                'name' => "Databricks", //21
                "website" => "https://www.databricks.com/",
                "about" => "Databricks, Inc. is a global data, analytics, and artificial intelligence company, founded in 2013 by the original creators of Apache Spark. The company provides a cloud-based platform to help enterprises build, scale, and govern data and AI, including generative AI and other machine learning models.",
                "founded_at" => 2013, //industry => "Artificial Intelligence, Machine Learning, Big Data, Enterprise Data Governance"
                "headquarters" => "San Francisco, California, United States",
                "information_website" => "https://www.databricks.com/company/about-us",
                "linkedin_url" => "https://www.linkedin.com/company/databricks",
                "twitter_url" => "https://x.com/databricks",
                "youtube_url" => "https://www.youtube.com/c/Databricks",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Databricks",
                "career_page_url" => "https://www.databricks.com/company/careers"
            ],
            [
                'name' => "Snap", //22
                "website" => "https://www.snapchat.com/",
                "about" => "Snapchat is an American multimedia social media and instant messaging app and service developed by Snap Inc., originally Snapchat Inc. One of the principal features of the app are that pictures and messages, known as 'snaps', are usually available for only a short time before they become inaccessible to their recipients.",
                "founded_at" => 2011, //industry => "Digital Advertising, Social Media, Virtual/Augmented Reality (VR/AR)"
                "headquarters" => "Santa Monica, California, United States",
                "information_website" => "https://www.snap.com/?lang=en-GB",
                "linkedin_url" => "https://www.linkedin.com/company/snap-inc-co",
                "twitter_url" => "https://x.com/snapchat",
                "youtube_url" => "https://www.youtube.com/snapchat",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Snapchat",
                "career_page_url" => "https://careers.snap.com/"
            ],
            [
                'name' => "Salesforce", //23
                "website" => "https://www.salesforce.com/",
                "about" => "Salesforce, Inc. is an American cloud-based software company headquartered in San Francisco, California. It provides applications focused on sales, customer service, marketing automation, e-commerce, analytics, artificial intelligence, and application development.",
                "founded_at" => 1999, //industry => "Enterprise Software, Cloud Computing, Artificial Intelligence, Customer Relationship Management"
                "headquarters" => "San Francisco, California, United States",
                "information_website" => "https://www.salesforce.com/products/what-is-salesforce/",
                "linkedin_url" => "https://www.linkedin.com/company/salesforce",
                "twitter_url" => "https://x.com/salesforce?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor",
                "youtube_url" => "https://www.youtube.com/salesforce",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Salesforce",
                "career_page_url" => "https://careers.salesforce.com/en/"
            ],
            [
                'name' => "JPMorgan Chase", //24
                "website" => "https://www.jpmorganchase.com/",
                "about" => "JPMorgan Chase & Co. (stylized as JPMorganChase) is an American multinational finance corporation headquartered in New York City and incorporated in Delaware. It is the largest bank in the United States, and the world's largest bank by market capitalization.",
                "founded_at" => 2000, //industry => "Commercial Banking, Corporate & Investment Banking, Consumer & Community Banking, Asset & Wealth Management, Fintech Infrastructure"
                "headquarters" => "270 Park Avenue, New York City, United States",
                "information_website" => "https://www.jpmorganchase.com/about",
                "linkedin_url" => "https://www.linkedin.com/company/jpmorganchase",
                "twitter_url" => "https://x.com/jpmorgan",
                "youtube_url" => "https://www.youtube.com/jpmorgan",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/JPMorgan_Chase",
                "career_page_url" => "https://www.jpmorganchase.com/careers"
            ],
            [
                'name' => "Capital One", //25
                "website" => "https://www.capitalone.com/",
                "about" => "Capital One Financial Corporation is an American bank holding company founded on July 21, 1994, and specializing in credit cards, auto loans, banking, and savings accounts, headquartered in Tysons, Virginia, with operations primarily in the United States.",
                "founded_at" => 1994,  //industry => "Commercial Banking, Corporate & Investment Banking, Consumer & Community Banking, Asset & Wealth Management, Fintech Infrastructure"
                "headquarters" => "	Capital One Tower, Tysons, Virginia, United States",
                "information_website" => "https://www.capitalone.com/about/",
                "linkedin_url" => "https://www.linkedin.com/company/capital-one",
                "twitter_url" => "https://x.com/capitalone",
                "youtube_url" => "https://www.youtube.com/user/capitalone",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Capital_One",
                "career_page_url" => "https://www.capitalonecareers.com/"
            ],
            [
                'name' => "ByteDance", //26
                "website" => "https://www.bytedance.com/en/",
                "about" => "ByteDance Ltd. is a Chinese internet technology company headquartered in Haidian, Beijing, and incorporated in the Cayman Islands. Founded by Zhang Yiming, Liang Rubo, and a team of others in 2012, ByteDance developed the video-sharing apps TikTok and Douyin.",
                "founded_at" => 2012, //industry => "Digital Advertising, Social Media, Gaming"
                "headquarters" => "Beijing, China",
                "information_website" => "https://www.bytedance.com/en/",
                "linkedin_url" => "https://www.linkedin.com/company/bytedance/",
                "twitter_url" => "https://x.com/bytedancetalk",
                "youtube_url" => "https://www.youtube.com/c/ByteDance",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/ByteDance",
                "career_page_url" => "https://job.bytedance.com/en/"
            ],
            [
                'name' => "Xiaomi", //27
                "website" => "https://www.mi.com/",
                "about" => "Xiaomi Corporation (Chinese: 小米集团) is a Chinese multinational corporation and technology company headquartered in Beijing, China. It is best known for its consumer electronics, software, and electric vehicles. It is the second-largest manufacturer of smartphones in the world.",
                "founded_at" => 2010, //industry => "Consumer Electronics, Smart Home Devices, E-Commerce, IoT & Smart Home Devices"
                "headquarters" => "Beijing, China",
                "information_website" => "https://www.mi.com/us/about/",
                "linkedin_url" => "https://www.linkedin.com/company/xiaomi-technology/",
                "twitter_url" => "https://x.com/Xiaomi",
                "youtube_url" => "https://www.youtube.com/channel/UCCspJ6mFfCwOV4qFjZWi2wg",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Xiaomi",
                "career_page_url" => "https://www.mi.com/global/careers/"
            ],
            [
                'name' => "Alibaba", //28
                "website" => "https://www.alibaba.com",
                "about" => "Alibaba Group Holding Limited, branded as Alibaba, is a Chinese multinational technology company specializing in e-commerce, retail, Internet, and technology. Founded on 28 June 1999 in Hangzhou, Zhejiang, the company provides consumer-to-consumer (C2C), business-to-consumer (B2C), and business-to-business (B2B) sales services via Chinese and global marketplaces, as well as local consumer, digital media and entertainment, logistics, and cloud computing services.",
                "founded_at" => 1999, //industry => "Cloud Computing, Digital Payments, Financial Services, E-Commerce"
                "headquarters" => "Hangzhou, Zhejiang, China",
                "information_website" => "https://www.alibaba.com",
                "linkedin_url" => "https://www.linkedin.com/company/alibaba-com",
                "twitter_url" => "https://twitter.com/AlibabaB2B",
                "youtube_url" => "https://www.youtube.com/channel/UCSoIxtP6J6oNo_d1njSluxw",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Alibaba_Group",
                "career_page_url" => "https://talent.alibaba.com/en/home"
            ],
            [
                'name' => "Dell", //29
                "website" => "https://www.dell.com/",
                "about" => "Dell Technologies Inc. is an American multinational technology company headquartered in Round Rock, Texas. It was formed as a result of the September 2016 merger of Dell and EMC Corporation.",
                "founded_at" => 2016, //industry => "Edge Computing, Personal Computing, Hardware, Cybersecurity, Data Protection"
                "headquarters" => "	Round Rock, Texas, United States",
                "information_website" => "https://www.dell.com/en-us/lp/dt/who-we-are",
                "linkedin_url" => "https://www.linkedin.com/company/delltechnologies",
                "twitter_url" => "https://x.com/delltech",
                "youtube_url" => "https://www.youtube.com/dell",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Dell_Technologies",
                "career_page_url" => "https://jobs.dell.com/en"
            ],
            [
                'name' => "Nvidia", //30
                "website" => "https://www.nvidia.com/",
                "about" => "Nvidia Corporation is an American multinational corporation and technology company that invents the GPU and drives advances in AI, HPC, gaming, creative design, autonomous vehicles, and robotics.",
                "founded_at" => 1993, //industry => "Artificial Intelligence, Machine Learning, Semiconductors, Cloud Computing, Data Center,, Automotive & Robotics"
                "headquarters" => "Santa Clara, California, United States",
                "information_website" => "https://www.nvidia.com/en-us/about-nvidia/",
                "linkedin_url" => "https://www.linkedin.com/company/nvidia",
                "twitter_url" => "https://x.com/nvidia",
                "youtube_url" => "https://www.youtube.com/user/nvidia",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Nvidia",
                "career_page_url" => "https://www.nvidia.com/en-us/about-nvidia/careers/"
            ],
            [
                'name' => "Reddit", //31
                "website" => "https://www.reddit.com/",
                "about" => "Reddit is an American proprietary social news aggregation and forum social media platform.",
                "founded_at" => 2005, //industry => "Digital Advertising, Social Media, E-Commerce"
                "headquarters" => "San Francisco, California, United States",
                "information_website" => "https://redditinc.com/",
                "linkedin_url" => "https://www.linkedin.com/company/reddit-com",
                "twitter_url" => "https://x.com/Reddit?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor",
                "youtube_url" => "https://www.youtube.com/c/reddit",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Reddit",
                "career_page_url" => "https://redditinc.com/careers"
            ],
            [
                'name' => "Bolt", //32
                "website" => "https://bolt.eu/",
                "about" => "Bolt is an Estonian multinational mobility company that offers ride-hailing, micromobility rental, food and grocery delivery (via the Bolt Food app), and carsharing services.",
                "founded_at" => 2013, //industry => "Ride-Hailing, Food Delivery"
                "headquarters" => "Tallinn, Estonia",
                "information_website" => "https://bolt.eu/en/careers/life-at-bolt/",
                "linkedin_url" => "https://ng.linkedin.com/company/bolt-eu",
                "twitter_url" => "https://x.com/boltapp",
                "youtube_url" => "https://www.youtube.com/@BoltApp",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Bolt_(company)",
                "career_page_url" => "https://bolt.eu/en/careers/"
            ],
            [
                'name' => "Airbnb", //33
                "website" => "https://www.airbnb.com/",
                "about" => "Airbnb, Inc. (an abbreviation of its original name, 'Air Bed and Breakfast') is an American company operating an online marketplace for short-and-long-term homestays, experiences and services in various countries and regions.",
                "founded_at" => 2007, //industry => "Short-Term Rental, Hospitality, Experiential Travel"
                "headquarters" => "San Francisco, California, United States",
                "information_website" => "https://www.airbnb.com/release/",
                "linkedin_url" => "https://www.linkedin.com/showcase/airbnb-for-work",
                "twitter_url" => "https://x.com/Airbnb",
                "youtube_url" => "https://www.youtube.com/channel/UCCww-R0oM_CQWXerBcNyKKw",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Airbnb",
                "career_page_url" => "https://careers.airbnb.com/"
            ],
            [
                'name' => "Yelp", //34
                "website" => "https://www.yelp.com/",
                "about" => "Yelp Inc. is an American company that develops the Yelp.com website and the Yelp mobile app, which publishes crowd-sourced reviews about businesses. It also operates Yelp Guest Manager, a table reservation service.",
                "founded_at" => 2004, //industry => "Digital Advertising, Marketing Services, Local Business Reviews, Enterprise Solutions, Discovery"
                "headquarters" => "San Francisco, California, United States",
                "information_website" => "https://www.yelp.com/about",
                "linkedin_url" => "https://www.linkedin.com/company/yelp-com",
                "twitter_url" => "https://x.com/Yelp",
                "youtube_url" => "https://www.youtube.com/user/yelp",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Yelp",
                "career_page_url" => "https://www.linkedin.com/company/yelp-com"
            ],
            [
                'name' => "Bloomberg", //35
                "website" => "https://bloomberg.com/",
                "about" => "Bloomberg L.P. is an American privately-held financial, software, data, and media company headquartered in Midtown Manhattan, New York City.",
                "founded_at" => 1981, //industry => "Financial Data & Analytics, News & Media, Enterprise Software"
                "headquarters" => "New York, New York, United States",
                "information_website" => "https://bloomberg.com/context",
                "linkedin_url" => "https://www.linkedin.com/company/bloomberg-lp",
                "twitter_url" => "https://twitter.com/bloomberg",
                "youtube_url" => "https://www.youtube.com/@Bloomberg_Livess",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Bloomberg_L.P.",
                "career_page_url" => "https://www.bloomberg.com/company/early-careers/"
            ],
            [
                'name' => "Binance", //36
                "website" => "https://www.binance.com/",
                "about" => "Binance Holdings Ltd., branded Binance, is the largest cryptocurrency exchange in terms of daily trading volume of cryptocurrencies. Binance was founded in 2017 by Changpeng Zhao, a developer who had previously created high-frequency trading software.",
                "founded_at" => 2017, //industry => "Cryptocurrency Exchange, Blockchain Infrastructure, Cryptocurrency"
                "headquarters" => "Unknown",
                "information_website" => "https://www.binance.com/en/about",
                "linkedin_url" => "https://www.linkedin.com/company/binance",
                "twitter_url" => "https://x.com/binance",
                "youtube_url" => "https://www.youtube.com/binanceyoutube",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Binance",
                "career_page_url" => "https://www.binance.com/en/careers"
            ],
            [
                'name' => "DoorDash", //37
                "website" => "https://www.doordash.com/",
                "about" => "DoorDash, Inc. is an American company operating online food ordering and food delivery. It trades under the symbol DASH. With a 56% market share, DoorDash is the largest food delivery platform in the United States",
                "founded_at" => 2012, //industry => "Food Delivery & Logistics, Digital Commerce"
                "headquarters" => "	San Francisco, California, United States",
                "information_website" => "https://about.doordash.com/en-us",
                "linkedin_url" => "https://www.linkedin.com/company/doordash",
                "twitter_url" => "https://x.com/DoorDash",
                "youtube_url" => "https://www.youtube.com/c/DoorDash",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/DoorDash",
                "career_page_url" => "https://careersatdoordash.com/career-areas/"
            ],
            [
                'name' => "Adobe", //38
                "website" => "https://www.adobe.com/",
                "about" => "Adobe Inc., formerly Adobe Systems Incorporated, is an American computer software company based in San Jose, California. It offers a wide range of programs from web design tools, photo manipulation and vector creation, through to video/audio editing, mobile app development, print layout and animation software.",
                "founded_at" => 1982, //industry => "Creative Software, Design Tools, Digital Experience & Marketing, Document Management"
                "headquarters" => "San Jose, California, United States",
                "information_website" => "https://www.adobe.com/about-adobe.html",
                "linkedin_url" => "https://www.linkedin.com/company/adobe/",
                "twitter_url" => "https://x.com/adobe",
                "youtube_url" => "https://www.youtube.com/user/AdobeSystems/Adobe",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Adobe_Inc.",
                "career_page_url" => "https://careers.adobe.com/"
            ],
            [
                'name' => "Goldman Sachs", //39
                "website" => "https://www.goldmansachs.com/",
                "about" => "The Goldman Sachs Group, Inc. is an American multinational investment bank and financial services company.",
                "founded_at" => 1869, //industry => "Investment Banking, Asset & Wealth Management, Consumer & Community Banking"
                "headquarters" => "New York City, New York, United States",
                "information_website" => "https://www.goldmansachs.com/what-we-do/our-businesses",
                "linkedin_url" => "https://www.linkedin.com/company/goldman-sachs",
                "twitter_url" => "https://x.com/GoldmanSachs",
                "youtube_url" => "https://www.youtube.com/user/GoldmanSachs",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Goldman_Sachs",
                "career_page_url" => "https://www.goldmansachs.com/careers"
            ],
            [
                'name' => "MasterCard", //40
                "website" => "https://www.mastercard.com/",
                "about" => "Mastercard Inc., stylized as MasterCard from 1979 to 2016 and as mastercard from 2016 to 2019, is an American multinational payment card services corporation headquartered in Purchase, New York.",
                "founded_at" => 1966, //industry => "Payment Processing, Card Networks, Fintech Infrastructure, Financial Data & Analytics, Digital Payments & Fintech Solutions"
                "headquarters" => "Purchase, Harrison, New York, United States",
                "information_website" => "https://www.mastercard.us/en-us/vision/who-we-are.html",
                "linkedin_url" => "http://www.linkedin.com/company/mastercard",
                "twitter_url" => "https://x.com/mastercardmena",
                "youtube_url" => "http://www.youtube.com/user/MasterCard",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Mastercard",
                "career_page_url" => "https://careers.mastercard.com/"
            ],
            [
                'name' => "Visa", //41
                "website" => "https://corporate.visa.com/",
                "about" => "Visa Inc. is an American multinational payment card services corporation headquartered in San Francisco, California. It facilitates electronic funds transfers throughout the world, most commonly through Visa-branded credit cards, debit cards and prepaid cards.",
                "founded_at" => 1958, //industry => "Payment Processing, Card Networks, Fintech Infrastructure, Financial Data & Analytics, Digital Payments & Fintech Solutions"
                "headquarters" => "San Francisco, California, United States",
                "information_website" => "https://corporate.visa.com/en/about-visa.html",
                "linkedin_url" => "https://www.linkedin.com/company/visa",
                "twitter_url" => "https://x.com/Visa",
                "youtube_url" => "https://www.youtube.com/watch?v=YpZiTrWGmL4",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Visa_Inc.",
                "career_page_url" => "https://corporate.visa.com/en/jobs/"
            ],
            [
                'name' => "Open AI", //42
                "website" => "https://openai.com/",
                "about" => "OpenAI, Inc. is an American artificial intelligence organization founded in December 2015 and headquartered in San Francisco, California. It aims to develop 'safe and beneficial' artificial general intelligence",
                "founded_at" => 2015, //industry => "Artificial Intelligence, Enterprise Solution, Machine Learning"
                "headquarters" => "San Francisco, California, United States",
                "information_website" => "https://openai.com/about/",
                "linkedin_url" => "https://www.linkedin.com/company/openai",
                "twitter_url" => "https://x.com/OpenAI",
                "youtube_url" => "https://www.youtube.com/OpenAI",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/OpenAI",
                "career_page_url" => "https://openai.com/careers/"
            ],
            [
                'name' => "Cisco", //43
                "website" => "https://www.cisco.com/",
                "about" => "Cisco Systems, Inc. is an American multinational digital communications technology conglomerate corporation headquartered in San Jose, California. Cisco develops, manufactures, and sells networking hardware, software, telecommunications equipment and other high-technology services and products.",
                "founded_at" => 1984, //industry => "Cybersecurity, Networking Hardware & Infrastructure"
                "headquarters" => "San Francisco, California, United States",
                "information_website" => "https://www.cisco.com/c/en/us/about.html",
                "linkedin_url" => "https://www.linkedin.com/company/cisco",
                "twitter_url" => "https://twitter.com/Cisco/",
                "youtube_url" => "https://www.youtube.com/user/cisco",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Cisco",
                "career_page_url" => "https://www.cisco.com/c/en/us/about/careers.html"
            ],
            [
                'name' => "Fortinet", //44
                "website" => "https://www.fortinet.com/",
                "about" => "Fortinet, Inc. is an American cybersecurity company with headquarters in Sunnyvale, California. The company develops and sells security solutions like firewalls, endpoint security and intrusion detection systems.",
                "founded_at" => 2000, //industry => "Cybersecurity, Network Security & Infrastructure"
                "headquarters" => "Sunnyvale, California, United States",
                "information_website" => "https://www.fortinet.com/corporate/about-us/about-us",
                "linkedin_url" => "https://www.linkedin.com/company/fortinet/",
                "twitter_url" => "https://www.x.com/Fortinet",
                "youtube_url" => "https://www.youtube.com/channel/UCJHo4AuVomwMRzgkA5DQEOA",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Fortinet",
                "career_page_url" => "https://www.fortinet.com/corporate/careers"
            ],
            [
                'name' => "Atlassian", //45
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
                'name' => "Twilio", //46
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
                'name' => "Hewlett Packard Enterprise", //47
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
                'name' => "Block", //48
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
                'name' => "Citi", //49
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
                'name' => "Wayfair", //50
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
                'name' => "Ikea", //51
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
                'name' => "Akamai", //52
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
                'name' => "Walmart", //53
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
                'name' => "Zillow", //54
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
                'name' => "SAP", //55
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
                'name' => "Gitlab", //56
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
                'name' => "Github", //57
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
            [
                'name' => "Okta", //58
                "website" => "https://www.okta.com/",
                "about" => "Okta, Inc. (formerly SaaSure Inc.) is an American identity and access management company based in San Francisco. It provides cloud software that helps companies manage and secure user authentication into applications, and for developers to build identity controls into applications, websites, web services, and devices.",
                "founded_at" => 2009, //industry => "Security, Developer Tools, Identity & Authentication",
                "headquarters" => "San Francisco, California, United States",
                "information_website" => "https://www.okta.com/company/",
                "linkedin_url" => "https://www.linkedin.com/company/okta-inc-/",
                "twitter_url" => "https://x.com/okta",
                "youtube_url" => "https://www.youtube.com/OktaInc",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Okta,_Inc.",
                "career_page_url" => "https://www.okta.com/company/careers/"
            ],
            [
                'name' => "Grammarly", //59
                "website" => "https://grammarly.com/",
                "about" => "Grammarly is an American English language writing assistant software tool. It reviews the spelling, grammar, and tone of a piece of writing as well as identifying possible instances of plagiarism. It can also suggest style and tonal recommendations to users and produce writing from prompts with its generative AI capabilities.",
                "founded_at" => 2009, //industry => "Artificial Intelligence, Grammar,  ",
                "headquarters" => "San Francisco, California, United States",
                "information_website" => "https://www.grammarly.com/about",
                "linkedin_url" => "https://www.linkedin.com/company/grammarly",
                "twitter_url" => "https://twitter.com/grammarly",
                "youtube_url" => "https://www.youtube.com/OktaInc",
                "wikipedia_url" => "https://en.wikipedia.org/wiki/Grammarly",
                "career_page_url" => "https://www.grammarly.com/careers"
            ],
        ];

        $companies = array_map(fn($company) => [
            'name'  => $company['name'],
            'slug'  => Str::slug($company['name']),
            "website" => $company['website'],
            "about" => $company['about'],
            "founded_at" => $company['founded_at'],
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

        $tags = array_map(fn($company) => [
            'name'  =>  Str::lower($company['name']),
            'slug'  => Str::slug($company['name']),
            'created_at' => now(),
            'updated_at' => now()
        ], $companies);

        Tag::insert($tags);
    }
}
