<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopPointLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('point_log', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->index('user_id')->comment('用户id');
			$table->dateTime('datetime')->comment('发生时间');
			$table->integer('value')->comment('积分增减 增加正数 减少负数');
			$table->string('intro', 50)->comment('积分改动说明');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_point_log');
	}

}
