<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Slider extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('label1')->default("Biz")->nullable();
            $table->string('label2')->default("Profesyoneliz")->nullable();
            $table->string('label3')->default("Mükemmeliz")->nullable();
            $table->string('label4')->default("Yaratıcıyız")->nullable();
            $table->string('label5')->default("Değer katar, farklılık yaratırız.")->nullable();
            $table->string('buttonText')->default("Bize Ulaşın")->nullable();
            $table->string('buttonLink')->default("contact")->nullable();
            $table->string('image')->default("slider.jpg")->nullable();
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
        Schema::dropIfExists("sliders");
    }
}
