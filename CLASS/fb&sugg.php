<?php

class fb&sugg 
{

    public $feedbk text;

    public $connection;
    
      function __construct($connection) 
      {
        $this->connection = $connection;

      }

    public function view feedback() {
        // TODO implement here
    }

    public function view suggestion() {
        // TODO implement here
    }

    public function add_feedback($feedback) {
        // TODO implement here
        $_SESSION['sessid']='01';
        $sql="INSERT INTO 'stud_feedback' VALUES (NULL,'456',) WHERE student_id='".$_SESSION['sessid']."'";


    }

    public function add suggestion() {
        // TODO implement here
    }

}