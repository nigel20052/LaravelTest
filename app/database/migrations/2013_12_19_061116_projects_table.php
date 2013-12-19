<?php

use Illuminate\Database\Migrations\Migration;

class ProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function($table)
    	{
			$table->increments('id')->unique();
    	    $table->string('project_code');
    	    $table->string('description');
    	    $table->string('hold_id');
    	    $table->date('planned_start');
    	    $table->date('planned_end');
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
		Schema::drop('projects');
	}

}