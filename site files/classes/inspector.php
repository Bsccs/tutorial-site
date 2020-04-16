<?php

class inspector {

    public $expertise_text;



    public function __construct($connection) {
        $this->connection = $connection;
    }

    public function add_expertise() {
        // TODO implement here
    }

    public function approve_content($approve_id) {
    	
    	$result=mysqli_query($this->connection,"UPDATE `content` SET inspector_approved='1' WHERE content_id='$approve_id'");
        
             return $result;
    }

}