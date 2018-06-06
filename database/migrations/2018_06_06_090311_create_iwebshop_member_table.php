<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopMemberTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('member', function(Blueprint $table)
		{
			$table->integer('user_id')->unsigned()->primary()->comment('用户ID');
			$table->string('true_name', 50)->nullable()->comment('真实姓名');
			$table->string('telephone', 50)->nullable()->comment('联系电话');
			$table->string('mobile', 20)->nullable()->index('mobile')->comment('手机');
			$table->string('area')->nullable()->comment('地区');
			$table->string('contact_addr', 250)->nullable()->comment('联系地址');
			$table->string('qq', 15)->nullable()->comment('QQ');
			$table->boolean('sex')->default(1)->comment('性别1男2女');
			$table->date('birthday')->nullable()->comment('生日');
			$table->integer('group_id')->nullable()->index('group_id')->comment('分组');
			$table->integer('exp')->default(0)->comment('经验值');
			$table->integer('point')->default(0)->comment('积分');
			$table->text('message_ids', 65535)->nullable()->comment('消息ID');
			$table->dateTime('time')->nullable()->comment('注册日期时间');
			$table->string('zip', 10)->nullable()->comment('邮政编码');
			$table->boolean('status')->default(1)->comment('用户状态 1正常状态 2 删除至回收站 3锁定');
			$table->text('prop', 65535)->nullable()->comment('用户拥有的工具');
			$table->decimal('balance', 15)->default(0.00)->comment('用户余额');
			$table->dateTime('last_login')->nullable()->comment('最后一次登录时间');
			$table->string('custom')->nullable()->comment('用户习惯方式,配送和支付方式等信息');
			$table->string('email')->nullable()->index('email')->comment('Email');
			$table->index(['status','true_name'], 'status');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_member');
	}

}
