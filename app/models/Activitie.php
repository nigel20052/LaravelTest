<?php
use LaravelBook\Ardent\Ardent;
class Activitie extends Ardent
{
	protected $table = 'activities';

	public static $relationsData = array(
    'project'  => array(self::BELONGS_TO, 'Projects','foreignKey' =>'project_id'),
  );

}

?>