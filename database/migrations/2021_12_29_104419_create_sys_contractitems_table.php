<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysContractitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_contractitems', function (Blueprint $table) {
            $table->bigIncrements('contractitem_id');
            $table->string('contracttype_id',100);
            $table->string('contractitem_nameAR',100);
            $table->string('contractitem_nameEN',100);
            $table->integer('item_leve');









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
        Schema::dropIfExists('sys_contractitems');
    }
}
