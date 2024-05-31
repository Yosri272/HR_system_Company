<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_licenses', function (Blueprint $table) {
            $table->bigIncrements('licenses_id');
            $table->string('licenses_number',100);
            $table->string('licenses_name',100);
            $table->date('date_release');
            $table->date('date_Expiry');
            $table->date('date_renewal');
            $table->string('place_issue',100);
            $table->string('issuer',100);
            $table->string('version_ststus',100);
            $table->string('activity',100);
            $table->string('path',100);
            $table->string('branch_nameAR',100);



















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
        Schema::dropIfExists('sys__licenses');
    }
}
