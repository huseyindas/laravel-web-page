<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceDescSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_descs')->insert([

            [
                "heading" => "SERVİSLERİMİZ",
                "desc" => "Labor Mühendislik olarak müşterilerimizin asansör ve yürüyen merdiven kullanımlarına güvenle gerçekleştirmeleri için gerekli özveriyle çalışmaktayız.",
            ],

        ]);
    }
}
