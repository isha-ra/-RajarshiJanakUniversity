<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->increments('program_id');
            $table->unsignedInteger('department_id');
            $table->foreign('department_id')->references('department_id')->on('departments');
          $table->string('name');
            $table->longText('description');
            $table->integer('credit_hours');
            $table->integer('semester');
            $table->integer('years_to_complete');
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
        Schema::dropIfExists('programs');
    }
}
