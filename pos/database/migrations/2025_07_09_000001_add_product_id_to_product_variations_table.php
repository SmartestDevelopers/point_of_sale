<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProductIdToProductVariationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Duplicate column, do nothing to avoid error
        // Schema::table('product_variations', function (Blueprint $table) {
        //     $table->unsignedBigInteger('product_id')->after('id')->nullable();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('product_variations', function (Blueprint $table) {
        //     $table->dropColumn('product_id');
        // });
    }
}
