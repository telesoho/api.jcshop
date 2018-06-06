<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIwebshopHelpTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('help', function(Blueprint $table)
		{
			$table->foreign('cat_id', 'iwebshop_help_ibfk_1')->references('id')->on('iwebshop_help_category')->onUpdate('SET NULL')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('help', function(Blueprint $table)
		{
			$table->dropForeign('iwebshop_help_ibfk_1');
		});
	}

}
