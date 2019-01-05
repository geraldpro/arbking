<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPullInOutOnArbitrageProceedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('arbitrage_proceeds', function (Blueprint $table) {
            $table->double('pull_in', 8, 2)->default(0.00);
            $table->double('pull_out', 8, 2)->default(0.00);
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
            $table->double('pull_in', 20, 8)->default(0.00);
            $table->double('pull_out', 20, 8)->default(0.00);
        });
    }
}
