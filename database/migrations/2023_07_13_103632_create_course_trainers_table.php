<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_trainers', function (Blueprint $table) {
            $table->id('ctId');
            $table->unsignedBigInteger('courseId');
            $table->unsignedBigInteger('trainerId');
            $table->timestamps();

            $table->foreign('courseId')->references('courseId')->on('courses')->onDelete('cascade');
            $table->foreign('trainerId')->references('trainerId')->on('trainers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_trainers');
    }
}
