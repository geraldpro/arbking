<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArbitrageRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arbitrage_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('arbitrage_id')->unsigned();
            $table->foreign('arbitrage_id')->references('id')->on('arbitrages');
            $table->boolean('status')->default(0);
            $table->tinyInteger('type')->default(0);
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
        Schema::dropIfExists('arbitrage_requests');
    }
}
