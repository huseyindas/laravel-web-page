<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RefDescSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_descs')->insert([

            [
                "heading" => "REFERANSLARIMIZ",
                "desc" => "Labor Mühendislik olarak mutlu ettiğimiz, bizimle çalışmaya devam eden yüzlerce referanslarımızdan sadece birkaçını buraya bırakıyoruz.",
            ],

        ]);
    }
}
