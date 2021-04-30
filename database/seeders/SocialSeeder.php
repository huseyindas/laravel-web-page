<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('socials')->insert([

            [
                "email" => "info@labormuhendislik.com",
                "phone" => "+90 412 257 63 26",
                "facebook" => " ",
                "twitter" => " ",
                "linkedin" => " ",
                "youtube" => " ",
                "instagram" => " ",

            ],

        ]);
    }
}
