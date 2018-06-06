<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopArticleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('article', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 250)->comment('标题');
			$table->text('content', 65535)->comment('内容');
			$table->integer('category_id')->unsigned()->comment('分类ID');
			$table->dateTime('create_time')->comment('发布时间');
			$table->string('keywords')->nullable()->comment('关键词');
			$table->string('description')->nullable()->comment('描述');
			$table->boolean('visibility')->default(1)->index('visibility')->comment('是否显示 0:不显示,1:显示');
			$table->boolean('top')->default(0)->comment('置顶');
			$table->integer('sort')->default(0)->index('sort')->comment('排序');
			$table->boolean('style')->default(0)->comment('标题字体 0正常 1粗体,2斜体');
			$table->string('color', 7)->nullable()->comment('标题颜色');
			$table->string('image')->nullable();
			$table->integer('visit_num')->nullable()->default(0)->comment('访问次数');
			$table->integer('favorite')->nullable()->default(0);
			$table->index(['category_id','visibility'], 'category_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_article');
	}

}
