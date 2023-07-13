<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topic_trainers', function (Blueprint $table) {
            $table->id('ttId');
            $table->unsignedBigInteger('topicId');
            $table->unsignedBigInteger('trainerId');
            $table->timestamps();

            $table->foreign('topicId')->references('topicId')->on('topics')->onDelete('cascade');
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
        Schema::dropIfExists('topic_trainers');
    }
}
