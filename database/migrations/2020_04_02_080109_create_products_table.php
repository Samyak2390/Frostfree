<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shop_id')->index();
            $table->unsignedBigInteger('category_id')->index();
            $table->string('product_name');
            $table->unsignedBigInteger('stock_quantity');
            $table->double('price', 8, 2);
            // $table->unsignedInteger('discount')->nullable();
            $table->unsignedBigInteger('min_order');
            $table->unsignedBigInteger('max_order');
            $table->string('description');
            $table->string('allergy_info');
            $table->string('product_image');
            $table->timestamps();

            $table->foreign('shop_id')->references('id')->on('shops');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
