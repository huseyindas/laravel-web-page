<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([

            [
                "head1" => "Labor Elevator",
                "mail1" => "info@laborelevator.com",
                "desc1" => "Labor Mühendislik olarak Labor Elevator tescilli markamız ile sizlere hizmet ediyoruz.",
                "head2" => "Labor Mühendislik",
                "mail2" => "info@labormuhendislik.com",
                "desc2" => "Labor Mühendislik olarak Labor Elevator tescilli markamız ile sizlere hizmet ediyoruz.",
                "head3" => "Emek Elektronik",
                "mail3" => "info@emekelektronik.com",
                "desc3" => "Emek Elektronik olarak aynı zamanda güvenlik ve zayıf akım çözümlerimizi sizlere sunuyoruz.",
                "address" => "Peyas Mahallesi 285. Sokak Sönmez Sitesi B Blok Altı No:1 Kayapınar",
                "country" => "Diyarbakır/Turkey",
                "phone1" => "+90 (412) 257 63 26",
                "phone2" => "+90 (541) 257 63 26",

            ],

        ]);
    }
}
