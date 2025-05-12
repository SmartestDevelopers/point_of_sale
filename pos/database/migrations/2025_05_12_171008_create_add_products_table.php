<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_products', function (Blueprint $table) {
            $table->id();
            $table->string('categories');
            $table->string('product_name');
            $table->string('description');
            $table->string('tags');
            $table->boolean('embed_video')->default(true); // false = OFF, true = ON
            $table->string('video_embedded_code');
            $table->string('video_display_setting');
            $table->boolean('in_active')->default(true);
            $table->boolean('is_feature')->default(true);
            $table->string('units');
            $table->string('product_weight');
            $table->string('minimum_order');
            $table->string('maximum_order');
            $table->string('price');
            $table->string('discount');
            $table->boolean('flash_sale')->default(true);
            $table->string('pricing_units');
            $table->string('product_type');
            $table->string('color');
            $table->string('size');
            $table->string('meta_title');
            $table->string('meta_description');
            $table->string('meta_image');
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
        Schema::dropIfExists('add_products');
    }
}
