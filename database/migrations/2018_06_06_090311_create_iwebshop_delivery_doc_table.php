<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopDeliveryDocTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('delivery_doc', function(Blueprint $table)
		{
			$table->increments('id')->comment('发货单ID');
			$table->integer('order_id')->unsigned()->index('order_id')->comment('订单ID');
			$table->integer('user_id')->unsigned()->index('user_id')->comment('用户ID');
			$table->integer('admin_id')->unsigned()->nullable()->default(0)->comment('管理员ID');
			$table->integer('seller_id')->unsigned()->nullable()->default(0)->comment('商户ID');
			$table->string('name')->comment('收货人');
			$table->string('postcode', 6)->nullable()->comment('邮编');
			$table->string('telphone', 20)->nullable()->comment('联系电话');
			$table->integer('country')->unsigned()->nullable()->comment('国ID');
			$table->integer('province')->unsigned()->comment('省ID');
			$table->integer('city')->unsigned()->comment('市ID');
			$table->integer('area')->unsigned()->comment('区ID');
			$table->string('address', 250)->comment('收货地址');
			$table->string('mobile', 20)->nullable()->comment('手机');
			$table->dateTime('time')->comment('创建时间');
			$table->decimal('freight', 15)->default(0.00)->comment('运费');
			$table->string('delivery_code')->comment('物流单号');
			$table->string('delivery_type')->comment('物流方式');
			$table->text('note', 65535)->nullable()->comment('管理员添加的备注信息');
			$table->boolean('if_del')->default(0)->comment('0:未删除 1:已删除');
			$table->integer('freight_id')->unsigned()->nullable()->index('freight_id')->comment('货运公司ID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_delivery_doc');
	}

}
