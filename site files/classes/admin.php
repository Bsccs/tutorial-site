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


    public function add_inspector($Username,$Password,$type) {
    					

    	     $result=mysqli_query($this->connection,"INSERT INTO `login`(`email`, `password`, `role`) VALUES ('$Username','$Password','$type')");
		     return $result;
        


    }

    public function add_expertise() {
        // TODO implement here
    }

    public function stud_details() {
			$result=mysqli_query($this->connection,"SELECT * FROM `student_details` order by student_id");
			return $result;
        
    }

    public function view_inspctr_details()
    {
    	$result=mysqli_query($this->connection,"SELECT * FROM `inspector` order by inspector_id");
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
        // TODO implement here
    }

   

}