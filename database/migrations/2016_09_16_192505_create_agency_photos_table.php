<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgencyPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agency_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('url',150);
            $table->timestamps();
            //claves foraneas
            $table->integer('agencies_id')->unsigned(); //agencia de turismo
            //indexaciones
            $table->index(['name','agencies_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('agency_photos');
    }
}
