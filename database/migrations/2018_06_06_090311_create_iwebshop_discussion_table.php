<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopDiscussionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('discussion', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('goods_id')->unsigned()->index('goods_id')->comment('商品ID');
			$table->integer('user_id')->unsigned()->index('user_id')->comment('用户ID');
			$table->dateTime('time')->comment('评论时间');
			$table->text('contents', 65535)->nullable()->comment('评论内容');
			$table->boolean('is_check')->default(0)->comment('审核状态,0未审核 1已审核');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_discussion');
	}

}
