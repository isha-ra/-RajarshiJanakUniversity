<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramResearchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_researches', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('program_id');
            $table->foreign('program_id')->references('program_id')->on('programs')->onDelete('cascade');
            $table->string('title');
            $table->unsignedInteger('staff_id');
            $table->foreign('staff_id')->references('staff_id')->on('staff')->onDelete('cascade');
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
        Schema::dropIfExists('program_researches');
    }
}
