<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoBarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('video_bars')->insert([

            [
                "background" => "slider.jpg",
                "desc" => "Labor Mühendislik olarak değer katan, farklılık yaratan, rekabet güçlerini arttıran teknoloji, hizmet ve çözümleri sunmak için çalışmalarımıza tam gaz devam ediyoruz.",
                "link" => "https://www.youtube.com/watch?v=re9zg-2Noig",
            ],

        ]);
    }
}
