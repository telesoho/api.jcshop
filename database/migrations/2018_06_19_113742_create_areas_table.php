<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAreasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('areas', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('area_id');
			$table->integer('parent_id')->unsigned()->index('parent_id')->comment('上一级的id值');
			$table->string('area_name', 50)->comment('地区名称');
			$table->integer('sort')->unsigned()->default(99)->index('sort')->comment('排序');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('areas');
	}

}
