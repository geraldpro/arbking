<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Providers\AppServiceProvider;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number')->nullable();
            $table->string('email', 100)->unique();
            $table->string('password', 100);
			$table->string('currency_type')->nullable();
			$table->string('profile_pic')->nullable();
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles');
            $table->integer('junior_id')->unsigned()->nullable();
            $table->foreign('junior_id')->references('id')->on('roles');
            $table->boolean('confirmed')->default(0);
            $table->boolean('auto_pilot')->default(0);
            $table->string('confirmation_code')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
