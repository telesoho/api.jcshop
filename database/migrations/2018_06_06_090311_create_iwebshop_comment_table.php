<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopCommentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comment', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('goods_id')->unsigned()->index('goods_id')->comment('商品ID');
			$table->string('order_no', 20)->comment('订单编号');
			$table->integer('user_id')->unsigned()->comment('用户ID');
			$table->dateTime('time')->comment('购买时间');
			$table->date('comment_time')->comment('评论时间');
			$table->text('contents', 65535)->nullable()->comment('评论内容');
			$table->text('recontents', 65535)->nullable()->comment('回复评论内容');
			$table->date('recomment_time')->comment('回复评论时间');
			$table->boolean('point')->default(0)->comment('评论的分数');
			$table->boolean('status')->default(0)->comment('评论状态：0：未评论 1:已评论');
			$table->integer('seller_id')->unsigned()->default(0)->comment('商家ID');
			$table->index(['user_id','status'], 'user_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_comment');
	}

}
