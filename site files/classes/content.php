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


    public function add_video($embedvideo,$depth,$tags) 
    {
        // TODO implement here
      //  $conid;
    $developer_id=1;
    $sql="INSERT INTO `content` VALUES (NULL, '$embedvideo', '0', '$depth', '0', '0', '$developer_id', '0', '0');";
    $result=mysqli_query($this->connection,$sql);
    if($result)
    {//echo "successfully inserted"; 
        echo "<script>alert('added video successfully');</script>";
        }
    $sql="SELECT MAX(content_id) from content;";
    $result=mysqli_query($this->connection,$sql);
    if(mysqli_num_rows($result) > 0) 
    {
    $row = mysqli_fetch_assoc($result);
    $conid=$row["MAX(content_id)"];
    }
 //echo " yes $conid";
   // print_r($tags);
    // echo sizeof($tags);

    if($tags['0']!=NULL) 
    {
      //  echo " t1"; echo $tags[0];
    $sql="INSERT INTO `content_keyword` VALUES ('$conid', '$tags[0]');";
    $result=mysqli_query($this->connection,$sql);
    }
    if($tags['1']!=NULL) 
    {//echo " t2";
    $sql="INSERT INTO `content_keyword` VALUES ('$conid', '$tags[1]');";
    $result=mysqli_query($this->connection,$sql);
    }
   if($tags['2']!=NULL)  
    {//echo "t3";
    $sql="INSERT INTO `content_keyword` VALUES ('$conid', '$tags[2]');";
    $result=mysqli_query($this->connection,$sql);
    }
    if($tags['3']!=NULL)  
    {
    $sql="INSERT INTO `content_keyword` VALUES ('$conid', '$tags[3]');";
    $result=mysqli_query($this->connection,$sql);
    }
    header('Location: sitefiles/addvideo.html');

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