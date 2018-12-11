<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGraduationStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduation_students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_code',100)->unique();
            $table->string('graduation_status')->default('0');
            $table->string('student_email',100)->unique();
            $table->integer('homeroom_id');
            $table->tinyInteger('doneSurvey')->default('0');
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('graduation_students');
    }
}
