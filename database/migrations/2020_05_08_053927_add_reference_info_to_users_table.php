<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReferenceInfoToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('ref1_name')->nullable();
            $table->string('ref1_phone')->nullable();
            $table->text('ref1_address')->nullable();
            $table->string('ref2_name')->nullable();
            $table->string('ref2_phone')->nullable();
            $table->text('ref2_address')->nullable();
            $table->string('urgent_contact_name')->nullable();
            $table->string('urgent_contact_phone')->nullable();
            $table->text('urgent_contact_address')->nullable();
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
            $table->string('ref1_name')->nullable();
            $table->string('ref1_phone')->nullable();
            $table->text('ref1_address')->nullable();
            $table->string('ref2_name')->nullable();
            $table->string('ref2_phone')->nullable();
            $table->text('ref2_address')->nullable();
            $table->string('urgent_contact_name')->nullable();
            $table->string('urgent_contact_phone')->nullable();
            $table->text('urgent_contact_address')->nullable();
        });
    }
}
