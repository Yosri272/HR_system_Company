<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysDeptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_dept', function (Blueprint $table) {
            $table->bigIncrements('dept_id');
            $table->string('branch_id',200);
            $table->string('dept_name', 200);
            $table->string('dept_director');
            $table->date('Start_date');




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
        Schema::dropIfExists('sys_dept');
    }
}
