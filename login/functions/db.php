
<?php

$connection=mysqli_connect("localhost","root","","hackerzdom");
function row_count($result) /*to count the  number of rows*/
{
	return mysqli_num_rows($result);

}



function escape($string)		/*clean our data-escapping data*/
{
	global $connection;

	return mysqli_real_escape_string($connection,$string);

}


function query($query)  	  /*pass the query*/
{
	global $connection;

	return mysqli_query($connection,$query);


}

function confirm($result)  /*to confirm that all the datas in database is correct*/
{
	global $connection;

	if(!$result)
	{
		die("query failed".mysqli_error($connection));
	}
}

function fetch_array($result) /*fetching data from array*/
{
	global $connection;
	return mysqli_fetch_array($result);

}



?>