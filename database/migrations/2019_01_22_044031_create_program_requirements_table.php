<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_requirements', function (Blueprint $table) {
            $table->increments('programrequirement_id');
            $table->unsignedInteger('program_id');
            $table->foreign('program_id')->references('program_id')->on('programs')->onDelete('cascade');
            $table->string('requirement_name');
            $table->longText('description');
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
        Schema::dropIfExists('program_requirements');
    }
}
