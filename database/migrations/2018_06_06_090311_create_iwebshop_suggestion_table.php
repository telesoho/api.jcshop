<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopSuggestionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('suggestion', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->index('user_id')->comment('用户ID');
			$table->string('title')->comment('标题');
			$table->text('content', 65535)->comment('内容');
			$table->dateTime('time')->nullable()->comment('提问时间');
			$table->integer('admin_id')->unsigned()->nullable()->comment('管理员ID');
			$table->text('re_content', 65535)->nullable()->comment('回复内容');
			$table->dateTime('re_time')->nullable()->comment('回复时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_suggestion');
	}

}
