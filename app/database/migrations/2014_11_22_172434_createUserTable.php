<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('users',function($t){
                $t->increments('ID');
                $t->string('username',80);
                $t->string('password',80);
                $t->string('email',80);
                $t->tinyInteger('level');
                
                $t->timestamps();
                        
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop("users");
	}

}
