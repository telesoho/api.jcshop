<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIwebshopAdminRoleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admin_role', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 20)->comment('角色名称');
			$table->text('rights', 65535)->nullable()->comment('权限');
			$table->boolean('is_del')->default(0)->comment('删除状态 1删除,0正常');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iwebshop_admin_role');
	}

}
