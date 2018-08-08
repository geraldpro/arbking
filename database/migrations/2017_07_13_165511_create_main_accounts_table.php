<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('account_type_id')->unsigned();
            $table->foreign('account_type_id')->references('id')->on('account_types');
            $table->decimal('deposited_amount', 20, 2);
            $table->decimal('shield_amount', 20, 2);
            $table->decimal('total_amount', 20, 2);
            $table->decimal('threshold_amount', 20, 2);
            $table->decimal('staked_amount', 20, 2)->defaullt(0);
            $table->decimal('withdrawable_amount', 20, 2)->default(0);
            $table->tinyInteger('account_status');
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
        Schema::dropIfExists('main_accounts');
    }
}
