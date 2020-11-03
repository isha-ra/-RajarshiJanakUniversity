<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('staff_id');
            $table->string('name');
            $table->string('staff_img');
            $table->string('address');
            $table->string('designation');
            $table->string('gender');

            $table->boolean('job_status')->default('1');
            $table->integer('contact');
            $table->unsignedInteger('type_id');
            $table->foreign('type_id')->references('type_id')->on('stafftypes');

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
        Schema::dropIfExists('staff');
    }
}
