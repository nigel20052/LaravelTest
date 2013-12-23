<?php 
class ActivitieTableSeeder extends Seeder {

    public function run() {
        
        DB::table('activities')->truncate();
        
        //simulate some projects
        for($i=1;$i<6;$i++) {
            for($j=1;$j<6;$j++) {
                Activitie::create(array(
                    //'id' => $i,
                    'project_id' => $i,
                    'description' => "Actividad ".$j."",
                    'trace_tool' => 1,
                ));
            } //end for
        }//end for
        
        
    }
}

?>