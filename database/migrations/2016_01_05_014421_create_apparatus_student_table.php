<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApparatusStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apparatus_student', function (Blueprint $table) {
            // for student
            $table->integer('student_id')->unsigned()->index();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            // for apparatus
            $table->integer('apparatus_id')->unsigned()->index();
            $table->foreign('apparatus_id')->references('id')->on('apparatuss')->onDelete('cascade');

            // create composite primary key
            $table->primary(['student_id', 'apparatus_id']);

            // result
            $table->integer('result');
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
        Schema::drop('apparatus_student');
    }
}
