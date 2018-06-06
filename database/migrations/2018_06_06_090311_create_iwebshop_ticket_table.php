<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopTicketTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticket', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 50)->comment('代金券名称');
			$table->decimal('value', 15)->default(0.00)->comment('代金券面额值');
			$table->dateTime('start_time')->nullable()->comment('开始时间');
			$table->dateTime('end_time')->nullable()->comment('结束时间');
			$table->smallInteger('point')->default(0)->comment('兑换优惠券所需积分,如果是0表示禁止兑换');
			$table->integer('seller_id')->unsigned()->nullable()->default(0)->comment('卖家ID');
			$table->index(['start_time','end_time'], 'start_time');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_ticket');
	}

}
