<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccountLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('account_log', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->integer('admin_id')->unsigned()->nullable()->default(0)->index('admin_id')->comment('管理员ID');
			$table->integer('user_id')->unsigned()->nullable()->index('user_id')->comment('用户id');
			$table->boolean('type')->default(0)->comment('0增加,1减少');
			$table->boolean('event')->comment('操作类型，意义请看accountLog类');
			$table->dateTime('time')->comment('发生时间');
			$table->decimal('amount', 15)->comment('金额');
			$table->decimal('amount_log', 15)->comment('每次增减后面的金额记录');
			$table->text('note', 65535)->nullable()->comment('备注');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('account_log');
	}

}
