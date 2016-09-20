<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpinionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opinions', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('score');
            $table->string('comment',300);
            $table->timestamps();
            //claves foraneas
            $table->integer('activities_id')->unsigned(); //actividad
            $table->integer('users_id')->unsigned(); //usuario
            //indexaciones
            $table->index(['score','activities_id','users_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('opinions');
    }
}
