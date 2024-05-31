<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_holidays', function (Blueprint $table) {
            $table->bigIncrements('holiday_id');
            $table->string('holiday_name',100);
            $table->integer('numberday');
            $table->date('startingdate');
            $table->date('expirydate');
            $table->string('airyear',100);
            $table->string('calendaryear',100);
            $table->string('spare',100);











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
        Schema::dropIfExists('sys_holidays');
    }
}
