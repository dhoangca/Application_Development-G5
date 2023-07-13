<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraineesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainees', function (Blueprint $table) {
            $table->id('traineeId');
            $table->string('name');
            $table->integer('age');
            $table->date('date_of_birth');
            $table->string('email');
            $table->string('telephone');
            $table->string('address');
            $table->string('education');
            $table->string('toeic_score');
            $table->string('majors');
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
        Schema::dropIfExists('trainees');
    }
}
