<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJuniorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juniors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('senior_id')->unsigned();
            $table->foreign('senior_id')->references('id')->on('users');
            $table->integer('junior_id')->unsigned();
            $table->foreign('junior_id')->references('id')->on('users');
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
        Schema::dropIfExists('juniors');
    }
}
