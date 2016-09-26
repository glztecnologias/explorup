<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('rut',15);
            $table->dateTime('enrollment_date');
            $table->string('enrollment_type',20)->nullable();
            $table->timestamps();
            //claves foraneas
            $table->integer('activity_dates_id')->unsigned(); //fechas de actividad
            $table->integer('users_id')->unsigned()->nullable(); //usuario que puede ser nulo
            //indexaciones
            $table->index(['rut','activity_dates_id','users_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('participations');
    }
}
