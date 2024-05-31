<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_company', function (Blueprint $table) {
            $table->bigIncrements('comp_id');
            $table->string('comp_nameAR', 100);
            $table->string('comp_NameEN', 100);
            $table->string('type_activity', 100);
            $table->integer('comp_TEL');
            $table->string('comp_FAX', 100);
            $table->string('comp_BOX', 100);
            $table->string('comp_ADDRESS', 100);
            $table->string('path');
            $table->string('NOTES', 100);

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
        Schema::dropIfExists('sys_company');
    }
}
