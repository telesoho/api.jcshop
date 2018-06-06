<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopArticleCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('article_category', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 50)->comment('分类名称');
			$table->integer('parent_id')->unsigned()->default(0)->index('parent_id')->comment('父分类');
			$table->boolean('issys')->default(0)->index('issys')->comment('系统分类');
			$table->integer('sort')->default(0)->index('sort')->comment('排序');
			$table->string('path')->nullable()->comment('路径');
			$table->string('icon')->nullable()->comment('文章分类icon');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_article_category');
	}

}
