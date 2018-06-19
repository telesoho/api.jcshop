<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('order_no', 20)->index('order_no')->comment('订单号');
			$table->integer('user_id')->unsigned()->index('user_id')->comment('用户ID');
			$table->integer('pay_type')->comment('用户支付方式ID,当为0时表示货到付款');
			$table->integer('distribution')->nullable()->comment('用户选择的配送ID');
			$table->boolean('status')->nullable()->default(1)->index('status')->comment('订单状态 1生成订单,2支付订单,3取消订单(客户触发),4作废订单(管理员触发),5完成订单,6退款(订单完成后),7部分退款(订单完成后)');
			$table->boolean('pay_status')->nullable()->default(0)->index('pay_status')->comment('支付状态 0：未支付; 1：已支付;');
			$table->boolean('distribution_status')->nullable()->default(0)->index('distribution_status')->comment('配送状态 0：未发送,1：已发送,2：部分发送');
			$table->string('accept_name', 20)->index('accept_name')->comment('收货人姓名');
			$table->string('postcode', 6)->nullable()->comment('邮编');
			$table->string('telphone', 20)->nullable()->comment('联系电话');
			$table->integer('country')->nullable()->comment('国ID');
			$table->integer('province')->nullable()->comment('省ID');
			$table->integer('city')->nullable()->comment('市ID');
			$table->integer('area')->nullable()->comment('区ID');
			$table->string('address', 250)->nullable()->comment('收货地址');
			$table->string('mobile', 20)->nullable()->comment('手机');
			$table->decimal('payable_amount', 15)->nullable()->default(0.00)->comment('应付商品总金额');
			$table->decimal('real_amount', 15)->default(0.00)->comment('实付商品总金额');
			$table->decimal('payable_freight', 15)->default(0.00)->comment('总运费金额');
			$table->decimal('real_freight', 15)->default(0.00)->comment('实付运费');
			$table->dateTime('pay_time')->nullable()->comment('付款时间');
			$table->dateTime('send_time')->nullable()->index('send_time')->comment('发货时间');
			$table->dateTime('create_time')->nullable()->index('create_time')->comment('下单时间');
			$table->dateTime('completion_time')->nullable()->index('completion_time')->comment('订单完成时间');
			$table->boolean('invoice')->default(0)->comment('发票：0不索要1索要');
			$table->string('postscript')->nullable()->comment('用户附言');
			$table->text('note', 65535)->nullable()->comment('管理员备注');
			$table->boolean('if_del')->nullable()->default(0)->index('if_del')->comment('是否删除1为删除');
			$table->decimal('insured', 15)->default(0.00)->comment('保价');
			$table->decimal('pay_fee', 15)->default(0.00)->comment('支付手续费');
			$table->string('invoice_title', 100)->nullable()->comment('发票抬头');
			$table->decimal('taxes', 15)->default(0.00)->comment('税金');
			$table->decimal('promotions', 15)->default(0.00)->comment('促销优惠金额');
			$table->decimal('discount', 15)->default(0.00)->comment('订单折扣或涨价');
			$table->decimal('order_amount', 15)->default(0.00)->index('order_amount')->comment('订单总金额');
			$table->string('prop')->nullable()->comment('使用的道具id');
			$table->string('accept_time', 80)->nullable()->comment('用户收货时间');
			$table->smallInteger('exp')->unsigned()->default(0)->comment('增加的经验');
			$table->smallInteger('point')->unsigned()->default(0)->comment('增加的积分');
			$table->boolean('type')->default(0)->comment('0普通订单,1团购订单,2限时抢购');
			$table->string('trade_no')->nullable()->comment('支付平台交易号');
			$table->integer('takeself')->unsigned()->default(0)->comment('自提点ID');
			$table->string('checkcode')->nullable()->comment('自提方式的验证码');
			$table->integer('active_id')->unsigned()->default(0)->comment('促销活动ID');
			$table->integer('seller_id')->unsigned()->default(0)->index('seller_id')->comment('商家ID');
			$table->boolean('is_checkout')->default(0)->index('is_checkout')->comment('是否给商家结算货款 0:未结算 1:已结算');
			$table->integer('ticket_did')->default(0)->comment('折扣券ID');
			$table->boolean('type_source')->default(0)->comment('1单个商品购买-2购物车购买');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('order');
	}

}
