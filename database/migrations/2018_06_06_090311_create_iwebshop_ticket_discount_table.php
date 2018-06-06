<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopTicketDiscountTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticket_discount', function(Blueprint $table)
		{
			$table->integer('id', true)->comment('ID');
			$table->string('name', 50)->comment('优惠券名称');
			$table->string('code', 50)->comment('优惠码');
			$table->integer('type')->comment('优惠券类型(1:折扣率券 2:抵扣券)');
			$table->decimal('ratio', 15)->default(0.00)->comment('折扣率（折扣比例必须为0~1之间的数值）');
			$table->decimal('money', 15)->default(0.00)->comment('抵扣金额（0<1000）');
			$table->integer('status')->comment('折扣券状态:{1:折扣券有效,2:折扣券已使用}');
			$table->integer('start_time')->comment('开始时间');
			$table->integer('end_time')->comment('结束时间');
			$table->integer('create_time')->comment('创建时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_ticket_discount');
	}

}
