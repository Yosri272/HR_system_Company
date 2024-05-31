<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysSocialseuritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_socialseurities', function (Blueprint $table) {
            $table->bigIncrements('subscription_id');


            $table->string('emply_nameAR');
            $table->string('branch_nameAR');
            $table->string('dept_name');
            $table->string('subscription_name',100);
            $table->string('wage_basic',100);
            $table->string('subscription_wage',100);
            $table->integer('allowance_housing');
            $table->integer('allowance_comm');
            $table->integer('allowance_other');
            $table->string('Joint_status',100);
            $table->date('date_exclusion');
            $table->float('emply_rate');
            $table->float('comp_rate');
            $table->integer('phone_offwork');
            $table->string('Attached',100);
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
        Schema::dropIfExists('sys_socialseurities');
    }
}
