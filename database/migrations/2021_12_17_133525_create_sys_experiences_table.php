<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_experiences', function (Blueprint $table) {
            $table->bigIncrements('experiences_id');
            $table->string('emply_nameAR',100);
            $table->string('branch_nameAR',100);
            $table->string('dept_name',100);
            $table->integer('experiences');
            $table->string('jop_name',100);
            $table->string('location_job',100);
            $table->date('date_start');
            $table->date('date_end');
            $table->string('finishing_work',100);
            $table->integer('emply_evaluation');
            $table->string('path',100);

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
        Schema::dropIfExists('sys_experiences');
    }
}
