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
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('phone_number', 13)->nullable();
            $table->string('email', 100)->unique();
            $table->string('dob', 30)->nullable();
            $table->string('country', 30)->nullable();
            $table->string('gender', 8)->nullable();
            $table->string('password', 100);
            $table->integer('account_type_id')->unsigned()->nullable();
            $table->foreign('account_type_id')->references('id')->on('account_types');
            $table->string('wallet_address', 100)->nullable();
			$table->string('profile_pic', 100)->nullable();
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
