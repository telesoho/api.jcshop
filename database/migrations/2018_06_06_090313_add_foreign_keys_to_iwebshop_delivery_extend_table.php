<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIwebshopDeliveryExtendTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('delivery_extend', function(Blueprint $table)
		{
			$table->foreign('delivery_id', 'iwebshop_delivery_extend_ibfk_1')->references('id')->on('iwebshop_delivery')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('seller_id', 'iwebshop_delivery_extend_ibfk_2')->references('id')->on('iwebshop_seller')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('delivery_extend', function(Blueprint $table)
		{
			$table->dropForeign('iwebshop_delivery_extend_ibfk_1');
			$table->dropForeign('iwebshop_delivery_extend_ibfk_2');
		});
	}

}
