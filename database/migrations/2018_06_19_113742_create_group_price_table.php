<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGroupPriceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('group_price', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->integer('goods_id')->unsigned()->index('goods_id')->comment('产品ID');
			$table->integer('product_id')->unsigned()->nullable()->index('product_id')->comment('货品ID');
			$table->integer('group_id')->unsigned()->index('group_id')->comment('用户组ID');
			$table->decimal('price', 15)->default(0.00)->comment('价格');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('group_price');
	}

}
