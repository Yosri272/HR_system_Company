<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysQualificationempliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_qualificationemplies', function (Blueprint $table) {
            $table->bigIncrements('qualification_id');
            $table->string('qualification',100);
            $table->string('specialization',100);
            $table->string('university',100);
            $table->string('place');
            $table->integer('year_graduation');
            $table->string('emply_nameAR',100);
            $table->string('branch_nameAR',100);
            $table->string('dept_name',100);
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
        Schema::dropIfExists('sys_qualificationemplies');
    }
}
