<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIwebshopSuggestionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('suggestion', function(Blueprint $table)
		{
			$table->foreign('user_id', 'iwebshop_suggestion_ibfk_1')->references('id')->on('iwebshop_user')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('suggestion', function(Blueprint $table)
		{
			$table->dropForeign('iwebshop_suggestion_ibfk_1');
		});
	}

}
