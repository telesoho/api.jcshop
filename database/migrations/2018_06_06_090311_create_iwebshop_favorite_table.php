<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopFavoriteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('favorite', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->index('user_id')->comment('用户ID');
			$table->integer('rid')->unsigned()->index('rid')->comment('商品ID');
			$table->dateTime('time')->comment('收藏时间');
			$table->string('summary')->nullable()->comment('备注');
			$table->integer('cat_id')->unsigned()->index('cat_id')->comment('商品分类');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_favorite');
	}

}
