<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFreightCompanyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('freight_company', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('freight_type')->comment('货运类型');
			$table->string('freight_name')->comment('货运公司名称');
			$table->string('url')->comment('网址');
			$table->smallInteger('sort')->default(99)->index('sort')->comment('排序');
			$table->boolean('is_del')->default(0)->comment('0未删除1删除');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('freight_company');
	}

}
