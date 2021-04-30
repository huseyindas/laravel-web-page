<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([

            [
                "image" => "1.jpg",
                "name" => "Products1",
                "desc" => " ",
            ],

            [
                "image" => "2.jpg",
                "name" => "Products2",
                "desc" => " ",
            ],

            [
                "image" => "3.jpg",
                "name" => "Products3",
                "desc" => " ",
            ],

            [
                "image" => "4.jpg",
                "name" => "Products4",
                "desc" => " ",
            ],

            [
                "image" => "5.jpg",
                "name" => "Products5",
                "desc" => " ",
            ],

            [
                "image" => "6.jpg",
                "name" => "Products6",
                "desc" => " ",
            ],

            [
                "image" => "7.jpg",
                "name" => "Products7",
                "desc" => " ",
            ],

            [
                "image" => "8.jpg",
                "name" => "Products8",
                "desc" => " ",
            ],

            [
                "image" => "9.jpg",
                "name" => "Products9",
                "desc" => " ",
            ],

            [
                "image" => "9.jpg",
                "name" => "Products10",
                "desc" => " ",
            ],

            [
                "image" => "9.jpg",
                "name" => "Products11",
                "desc" => " ",
            ],

            [
                "image" => "9.jpg",
                "name" => "Products12",
                "desc" => " ",
            ],

        ]);
    }
}
