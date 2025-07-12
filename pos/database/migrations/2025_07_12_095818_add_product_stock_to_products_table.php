<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProductStockToProductsTable extends Migration
{
    /**
     * Run the migrations.
     * Adds a product_stock column to the products table for tracking inventory in the POS system.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('product_stock')->nullable()->default(0)->after('product_name')->index();
        });
    }

    /**
     * Reverse the migrations.
     * Drops the product_stock column from the products table.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('product_stock');
        });
    }
}