<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysPredsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_preds', function (Blueprint $table) {
            $table->bigIncrements('pred_id');
            $table->integer('order_number');
            $table->string('branch_nameAR',100);
            $table->string('dept_name',100);
            $table->string('emply_name',100);
            $table->string('pred_purpose',100);
            $table->string('type',100);
            $table->integer('amount');
            $table->string('currency_name',100);
            $table->string('calculation',100);
            $table->string('months_number',100);
            $table->string('premium',100);
            $table->integer('pred_max');
            $table->date('pred_date');
            $table->date('startdate');
            $table->date('expirydate');
            $table->string('allow_more',100);
            $table->string('order_status',100);
            $table->string('allow_choose',100);




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
        Schema::dropIfExists('sys_preds');
    }
}
