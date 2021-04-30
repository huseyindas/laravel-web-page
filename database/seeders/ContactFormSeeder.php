<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_forms')->insert([

            [
                "heading" => "BİZE ULAŞIN",
                "desc" => "Labor Mühendislik olarak sizlere ihtiyaçlarınız doğrultusunda destek olmak için buradayız. Bize sadece bir mail kadar uzaksınız. Dilediğiniz zaman, dilediğiniz saatte bizimle buradan iletişime geçebilirsiniz.",
            ],

        ]);
    }
}
