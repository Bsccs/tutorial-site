<?php

class student /*implements payment*/ {

    public $test_num;
    public $connection;


    public function __construct($connection) {
     $this->connection = $connection;
    }

    public function pay() {
        // TODO implement here
    }

    public function attend_test() {
        // TODO implement here
    }

    public function rate() {
        // TODO implement here
    }

 public function buy($conid){
    $id=$_SESSION['id'];
    
    $sql="INSERT INTO student_log VALUES('$id','$conid','','','','')";
    $result=mysqli_query($this->connection,$sql);
    if($result)
    {
    unset($_SESSION['temp6']);
    echo "<script>alert('You have bought this video');</script>";
    }

    }

}