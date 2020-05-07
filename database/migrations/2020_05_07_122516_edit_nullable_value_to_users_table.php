<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditNullableValueToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name')->nullable()->change();
            $table->text('selfie')->nullable()->change();
            $table->text('address')->nullable()->change();
            $table->text('aadhar_card')->nullable()->change();
            $table->text('pan_card')->nullable()->change();
            $table->string('email')->change();
            $table->string('password')->nullable()->change();
            $table->string('phone')->nullable()->change();
            $table->string('education')->nullable()->change();
            $table->date('doj')->nullable()->change();
            $table->string('marital_status')->nullable()->change();
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
            $table->string('name')->nullable()->change();
            $table->text('selfie')->nullable()->change();
            $table->text('address')->nullable()->change();
            $table->text('aadhar_card')->nullable()->change();
            $table->text('pan_card')->nullable()->change();
            $table->string('email')->change();
            $table->string('password')->nullable()->change();
            $table->string('phone')->nullable()->change();
            $table->string('education')->nullable()->change();
            $table->date('doj')->nullable()->change();
            $table->string('marital_status')->nullable()->change();
        });
    }
}
