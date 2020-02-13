<?php

class content
{

    public $content_name;

    public $test_number;

    public $Attribute1;

    public $connection;

      function __construct($connection) 
      {
        $this->connection = $connection;
      }


    public function add_video($embedvideo,$depth,$tags) {
        // TODO implement here

    $keyword_id=0;
    $developer_id=0;
    $sql="INSERT INTO 'content' VALUES(NULL,'$embedvideo','0','','$depth','$keyword_id','0','$developer_id','','0')";
    $result=mysqli_query($this->connection,$sql);
        if($result)
        {echo "successfully inserted";}
    }

    public function add_text() {
        // TODO implement here
    }

    public function add_test() {
        // TODO implement here
    }

    public function view_content() {
        // TODO implement here
    }

    public function remove_content() {
        // TODO implement here
    }

}