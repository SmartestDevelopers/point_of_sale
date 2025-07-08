<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNameToWarehousesTable extends Migration
{
    public function up()
    {
        Schema::table('warehouses', function (Blueprint $table) {
            $table->string('name')->nullable();
        });
    }

    public function down()
    {
        Schema::table('warehouses', function (Blueprint $table) {
            $table->dropColumn('name');
        });
    }
}
