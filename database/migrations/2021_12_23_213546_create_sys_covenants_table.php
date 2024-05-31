<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysCovenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_covenants', function (Blueprint $table) {
            $table->bigIncrements('covenant_id');
            $table->string('emply_id',100);
            $table->string('branch_nameAR',100);
            $table->string('dept_name',100);
            $table->integer('covenant_number');
            $table->string('covenant_type',100);
            $table->string('Unit');
            $table->integer('Number');
            $table->string('covenant_status',100);
            $table->string('covenant_purpose',100);
            $table->string('covenant_power');
            $table->date('covenant_date');
            $table->string('move_type',100);
            $table->integer('order_number');














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
        Schema::dropIfExists('sys_covenants');
    }
}
