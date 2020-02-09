<?php
// inlude("payment.php")



class admin /*implements payment*/ {
    public $connection;
      function __construct($connection) {
        $this->connection = $connection;
      }
   
    public $dev_id;

    public $experise_text;

    public $insp_name;


  /*  private function__construct() {
    }*/

    public function pay() {
        // TODO implement here
    }

    public function approve_dev() {
        // TODO implement here
              
    }


    public function pay_extra() {
        // TODO implement here
    }


    public function add_inspector($name,$email) {
        // TODO implement here
        $insp_name=$name;
        echo $insp_name;
        $sql="INSERT INTO `inspector` VALUES (NULL,'$email','$name');";
        $result=mysqli_query($this->connection,$sql);
        if($result)
        {echo "successfully inserted";}/*INSERT INTO inspector VALUES(NULL,$email,$name)*/

    }

    public function add_expertise() {
        // TODO implement here
    }

    public function stud_details() {
        // TODO implement here
    }

    public function view_inspctr_details()
    {
        // TODO implement here
        echo "hii";
        $sql = "SELECT inspector_id,email,name FROM inspector";
        $result1 = mysqli_query($this->connection, $sql);

        if (mysqli_num_rows($result1) > 0)
        {
            echo "<ol>";
            while($row = mysqli_fetch_assoc($result1)) 
            {
                echo "<li> Name: " . $row["name"]. " ... Email " . $row["email"]. "</li><br>";
                $sql2 = "SELECT expertise FROM insp_expertise WHERE inspector_id='".$row["inspector_id"]."'";
                $result2 = mysqli_query($this->connection, $sql2);
                if (mysqli_num_rows($result1) > 0) {
                echo "<ol type='i'>";
                while($row = mysqli_fetch_assoc($result2)) {
                echo "<li> ".$row["expertise"]."</li>";
                }
                echo "</ol>";
                } else {
                echo "0 results";
                }


            }
            echo "<ol>";
        }
       
    }

    public function condev_details() {
        // TODO implement here
    }

    public function website_activity() {
        // TODO implement here

    }

    public function view_keywords() {
        // TODO implement here
    }

    public function payment_details() {
        // TODO implement here
    }

   

}