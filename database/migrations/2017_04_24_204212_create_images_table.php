<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('product_id')->nullable()->unsigned();
            $table->string('product_image');
            $table->timestamps();
        });

        Schema::create('image_product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('image_id')->unsigned();
            $table->integer('product_id')->unsigned();

            // $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            // $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
            // $table->primary(['image_id', 'product_id']);
      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
        Schema::dropIfExists('image_product');
    }
}
