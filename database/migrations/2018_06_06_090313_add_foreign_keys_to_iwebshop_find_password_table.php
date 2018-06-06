<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIwebshopFindPasswordTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('find_password', function(Blueprint $table)
		{
			$table->foreign('user_id', 'iwebshop_find_password_ibfk_1')->references('id')->on('iwebshop_user')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('find_password', function(Blueprint $table)
		{
			$table->dropForeign('iwebshop_find_password_ibfk_1');
		});
	}

}
