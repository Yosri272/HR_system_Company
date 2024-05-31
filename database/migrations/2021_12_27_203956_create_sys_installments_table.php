<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysInstallmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_installments', function (Blueprint $table) {
            $table->bigIncrements('installments_id');

            $table->integer('pred_id');
            $table->string('branch_nameAR',100);
            $table->string('dept_name',100);
            $table->string('emply_name',100);
            $table->integer('installments_amount');
            $table->date('payment_date');
            $table->integer('installments_number');
           

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
        Schema::dropIfExists('sys_installments');
    }
}
