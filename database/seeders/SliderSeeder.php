<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([

            [
                "label1" => "Biz",
                "label2" => "Yaratıcıyız",
                "label3" => "Profesyoneliz",
                "label4" => "Mükemmeliz",
                "label5" => "Değer katar, farklılık yaratırız.",
                "buttonText" => "Bize Ulaşın",
                "buttonLink" => "contact",
                "image" => "slider.jpg",
             ],

            ]);
    }
}
