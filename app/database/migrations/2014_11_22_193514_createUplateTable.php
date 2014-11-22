<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUplateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('uplate', function($t) {
                $t->increments('ID');
                $t->integer('studentID')->nullable()->unsigned();
                $t->string('svrha', 255);
                $t->float('iznos');
                
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
		Schema::drop("uplate");
	}

}
