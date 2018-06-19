<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admin', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id')->comment('管理员ID');
			$table->string('admin_name', 20)->index('admin_name')->comment('用户名');
			$table->string('password', 32)->comment('密码');
			$table->integer('role_id')->unsigned()->index('role_id')->comment('角色ID');
			$table->dateTime('create_time')->nullable()->comment('创建时间');
			$table->string('email')->nullable()->comment('Email');
			$table->string('last_ip', 30)->nullable()->comment('最后登录IP');
			$table->dateTime('last_time')->nullable()->comment('最后登录时间');
			$table->boolean('is_del')->default(0)->comment('删除状态 1删除,0正常');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('admin');
	}

}
