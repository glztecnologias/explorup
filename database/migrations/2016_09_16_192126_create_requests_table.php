<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('reply_message');
            $table->timestamps();
            //claves foraneas
            $table->integer('activities_id')->unsigned(); //actividad
            $table->integer('users_id')->unsigned(); //usuario
            $table->integer('request_types_id')->unsigned(); //tipo de solicitud
            //indexaciones
            $table->index(['activities_id','users_id','request_types_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('requests');
    }
}
