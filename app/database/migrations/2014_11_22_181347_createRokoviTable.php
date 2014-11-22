<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRokoviTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('rokovi',function($t){
                $t->increments('ID');
                $t->string('naziv');
                $t->date('pocetak');
                $t->date('kraj');
                
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
            Schema::drop('rokovi');
	}

}
