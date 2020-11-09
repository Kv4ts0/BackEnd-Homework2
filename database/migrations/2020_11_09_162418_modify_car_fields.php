<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyCarFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->string("name", 30)->nullable()->change();
            $table->string("make", 30)->nullable()->change();
            $table->string("model", 30)->default("No model")->change();
            $table->string("license_number", 30)->nullable()->change();
            $table->float("weight")->default(0)->change();
            $table->float("registration_year")->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
