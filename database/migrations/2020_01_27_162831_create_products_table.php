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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('uniq_id');
            $table->string('name', 100);
            $table->string('slug', 100);
            $table->text('description');
            $table->string('map', 250);
            $table->unsignedBigInteger('product_type_id');
            $table->unsignedBigInteger('city_id');
            $table->double('rating');
            $table->integer('visit');
            $table->timestamps();
            $table->foreign('product_type_id')->references('id')->on('product_types')->onDelete('cascade');
            
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            
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
