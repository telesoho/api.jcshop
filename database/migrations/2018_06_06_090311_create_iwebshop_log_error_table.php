<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopLogErrorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('log_error', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('file', 200)->comment('文件');
			$table->smallInteger('line')->unsigned()->comment('出错文件行数');
			$table->string('content')->comment('内容');
			$table->dateTime('datetime')->comment('时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_log_error');
	}

}
