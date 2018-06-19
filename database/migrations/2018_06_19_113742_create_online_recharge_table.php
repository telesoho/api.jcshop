<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOnlineRechargeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('online_recharge', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->integer('user_id')->unsigned()->index('user_id')->comment('用户id');
			$table->string('recharge_no', 20)->comment('充值单号');
			$table->decimal('account', 15)->default(0.00)->comment('充值金额');
			$table->dateTime('time')->comment('时间');
			$table->string('payment_name', 80)->comment('充值方式名称');
			$table->boolean('status')->default(0)->comment('充值状态 0:未成功 1:充值成功');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('online_recharge');
	}

}
