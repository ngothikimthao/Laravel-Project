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
            $table->Biginteger('id_post')->unsigned();
            $table->integer('id_prod')->unsigned();
            $table->primary(array('id_post','id_prod'));
            $table->foreign('id_prod')->references('id')->on('products');
            $table->foreign('id_post')->references('id')->on('posts');
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
