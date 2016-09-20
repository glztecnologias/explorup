<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('description',200)->nullable();
            $table->timestamps();
            //claves foraneas
            $table->integer('tourism_types_id')->unsigned(); //tipo de turismo
            //indexaciones
            $table->index(['name','tourism_types_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('activity_types');
    }
}
