<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopCommendGoodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('commend_goods', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('commend_id')->unsigned()->index('commend_id')->comment('推荐类型ID 1:最新商品 2:特价商品 3:热卖排行 4:推荐商品');
			$table->integer('goods_id')->unsigned()->index('goods_id')->comment('商品ID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_commend_goods');
	}

}
