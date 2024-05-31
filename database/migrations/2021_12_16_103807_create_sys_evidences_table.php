<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysEvidencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_evidences', function (Blueprint $table) {
            $table->bigIncrements('serial_number');
            $table->string('emply_nameAR');
            $table->string('branch_nameAR');
            $table->string('dept_name');
            $table->string('proof_number',100);
            $table->string('proof_type',100);
            $table->date('date_release');
            $table->string('issuer');
            $table->string('country',100);
            $table->date('date_expiry');
            $table->string('guarantor');
            $table->integer('phone_guarantor');
            $table->integer('phone_offwork');
            $table->string('note',100);
            $table->string('path',100);




















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
        Schema::dropIfExists('sys_evidences');
    }
}
