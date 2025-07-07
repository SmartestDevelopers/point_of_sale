<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductReturnSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_return_sales', function (Blueprint $table) {
            $table->id();
            $table->integer('return_id');
            $table->integer('product_id');
            $table->integer('variant_id')->nullable();
            $table->integer('qty');
            $table->integer('sale_unit_id');
            $table->double('net_unit_price');
            $table->double('discount');
            $table->double('tax_rate');
            $table->double('tax');
            $table->double('total');
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
        Schema::dropIfExists('product_return_sales');
    }
}
