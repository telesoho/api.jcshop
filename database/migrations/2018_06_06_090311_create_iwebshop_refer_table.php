<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopReferTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('refer', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('question', 65535)->comment('咨询内容');
			$table->integer('user_id')->unsigned()->nullable()->index('user_id')->comment('咨询人会员ID，非会员为空');
			$table->integer('goods_id')->unsigned()->index('goods_id')->comment('产品ID');
			$table->text('answer', 65535)->nullable()->comment('回复内容');
			$table->integer('admin_id')->unsigned()->nullable()->default(0)->comment('回复的管理员ID');
			$table->integer('seller_id')->unsigned()->nullable()->default(0)->comment('回复的商户ID');
			$table->boolean('status')->nullable()->default(0)->comment('0：待回复 1已回复');
			$table->dateTime('time')->nullable()->comment('咨询时间');
			$table->dateTime('reply_time')->nullable()->comment('回复时间');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_refer');
	}

}
