<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->integer('goods_id')->unsigned()->index('goods_id')->comment('货品ID');
			$table->string('products_no', 20)->comment('货品的货号(以商品的货号加横线加数字组成)');
			$table->text('spec_array', 65535)->nullable()->comment('json规格数据');
			$table->integer('store_nums')->default(0)->comment('库存');
			$table->decimal('market_price', 15)->default(0.00)->comment('市场价格');
			$table->decimal('sell_price', 15)->default(0.00)->comment('销售价格');
			$table->decimal('cost_price', 15)->default(0.00)->comment('成本价格');
			$table->decimal('weight', 15)->default(0.00)->comment('重量');
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
