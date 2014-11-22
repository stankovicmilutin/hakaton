<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmeroviTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('smerovi',function($t){
                $t->increments('ID');
                $t->string('naziv');
                $t->string('tip');
                
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
            Schema::drop('smerovi');
	}

}
