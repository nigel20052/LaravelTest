<?php 
class ProjectTableSeeder extends Seeder {

    public function run() {
        
        DB::table('projects')->truncate();
        
        //simulate some projects
        for($i=1;$i<6;$i++) {
            Project::create(array('id' => $i,'project_code' => "1705$i",'description' => "RA$i VOICE RECOGNITION",'hold_id' => "35$i", 'created_at'=>new Datetime));
        }//end for
        
        
    }
}

?>