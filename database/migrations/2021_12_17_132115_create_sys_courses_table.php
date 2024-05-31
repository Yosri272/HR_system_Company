<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_courses', function (Blueprint $table) {
            $table->bigIncrements('courses_id');
            $table->string('emply_nameAR');
            $table->string('branch_nameAR');
            $table->string('dept_name');
            $table->string('courses_field');
            $table->string('jop_name',100);
            $table->string('job_organisation');
            $table->date('date_release');
            $table->date('date_expiry');
            $table->integer('duration');
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
        Schema::dropIfExists('sys_courses');
    }
}
