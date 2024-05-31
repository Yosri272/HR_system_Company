<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysOffervactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_offervactions', function (Blueprint $table) {
            $table->bigIncrements('offervaction_id');
            $table->integer('year');
            $table->string('emply_nameAR',100);
            $table->string('branch_nameAR',100);
            $table->string('dept_name',100);
            $table->string('holidaytype_name',100);
            $table->date('start_form');
            $table->date('end_to');
            $table->integer('numbervactionday');
            $table->integer('numberpaidday');
            $table->integer('numberfreeday');
            $table->integer('numberdaylate');
            $table->integer('backdayemply');
            $table->integer('vactionsalary');
            $table->string('ticketsneed',100);
            $table->string('ticketprice',100);
            $table->integer('contact_number');
            $table->integer('number_alternateemply');
            $table->string('name_alternateemply',100);
            $table->string('jop_alternateemply',100);
            $table->integer('ordernumber');
            $table->string('attachments',100);





















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
        Schema::dropIfExists('sys_offervactions');
    }
}
