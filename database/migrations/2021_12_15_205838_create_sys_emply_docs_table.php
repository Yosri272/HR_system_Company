<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysEmplyDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_emply_docs', function (Blueprint $table) {
            $table->bigIncrements('doc_id');
            $table->integer('doc_type_id');
            $table->string('doc_type_name',100);
            $table->date('date_release');
            $table->date('date_Expiry');
            $table->string('issuer',100);
            $table->string('doc_category',100);
            $table->string('branch_nameAR',100);
            $table->string('dept_name',100);
            $table->string('emply_nameAR',100);
            $table->string('attached');














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
        Schema::dropIfExists('sys__emply_docs');
    }
}
