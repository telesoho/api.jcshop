<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFavoriteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('favorite', function(Blueprint $table)
		{
			$table->foreign('user_id', 'iwebshop_favorite_ibfk_1')->references('id')->on('user')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('rid', 'iwebshop_favorite_ibfk_2')->references('id')->on('goods')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('favorite', function(Blueprint $table)
		{
			$table->dropForeign('iwebshop_favorite_ibfk_1');
			$table->dropForeign('iwebshop_favorite_ibfk_2');
		});
	}

}
