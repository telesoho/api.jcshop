<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('category', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id')->comment('分类ID');
			$table->string('name', 50)->comment('分类名称');
			$table->integer('parent_id')->unsigned()->comment('父分类ID');
			$table->smallInteger('sort')->default(0)->index('sort')->comment('排序');
			$table->boolean('visibility')->default(1)->comment('首页是否显示 1显示 0 不显示');
			$table->string('keywords')->nullable()->comment('SEO关键词和检索关键词');
			$table->string('descript')->nullable()->comment('SEO描述');
			$table->string('title')->nullable()->comment('SEO标题title');
			$table->integer('seller_id')->unsigned()->default(0)->index('seller_id')->comment('商家ID');
			$table->text('image', 65535)->nullable()->comment('分类的图片。两种。');
			$table->text('banner_image', 65535)->nullable()->comment('分类的banner图片');
			$table->index(['parent_id','visibility'], 'parent_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('category');
	}

}
