<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopBrandTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('brand', function(Blueprint $table)
		{
			$table->increments('id')->comment('品牌ID');
			$table->string('name')->comment('品牌名称');
			$table->string('logo')->nullable()->comment('logo地址');
			$table->string('url')->nullable()->comment('网址');
			$table->text('description', 65535)->nullable()->comment('描述');
			$table->smallInteger('sort')->default(0)->index('sort')->comment('排序');
			$table->string('category_ids')->nullable()->index('category_ids')->comment('品牌分类,逗号分割id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_brand');
	}

}
