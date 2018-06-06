<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopKeywordTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('keyword', function(Blueprint $table)
		{
			$table->string('word', 15)->comment('关键词');
			$table->integer('goods_nums')->default(1)->comment('产品数量');
			$table->boolean('hot')->default(0)->index('hot')->comment('是否为热门');
			$table->smallInteger('order')->default(99)->index('order')->comment('关键词排序');
			$table->integer('id', true);
			$table->integer('num')->unsigned()->default(0)->comment('搜索次数');
			$table->primary(['id','word']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_keyword');
	}

}
