<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            [
                "email" => "info@labormuhendislik.com",
                "name" => "Hüseyin",
                "password" => Hash::make("Admin123."),
            ],

        ]);
    }
}
