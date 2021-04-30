<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Counters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counters', function (Blueprint $table) {
            $table->id();
            $table->string('num1')->nullable();
            $table->string('desc1')->nullable();
            $table->string('num2')->nullable();
            $table->string('desc2')->nullable();
            $table->string('num3')->nullable();
            $table->string('desc3')->nullable();
            $table->string('num4')->nullable();
            $table->string('desc4')->nullable();
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
        //
    }
}
