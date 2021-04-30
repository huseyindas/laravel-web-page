<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([

            [
                "photo" => "avatar-01.jpg",
                "comment" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti doloribus sapiente aliquam incidunt, nostrum voluptas unde dolor quam possimus omnis deserunt magni itaque saepe sunt. Autem neque a laborum provident.",
                "name" => "Michael Jordann",
            ],

            [
                "photo" => "avatar-02.jpg",
                "comment" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti doloribus sapiente aliquam incidunt, nostrum voluptas unde dolor quam possimus omnis deserunt magni itaque saepe sunt. Autem neque a laborum provident.",
                "name" => "Michael Jordann",
            ],

            [
                "photo" => "avatar-03.jpg",
                "comment" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti doloribus sapiente aliquam incidunt, nostrum voluptas unde dolor quam possimus omnis deserunt magni itaque saepe sunt. Autem neque a laborum provident.",
                "name" => "Michael Jordann",
            ],

            [
                "photo" => "avatar-04.jpg",
                "comment" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti doloribus sapiente aliquam incidunt, nostrum voluptas unde dolor quam possimus omnis deserunt magni itaque saepe sunt. Autem neque a laborum provident.",
                "name" => "Michael Jordann",
            ],

        ]);
    }
}
