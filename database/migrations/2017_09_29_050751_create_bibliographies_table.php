<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBibliographiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bibliographies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('author');
            $table->string('title');
            $table->string('edition', 100);
            $table->string('country', 100)->nullable();
            $table->string('editorial', 100);
            $table->integer('year')->nullable();
            $table->integer('pages_number')->nullable();

            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('courses')
            ->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bibliographies');
    }
}
