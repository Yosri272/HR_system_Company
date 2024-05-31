<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_currencies', function (Blueprint $table) {
            $table->bigIncrements('currency_id');

            $table->string('currency_name',200);
            $table->string('qr_currency',200);
            $table->float('currency_type');
            $table->integer('currency_rateInOfG');
            $table->string('change',200);










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
        Schema::dropIfExists('sys_currencies');
    }
}
