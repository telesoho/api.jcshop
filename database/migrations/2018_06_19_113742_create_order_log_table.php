<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_log', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->integer('order_id')->unsigned()->nullable()->index('order_id')->comment('订单id');
			$table->string('user', 20)->nullable()->comment('操作人：顾客或admin或seller');
			$table->string('action', 20)->nullable()->comment('动作');
			$table->dateTime('addtime')->nullable()->comment('添加时间');
			$table->string('result', 10)->nullable()->comment('操作的结果');
			$table->string('note', 100)->nullable()->comment('备注');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('order_log');
	}

}
