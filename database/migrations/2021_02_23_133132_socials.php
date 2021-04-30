<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Socials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socials', function (Blueprint $table) {
            $table->id();
            $table->string('email')->default("info@labormuhendislik.com")->nullable();
            $table->string('phone')->default("+90 412 257 63 26")->nullable();
            $table->string('facebook')->default("https://www.facebook.com/")->nullable();
            $table->string('twitter')->default("https://www.twitter.com/")->nullable();
            $table->string('linkedin')->default("https://www.linkedin.com/")->nullable();
            $table->string('youtube')->default("https://www.youtube.com/")->nullable();
            $table->string('instagram')->default("https://www.instagram.com/")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("socials");
    }
}
