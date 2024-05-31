<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysJopdegreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_jopdegrees', function (Blueprint $table) {
            $table->bigIncrements('jopdegree_id');
            $table->integer('jopdegree');
            $table->string('jopdegree_name',100);
            $table->string('jop_category',100);
            $table->string('annualbonus',100);
            $table->integer('salaryuponappointment');
            $table->integer('salaryuponendservice');
            $table->string('nationality',100);
            $table->string('qualification_hig',100);
            $table->string('qualification_min',100);
           
            $table->integer('year');
            $table->string('note');















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
        Schema::dropIfExists('sys_jopdegrees');
    }
}
