<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_contracts', function (Blueprint $table) {
            $table->bigIncrements('contract_id');
            $table->string('comp_nameAR',100);
            $table->string('branch_nameAR',100);
            $table->string('dept_name',100);
            $table->string('emply_nameAR',100);
            $table->string('contracttype_name',100);
            $table->date('contract_date');
            $table->date('contract_starting');
            $table->date('contract_end');
            $table->integer('contract_duration');
            $table->date('date_renewal');
            $table->string('contract_status',100);
            $table->string('commission',100);
            $table->integer('contractend_comm');
            $table->float('rate_commission');
            $table->integer('basic_salary');
            $table->string('tickets',100);
            $table->integer('bonuses');
            $table->integer('housing');
            $table->integer('hour_extra');
            $table->integer('transport');
            $table->integer('contact');
            $table->integer('living');
            $table->integer('tickets_number');
            $table->string('tickets_type',100);





















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
        Schema::dropIfExists('sys_contracts');
    }
}
