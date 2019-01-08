<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMarginOnArbitrageProceedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('arbitrage_proceeds', function (Blueprint $table) {
            $table->decimal('margin', 8,2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('arbitrage_proceeds', function (Blueprint $table) {
            $table->decimal('margin', 8,2)->nullable();
        });
    }
}
