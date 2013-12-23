<?php
use LaravelBook\Ardent\Ardent;
class Project extends Ardent
{
	protected $table = 'projects';

	public static $relationsData = array(
    'activitie'  => array(self::HAS_MANY, 'Activitie','foreignKey' =>'project_id'),
  );

public function activities()
 {
  return $this->hasMany('Activitie','project_id')->get();
 }

}

?>