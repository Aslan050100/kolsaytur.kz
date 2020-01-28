<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductComfortTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_com', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->unsignedBigInteger('pro_id');
            $table->unsignedBigInteger('com_id');
            $table->foreign('pro_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('com_id')->references('id')->on('comforts')->onDelete('cascade');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pro_com');
    }
}
