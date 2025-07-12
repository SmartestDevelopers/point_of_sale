<?php

   use Illuminate\Database\Migrations\Migration;
   use Illuminate\Database\Schema\Blueprint;
   use Illuminate\Support\Facades\Schema;

   class CreateProductStocksTable extends Migration
   {
       public function up()
       {
           Schema::create('product_stocks', function (Blueprint $table) {
               $table->id();
               $table->unsignedBigInteger('product_id');
               $table->unsignedBigInteger('warehouse_id');
               $table->unsignedBigInteger('unit_id');
               $table->integer('quantity');
               $table->string('adjustment_type')->comment('add or subtract');
               $table->string('reference_no')->unique();
               $table->text('note')->nullable();
               $table->unsignedBigInteger('user_id');
               $table->timestamps();

               $table->foreign('product_id')->references('id')->on('products')->onDelete('restrict');
               $table->foreign('warehouse_id')->references('id')->on('warehouses')->onDelete('restrict');
               $table->foreign('unit_id')->references('id')->on('product_units')->onDelete('restrict');
               $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
           });
       }

       public function down()
       {
           Schema::dropIfExists('product_stocks');
       }
   }
