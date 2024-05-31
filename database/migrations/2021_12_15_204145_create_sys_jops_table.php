<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysJopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_jops', function (Blueprint $table) {
            $table->bigIncrements('jop_id');
            $table->string('jop_nameAR',100);
            $table->string('jop_nameEN',100);
            $table->string('category_id',100);






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
        Schema::dropIfExists('sys_jops');
    }
}
