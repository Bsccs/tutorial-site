<?php
// inlude("payment.php")

class admin /*implements payment*/
 {
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


        
    }

    public function approve_dev($approve_id) {
        $result=mysqli_query($this->connection,"UPDATE `content_developer` SET admin_aproved='1' WHERE developer_id='$approve_id'");
             return $result;


              
    }


    public function pay_extra() {
        // TODO implement here
    }


    public function add_inspector($email,$Password,$type,$name) {
    					

    	     $result=mysqli_query($this->connection,"INSERT INTO `login`(`email`, `password`, `role`) VALUES ('$email','$Password','$type')");
             $login_id=mysqli_insert_id($this->connection);
             $result=mysqli_query($this->connection,"INSERT INTO `inspector`(`login_id`, `name2`) VALUES ('$login_id','$name')");

		     return $result;
        


    }

    public function add_expertise($expertise,$developer_id) {
    	$result=mysqli_query($this->connection,"UPDATE `content_developer` SET expertise='$expertise'WHERE developer_id='$developer_id'");
			return $result;


    }

    public function stud_details() {
			$result=mysqli_query($this->connection,"SELECT * FROM `student_details` order by student_id");
			return $result;
        
    }

    public function view_inspctr_details()
    {
    	$result=mysqli_query($this->connection,"SELECT `login`.`email`,name2,`login`.`login_id` FROM `inspector` JOIN `login` ON `login`.`login_id`=`inspector`.`login_id`");
			return $result;
        

       
    }

    public function condev_details() 
		{
			$result=mysqli_query($this->connection,"SELECT * FROM `content_developer` order by developer_id");
			return $result;

		}
    

    public function website_activity() {
        // TODO implement here

    }

    public function view_keywords() {
        	{
			$result=mysqli_query($this->connection,"SELECT * FROM `search`");
			return $result;
		    }
    }

    public function payment_details() {
    $result=mysqli_query($this->connection,"SELECT `trans_num`, `login_id`, `content_id`, `trans_date`, `trans_amount`,`login`.`email` FROM `payment` JOIN `login` WHERE `login`.`login_id`=`payment`.`login_id` ");
        return $result;
    }

   

}