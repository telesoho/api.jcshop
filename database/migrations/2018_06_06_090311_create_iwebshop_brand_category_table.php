<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopBrandCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('brand_category', function(Blueprint $table)
		{
			$table->increments('id')->comment('分类ID');
			$table->string('name')->comment('分类名称');
			$table->integer('goods_category_id')->unsigned()->default(0)->index('goods_category_id')->comment('商品分类ID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_brand_category');
	}

}
