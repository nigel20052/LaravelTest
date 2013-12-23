<?php

use Illuminate\Database\Migrations\Migration;

class ActivitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activities', function($table)
    	{
			$table->increments('id')->unique();
    	    $table->integer('project_id');
    	    $table->text('description');
    	    $table->boolean('trace_tool');
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
		Schema::drop('activities');
	}

}