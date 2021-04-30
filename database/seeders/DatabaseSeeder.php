<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([

            AbaoutSeeder::class,
            CommentSeeder::class,
            ContactFormSeeder::class,
            ContactSeeder::class,
            CounterSeeder::class,
            LogoSeeder::class,
            ProductSeeder::class,
            ProjectSeeder::class,
            RefDescSeeder::class,
            ReferanceSeeder::class,
            ServiceDescSeeder::class,
            ServiceSeeder::class,
            SkillSeeder::class,
            SliderSeeder::class,
            SocialSeeder::class,
            UserSeeder::class,
            VideoBarSeeder::class,

        ]);
    }
}
