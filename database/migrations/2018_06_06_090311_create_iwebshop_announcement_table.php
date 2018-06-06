<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopAnnouncementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('announcement', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title')->comment('公告标题');
			$table->text('content', 65535)->nullable()->comment('公告内容');
			$table->dateTime('time')->comment('发布时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_announcement');
	}

}
