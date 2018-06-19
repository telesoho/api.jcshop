<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTakeselfTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('takeself', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('name')->comment('名称');
			$table->smallInteger('sort')->default(99)->comment('排序');
			$table->integer('province')->comment('省份ID');
			$table->integer('city')->comment('城市ID');
			$table->integer('area')->comment('地区ID');
			$table->string('address')->comment('地址');
			$table->string('phone', 30)->nullable()->comment('座机号码');
			$table->string('mobile', 30)->nullable()->comment('手机号码');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('takeself');
	}

}
