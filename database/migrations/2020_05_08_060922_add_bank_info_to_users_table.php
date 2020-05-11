<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBankInfoToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('bank_name')->nullable();
            $table->string('bank_branch')->nullable();
            $table->text('bank_address')->nullable();
            $table->string('account_number')->nullable();
            $table->string('bank_account_name')->nullable();
            $table->string('bank_account_type')->nullable();
            $table->string('ifsc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('bank_name')->nullable();
            $table->string('bank_branch')->nullable();
            $table->text('bank_address')->nullable();
            $table->string('account_number')->nullable();
            $table->string('bank_account_name')->nullable();
            $table->string('bank_account_type')->nullable();
            $table->string('ifsc')->nullable();
        });
    }
}
