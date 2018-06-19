<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBillTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bill', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->integer('seller_id')->unsigned()->index('seller_id')->comment('商家ID');
			$table->dateTime('apply_time')->nullable()->comment('申请结算时间');
			$table->dateTime('pay_time')->nullable()->comment('支付结算时间');
			$table->integer('admin_id')->unsigned()->nullable()->comment('管理员ID');
			$table->boolean('is_pay')->default(0)->comment('0:未结算,1:已结算');
			$table->text('apply_content', 65535)->nullable()->comment('申请结算文本');
			$table->text('pay_content', 65535)->nullable()->comment('支付结算文本');
			$table->date('start_time')->nullable()->comment('结算起始时间');
			$table->date('end_time')->nullable()->comment('结算终止时间');
			$table->text('log', 65535)->nullable()->comment('结算明细');
			$table->text('order_ids', 65535)->nullable()->comment('order表主键ID，结算的ID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bill');
	}

}
