<?php

class fbandsugg 
{

   // public $feedback;

    public $connection;
    
      function __construct($connection) 
      {
        $this->connection = $connection;

      }

    public function view_feedback() {
        // TODO implement here
    }

    public function view_suggestion() {
        // TODO implement here
    }

    public function add_feedback($feedback,$conid) {
        // TODO implement here
       // $_SESSION['sessid']='01';
        $sql="INSERT INTO stud_feedback VALUES('".$_SESSION['id']."','$conid','$feedback') WHERE student_id='".$_SESSION['id']."'";
        echo $sql;
        $result=mysqli_query($this->connection,$sql);
        if($result)
        {
            echo "<alert>feedback submitted</alert>";
        }


    }
/*
    public function add suggestion() {
        // TODO implement here
    }*/

}