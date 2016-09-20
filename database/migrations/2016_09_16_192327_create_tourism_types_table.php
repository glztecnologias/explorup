<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourismTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourism_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('description',200)->nullable();
            $table->timestamps();
            $table->index(['name']);
            //->nullable();
            //->unsigned();
            //->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tourism_types');
    }
}
