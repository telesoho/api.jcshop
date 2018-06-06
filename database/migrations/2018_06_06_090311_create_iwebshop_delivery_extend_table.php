<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopDeliveryExtendTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('delivery_extend', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('delivery_id')->unsigned()->index('delivery_id')->comment('配送方式关联ID');
			$table->text('area_groupid', 65535)->nullable()->comment('单独配置地区id');
			$table->text('firstprice', 65535)->nullable()->comment('单独配置地区对应的首重价格');
			$table->text('secondprice', 65535)->nullable()->comment('单独配置地区对应的续重价格');
			$table->integer('first_weight')->unsigned()->comment('首重重量(克)');
			$table->integer('second_weight')->unsigned()->comment('续重重量(克)');
			$table->decimal('first_price', 15)->default(0.00)->comment('默认首重价格');
			$table->decimal('second_price', 15)->default(0.00)->comment('默认续重价格');
			$table->boolean('is_save_price')->default(0)->comment('是否支持物流保价 1支持保价 0  不支持保价');
			$table->decimal('save_rate', 15)->default(0.00)->comment('保价费率');
			$table->decimal('low_price', 15)->default(0.00)->comment('最低保价');
			$table->boolean('price_type')->default(0)->comment('费用类型 0统一设置 1指定地区费用');
			$table->boolean('open_default')->default(1)->comment('启用默认费用 1启用 0 不启用');
			$table->integer('seller_id')->unsigned()->index('seller_id')->comment('商家ID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_delivery_extend');
	}

}
