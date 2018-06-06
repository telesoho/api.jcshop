<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopExpresswaybillTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('expresswaybill', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 80)->comment('快递单模板名字');
			$table->text('config', 65535)->nullable()->comment('序列化的快递单结构数据');
			$table->string('background')->nullable()->comment('背景图片路径');
			$table->smallInteger('width')->unsigned()->nullable()->default(900)->comment('背景图片路径');
			$table->smallInteger('height')->unsigned()->nullable()->default(600)->comment('背景图片路径');
			$table->boolean('is_close')->default(0)->comment('状态 1关闭,0正常');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_expresswaybill');
	}

}
