<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIwebshopDeliveryDocTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('delivery_doc', function(Blueprint $table)
		{
			$table->foreign('freight_id', 'iwebshop_delivery_doc_ibfk_1')->references('id')->on('iwebshop_freight_company')->onUpdate('SET NULL')->onDelete('SET NULL');
			$table->foreign('order_id', 'iwebshop_delivery_doc_ibfk_2')->references('id')->on('iwebshop_order')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('delivery_doc', function(Blueprint $table)
		{
			$table->dropForeign('iwebshop_delivery_doc_ibfk_1');
			$table->dropForeign('iwebshop_delivery_doc_ibfk_2');
		});
	}

}
