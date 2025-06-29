<?php

namespace Database\Seeders;

use App\Models\Industry;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $industries = [
            [
                'name' => 'Software Development'
            ],
            [
                'name' => 'DevOps'
            ],
            [
                'name' => 'Open Source Platforms'
            ],
            [
                'name' => 'Developer Tools'
            ],
            [
                'name' => 'Cloud Computing'
            ],
            [
                'name' => 'Enterprise Software'
            ],
            [
                'name' => 'Business Intelligence & Analytics'
            ],
            [
                'name' => 'Automation'
            ],
            [
                'name' => 'Real Estate Technology (PropTech)'
            ],
            [
                'name' => 'Online Marketplaces'
            ],
            [
                'name' => 'Mortgage & Financial Services'
            ],
            [
                'name' => 'Retail'
            ],
            [
                'name' => 'E-Commerce'
            ],
            [
                'name' => 'Supply Chain & Logistics'
            ],
            [
                'name' => 'Healthcare Services'
            ],
            [
                'name' => 'Edge Computing'
            ],
            [
                'name' => 'Cloud Infrastructure'
            ],
            [
                'name' => 'Content Delivery Network'
            ],
            [
                'name' => 'Cloud Security'
            ],
            [
                'name' => 'Media & Streaming Delivery'
            ],
            [
                'name' => 'Furniture Retail'
            ],
            [
                'name' => 'Sustainable Manufacturing & Circular Economy'
            ],
            [
                'name' => 'Food Services & Hospitality'
            ],
            [
                'name' => 'B2B & Trade Services'
            ],
            [
                'name' => 'Banking & Financial Services'
            ],
            [
                'name' => 'Investment Banking'
            ],
            [
                'name' => 'Capital Markets'
            ],
            [
                'name' => 'Global Transaction Services'
            ],
            [
                'name' => 'Credit Cards'
            ],
            [
                'name' => 'Consumer Lending'
            ],
            [
                'name' => 'Financial Technology(Fintech)'
            ],
            [
                'name' => 'Financial Services'
            ],
            [
                'name' => 'Point-of-Sale (POS) Systems'
            ],
            [
                'name' => 'Blockchain'
            ],
            [
                'name' => 'Cryptocurrency'
            ],
            [
                'name' => 'Small Business Services'
            ],
            [
                'name' => 'Enterprise IT Infrastructure'
            ],
            [
                'name' => 'Hybrid Cloud'
            ],
            [
                'name' => 'Artificial Intelligence'
            ],
            [
                'name' => 'Networking & Connectivity'
            ],
            [
                'name' => 'Data Analytics'
            ],
            [
                'name' => 'Cloud Communications Platform as a Service'
            ],
            [
                'name' => 'Customer Engagement & Experience'
            ],
            [
                'name' => 'Software Development Tools'
            ],
            [
                'name' => 'Collaboration & Productivity Software'
            ],
            [
                'name' => 'Cloud-Based Enterprise Solutions'
            ],
            [
                'name' => 'Social Media'
            ],
            [
                'name' => 'Digital Advertising'
            ],
            [
                'name' => 'Virtual/Augmented Reality (VR/AR)'
            ],
            [
                'name' => 'Machine Learning'
            ],
            [
                'name' => 'Consumer Electronics'
            ],
            [
                'name' => 'Software & Services'
            ],
            [
                'name' => 'Semiconductors'
            ],
            [
                'name' => 'Hardware Engineering'
            ],
            [
                'name' => 'Enterprise Service'
            ],
            [
                'name' => 'Productivity Tools'
            ],
            [
                'name' => 'Operating System'
            ],
            [
                'name' => 'Gaming & Interactive Entertainment'
            ],
            [
                'name' => 'Entertainment & Media'
            ],
            [
                'name' => 'Digital Payments'
            ],
            [
                'name' => 'Streaming Entertainment'
            ],
            [
                'name' => 'Content Production & Licensing'
            ],
            [
                'name' => 'Data Center'
            ],
            [
                'name' => 'Computer Peripherals'
            ],
            [
                'name' => 'Gaming Hardware'
            ],
            [
                'name' => 'Database Systems'
            ],
            [
                'name' => 'Enterprise Open-Source Software'
            ],
            [
                'name' => 'Infrastructure'
            ],
            [
                'name' => 'Consulting & IT Services'
            ],
            [
                'name' => 'Ride-Hailing'
            ],
            [
                'name' => 'Autonomous Vehicle Technology'
            ],
            [
                'name' => 'Fintech Infrastructure'
            ],
            [
                'name' => 'Digital Commerce'
            ],
            [
                'name' => 'Education & Learning Tools'
            ],
            [
                'name' => 'Cryptocurrency Exchange'
            ],
            [
                'name' => 'Blockchain Infrastructure'
            ],
            [
                'name' => 'Enterprise Data Governance'
            ],
            [
                'name' => 'Big Data'
            ],
            [
                'name' => 'Customer Relationship Management'
            ],
            [
                'name' => 'Commercial Banking'
            ],
            [
                'name' => 'Corporate & Investment Banking'
            ],
            [
                'name' => 'Consumer & Community Banking'
            ],
            [
                'name' => 'Asset & Wealth Management'
            ],
            [
                'name' => 'Smart Home Devices'
            ],
            [
                'name' => 'IoT & Smart Home Devices'
            ],
            [
                'name' => 'Personal Computing'
            ],
            [
                'name' => 'Hardware'
            ],
            [
                'name' => 'Cybersecurity'
            ],
            [
                'name' => 'Data Protection'
            ],
            [
                'name' => 'Automotive & Robotics'
            ],
            [
                'name' => 'Short-Term Rental'
            ],
            [
                'name' => 'Hospitality'
            ],
            [
                'name' => 'Experiential Travel'
            ],
            [
                'name' => 'Local Business Reviews'
            ],
            [
                'name' => 'Marketing Services'
            ],
            [
                'name' => 'Discovery'
            ],
            [
                'name' => 'Financial Data & Analytics'
            ],
            [
                'name' => 'News & Media'
            ],
            [
                'name' => 'Food Delivery & Logistics'
            ],
            [
                'name' => 'Creative Software'
            ],
            [
                'name' => 'Design Tools'
            ],
            [
                'name' => 'Digital Experience & Marketing'
            ],
            [
                'name' => 'Document Management'
            ],
            [
                'name' => 'Payment Processing'
            ],
            [
                'name' => 'Card Networks'
            ],
            [
                'name' => 'Digital Payments & Fintech Solutions'
            ],
            [
                'name' => 'Networking Hardware & Infrastructure'
            ],
            [
                'name' => 'Network Security & Infrastructure'
            ],
        ];

        $industries = array_map(fn($industry) => [
            'name'  => $industry['name'],
            'slug'  => Str::slug($industry['name']),
            'created_at' => now(),
            'updated_at' => now()
        ], $industries);

        Industry::insert($industries);
    }
}
