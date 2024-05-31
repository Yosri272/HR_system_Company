<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysCovenantitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_covenantitems', function (Blueprint $table) {
            $table->bigIncrements('covenant_id');
            $table->string('covenant_name',100);
            $table->string('covenant_type',100);
            $table->string('Unit',100);
            $table->string('Note',100);






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
        Schema::dropIfExists('sys_covenantitems');
    }
}
