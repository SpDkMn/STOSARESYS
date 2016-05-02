<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Stocks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('stocks',function (Blueprint $table){
        $table->increments('id');
        $table->integer('product_id')->unsigned();
        $table->string("stock");
        $table->softDeletes();
        $table->timestamps();
        $table->foreign('product_id')
          ->references('id')
          ->on('products')
          ->onDelete('cascade')
          ->onUpdate('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stocks');
    }
}
