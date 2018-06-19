<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCollectionDocTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('collection_doc', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->integer('order_id')->unsigned()->index('order_id')->comment('订单号');
			$table->integer('user_id')->unsigned()->index('user_id')->comment('用户ID');
			$table->decimal('amount', 15)->default(0.00)->comment('金额');
			$table->dateTime('time')->comment('时间');
			$table->integer('payment_id')->unsigned()->index('payment_id')->comment('支付方式ID');
			$table->integer('admin_id')->unsigned()->nullable()->comment('管理员id');
			$table->boolean('pay_status')->default(0)->comment('支付状态，0:准备，1:支付成功');
			$table->text('note', 65535)->nullable()->comment('收款备注');
			$table->boolean('if_del')->default(0)->index('if_del')->comment('0:未删除 1:删除');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('collection_doc');
	}

}
