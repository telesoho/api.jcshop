<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopRelationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('relation', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('goods_id')->unsigned()->comment('商品ID');
			$table->integer('article_id')->unsigned()->index('article_id')->comment('文章ID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_relation');
	}

}
