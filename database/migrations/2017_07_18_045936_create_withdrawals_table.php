<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWithdrawalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('withdrawal_id');
            $table->string('wallet_address');
            $table->string('coin', 10);
            $table->string('status_text')->default("pending");
            $table->integer('status')->default(0);
            $table->datetime('time_created')->nullable();
            $table->datetime('confirmation_at')->nullable();
            $table->double('amount', 20, 8);
            $table->double('withrawal_fee', 20, 8);
            $table->boolean('is_resolved')->default(0);
            $table->text('payload')->nullabe();
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
        Schema::dropIfExists('withdrawals');
    }
}
