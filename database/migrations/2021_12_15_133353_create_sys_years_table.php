<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysYearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_years', function (Blueprint $table) {
            $table->bigIncrements('year_id');
            $table->integer('years_gregorian');
            $table->integer('years_hijri');
            $table->string('years_status',200);
            $table->date('start_form');
            $table->date('end_to');
            $table->integer('working_daysG');
            $table->integer('working_daysH');





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
        Schema::dropIfExists('sys__years');
    }
}
