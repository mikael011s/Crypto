<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RauHistoriesEditToFloat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rau_histories', function (Blueprint $table) {
            $table->float('old_price')->change();
            $table->float('new_price')->change();
            $table->float('up_percent')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rau_histories', function (Blueprint $table) {
            //
        });
    }
}
