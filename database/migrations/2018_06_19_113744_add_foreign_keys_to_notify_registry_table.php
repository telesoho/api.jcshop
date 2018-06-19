<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToNotifyRegistryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('notify_registry', function(Blueprint $table)
		{
			$table->foreign('goods_id', 'iwebshop_notify_registry_ibfk_1')->references('id')->on('goods')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('notify_registry', function(Blueprint $table)
		{
			$table->dropForeign('iwebshop_notify_registry_ibfk_1');
		});
	}

}
