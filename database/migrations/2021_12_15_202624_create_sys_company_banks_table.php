<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysCompanyBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_company_banks', function (Blueprint $table) {
            $table->bigIncrements('comp_id');
            $table->string('bcomp_nameAR',100);
            $table->string('bcomp_ nameEN',100);
            $table->string('type_activity',100);
            $table->string('bcomp_tel',100);
            $table->string('bcomp_fox',100);
            $table->string('bcomp_box',100);
            $table->string('bcomp_address',100);












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
        Schema::dropIfExists('sys_company_banks');
    }
}
