<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopRegimentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('regiment', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title')->comment('团购标题');
			$table->dateTime('start_time')->comment('开始时间');
			$table->dateTime('end_time')->comment('结束时间');
			$table->integer('store_nums')->default(0)->comment('库存量');
			$table->integer('sum_count')->default(0)->comment('已销售量');
			$table->integer('limit_min_count')->default(0)->comment('每人限制最少购买数量');
			$table->integer('limit_max_count')->default(0)->comment('每人限制最多购买数量');
			$table->string('intro')->nullable()->comment('介绍');
			$table->boolean('is_close')->default(0)->comment('是否关闭');
			$table->decimal('regiment_price', 15)->default(0.00)->comment('团购价格');
			$table->decimal('sell_price', 15)->default(0.00)->comment('原来价格');
			$table->integer('goods_id')->unsigned()->index('goods_id')->comment('关联商品id');
			$table->string('img')->nullable()->comment('商品图片');
			$table->smallInteger('sort')->default(99)->index('sort')->comment('排序');
			$table->integer('seller_id')->unsigned()->default(0)->comment('商家ID');
			$table->index(['is_close','start_time','end_time'], 'is_close');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_regiment');
	}

}
