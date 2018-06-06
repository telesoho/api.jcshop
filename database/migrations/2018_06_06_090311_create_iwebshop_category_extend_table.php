<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopCategoryExtendTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('category_extend', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('goods_id')->unsigned()->index('goods_id')->comment('商品ID');
			$table->integer('category_id')->unsigned()->index('category_id')->comment('商品分类ID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_category_extend');
	}

}
