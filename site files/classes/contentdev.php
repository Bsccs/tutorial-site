<?php

class contentdev {

    // public $suggestion;
	public $connection;
    public function __construct($connection) {
    	$this->connection=$connection;
    }

    public function suggest($suggestion,$id) {
    	
        //echo $suggestion;
        $date=date('Y/m/d');
        //echo $date;
     //   $id=$_SESSION['id'];
        //	$id=1;

        $sql="INSERT INTO suggestion VALUES('','$id','$suggestion','$date')";
        $result=mysqli_query($this->connection,$sql);
        if($result)
        {	
        	echo "Successfuly updated <br>";
        }
        else
        {
        	echo "There was an error please try after some time <br>";
        }
    }



}