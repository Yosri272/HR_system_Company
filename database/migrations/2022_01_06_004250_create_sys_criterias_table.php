<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysCriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_criterias', function (Blueprint $table) {
            $table->bigIncrements('criteria_id');
            $table->string('criteria_nameAR',100);
            $table->string('criteria_nameEN',100);
            $table->string('criteria_type',100);
            $table->integer('criteria_degree');





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
        Schema::dropIfExists('sys_criterias');
    }
}
