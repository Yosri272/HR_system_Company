<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysHolidaytypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_holidaytypes', function (Blueprint $table) {
            $table->bigIncrements('holidaytype_id');
            $table->string('holidaytype_name',100);
            $table->integer('numberday');
            $table->string('paying',100);





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
        Schema::dropIfExists('sys_holidaytypes');
    }
}
