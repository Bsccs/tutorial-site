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


    public function add_video($embedvideo,$depth,$tags,$topics) 
    {
        // TODO implement here
      //  $conid;
    $developer_id=1;
    $sql="INSERT INTO `content` VALUES (NULL, '$embedvideo', '0', '$depth', '0', '$developer_id', '0', '0');";
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
    $sql="INSERT INTO `content_keyword` VALUES (NULL,'$conid', '$tags[0]');";
    $result=mysqli_query($this->connection,$sql);
    }
    if($tags['1']!=NULL) 
    {//echo " t2";
    $sql="INSERT INTO `content_keyword` VALUES (NULL,'$conid', '$tags[1]');";
    $result=mysqli_query($this->connection,$sql);
    }
   if($tags['2']!=NULL)  
    {//echo "t3";
    $sql="INSERT INTO `content_keyword` VALUES (NULL,'$conid', '$tags[2]');";
    $result=mysqli_query($this->connection,$sql);
    }
    if($tags['3']!=NULL)  
    {
    $sql="INSERT INTO `content_keyword` VALUES (NULL,'$conid', '$tags[3]');";
    $result=mysqli_query($this->connection,$sql);
    }
 //   header('Location: ../addvideo.html');

    }

    public function add_text() {
        // TODO implement here
    }

    public function add_test($var,$conid,$number) {
      
   // echo "hii";
    //   echo $number;
        for($i=1;$i<$number;$i++) 
        { 
         $q=$var['q'."$i"];
         $opa=$var['opa'."$i"];
         $opb=$var['opb'."$i"];
         $opc=$var['opc'."$i"];
         $opd=$var['opd'."$i"];
         $crct=$var['crct'."$i"];
         $difficulty=$var['difficulty'."$i"];
//echo $q;
         // find test number
         $sql="SELECT MAX(test_number) from tests where content_id=$conid;";
         echo $sql;
           $result=mysqli_query($this->connection,$sql);
            if(mysqli_num_rows($result) > 0) 
            {
           $row = mysqli_fetch_assoc($result);
           $testnum=$row["MAX(test_number)"];
            }

           $sql="INSERT INTO tests VALUES ($testnum,$conid,$i,'$q','$opa','$opb','$opc','$opd', '$crct',$difficulty);";
           $result=mysqli_query($this->connection,$sql);
           if($result)
           { $count=$count+1; 
           }

        }

        if($count=$number)
        {
          echo "<script>alert('added video successfully');</script>";
        }


    }

    public function view_content() {

                if($_SESSION['role']=='student')
            {
                $sql="SELECT content_name FROM content WHERE inspector_approved=1 AND content_id IN (SELECT content_id FROM student_log WHERE content_id IN(SELECT content_id FROM student_log WHERE student_id=".$_SESSION['id']."))";
            }
            elseif ($_SESSION['role']=='admin') {
                $sql="SELECT content_name FROM content";
            }
            elseif ($_SESSION['role']=='inspector') {

              $sql="SELECT content_name FROM content WHERE inspector_approved=0 AND content_id=(SELECT content_id FROM content_keyword WHERE keyword IN (SELECT expertise FROM insp_expertise WHERE inspector_id=2))";

/*                $sql="SELECT content_id FROM content WHERE inspector_approved=0";
                $result=mysqli_query($connection,$sql);
                while($row = mysqli_fetch_assoc($result)) 
                {
                  $sql="SELECT keyword FROM content_keyword WHERE content_id=$row['content_id']";
                  while($row = mysqli_fetch_assoc($result)) 
                  { 
                    if($row['keyword']==)
                  }
                }*/
            }
            elseif ($_SESSION['role']=='con_developer') {
              # code...
            }
        return $sql;
    }

    public function remove_content() {
        // TODO implement here
    }

}