<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('home_team', 50);
            $table->string('away_team', 50);
            $table->string('league', 50);
            $table->timestamp('kickoff')->nullable();
            $table->boolean('current')->default(0);
            $table->boolean('resolved')->default(0);
            $table->string('selected_market', 50);
            $table->string('selected_odd', 50);
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
        Schema::dropIfExists('matches');
    }
}
