<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('products',function (Blueprint $table){
        $table->increments('id');
        $table->string("codigo");
        $table->string("nombre");
        $table->double("precio_unitario",5,2);
        $table->double("precio_docena",5,2);
        $table->softDeletes();
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
        Schema::drop('products');
    }
}
