<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuideTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('guide', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->smallInteger('order')->unsigned()->primary()->comment('排序');
			$table->string('name')->comment('导航名字');
			$table->string('link')->comment('链接地址');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('guide');
	}

}
