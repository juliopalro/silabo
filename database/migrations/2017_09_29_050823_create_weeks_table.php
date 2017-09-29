<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weeks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number')->nullable();
            $table->string('previous_tasks')->nullable();
            $table->string('evaluation_indicators')->nullable();
            $table->string('evaluation_criterial')->nullable();
            $table->string('learning_activity')->nullable();
            $table->string('actitudinal')->nullable();
            $table->string('procedimental')->nullable();
            $table->string('conceptual')->nullable();
            $table->string('terminal_capacity')->nullable();

            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('courses')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weeks');
    }
}
