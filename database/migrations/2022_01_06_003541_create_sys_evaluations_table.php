<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_evaluations', function (Blueprint $table) {
            $table->bigIncrements('evaluation_id');
            $table->string('criteria_nameAR',100);
            $table->string('emply_nameAR',100);
            $table->string('branch_nameAR',100);
            $table->string('dept_name',100);
            $table->string('evaluation_type',100);
            $table->date('date_of');
            $table->date('date_to');
            $table->integer('year');
            $table->string('maig_direct',100);
            $table->string('degree_due',100);
            $table->string('evaluation_status',100);

















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
        Schema::dropIfExists('sys_evaluations');
    }
}
