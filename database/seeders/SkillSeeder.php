<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([

            [
                "name" => "BAKIM",
                "value" => "90",
            ],

            [
                "name" => "MODERNIZASYON",
                "value" => "60",
            ],

            [
                "name" => "PROJELENDİRME",
                "value" => "75",
            ],


        ]);
    }
}
