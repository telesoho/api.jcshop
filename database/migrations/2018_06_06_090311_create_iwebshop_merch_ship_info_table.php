<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopMerchShipInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('merch_ship_info', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('ship_name')->comment('发货点名称');
			$table->string('ship_user_name')->comment('发货人姓名');
			$table->boolean('sex')->default(0)->comment('性别 0:女 1:男');
			$table->integer('country')->nullable()->comment('国id');
			$table->integer('province')->comment('省id');
			$table->integer('city')->comment('市id');
			$table->integer('area')->comment('地区id');
			$table->string('postcode', 6)->nullable()->comment('邮编');
			$table->string('address')->comment('具体地址');
			$table->string('mobile', 20)->comment('手机');
			$table->string('telphone', 20)->nullable()->comment('电话');
			$table->boolean('is_default')->default(0)->comment('1为默认地址，0则不是');
			$table->text('note', 65535)->nullable()->comment('备注');
			$table->dateTime('addtime')->comment('保存时间');
			$table->boolean('is_del')->default(0)->comment('0为删除，1为显示');
			$table->integer('seller_id')->unsigned()->comment('商家ID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_merch_ship_info');
	}

}
