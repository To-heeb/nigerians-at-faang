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
                'logo' => "",
            ],
            [
                'name' => "Samsung",
                "website" => "https://www.samsung.com/",
                "information_website" => "https://www.samsung.com/africa_en/about-us/company-info/",
                'logo' => "",
            ],
            [
                'name' => "Apple",
                "website" => "https://www.apple.com/",
                "information_website" => "https://www.apple.com/newsroom/",
                'logo' => "",
            ],
            [
                'name' => "Microsoft",
                "website" => "https://www.microsoft.com/",
                "information_website" => "https://www.microsoft.com/en-ng/about",
                'logo' => "",
            ],
            [
                'name' => "Google",
                "website" => "https://google.com/",
                "information_website" => "https://about.google/",
                'logo' => "",
            ],
            [
                'name' => "Sony",
                "website" => "https://www.sony.com/",
                "information_website" => "https://www.sony.com/en/SonyInfo/design/about/",
                'logo' => "",
            ],
            [
                'name' => "PayPal",
                "website" => "https://www.paypal.com/",
                "information_website" => "https://about.pypl.com/about-us/default.aspx",
                'logo' => "",
            ],
            [
                'name' => "Netflix",
                "website" => "https://www.netflix.com/",
                "information_website" => "https://help.netflix.com/en/node/412",
                'logo' => "",
            ],
            [
                'name' => "Intel",
                "website" => "https://www.intel.com/",
                "information_website" => "https://www.intel.com/content/www/us/en/company-overview/company-overview.html",
                'logo' => "",
            ],
            [
                'name' => "Logitech",
                "website" => "https://www.logitech.com/",
                "information_website" => "https://www.logitech.com/en-us/about.html",
                'logo' => "",
            ],
            [
                'name' => "Amazon",
                "website" => "https://www.amazon.com/",
                "information_website" => "https://www.aboutamazon.com/",
                'logo' => "",
            ],
            [
                'name' => "Oracle",
                "website" => "https://www.oracle.com/",
                "information_website" => "https://www.oracle.com/ng/corporate/",
                'logo' => "",
            ],
            [
                'name' => "Redhat",
                "website" => "https://www.redhat.com",
                "information_website" => "https://www.redhat.com/en/about/company",
                'logo' => "",
            ],
            [
                'name' => "IBM",
                "website" => "https://www.ibm.com/",
                "information_website" => "https://www.ibm.com/about",
                'logo' => "",
            ],
            [
                'name' => "X",
                "website" => "https://x.com/",
                "information_website" => "https://about.x.com/",
                'logo' => "",
            ],
            [
                'name' => "Lyft",
                "website" => "https://www.lyft.com/",
                "information_website" => "https://www.lyft.com/business",
                'logo' => "",
            ],
            [
                'name' => "Uber",
                "website" => "https://www.uber.com/",
                "information_website" => "https://www.uber.com/us/en/about/",
                'logo' => "",
            ],
            [
                'name' => "Stripe",
                "website" => "https://stripe.com/",
                "information_website" => "https://stripe.com/newsroom/",
                'logo' => "",
            ],
            [
                'name' => "Roblox",
                "website" => "https://www.roblox.com/",
                "information_website" => "https://corp.roblox.com/",
                'logo' => "",
            ],
            [
                'name' => "Coinbase",
                "website" => "https://www.coinbase.com/",
                "information_website" => "https://www.coinbase.com/en-gb/about",
                'logo' => "",
            ],
            [
                'name' => "Databricks",
                "website" => "https://www.databricks.com/",
                "information_website" => "https://www.databricks.com/company/about-us",
                'logo' => "",
            ],
            [
                'name' => "Snap",
                "website" => "https://www.snapchat.com/",
                "information_website" => "https://www.snap.com/?lang=en-GB",
                'logo' => "",
            ],
            [
                'name' => "Salesforce",
                "website" => "https://www.salesforce.com/",
                "information_website" => "https://www.salesforce.com/products/what-is-salesforce/",
                'logo' => "",
            ],
            [
                'name' => "JPMorgan Chase",
                "website" => "https://www.jpmorganchase.com/",
                "information_website" => "https://www.jpmorganchase.com/about",
                'logo' => "",
            ],
            [
                'name' => "Capital One",
                "website" => "https://www.capitalone.com/",
                "information_website" => "https://www.capitalone.com/about/",
                'logo' => "",
            ],
            [
                'name' => "ByteDance",
                "website" => "https://www.bytedance.com/en/",
                "information_website" => "",
                'logo' => "",
            ],
            [
                'name' => "Xiaomi",
                "website" => "https://www.mi.com/",
                "information_website" => "https://www.mi.com/us/about/",
                'logo' => "",
            ],
            [
                'name' => "Alibaba",
                "website" => "https://www.alibaba.com",
                "information_website" => "",
                'logo' => "",
            ],
            [
                'name' => "Dell",
                "website" => "https://www.dell.com/",
                "information_website" => "https://www.dell.com/en-us/lp/dt/who-we-are",
                'logo' => "",
            ],
            [
                'name' => "Nvidia",
                "website" => "https://www.nvidia.com/",
                "information_website" => "https://www.nvidia.com/en-us/about-nvidia/",
                'logo' => "",
            ],
            [
                'name' => "Reddit",
                "website" => "https://www.reddit.com/",
                "information_website" => "",
                'logo' => "",
            ],
            [
                'name' => "Bolt",
                "website" => "https://bolt.eu/",
                "information_website" => "https://bolt.eu/en/careers/life-at-bolt/",
                'logo' => "",
            ],
            [
                'name' => "Airbnb",
                "website" => "https://www.airbnb.com/",
                "information_website" => "https://www.airbnb.com/release/",
                'logo' => "",
            ],
            [
                'name' => "Yelp",
                "website" => "https://www.yelp.com/",
                "information_website" => "https://www.yelp.com/about",
                'logo' => "",
            ],
            [
                'name' => "Bloomberg",
                "website" => "https://bloomberg.com/",
                "information_website" => "https://bloomberg.com/context",
                'logo' => "",
            ],
        ];

        $companies = array_map(fn($company) => [
            'name'  => $company['name'],
            'slug'  => Str::slug($company['name']),
            "website" => $company['website'],
            "information_website" => $company['information_website'],
            'logo' => $company['logo'],
            'created_at' => now(),
            'updated_at' => now()
        ], $companies);

        Company::insert($companies);
    }
}
