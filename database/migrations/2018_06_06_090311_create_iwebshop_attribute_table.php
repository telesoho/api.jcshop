<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopAttributeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attribute', function(Blueprint $table)
		{
			$table->increments('id')->comment('属性ID');
			$table->integer('model_id')->unsigned()->nullable()->comment('模型ID');
			$table->boolean('type')->nullable()->comment('输入控件的类型,1:单选,2:复选,3:下拉,4:输入框');
			$table->string('name', 50)->nullable()->comment('名称');
			$table->text('value', 65535)->nullable()->comment('属性值(逗号分隔)');
			$table->boolean('search')->default(0)->comment('是否支持搜索0不支持1支持');
			$table->index(['model_id','search'], 'model_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_attribute');
	}

}
