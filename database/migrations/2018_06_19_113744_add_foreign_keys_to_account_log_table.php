<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAccountLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('account_log', function(Blueprint $table)
		{
			$table->foreign('user_id', 'iwebshop_account_log_ibfk_1')->references('id')->on('user')->onUpdate('SET NULL')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('account_log', function(Blueprint $table)
		{
			$table->dropForeign('iwebshop_account_log_ibfk_1');
		});
	}

}
