<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHelpCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('help_category', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('name', 10)->comment('标题');
			$table->smallInteger('sort')->index('sort')->comment('顺序');
			$table->boolean('position_left')->index('position_left')->comment('是否在帮助内容、列表页面的左侧显示');
			$table->boolean('position_foot')->index('position_foot')->comment('是否在整站页面下方显示');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('help_category');
	}

}
