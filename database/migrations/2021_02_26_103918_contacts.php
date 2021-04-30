<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('head1')->nullable();
            $table->string('mail1')->nullable();
            $table->text('desc1')->nullable();
            $table->string('head2')->nullable();
            $table->string('mail2')->nullable();
            $table->text('desc2')->nullable();
            $table->string('head3')->nullable();
            $table->string('mail3')->nullable();
            $table->text('desc3')->nullable();
            $table->text('address')->nullable();
            $table->text('country')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
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
