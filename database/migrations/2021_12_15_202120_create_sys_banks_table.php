<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_banks', function (Blueprint $table) {
            $table->bigIncrements('bank_id');

            $table->string('bank_nameAR',100);
            $table->string('bank_nameEN',100);
            $table->string('bank_tel',100);
            $table->string('bank_fax',100);
            $table->string('bank_box',100);
            $table->string('bank_address',100);









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
        Schema::dropIfExists('sys_banks');
    }
}
