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
                "information_website" => "https://www.meta.com/about/company-info/",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Samsung",
                "website" => "https://www.samsung.com/",
                "information_website" => "https://www.samsung.com/africa_en/about-us/company-info/",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Apple",
                "website" => "https://www.apple.com/",
                "information_website" => "https://www.apple.com/newsroom/",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Microsoft",
                "website" => "https://www.microsoft.com/",
                "information_website" => "https://www.microsoft.com/en-ng/about",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Google",
                "website" => "https://google.com/",
                "information_website" => "https://about.google/",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Sony",
                "website" => "https://www.sony.com/",
                "information_website" => "https://www.sony.com/en/SonyInfo/design/about/",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "PayPal",
                "website" => "https://www.paypal.com/",
                "information_website" => "https://about.pypl.com/about-us/default.aspx",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Netflix",
                "website" => "https://www.netflix.com/",
                "information_website" => "https://help.netflix.com/en/node/412",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Intel",
                "website" => "https://www.intel.com/",
                "information_website" => "https://www.intel.com/content/www/us/en/company-overview/company-overview.html",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Logitech",
                "website" => "https://www.logitech.com/",
                "information_website" => "https://www.logitech.com/en-us/about.html",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Amazon",
                "website" => "https://www.amazon.com/",
                "information_website" => "https://www.aboutamazon.com/",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Oracle",
                "website" => "https://www.oracle.com/",
                "information_website" => "https://www.oracle.com/ng/corporate/",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Redhat",
                "website" => "https://www.redhat.com",
                "information_website" => "https://www.redhat.com/en/about/company",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "IBM",
                "website" => "https://www.ibm.com/",
                "information_website" => "https://www.ibm.com/about",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "X",
                "website" => "https://x.com/",
                "information_website" => "https://about.x.com/",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Lyft",
                "website" => "https://www.lyft.com/",
                "information_website" => "https://www.lyft.com/business",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Uber",
                "website" => "https://www.uber.com/",
                "information_website" => "https://www.uber.com/us/en/about/",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Stripe",
                "website" => "https://stripe.com/",
                "information_website" => "https://stripe.com/newsroom/",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Roblox",
                "website" => "https://www.roblox.com/",
                "information_website" => "https://corp.roblox.com/",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Coinbase",
                "website" => "https://www.coinbase.com/",
                "information_website" => "https://www.coinbase.com/en-gb/about",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Databricks",
                "website" => "https://www.databricks.com/",
                "information_website" => "https://www.databricks.com/company/about-us",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Snap",
                "website" => "https://www.snapchat.com/",
                "information_website" => "https://www.snap.com/?lang=en-GB",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Salesforce",
                "website" => "https://www.salesforce.com/",
                "information_website" => "https://www.salesforce.com/products/what-is-salesforce/",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "JPMorgan Chase",
                "website" => "https://www.jpmorganchase.com/",
                "information_website" => "https://www.jpmorganchase.com/about",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Capital One",
                "website" => "https://www.capitalone.com/",
                "information_website" => "https://www.capitalone.com/about/",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "ByteDance",
                "website" => "https://www.bytedance.com/en/",
                "information_website" => "",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Xiaomi",
                "website" => "https://www.mi.com/",
                "information_website" => "https://www.mi.com/us/about/",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Alibaba",
                "website" => "https://www.alibaba.com",
                "information_website" => "",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Dell",
                "website" => "https://www.dell.com/",
                "information_website" => "https://www.dell.com/en-us/lp/dt/who-we-are",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Nvidia",
                "website" => "https://www.nvidia.com/",
                "information_website" => "https://www.nvidia.com/en-us/about-nvidia/",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Reddit",
                "website" => "https://www.reddit.com/",
                "information_website" => "",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Bolt",
                "website" => "https://bolt.eu/",
                "information_website" => "https://bolt.eu/en/careers/life-at-bolt/",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Airbnb",
                "website" => "https://www.airbnb.com/",
                "information_website" => "https://www.airbnb.com/release/",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Yelp",
                "website" => "https://www.yelp.com/",
                "information_website" => "https://www.yelp.com/about",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Bloomberg",
                "website" => "https://bloomberg.com/",
                "information_website" => "https://bloomberg.com/context",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Binance",
                "website" => "https://www.binance.com/",
                "information_website" => "https://www.binance.com/en/about",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "DoorDash",
                "website" => "https://www.doordash.com/",
                "information_website" => "https://about.doordash.com/en-us",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Adobe",
                "website" => "https://www.adobe.com/",
                "information_website" => "https://www.adobe.com/about-adobe.html",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "Goldman Sachs",
                "website" => "https://www.goldmansachs.com/",
                "information_website" => "https://www.goldmansachs.com/what-we-do/our-businesses",
                "linkedin_url" => "",
                "twitter_url" => "",
                "youtube_url" => ""
            ],
            [
                'name' => "MasterCard",
                "website" => "https://www.mastercard.com/",
                "information_website" => "https://www.mastercard.us/en-us/vision/who-we-are.html",
                "linkedin_url" => "http://www.linkedin.com/company/mastercard",
                "twitter_url" => "https://x.com/mastercardmena",
                "youtube_url" => "http://www.youtube.com/user/MasterCard"
            ],
            [
                'name' => "Visa",
                "website" => "https://corporate.visa.com/",
                "information_website" => "https://corporate.visa.com/en/about-visa.html",
                "linkedin_url" => "https://www.linkedin.com/company/visa",
                "twitter_url" => "https://x.com/Visa",
                "youtube_url" => ""
            ],
            [
                'name' => "Open AI",
                "website" => "https://openai.com/",
                "information_website" => "https://openai.com/about/",
                "linkedin_url" => "https://www.linkedin.com/company/openai",
                "twitter_url" => "https://x.com/OpenAI",
                "youtube_url" => ""
            ],
            [
                'name' => "Cisco",
                "website" => "https://www.cisco.com/",
                "information_website" => "https://www.cisco.com/c/en/us/about.html",
                "linkedin_url" => "https://www.linkedin.com/company/cisco",
                "twitter_url" => "https://twitter.com/Cisco/",
                "youtube_url" => ""
            ],
            [
                'name' => "Fortinet",
                "website" => "https://www.fortinet.com/",
                "information_website" => "https://www.fortinet.com/corporate/about-us/about-us",
                "linkedin_url" => "https://www.linkedin.com/company/fortinet/",
                "twitter_url" => "https://www.x.com/Fortinet",
                "youtube_url" => "https://www.youtube.com/channel/UCJHo4AuVomwMRzgkA5DQEOA?sub_confirmation=1"
            ],
            [
                'name' => "Atlassian",
                "website" => "https://www.atlassian.com/",
                "information_website" => "https://www.atlassian.com/company",
                "linkedin_url" => "https://www.linkedin.com/company/atlassian",
                "twitter_url" => "https://x.com/atlassian",
                "youtube_url" => "https://www.youtube.com/@Atlassian/featured"
            ],
            [
                'name' => "Twilio",
                "website" => "https://www.twilio.com/en-us",
                "information_website" => "https://www.fortinet.com/corporate/about-us/about-us",
                "linkedin_url" => "https://www.linkedin.com/company/twilio-inc-",
                "twitter_url" => "https://twitter.com/twilio",
                "youtube_url" => "https://www.youtube.com/channel/UCWh3G9LZmZ3q_xWOyPpn8ag"
            ],
            [
                'name' => "Hewlett Packard Enterprise",
                "website" => "https://www.hpe.com/",
                "information_website" => "https://www.hpe.com/emea_europe/en/about.html",
                "linkedin_url" => "https://www.linkedin.com/company/hewlett-packard-enterprise/",
                "twitter_url" => "https://twitter.com/hpe",
                "youtube_url" => "https://www.youtube.com/channel/UCAdEqOhSnzlLBtaapu567AQ"
            ],
            [
                'name' => "Block",
                "website" => "https://block.xyz/",
                "information_website" => "https://block.xyz/news",
                "linkedin_url" => "https://www.linkedin.com/company/joinblock/",
                "twitter_url" => "https://x.com/blocks",
                "youtube_url" => ""
            ],
            [
                'name' => "Citi",
                "website" => "https://www.citi.com/",
                "information_website" => "https://www.citigroup.com/global/about-us",
                "linkedin_url" => "http://www.linkedin.com/company/citi",
                "twitter_url" => "https://twitter.com/Citi",
                "youtube_url" => "http://www.youtube.com/citi"
            ],
            [
                'name' => "Wayfair",
                "website" => "https://www.wayfair.com/",
                "information_website" => "https://www.aboutwayfair.com/",
                "linkedin_url" => "https://www.linkedin.com/company/wayfair",
                "twitter_url" => "https://twitter.com/Wayfair",
                "youtube_url" => "https://www.youtube.com/channel/UCygNJ1TutAAtYlmu0gUMLBA"
            ],
            [
                'name' => "Ikea",
                "website" => "https://www.ikea.com/",
                "information_website" => "https://www.ikea.com/global/en/our-business/",
                "linkedin_url" => "https://www.linkedin.com/company/ikea/",
                "twitter_url" => "https://x.com/ikea",
                "youtube_url" => "https://www.youtube.com/user/IKEA"
            ],
            [
                'name' => "Akamai",
                "website" => "https://www.akamai.com/",
                "information_website" => "https://www.akamai.com/company",
                "linkedin_url" => "https://www.linkedin.com/company/akamai-technologies",
                "twitter_url" => "https://twitter.com/Akamai",
                "youtube_url" => "https://www.youtube.com/user/akamaitechnologies"
            ],
            [
                'name' => "Walmart",
                "website" => "https://www.walmart.com/",
                "information_website" => "https://corporate.walmart.com/",
                "linkedin_url" => "https://www.linkedin.com/company/walmart",
                "twitter_url" => "https://x.com/walmartinc",
                "youtube_url" => "https://www.youtube.com/walmart"
            ],
            [
                'name' => "Zillow",
                "website" => "https://www.zillow.com/",
                "information_website" => "https://www.zillow.com/z/corp/about/",
                "linkedin_url" => "https://www.linkedin.com/company/zillow",
                "twitter_url" => "https://twitter.com/zillow",
                "youtube_url" => "https://www.youtube.com/user/zillownews"
            ],
            [
                'name' => "SAP",
                "website" => "https://www.sap.com/",
                "information_website" => "https://www.sap.com/about/company.html",
                "linkedin_url" => "https://www.linkedin.com/company/sap",
                "twitter_url" => "https://twitter.com/sap",
                "youtube_url" => "https://www.youtube.com/@SAP"
            ],
        ];

        $companies = array_map(fn($company) => [
            'name'  => $company['name'],
            'slug'  => Str::slug($company['name']),
            "website" => $company['website'],
            "information_website" => $company['information_website'],
            "linkedin_url" => $company['linkedin_url'],
            "twitter_url" => $company['twitter_url'],
            "youtube_url" => $company['youtube_url'],
            'logo' => Str::slug($company['name']) . "-logo.svg",
            'mini_logo' => Str::slug($company['name']) . "-mini-logo.svg",
            'created_at' => now(),
            'updated_at' => now()
        ], $companies);

        Company::insert($companies);
    }
}
