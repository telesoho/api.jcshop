<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateModelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('model', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id')->comment('模型ID');
			$table->string('name', 50)->comment('模型名称');
			$table->text('spec_ids', 65535)->nullable()->comment('规格ID逗号分隔');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('model');
	}

}
