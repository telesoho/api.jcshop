<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopGoodsAttributeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('goods_attribute', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('goods_id')->unsigned()->index('goods_id')->comment('商品ID');
			$table->integer('attribute_id')->unsigned()->nullable()->comment('属性ID');
			$table->string('attribute_value')->nullable()->comment('属性值');
			$table->integer('model_id')->unsigned()->nullable()->comment('模型ID');
			$table->smallInteger('order')->default(99)->index('order')->comment('排序');
			$table->index(['attribute_id','attribute_value'], 'attribute_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_goods_attribute');
	}

}
