<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysEmployeedepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_employeedeps', function (Blueprint $table) {
            $table->bigIncrements('employeedep_id');
            $table->integer('number_identity');
            $table->string('name',100);
            $table->string('TYPE',100);
            $table->string('nationality',100);
            $table->string('branch_nameAR',100);
            $table->string('social_status',100);
            $table->string('emply_nameAR',100);
            $table->string('dept_name',100);
            $table->date('datebirth');
            $table->string('healthInsurance',100);
            $table->integer('icard');
            $table->string('famle',200);
            $table->string('ticket',200);

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
        Schema::dropIfExists('sys_employeedeps');
    }
}
