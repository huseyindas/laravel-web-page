<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Abaout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abaouts', function (Blueprint $table) {
            $table->id();
            $table->string('head_home')->nullable();
            $table->text('desc_home')->nullable();
            $table->string('head1')->nullable();
            $table->text('mini_desc1')->nullable();
            $table->longText('desc1')->nullable();
            $table->string('head2')->nullable();
            $table->text('mini_desc2')->nullable();
            $table->longText('desc2')->nullable();
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
        Schema::dropIfExists("abaouts");
    }
}
