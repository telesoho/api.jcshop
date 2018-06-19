<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDeliveryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('delivery', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('name', 50)->nullable()->comment('快递名称');
			$table->string('description', 50)->nullable()->comment('快递描述');
			$table->text('area_groupid', 65535)->nullable()->comment('配送区域id');
			$table->text('firstprice', 65535)->nullable()->comment('配送地址对应的首重价格');
			$table->text('secondprice', 65535)->nullable()->comment('配送地区对应的续重价格');
			$table->boolean('type')->default(0)->comment('配送类型 0先付款后发货 1先发货后付款 2自提点');
			$table->integer('first_weight')->unsigned()->comment('首重重量(克)');
			$table->integer('second_weight')->unsigned()->comment('续重重量(克)');
			$table->decimal('first_price', 15)->default(0.00)->comment('首重价格');
			$table->decimal('second_price', 15)->default(0.00)->comment('续重价格');
			$table->boolean('status')->default(0)->index('status')->comment('开启状态');
			$table->smallInteger('sort')->default(99)->index('sort')->comment('排序');
			$table->boolean('is_save_price')->default(0)->comment('是否支持物流保价 1支持保价 0  不支持保价');
			$table->decimal('save_rate', 15)->default(0.00)->comment('保价费率');
			$table->decimal('low_price', 15)->default(0.00)->comment('最低保价');
			$table->boolean('price_type')->default(0)->comment('费用类型 0统一设置 1指定地区费用');
			$table->boolean('open_default')->default(1)->comment('启用默认费用 1启用 0 不启用');
			$table->boolean('is_delete')->default(0)->comment('是否删除 0:未删除 1:删除');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('delivery');
	}

}
