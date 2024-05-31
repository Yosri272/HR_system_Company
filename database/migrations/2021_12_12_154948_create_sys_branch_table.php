<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysBranchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_branch', function (Blueprint $table) {
            $table->bigIncrements('branch_id');
            $table->string('comp_id', 200);
            $table->string('branch_nameAR', 200);
            $table->string('branch_nameEN', 200);
            $table->string('path');
            $table->integer('branch_TEL');
            $table->string('branch_email', 30);
            $table->string('branch_fax', 20);
            $table->string('branch_box', 20);
            $table->string('branch_address', 300);
            $table->string('branch_state');
            $table->string('branch_governor');
            $table->string('branch_local');
            $table->string('branch_webst',50);
            $table->string('FOOTNOTE_R1', 150);
            $table->string('FOOTNOTE_R2', 150);
            $table->string('FOOTNOTE_R3', 150);
            $table->string('FOOTNOTE_L1', 150);
            $table->string('FOOTNOTE_L2', 150);
            $table->string('FOOTNOTE_L3', 100);
            $table->string('notes', 500);
            $table->integer('branch_tak');
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
        Schema::dropIfExists('sys_branch');
    }
}
