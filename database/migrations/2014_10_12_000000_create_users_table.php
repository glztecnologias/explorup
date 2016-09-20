<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('rut',11)->unique()->nullable();
            $table->string('address',200)->nullable();
            $table->string('phone',15)->nullable();
            $table->string('dni',15)->nullable();
            $table->rememberToken();
            $table->timestamps();
            //indexaciones
            $table->index(['name', 'rut']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
