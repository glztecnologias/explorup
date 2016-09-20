<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('url',150);
            $table->string('default',2);
            $table->timestamps();
            //claves foraneas
            $table->integer('activities_id')->unsigned(); //actividad
            //indexaciones
            $table->index(['name','url','activities_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('videos');
    }
}
