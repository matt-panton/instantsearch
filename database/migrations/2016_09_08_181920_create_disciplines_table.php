<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisciplinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
        });

        Schema::create('bike_discipline', function (Blueprint $table) {
            $table->increments('id');
        	$table->integer('bike_id')->unsigned();
        	$table->integer('discipline_id')->unsigned();

        	$table->foreign('bike_id')->references('id')->on('bikes');
        	$table->foreign('discipline_id')->references('id')->on('disciplines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disciplines');
        Schema::dropIfExists('bike_discipline');
    }
}
