<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRasporedIspita extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('raspored_ispita',function($t){
                $t->increments('ID');
                $t->integer('rokID')->nullable()->unsigned();
                $t->integer('predmetID')->nullable()->unsigned();
                $t->date('datum');
                $t->string('vreme');
                
                $t->timestamps();
                
                $t->foreign('rokID')
                    ->references('ID')->on('rokovi')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
                
                $t->foreign('predmetID')
                    ->references('ID')->on('predmeti')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
            Schema::drop('raspored_ispita');
	}

}
