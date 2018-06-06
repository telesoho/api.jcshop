<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopAddressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('address', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->index('user_id')->comment('用户ID');
			$table->string('accept_name', 20)->comment('收货人姓名');
			$table->string('zip', 6)->nullable()->comment('邮编');
			$table->string('telphone', 20)->nullable()->comment('联系电话');
			$table->integer('country')->unsigned()->nullable()->comment('国ID');
			$table->integer('province')->unsigned()->comment('省ID');
			$table->integer('city')->unsigned()->comment('市ID');
			$table->integer('area')->unsigned()->comment('区ID');
			$table->string('address', 250)->comment('收货地址');
			$table->string('mobile', 20)->nullable()->comment('手机');
			$table->boolean('is_default')->default(0)->comment('是否默认,0:为非默认,1:默认');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_address');
	}

}
