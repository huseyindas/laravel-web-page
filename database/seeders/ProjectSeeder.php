<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([

            [
                "image" => "1.jpg",
                "name" => "Project1",
                "desc" => " ",
            ],

            [
                "image" => "2.jpg",
                "name" => "Project2",
                "desc" => " ",
            ],

            [
                "image" => "3.jpg",
                "name" => "Project3",
                "desc" => " ",
            ],

            [
                "image" => "4.jpg",
                "name" => "Project4",
                "desc" => " ",
            ],

            [
                "image" => "5.jpg",
                "name" => "Project5",
                "desc" => " ",
            ],

            [
                "image" => "6.jpg",
                "name" => "Project6",
                "desc" => " ",
            ],

            [
                "image" => "7.jpg",
                "name" => "Project7",
                "desc" => " ",
            ],

            [
                "image" => "8.jpg",
                "name" => "Project8",
                "desc" => " ",
            ],

            [
                "image" => "9.jpg",
                "name" => "Project9",
                "desc" => " ",
            ],

            [
                "image" => "9.jpg",
                "name" => "Project10",
                "desc" => " ",
            ],

            [
                "image" => "9.jpg",
                "name" => "Project11",
                "desc" => " ",
            ],

            [
                "image" => "9.jpg",
                "name" => "Project12",
                "desc" => " ",
            ],

        ]);
    }
}
