<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserGroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_group', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id')->comment('用户组ID');
			$table->string('group_name', 20)->comment('组名');
			$table->decimal('discount', 15)->default(100.00)->comment('折扣率');
			$table->integer('minexp')->nullable()->comment('最小经验');
			$table->integer('maxexp')->nullable()->comment('最大经验');
			$table->string('message_ids')->nullable()->comment('消息ID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_group');
	}

}
