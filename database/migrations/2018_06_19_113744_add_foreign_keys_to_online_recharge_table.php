<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOnlineRechargeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('online_recharge', function(Blueprint $table)
		{
			$table->foreign('user_id', 'iwebshop_online_recharge_ibfk_1')->references('id')->on('user')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('online_recharge', function(Blueprint $table)
		{
			$table->dropForeign('iwebshop_online_recharge_ibfk_1');
		});
	}

}
