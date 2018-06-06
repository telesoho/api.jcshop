<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIwebshopAdManageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ad_manage', function(Blueprint $table)
		{
			$table->foreign('position_id', 'iwebshop_ad_manage_ibfk_1')->references('id')->on('iwebshop_ad_position')->onUpdate('SET NULL')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ad_manage', function(Blueprint $table)
		{
			$table->dropForeign('iwebshop_ad_manage_ibfk_1');
		});
	}

}
