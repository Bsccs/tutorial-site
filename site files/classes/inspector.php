<?php

class inspector {

    public $expertise_text;



    public function __construct() {
    }

    public function add_expertise() {
        // TODO implement here
    }

    public function approve_content() {
    	
    	$result=mysqli_query($this->connection,"UPDATE `content` SET inspector_approved='1' WHERE content_id='$approve_id'");
             return $result;
    }

}