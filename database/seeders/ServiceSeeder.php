<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([

            [
                "icon" => "fa fa-wrench",
                "name" => "BAKIM",
                "desc" => "Asansör ve yürüyen merdivenlerin periyodik olarak bakımını yapıyoruz.",
            ],

            [
                "icon" => "fa fa-puzzle-piece",
                "name" => "MODERNIZASYON",
                "desc" => "Asansör ve yürüyen merdivenlerin modernizasyonlarını yapıyoruz.",
            ],

            [
                "icon" => "fa fa-cogs",
                "name" => "KURULUM",
                "desc" => "Asansör ve yürüyen merdiven imalatını ve kurulumlarını yapıyoruz.",
            ],

            [
                "icon" => "fa fa-info",
                "name" => "DESTEK",
                "desc" => "Müşterilerimize problemlerini çözmek için gün boyu destek oluyoruz.",
            ],

            [
                "icon" => "fa fa-plane",
                "name" => "KEŞIF",
                "desc" => "İhtiyaçlarına en uygun çözümleri sunmak için müşterilemizi adreslerinde ziyaret ediyoruz.",
            ],

            [
                "icon" => "fa fa-folder",
                "name" => "PROJELENDIRME",
                "desc" => "Asansör ve yürüyen merdinvenler için kişi ve kurumlara özel projeler sağlıyoruz.",
            ],

        ]);
    }
}
