<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('emply_id');
            $table->string('emply_nameAR',100);
            $table->string('emply_NameEN',100);
            $table->Char('type');
            $table->string('nationality');
            $table->string('Social_status');
            $table->string('religion');
            $table->string('occupation');
            $table->date('datebirth');
            $table->string('dateplace');
            $table->string('path',100);
            $table->string('phone_jop',100);
            $table->string('shunt',100);
            $table->string('email',100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone_emerg',100);
            $table->string('phone_country',100);
            $table->string('empyaddress_home');
            $table->string('empyaddress_KSA');
            $table->string('guarantor');
            $table->string('empy_satus');
            $table->string('number_bank');
            $table->integer('IBAN');
            $table->string('Bank');
            $table->string('branch_nameAR');
            $table->string('dept_name');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
