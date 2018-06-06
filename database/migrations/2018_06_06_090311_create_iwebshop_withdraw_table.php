<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopWithdrawTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('withdraw', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->index('user_id')->comment('用户ID');
			$table->dateTime('time')->comment('时间');
			$table->decimal('amount', 15)->default(0.00)->comment('金额');
			$table->string('name')->comment('开户姓名');
			$table->boolean('status')->default(0)->comment('-1失败,0未处理,1处理中,2成功');
			$table->string('note')->nullable()->comment('用户备注');
			$table->string('re_note')->nullable()->comment('回复备注信息');
			$table->boolean('is_del')->default(0)->comment('0未删除,1已删除');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_withdraw');
	}

}
