<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('class');             //商品種類
            $table->string('name');              //商品名稱
            $table->string('photo')->nullable(); //商品圖片
            $table->string('describe');          //商品描述
            $table->char('quantity');            //商品數量
            $table->char('price');               //商品價格
            $table->string('company');           //公司
            $table->string('origin');            //品牌
            $table->timestamps();                //時間
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
