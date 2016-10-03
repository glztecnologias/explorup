<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rut',15)->nullable();
            $table->string('name',100);
            $table->string('email',100)->unique();
            $table->string('password',100);
            $table->string('contact_person_name',100)->nullable();
            $table->string('phone',40);
            $table->string('prueba',40);
            $table->string('addres',100);
            $table->string('latitude',45)->nullable();
            $table->string('longitude',45)->nullable();
            $table->string('url_logo',150)->nullable();
            $table->string('url_video',150)->nullable();
            $table->timestamps();
            //claves foraneas
            $table->integer('tourism_types_id')->unsigned(); //tipo de turismo
            //indexaciones
            $table->index(['rut','tourism_types_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('agencies');
    }
}
