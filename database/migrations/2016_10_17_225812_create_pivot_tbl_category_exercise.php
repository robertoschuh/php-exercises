<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotTblCategoryExercise extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_exercise', function (Blueprint $table) {
        // Clave primaria.
        $table->increments('id');

        // Fechas cuando se crea el pedido, y cuando se actualiza.
        $table->timestamps();

        // 2 foreign keys (order y product).
        $table->integer('category_id')->unsigned()->index();
        $table->foreign('category_id')->references('id')->on('categories');
        $table->integer('exercise_id')->unsigned()->index();
        $table->foreign('exercise_id')->references('id')->on('exercises');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_exercise');

    }
}
