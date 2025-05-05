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
            ],
            [
                'name' => "Samsung",
                "website" => "https://www.samsung.com/",
                "information_website" => "https://www.samsung.com/africa_en/about-us/company-info/",
            ],
            [
                'name' => "Apple",
                "website" => "https://www.apple.com/",
                "information_website" => "https://www.apple.com/newsroom/",
            ],
            [
                'name' => "Microsoft",
                "website" => "https://www.microsoft.com/",
                "information_website" => "https://www.microsoft.com/en-ng/about",
            ],
            [
                'name' => "Google",
                "website" => "https://google.com/",
                "information_website" => "https://about.google/",
            ],
            [
                'name' => "Sony",
                "website" => "https://www.sony.com/",
                "information_website" => "https://www.sony.com/en/SonyInfo/design/about/",
            ],
            [
                'name' => "PayPal",
                "website" => "https://www.paypal.com/",
                "information_website" => "https://about.pypl.com/about-us/default.aspx",
            ],
            [
                'name' => "Netflix",
                "website" => "https://www.netflix.com/",
                "information_website" => "https://help.netflix.com/en/node/412",
            ],
            [
                'name' => "Intel",
                "website" => "https://www.intel.com/",
                "information_website" => "https://www.intel.com/content/www/us/en/company-overview/company-overview.html",
            ],
            [
                'name' => "Logitech",
                "website" => "https://www.logitech.com/",
                "information_website" => "https://www.logitech.com/en-us/about.html",
            ],
            [
                'name' => "Amazon",
                "website" => "https://www.amazon.com/",
                "information_website" => "https://www.aboutamazon.com/",
            ],
            [
                'name' => "Oracle",
                "website" => "https://www.oracle.com/",
                "information_website" => "https://www.oracle.com/ng/corporate/",
            ],
            [
                'name' => "Redhat",
                "website" => "https://www.redhat.com",
                "information_website" => "https://www.redhat.com/en/about/company",
            ],
            [
                'name' => "IBM",
                "website" => "https://www.ibm.com/",
                "information_website" => "https://www.ibm.com/about",
            ],
            [
                'name' => "X",
                "website" => "https://x.com/",
                "information_website" => "https://about.x.com/",
            ],
            [
                'name' => "Lyft",
                "website" => "https://www.lyft.com/",
                "information_website" => "https://www.lyft.com/business",
            ],
            [
                'name' => "Uber",
                "website" => "https://www.uber.com/",
                "information_website" => "https://www.uber.com/us/en/about/",
            ],
            [
                'name' => "Stripe",
                "website" => "https://stripe.com/",
                "information_website" => "https://stripe.com/newsroom/",
            ],
            [
                'name' => "Roblox",
                "website" => "https://www.roblox.com/",
                "information_website" => "https://corp.roblox.com/",
            ],
            [
                'name' => "Coinbase",
                "website" => "https://www.coinbase.com/",
                "information_website" => "https://www.coinbase.com/en-gb/about",
            ],
            [
                'name' => "Databricks",
                "website" => "https://www.databricks.com/",
                "information_website" => "https://www.databricks.com/company/about-us",
            ],
            [
                'name' => "Snap",
                "website" => "https://www.snapchat.com/",
                "information_website" => "https://www.snap.com/?lang=en-GB",
            ],
            [
                'name' => "Salesforce",
                "website" => "https://www.salesforce.com/",
                "information_website" => "https://www.salesforce.com/products/what-is-salesforce/",
            ],
            [
                'name' => "JPMorgan Chase",
                "website" => "https://www.jpmorganchase.com/",
                "information_website" => "https://www.jpmorganchase.com/about",
            ],
            [
                'name' => "Capital One",
                "website" => "https://www.capitalone.com/",
                "information_website" => "https://www.capitalone.com/about/",
            ],
            [
                'name' => "ByteDance",
                "website" => "https://www.bytedance.com/en/",
                "information_website" => "",
            ],
            [
                'name' => "Xiaomi",
                "website" => "https://www.mi.com/",
                "information_website" => "https://www.mi.com/us/about/",
            ],
            [
                'name' => "Alibaba",
                "website" => "https://www.alibaba.com",
                "information_website" => "",
            ],
            [
                'name' => "Dell",
                "website" => "https://www.dell.com/",
                "information_website" => "https://www.dell.com/en-us/lp/dt/who-we-are",
            ],
            [
                'name' => "Nvidia",
                "website" => "https://www.nvidia.com/",
                "information_website" => "https://www.nvidia.com/en-us/about-nvidia/",
            ],
            [
                'name' => "Reddit",
                "website" => "https://www.reddit.com/",
                "information_website" => "",
            ],
            [
                'name' => "Bolt",
                "website" => "https://bolt.eu/",
                "information_website" => "https://bolt.eu/en/careers/life-at-bolt/",
            ],
            [
                'name' => "Airbnb",
                "website" => "https://www.airbnb.com/",
                "information_website" => "https://www.airbnb.com/release/",
            ],
            [
                'name' => "Yelp",
                "website" => "https://www.yelp.com/",
                "information_website" => "https://www.yelp.com/about",
            ],
            [
                'name' => "Bloomberg",
                "website" => "https://bloomberg.com/",
                "information_website" => "https://bloomberg.com/context",
            ],
            [
                'name' => "Binance",
                "website" => "https://www.binance.com/",
                "information_website" => "https://www.binance.com/en/about",
            ],
            [
                'name' => "DoorDash",
                "website" => "https://www.doordash.com/",
                "information_website" => "https://about.doordash.com/en-us",
            ],
            [
                'name' => "Adobe",
                "website" => "https://www.adobe.com/",
                "information_website" => "https://www.adobe.com/about-adobe.html",
            ],
            [
                'name' => "Goldman Sachs",
                "website" => "https://www.goldmansachs.com/",
                "information_website" => "https://www.goldmansachs.com/what-we-do/our-businesses",
            ],
        ];

        $companies = array_map(fn($company) => [
            'name'  => $company['name'],
            'slug'  => Str::slug($company['name']),
            "website" => $company['website'],
            "information_website" => $company['information_website'],
            'logo' => Str::slug($company['name']) . "-logo.svg",
            'mini_logo' => Str::slug($company['name']) . "-mini-logo.svg",
            'created_at' => now(),
            'updated_at' => now()
        ], $companies);

        Company::insert($companies);
    }
}
