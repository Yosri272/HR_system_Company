<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysVacationbalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_vacationbalances', function (Blueprint $table) {
            $table->bigIncrements('vacationbalance_id');
            $table->string('year');
            $table->string('branch_nameAR',100);
            $table->string('dept_name',100);
            $table->string('emply_nameAR',100);
            $table->string('openingtoday',100);
            $table->string('openinghour',100);
            $table->string('balanceday',100);
            $table->string('balancehour',100);
            $table->string('holidaytype_name',100);











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
        Schema::dropIfExists('sys_vacationbalances');
    }
}
