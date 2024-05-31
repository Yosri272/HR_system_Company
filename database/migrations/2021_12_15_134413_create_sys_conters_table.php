<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysContersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_conters', function (Blueprint $table) {
            $table->bigIncrements('conter_id');
            $table->string('conter_nameAR',200);
            $table->string('conter_nameEN',200);
            $table->string('conter_status');
            $table->string('conter_type',100);
            $table->integer('conter_level');


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
        Schema::dropIfExists('sys_conters');
    }
}
