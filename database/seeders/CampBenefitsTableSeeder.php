<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Campbenefits;

class CampBenefitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits = [
            [
                "camp_id" => 1,
                "name" => "Pro Tech Kit"
            ],
            [
                "camp_id" => 1,
                "name" => "1-1 Mentoring Program"
            ],
            [
                "camp_id" => 1,
                "name" => "Future Job Opportunity"
            ],
            [
                "camp_id" => 2,
                "name" => "Pro Tech Kit"
            ],
            [
                "camp_id" => 2,
                "name" => "1-1 Mentoring Program"
            ],
        ];

        Campbenefits::insert($campBenefits);
    }
}
