<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopMarketingSmsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('marketing_sms', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('content')->comment('短信内容');
			$table->integer('send_nums')->unsigned()->default(0)->comment('发送成功数');
			$table->dateTime('time')->comment('发送时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_marketing_sms');
	}

}
