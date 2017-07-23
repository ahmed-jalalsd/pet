<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('product_name');
            $table->string('product_preview')->nullable();
            $table->text('product_description')->nullable();
            $table->integer('category_id')->nullable()->unsigned();
            $table->integer('color_id')->nullable()->unsigned();
            $table->integer('material_id')->nullable()->unsigned();
            $table->integer('size_id')->nullable()->unsigned();
            $table->integer('model_id')->nullable()->unsigned();
            $table->integer('fantasia_id')->nullable()->unsigned();
            $table->string('slug');
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
        Schema::dropIfExists('products');
    }
}
