<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaidstatusToPackageusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('packageusers', function (Blueprint $table) {
            $table->integer('paid');
            $table->timestamp('validtill')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('packageusers', function (Blueprint $table) {
            $table->dropColumn('paid');
            $table->dropColumn('validtill');
        });
    }
}
