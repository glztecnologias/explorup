<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',200);
            $table->longText('description');
            $table->string('status',4);
            $table->longText('instructions');
            $table->longText('restrictions');
            $table->longText('transfers');
            $table->float('cost');
            $table->string('address',150)->nullable();
            $table->string('latitude',45);
            $table->string('longitude',45);
            $table->bigInteger('visit_counter')->unsigned();
            $table->timestamps();
            //claves foraneas
            $table->integer('activity_types_id')->unsigned(); //tipo de actividad
            $table->integer('agencies_id')->unsigned(); //agencia de turismo
            $table->integer('routes_id')->unsigned(); //ruta de actividad
            //indexaciones
            $table->index(['routes_id','activity_types_id','agencies_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('activities');
    }
}
