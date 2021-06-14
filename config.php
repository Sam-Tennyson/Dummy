<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "dummy";

	$mysqli = mysqli_connect($dbhost, $dbuser, $dbpass,  $dbname,);

	if (!$mysqli)
	{
		echo "NOT Connected";
	}
	else{
		echo "Connected";		
	}
?>