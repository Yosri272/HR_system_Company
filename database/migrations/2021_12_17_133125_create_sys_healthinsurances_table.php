<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysHealthinsurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_healthinsurances', function (Blueprint $table) {

            $table->bigIncrements('inscard_id');
            $table->integer('ins_category');
            $table->integer('ins_validity');
            $table->string('ins_company',100);
            $table->string('emply_nameAR',100);
            $table->string('branch_nameAR',100);
            $table->string('dept_name',100);




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
        Schema::dropIfExists('sys_healthinsurances');
    }
}
