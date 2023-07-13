<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraineeCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainee_course', function (Blueprint $table) {
            $table->id('tcId');
            $table->unsignedBigInteger('traineeId');
            $table->unsignedBigInteger('courseId');
            $table->timestamps();

            $table->foreign('traineeId')->references('traineeId')->on('trainees')->onDelete('cascade');
            $table->foreign('courseId')->references('courseId')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainee_course');
    }
}
