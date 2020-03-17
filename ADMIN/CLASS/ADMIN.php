<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'hackerzdom');


class ADMIN
	{
		function __construct()
		{
			$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
			$this->dbh=$con;
				if (mysqli_connect_errno())
					{
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
 					}
		}
		public function add_login($Username,$Password,$type)
			{
				$result=mysqli_query($this->dbh,"INSERT INTO `login`(`email`, `password`, `role`) VALUES ('$Username','$Password','$type')");
				return $result;
			}
		public function approval_details()
			{
				$result=mysqli_query($this->dbh,"SELECT * FROM `approvals` order by 'content id'");
				return $result;

			}
		public function condev_details()
		{
			$result=mysqli_query($this->dbh,"SELECT * FROM `content_developer` order by developer_id");
			return $result;

		}

	}
?>