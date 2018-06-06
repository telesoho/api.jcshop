<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopAdManageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ad_manage', function(Blueprint $table)
		{
			$table->increments('id')->comment('广告ID');
			$table->string('name', 50)->comment('广告名称');
			$table->boolean('type')->comment('广告类型 1:img 2:flash 3:文字 4:code');
			$table->integer('position_id')->unsigned()->nullable()->default(0)->index('position_id')->comment('广告位ID');
			$table->string('link')->nullable()->comment('链接地址');
			$table->smallInteger('order')->default(0)->index('order')->comment('排列顺序');
			$table->date('start_time')->nullable()->comment('开始时间');
			$table->date('end_time')->nullable()->comment('结束时间');
			$table->text('content', 65535)->nullable()->comment('图片、flash路径，文字，code等');
			$table->string('description')->nullable()->comment('描述');
			$table->integer('goods_cat_id')->unsigned()->nullable()->default(0)->comment('绑定的商品分类ID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_ad_manage');
	}

}
