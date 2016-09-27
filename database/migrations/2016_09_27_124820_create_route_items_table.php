<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRouteItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route_items', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title',200);
          $table->integer('sequence')->unsigned();
          $table->longText('description')->nullable();
          $table->string('address',150)->nullable();
          $table->string('latitude',45);
          $table->string('longitude',45);
          $table->string('url_photo',150)->nullable();
          $table->string('url_video',150)->nullable();
          $table->timestamps();
          //claves foraneas
          $table->integer('routes_id')->unsigned(); //actividad
          //indexaciones
          $table->index(['title','sequence','routes_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('route_items');
    }
}
