<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysJopdatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_jopdatas', function (Blueprint $table) {
            $table->bigIncrements('jop_id');
            $table->string('qualification',100);
            $table->string('specialties_name',100);
            $table->string('branch_nameAR',100);
            $table->string('dept_name',100);
            $table->string('jopdegree_name',100);
            $table->date('date_hiring');
            $table->string('appointment_letter',100);
            $table->string('emply_nameAR',100);
            $table->string('directmanager',100);
            $table->integer('jopdegree');
















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
        Schema::dropIfExists('sys_jopdatas');
    }
}
