<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->enum('level', ['newbie', 'amateur','advance', 'expert']);
            $table->text('explanation');
            $table->text('resources');
            $table->integer('category_id')->unsigned()->index();
            $table->foreign('category_id')->references('id')
            ->on('categories');
            $table->boolean('published')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
