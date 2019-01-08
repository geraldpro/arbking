<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModeToMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('matches', function (Blueprint $table) {
            $table->string('mode', 10)->nullable();
            $table->string('home_team', 50)->nullable()->change();
            $table->string('away_team', 50)->nullable()->change();
            $table->string('league', 50)->nullable()->change();
            $table->string('selected_market', 50)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matches', function (Blueprint $table) {
            $table->string('mode', 10)->nullable();
            $table->string('home_team', 50)->nullable()->change();
            $table->string('away_team', 50)->nullable()->change();
            $table->string('league', 50)->nullable()->change();
            $table->string('selected_market', 50)->nullable()->change();
        });
    }
}
