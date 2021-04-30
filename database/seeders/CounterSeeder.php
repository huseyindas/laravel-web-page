<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('counters')->insert([

            [
                "num1" => "297",
                "desc1" => "Periyodik Bakım",
                "num2" => "643",
                "desc2" => "Modernizasyon",
                "num3" => "579",
                "desc3" => "Mutlu Müşteri",
                "num4" => "72",
                "desc4" => "Proje",

            ],

        ]);
    }
}
