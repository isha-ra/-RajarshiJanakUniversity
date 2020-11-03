<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->increments('experience_id');
            $table->unsignedInteger('staff_id');
            $table->foreign('staff_id')->references('staff_id')->on('staff')->onDelete('cascade');
            $table->string('designation');
            $table->date('year_from');
            $table->date('year_to');
            $table->string('previous_organization');

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
        Schema::dropIfExists('experiences');
    }
}
