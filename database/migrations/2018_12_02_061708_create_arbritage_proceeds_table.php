<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArbritageProceedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arbitrage_proceeds', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('opening_balance', 8, 2);
            $table->decimal('closing_balance', 8, 2);
            $table->integer('user_count');
            $table->timestamp('closing_time');
            $table->string('status');
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
        Schema::dropIfExists('arbitrage_proceeds');
    }
}
