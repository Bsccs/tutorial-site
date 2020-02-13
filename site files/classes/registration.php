<?php

class registration{

    public $insp_name;

    public $dev_name;

    public $stud_name;

    public $connection;


    public function __construct($connection) {

        $this->connection = $connection;

    }



    public function add_contentdev($name,$email,$expertise,$files) {
        // TODO implement here

        $target_path="uploads/";
        $target_path=$target_path.basename($_FILES['document']['name']);
    //  echo $target_path;
        if(move_uploaded_file($_FILES["document"]["tmp_name"],$target_path)) 
        {
            /* $name=$_POST['name'];
             $email=$_POST["email"];
             $expertise=$_POST['expertise'];*/
             $sql="INSERT INTO `content_developer` VALUES (NULL, '$name', '$email', '$target_path', '$expertise', '0')";
            $result=mysqli_query($connection,$sql);
            if($result)
            { 
                echo " successfully registered";
            }
            
        }
      //  echo "<img src='$target_path' height='280' width='320>";  display failure

          
    }

    public function add_student() {
        // TODO implement here
    }

    public function send_otp() {
        // TODO implement here
    }   

    public function validate_email() {
        // TODO implement here
    }

}