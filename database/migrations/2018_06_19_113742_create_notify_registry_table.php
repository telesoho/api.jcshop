<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNotifyRegistryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notify_registry', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->integer('goods_id')->unsigned()->index('goods_id')->comment('商品ID');
			$table->integer('user_id')->unsigned()->index('user_id')->comment('用户ID');
			$table->string('email')->nullable()->comment('emaill');
			$table->string('mobile', 20)->nullable()->comment('手机');
			$table->dateTime('register_time')->comment('登记时间');
			$table->dateTime('notify_time')->nullable()->comment('通知时间');
			$table->boolean('notify_status')->default(0)->comment('0未通知1仅邮件通知2仅短信通知3已邮件、短信通知');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('notify_registry');
	}

}
