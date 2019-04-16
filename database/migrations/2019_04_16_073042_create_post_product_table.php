<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_post')->unsigned();
            $table->foreign('id_post')->references('id')->on('posts');
            $table->integer('id_prod')->unsigned();
            $table->foreign('id_prod')->references('id')->on('products');
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
        Schema::dropIfExists('post_product');
    }
}
