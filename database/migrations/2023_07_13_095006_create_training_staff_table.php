<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateTrainingStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_staff', function (Blueprint $table) {
            $table->id('tsId');
            $table->string('username');
            $table->string('password');
            $table->string('name');
            $table->integer('age');
            $table->string('email');
            $table->string('telephone');
            $table->date('date_of_birth');
            $table->string('education');
            $table->string('experience');
            $table->string('working_place');
            $table->string('address');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('training_staff');
    }
}
