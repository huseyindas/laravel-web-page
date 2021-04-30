<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReferanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('referances')->insert([

            [
                "logo" => "1.png",
                "name" => " ",
                "desc" => " ",
            ],

            [
                "logo" => "2.png",
                "name" => " ",
                "desc" => " ",
            ],

            [
                "logo" => "3.png",
                "name" => " ",
                "desc" => " ",
            ],

            [
                "logo" => "4.png",
                "name" => " ",
                "desc" => " ",
            ],

            [
                "logo" => "5.png",
                "name" => " ",
                "desc" => " ",
            ],

            [
                "logo" => "6.png",
                "name" => " ",
                "desc" => " ",
            ],

        ]);
    }
}
