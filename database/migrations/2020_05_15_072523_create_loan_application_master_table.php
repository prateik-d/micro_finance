<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanApplicationMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_application_master', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('memberhip_package_user_id');
            $table->float('loan_amount');
            $table->float('interest');
            $table->float('paid_amount');
            $table->float('due_amount');
            $table->integer('loan_term_day');
            $table->date('loan_date');
            $table->integer('loan_status');
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
        Schema::dropIfExists('loan_application_master');
    }
}
