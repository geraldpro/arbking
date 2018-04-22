<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Mail;

class CreateStakesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stakes', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('match_id')->unsigned();
            $table->foreign('match_id')->references('id')->on('matches');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
			$table->string('status')->default(0);
			$table->decimal('stake_amount', 10,2)->default(0);
			$table->decimal('yield_amount', 10,2)->default(0);
			$table->decimal('liability_amount', 10,2)->default(0);
            $table->decimal('junior_commission')->default(0);
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
        Schema::dropIfExists('stakes');
    }
}
