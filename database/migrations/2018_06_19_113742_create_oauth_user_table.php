<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOauthUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oauth_user', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('oauth_user_id', 80)->comment('第三方平台的用户唯一标识');
			$table->smallInteger('oauth_id')->unsigned()->comment('oauth表关联平台id');
			$table->integer('user_id')->unsigned()->index('user_id')->comment('系统内部的用户id');
			$table->dateTime('datetime')->comment('绑定时间');
			$table->index(['oauth_user_id','oauth_id'], 'oauth_user_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('oauth_user');
	}

}
