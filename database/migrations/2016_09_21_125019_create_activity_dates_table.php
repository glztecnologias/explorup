<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_dates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sequence')->unsigned();
            $table->integer('total_reservation_quota')->unsigned();
            $table->integer('confirmed_reservation')->unsigned();
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('leader_name',80)->nullable();
            $table->string('status',4);
            $table->timestamps();
            //claves foraneas
            $table->integer('activities_id')->unsigned(); //actividad
            //indexaciones
            $table->index(['activities_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('activity_dates');
    }
}
