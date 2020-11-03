<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramSyllabiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_syllabi', function (Blueprint $table) {
            $table->increments('programsyllabusid');
            $table->unsignedInteger('program_id');
            $table->foreign('program_id')->references('program_id')->on('programs')->onDelete('cascade');
            $table->string('syllabus_url');
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
        Schema::dropIfExists('program_syllabi');
    }
}
