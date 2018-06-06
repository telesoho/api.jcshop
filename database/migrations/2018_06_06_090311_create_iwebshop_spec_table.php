<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopSpecTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('spec', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 50)->comment('规格名称');
			$table->text('value', 65535)->nullable()->comment('规格值');
			$table->boolean('type')->default(1)->comment('显示类型 1文字 2图片');
			$table->string('note')->nullable()->comment('备注说明');
			$table->boolean('is_del')->nullable()->default(0)->index('is_del')->comment('是否删除1删除');
			$table->integer('seller_id')->nullable()->default(0)->index('seller_id')->comment('商家ID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_spec');
	}

}
