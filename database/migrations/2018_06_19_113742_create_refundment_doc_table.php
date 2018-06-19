<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRefundmentDocTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('refundment_doc', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('order_no', 20)->default('')->comment('订单号');
			$table->integer('order_id')->unsigned()->index('order_id')->comment('订单id');
			$table->integer('user_id')->unsigned()->index('user_id')->comment('用户ID');
			$table->decimal('amount', 15)->default(0.00)->comment('退款金额');
			$table->dateTime('time')->nullable()->comment('时间');
			$table->integer('admin_id')->unsigned()->nullable()->comment('管理员id');
			$table->boolean('pay_status')->default(0)->comment('退款状态,0:申请退款 1:退款失败 2:退款成功');
			$table->text('content', 65535)->nullable()->comment('申请退款原因');
			$table->dateTime('dispose_time')->nullable()->comment('处理时间');
			$table->text('dispose_idea', 65535)->nullable()->comment('处理意见');
			$table->boolean('if_del')->default(0)->index('if_del')->comment('0:未删除 1:删除');
			$table->text('order_goods_id', 65535)->nullable()->comment('订单与商品关联ID集合');
			$table->integer('seller_id')->unsigned()->default(0)->comment('商家ID');
			$table->string('way', 20)->default('')->comment('退款方式,balance:用户余额 other:其他方式 origin:原路退回');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('refundment_doc');
	}

}
