<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserInfos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('user_infos', function(Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id');
			$table->string('nickname');
			$table->string('city');
			$table->string('signature');
			$table->text('introduction');
			$table->timestamps();
        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	    Schema::drop('user_infos');
	}

}
