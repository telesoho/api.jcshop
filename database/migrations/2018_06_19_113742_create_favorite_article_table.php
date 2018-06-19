<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFavoriteArticleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('favorite_article', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->integer('user_id')->unsigned()->index('user_id')->comment('用户ID');
			$table->integer('aid')->unsigned()->index('aid')->comment('专辑ID');
			$table->dateTime('time')->comment('收藏时间');
			$table->string('summary')->nullable()->comment('备注');
			$table->integer('cat_id')->unsigned()->index('cat_id')->comment('专辑分类');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('favorite_article');
	}

}
