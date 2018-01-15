<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->text('question');            
            $table->text('answer')->nullable();            
            $table->integer('listing_id')->unsigned();            
            $table->integer('section_id')->unsigned();            
            $table->foreign('listing_id')->references('id')->on('listings');
            $table->foreign('section_id')->references('id')->on('sections'); 
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
        Schema::dropIfExists('questions');
    }
}
