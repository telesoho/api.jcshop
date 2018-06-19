<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderGoodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_goods', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->integer('order_id')->unsigned()->index('order_id')->comment('订单ID');
			$table->integer('goods_id')->unsigned()->index('goods_id')->comment('商品ID');
			$table->string('img')->comment('商品图片');
			$table->integer('product_id')->unsigned()->nullable()->default(0)->comment('货品ID');
			$table->decimal('goods_price', 15)->default(0.00)->comment('商品原价');
			$table->decimal('real_price', 15)->default(0.00)->comment('实付金额');
			$table->integer('goods_nums')->default(1)->comment('商品数量');
			$table->decimal('goods_weight', 15)->default(0.00)->comment('重量');
			$table->text('goods_array', 65535)->nullable()->comment('商品和货品名称name和规格value串json数据格式');
			$table->boolean('is_send')->default(0)->comment('是否已发货 0:未发货;1:已发货;2:已经退货');
			$table->integer('delivery_id')->default(0)->comment('配送单ID');
			$table->integer('seller_id')->unsigned()->default(0)->comment('商家ID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('order_goods');
	}

}
