<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdPositionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ad_position', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id')->comment('广告位ID');
			$table->string('name', 30)->comment('广告位名称');
			$table->string('width')->comment('广告位宽度');
			$table->string('height')->comment('广告位高度');
			$table->boolean('fashion')->comment('1:轮显;2:随即');
			$table->boolean('status')->default(0)->comment('1:开启; 0: 关闭');
			$table->index(['name','status'], 'name');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ad_position');
	}

}
