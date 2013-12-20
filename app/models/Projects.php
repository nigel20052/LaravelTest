<?php
use LaravelBook\Ardent\Ardent;
class Projects extends Ardent
{
	protected $table = 'projects';

	public static $relationsData = array(
    'activities'  => array(self::HAS_MANY, 'Activities','foreignKey' =>'project_id'),
  );

public function activities()
 {
  return $this->hasMany('Activities','project_id')->get();
 }

}

?>